<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class RefundRequest implements \JsonSerializable {

	/** @var string */
	private $order_id;
	/** @var float */
	private $amount;

	public function __construct(string $order_id, float $amount){
		$this->order_id = $order_id;
		$this->amount = $amount;
	}

	/**
	 * @return string
	 */
	public function getOrderId() : string {
		return $this->order_id;
	}

	/**
	 * @return float
	 */
	public function getAmount() : float {
		return $this->amount;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withOrderId(string $val) : self {
		$clone = clone $this;
		$clone->order_id = $val;
		return $clone;
	}

	/**
	 * @param float $val
	 * @return self
	 */
	public function withAmount(float $val) : self {
		$clone = clone $this;
		$clone->amount = $val;
		return $clone;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize(){

		$result = [];

		$result['order_id'] = $this->order_id;

		$result['amount'] = $this->amount;

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : RefundRequest {
		if(\array_key_exists('order_id', $arr)){
			$order_id = $arr['order_id'];
		}else{
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id !== null ? (string)$order_id : null;

		if(\array_key_exists('amount', $arr)){
			$amount = $arr['amount'];
		}else{
			throw new \InvalidArgumentException("Property 'amount' not specified");
		}
		$amount = $amount !== null ? (float)$amount : null;

		return new static($order_id, $amount);
	}

}
