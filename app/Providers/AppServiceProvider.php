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

	if(request()->server('PHP_SELF') != 'artisan') {
	     $this->setAppName();
	     $this->setViewPaths();
	}

	Blade::directive('currency', function ($expression) {
	    return "<?php echo ($expression < 0) ? '-$' . number_format(abs($expression)/100) : '$' . number_format($expression/100); ?>";
	});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
	     
	     config(['app.website' => $this->website]);
	}

	config(['app.name' => $appName]);
    }

    private function setViewPaths()
    {
	$paths = config('view.paths');
	
	if($this->website) {
	    $themePath = base_path('themes/' . $this->website->hostname . '/resources/views');
	    array_unshift($paths, $themePath);
	    view()->getFinder()->addLocation($themePath);
	    view()->getFinder()->addLocation(resource_path('views'));
	    //dd(view());
	}
	
	config(['view.paths' => $paths]);
	//dd(config('view.paths'));
    }
}
