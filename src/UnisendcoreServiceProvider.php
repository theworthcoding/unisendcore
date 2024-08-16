<?php

namespace Theworthcoding\Unisendcore;

use Illuminate\Support\ServiceProvider;

class UnisendcoreServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'theworthcoding');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'theworthcoding');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/unisendcore.php', 'unisendcore');

        // Register the service the package provides.
        $this->app->singleton('unisendcore', function ($app) {
            return new Unisendcore;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['unisendcore'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/unisendcore.php' => config_path('unisendcore.php'),
        ], 'unisendcore.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/theworthcoding'),
        ], 'unisendcore.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/theworthcoding'),
        ], 'unisendcore.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/theworthcoding'),
        ], 'unisendcore.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
