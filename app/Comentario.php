<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Comentario extends Model
{
    use Translatable;

    protected $translatable = ['contenido'];

    public function postId(){
        return $this->belongsTo(Post::class);
    }
}
