<?php

namespace Vldmir\LaravelIso3166\Providers;

use Illuminate\Support\ServiceProvider;
use Vldmir\LaravelIso3166\Services\CountryService;

class CountryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Bind the CountryService as a singleton in the service container
        $this->app->singleton('countryservice', function ($app) {
            return new CountryService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
