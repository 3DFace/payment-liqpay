<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class PaymentResponse implements \JsonSerializable {

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
	/** @var float */
	private $commission_credit;
	/** @var float */
	private $commission_debit;
	/** @var string|null */
	private $currency;
	/** @var string|null */
	private $currency_credit;
	/** @var string|null */
	private $currency_debit;
	/** @var string|null */
	private $description;
	/** @var bool|null */
	private $is_3ds;
	/** @var string|null */
	private $liq_pay_order_id;
	/** @var int|null */
	private $mpi_eci;
	/** @var string|null */
	private $order_id;
	/** @var string|null */
	private $payment_id;
	/** @var string|null */
	private $public_key;
	/** @var string|null */
	private $qr_code;
	/** @var float */
	private $receiver_commission;
	/** @var float */
	private $sender_bonus;
	/** @var float */
	private $sender_commission;
	/** @var string|null */
	private $status;
	/** @var string|null */
	private $transaction_id;
	/** @var string|null */
	private $type;
	/** @var float|null */
	private $version;

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
	){
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
	public function jsonSerialize(){

		$result = [];

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

		if($this->commission_credit !== 0.0){
			$result['commission_credit'] = $this->commission_credit;
		}

		if($this->commission_debit !== 0.0){
			$result['commission_debit'] = $this->commission_debit;
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

		if($this->is_3ds !== null){
			$result['is_3ds'] = $this->is_3ds;
		}

		if($this->liq_pay_order_id !== null){
			$result['liq_pay_order_id'] = $this->liq_pay_order_id;
		}

		if($this->mpi_eci !== null){
			$result['mpi_eci'] = $this->mpi_eci;
		}

		if($this->order_id !== null){
			$result['order_id'] = $this->order_id;
		}

		if($this->payment_id !== null){
			$result['payment_id'] = $this->payment_id;
		}

		if($this->public_key !== null){
			$result['public_key'] = $this->public_key;
		}

		if($this->qr_code !== null){
			$result['qr_code'] = $this->qr_code;
		}

		if($this->receiver_commission !== 0.0){
			$result['receiver_commission'] = $this->receiver_commission;
		}

		if($this->sender_bonus !== 0.0){
			$result['sender_bonus'] = $this->sender_bonus;
		}

		if($this->sender_commission !== 0.0){
			$result['sender_commission'] = $this->sender_commission;
		}

		if($this->status !== null){
			$result['status'] = $this->status;
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
	public static function deserialize(array $arr) : PaymentResponse {
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

		$order_id = null;
		if(\array_key_exists('order_id', $arr)){
			$order_id = $arr['order_id'];
		}
		$order_id = $order_id !== null ? (string)$order_id : null;

		$payment_id = null;
		if(\array_key_exists('payment_id', $arr)){
			$payment_id = $arr['payment_id'];
		}
		$payment_id = $payment_id !== null ? (string)$payment_id : null;

		$public_key = null;
		if(\array_key_exists('public_key', $arr)){
			$public_key = $arr['public_key'];
		}
		$public_key = $public_key !== null ? (string)$public_key : null;

		$qr_code = null;
		if(\array_key_exists('qr_code', $arr)){
			$qr_code = $arr['qr_code'];
		}
		$qr_code = $qr_code !== null ? (string)$qr_code : null;

		$receiver_commission = 0.0;
		if(\array_key_exists('receiver_commission', $arr)){
			$receiver_commission = $arr['receiver_commission'];
		}
		$receiver_commission = $receiver_commission !== null ? (float)$receiver_commission : null;

		$sender_bonus = 0.0;
		if(\array_key_exists('sender_bonus', $arr)){
			$sender_bonus = $arr['sender_bonus'];
		}
		$sender_bonus = $sender_bonus !== null ? (float)$sender_bonus : null;

		$sender_commission = 0.0;
		if(\array_key_exists('sender_commission', $arr)){
			$sender_commission = $arr['sender_commission'];
		}
		$sender_commission = $sender_commission !== null ? (float)$sender_commission : null;

		$status = null;
		if(\array_key_exists('status', $arr)){
			$status = $arr['status'];
		}
		$status = $status !== null ? (string)$status : null;

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

}
