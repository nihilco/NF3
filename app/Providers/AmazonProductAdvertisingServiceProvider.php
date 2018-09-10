<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Amazon\ProductAdvertising;

class AmazonProductAdvertisingServiceProvider extends ServiceProvider
{
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
	$this->app->singleton(Api::class, function ($app) {
	    return new Api(config('amazon'));
	});
    }
}
