<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Inclure la facade "Schema"
use Illuminate\Support\Facades\Schema;


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
        // Inclure la facade "Schema"
        Schema::defaultStringLength(191);
        //
    }
}
