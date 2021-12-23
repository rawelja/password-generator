<?php

namespace Rawelja\PasswordGenerator\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Rawelja\PasswordGenerator\PasswordGenerator;

class PasswordGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('password-generator.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('password-generator', function () {
            return new PasswordGenerator;
        });
    }
}
