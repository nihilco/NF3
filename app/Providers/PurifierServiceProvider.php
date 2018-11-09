<?php

namespace App\Providers;

use App\Library\Purifier;
use Illuminate\Support\ServiceProvider;

class PurifierServiceProvider extends ServiceProvider
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
        $this->mergeConfigFrom(config_path('purifier.php'), 'purifier');

        $this->app->singleton('Purifier', function ($app) {
            return new Purifier($app['files'], $app['config']);
        });
	
        $this->app->alias('Purifier', Purifier::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Purifier'];
    }

}
