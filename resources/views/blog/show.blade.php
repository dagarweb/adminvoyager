@extends('layout')

@section('title'){{ $post->getTranslatedAttribute('seo_title') }}@endsection
@section('description'){{ $post->getTranslatedAttribute('meta_description') }}@endsection

@section('header')
    <header class="intro-header" style="background-image: url('/storage/{{$post->image}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $post->getTranslatedAttribute('title') }}</h1>
                        <hr class="small">
                        <span class="subheading">
                            @if(($post->category_id) > 0)
                                {{ $post->category()->first()->getTranslatedAttribute('name') }}
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
    <div class="post-preview">
        <a href="{{ route('blog.show', [$post->getTranslatedAttribute('slug')]) }}">
            <h2 class="post-title">
                {{ $post->getTranslatedAttribute('title') }}
            </h2>
        </a>
        <p class="post-subtitle">
            @if(isset($post->image))
                <img class="img-responsive" src="/storage/{{$post->image}}" alt="{{ $post->getTranslatedAttribute('title') }}">
            @endif
            {!! $post->getTranslatedAttribute('body') !!}
        </p>
        <p class="post-meta">
            Creada el <strong>{{ $post->created_at->format('d/m/Y h:i:s') }}</strong> por
            @if(($post->author_id) > 0)
                <strong>{{ $post->authorId()->first()->name }}</strong>
            @else
                <strong>admin</strong>
            @endif
            en la categoría
            @if(($post->category_id) > 0)
                <strong>{{ $post->category()->first()->getTranslatedAttribute('name') }}</strong>
            @else
                <strong>sin categoría</strong>
            @endif
        </p>
    </div>
@endsection