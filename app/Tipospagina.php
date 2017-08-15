<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Tipospagina extends Model
{
    use Translatable;

    protected $translatable = [
        'name', 'slug'
    ];

}
