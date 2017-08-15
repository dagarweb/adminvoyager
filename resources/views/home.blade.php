@extends('layout')
@section('title', 'Título página principal')
@section('description', 'Descripción de la página principal')
@if(request('page'))
    @section('robots', 'noindex,follow')
@else
    @section('robots', 'index,follow')
@endif
@section('header')
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Nombre empresa</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('body')
    Home
@endsection
