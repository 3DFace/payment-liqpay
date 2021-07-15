<?php

namespace dface\Payment\LiqPay;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class LiqPayCallbackMiddleware implements MiddlewareInterface
{

	private LiqPayCallbackServer $server;
	private ResponseFactoryInterface $responseFactory;
	private StreamFactoryInterface $streamFactory;

	public function __construct(
		LiqPayCallbackServer $server,
		ResponseFactoryInterface $responseFactory,
		StreamFactoryInterface $streamFactory
	) {
		$this->server = $server;
		$this->responseFactory = $responseFactory;
		$this->streamFactory = $streamFactory;
	}

	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
	{
		$post = $request->getParsedBody();

		[$status, $body] = $this->server->processPost($post);

		$response = $this->responseFactory->createResponse();
		$response = $response->withStatus($status);

		$body_length = \strlen($body);
		if ($body_length > 0) {
			$body_stream = $this->streamFactory->createStream($body);
			$response = $response
				->withHeader('Content-Type', 'text/plain; charset=utf-8')
				->withHeader('Content-Length', (string)\strlen($body))
				->withBody($body_stream);
		}

		return $response;
	}

}
