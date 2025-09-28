<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\URL; // <-- Make sure this is imported


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        // Force HTTPS scheme on production
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        // ... other boot logic
    }
}
