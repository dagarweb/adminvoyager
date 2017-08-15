<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        {{ $paginasmenu }}
        <span class="caret"></span></a>
    <ul class="dropdown-menu">
        @foreach($pages as $page)
            <li><a href="{{ route('paginas.show', [$page->getTranslatedAttribute('slug')]) }}">{{ $page->getTranslatedAttribute('title') }}</a></li>
        @endforeach
    </ul>
</li>
