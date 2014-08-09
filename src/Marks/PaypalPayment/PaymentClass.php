<?php

namespace Marks\PaypalPayment;

define('PP_CONFIG_PATH', app_path("config"));

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaymentClass{

	public function OAuthTokenCredential($id, $secret){
		return new OAuthTokenCredential($id, $secret);
	}

	public function apiContext($credential){
		return new apiContext($credential);
	}

	public function __call($class, $args){
		$class = "\PayPal\Api\\".$class;
		$reflection = new \ReflectionClass($class);
		return $reflection->newInstanceArgs($args);
	}
	
}
