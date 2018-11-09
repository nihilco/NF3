<?php
namespace App\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use App\Library\Avatar\Avatar;

class AvatarServiceProvider extends BaseServiceProvider
{
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
        $this->app->bind('avatar', function (Application $app) {
	    $config = $app->make('config');
	    $cache = $app->make('cache.store');
   	    $avatar = new Avatar($config->get('avatar'), $cache);
	    $avatar->setGenerator($app['avatar.generator']);
	    return $avatar;
	});
	
	$this->app->bind('avatar.generator', function (Application $app) {
	    //$config = $app->make('config');
	    //$class = $config->get('app.library.avatar.generator');
	    //return new $class;
	    return new \App\Library\Avatar\Generator\DefaultGenerator();
	});
    }

    public function provides()
    {
        return ['avatar', 'avatar.generator'];
    }

    /**
     * Application is booting.
     *
     * @return void
     */
    public function boot()
    {

    }

}