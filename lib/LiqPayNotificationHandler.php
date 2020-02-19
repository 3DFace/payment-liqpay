<?php

namespace dface\Payment\LiqPay;

interface LiqPayNotificationHandler
{

	public function handleNotification(CallbackNotification $notification) : void;

}
