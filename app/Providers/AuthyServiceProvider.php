<?php

namespace App\Providers;

use App\Services\Authy\AuthyService;
use Authy\AuthyApi;
use Illuminate\Support\ServiceProvider;

class AuthyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('authy', function (){
            $client = new AuthyApi(env('AUTHY_API_KEY'));
            return new AuthyService($client);
        });
    }
}
