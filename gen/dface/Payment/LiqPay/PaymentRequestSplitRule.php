<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class PaymentRequestSplitRule implements JsonSerializable {

	private string $public_key;
	private float $amount;
	private string $commission_payer;
	private ?string $server_url;
	private bool $_dirty = false;

	/**
	 * @param string $public_key
	 * @param float $amount
	 * @param string $commission_payer
	 * @param string|null $server_url
	 */
	public function __construct(
		string $public_key,
		float $amount,
		string $commission_payer,
		?string $server_url = null
	) {
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
	 * @param string|null $val
	 * @return self
	 */
	public function withServerUrl(?string $val) : self {
		if ($this->server_url === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->server_url = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize() : array {

		$result = [];

		$result['public_key'] = $this->public_key;

		$result['amount'] = $this->amount;

		$result['commission_payer'] = $this->commission_payer;

		if ($this->server_url !== null) {
			$result['server_url'] = $this->server_url;
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
		if (\array_key_exists('public_key', $arr)) {
			$public_key = $arr['public_key'];
		} else {
			throw new \InvalidArgumentException("Property 'public_key' not specified");
		}
		$public_key = $public_key === null ? null : (string)$public_key;

		if (\array_key_exists('amount', $arr)) {
			$amount = $arr['amount'];
		} else {
			throw new \InvalidArgumentException("Property 'amount' not specified");
		}
		$amount = $amount === null ? null : (float)$amount;

		if (\array_key_exists('commission_payer', $arr)) {
			$commission_payer = $arr['commission_payer'];
		} else {
			throw new \InvalidArgumentException("Property 'commission_payer' not specified");
		}
		$commission_payer = $commission_payer === null ? null : (string)$commission_payer;

		$server_url = $arr['server_url'] ?? null;
		$server_url = $server_url === null ? null : (string)$server_url;

		return new self(
			$public_key,
			$amount,
			$commission_payer,
			$server_url);
	}

	/**
	 * @param self|null $x
	 * @return bool
	 */
	public function equals(?self $x) : bool {

		return $x !== null

			&& $this->public_key === $x->public_key

			&& $this->amount === $x->amount

			&& $this->commission_payer === $x->commission_payer

			&& $this->server_url === $x->server_url;
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
