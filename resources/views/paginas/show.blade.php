@extends('layout')

@section('title'){{ $page->getTranslatedAttribute('title') }}@endsection
@section('description'){{ $page->getTranslatedAttribute('meta_description') }}@endsection

@section('header')
    <header class="intro-header" style="background-image: url('/storage/{{$page->image}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $page->getTranslatedAttribute('title') }}</h1>
                        <hr class="small">
                        <span class="subheading">
                            @if(($page->tipopaginaid) > 0)
                                {{ $page->tiposp()->first()->getTranslatedAttribute('name') }}
                            @else
                                sin categoría
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('body')
    <div class="pagina-preview">
        <a href="{{ route('paginas.show', [$page->getTranslatedAttribute('slug')]) }}">
            <h2 class="pagina-title">
                {{ $page->getTranslatedAttribute('title') }}
            </h2>
        </a>
        <p>
            @if(isset($page->image))
                <img class="img-responsive" src="/storage/{{$page->image}}" alt="{{ $page->getTranslatedAttribute('title') }}">
            @endif
            {!! $page->getTranslatedAttribute('body') !!}
        </p>
        <p class="pagina-meta">
            Creada el <strong>{{ $page->created_at->format('d/m/Y h:i:s') }}</strong> por
            @if(($page->author_id) > 0)
                <strong>{{ $page->authorId()->first()->name }}</strong>
            @else
                <strong>admin</strong>
            @endif
            en la categoría
            @if(($page->tipopaginaid) > 0)
                <strong>{{ $page->tiposp()->first()->getTranslatedAttribute('name') }}</strong>
            @else
                <strong>sin categoría</strong>
            @endif
        </p>
    </div>
@endsection