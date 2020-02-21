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

}
