<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyCustomService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('my-custom-service', function ($app) {
            return new \App\Services\MyCustomService(); // Adjust namespace/class accordingly
        });
    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
