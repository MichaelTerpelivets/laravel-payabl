<?php

namespace PayablAPI;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class PayablServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../configs/payabl.php' => config_path('payabl.php'),
        ]);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../configs/payabl.php', 'payabl'
        );

        $this->app->bind(PayablClient::class);
    }
}