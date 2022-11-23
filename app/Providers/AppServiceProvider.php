<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
// use app\Models\Category ;

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

        Blade::if('owner', function () {
            return auth()->check() && auth()->user()->hasRole('owner');
        });

        View::composer(['includes.header', 'includes.categories'], function ($view) {
            $view->with('categories', Category::get());
        });
    }
}
