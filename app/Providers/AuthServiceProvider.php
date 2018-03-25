<?php

namespace Laravel\Providers;


use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Laravel\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Laravel\Model' => 'Laravel\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();
        
        //foreach($this->getPermissions() as $permission){
            
            Gate::define('view-templates', function($user) {
                return true;
            });

            $gate->define('view-projects', function($user) {
                return $user->hasRole('Super Administrator');
            });

        //}
    }

    public function getPermissions(){
        return Permission::with('roles')->get();
    }
}
