<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class StatusRequest implements \JsonSerializable {

	/** @var string */
	private $order_id;

	public function __construct(string $order_id){
		$this->order_id = $order_id;
	}

	/**
	 * @return string
	 */
	public function getOrderId() : string {
		return $this->order_id;
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
	 * @return mixed
	 */
	public function jsonSerialize(){

		$result = [];

		$result['order_id'] = $this->order_id;

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : StatusRequest {
		if(\array_key_exists('order_id', $arr)){
			$order_id = $arr['order_id'];
		}else{
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id !== null ? (string)$order_id : null;

		return new static($order_id);
	}

}
