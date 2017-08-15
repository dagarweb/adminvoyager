<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Traduccione extends Model
{
    use Translatable;
    protected $translatable = ['traduccion'];

    public function holahola() {
        $mio = Session::get('variableName');
        return $mio;
    }
}
