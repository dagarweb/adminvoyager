<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="/">
                {{ $inicio }}
            </a>
        </li>
        <li>
            <a href="/nosotros/">{{ $nosotros }}</a>
        </li>
        @include('menus.paginasinfo')
        <li>
            <a href="/blog/">{{ $blog }}</a>
        </li>
        <li>
            <a href="/contacta/">{{ $contactar }}</a>
        </li>
        <li>
            <a href="/admin/">Login</a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                ({{ App::getLocale() }})
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('lang', ['es']) }}">ES</a></li>
                <li><a href="{{ url('lang', ['en']) }}">EN</a></li>
                <li><a href="{{ url('lang', ['fr']) }}">FR</a></li>
            </ul>
        </li>
    </ul>
</div>