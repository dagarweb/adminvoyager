<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactum extends Model
{
    use SoftDeletes;
	protected $fillable = [
		'nombre', 'telefono', 'email', 'mensaje',
	];
}
