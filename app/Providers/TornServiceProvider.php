<?php

namespace App\Providers;

use App\Library\Torn;
use Illuminate\Support\ServiceProvider;

class TornServiceProvider extends ServiceProvider
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
	$this->app->singleton(Torn::class, function ($app) {
            return new Torn(config('torn'));
        });
    }
}
