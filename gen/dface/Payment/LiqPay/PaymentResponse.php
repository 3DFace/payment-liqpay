<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class PaymentResponse implements JsonSerializable {

	private ?float $acq_id;
	private ?string $action;
	private float $agent_commission;
	private ?float $amount;
	private float $amount_bonus;
	private ?float $amount_credit;
	private ?float $amount_debit;
	private float $commission_credit;
	private float $commission_debit;
	private ?string $currency;
	private ?string $currency_credit;
	private ?string $currency_debit;
	private ?string $description;
	private ?bool $is_3ds;
	private ?string $liq_pay_order_id;
	private ?int $mpi_eci;
	private ?string $order_id;
	private ?string $payment_id;
	private ?string $public_key;
	private ?string $qr_code;
	private float $receiver_commission;
	private float $sender_bonus;
	private float $sender_commission;
	private ?string $status;
	private ?string $transaction_id;
	private ?string $type;
	private ?float $version;
	private bool $_dirty = false;

	/**
	 * @param float|null $acq_id
	 * @param string|null $action
	 * @param float $agent_commission
	 * @param float|null $amount
	 * @param float $amount_bonus
	 * @param float|null $amount_credit
	 * @param float|null $amount_debit
	 * @param float $commission_credit
	 * @param float $commission_debit
	 * @param string|null $currency
	 * @param string|null $currency_credit
	 * @param string|null $currency_debit
	 * @param string|null $description
	 * @param bool|null $is_3ds
	 * @param string|null $liq_pay_order_id
	 * @param int|null $mpi_eci
	 * @param string|null $order_id
	 * @param string|null $payment_id
	 * @param string|null $public_key
	 * @param string|null $qr_code
	 * @param float $receiver_commission
	 * @param float $sender_bonus
	 * @param float $sender_commission
	 * @param string|null $status
	 * @param string|null $transaction_id
	 * @param string|null $type
	 * @param float|null $version
	 */
	public function __construct(
		?float $acq_id = null,
		?string $action = null,
		float $agent_commission = 0.0,
		?float $amount = null,
		float $amount_bonus = 0.0,
		?float $amount_credit = null,
		?float $amount_debit = null,
		float $commission_credit = 0.0,
		float $commission_debit = 0.0,
		?string $currency = null,
		?string $currency_credit = null,
		?string $currency_debit = null,
		?string $description = null,
		?bool $is_3ds = null,
		?string $liq_pay_order_id = null,
		?int $mpi_eci = null,
		?string $order_id = null,
		?string $payment_id = null,
		?string $public_key = null,
		?string $qr_code = null,
		float $receiver_commission = 0.0,
		float $sender_bonus = 0.0,
		float $sender_commission = 0.0,
		?string $status = null,
		?string $transaction_id = null,
		?string $type = null,
		?float $version = null
	) {
		$this->acq_id = $acq_id;
		$this->action = $action;
		$this->agent_commission = $agent_commission;
		$this->amount = $amount;
		$this->amount_bonus = $amount_bonus;
		$this->amount_credit = $amount_credit;
		$this->amount_debit = $amount_debit;
		$this->commission_credit = $commission_credit;
		$this->commission_debit = $commission_debit;
		$this->currency = $currency;
		$this->currency_credit = $currency_credit;
		$this->currency_debit = $currency_debit;
		$this->description = $description;
		$this->is_3ds = $is_3ds;
		$this->liq_pay_order_id = $liq_pay_order_id;
		$this->mpi_eci = $mpi_eci;
		$this->order_id = $order_id;
		$this->payment_id = $payment_id;
		$this->public_key = $public_key;
		$this->qr_code = $qr_code;
		$this->receiver_commission = $receiver_commission;
		$this->sender_bonus = $sender_bonus;
		$this->sender_commission = $sender_commission;
		$this->status = $status;
		$this->transaction_id = $transaction_id;
		$this->type = $type;
		$this->version = $version;
	}

	/**
	 * @return float|null
	 */
	public function getAcqId() : ?float {
		return $this->acq_id;
	}

	/**
	 * @return string|null
	 */
	public function getAction() : ?string {
		return $this->action;
	}

	/**
	 * @return float
	 */
	public function getAgentCommission() : float {
		return $this->agent_commission;
	}

	/**
	 * @return float|null
	 */
	public function getAmount() : ?float {
		return $this->amount;
	}

	/**
	 * @return float
	 */
	public function getAmountBonus() : float {
		return $this->amount_bonus;
	}

	/**
	 * @return float|null
	 */
	public function getAmountCredit() : ?float {
		return $this->amount_credit;
	}

	/**
	 * @return float|null
	 */
	public function getAmountDebit() : ?float {
		return $this->amount_debit;
	}

	/**
	 * @return float
	 */
	public function getCommissionCredit() : float {
		return $this->commission_credit;
	}

	/**
	 * @return float
	 */
	public function getCommissionDebit() : float {
		return $this->commission_debit;
	}

	/**
	 * @return string|null
	 */
	public function getCurrency() : ?string {
		return $this->currency;
	}

	/**
	 * @return string|null
	 */
	public function getCurrencyCredit() : ?string {
		return $this->currency_credit;
	}

	/**
	 * @return string|null
	 */
	public function getCurrencyDebit() : ?string {
		return $this->currency_debit;
	}

	/**
	 * @return string|null
	 */
	public function getDescription() : ?string {
		return $this->description;
	}

	/**
	 * @return bool|null
	 */
	public function getIs_3ds() : ?bool {
		return $this->is_3ds;
	}

	/**
	 * @return string|null
	 */
	public function getLiqPayOrderId() : ?string {
		return $this->liq_pay_order_id;
	}

	/**
	 * @return int|null
	 */
	public function getMpiEci() : ?int {
		return $this->mpi_eci;
	}

	/**
	 * @return string|null
	 */
	public function getOrderId() : ?string {
		return $this->order_id;
	}

	/**
	 * @return string|null
	 */
	public function getPaymentId() : ?string {
		return $this->payment_id;
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
	public function getQrCode() : ?string {
		return $this->qr_code;
	}

	/**
	 * @return float
	 */
	public function getReceiverCommission() : float {
		return $this->receiver_commission;
	}

	/**
	 * @return float
	 */
	public function getSenderBonus() : float {
		return $this->sender_bonus;
	}

	/**
	 * @return float
	 */
	public function getSenderCommission() : float {
		return $this->sender_commission;
	}

	/**
	 * @return string|null
	 */
	public function getStatus() : ?string {
		return $this->status;
	}

	/**
	 * @return string|null
	 */
	public function getTransactionId() : ?string {
		return $this->transaction_id;
	}

	/**
	 * @return string|null
	 */
	public function getType() : ?string {
		return $this->type;
	}

	/**
	 * @return float|null
	 */
	public function getVersion() : ?float {
		return $this->version;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize() : array {

		$result = [];

		if ($this->acq_id !== null) {
			$result['acq_id'] = $this->acq_id;
		}

		if ($this->action !== null) {
			$result['action'] = $this->action;
		}

		if ($this->agent_commission !== 0.0) {
			$result['agent_commission'] = $this->agent_commission;
		}

		if ($this->amount !== null) {
			$result['amount'] = $this->amount;
		}

		if ($this->amount_bonus !== 0.0) {
			$result['amount_bonus'] = $this->amount_bonus;
		}

		if ($this->amount_credit !== null) {
			$result['amount_credit'] = $this->amount_credit;
		}

		if ($this->amount_debit !== null) {
			$result['amount_debit'] = $this->amount_debit;
		}

		if ($this->commission_credit !== 0.0) {
			$result['commission_credit'] = $this->commission_credit;
		}

		if ($this->commission_debit !== 0.0) {
			$result['commission_debit'] = $this->commission_debit;
		}

		if ($this->currency !== null) {
			$result['currency'] = $this->currency;
		}

		if ($this->currency_credit !== null) {
			$result['currency_credit'] = $this->currency_credit;
		}

		if ($this->currency_debit !== null) {
			$result['currency_debit'] = $this->currency_debit;
		}

		if ($this->description !== null) {
			$result['description'] = $this->description;
		}

		if ($this->is_3ds !== null) {
			$result['is_3ds'] = $this->is_3ds;
		}

		if ($this->liq_pay_order_id !== null) {
			$result['liq_pay_order_id'] = $this->liq_pay_order_id;
		}

		if ($this->mpi_eci !== null) {
			$result['mpi_eci'] = $this->mpi_eci;
		}

		if ($this->order_id !== null) {
			$result['order_id'] = $this->order_id;
		}

		if ($this->payment_id !== null) {
			$result['payment_id'] = $this->payment_id;
		}

		if ($this->public_key !== null) {
			$result['public_key'] = $this->public_key;
		}

		if ($this->qr_code !== null) {
			$result['qr_code'] = $this->qr_code;
		}

		if ($this->receiver_commission !== 0.0) {
			$result['receiver_commission'] = $this->receiver_commission;
		}

		if ($this->sender_bonus !== 0.0) {
			$result['sender_bonus'] = $this->sender_bonus;
		}

		if ($this->sender_commission !== 0.0) {
			$result['sender_commission'] = $this->sender_commission;
		}

		if ($this->status !== null) {
			$result['status'] = $this->status;
		}

		if ($this->transaction_id !== null) {
			$result['transaction_id'] = $this->transaction_id;
		}

		if ($this->type !== null) {
			$result['type'] = $this->type;
		}

		if ($this->version !== null) {
			$result['version'] = $this->version;
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
		$acq_id = $arr['acq_id'] ?? null;
		$acq_id = $acq_id === null ? null : (float)$acq_id;

		$action = $arr['action'] ?? null;
		$action = $action === null ? null : (string)$action;

		$agent_commission = 0.0;
		if (\array_key_exists('agent_commission', $arr)) {
			$agent_commission = $arr['agent_commission'];
		}
		$agent_commission = $agent_commission === null ? null : (float)$agent_commission;

		$amount = $arr['amount'] ?? null;
		$amount = $amount === null ? null : (float)$amount;

		$amount_bonus = 0.0;
		if (\array_key_exists('amount_bonus', $arr)) {
			$amount_bonus = $arr['amount_bonus'];
		}
		$amount_bonus = $amount_bonus === null ? null : (float)$amount_bonus;

		$amount_credit = $arr['amount_credit'] ?? null;
		$amount_credit = $amount_credit === null ? null : (float)$amount_credit;

		$amount_debit = $arr['amount_debit'] ?? null;
		$amount_debit = $amount_debit === null ? null : (float)$amount_debit;

		$commission_credit = 0.0;
		if (\array_key_exists('commission_credit', $arr)) {
			$commission_credit = $arr['commission_credit'];
		}
		$commission_credit = $commission_credit === null ? null : (float)$commission_credit;

		$commission_debit = 0.0;
		if (\array_key_exists('commission_debit', $arr)) {
			$commission_debit = $arr['commission_debit'];
		}
		$commission_debit = $commission_debit === null ? null : (float)$commission_debit;

		$currency = $arr['currency'] ?? null;
		$currency = $currency === null ? null : (string)$currency;

		$currency_credit = $arr['currency_credit'] ?? null;
		$currency_credit = $currency_credit === null ? null : (string)$currency_credit;

		$currency_debit = $arr['currency_debit'] ?? null;
		$currency_debit = $currency_debit === null ? null : (string)$currency_debit;

		$description = $arr['description'] ?? null;
		$description = $description === null ? null : (string)$description;

		$is_3ds = $arr['is_3ds'] ?? null;
		$is_3ds = $is_3ds === null ? null : (bool)$is_3ds;

		$liq_pay_order_id = null;
		if (\array_key_exists('liq_pay_order_id', $arr)) {
			$liq_pay_order_id = $arr['liq_pay_order_id'];
		} elseif (\array_key_exists('liqpay_order_id', $arr)) {
			$liq_pay_order_id = $arr['liqpay_order_id'];
		}
		$liq_pay_order_id = $liq_pay_order_id === null ? null : (string)$liq_pay_order_id;

		$mpi_eci = $arr['mpi_eci'] ?? null;
		$mpi_eci = $mpi_eci === null ? null : (int)$mpi_eci;

		$order_id = $arr['order_id'] ?? null;
		$order_id = $order_id === null ? null : (string)$order_id;

		$payment_id = $arr['payment_id'] ?? null;
		$payment_id = $payment_id === null ? null : (string)$payment_id;

		$public_key = $arr['public_key'] ?? null;
		$public_key = $public_key === null ? null : (string)$public_key;

		$qr_code = $arr['qr_code'] ?? null;
		$qr_code = $qr_code === null ? null : (string)$qr_code;

		$receiver_commission = 0.0;
		if (\array_key_exists('receiver_commission', $arr)) {
			$receiver_commission = $arr['receiver_commission'];
		}
		$receiver_commission = $receiver_commission === null ? null : (float)$receiver_commission;

		$sender_bonus = 0.0;
		if (\array_key_exists('sender_bonus', $arr)) {
			$sender_bonus = $arr['sender_bonus'];
		}
		$sender_bonus = $sender_bonus === null ? null : (float)$sender_bonus;

		$sender_commission = 0.0;
		if (\array_key_exists('sender_commission', $arr)) {
			$sender_commission = $arr['sender_commission'];
		}
		$sender_commission = $sender_commission === null ? null : (float)$sender_commission;

		$status = $arr['status'] ?? null;
		$status = $status === null ? null : (string)$status;

		$transaction_id = $arr['transaction_id'] ?? null;
		$transaction_id = $transaction_id === null ? null : (string)$transaction_id;

		$type = $arr['type'] ?? null;
		$type = $type === null ? null : (string)$type;

		$version = $arr['version'] ?? null;
		$version = $version === null ? null : (float)$version;

		return new self(
			$acq_id,
			$action,
			$agent_commission,
			$amount,
			$amount_bonus,
			$amount_credit,
			$amount_debit,
			$commission_credit,
			$commission_debit,
			$currency,
			$currency_credit,
			$currency_debit,
			$description,
			$is_3ds,
			$liq_pay_order_id,
			$mpi_eci,
			$order_id,
			$payment_id,
			$public_key,
			$qr_code,
			$receiver_commission,
			$sender_bonus,
			$sender_commission,
			$status,
			$transaction_id,
			$type,
			$version);
	}

	/**
	 * @param self|null $x
	 * @return bool
	 */
	public function equals(?self $x) : bool {

		return $x !== null

			&& $this->acq_id === $x->acq_id

			&& $this->action === $x->action

			&& $this->agent_commission === $x->agent_commission

			&& $this->amount === $x->amount

			&& $this->amount_bonus === $x->amount_bonus

			&& $this->amount_credit === $x->amount_credit

			&& $this->amount_debit === $x->amount_debit

			&& $this->commission_credit === $x->commission_credit

			&& $this->commission_debit === $x->commission_debit

			&& $this->currency === $x->currency

			&& $this->currency_credit === $x->currency_credit

			&& $this->currency_debit === $x->currency_debit

			&& $this->description === $x->description

			&& $this->is_3ds === $x->is_3ds

			&& $this->liq_pay_order_id === $x->liq_pay_order_id

			&& $this->mpi_eci === $x->mpi_eci

			&& $this->order_id === $x->order_id

			&& $this->payment_id === $x->payment_id

			&& $this->public_key === $x->public_key

			&& $this->qr_code === $x->qr_code

			&& $this->receiver_commission === $x->receiver_commission

			&& $this->sender_bonus === $x->sender_bonus

			&& $this->sender_commission === $x->sender_commission

			&& $this->status === $x->status

			&& $this->transaction_id === $x->transaction_id

			&& $this->type === $x->type

			&& $this->version === $x->version;
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
