<?php

namespace App\Providers;

use App\Http\ViewComposers\LayoutsComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class LayoutsServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['website.welcome', 'website.about', 'website.gallery', 'website.contact', 'website.service', 'website.serviceDetails'],
            LayoutsComposer::class
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
