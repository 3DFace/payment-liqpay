<?php

namespace dface\Payment\LiqPay;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;

class GuzzleRequestFactory implements RequestFactoryInterface
{

	public function createRequest(string $method, $uri, array $serverParams = []) : RequestInterface
	{
		return new Request($method, $uri, [], null, '1.1');
	}

}
