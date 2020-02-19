<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class RefundResponse implements \JsonSerializable {

	/** @var string */
	private $status;
	/** @var string|null */
	private $action;
	/** @var string|null */
	private $payment_id;
	/** @var bool|null */
	private $wait_amount;

	public function __construct(
		string $status,
		?string $action = null,
		?string $payment_id = null,
		?bool $wait_amount = null
	){
		$this->status = $status;
		$this->action = $action;
		$this->payment_id = $payment_id;
		$this->wait_amount = $wait_amount;
	}

	/**
	 * @return string
	 */
	public function getStatus() : string {
		return $this->status;
	}

	/**
	 * @return string|null
	 */
	public function getAction() : ?string {
		return $this->action;
	}

	/**
	 * @return string|null
	 */
	public function getPaymentId() : ?string {
		return $this->payment_id;
	}

	/**
	 * @return bool|null
	 */
	public function getWaitAmount() : ?bool {
		return $this->wait_amount;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize(){

		$result = [];

		$result['status'] = $this->status;

		if($this->action !== null){
			$result['action'] = $this->action;
		}

		if($this->payment_id !== null){
			$result['payment_id'] = $this->payment_id;
		}

		if($this->wait_amount !== null){
			$result['wait_amount'] = $this->wait_amount;
		}

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : RefundResponse {
		if(\array_key_exists('status', $arr)){
			$status = $arr['status'];
		}else{
			throw new \InvalidArgumentException("Property 'status' not specified");
		}
		$status = $status !== null ? (string)$status : null;

		$action = null;
		if(\array_key_exists('action', $arr)){
			$action = $arr['action'];
		}
		$action = $action !== null ? (string)$action : null;

		$payment_id = null;
		if(\array_key_exists('payment_id', $arr)){
			$payment_id = $arr['payment_id'];
		}
		$payment_id = $payment_id !== null ? (string)$payment_id : null;

		$wait_amount = null;
		if(\array_key_exists('wait_amount', $arr)){
			$wait_amount = $arr['wait_amount'];
		}
		$wait_amount = $wait_amount !== null ? (bool)$wait_amount : null;

		return new static(
			$status,
			$action,
			$payment_id,
			$wait_amount);
	}

}
