<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Information;
use App\Paymentmethod;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("layout.adminpanellayout", function($layout){
            $layout->with("info", Information::orderBy('id', 'desc')->first());
        });
        view()->composer("layout.layout", function($layout){
            $layout->with("info", Information::orderBy('id', 'desc')->first());
        });
        view()->composer("layout.layout", function($layout){
            $layout->with("paymentmethod", Paymentmethod::orderBy('id', 'asc')->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
