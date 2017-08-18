<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipospagina extends Model
{
    use SoftDeletes;
    use Translatable;

    protected $translatable = [
        'name', 'slug'
    ];

    public function pages22()
    {
        // Relacion una categoría puede tener muchas páginas
        return $this->hasMany(\App\Page::class, 'tipopaginaid');
    }

    public function getNumPages22Attribute()
    {
        return count($this->pages22);
    }
}
