<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Information;
use App\Paymentmethod;
use App\Menu;
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
            $ctx = [
                'info' => Information::orderBy('id', 'desc')->first(),
            ];

            $layout->with($ctx);
        });

        view()->composer("layout.layout", function($layout){
            $ctx = [
                'info' => Information::orderBy('id', 'desc')->first(),
                'root_menu' => Menu::where('parent', 0)->with('child')->orderBy('id', 'asc')->get(),
                "paymentmethod" => Paymentmethod::orderBy('id', 'asc')->get(),
            ];

            $layout->with($ctx);
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
