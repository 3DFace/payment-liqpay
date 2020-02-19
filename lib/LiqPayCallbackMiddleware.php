<?php

namespace dface\Payment\LiqPay;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use function GuzzleHttp\Psr7\stream_for;

class LiqPayCallbackMiddleware implements MiddlewareInterface
{

	/** @var LiqPayCallbackServer */
	private $server;
	/** @var ResponseFactoryInterface */
	private $responseFactory;

	public function __construct(LiqPayCallbackServer $server, ResponseFactoryInterface $responseFactory)
	{
		$this->server = $server;
		$this->responseFactory = $responseFactory;
	}

	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
	{
		$post = $request->getParsedBody();

		[$status, $body] = $this->server->processPost($post);

		$response = $this->responseFactory->createResponse();
		$response = $response->withStatus($status);

		$body_length = \strlen($body);
		if ($body_length > 0) {
			$response = $response
				->withHeader('Content-Type', 'text/plain; charset=utf-8')
				->withHeader('Content-Length', (string)\strlen($body))
				->withBody(stream_for($body));
		}

		return $response;
	}

}
