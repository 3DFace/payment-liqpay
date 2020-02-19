<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class LiqPayApiSettings implements \JsonSerializable {

	/** @var string|null */
	private $api_url;
	/** @var string|null */
	private $public_key;
	/** @var string|null */
	private $private_key;

	public function __construct(?string $api_url = null, ?string $public_key = null, ?string $private_key = null){
		$this->api_url = $api_url;
		$this->public_key = $public_key;
		$this->private_key = $private_key;
	}

	/**
	 * @return string|null
	 */
	public function getApiUrl() : ?string {
		return $this->api_url;
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

		$result['api_url'] = $this->api_url;

		$result['public_key'] = $this->public_key;

		$result['private_key'] = $this->private_key;

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : LiqPayApiSettings {
		$api_url = null;
		if(\array_key_exists('api_url', $arr)){
			$api_url = $arr['api_url'];
		}
		$api_url = $api_url !== null ? (string)$api_url : null;

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

		return new static($api_url, $public_key, $private_key);
	}

}
