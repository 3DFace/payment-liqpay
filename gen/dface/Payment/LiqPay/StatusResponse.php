<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class StatusResponse implements JsonSerializable {

	private string $status;
	private string $order_id;
	private ?float $acq_id;
	private ?string $action;
	private float $agent_commission;
	private ?float $amount;
	private float $amount_bonus;
	private ?float $amount_credit;
	private ?float $amount_debit;
	private ?string $auth_code_credit;
	private ?string $auth_code_debit;
	private float $bonus_percent;
	private ?string $bonus_type;
	private ?string $card_token;
	private float $commission_credit;
	private float $commission_debit;
	private ?string $create_date;
	private ?string $currency;
	private ?string $currency_credit;
	private ?string $currency_debit;
	private ?string $description;
	private ?string $end_date;
	private ?string $err_code;
	private ?string $err_description;
	private ?string $info;
	private ?string $ip;
	private ?bool $is_3ds;
	private ?string $liq_pay_order_id;
	private ?int $mpi_eci;
	private ?string $payment_id;
	private ?string $pay_type;
	private ?string $public_key;
	private float $receiver_commission;
	private ?string $rrn_credit;
	private ?string $rrn_debit;
	private float $sender_bonus;
	private ?string $sender_card_bank;
	private ?string $sender_card_country;
	private ?string $sender_card_mask2;
	private ?string $sender_card_type;
	private float $sender_commission;
	private ?string $sender_phone;
	private ?string $transaction_id;
	private ?string $type;
	private ?float $version;
	private bool $_dirty = false;

	/**
	 * @param string $status
	 * @param string $order_id
	 * @param float|null $acq_id
	 * @param string|null $action
	 * @param float $agent_commission
	 * @param float|null $amount
	 * @param float $amount_bonus
	 * @param float|null $amount_credit
	 * @param float|null $amount_debit
	 * @param string|null $auth_code_credit
	 * @param string|null $auth_code_debit
	 * @param float $bonus_percent
	 * @param string|null $bonus_type
	 * @param string|null $card_token
	 * @param float $commission_credit
	 * @param float $commission_debit
	 * @param string|null $create_date
	 * @param string|null $currency
	 * @param string|null $currency_credit
	 * @param string|null $currency_debit
	 * @param string|null $description
	 * @param string|null $end_date
	 * @param string|null $err_code
	 * @param string|null $err_description
	 * @param string|null $info
	 * @param string|null $ip
	 * @param bool|null $is_3ds
	 * @param string|null $liq_pay_order_id
	 * @param int|null $mpi_eci
	 * @param string|null $payment_id
	 * @param string|null $pay_type
	 * @param string|null $public_key
	 * @param float $receiver_commission
	 * @param string|null $rrn_credit
	 * @param string|null $rrn_debit
	 * @param float $sender_bonus
	 * @param string|null $sender_card_bank
	 * @param string|null $sender_card_country
	 * @param string|null $sender_card_mask2
	 * @param string|null $sender_card_type
	 * @param float $sender_commission
	 * @param string|null $sender_phone
	 * @param string|null $transaction_id
	 * @param string|null $type
	 * @param float|null $version
	 */
	public function __construct(
		string $status,
		string $order_id,
		?float $acq_id = null,
		?string $action = null,
		float $agent_commission = 0.0,
		?float $amount = null,
		float $amount_bonus = 0.0,
		?float $amount_credit = null,
		?float $amount_debit = null,
		?string $auth_code_credit = null,
		?string $auth_code_debit = null,
		float $bonus_percent = 0.0,
		?string $bonus_type = null,
		?string $card_token = null,
		float $commission_credit = 0.0,
		float $commission_debit = 0.0,
		?string $create_date = null,
		?string $currency = null,
		?string $currency_credit = null,
		?string $currency_debit = null,
		?string $description = null,
		?string $end_date = null,
		?string $err_code = null,
		?string $err_description = null,
		?string $info = null,
		?string $ip = null,
		?bool $is_3ds = null,
		?string $liq_pay_order_id = null,
		?int $mpi_eci = null,
		?string $payment_id = null,
		?string $pay_type = null,
		?string $public_key = null,
		float $receiver_commission = 0.0,
		?string $rrn_credit = null,
		?string $rrn_debit = null,
		float $sender_bonus = 0.0,
		?string $sender_card_bank = null,
		?string $sender_card_country = null,
		?string $sender_card_mask2 = null,
		?string $sender_card_type = null,
		float $sender_commission = 0.0,
		?string $sender_phone = null,
		?string $transaction_id = null,
		?string $type = null,
		?float $version = null
	) {
		$this->status = $status;
		$this->order_id = $order_id;
		$this->acq_id = $acq_id;
		$this->action = $action;
		$this->agent_commission = $agent_commission;
		$this->amount = $amount;
		$this->amount_bonus = $amount_bonus;
		$this->amount_credit = $amount_credit;
		$this->amount_debit = $amount_debit;
		$this->auth_code_credit = $auth_code_credit;
		$this->auth_code_debit = $auth_code_debit;
		$this->bonus_percent = $bonus_percent;
		$this->bonus_type = $bonus_type;
		$this->card_token = $card_token;
		$this->commission_credit = $commission_credit;
		$this->commission_debit = $commission_debit;
		$this->create_date = $create_date;
		$this->currency = $currency;
		$this->currency_credit = $currency_credit;
		$this->currency_debit = $currency_debit;
		$this->description = $description;
		$this->end_date = $end_date;
		$this->err_code = $err_code;
		$this->err_description = $err_description;
		$this->info = $info;
		$this->ip = $ip;
		$this->is_3ds = $is_3ds;
		$this->liq_pay_order_id = $liq_pay_order_id;
		$this->mpi_eci = $mpi_eci;
		$this->payment_id = $payment_id;
		$this->pay_type = $pay_type;
		$this->public_key = $public_key;
		$this->receiver_commission = $receiver_commission;
		$this->rrn_credit = $rrn_credit;
		$this->rrn_debit = $rrn_debit;
		$this->sender_bonus = $sender_bonus;
		$this->sender_card_bank = $sender_card_bank;
		$this->sender_card_country = $sender_card_country;
		$this->sender_card_mask2 = $sender_card_mask2;
		$this->sender_card_type = $sender_card_type;
		$this->sender_commission = $sender_commission;
		$this->sender_phone = $sender_phone;
		$this->transaction_id = $transaction_id;
		$this->type = $type;
		$this->version = $version;
	}

	/**
	 * @return string
	 */
	public function getStatus() : string {
		return $this->status;
	}

	/**
	 * @return string
	 */
	public function getOrderId() : string {
		return $this->order_id;
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
	 * @return string|null
	 */
	public function getAuthCodeCredit() : ?string {
		return $this->auth_code_credit;
	}

	/**
	 * @return string|null
	 */
	public function getAuthCodeDebit() : ?string {
		return $this->auth_code_debit;
	}

	/**
	 * @return float
	 */
	public function getBonusPercent() : float {
		return $this->bonus_percent;
	}

	/**
	 * @return string|null
	 */
	public function getBonusType() : ?string {
		return $this->bonus_type;
	}

	/**
	 * @return string|null
	 */
	public function getCardToken() : ?string {
		return $this->card_token;
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
	public function getCreateDate() : ?string {
		return $this->create_date;
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
	 * @return string|null
	 */
	public function getEndDate() : ?string {
		return $this->end_date;
	}

	/**
	 * @return string|null
	 */
	public function getErrCode() : ?string {
		return $this->err_code;
	}

	/**
	 * @return string|null
	 */
	public function getErrDescription() : ?string {
		return $this->err_description;
	}

	/**
	 * @return string|null
	 */
	public function getInfo() : ?string {
		return $this->info;
	}

	/**
	 * @return string|null
	 */
	public function getIp() : ?string {
		return $this->ip;
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
	public function getPaymentId() : ?string {
		return $this->payment_id;
	}

	/**
	 * @return string|null
	 */
	public function getPayType() : ?string {
		return $this->pay_type;
	}

	/**
	 * @return string|null
	 */
	public function getPublicKey() : ?string {
		return $this->public_key;
	}

	/**
	 * @return float
	 */
	public function getReceiverCommission() : float {
		return $this->receiver_commission;
	}

	/**
	 * @return string|null
	 */
	public function getRrnCredit() : ?string {
		return $this->rrn_credit;
	}

	/**
	 * @return string|null
	 */
	public function getRrnDebit() : ?string {
		return $this->rrn_debit;
	}

	/**
	 * @return float
	 */
	public function getSenderBonus() : float {
		return $this->sender_bonus;
	}

	/**
	 * @return string|null
	 */
	public function getSenderCardBank() : ?string {
		return $this->sender_card_bank;
	}

	/**
	 * @return string|null
	 */
	public function getSenderCardCountry() : ?string {
		return $this->sender_card_country;
	}

	/**
	 * @return string|null
	 */
	public function getSenderCardMask2() : ?string {
		return $this->sender_card_mask2;
	}

	/**
	 * @return string|null
	 */
	public function getSenderCardType() : ?string {
		return $this->sender_card_type;
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
	public function getSenderPhone() : ?string {
		return $this->sender_phone;
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

		$result['status'] = $this->status;

		$result['order_id'] = $this->order_id;

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

		if ($this->auth_code_credit !== null) {
			$result['authcode_credit'] = $this->auth_code_credit;
		}

		if ($this->auth_code_debit !== null) {
			$result['authcode_debit'] = $this->auth_code_debit;
		}

		if ($this->bonus_percent !== 0.0) {
			$result['bonus_procent'] = $this->bonus_percent;
		}

		if ($this->bonus_type !== null) {
			$result['bonus_type'] = $this->bonus_type;
		}

		if ($this->card_token !== null) {
			$result['card_token'] = $this->card_token;
		}

		if ($this->commission_credit !== 0.0) {
			$result['commission_credit'] = $this->commission_credit;
		}

		if ($this->commission_debit !== 0.0) {
			$result['commission_debit'] = $this->commission_debit;
		}

		if ($this->create_date !== null) {
			$result['create_date'] = $this->create_date;
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

		if ($this->end_date !== null) {
			$result['end_date'] = $this->end_date;
		}

		if ($this->err_code !== null) {
			$result['err_code'] = $this->err_code;
		}

		if ($this->err_description !== null) {
			$result['err_description'] = $this->err_description;
		}

		if ($this->info !== null) {
			$result['info'] = $this->info;
		}

		if ($this->ip !== null) {
			$result['ip'] = $this->ip;
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

		if ($this->payment_id !== null) {
			$result['payment_id'] = $this->payment_id;
		}

		if ($this->pay_type !== null) {
			$result['pay_type'] = $this->pay_type;
		}

		if ($this->public_key !== null) {
			$result['public_key'] = $this->public_key;
		}

		if ($this->receiver_commission !== 0.0) {
			$result['receiver_commission'] = $this->receiver_commission;
		}

		if ($this->rrn_credit !== null) {
			$result['rrn_credit'] = $this->rrn_credit;
		}

		if ($this->rrn_debit !== null) {
			$result['rrn_debit'] = $this->rrn_debit;
		}

		if ($this->sender_bonus !== 0.0) {
			$result['sender_bonus'] = $this->sender_bonus;
		}

		if ($this->sender_card_bank !== null) {
			$result['sender_card_bank'] = $this->sender_card_bank;
		}

		if ($this->sender_card_country !== null) {
			$result['sender_card_country'] = $this->sender_card_country;
		}

		if ($this->sender_card_mask2 !== null) {
			$result['sender_card_mask2'] = $this->sender_card_mask2;
		}

		if ($this->sender_card_type !== null) {
			$result['sender_card_type'] = $this->sender_card_type;
		}

		if ($this->sender_commission !== 0.0) {
			$result['sender_commission'] = $this->sender_commission;
		}

		if ($this->sender_phone !== null) {
			$result['sender_phone'] = $this->sender_phone;
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
		if (\array_key_exists('status', $arr)) {
			$status = $arr['status'];
		} else {
			throw new \InvalidArgumentException("Property 'status' not specified");
		}
		$status = $status === null ? null : (string)$status;

		if (\array_key_exists('order_id', $arr)) {
			$order_id = $arr['order_id'];
		} else {
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id === null ? null : (string)$order_id;

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

		$auth_code_credit = $arr['authcode_credit'] ?? null;
		$auth_code_credit = $auth_code_credit === null ? null : (string)$auth_code_credit;

		$auth_code_debit = $arr['authcode_debit'] ?? null;
		$auth_code_debit = $auth_code_debit === null ? null : (string)$auth_code_debit;

		$bonus_percent = 0.0;
		if (\array_key_exists('bonus_procent', $arr)) {
			$bonus_percent = $arr['bonus_procent'];
		}
		$bonus_percent = $bonus_percent === null ? null : (float)$bonus_percent;

		$bonus_type = $arr['bonus_type'] ?? null;
		$bonus_type = $bonus_type === null ? null : (string)$bonus_type;

		$card_token = $arr['card_token'] ?? null;
		$card_token = $card_token === null ? null : (string)$card_token;

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

		$create_date = $arr['create_date'] ?? null;
		$create_date = $create_date === null ? null : (string)$create_date;

		$currency = $arr['currency'] ?? null;
		$currency = $currency === null ? null : (string)$currency;

		$currency_credit = $arr['currency_credit'] ?? null;
		$currency_credit = $currency_credit === null ? null : (string)$currency_credit;

		$currency_debit = $arr['currency_debit'] ?? null;
		$currency_debit = $currency_debit === null ? null : (string)$currency_debit;

		$description = $arr['description'] ?? null;
		$description = $description === null ? null : (string)$description;

		$end_date = $arr['end_date'] ?? null;
		$end_date = $end_date === null ? null : (string)$end_date;

		$err_code = $arr['err_code'] ?? null;
		$err_code = $err_code === null ? null : (string)$err_code;

		$err_description = $arr['err_description'] ?? null;
		$err_description = $err_description === null ? null : (string)$err_description;

		$info = $arr['info'] ?? null;
		$info = $info === null ? null : (string)$info;

		$ip = $arr['ip'] ?? null;
		$ip = $ip === null ? null : (string)$ip;

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

		$payment_id = $arr['payment_id'] ?? null;
		$payment_id = $payment_id === null ? null : (string)$payment_id;

		$pay_type = $arr['pay_type'] ?? null;
		$pay_type = $pay_type === null ? null : (string)$pay_type;

		$public_key = $arr['public_key'] ?? null;
		$public_key = $public_key === null ? null : (string)$public_key;

		$receiver_commission = 0.0;
		if (\array_key_exists('receiver_commission', $arr)) {
			$receiver_commission = $arr['receiver_commission'];
		}
		$receiver_commission = $receiver_commission === null ? null : (float)$receiver_commission;

		$rrn_credit = $arr['rrn_credit'] ?? null;
		$rrn_credit = $rrn_credit === null ? null : (string)$rrn_credit;

		$rrn_debit = $arr['rrn_debit'] ?? null;
		$rrn_debit = $rrn_debit === null ? null : (string)$rrn_debit;

		$sender_bonus = 0.0;
		if (\array_key_exists('sender_bonus', $arr)) {
			$sender_bonus = $arr['sender_bonus'];
		}
		$sender_bonus = $sender_bonus === null ? null : (float)$sender_bonus;

		$sender_card_bank = $arr['sender_card_bank'] ?? null;
		$sender_card_bank = $sender_card_bank === null ? null : (string)$sender_card_bank;

		$sender_card_country = $arr['sender_card_country'] ?? null;
		$sender_card_country = $sender_card_country === null ? null : (string)$sender_card_country;

		$sender_card_mask2 = $arr['sender_card_mask2'] ?? null;
		$sender_card_mask2 = $sender_card_mask2 === null ? null : (string)$sender_card_mask2;

		$sender_card_type = $arr['sender_card_type'] ?? null;
		$sender_card_type = $sender_card_type === null ? null : (string)$sender_card_type;

		$sender_commission = 0.0;
		if (\array_key_exists('sender_commission', $arr)) {
			$sender_commission = $arr['sender_commission'];
		}
		$sender_commission = $sender_commission === null ? null : (float)$sender_commission;

		$sender_phone = $arr['sender_phone'] ?? null;
		$sender_phone = $sender_phone === null ? null : (string)$sender_phone;

		$transaction_id = $arr['transaction_id'] ?? null;
		$transaction_id = $transaction_id === null ? null : (string)$transaction_id;

		$type = $arr['type'] ?? null;
		$type = $type === null ? null : (string)$type;

		$version = $arr['version'] ?? null;
		$version = $version === null ? null : (float)$version;

		return new self(
			$status,
			$order_id,
			$acq_id,
			$action,
			$agent_commission,
			$amount,
			$amount_bonus,
			$amount_credit,
			$amount_debit,
			$auth_code_credit,
			$auth_code_debit,
			$bonus_percent,
			$bonus_type,
			$card_token,
			$commission_credit,
			$commission_debit,
			$create_date,
			$currency,
			$currency_credit,
			$currency_debit,
			$description,
			$end_date,
			$err_code,
			$err_description,
			$info,
			$ip,
			$is_3ds,
			$liq_pay_order_id,
			$mpi_eci,
			$payment_id,
			$pay_type,
			$public_key,
			$receiver_commission,
			$rrn_credit,
			$rrn_debit,
			$sender_bonus,
			$sender_card_bank,
			$sender_card_country,
			$sender_card_mask2,
			$sender_card_type,
			$sender_commission,
			$sender_phone,
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

			&& $this->status === $x->status

			&& $this->order_id === $x->order_id

			&& $this->acq_id === $x->acq_id

			&& $this->action === $x->action

			&& $this->agent_commission === $x->agent_commission

			&& $this->amount === $x->amount

			&& $this->amount_bonus === $x->amount_bonus

			&& $this->amount_credit === $x->amount_credit

			&& $this->amount_debit === $x->amount_debit

			&& $this->auth_code_credit === $x->auth_code_credit

			&& $this->auth_code_debit === $x->auth_code_debit

			&& $this->bonus_percent === $x->bonus_percent

			&& $this->bonus_type === $x->bonus_type

			&& $this->card_token === $x->card_token

			&& $this->commission_credit === $x->commission_credit

			&& $this->commission_debit === $x->commission_debit

			&& $this->create_date === $x->create_date

			&& $this->currency === $x->currency

			&& $this->currency_credit === $x->currency_credit

			&& $this->currency_debit === $x->currency_debit

			&& $this->description === $x->description

			&& $this->end_date === $x->end_date

			&& $this->err_code === $x->err_code

			&& $this->err_description === $x->err_description

			&& $this->info === $x->info

			&& $this->ip === $x->ip

			&& $this->is_3ds === $x->is_3ds

			&& $this->liq_pay_order_id === $x->liq_pay_order_id

			&& $this->mpi_eci === $x->mpi_eci

			&& $this->payment_id === $x->payment_id

			&& $this->pay_type === $x->pay_type

			&& $this->public_key === $x->public_key

			&& $this->receiver_commission === $x->receiver_commission

			&& $this->rrn_credit === $x->rrn_credit

			&& $this->rrn_debit === $x->rrn_debit

			&& $this->sender_bonus === $x->sender_bonus

			&& $this->sender_card_bank === $x->sender_card_bank

			&& $this->sender_card_country === $x->sender_card_country

			&& $this->sender_card_mask2 === $x->sender_card_mask2

			&& $this->sender_card_type === $x->sender_card_type

			&& $this->sender_commission === $x->sender_commission

			&& $this->sender_phone === $x->sender_phone

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
