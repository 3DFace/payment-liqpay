<?php

namespace dface\Payment\LiqPay;

class TestLiqPayNotificationHandler implements LiqPayNotificationHandler
{

	/** @var CallbackNotification|null */
	private $notification;

	public function handleNotification(CallbackNotification $notification) : void
	{
		$this->notification = $notification;
	}

	public function getNotification() : ?CallbackNotification
	{
		return $this->notification;
	}

}
