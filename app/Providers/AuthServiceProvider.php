<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
    // 'App\Models\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    Gate::define('admin-gerant',function (User $user){
        return $user->role_id==4 || $user->role_id==2;
    });
    Gate::define('pompiste',function (User $user){
        return $user->role_id==AppServiceProvider::POMPISTE_ROLE;
    });
    Gate::define('chefpiste',function (User $user){
        return $user->role_id==AppServiceProvider::CHEFPIST_ROLE;
    });
    }
}
