@extends('layout')
@section('title', 'Noticias y post')
@section('description', 'Descripción de la página home Descripción de la página home Descripción de la página home Descripción de la página home Descripción de la página home')
@if(request('page'))
    @section('robots', 'noindex,follow')
@else
    @section('robots', 'index,follow')
@endif

@section('header')
    <header class="intro-header" style="background-image: url('/img/post-bg.jpg')">
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
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                @if($post->getTranslatedAttribute('title') != "")
                <div class="post-preview">
                    <a href="{{ route('blog.show', [$post->getTranslatedAttribute('slug')]) }}">
                        <h2 class="post-title">
                            {{ $post->getTranslatedAttribute('title') }}
                        </h2>
                        <h3 class="post-subtitle">
                                {!! $post->getTranslatedAttribute('body') !!}
                        </h3>
                    </a>
                    <p class="post-meta">
                        Creada el <strong>{{ $post->created_at->format('d/m/Y h:i:s') }}</strong> por
                        @if(($post->author_id) > 0)
                            <strong>{{ $post->authorId()->first()->name }}</strong>
                        @else
                            <strong>admin</strong>
                        @endif
                        en la categoría
                        @if(($post->category_id) > 0)
                            <strong>{{$post->category->getTranslatedAttribute('name')}}</strong>
                        @else
                            <strong>sin categoría</strong>
                        @endif
                    </p>
                </div>
                <hr>
                @endif
            @endforeach
            {{ $posts->links() }}

        </div>
    </div>
@endsection