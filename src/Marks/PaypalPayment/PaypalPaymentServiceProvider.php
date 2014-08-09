<?php namespace Marks\PaypalPayment;

use Illuminate\Support\ServiceProvider;

class PaypalPaymentServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->app["paypal-rest-payment"] = $this->app->share(function($app){
			return $app->make("Marks\PaypalPayment\PaymentClass");
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
