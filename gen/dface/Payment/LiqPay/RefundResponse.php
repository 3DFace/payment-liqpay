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
	 * @return mixed
	 */
	public function jsonSerialize() : array {

		$result = [];

		$result['status'] = $this->status;

		if ($this->action !== null) {
			$result['action'] = $this->action;
		}

		if ($this->payment_id !== null) {
			$result['payment_id'] = $this->payment_id;
		}

		if ($this->wait_amount !== null) {
			$result['wait_amount'] = $this->wait_amount;
		}

		return $result;
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
		$x = clone $this;
		$x->_dirty = false;
		return $x;
	}

}
