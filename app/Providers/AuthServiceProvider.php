<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Account' => 'App\Policies\AccountPolicy',
        'App\Models\Contact' => 'App\Policies\ContactPolicy',
        'App\Models\Event' => 'App\Policies\EventPolicy',
        'App\Models\Issue' => 'App\Policies\IssuePolicy',		
        'App\Models\Organization' => 'App\Policies\OrganizationPolicy',	
        'App\Models\Role' => 'App\Policies\RolePolicy',	
        'App\Models\User' => 'App\Policies\UserPolicy',	
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
