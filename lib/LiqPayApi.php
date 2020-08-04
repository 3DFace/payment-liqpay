<?php

namespace dface\Payment\LiqPay;

class LiqPayApi
{

	private LiqPayApiClient $api_client;
	/** @var callable */
	private $auth_params_accessor;
	private MerchantAuthParams $auth_params;

	public function __construct(LiqPayApiClient $api_client, callable $auth_params_accessor)
	{
		$this->api_client = $api_client;
		$this->auth_params_accessor = $auth_params_accessor;
	}

	/**
	 * @param PaymentRequest $request
	 * @return array
	 * @throws LiqPayError
	 */
	public function buildClientPaymentRequest(PaymentRequest $request) : array
	{
		return $this->api_client->buildRequest(
			$request->jsonSerialize(),
			$this->getAuthParams());
	}

	/**
	 * @param PaymentRequest $request
	 * @return PaymentResponse
	 * @throws LiqPayError|LiqPayHttpError
	 */
	public function requestPayment(PaymentRequest $request) : PaymentResponse
	{
		$request_arr = $request->jsonSerialize();

		$response_arr = $this->api_client->callApi(
			'Payment',
			$request_arr,
			$this->getAuthParams());

		return PaymentResponse::deserialize($response_arr);
	}

	/**
	 * @param StatusRequest $request
	 * @return StatusResponse
	 * @throws LiqPayError
	 * @throws LiqPayHttpError
	 */
	public function getPaymentStatus(StatusRequest $request) : StatusResponse
	{
		$request_arr = $request->jsonSerialize();
		$request_arr['action'] = 'status';
		$request_arr['order_id'] = $request->getOrderId();

		$response_arr = $this->api_client->callApi(
			'Status',
			$request_arr,
			$this->getAuthParams());

		return StatusResponse::deserialize($response_arr);
	}

	/**
	 * @param RefundRequest $request
	 * @return RefundResponse
	 * @throws LiqPayError|LiqPayHttpError
	 */
	public function requestRefund(RefundRequest $request) : RefundResponse
	{
		$request_arr = $request->jsonSerialize();
		$request_arr['action'] = 'refund';

		$response_arr = $this->api_client->callApi(
			'Refund',
			$request_arr,
			$this->getAuthParams());

		return RefundResponse::deserialize($response_arr);
	}

	private function getAuthParams() : MerchantAuthParams
	{
		if ($this->auth_params === null) {
			$this->auth_params = ($this->auth_params_accessor)();
		}
		return $this->auth_params;
	}

}
