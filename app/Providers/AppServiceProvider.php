<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\TypeComposer;
use App\Http\ViewComposers\UserComposer;
use App\Http\ViewComposers\HeaderComposer;

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
        view()->composer(['shop','home'], callback:HeaderComposer::class);
        view()->composer(['dashboard'], callback:UserComposer::class);
        view()->composer(['dashboard'], callback:TypeComposer::class);

    }
}
