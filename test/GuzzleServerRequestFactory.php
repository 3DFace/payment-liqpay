<?php

namespace dface\Payment\LiqPay;

use GuzzleHttp\Psr7\ServerRequest;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;

class GuzzleServerRequestFactory implements ServerRequestFactoryInterface
{
	public function createServerRequest(string $method, $uri, array $serverParams = []) : ServerRequestInterface
	{
		return new ServerRequest($method, $uri, [], null, '1.1', $serverParams);
	}

}
