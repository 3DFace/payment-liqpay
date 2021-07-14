<?php

namespace dface\Payment\LiqPay;

abstract class LiqPaySign
{

	public static function isSignatureValid(string $body, string $signature_64, string $private_key) : bool
	{
		$signature_bin = \base64_decode($signature_64);
		$sign_sha1 = \sha1($private_key.$body.$private_key, true);
		return $sign_sha1 === $signature_bin;
	}

	public static function makeSignature($body, $private_key) : string
	{
		$sign_sha1 = \sha1($private_key.$body.$private_key, true);
		return \base64_encode($sign_sha1);
	}

	/**
	 * @param int $version
	 * @param array $data_arr
	 * @param MerchantAuthParams $auth
	 * @return array
	 * @throws LiqPayError
	 */
	public static function buildRequest(int $version, array $data_arr, MerchantAuthParams $auth) : array
	{
		$data_arr['version'] = $version;
		$data_arr['public_key'] = $auth->getPublicKey();
		$private_key = $auth->getPrivateKey();
		return self::buildDataAndSignature($data_arr, $private_key);
	}

	/**
	 * @param array $request_arr
	 * @param string $private_key
	 * @return array
	 * @throws LiqPayError
	 */
	public static function buildDataAndSignature(array $request_arr, string $private_key) : array
	{
		try {
			$request_json = \json_encode($request_arr, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
		} catch (\JsonException $e) {
			throw new LiqPayError('Can not serialize request data: '.$e->getMessage());
		}

		$request_base64 = \base64_encode($request_json);
		$sign_base64 = self::makeSignature($request_base64, $private_key);

		return [
			'data' => $request_base64,
			'signature' => $sign_base64
		];
	}

}
