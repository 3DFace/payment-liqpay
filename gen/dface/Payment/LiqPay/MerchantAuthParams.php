<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class MerchantAuthParams implements JsonSerializable {

	private ?string $public_key;
	private ?string $private_key;
	private bool $_dirty = false;

	/**
	 * @param string|null $public_key
	 * @param string|null $private_key
	 */
	public function __construct(?string $public_key = null, ?string $private_key = null) {
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
	 * @return array|\stdClass
	 */
	public function jsonSerialize() {

		$result = [];

		$result['public_key'] = $this->public_key;

		$result['private_key'] = $this->private_key;

		return $result ?: new \stdClass();
	}

	/**
	 * @param object|array $data
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize($data) : self {
		$arr = (array)$data;
		$public_key = $arr['public_key'] ?? null;
		$public_key = $public_key === null ? null : (string)$public_key;

		$private_key = $arr['private_key'] ?? null;
		$private_key = $private_key === null ? null : (string)$private_key;

		return new self($public_key, $private_key);
	}

	/**
	 * @param self|null $x
	 * @return bool
	 */
	public function equals(?self $x) : bool {

		return $x !== null

			&& $this->public_key === $x->public_key

			&& $this->private_key === $x->private_key;
	}

	public function isDirty() : bool {
		return $this->_dirty;
	}

	/**
	 * @return self
	 */
	public function washed() : self {
		if (!$this->_dirty) {
			return $this;
		}
		$x = clone $this;
		$x->_dirty = false;
		return $x;
	}

}
