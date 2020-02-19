<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class CallbackNotification implements \JsonSerializable {

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
	/** @var string|null */
	private $card_token;
	/** @var float */
	private $commission_credit;
	/** @var float */
	private $commission_debit;
	/** @var string|null */
	private $completion_date;
	/** @var string|null */
	private $create_date;
	/** @var string|null */
	private $currency;
	/** @var string|null */
	private $currency_credit;
	/** @var string|null */
	private $currency_debit;
	/** @var string|null */
	private $customer;
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
	private $redirect_to;
	/** @var string|null */
	private $refund_date_last;
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
	private $sender_first_name;
	/** @var string|null */
	private $sender_last_name;
	/** @var string|null */
	private $sender_phone;
	/** @var string|null */
	private $token;
	/** @var string|null */
	private $type;
	/** @var float|null */
	private $version;
	/** @var string|null */
	private $err_erc;
	/** @var string|null */
	private $product_category;
	/** @var string|null */
	private $product_description;
	/** @var string|null */
	private $product_name;
	/** @var string|null */
	private $product_url;
	/** @var float */
	private $refund_amount;
	/** @var string|null */
	private $verifycode;

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
		?string $card_token = null,
		float $commission_credit = 0.0,
		float $commission_debit = 0.0,
		?string $completion_date = null,
		?string $create_date = null,
		?string $currency = null,
		?string $currency_credit = null,
		?string $currency_debit = null,
		?string $customer = null,
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
		?string $redirect_to = null,
		?string $refund_date_last = null,
		?string $rrn_credit = null,
		?string $rrn_debit = null,
		float $sender_bonus = 0.0,
		?string $sender_card_bank = null,
		?string $sender_card_country = null,
		?string $sender_card_mask2 = null,
		?string $sender_card_type = null,
		float $sender_commission = 0.0,
		?string $sender_first_name = null,
		?string $sender_last_name = null,
		?string $sender_phone = null,
		?string $token = null,
		?string $type = null,
		?float $version = null,
		?string $err_erc = null,
		?string $product_category = null,
		?string $product_description = null,
		?string $product_name = null,
		?string $product_url = null,
		float $refund_amount = 0.0,
		?string $verifycode = null
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
		$this->card_token = $card_token;
		$this->commission_credit = $commission_credit;
		$this->commission_debit = $commission_debit;
		$this->completion_date = $completion_date;
		$this->create_date = $create_date;
		$this->currency = $currency;
		$this->currency_credit = $currency_credit;
		$this->currency_debit = $currency_debit;
		$this->customer = $customer;
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
		$this->redirect_to = $redirect_to;
		$this->refund_date_last = $refund_date_last;
		$this->rrn_credit = $rrn_credit;
		$this->rrn_debit = $rrn_debit;
		$this->sender_bonus = $sender_bonus;
		$this->sender_card_bank = $sender_card_bank;
		$this->sender_card_country = $sender_card_country;
		$this->sender_card_mask2 = $sender_card_mask2;
		$this->sender_card_type = $sender_card_type;
		$this->sender_commission = $sender_commission;
		$this->sender_first_name = $sender_first_name;
		$this->sender_last_name = $sender_last_name;
		$this->sender_phone = $sender_phone;
		$this->token = $token;
		$this->type = $type;
		$this->version = $version;
		$this->err_erc = $err_erc;
		$this->product_category = $product_category;
		$this->product_description = $product_description;
		$this->product_name = $product_name;
		$this->product_url = $product_url;
		$this->refund_amount = $refund_amount;
		$this->verifycode = $verifycode;
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
	public function getCompletionDate() : ?string {
		return $this->completion_date;
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
	public function getCustomer() : ?string {
		return $this->customer;
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
	public function getRedirectTo() : ?string {
		return $this->redirect_to;
	}

	/**
	 * @return string|null
	 */
	public function getRefundDateLast() : ?string {
		return $this->refund_date_last;
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
	public function getSenderFirstName() : ?string {
		return $this->sender_first_name;
	}

	/**
	 * @return string|null
	 */
	public function getSenderLastName() : ?string {
		return $this->sender_last_name;
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
	public function getToken() : ?string {
		return $this->token;
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
	 * @return string|null
	 */
	public function getErrErc() : ?string {
		return $this->err_erc;
	}

	/**
	 * @return string|null
	 */
	public function getProductCategory() : ?string {
		return $this->product_category;
	}

	/**
	 * @return string|null
	 */
	public function getProductDescription() : ?string {
		return $this->product_description;
	}

	/**
	 * @return string|null
	 */
	public function getProductName() : ?string {
		return $this->product_name;
	}

	/**
	 * @return string|null
	 */
	public function getProductUrl() : ?string {
		return $this->product_url;
	}

	/**
	 * @return float
	 */
	public function getRefundAmount() : float {
		return $this->refund_amount;
	}

	/**
	 * @return string|null
	 */
	public function getVerifycode() : ?string {
		return $this->verifycode;
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

		if($this->card_token !== null){
			$result['card_token'] = $this->card_token;
		}

		if($this->commission_credit !== 0.0){
			$result['commission_credit'] = $this->commission_credit;
		}

		if($this->commission_debit !== 0.0){
			$result['commission_debit'] = $this->commission_debit;
		}

		if($this->completion_date !== null){
			$result['completion_date'] = $this->completion_date;
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

		if($this->customer !== null){
			$result['customer'] = $this->customer;
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

		if($this->redirect_to !== null){
			$result['redirect_to'] = $this->redirect_to;
		}

		if($this->refund_date_last !== null){
			$result['refund_date_last'] = $this->refund_date_last;
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

		if($this->sender_first_name !== null){
			$result['sender_first_name'] = $this->sender_first_name;
		}

		if($this->sender_last_name !== null){
			$result['sender_last_name'] = $this->sender_last_name;
		}

		if($this->sender_phone !== null){
			$result['sender_phone'] = $this->sender_phone;
		}

		if($this->token !== null){
			$result['token'] = $this->token;
		}

		if($this->type !== null){
			$result['type'] = $this->type;
		}

		if($this->version !== null){
			$result['version'] = $this->version;
		}

		if($this->err_erc !== null){
			$result['err_erc'] = $this->err_erc;
		}

		if($this->product_category !== null){
			$result['product_category'] = $this->product_category;
		}

		if($this->product_description !== null){
			$result['product_description'] = $this->product_description;
		}

		if($this->product_name !== null){
			$result['product_name'] = $this->product_name;
		}

		if($this->product_url !== null){
			$result['product_url'] = $this->product_url;
		}

		if($this->refund_amount !== 0.0){
			$result['refund_amount'] = $this->refund_amount;
		}

		if($this->verifycode !== null){
			$result['verifycode'] = $this->verifycode;
		}

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : CallbackNotification {
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

		$completion_date = null;
		if(\array_key_exists('completion_date', $arr)){
			$completion_date = $arr['completion_date'];
		}
		$completion_date = $completion_date !== null ? (string)$completion_date : null;

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

		$customer = null;
		if(\array_key_exists('customer', $arr)){
			$customer = $arr['customer'];
		}
		$customer = $customer !== null ? (string)$customer : null;

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

		$redirect_to = null;
		if(\array_key_exists('redirect_to', $arr)){
			$redirect_to = $arr['redirect_to'];
		}
		$redirect_to = $redirect_to !== null ? (string)$redirect_to : null;

		$refund_date_last = null;
		if(\array_key_exists('refund_date_last', $arr)){
			$refund_date_last = $arr['refund_date_last'];
		}
		$refund_date_last = $refund_date_last !== null ? (string)$refund_date_last : null;

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

		$sender_first_name = null;
		if(\array_key_exists('sender_first_name', $arr)){
			$sender_first_name = $arr['sender_first_name'];
		}
		$sender_first_name = $sender_first_name !== null ? (string)$sender_first_name : null;

		$sender_last_name = null;
		if(\array_key_exists('sender_last_name', $arr)){
			$sender_last_name = $arr['sender_last_name'];
		}
		$sender_last_name = $sender_last_name !== null ? (string)$sender_last_name : null;

		$sender_phone = null;
		if(\array_key_exists('sender_phone', $arr)){
			$sender_phone = $arr['sender_phone'];
		}
		$sender_phone = $sender_phone !== null ? (string)$sender_phone : null;

		$token = null;
		if(\array_key_exists('token', $arr)){
			$token = $arr['token'];
		}
		$token = $token !== null ? (string)$token : null;

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

		$err_erc = null;
		if(\array_key_exists('err_erc', $arr)){
			$err_erc = $arr['err_erc'];
		}
		$err_erc = $err_erc !== null ? (string)$err_erc : null;

		$product_category = null;
		if(\array_key_exists('product_category', $arr)){
			$product_category = $arr['product_category'];
		}
		$product_category = $product_category !== null ? (string)$product_category : null;

		$product_description = null;
		if(\array_key_exists('product_description', $arr)){
			$product_description = $arr['product_description'];
		}
		$product_description = $product_description !== null ? (string)$product_description : null;

		$product_name = null;
		if(\array_key_exists('product_name', $arr)){
			$product_name = $arr['product_name'];
		}
		$product_name = $product_name !== null ? (string)$product_name : null;

		$product_url = null;
		if(\array_key_exists('product_url', $arr)){
			$product_url = $arr['product_url'];
		}
		$product_url = $product_url !== null ? (string)$product_url : null;

		$refund_amount = 0.0;
		if(\array_key_exists('refund_amount', $arr)){
			$refund_amount = $arr['refund_amount'];
		}
		$refund_amount = $refund_amount !== null ? (float)$refund_amount : null;

		$verifycode = null;
		if(\array_key_exists('verifycode', $arr)){
			$verifycode = $arr['verifycode'];
		}
		$verifycode = $verifycode !== null ? (string)$verifycode : null;

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
			$card_token,
			$commission_credit,
			$commission_debit,
			$completion_date,
			$create_date,
			$currency,
			$currency_credit,
			$currency_debit,
			$customer,
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
			$redirect_to,
			$refund_date_last,
			$rrn_credit,
			$rrn_debit,
			$sender_bonus,
			$sender_card_bank,
			$sender_card_country,
			$sender_card_mask2,
			$sender_card_type,
			$sender_commission,
			$sender_first_name,
			$sender_last_name,
			$sender_phone,
			$token,
			$type,
			$version,
			$err_erc,
			$product_category,
			$product_description,
			$product_name,
			$product_url,
			$refund_amount,
			$verifycode);
	}

}
