<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Breadcrumbs;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    protected $defer = true;
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         $breadcrumbs = $this->app->make(BreadcrumbsManager::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
	$this->app->singleton(Breadcrumbs::class, function($app) {
	     return new Breadcrumbs();
	});

	
    }

    public function provides()
    {
	return [Breadcrumbs::class];
    }

}
