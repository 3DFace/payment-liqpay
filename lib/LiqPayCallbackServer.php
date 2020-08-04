<?php

namespace dface\Payment\LiqPay;

use Psr\Log\LoggerInterface;

class LiqPayCallbackServer
{

	private const STATUS_OK = 200;
	private const STATUS_BAD_REQUEST = 400;
	private const STATUS_FORBIDDEN = 403;
	private const STATUS_NOT_ACCEPTABLE = 406;
	private const STATUS_INTERNAL_SERVER_ERROR = 500;

	private LiqPayNotificationHandler $handler;
	private LoggerInterface $logger;
	/** @var callable */
	private $auth_params_accessor;

	public function __construct(
		LiqPayNotificationHandler $handler,
		LoggerInterface $logger,
		callable $auth_params_accessor
	) {
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
			return [self::STATUS_BAD_REQUEST, "Bad request - provide 'data' and 'signature' params"];
		}
		return $this->processDataAndSignature($data_64, $signature_64);
	}

	public function processDataAndSignature(string $data_64, string $signature_64) : array
	{
		$json_req = \base64_decode($data_64);
		try{
			$structured_req = \json_decode($json_req, true, 512, JSON_THROW_ON_ERROR);
		}catch (\JsonException $e){
			return [self::STATUS_BAD_REQUEST, 'Can not decode data'];
		}

		try{
			$req_to_log = \json_encode($structured_req,
				JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		}catch (\JsonException $e){
			$req_to_log = \print_r($structured_req, true);
		}

		$this->logger->info('Notification request: '.$req_to_log);

		try{
			$notification = CallbackNotification::deserialize($structured_req);
		}catch (\InvalidArgumentException $e){
			$this->logger->error($e->getMessage());
			return [self::STATUS_BAD_REQUEST, $e->getMessage()];
		}

		try{

			/** @var MerchantAuthParams $auth_params */
			$auth_params = ($this->auth_params_accessor)($notification->getOrderId());

			if ($auth_params->getPublicKey() !== $notification->getPublicKey()) {
				$this->logger->error('Public key does not match, expected: '.$auth_params->getPublicKey());
				return [self::STATUS_NOT_ACCEPTABLE, 'Public key does not match'];
			}

			$private_key = $auth_params->getPrivateKey();

			if (!LiqPaySign::isSignatureValid($data_64, $signature_64, $private_key)) {
				$this->logger->error('Invalid notification sign');
				return [self::STATUS_FORBIDDEN, 'Invalid sign'];
			}

			$this->handler->handleNotification($notification);

			$this->logger->info('Notification accepted');

			return [self::STATUS_OK, ''];

		}catch (\Exception $e){
			$this->logger->error($e->getMessage(), [$e]);
			return [self::STATUS_INTERNAL_SERVER_ERROR, $e->getMessage()];
		}
	}

}
