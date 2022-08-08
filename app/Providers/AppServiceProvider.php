<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use APP;

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
        //
        // if (\APP::environment(['production']) || \App::environment(['staging'])){
        //     \URL::forceSchem('https');
        // }
    }
}
