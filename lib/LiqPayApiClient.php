<?php

namespace dface\Payment\LiqPay;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Log\LoggerInterface;


class LiqPayApiClient
{

	/** @var string */
	private $api_url;
	/** @var float */
	private $version;
	/** @var ClientInterface */
	private $httpClient;
	/** @var ServerRequestFactoryInterface */
	private $requestFactory;
	/** @var callable */
	private $stringStreamFactory;
	/** @var LoggerInterface */
	private $logger;

	public function __construct(
		string $api_url,
		float $version,
		ClientInterface $httpClient,
		ServerRequestFactoryInterface $requestFactory,
		callable $stringStreamFactory,
		LoggerInterface $logger
	) {
		$this->api_url = $api_url;
		$this->version = $version;
		$this->httpClient = $httpClient;
		$this->requestFactory = $requestFactory;
		$this->stringStreamFactory = $stringStreamFactory;
		$this->logger = $logger;
	}

	/**
	 * @param string $request_name
	 * @param array $data_arr
	 * @param MerchantAuthParams $auth
	 * @return array response
	 * @throws LiqPayError
	 * @throws LiqPayHttpError
	 */
	public function callApi(string $request_name, array $data_arr, MerchantAuthParams $auth) : array
	{
		$data_arr['version'] = $this->version;
		$data_arr['public_key'] = $auth->getPublicKey();

		$private_key = $auth->getPrivateKey();
		$request_arr = self::buildDataAndSignature($data_arr, $private_key);

		$request_param_str = \http_build_query($request_arr);
		$request = $this->requestFactory->createServerRequest('POST', $this->api_url);
		$body_stream = ($this->stringStreamFactory)($request_param_str);
		$request = $request
			->withHeader('Content-Type', 'application/x-www-form-urlencoded')
			->withBody($body_stream);

		$this->logger->info($request_name.' request: '.\json_encode($data_arr,
				JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

		try{
			$response = $this->httpClient->sendRequest($request);
			$response_str = $response->getBody()->getContents();

			$response_arr = \json_decode($response_str, true);
			if ($response_arr === null || !\is_array($response_arr)) {
				$this->logger->error($request_name.' bad response: '.$response_str);
				throw new LiqPayHttpError('Invalid response format');
			}

			$this->logger->info($request_name.' response: '.\json_encode($response_arr,
					JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

		}catch (ClientExceptionInterface $e){
			$this->logger->error($request_name.' error: '.$e->getMessage(), [$e]);
			throw new LiqPayHttpError($e->getMessage(), 0, $e);
		}

		$status = $response->getStatusCode();
		if (!\in_array($status, [200, 202], true)) {
			throw new LiqPayHttpError("Unexpected http status: $status");
		}

		$status = $response_arr['status'] ?? null;
		if ($status === null || $status === 'error' || $status === 'failure') {
			$err_msg = ($response_arr['err_code'] ?? $response_arr['code']);
			if (isset($response_arr['err_description'])) {
				$err_msg .= ' ('.$response_arr['err_description'].')';
			}
			throw new LiqPayError($err_msg);
		}

		return $response_arr;
	}

	/**
	 * @param array $data_arr
	 * @param MerchantAuthParams $auth
	 * @return array
	 */
	public function buildRequest(array $data_arr, MerchantAuthParams $auth) : array
	{
		$data_arr['version'] = $this->version;
		$data_arr['public_key'] = $auth->getPublicKey();
		$private_key = $auth->getPrivateKey();
		return self::buildDataAndSignature($data_arr, $private_key);
	}

	/**
	 * @param array $request_arr
	 * @param string $private_key
	 * @return array
	 */
	public static function buildDataAndSignature(array $request_arr, string $private_key) : array
	{
		$request_json = \json_encode($request_arr, JSON_UNESCAPED_UNICODE);
		if ($request_json === null) {
			$err_msg = \json_last_error_msg();
			throw new \RuntimeException('Can not serialize request data:'.$err_msg);
		}

		$request_base64 = \base64_encode($request_json);
		$sign_base64 = LiqPaySign::makeSignature($request_base64, $private_key);

		return [
			'data' => $request_base64,
			'signature' => $sign_base64
		];
	}

}
