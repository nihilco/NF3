<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use APp\Library\Stripe;

class StripeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
			
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
	//
        $this->app->singleton(Stripe::class, function($app) {
	  return new Stripe();
	});
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
       return [Stripe::class];
    }
    
}
