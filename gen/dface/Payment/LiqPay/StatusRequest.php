<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class StatusRequest implements \JsonSerializable {

	/** @var float */
	private $version;
	/** @var string */
	private $action;
	/** @var string */
	private $order_id;

	public function __construct(float $version, string $action, string $order_id){
		$this->version = $version;
		$this->action = $action;
		$this->order_id = $order_id;
	}

	/**
	 * @return float
	 */
	public function getVersion() : float {
		return $this->version;
	}

	/**
	 * @return string
	 */
	public function getAction() : string {
		return $this->action;
	}

	/**
	 * @return string
	 */
	public function getOrderId() : string {
		return $this->order_id;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize(){

		$result = [];

		$result['version'] = $this->version;

		$result['action'] = $this->action;

		$result['order_id'] = $this->order_id;

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : StatusRequest {
		if(\array_key_exists('version', $arr)){
			$version = $arr['version'];
		}else{
			throw new \InvalidArgumentException("Property 'version' not specified");
		}
		$version = $version !== null ? (float)$version : null;

		if(\array_key_exists('action', $arr)){
			$action = $arr['action'];
		}else{
			throw new \InvalidArgumentException("Property 'action' not specified");
		}
		$action = $action !== null ? (string)$action : null;

		if(\array_key_exists('order_id', $arr)){
			$order_id = $arr['order_id'];
		}else{
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id !== null ? (string)$order_id : null;

		return new static($version, $action, $order_id);
	}

}
