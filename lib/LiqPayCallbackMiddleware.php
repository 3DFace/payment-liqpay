<?php

namespace dface\Payment\LiqPay;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class LiqPayCallbackMiddleware implements MiddlewareInterface
{

	private LiqPayCallbackServer $server;
	private ResponseFactoryInterface $responseFactory;
	/** @var callable */
	private $stringStreamFactory;

	public function __construct(
		LiqPayCallbackServer $server,
		ResponseFactoryInterface $responseFactory,
		callable $stringStreamFactory
	) {
		$this->server = $server;
		$this->responseFactory = $responseFactory;
		$this->stringStreamFactory = $stringStreamFactory;
	}

	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
	{
		$post = $request->getParsedBody();

		[$status, $body] = $this->server->processPost($post);

		$response = $this->responseFactory->createResponse();
		$response = $response->withStatus($status);

		$body_length = \strlen($body);
		if ($body_length > 0) {
			$body_stream = ($this->stringStreamFactory)($body);
			$response = $response
				->withHeader('Content-Type', 'text/plain; charset=utf-8')
				->withHeader('Content-Length', (string)\strlen($body))
				->withBody($body_stream);
		}

		return $response;
	}

}
