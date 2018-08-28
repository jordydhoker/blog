<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function($user){
            if($user->id == 1) {
                return true;
            }
        });


        Gate::define('admin',function($user){
            return $user->id == 1;
        });

        Gate::define('change-post',function($user,$post){
            return $user->id == $post->user_id;
        });

        Gate::define('logged-in',function(){
            return !Auth::guest();
        });
    }
}
