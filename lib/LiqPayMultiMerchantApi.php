<?php

namespace dface\Payment\LiqPay;

class LiqPayMultiMerchantApi
{

	private LiqPayApiClient $api_client;

	public function __construct(LiqPayApiClient $api_client)
	{
		$this->api_client = $api_client;
	}

	/**
	 * @param PaymentRequest $request
	 * @param MerchantAuthParams $merchant_auth
	 * @return array
	 * @throws LiqPayError
	 */
	public function buildClientPaymentRequest(PaymentRequest $request, MerchantAuthParams $merchant_auth) : array
	{
		return $this->api_client->buildRequest(
			$request->jsonSerialize(),
			$merchant_auth);
	}

	/**
	 * @param PaymentRequest $request
	 * @param MerchantAuthParams $merchant_auth
	 * @return PaymentResponse
	 * @throws LiqPayError
	 * @throws LiqPayHttpError
	 */
	public function requestPayment(PaymentRequest $request, MerchantAuthParams $merchant_auth) : PaymentResponse
	{
		$request_arr = $request->jsonSerialize();

		$response_arr = $this->api_client->callApi(
			'Payment',
			$request_arr,
			$merchant_auth);

		return PaymentResponse::deserialize($response_arr);
	}

	/**
	 * @param StatusRequest $request
	 * @param MerchantAuthParams $merchant_auth
	 * @return StatusResponse
	 * @throws LiqPayError
	 * @throws LiqPayHttpError
	 */
	public function getPaymentStatus(StatusRequest $request, MerchantAuthParams $merchant_auth) : StatusResponse
	{
		$request_arr = $request->jsonSerialize();
		$request_arr['action'] = 'status';

		$response_arr = $this->api_client->callApi(
			'Status',
			$request_arr,
			$merchant_auth);

		return StatusResponse::deserialize($response_arr);
	}

	/**
	 * @param RefundRequest $request
	 * @param MerchantAuthParams $merchant_auth
	 * @return RefundResponse
	 * @throws LiqPayError
	 * @throws LiqPayHttpError
	 */
	public function requestRefund(RefundRequest $request, MerchantAuthParams $merchant_auth) : RefundResponse
	{
		$request_arr = $request->jsonSerialize();
		$request_arr['action'] = 'refund';

		$response_arr = $this->api_client->callApi(
			'Refund',
			$request_arr,
			$merchant_auth);

		return RefundResponse::deserialize($response_arr);
	}

}
