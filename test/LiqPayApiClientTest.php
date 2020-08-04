<?php

namespace dface\Payment\LiqPay;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Log\NullLogger;
use function GuzzleHttp\Psr7\stream_for;

class LiqPayApiClientTest extends TestCase
{

	private LiqPayApiClient $apiClient;
	private TestHttpClient $httpClient;
	private MerchantAuthParams $auth;

	protected function setUp() : void
	{
		parent::setUp();
		$this->httpClient = new TestHttpClient();
		$reqFactory = new GuzzleServerRequestFactory();
		$this->apiClient = new LiqPayApiClient('http://test.com', 3, $this->httpClient, $reqFactory,
			static function ($str) {
				return stream_for($str);
			}, new NullLogger());
		$this->auth = new MerchantAuthParams('test_public', 'test_private');
	}

	public function testRequestSent() : void
	{
		// prepare fake http response
		$next_response = $this->makeResponse([
			'action' => 'pay',
			'status' => 'success',
			'version' => 3,
			'public_key' => 'test_public',
			'order_id' => '212250401b3145a1b30dc0d18f3b766f',
		]);
		$this->httpClient->setNextResponse($next_response);

		// make ClientApi request
		$res_arr = $this->apiClient->callApi('Payment', [
			'action' => 'pay',
			'order_id' => '212250401b3145a1b30dc0d18f3b766f',
		], $this->auth);

		// check request was enriched with version and public key
		$sent_req = $this->httpClient->getSentRequest();
		$sent_data = $this->fetchDataFromRequest($sent_req);
		self::assertEquals(3, $sent_data['version']);
		self::assertEquals('test_public', $sent_data['public_key']);

		// check expected response
		self::assertEquals('success', $res_arr['status']);
	}

	private function makeResponse($data) : Response
	{
		$res_body = \json_encode($data, JSON_THROW_ON_ERROR);
		return new Response(200, [], stream_for($res_body));
	}

	private function fetchDataFromRequest(RequestInterface $sent_req)
	{
		$req_body = $sent_req->getBody()->getContents();
		\parse_str($req_body, $req_params);
		return \json_decode(\base64_decode($req_params['data']), true, 512, JSON_THROW_ON_ERROR);
	}

}
