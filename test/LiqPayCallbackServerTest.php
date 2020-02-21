<?php

namespace dface\Payment\LiqPay;

use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

class LiqPayCallbackServerTest extends TestCase
{

	/** @var LiqPayCallbackServer */
	private $server;
	/** @var TestLiqPayNotificationHandler */
	private $handler;

	protected function setUp() : void
	{
		parent::setUp();
		$this->handler = new TestLiqPayNotificationHandler();
		$logger = new NullLogger();
		$this->server = new LiqPayCallbackServer($this->handler, $logger, static function () {
			return new MerchantAuthParams('test_public', 'test_private');
		});
	}

	public function testHandled() : void
	{
		$post = LiqPayApiClient::buildDataAndSignature([
			'action' => 'pay',
			'status' => 'success',
			'version' => 3,
			'public_key' => 'test_public',
			'order_id' => '212250401b3145a1b30dc0d18f3b766f',
		], 'test_private');

		[$status] = $this->server->processPost($post);

		$this->assertEquals(200, $status);

		$n = $this->handler->getNotification();
		$this->assertEquals('pay', $n->getAction());
		$this->assertEquals('success', $n->getStatus());
		$this->assertEquals('test_public', $n->getPublicKey());
		$this->assertEquals('212250401b3145a1b30dc0d18f3b766f', $n->getOrderId());
	}

	public function testRejectedCauseInvalidSign() : void
	{
		$post = LiqPayApiClient::buildDataAndSignature([
			'action' => 'pay',
			'status' => 'success',
			'version' => 3,
			'public_key' => 'test_public',
			'order_id' => '212250401b3145a1b30dc0d18f3b766f',
		], 'test_private');
		$post['signature'] = 'asd';

		[$status] = $this->server->processPost($post);
		$this->assertEquals(403, $status);

		$n = $this->handler->getNotification();
		$this->assertNull($n);
	}

}
