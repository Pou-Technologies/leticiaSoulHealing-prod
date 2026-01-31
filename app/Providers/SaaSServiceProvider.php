<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PouSaaS\SaaSConnector;

class SaaSServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SaaSConnector::class, function ($app) {
            return new SaaSConnector();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
