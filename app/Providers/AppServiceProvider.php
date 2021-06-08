<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\BangChuyenMuc;

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
        $chuyenmuc=BangChuyenMuc::all();
       // view()->share('chuyenmuc',$chuyenmuc);
       View::share('chuyenmuc',$chuyenmuc);
    }
}
