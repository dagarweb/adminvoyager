<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
Use App\Page;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $view->with('pages', Page::where('tipopaginaid', 1)
                ->orderBy('title', 'desc')
                ->take(10)
                ->get());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
