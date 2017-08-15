<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Traduccione;
use View;
use Session;
*/
class Traducciones extends Controller
{
    public function index()
    {
        /*
        $traduccion = Traduccione::all();
        foreach ($traduccion as $traduc) {
            $TraVar_DW = $traduc->clave;
            ${$TraVar_DW} = $traduc->getTranslatedAttribute('traduccion', 'fr');
            dd(session('lang'));
            // dd(session('lang'));
            View::share('' . $TraVar_DW . '', ${$TraVar_DW});
        }*/
    }
}
