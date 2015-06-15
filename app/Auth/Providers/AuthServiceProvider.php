<?php

namespace Codecasts\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'auth');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'auth');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Codecasts\Contracts\User',
            'Codecasts\Auth\User'
        );
    }
}
