<?php

namespace App\Providers;

use App\Catalog;
use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use App\Info;
use App\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->composeInfo();
        $this->composeMenu();
        /*Admin*/
        $this->composeCatalog();
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
    private function composeInfo()
    {
        view()->composer('layouts.app', function($view)
        {
            $view->with('info', Info::find(1));
        });
    }
    private function composeMenu()
    {
        view()->composer('layouts.app', function($view)
        {
            $view->with('menu', Menu::all());
        });
    }

    private function composeCatalog()
    {
        view()->composer('layouts.admin', function($view)
        {
            $view->with('catalog', Catalog::where('parent',0)->get());
        });
    }
}
