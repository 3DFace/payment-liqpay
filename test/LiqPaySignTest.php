<?php

namespace dface\Payment\LiqPay;

use PHPUnit\Framework\TestCase;

class LiqPaySignTest extends TestCase
{

	public function testSignValid() : void
	{
		$sign = LiqPaySign::makeSignature('test', 'private');
		$this->assertTrue(LiqPaySign::isSignatureValid('test', $sign, 'private'));
	}

	public function testSignInvalid() : void
	{
		$this->assertFalse(LiqPaySign::isSignatureValid('test', 'asd', 'private'));
	}

}
