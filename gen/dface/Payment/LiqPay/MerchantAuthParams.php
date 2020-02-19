<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class MerchantAuthParams implements \JsonSerializable {

	/** @var string|null */
	private $public_key;
	/** @var string|null */
	private $private_key;

	public function __construct(?string $public_key = null, ?string $private_key = null){
		$this->public_key = $public_key;
		$this->private_key = $private_key;
	}

	/**
	 * @return string|null
	 */
	public function getPublicKey() : ?string {
		return $this->public_key;
	}

	/**
	 * @return string|null
	 */
	public function getPrivateKey() : ?string {
		return $this->private_key;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize(){

		$result = [];

		$result['public_key'] = $this->public_key;

		$result['private_key'] = $this->private_key;

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : MerchantAuthParams {
		$public_key = null;
		if(\array_key_exists('public_key', $arr)){
			$public_key = $arr['public_key'];
		}
		$public_key = $public_key !== null ? (string)$public_key : null;

		$private_key = null;
		if(\array_key_exists('private_key', $arr)){
			$private_key = $arr['private_key'];
		}
		$private_key = $private_key !== null ? (string)$private_key : null;

		return new static($public_key, $private_key);
	}

}
