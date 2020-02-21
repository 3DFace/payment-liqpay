<?php

namespace dface\Payment\LiqPay;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class TestHttpClient implements ClientInterface
{

	/** @var RequestInterface */
	private $request;
	/** @var ResponseInterface */
	private $response;

	public function setNextResponse(ResponseInterface $response) : void
	{
		$this->response = $response;
	}

	public function sendRequest(RequestInterface $request) : ResponseInterface
	{
		$this->request = $request;
		return $this->response;
	}

	public function getSentRequest() : RequestInterface
	{
		return $this->request;
	}

}
