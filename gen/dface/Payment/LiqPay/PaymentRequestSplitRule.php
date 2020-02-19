<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class PaymentRequestSplitRule implements \JsonSerializable {

	/** @var string */
	private $public_key;
	/** @var float */
	private $amount;
	/** @var string */
	private $commission_payer;
	/** @var string|null */
	private $server_url;

	public function __construct(
		string $public_key,
		float $amount,
		string $commission_payer,
		?string $server_url = null
	){
		$this->public_key = $public_key;
		$this->amount = $amount;
		$this->commission_payer = $commission_payer;
		$this->server_url = $server_url;
	}

	/**
	 * @return string
	 */
	public function getPublicKey() : string {
		return $this->public_key;
	}

	/**
	 * @return float
	 */
	public function getAmount() : float {
		return $this->amount;
	}

	/**
	 * @return string
	 */
	public function getCommissionPayer() : string {
		return $this->commission_payer;
	}

	/**
	 * @return string|null
	 */
	public function getServerUrl() : ?string {
		return $this->server_url;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withServerUrl(?string $val) : self {
		$clone = clone $this;
		$clone->server_url = $val;
		return $clone;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize(){

		$result = [];

		$result['public_key'] = $this->public_key;

		$result['amount'] = $this->amount;

		$result['commission_payer'] = $this->commission_payer;

		if($this->server_url !== null){
			$result['server_url'] = $this->server_url;
		}

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : PaymentRequestSplitRule {
		if(\array_key_exists('public_key', $arr)){
			$public_key = $arr['public_key'];
		}else{
			throw new \InvalidArgumentException("Property 'public_key' not specified");
		}
		$public_key = $public_key !== null ? (string)$public_key : null;

		if(\array_key_exists('amount', $arr)){
			$amount = $arr['amount'];
		}else{
			throw new \InvalidArgumentException("Property 'amount' not specified");
		}
		$amount = $amount !== null ? (float)$amount : null;

		if(\array_key_exists('commission_payer', $arr)){
			$commission_payer = $arr['commission_payer'];
		}else{
			throw new \InvalidArgumentException("Property 'commission_payer' not specified");
		}
		$commission_payer = $commission_payer !== null ? (string)$commission_payer : null;

		$server_url = null;
		if(\array_key_exists('server_url', $arr)){
			$server_url = $arr['server_url'];
		}
		$server_url = $server_url !== null ? (string)$server_url : null;

		return new static(
			$public_key,
			$amount,
			$commission_payer,
			$server_url);
	}

}
