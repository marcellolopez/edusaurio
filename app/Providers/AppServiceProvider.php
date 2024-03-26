<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        /** HEADER **/
         
        View::share('site_title', 'El club de Edusaurio'); // Título del sitio

        /** NAVBAR **/
                
        View::share('logo_title', 'El club de Edusaurio'); // Título del sitio

        /** BANNER **/  

        View::share('banner_title', false); //Título H1
    }
}
