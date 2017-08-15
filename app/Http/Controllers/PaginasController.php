<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PaginasController extends Controller
{
    public function show($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();
        return view('paginas.show', compact('page'));
    }

}