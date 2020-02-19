<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

class PaymentRequest implements \JsonSerializable {

	/** @var string */
	private $action;
	/** @var float */
	private $amount;
	/** @var string */
	private $currency;
	/** @var string */
	private $description;
	/** @var string */
	private $order_id;
	/** @var string|null */
	private $language;
	/** @var string|null */
	private $ip;
	/** @var string|null */
	private $expired_date;
	/** @var string|null */
	private $paytypes;
	/** @var string|null */
	private $recurringbytoken;
	/** @var string|null */
	private $server_url;
	/** @var string|null */
	private $verifycode;
	/** @var PaymentRequestSplitRule[]|null */
	private $split_rules;
	/** @var string|null */
	private $sender_address;
	/** @var string|null */
	private $sender_city;
	/** @var string|null */
	private $sender_country_code;
	/** @var string|null */
	private $sender_first_name;
	/** @var string|null */
	private $sender_last_name;
	/** @var string|null */
	private $sender_postal_code;
	/** @var string|null */
	private $letter_of_credit;
	/** @var string|null */
	private $letter_of_credit_date;
	/** @var string|null */
	private $subscribe;
	/** @var string|null */
	private $subscribe_date_start;
	/** @var string|null */
	private $subscribe_periodicity;
	/** @var string|null */
	private $customer;
	/** @var string|null */
	private $customer_user_id;
	/** @var string|null */
	private $dae;
	/** @var string|null */
	private $info;
	/** @var string|null */
	private $product_category;
	/** @var string|null */
	private $product_description;
	/** @var string|null */
	private $product_name;
	/** @var string|null */
	private $product_url;
	/** @var string|null */
	private $result_url;

	public function __construct(
		string $action,
		float $amount,
		string $currency,
		string $description,
		string $order_id,
		?string $language = null,
		?string $ip = null,
		?string $expired_date = null,
		?string $paytypes = null,
		?string $recurringbytoken = null,
		?string $server_url = null,
		?string $verifycode = null,
		?array $split_rules = null,
		?string $sender_address = null,
		?string $sender_city = null,
		?string $sender_country_code = null,
		?string $sender_first_name = null,
		?string $sender_last_name = null,
		?string $sender_postal_code = null,
		?string $letter_of_credit = null,
		?string $letter_of_credit_date = null,
		?string $subscribe = null,
		?string $subscribe_date_start = null,
		?string $subscribe_periodicity = null,
		?string $customer = null,
		?string $customer_user_id = null,
		?string $dae = null,
		?string $info = null,
		?string $product_category = null,
		?string $product_description = null,
		?string $product_name = null,
		?string $product_url = null,
		?string $result_url = null
	){
		$this->action = $action;
		$this->amount = $amount;
		$this->currency = $currency;
		$this->description = $description;
		$this->order_id = $order_id;
		$this->language = $language;
		$this->ip = $ip;
		$this->expired_date = $expired_date;
		$this->paytypes = $paytypes;
		$this->recurringbytoken = $recurringbytoken;
		$this->server_url = $server_url;
		$this->verifycode = $verifycode;
		$this->split_rules = $split_rules;
		$this->sender_address = $sender_address;
		$this->sender_city = $sender_city;
		$this->sender_country_code = $sender_country_code;
		$this->sender_first_name = $sender_first_name;
		$this->sender_last_name = $sender_last_name;
		$this->sender_postal_code = $sender_postal_code;
		$this->letter_of_credit = $letter_of_credit;
		$this->letter_of_credit_date = $letter_of_credit_date;
		$this->subscribe = $subscribe;
		$this->subscribe_date_start = $subscribe_date_start;
		$this->subscribe_periodicity = $subscribe_periodicity;
		$this->customer = $customer;
		$this->customer_user_id = $customer_user_id;
		$this->dae = $dae;
		$this->info = $info;
		$this->product_category = $product_category;
		$this->product_description = $product_description;
		$this->product_name = $product_name;
		$this->product_url = $product_url;
		$this->result_url = $result_url;
	}

	/**
	 * @return string
	 */
	public function getAction() : string {
		return $this->action;
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
	public function getCurrency() : string {
		return $this->currency;
	}

	/**
	 * @return string
	 */
	public function getDescription() : string {
		return $this->description;
	}

	/**
	 * @return string
	 */
	public function getOrderId() : string {
		return $this->order_id;
	}

	/**
	 * @return string|null
	 */
	public function getLanguage() : ?string {
		return $this->language;
	}

	/**
	 * @return string|null
	 */
	public function getIp() : ?string {
		return $this->ip;
	}

	/**
	 * @return string|null
	 */
	public function getExpiredDate() : ?string {
		return $this->expired_date;
	}

	/**
	 * @return string|null
	 */
	public function getPaytypes() : ?string {
		return $this->paytypes;
	}

	/**
	 * @return string|null
	 */
	public function getRecurringbytoken() : ?string {
		return $this->recurringbytoken;
	}

	/**
	 * @return string|null
	 */
	public function getServerUrl() : ?string {
		return $this->server_url;
	}

	/**
	 * @return string|null
	 */
	public function getVerifycode() : ?string {
		return $this->verifycode;
	}

	/**
	 * @return PaymentRequestSplitRule[]|null
	 */
	public function getSplitRules() : ?array {
		return $this->split_rules;
	}

	/**
	 * @return string|null
	 */
	public function getSenderAddress() : ?string {
		return $this->sender_address;
	}

	/**
	 * @return string|null
	 */
	public function getSenderCity() : ?string {
		return $this->sender_city;
	}

	/**
	 * @return string|null
	 */
	public function getSenderCountryCode() : ?string {
		return $this->sender_country_code;
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
	public function getSenderPostalCode() : ?string {
		return $this->sender_postal_code;
	}

	/**
	 * @return string|null
	 */
	public function getLetterOfCredit() : ?string {
		return $this->letter_of_credit;
	}

	/**
	 * @return string|null
	 */
	public function getLetterOfCreditDate() : ?string {
		return $this->letter_of_credit_date;
	}

	/**
	 * @return string|null
	 */
	public function getSubscribe() : ?string {
		return $this->subscribe;
	}

	/**
	 * @return string|null
	 */
	public function getSubscribeDateStart() : ?string {
		return $this->subscribe_date_start;
	}

	/**
	 * @return string|null
	 */
	public function getSubscribePeriodicity() : ?string {
		return $this->subscribe_periodicity;
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
	public function getCustomerUserId() : ?string {
		return $this->customer_user_id;
	}

	/**
	 * @return string|null
	 */
	public function getDae() : ?string {
		return $this->dae;
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
	 * @return string|null
	 */
	public function getResultUrl() : ?string {
		return $this->result_url;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withAction(string $val) : self {
		$clone = clone $this;
		$clone->action = $val;
		return $clone;
	}

	/**
	 * @param float $val
	 * @return self
	 */
	public function withAmount(float $val) : self {
		$clone = clone $this;
		$clone->amount = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withCurrency(string $val) : self {
		$clone = clone $this;
		$clone->currency = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withDescription(string $val) : self {
		$clone = clone $this;
		$clone->description = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withOrderId(string $val) : self {
		$clone = clone $this;
		$clone->order_id = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withLanguage(?string $val) : self {
		$clone = clone $this;
		$clone->language = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withIp(?string $val) : self {
		$clone = clone $this;
		$clone->ip = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withExpiredDate(?string $val) : self {
		$clone = clone $this;
		$clone->expired_date = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withPaytypes(?string $val) : self {
		$clone = clone $this;
		$clone->paytypes = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withRecurringbytoken(?string $val) : self {
		$clone = clone $this;
		$clone->recurringbytoken = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withServerUrl(?string $val) : self {
		$clone = clone $this;
		$clone->server_url = $val;
		return $clone;
	}

	/**
	 * @param PaymentRequestSplitRule[] $val
	 * @return self
	 */
	public function withSplitRules(?array $val) : self {
		$clone = clone $this;
		$clone->split_rules = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSenderAddress(?string $val) : self {
		$clone = clone $this;
		$clone->sender_address = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSenderCity(?string $val) : self {
		$clone = clone $this;
		$clone->sender_city = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSenderCountryCode(?string $val) : self {
		$clone = clone $this;
		$clone->sender_country_code = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSenderFirstName(?string $val) : self {
		$clone = clone $this;
		$clone->sender_first_name = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSenderLastName(?string $val) : self {
		$clone = clone $this;
		$clone->sender_last_name = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSenderPostalCode(?string $val) : self {
		$clone = clone $this;
		$clone->sender_postal_code = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withLetterOfCredit(?string $val) : self {
		$clone = clone $this;
		$clone->letter_of_credit = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withLetterOfCreditDate(?string $val) : self {
		$clone = clone $this;
		$clone->letter_of_credit_date = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSubscribe(?string $val) : self {
		$clone = clone $this;
		$clone->subscribe = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSubscribeDateStart(?string $val) : self {
		$clone = clone $this;
		$clone->subscribe_date_start = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withSubscribePeriodicity(?string $val) : self {
		$clone = clone $this;
		$clone->subscribe_periodicity = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withCustomer(?string $val) : self {
		$clone = clone $this;
		$clone->customer = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withCustomerUserId(?string $val) : self {
		$clone = clone $this;
		$clone->customer_user_id = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withDae(?string $val) : self {
		$clone = clone $this;
		$clone->dae = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withInfo(?string $val) : self {
		$clone = clone $this;
		$clone->info = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withProductCategory(?string $val) : self {
		$clone = clone $this;
		$clone->product_category = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withProductDescription(?string $val) : self {
		$clone = clone $this;
		$clone->product_description = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withProductName(?string $val) : self {
		$clone = clone $this;
		$clone->product_name = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withProductUrl(?string $val) : self {
		$clone = clone $this;
		$clone->product_url = $val;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withResultUrl(?string $val) : self {
		$clone = clone $this;
		$clone->result_url = $val;
		return $clone;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize(){

		$result = [];

		$result['action'] = $this->action;

		$result['amount'] = $this->amount;

		$result['currency'] = $this->currency;

		$result['description'] = $this->description;

		$result['order_id'] = $this->order_id;

		if($this->language !== null){
			$result['language'] = $this->language;
		}

		if($this->ip !== null){
			$result['ip'] = $this->ip;
		}

		if($this->expired_date !== null){
			$result['expired_date'] = $this->expired_date;
		}

		if($this->paytypes !== null){
			$result['paytypes'] = $this->paytypes;
		}

		if($this->recurringbytoken !== null){
			$result['recurringbytoken'] = $this->recurringbytoken;
		}

		if($this->server_url !== null){
			$result['server_url'] = $this->server_url;
		}

		if($this->verifycode !== null){
			$result['verifycode'] = $this->verifycode;
		}

		if($this->split_rules !== null){
			$result['split_rules'] = $this->split_rules === null ? null : \array_map(function (PaymentRequestSplitRule $x){
				return $x->jsonSerialize();
			}, $this->split_rules);
		}

		if($this->sender_address !== null){
			$result['sender_address'] = $this->sender_address;
		}

		if($this->sender_city !== null){
			$result['sender_city'] = $this->sender_city;
		}

		if($this->sender_country_code !== null){
			$result['sender_country_code'] = $this->sender_country_code;
		}

		if($this->sender_first_name !== null){
			$result['sender_first_name'] = $this->sender_first_name;
		}

		if($this->sender_last_name !== null){
			$result['sender_last_name'] = $this->sender_last_name;
		}

		if($this->sender_postal_code !== null){
			$result['sender_postal_code'] = $this->sender_postal_code;
		}

		if($this->letter_of_credit !== null){
			$result['letter_of_credit'] = $this->letter_of_credit;
		}

		if($this->letter_of_credit_date !== null){
			$result['letter_of_credit_date'] = $this->letter_of_credit_date;
		}

		if($this->subscribe !== null){
			$result['subscribe'] = $this->subscribe;
		}

		if($this->subscribe_date_start !== null){
			$result['subscribe_date_start'] = $this->subscribe_date_start;
		}

		if($this->subscribe_periodicity !== null){
			$result['subscribe_periodicity'] = $this->subscribe_periodicity;
		}

		if($this->customer !== null){
			$result['customer'] = $this->customer;
		}

		if($this->customer_user_id !== null){
			$result['customer_user_id'] = $this->customer_user_id;
		}

		if($this->dae !== null){
			$result['dae'] = $this->dae;
		}

		if($this->info !== null){
			$result['info'] = $this->info;
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

		if($this->result_url !== null){
			$result['result_url'] = $this->result_url;
		}

		return $result;
	}

	/**
	 * @param array $arr
	 * @return self
	 * @throws \InvalidArgumentException
	 */
	public static function deserialize(array $arr) : PaymentRequest {
		if(\array_key_exists('action', $arr)){
			$action = $arr['action'];
		}else{
			throw new \InvalidArgumentException("Property 'action' not specified");
		}
		$action = $action !== null ? (string)$action : null;

		if(\array_key_exists('amount', $arr)){
			$amount = $arr['amount'];
		}else{
			throw new \InvalidArgumentException("Property 'amount' not specified");
		}
		$amount = $amount !== null ? (float)$amount : null;

		if(\array_key_exists('currency', $arr)){
			$currency = $arr['currency'];
		}else{
			throw new \InvalidArgumentException("Property 'currency' not specified");
		}
		$currency = $currency !== null ? (string)$currency : null;

		if(\array_key_exists('description', $arr)){
			$description = $arr['description'];
		}else{
			throw new \InvalidArgumentException("Property 'description' not specified");
		}
		$description = $description !== null ? (string)$description : null;

		if(\array_key_exists('order_id', $arr)){
			$order_id = $arr['order_id'];
		}else{
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id !== null ? (string)$order_id : null;

		$language = null;
		if(\array_key_exists('language', $arr)){
			$language = $arr['language'];
		}
		$language = $language !== null ? (string)$language : null;

		$ip = null;
		if(\array_key_exists('ip', $arr)){
			$ip = $arr['ip'];
		}
		$ip = $ip !== null ? (string)$ip : null;

		$expired_date = null;
		if(\array_key_exists('expired_date', $arr)){
			$expired_date = $arr['expired_date'];
		}
		$expired_date = $expired_date !== null ? (string)$expired_date : null;

		$paytypes = null;
		if(\array_key_exists('paytypes', $arr)){
			$paytypes = $arr['paytypes'];
		}
		$paytypes = $paytypes !== null ? (string)$paytypes : null;

		$recurringbytoken = null;
		if(\array_key_exists('recurringbytoken', $arr)){
			$recurringbytoken = $arr['recurringbytoken'];
		}
		$recurringbytoken = $recurringbytoken !== null ? (string)$recurringbytoken : null;

		$server_url = null;
		if(\array_key_exists('server_url', $arr)){
			$server_url = $arr['server_url'];
		}
		$server_url = $server_url !== null ? (string)$server_url : null;

		$verifycode = null;
		if(\array_key_exists('verifycode', $arr)){
			$verifycode = $arr['verifycode'];
		}
		$verifycode = $verifycode !== null ? (string)$verifycode : null;

		$split_rules = null;
		if(\array_key_exists('split_rules', $arr)){
			$split_rules = $arr['split_rules'];
		}
		$split_rules = $split_rules !== null ? \array_map(function ($x){
			try {
				$x = $x !== null ? PaymentRequestSplitRule::deserialize($x) : null;
			}catch (\Exception $e){
				throw new \InvalidArgumentException('Deserialization error: '.$e->getMessage(), 0, $e);
			}
			return $x;
		}, $split_rules) : null;

		$sender_address = null;
		if(\array_key_exists('sender_address', $arr)){
			$sender_address = $arr['sender_address'];
		}
		$sender_address = $sender_address !== null ? (string)$sender_address : null;

		$sender_city = null;
		if(\array_key_exists('sender_city', $arr)){
			$sender_city = $arr['sender_city'];
		}
		$sender_city = $sender_city !== null ? (string)$sender_city : null;

		$sender_country_code = null;
		if(\array_key_exists('sender_country_code', $arr)){
			$sender_country_code = $arr['sender_country_code'];
		}
		$sender_country_code = $sender_country_code !== null ? (string)$sender_country_code : null;

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

		$sender_postal_code = null;
		if(\array_key_exists('sender_postal_code', $arr)){
			$sender_postal_code = $arr['sender_postal_code'];
		}
		$sender_postal_code = $sender_postal_code !== null ? (string)$sender_postal_code : null;

		$letter_of_credit = null;
		if(\array_key_exists('letter_of_credit', $arr)){
			$letter_of_credit = $arr['letter_of_credit'];
		}
		$letter_of_credit = $letter_of_credit !== null ? (string)$letter_of_credit : null;

		$letter_of_credit_date = null;
		if(\array_key_exists('letter_of_credit_date', $arr)){
			$letter_of_credit_date = $arr['letter_of_credit_date'];
		}
		$letter_of_credit_date = $letter_of_credit_date !== null ? (string)$letter_of_credit_date : null;

		$subscribe = null;
		if(\array_key_exists('subscribe', $arr)){
			$subscribe = $arr['subscribe'];
		}
		$subscribe = $subscribe !== null ? (string)$subscribe : null;

		$subscribe_date_start = null;
		if(\array_key_exists('subscribe_date_start', $arr)){
			$subscribe_date_start = $arr['subscribe_date_start'];
		}
		$subscribe_date_start = $subscribe_date_start !== null ? (string)$subscribe_date_start : null;

		$subscribe_periodicity = null;
		if(\array_key_exists('subscribe_periodicity', $arr)){
			$subscribe_periodicity = $arr['subscribe_periodicity'];
		}
		$subscribe_periodicity = $subscribe_periodicity !== null ? (string)$subscribe_periodicity : null;

		$customer = null;
		if(\array_key_exists('customer', $arr)){
			$customer = $arr['customer'];
		}
		$customer = $customer !== null ? (string)$customer : null;

		$customer_user_id = null;
		if(\array_key_exists('customer_user_id', $arr)){
			$customer_user_id = $arr['customer_user_id'];
		}
		$customer_user_id = $customer_user_id !== null ? (string)$customer_user_id : null;

		$dae = null;
		if(\array_key_exists('dae', $arr)){
			$dae = $arr['dae'];
		}
		$dae = $dae !== null ? (string)$dae : null;

		$info = null;
		if(\array_key_exists('info', $arr)){
			$info = $arr['info'];
		}
		$info = $info !== null ? (string)$info : null;

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

		$result_url = null;
		if(\array_key_exists('result_url', $arr)){
			$result_url = $arr['result_url'];
		}
		$result_url = $result_url !== null ? (string)$result_url : null;

		return new static(
			$action,
			$amount,
			$currency,
			$description,
			$order_id,
			$language,
			$ip,
			$expired_date,
			$paytypes,
			$recurringbytoken,
			$server_url,
			$verifycode,
			$split_rules,
			$sender_address,
			$sender_city,
			$sender_country_code,
			$sender_first_name,
			$sender_last_name,
			$sender_postal_code,
			$letter_of_credit,
			$letter_of_credit_date,
			$subscribe,
			$subscribe_date_start,
			$subscribe_periodicity,
			$customer,
			$customer_user_id,
			$dae,
			$info,
			$product_category,
			$product_description,
			$product_name,
			$product_url,
			$result_url);
	}

}
