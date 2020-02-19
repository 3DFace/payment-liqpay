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
	private $auth_params_accessor;

	public function __construct(LiqPayNotificationHandler $handler, LoggerInterface $logger, $auth_params_accessor)
	{
		$this->handler = $handler;
		$this->logger = $logger;
		$this->auth_params_accessor = $auth_params_accessor;
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

		$json_req = \base64_decode($data_64);
		$structured_req = \json_decode($json_req, true);
		if ($structured_req === null) {
			$this->logger->error('Cant decode data: '.$json_req."\n".\json_last_error());
			return [self::STATUS_BAD_REQUEST, 'Cant decode data'];
		}

		try{
			$req_to_log = \json_encode($structured_req, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
				?? \print_r($structured_req, true);
			$this->logger->info('Notification request: '.$req_to_log);

			$notification = CallbackNotification::deserialize($structured_req);

			/** @var MerchantAuthParams $auth_params */
			$auth_params = ($this->auth_params_accessor)($notification->getOrderId());

			if ($auth_params->getPublicKey() !== $notification->getPublicKey()) {
				$this->logger->error('Public key does not match');
				return [self::STATUS_BAD_REQUEST, 'Public key does not match'];
			}

			$private_key = $auth_params->getPrivateKey();
			if (!$this->signValid($data_64, $signature_64, $private_key)) {
				$this->logger->error('Invalid notification sign');
				return [self::STATUS_BAD_REQUEST, 'Invalid sign'];
			}

			$this->handler->handleNotification($notification);

			$this->logger->info('Notification accepted');
		}catch (\InvalidArgumentException $e){
			$this->logger->error($e->getMessage());
			return [self::STATUS_BAD_REQUEST, $e->getMessage()];
		}

		return [self::STATUS_OK, ''];
	}

	private function signValid(string $data_64, string $signature_64, string $private_key) : bool
	{
		$signature_bin = \base64_decode($signature_64);
		$sign_sha1 = \sha1($private_key.$data_64.$private_key, true);
		return $sign_sha1 === $signature_bin;
	}

}
