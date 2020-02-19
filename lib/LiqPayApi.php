<?php

namespace dface\Payment\LiqPay;

class LiqPayApi
{

	/** @var LiqPayApiClient */
	private $api_client;

	public function __construct(LiqPayApiClient $api_client)
	{
		$this->api_client = $api_client;
	}

	/**
	 * @param PaymentRequest $request
	 * @return array
	 */
	public function buildClientPaymentRequest(PaymentRequest $request) : array
	{
		return $this->api_client->buildRequest($request->jsonSerialize());
	}

	/**
	 * @param PaymentRequest $request
	 * @return PaymentResponse
	 * @throws LiqPayError|LiqPayHttpError
	 */
	public function requestPayment(PaymentRequest $request) : PaymentResponse
	{
		$request_arr = $request->jsonSerialize();
		$response_arr = $this->api_client->callApi('Payment', $request_arr);
		return PaymentResponse::deserialize($response_arr);
	}

	/**
	 * @param StatusRequest $request
	 * @return StatusResponse
	 * @throws LiqPayError|LiqPayHttpError
	 */
	public function getPaymentStatus(StatusRequest $request) : StatusResponse
	{
		$request_arr = $request->jsonSerialize();
		$response_arr = $this->api_client->callApi('Status', $request_arr);
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
		$response_arr = $this->api_client->callApi('Refund', $request_arr);
		return RefundResponse::deserialize($response_arr);
	}

}
