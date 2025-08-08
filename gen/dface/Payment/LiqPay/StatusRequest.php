<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class StatusRequest implements JsonSerializable {

	private string $order_id;
	private bool $_dirty = false;

	/**
	 * @param string $order_id
	 */
	public function __construct(string $order_id) {
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
		if ($this->order_id === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->order_id = $val;
		$clone->_dirty = true;
		return $clone;
	}

	public function jsonSerialize() : array|object {

		$result = [];

		$result['order_id'] = $this->order_id;

		return $result ?: new \stdClass();
	}

	/**
	 * @param object|array $data
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(object|array $data) : self {
		$arr = (array)$data;
		if (\array_key_exists('order_id', $arr)) {
			$order_id = $arr['order_id'];
		} else {
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id === null ? null : (string)$order_id;

		return new self($order_id);
	}

	/**
	 * @param self|null $x
	 * @return bool
	 */
	public function equals(?self $x) : bool {

		return $x !== null

			&& $this->order_id === $x->order_id;
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
