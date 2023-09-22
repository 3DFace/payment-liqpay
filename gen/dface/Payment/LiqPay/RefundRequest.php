<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class RefundRequest implements JsonSerializable {

	private string $order_id;
	private float $amount;
	private bool $_dirty = false;

	/**
	 * @param string $order_id
	 * @param float $amount
	 */
	public function __construct(string $order_id, float $amount) {
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
		if ($this->order_id === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->order_id = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param float $val
	 * @return self
	 */
	public function withAmount(float $val) : self {
		if ($this->amount === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->amount = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @return array|\stdClass
	 */
	#[\ReturnTypeWillChange]
	public function jsonSerialize() {

		$result = [];

		$result['order_id'] = $this->order_id;

		$result['amount'] = $this->amount;

		return $result ?: new \stdClass();
	}

	/**
	 * @param object|array $data
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize($data) : self {
		$arr = (array)$data;
		if (\array_key_exists('order_id', $arr)) {
			$order_id = $arr['order_id'];
		} else {
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id === null ? null : (string)$order_id;

		if (\array_key_exists('amount', $arr)) {
			$amount = $arr['amount'];
		} else {
			throw new \InvalidArgumentException("Property 'amount' not specified");
		}
		$amount = $amount === null ? null : (float)$amount;

		return new self($order_id, $amount);
	}

	/**
	 * @param self|null $x
	 * @return bool
	 */
	public function equals(?self $x) : bool {

		return $x !== null

			&& $this->order_id === $x->order_id

			&& $this->amount === $x->amount;
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
