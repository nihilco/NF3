<?php

namespace App\Library;

class Stripe
{
    public $mode;
    public $secretKey;
    public $publishableKey;
    public $platformAccount;
    public $connectAccount;
    
    public function __construct()
    {
        $this->mode = config('services.stripe.mode');
	$this->version = config('service.stripe.version');
	$this->platformAccount = config('services.stripe.account');

	if($this->mode == 'live') {
	    $this->secretKey = config('services.stripe.keys.live.secret');
	    $this->publishableKey = config('services.stripe.keys.live.publishable');
	} else {
	    $this->secretKey = config('services.stripe.keys.test.secret');
	    $this->publishableKey = config('services.stripe.keys.test.publishable');
	}

	$this->setApiKey();
	$this->setVersion();
    }

    public function setApiKey()
    {
	\Stripe\Stripe::setApiKey($this->secretKey);
    }

    public function setVersion()
    {
	\Stripe\Stripe::setApiVersion($this->version);
    }

    public function getCustomer($stripe_id)
    {
	return \Stripe\Customer::retrieve($stripe_id);
    }

    public function createCustomer($user)
    {
	return \Stripe\Customer::create(array(
	  "email" => $user->email,
	  "description" => "Customer for " . $user->email,
	));
    }
}