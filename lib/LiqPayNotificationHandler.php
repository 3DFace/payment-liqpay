<?php

namespace dface\Payment\LiqPay;

interface LiqPayNotificationHandler
{

	public function handleNotification(LiqPayNotification $notification) : void;

}
