<?php

namespace dface\Payment\LiqPay;

use Psr\Log\LoggerInterface;

class LiqPayCallbackServer
{

	private const STATUS_BAD_REQUEST = 400;
	private const STATUS_OK = 200;

	/** @var LiqPayNotificationHandler */
	private $handler;
	/** @var LoggerInterface */
	private $logger;
	/** @var callable */
	private $settings_accessor;

	public function __construct(LiqPayNotificationHandler $handler, LoggerInterface $logger, $settings_accessor)
	{
		$this->handler = $handler;
		$this->logger = $logger;
		$this->settings_accessor = $settings_accessor;
	}

	/**
	 * Process POST request
	 * Expects input data as array ['data' => $data, 'signature' => $signature],
	 * where $data and $signature - base64-encoded strings
	 *
	 * @param array $post
	 * @return array
	 */
	public function processPost(array $post) : array
	{
		$signature_64 = $post['signature'] ?? null;
		$data_64 = $post['data'] ?? null;
		if ($signature_64 === null || $data_64 === null) {
			$this->logger->error('Invalid request: `data` and `signature` params required');
			return [self::STATUS_BAD_REQUEST, 'Bad request - provide `data` and `signature` params'];
		}
		return $this->processDataAndSignature($data_64, $signature_64);
	}

	public function processDataAndSignature(string $data_64, string $signature_64) : array
	{
		if (!$this->signValid($data_64, $signature_64)) {
			$this->logger->error('Invalid signed request');
			return [self::STATUS_BAD_REQUEST, 'Invalid sign'];
		}

		$json_req = \base64_decode($data_64);
		$structured_req = \json_decode($json_req, true);
		if ($structured_req === null) {
			$this->logger->error('Cant decode data: '.$json_req."\n".\json_last_error());
			return [self::STATUS_BAD_REQUEST, 'Cant decode data'];
		}

		try{
			$this->processNotification($structured_req);
		}catch (\InvalidArgumentException $e){
			$this->logger->error($e->getMessage());
			return [self::STATUS_BAD_REQUEST, $e->getMessage()];
		}

		return [self::STATUS_OK, ''];
	}

	private function signValid(string $data_64, string $signature_64) : bool
	{
		/** @var LiqPayApiSettings $settings */
		$settings = ($this->settings_accessor)();
		$signature_bin = \base64_decode($signature_64);
		$private_key = $settings->getPrivateKey();
		$sign_sha1 = \sha1($private_key.$data_64.$private_key, true);
		return $sign_sha1 === $signature_bin;
	}

	private function processNotification(array $request) : void
	{
		$req_to_log = \json_encode($request, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?? \print_r($request, true);
		$this->logger->info('Notification request: '.$req_to_log);

		$notification = LiqPayNotification::deserialize($request);
		$this->handler->handleNotification($notification);

		$this->logger->info('Notification accepted');
	}

}
