<?php

namespace App\Providers;

use App\Traduccione;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use Session;


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

        view()->composer('*', function ($view)
        {
            $varlenguage = Session::get('lang');

            $traduccion = Traduccione::all();
            foreach ($traduccion as $traduc) {
                $TraVar_DW = $traduc->clave;
                ${$TraVar_DW} = $traduc->getTranslatedAttribute('traduccion', ''.$varlenguage.'');
            View::share(''.$TraVar_DW.'', ${$TraVar_DW});
            }
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
