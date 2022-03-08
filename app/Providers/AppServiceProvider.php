<?php

namespace App\Providers;

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
        //全域共用變數
        view()->share('name', 'Zack');
        //指定視圖共用變數
        view()->composer('info.*', function ($view) {
            $view->with('name', 'Zack');
        });
    }
}
