<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Tipospagina;
use App\Page;
class TipospaginasServiceProvider extends ServiceProvider
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
            $view->with('tipospaginas22', Tipospagina::has('pages22')
                ->orderBy('name', 'asc')
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
