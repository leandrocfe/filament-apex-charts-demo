<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            // Using Vite
            Filament::registerTheme(
                app(Vite::class)('resources/css/app.css'),
            );
        });

        Filament::registerScripts([
            app(Vite::class)('resources/js/prism.js'),
            app(Vite::class)('resources/js/app.js'),
        ], true);

        Filament::registerStyles([
            app(Vite::class)('resources/css/prism.css'),
        ], true);
    }
}
