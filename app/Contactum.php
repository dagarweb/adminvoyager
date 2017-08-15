<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contactum extends Model
{
	protected $fillable = [
		'nombre', 'telefono', 'email', 'mensaje',
	];
}
