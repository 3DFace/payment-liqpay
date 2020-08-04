<?php

namespace dface\Payment\LiqPay;

class TestLiqPayNotificationHandler implements LiqPayNotificationHandler
{

	private ?CallbackNotification $notification = null;

	public function handleNotification(CallbackNotification $notification) : void
	{
		$this->notification = $notification;
	}

	public function getNotification() : ?CallbackNotification
	{
		return $this->notification;
	}

}
