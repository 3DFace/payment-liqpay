<?php

/** Generated class. Don't edit manually. */

namespace dface\Payment\LiqPay;

use JsonSerializable;

final class PaymentRequest implements JsonSerializable {

	private string $action;
	private float $amount;
	private string $currency;
	private string $description;
	private string $order_id;
	private ?string $language;
	private ?string $ip;
	private ?string $expired_date;
	private ?string $pay_types;
	private ?string $recurring_by_token;
	private ?string $server_url;
	private ?string $verify_code;
	private ?array $split_rules;
	private ?string $sender_address;
	private ?string $sender_city;
	private ?string $sender_country_code;
	private ?string $sender_first_name;
	private ?string $sender_last_name;
	private ?string $sender_postal_code;
	private ?string $letter_of_credit;
	private ?string $letter_of_credit_date;
	private ?string $subscribe;
	private ?string $subscribe_date_start;
	private ?string $subscribe_periodicity;
	private ?string $customer;
	private ?string $customer_user_id;
	private ?string $dae;
	private ?string $info;
	private ?string $product_category;
	private ?string $product_description;
	private ?string $product_name;
	private ?string $product_url;
	private ?string $result_url;
	private bool $_dirty = false;

	/**
	 * @param string $action
	 * @param float $amount
	 * @param string $currency
	 * @param string $description
	 * @param string $order_id
	 * @param string|null $language
	 * @param string|null $ip
	 * @param string|null $expired_date
	 * @param string|null $pay_types
	 * @param string|null $recurring_by_token
	 * @param string|null $server_url
	 * @param string|null $verify_code
	 * @param PaymentRequestSplitRule[]|null $split_rules
	 * @param string|null $sender_address
	 * @param string|null $sender_city
	 * @param string|null $sender_country_code
	 * @param string|null $sender_first_name
	 * @param string|null $sender_last_name
	 * @param string|null $sender_postal_code
	 * @param string|null $letter_of_credit
	 * @param string|null $letter_of_credit_date
	 * @param string|null $subscribe
	 * @param string|null $subscribe_date_start
	 * @param string|null $subscribe_periodicity
	 * @param string|null $customer
	 * @param string|null $customer_user_id
	 * @param string|null $dae
	 * @param string|null $info
	 * @param string|null $product_category
	 * @param string|null $product_description
	 * @param string|null $product_name
	 * @param string|null $product_url
	 * @param string|null $result_url
	 */
	public function __construct(
		string $action,
		float $amount,
		string $currency,
		string $description,
		string $order_id,
		?string $language = null,
		?string $ip = null,
		?string $expired_date = null,
		?string $pay_types = null,
		?string $recurring_by_token = null,
		?string $server_url = null,
		?string $verify_code = null,
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
	) {
		$this->action = $action;
		$this->amount = $amount;
		$this->currency = $currency;
		$this->description = $description;
		$this->order_id = $order_id;
		$this->language = $language;
		$this->ip = $ip;
		$this->expired_date = $expired_date;
		$this->pay_types = $pay_types;
		$this->recurring_by_token = $recurring_by_token;
		$this->server_url = $server_url;
		$this->verify_code = $verify_code;
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
	public function getPayTypes() : ?string {
		return $this->pay_types;
	}

	/**
	 * @return string|null
	 */
	public function getRecurringByToken() : ?string {
		return $this->recurring_by_token;
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
	public function getVerifyCode() : ?string {
		return $this->verify_code;
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
		if ($this->action === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->action = $val;
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
	 * @param string $val
	 * @return self
	 */
	public function withCurrency(string $val) : self {
		if ($this->currency === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->currency = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string $val
	 * @return self
	 */
	public function withDescription(string $val) : self {
		if ($this->description === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->description = $val;
		$clone->_dirty = true;
		return $clone;
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
	 * @param string|null $val
	 * @return self
	 */
	public function withLanguage(?string $val) : self {
		if ($this->language === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->language = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withIp(?string $val) : self {
		if ($this->ip === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->ip = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withExpiredDate(?string $val) : self {
		if ($this->expired_date === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->expired_date = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withPayTypes(?string $val) : self {
		if ($this->pay_types === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->pay_types = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withRecurringByToken(?string $val) : self {
		if ($this->recurring_by_token === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->recurring_by_token = $val;
		$clone->_dirty = true;
		return $clone;
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
	 * @param PaymentRequestSplitRule[]|null $val
	 * @return self
	 */
	public function withSplitRules(?array $val) : self {
		if ($this->split_rules === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->split_rules = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSenderAddress(?string $val) : self {
		if ($this->sender_address === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->sender_address = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSenderCity(?string $val) : self {
		if ($this->sender_city === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->sender_city = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSenderCountryCode(?string $val) : self {
		if ($this->sender_country_code === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->sender_country_code = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSenderFirstName(?string $val) : self {
		if ($this->sender_first_name === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->sender_first_name = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSenderLastName(?string $val) : self {
		if ($this->sender_last_name === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->sender_last_name = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSenderPostalCode(?string $val) : self {
		if ($this->sender_postal_code === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->sender_postal_code = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withLetterOfCredit(?string $val) : self {
		if ($this->letter_of_credit === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->letter_of_credit = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withLetterOfCreditDate(?string $val) : self {
		if ($this->letter_of_credit_date === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->letter_of_credit_date = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSubscribe(?string $val) : self {
		if ($this->subscribe === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->subscribe = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSubscribeDateStart(?string $val) : self {
		if ($this->subscribe_date_start === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->subscribe_date_start = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withSubscribePeriodicity(?string $val) : self {
		if ($this->subscribe_periodicity === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->subscribe_periodicity = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withCustomer(?string $val) : self {
		if ($this->customer === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->customer = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withCustomerUserId(?string $val) : self {
		if ($this->customer_user_id === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->customer_user_id = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withDae(?string $val) : self {
		if ($this->dae === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->dae = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withInfo(?string $val) : self {
		if ($this->info === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->info = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withProductCategory(?string $val) : self {
		if ($this->product_category === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->product_category = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withProductDescription(?string $val) : self {
		if ($this->product_description === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->product_description = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withProductName(?string $val) : self {
		if ($this->product_name === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->product_name = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withProductUrl(?string $val) : self {
		if ($this->product_url === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->product_url = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @param string|null $val
	 * @return self
	 */
	public function withResultUrl(?string $val) : self {
		if ($this->result_url === $val) {
			return $this;
		}
		$clone = clone $this;
		$clone->result_url = $val;
		$clone->_dirty = true;
		return $clone;
	}

	/**
	 * @return mixed
	 */
	public function jsonSerialize() : array {

		$result = [];

		$result['action'] = $this->action;

		$result['amount'] = $this->amount;

		$result['currency'] = $this->currency;

		$result['description'] = $this->description;

		$result['order_id'] = $this->order_id;

		if ($this->language !== null) {
			$result['language'] = $this->language;
		}

		if ($this->ip !== null) {
			$result['ip'] = $this->ip;
		}

		if ($this->expired_date !== null) {
			$result['expired_date'] = $this->expired_date;
		}

		if ($this->pay_types !== null) {
			$result['paytypes'] = $this->pay_types;
		}

		if ($this->recurring_by_token !== null) {
			$result['recurringbytoken'] = $this->recurring_by_token;
		}

		if ($this->server_url !== null) {
			$result['server_url'] = $this->server_url;
		}

		if ($this->verify_code !== null) {
			$result['verifycode'] = $this->verify_code;
		}

		if ($this->split_rules !== null) {
			$result['split_rules'] = $this->split_rules === null ? null : \array_map(static function (PaymentRequestSplitRule $x) {
				return $x->jsonSerialize();
			}, $this->split_rules);
		}

		if ($this->sender_address !== null) {
			$result['sender_address'] = $this->sender_address;
		}

		if ($this->sender_city !== null) {
			$result['sender_city'] = $this->sender_city;
		}

		if ($this->sender_country_code !== null) {
			$result['sender_country_code'] = $this->sender_country_code;
		}

		if ($this->sender_first_name !== null) {
			$result['sender_first_name'] = $this->sender_first_name;
		}

		if ($this->sender_last_name !== null) {
			$result['sender_last_name'] = $this->sender_last_name;
		}

		if ($this->sender_postal_code !== null) {
			$result['sender_postal_code'] = $this->sender_postal_code;
		}

		if ($this->letter_of_credit !== null) {
			$result['letter_of_credit'] = $this->letter_of_credit;
		}

		if ($this->letter_of_credit_date !== null) {
			$result['letter_of_credit_date'] = $this->letter_of_credit_date;
		}

		if ($this->subscribe !== null) {
			$result['subscribe'] = $this->subscribe;
		}

		if ($this->subscribe_date_start !== null) {
			$result['subscribe_date_start'] = $this->subscribe_date_start;
		}

		if ($this->subscribe_periodicity !== null) {
			$result['subscribe_periodicity'] = $this->subscribe_periodicity;
		}

		if ($this->customer !== null) {
			$result['customer'] = $this->customer;
		}

		if ($this->customer_user_id !== null) {
			$result['customer_user_id'] = $this->customer_user_id;
		}

		if ($this->dae !== null) {
			$result['dae'] = $this->dae;
		}

		if ($this->info !== null) {
			$result['info'] = $this->info;
		}

		if ($this->product_category !== null) {
			$result['product_category'] = $this->product_category;
		}

		if ($this->product_description !== null) {
			$result['product_description'] = $this->product_description;
		}

		if ($this->product_name !== null) {
			$result['product_name'] = $this->product_name;
		}

		if ($this->product_url !== null) {
			$result['product_url'] = $this->product_url;
		}

		if ($this->result_url !== null) {
			$result['result_url'] = $this->result_url;
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
		if (\array_key_exists('action', $arr)) {
			$action = $arr['action'];
		} else {
			throw new \InvalidArgumentException("Property 'action' not specified");
		}
		$action = $action === null ? null : (string)$action;

		if (\array_key_exists('amount', $arr)) {
			$amount = $arr['amount'];
		} else {
			throw new \InvalidArgumentException("Property 'amount' not specified");
		}
		$amount = $amount === null ? null : (float)$amount;

		if (\array_key_exists('currency', $arr)) {
			$currency = $arr['currency'];
		} else {
			throw new \InvalidArgumentException("Property 'currency' not specified");
		}
		$currency = $currency === null ? null : (string)$currency;

		if (\array_key_exists('description', $arr)) {
			$description = $arr['description'];
		} else {
			throw new \InvalidArgumentException("Property 'description' not specified");
		}
		$description = $description === null ? null : (string)$description;

		if (\array_key_exists('order_id', $arr)) {
			$order_id = $arr['order_id'];
		} else {
			throw new \InvalidArgumentException("Property 'order_id' not specified");
		}
		$order_id = $order_id === null ? null : (string)$order_id;

		$language = $arr['language'] ?? null;
		$language = $language === null ? null : (string)$language;

		$ip = $arr['ip'] ?? null;
		$ip = $ip === null ? null : (string)$ip;

		$expired_date = $arr['expired_date'] ?? null;
		$expired_date = $expired_date === null ? null : (string)$expired_date;

		$pay_types = $arr['paytypes'] ?? null;
		$pay_types = $pay_types === null ? null : (string)$pay_types;

		$recurring_by_token = $arr['recurringbytoken'] ?? null;
		$recurring_by_token = $recurring_by_token === null ? null : (string)$recurring_by_token;

		$server_url = $arr['server_url'] ?? null;
		$server_url = $server_url === null ? null : (string)$server_url;

		$verify_code = $arr['verifycode'] ?? null;
		$verify_code = $verify_code === null ? null : (string)$verify_code;

		$split_rules = $arr['split_rules'] ?? null;
		$split_rules = $split_rules === null ? null : \array_map(static function ($x) {
			return $x === null ? null : PaymentRequestSplitRule::deserialize($x);
		}, $split_rules);

		$sender_address = $arr['sender_address'] ?? null;
		$sender_address = $sender_address === null ? null : (string)$sender_address;

		$sender_city = $arr['sender_city'] ?? null;
		$sender_city = $sender_city === null ? null : (string)$sender_city;

		$sender_country_code = $arr['sender_country_code'] ?? null;
		$sender_country_code = $sender_country_code === null ? null : (string)$sender_country_code;

		$sender_first_name = $arr['sender_first_name'] ?? null;
		$sender_first_name = $sender_first_name === null ? null : (string)$sender_first_name;

		$sender_last_name = $arr['sender_last_name'] ?? null;
		$sender_last_name = $sender_last_name === null ? null : (string)$sender_last_name;

		$sender_postal_code = $arr['sender_postal_code'] ?? null;
		$sender_postal_code = $sender_postal_code === null ? null : (string)$sender_postal_code;

		$letter_of_credit = $arr['letter_of_credit'] ?? null;
		$letter_of_credit = $letter_of_credit === null ? null : (string)$letter_of_credit;

		$letter_of_credit_date = $arr['letter_of_credit_date'] ?? null;
		$letter_of_credit_date = $letter_of_credit_date === null ? null : (string)$letter_of_credit_date;

		$subscribe = $arr['subscribe'] ?? null;
		$subscribe = $subscribe === null ? null : (string)$subscribe;

		$subscribe_date_start = $arr['subscribe_date_start'] ?? null;
		$subscribe_date_start = $subscribe_date_start === null ? null : (string)$subscribe_date_start;

		$subscribe_periodicity = $arr['subscribe_periodicity'] ?? null;
		$subscribe_periodicity = $subscribe_periodicity === null ? null : (string)$subscribe_periodicity;

		$customer = $arr['customer'] ?? null;
		$customer = $customer === null ? null : (string)$customer;

		$customer_user_id = $arr['customer_user_id'] ?? null;
		$customer_user_id = $customer_user_id === null ? null : (string)$customer_user_id;

		$dae = $arr['dae'] ?? null;
		$dae = $dae === null ? null : (string)$dae;

		$info = $arr['info'] ?? null;
		$info = $info === null ? null : (string)$info;

		$product_category = $arr['product_category'] ?? null;
		$product_category = $product_category === null ? null : (string)$product_category;

		$product_description = $arr['product_description'] ?? null;
		$product_description = $product_description === null ? null : (string)$product_description;

		$product_name = $arr['product_name'] ?? null;
		$product_name = $product_name === null ? null : (string)$product_name;

		$product_url = $arr['product_url'] ?? null;
		$product_url = $product_url === null ? null : (string)$product_url;

		$result_url = $arr['result_url'] ?? null;
		$result_url = $result_url === null ? null : (string)$result_url;

		return new self(
			$action,
			$amount,
			$currency,
			$description,
			$order_id,
			$language,
			$ip,
			$expired_date,
			$pay_types,
			$recurring_by_token,
			$server_url,
			$verify_code,
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

	/**
	 * @param self|null $x
	 * @return bool
	 */
	public function equals(?self $x) : bool {

		return $x !== null

			&& $this->action === $x->action

			&& $this->amount === $x->amount

			&& $this->currency === $x->currency

			&& $this->description === $x->description

			&& $this->order_id === $x->order_id

			&& $this->language === $x->language

			&& $this->ip === $x->ip

			&& $this->expired_date === $x->expired_date

			&& $this->pay_types === $x->pay_types

			&& $this->recurring_by_token === $x->recurring_by_token

			&& $this->server_url === $x->server_url

			&& $this->verify_code === $x->verify_code

			&& (($this->split_rules === null && $x->split_rules === null)
				|| ($this->split_rules !== null && $x->split_rules !== null
					&& \count($this->split_rules) === \count($x->split_rules)
					&& (static function ($arr1, $arr2) {
						foreach ($arr1 as $i => $v1) {
							if (!isset($arr2[$i])) {
								return false;
							}
							$v2 = $arr2[$i];
							$v_eq = $v1 == $v2;
							if (!$v_eq) {
								return false;
							}
						}
						return true;
					})($this->split_rules, $x->split_rules)))

			&& $this->sender_address === $x->sender_address

			&& $this->sender_city === $x->sender_city

			&& $this->sender_country_code === $x->sender_country_code

			&& $this->sender_first_name === $x->sender_first_name

			&& $this->sender_last_name === $x->sender_last_name

			&& $this->sender_postal_code === $x->sender_postal_code

			&& $this->letter_of_credit === $x->letter_of_credit

			&& $this->letter_of_credit_date === $x->letter_of_credit_date

			&& $this->subscribe === $x->subscribe

			&& $this->subscribe_date_start === $x->subscribe_date_start

			&& $this->subscribe_periodicity === $x->subscribe_periodicity

			&& $this->customer === $x->customer

			&& $this->customer_user_id === $x->customer_user_id

			&& $this->dae === $x->dae

			&& $this->info === $x->info

			&& $this->product_category === $x->product_category

			&& $this->product_description === $x->product_description

			&& $this->product_name === $x->product_name

			&& $this->product_url === $x->product_url

			&& $this->result_url === $x->result_url;
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
