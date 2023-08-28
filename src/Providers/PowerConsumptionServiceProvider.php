<?php

namespace Breuermarcel\PowerConsumption\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class PowerConsumptionServiceProvider extends IlluminateServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'power-consumption');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'power-consumption');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->registerRoutes();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/power-consumption.php', 'power-consumption');
    }

    private function routeConfiguration(): array
    {
        return [
            'prefix' => config('power-consumption.routing.prefix'),
            'as' => config('power-consumption.routing.as'),
            'middleware' => config('power-consumption.routing.middleware'),
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes.php');
        });
    }
}
