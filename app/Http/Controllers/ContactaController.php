<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactum;

class ContactaController extends Controller
{
	public function index()
	{
		return view('contacta', compact('contacta'));
	}
}
