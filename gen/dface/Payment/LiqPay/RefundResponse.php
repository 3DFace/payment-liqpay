<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class RefundResponse implements JsonSerializable {

	private string $status;
	private ?string $action;
	private ?string $payment_id;
	private ?bool $wait_amount;
	private bool $_dirty = false;

	/**
	 * @param string $status
	 * @param string|null $action
	 * @param string|null $payment_id
	 * @param bool|null $wait_amount
	 */
	public function __construct(
		string $status,
		?string $action = null,
		?string $payment_id = null,
		?bool $wait_amount = null
	) {
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
	 * @return array|\stdClass
	 */
	#[\ReturnTypeWillChange]
	public function jsonSerialize() {

		$result = [];

		$result['status'] = $this->status;

		$_ser_action = $this->action;
		if ($_ser_action !== null) {
			$result['action'] = $_ser_action;
		}

		$_ser_payment_id = $this->payment_id;
		if ($_ser_payment_id !== null) {
			$result['payment_id'] = $_ser_payment_id;
		}

		$_ser_wait_amount = $this->wait_amount;
		if ($_ser_wait_amount !== null) {
			$result['wait_amount'] = $_ser_wait_amount;
		}

		return $result ?: new \stdClass();
	}

	/**
	 * @param object|array $data
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize($data) : self {
		$arr = (array)$data;
		if (\array_key_exists('status', $arr)) {
			$status = $arr['status'];
		} else {
			throw new \InvalidArgumentException("Property 'status' not specified");
		}
		$status = $status === null ? null : (string)$status;

		$action = $arr['action'] ?? null;
		$action = $action === null ? null : (string)$action;

		$payment_id = $arr['payment_id'] ?? null;
		$payment_id = $payment_id === null ? null : (string)$payment_id;

		$wait_amount = $arr['wait_amount'] ?? null;
		$wait_amount = $wait_amount === null ? null : (bool)$wait_amount;

		return new self(
			$status,
			$action,
			$payment_id,
			$wait_amount);
	}

	/**
	 * @param self|null $x
	 * @return bool
	 */
	public function equals(?self $x) : bool {

		return $x !== null

			&& $this->status === $x->status

			&& $this->action === $x->action

			&& $this->payment_id === $x->payment_id

			&& $this->wait_amount === $x->wait_amount;
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
