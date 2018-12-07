<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use App\Models\Website;

class AppServiceProvider extends ServiceProvider
{
    private $website;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
	Schema::defaultStringLength(191);

	Blade::directive('currency', function ($expression) {
	    return "<?php echo ($expression < 0) ? '-$' . number_format(abs($expression)/100) : '$' . number_format($expression/100); ?>";
	});

	if(request()->server('PHP_SELF') != 'artisan') {
	     $this->setAppName();
	     $this->setViewPaths();
	}

        $this->setEmailPaths();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
	if ($this->app->environment() == 'development' || $this->app->environment() == 'dev') {
            $this->app->register(\App\Providers\TelescopeServiceProvider::class);
        }
    }

    private function setAppName()
    {
    	$appName = request()->server('HTTP_HOST');

	if(!$this->website) {
	     $this->website = Website::where('hostname', $appName)->first();
	}

	if($this->website) {
	
	     if($this->website->name != '') {
	          $appName = $this->website->name;
	     }

	     config(['services.mailgun.domain' => 'mailgun.' . $this->website->domain->domain]);
     	     config(['services.mailgun.secret' => env('MAILGUN_SECRET')]);

	     config(['app.website' => $this->website]);
	}

	config(['app.name' => $appName]);
    }

    private function setViewPaths()
    {
	$paths = config('view.paths');

	if($this->website) {
	    $themePath = base_path('themes/' . $this->website->hostname . '/resources/views');
	    //array_unshift($paths, $themePath);
	    view()->getFinder()->addLocation($themePath);
	    //dd(view());
	}

	  $paths[] = resource_path('views');
	  view()->getFinder()->addLocation(resource_path('views'));

	//if($paths) {

	//}

	config(['view.paths' => $paths]);
	//dd(config('view.paths'));
    }

    private function setEmailPaths()
    {
        $emailPaths = [base_path() . '/resources/emails'];

	if($this->website) {
	    $themePath = base_path('themes/' . $this->website->hostname . '/resources/emails');
    	    array_unshift($emailPaths, $themePath);
	}

	//dd($emailPaths);

	$this->app['view']->addNamespace('emails', $emailPaths);    
    }
}
