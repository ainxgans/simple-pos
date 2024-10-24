<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function Pest\Laravel\withMiddleware;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
