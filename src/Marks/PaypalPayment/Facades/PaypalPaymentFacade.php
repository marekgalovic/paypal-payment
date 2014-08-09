<?php

namespace Marks\PaypalPayment\Facades;

use Illuminate\Support\Facades\Facade;

class PaypalPaymentFacade extends Facade{
	protected static function getFacadeAccessor() { return 'paypal-rest-payment'; }
}