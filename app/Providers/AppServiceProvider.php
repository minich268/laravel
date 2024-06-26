<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(['layouts.base'], 'App\Providers\ViewComposers\OpenGaphComposer');
        View::composer(['layouts.navigation'], 'App\Providers\ViewComposers\UrlComposer');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
