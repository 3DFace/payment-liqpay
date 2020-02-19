<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class StatusResponse implements \JsonSerializable {

	/** @var string */
	private $status;
	/** @var string */
	private $order_id;
	/** @var float|null */
	private $acq_id;
	/** @var string|null */
	private $action;
	/** @var float */
	private $agent_commission;
	/** @var float|null */
	private $amount;
	/** @var float */
	private $amount_bonus;
	/** @var float|null */
	private $amount_credit;
	/** @var float|null */
	private $amount_debit;
	/** @var string|null */
	private $authcode_credit;
	/** @var string|null */
	private $authcode_debit;
	/** @var float */
	private $bonus_procent;
	/** @var string|null */
	private $bonus_type;
	/** @var string|null */
	private $card_token;
	/** @var float */
	private $commission_credit;
	/** @var float */
	private $commission_debit;
	/** @var string|null */
	private $create_date;
	/** @var string|null */
	private $currency;
	/** @var string|null */
	private $currency_credit;
	/** @var string|null */
	private $currency_debit;
	/** @var string|null */
	private $description;
	/** @var string|null */
	private $end_date;
	/** @var string|null */
	private $err_code;
	/** @var string|null */
	private $err_description;
	/** @var string|null */
	private $info;
	/** @var string|null */
	private $ip;
	/** @var bool|null */
	private $is_3ds;
	/** @var string|null */
	private $liq_pay_order_id;
	/** @var int|null */
	private $mpi_eci;
	/** @var string|null */
	private $payment_id;
	/** @var string|null */
	private $pay_type;
	/** @var string|null */
	private $public_key;
	/** @var float */
	private $receiver_commission;
	/** @var string|null */
	private $rrn_credit;
	/** @var string|null */
	private $rrn_debit;
	/** @var float */
	private $sender_bonus;
	/** @var string|null */
	private $sender_card_bank;
	/** @var string|null */
	private $sender_card_country;
	/** @var string|null */
	private $sender_card_mask2;
	/** @var string|null */
	private $sender_card_type;
	/** @var float */
	private $sender_commission;
	/** @var string|null */
	private $sender_phone;
	/** @var string|null */
	private $transaction_id;
	/** @var string|null */
	private $type;
	/** @var float|null */
	private $version;

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
		?string $authcode_credit = null,
		?string $authcode_debit = null,
		float $bonus_procent = 0.0,
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
	){
		$this->status = $status;
		$this->order_id = $order_id;
		$this->acq_id = $acq_id;
		$this->action = $action;
		$this->agent_commission = $agent_commission;
		$this->amount = $amount;
		$this->amount_bonus = $amount_bonus;
		$this->amount_credit = $amount_credit;
		$this->amount_debit = $amount_debit;
		$this->authcode_credit = $authcode_credit;
		$this->authcode_debit = $authcode_debit;
		$this->bonus_procent = $bonus_procent;
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
	public function getAuthcodeCredit() : ?string {
		return $this->authcode_credit;
	}

	/**
	 * @return string|null
	 */
	public function getAuthcodeDebit() : ?string {
		return $this->authcode_debit;
	}

	/**
	 * @return float
	 */
	public function getBonusProcent() : float {
		return $this->bonus_procent;
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
	public function jsonSerialize(){

		$result = [];

		$result['status'] = $this->status;

		$result['order_id'] = $this->order_id;

		if($this->acq_id !== null){
			$result['acq_id'] = $this->acq_id;
		}

		if($this->action !== null){
			$result['action'] = $this->action;
		}

		if($this->agent_commission !== 0.0){
			$result['agent_commission'] = $this->agent_commission;
		}

		if($this->amount !== null){
			$result['amount'] = $this->amount;
		}

		if($this->amount_bonus !== 0.0){
			$result['amount_bonus'] = $this->amount_bonus;
		}

		if($this->amount_credit !== null){
			$result['amount_credit'] = $this->amount_credit;
		}

		if($this->amount_debit !== null){
			$result['amount_debit'] = $this->amount_debit;
		}

		if($this->authcode_credit !== null){
			$result['authcode_credit'] = $this->authcode_credit;
		}

		if($this->authcode_debit !== null){
			$result['authcode_debit'] = $this->authcode_debit;
		}

		if($this->bonus_procent !== 0.0){
			$result['bonus_procent'] = $this->bonus_procent;
		}

		if($this->bonus_type !== null){
			$result['bonus_type'] = $this->bonus_type;
		}

		if($this->card_token !== null){
			$result['card_token'] = $this->card_token;
		}

		if($this->commission_credit !== 0.0){
			$result['commission_credit'] = $this->commission_credit;
		}

		if($this->commission_debit !== 0.0){
			$result['commission_debit'] = $this->commission_debit;
		}

		if($this->create_date !== null){
			$result['create_date'] = $this->create_date;
		}

		if($this->currency !== null){
			$result['currency'] = $this->currency;
		}

		if($this->currency_credit !== null){
			$result['currency_credit'] = $this->currency_credit;
		}

		if($this->currency_debit !== null){
			$result['currency_debit'] = $this->currency_debit;
		}

		if($this->description !== null){
			$result['description'] = $this->description;
		}

		if($this->end_date !== null){
			$result['end_date'] = $this->end_date;
		}

		if($this->err_code !== null){
			$result['err_code'] = $this->err_code;
		}

		if($this->err_description !== null){
			$result['err_description'] = $this->err_description;
		}

		if($this->info !== null){
			$result['info'] = $this->info;
		}

		if($this->ip !== null){
			$result['ip'] = $this->ip;
		}

		if($this->is_3ds !== null){
			$result['is_3ds'] = $this->is_3ds;
		}

		if($this->liq_pay_order_id !== null){
			$result['liq_pay_order_id'] = $this->liq_pay_order_id;
		}

		if($this->mpi_eci !== null){
			$result['mpi_eci'] = $this->mpi_eci;
		}

		if($this->payment_id !== null){
			$result['payment_id'] = $this->payment_id;
		}

		if($this->pay_type !== null){
			$result['pay_type'] = $this->pay_type;
		}

		if($this->public_key !== null){
			$result['public_key'] = $this->public_key;
		}

		if($this->receiver_commission !== 0.0){
			$result['receiver_commission'] = $this->receiver_commission;
		}

		if($this->rrn_credit !== null){
			$result['rrn_credit'] = $this->rrn_credit;
		}

		if($this->rrn_debit !== null){
			$result['rrn_debit'] = $this->rrn_debit;
		}

		if($this->sender_bonus !== 0.0){
			$result['sender_bonus'] = $this->sender_bonus;
		}

		if($this->sender_card_bank !== null){
			$result['sender_card_bank'] = $this->sender_card_bank;
		}

		if($this->sender_card_country !== null){
			$result['sender_card_country'] = $this->sender_card_country;
		}

		if($this->sender_card_mask2 !== null){
			$result['sender_card_mask2'] = $this->sender_card_mask2;
		}

		if($this->sender_card_type !== null){
			$result['sender_card_type'] = $this->sender_card_type;
		}

		if($this->sender_commission !== 0.0){
			$result['sender_commission'] = $this->sender_commission;
		}

		if($this->sender_phone !== null){
			$result['sender_phone'] = $this->sender_phone;
		}

		if($this->transaction_id !== null){
			$result['transaction_id'] = $this->transaction_id;
		}

		if($this->type !== null){
			$result['type'] = $this->type;
		}

		if($this->version !== null){
			$result['version'] = $this->version;
		}

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : StatusResponse {
		if(\array_key_exists('status', $arr)){
			$status = $arr['status'];
		}else{
			throw new \InvalidArgumentException("Property 'status' not specified");
		}
		$status = $status !== null ? (string)$status : null;

		if(\array_key_exists('order_id', $arr)){
			$order_id = $arr['order_id'];
		}else{
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id !== null ? (string)$order_id : null;

		$acq_id = null;
		if(\array_key_exists('acq_id', $arr)){
			$acq_id = $arr['acq_id'];
		}
		$acq_id = $acq_id !== null ? (float)$acq_id : null;

		$action = null;
		if(\array_key_exists('action', $arr)){
			$action = $arr['action'];
		}
		$action = $action !== null ? (string)$action : null;

		$agent_commission = 0.0;
		if(\array_key_exists('agent_commission', $arr)){
			$agent_commission = $arr['agent_commission'];
		}
		$agent_commission = $agent_commission !== null ? (float)$agent_commission : null;

		$amount = null;
		if(\array_key_exists('amount', $arr)){
			$amount = $arr['amount'];
		}
		$amount = $amount !== null ? (float)$amount : null;

		$amount_bonus = 0.0;
		if(\array_key_exists('amount_bonus', $arr)){
			$amount_bonus = $arr['amount_bonus'];
		}
		$amount_bonus = $amount_bonus !== null ? (float)$amount_bonus : null;

		$amount_credit = null;
		if(\array_key_exists('amount_credit', $arr)){
			$amount_credit = $arr['amount_credit'];
		}
		$amount_credit = $amount_credit !== null ? (float)$amount_credit : null;

		$amount_debit = null;
		if(\array_key_exists('amount_debit', $arr)){
			$amount_debit = $arr['amount_debit'];
		}
		$amount_debit = $amount_debit !== null ? (float)$amount_debit : null;

		$authcode_credit = null;
		if(\array_key_exists('authcode_credit', $arr)){
			$authcode_credit = $arr['authcode_credit'];
		}
		$authcode_credit = $authcode_credit !== null ? (string)$authcode_credit : null;

		$authcode_debit = null;
		if(\array_key_exists('authcode_debit', $arr)){
			$authcode_debit = $arr['authcode_debit'];
		}
		$authcode_debit = $authcode_debit !== null ? (string)$authcode_debit : null;

		$bonus_procent = 0.0;
		if(\array_key_exists('bonus_procent', $arr)){
			$bonus_procent = $arr['bonus_procent'];
		}
		$bonus_procent = $bonus_procent !== null ? (float)$bonus_procent : null;

		$bonus_type = null;
		if(\array_key_exists('bonus_type', $arr)){
			$bonus_type = $arr['bonus_type'];
		}
		$bonus_type = $bonus_type !== null ? (string)$bonus_type : null;

		$card_token = null;
		if(\array_key_exists('card_token', $arr)){
			$card_token = $arr['card_token'];
		}
		$card_token = $card_token !== null ? (string)$card_token : null;

		$commission_credit = 0.0;
		if(\array_key_exists('commission_credit', $arr)){
			$commission_credit = $arr['commission_credit'];
		}
		$commission_credit = $commission_credit !== null ? (float)$commission_credit : null;

		$commission_debit = 0.0;
		if(\array_key_exists('commission_debit', $arr)){
			$commission_debit = $arr['commission_debit'];
		}
		$commission_debit = $commission_debit !== null ? (float)$commission_debit : null;

		$create_date = null;
		if(\array_key_exists('create_date', $arr)){
			$create_date = $arr['create_date'];
		}
		$create_date = $create_date !== null ? (string)$create_date : null;

		$currency = null;
		if(\array_key_exists('currency', $arr)){
			$currency = $arr['currency'];
		}
		$currency = $currency !== null ? (string)$currency : null;

		$currency_credit = null;
		if(\array_key_exists('currency_credit', $arr)){
			$currency_credit = $arr['currency_credit'];
		}
		$currency_credit = $currency_credit !== null ? (string)$currency_credit : null;

		$currency_debit = null;
		if(\array_key_exists('currency_debit', $arr)){
			$currency_debit = $arr['currency_debit'];
		}
		$currency_debit = $currency_debit !== null ? (string)$currency_debit : null;

		$description = null;
		if(\array_key_exists('description', $arr)){
			$description = $arr['description'];
		}
		$description = $description !== null ? (string)$description : null;

		$end_date = null;
		if(\array_key_exists('end_date', $arr)){
			$end_date = $arr['end_date'];
		}
		$end_date = $end_date !== null ? (string)$end_date : null;

		$err_code = null;
		if(\array_key_exists('err_code', $arr)){
			$err_code = $arr['err_code'];
		}
		$err_code = $err_code !== null ? (string)$err_code : null;

		$err_description = null;
		if(\array_key_exists('err_description', $arr)){
			$err_description = $arr['err_description'];
		}
		$err_description = $err_description !== null ? (string)$err_description : null;

		$info = null;
		if(\array_key_exists('info', $arr)){
			$info = $arr['info'];
		}
		$info = $info !== null ? (string)$info : null;

		$ip = null;
		if(\array_key_exists('ip', $arr)){
			$ip = $arr['ip'];
		}
		$ip = $ip !== null ? (string)$ip : null;

		$is_3ds = null;
		if(\array_key_exists('is_3ds', $arr)){
			$is_3ds = $arr['is_3ds'];
		}
		$is_3ds = $is_3ds !== null ? (bool)$is_3ds : null;

		$liq_pay_order_id = null;
		if(\array_key_exists('liq_pay_order_id', $arr)){
			$liq_pay_order_id = $arr['liq_pay_order_id'];
		}elseif(\array_key_exists('liqpay_order_id', $arr)){
			$liq_pay_order_id = $arr['liqpay_order_id'];
		}
		$liq_pay_order_id = $liq_pay_order_id !== null ? (string)$liq_pay_order_id : null;

		$mpi_eci = null;
		if(\array_key_exists('mpi_eci', $arr)){
			$mpi_eci = $arr['mpi_eci'];
		}
		$mpi_eci = $mpi_eci !== null ? (int)$mpi_eci : null;

		$payment_id = null;
		if(\array_key_exists('payment_id', $arr)){
			$payment_id = $arr['payment_id'];
		}
		$payment_id = $payment_id !== null ? (string)$payment_id : null;

		$pay_type = null;
		if(\array_key_exists('pay_type', $arr)){
			$pay_type = $arr['pay_type'];
		}
		$pay_type = $pay_type !== null ? (string)$pay_type : null;

		$public_key = null;
		if(\array_key_exists('public_key', $arr)){
			$public_key = $arr['public_key'];
		}
		$public_key = $public_key !== null ? (string)$public_key : null;

		$receiver_commission = 0.0;
		if(\array_key_exists('receiver_commission', $arr)){
			$receiver_commission = $arr['receiver_commission'];
		}
		$receiver_commission = $receiver_commission !== null ? (float)$receiver_commission : null;

		$rrn_credit = null;
		if(\array_key_exists('rrn_credit', $arr)){
			$rrn_credit = $arr['rrn_credit'];
		}
		$rrn_credit = $rrn_credit !== null ? (string)$rrn_credit : null;

		$rrn_debit = null;
		if(\array_key_exists('rrn_debit', $arr)){
			$rrn_debit = $arr['rrn_debit'];
		}
		$rrn_debit = $rrn_debit !== null ? (string)$rrn_debit : null;

		$sender_bonus = 0.0;
		if(\array_key_exists('sender_bonus', $arr)){
			$sender_bonus = $arr['sender_bonus'];
		}
		$sender_bonus = $sender_bonus !== null ? (float)$sender_bonus : null;

		$sender_card_bank = null;
		if(\array_key_exists('sender_card_bank', $arr)){
			$sender_card_bank = $arr['sender_card_bank'];
		}
		$sender_card_bank = $sender_card_bank !== null ? (string)$sender_card_bank : null;

		$sender_card_country = null;
		if(\array_key_exists('sender_card_country', $arr)){
			$sender_card_country = $arr['sender_card_country'];
		}
		$sender_card_country = $sender_card_country !== null ? (string)$sender_card_country : null;

		$sender_card_mask2 = null;
		if(\array_key_exists('sender_card_mask2', $arr)){
			$sender_card_mask2 = $arr['sender_card_mask2'];
		}
		$sender_card_mask2 = $sender_card_mask2 !== null ? (string)$sender_card_mask2 : null;

		$sender_card_type = null;
		if(\array_key_exists('sender_card_type', $arr)){
			$sender_card_type = $arr['sender_card_type'];
		}
		$sender_card_type = $sender_card_type !== null ? (string)$sender_card_type : null;

		$sender_commission = 0.0;
		if(\array_key_exists('sender_commission', $arr)){
			$sender_commission = $arr['sender_commission'];
		}
		$sender_commission = $sender_commission !== null ? (float)$sender_commission : null;

		$sender_phone = null;
		if(\array_key_exists('sender_phone', $arr)){
			$sender_phone = $arr['sender_phone'];
		}
		$sender_phone = $sender_phone !== null ? (string)$sender_phone : null;

		$transaction_id = null;
		if(\array_key_exists('transaction_id', $arr)){
			$transaction_id = $arr['transaction_id'];
		}
		$transaction_id = $transaction_id !== null ? (string)$transaction_id : null;

		$type = null;
		if(\array_key_exists('type', $arr)){
			$type = $arr['type'];
		}
		$type = $type !== null ? (string)$type : null;

		$version = null;
		if(\array_key_exists('version', $arr)){
			$version = $arr['version'];
		}
		$version = $version !== null ? (float)$version : null;

		return new static(
			$status,
			$order_id,
			$acq_id,
			$action,
			$agent_commission,
			$amount,
			$amount_bonus,
			$amount_credit,
			$amount_debit,
			$authcode_credit,
			$authcode_debit,
			$bonus_procent,
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

}
