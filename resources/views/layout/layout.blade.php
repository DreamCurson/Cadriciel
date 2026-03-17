<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #E6E6FA;">

<header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #7B68EE;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            <a href="{{ route('forum.index') }}" class="nav-link active text-white ms-4">Forum</a>
            <a href="{{ route('document.index') }}" class="nav-link active text-white ms-3">Document</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMain" aria-controls="navbarMain"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white"
                        aria-current="page"
                        href="{{ route('student.index') }}"
                        onmouseover="this.style.color='#E6E6FA'; this.style.textDecoration='underline';"
                        onmouseout="this.style.color='white'; this.style.textDecoration='none';">
                            @lang('lang.nav_el_studentlist')
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white"
                        href="{{ route('student.create') }}"
                        onmouseover="this.style.color='#E6E6FA'; this.style.textDecoration='underline';"
                        onmouseout="this.style.color='white'; this.style.textDecoration='none';">
                            @lang('lang.nav_el_addstudent')
                        </a>
                    </li>

                    <li class="nav-item ms-2">
                        @guest
                        <a class="nav-link text-white" href="{{ route('login') }}">@lang('lang.nav_el_login')</a>
                        @else
                        <a class="nav-link text-white" href="{{ route('logout') }}">@lang('lang.nav_el_logout')</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('addnav')
    <div class="navbar navbar-expand-sm navbar-dark justify-content-end me-2" style="background-color: #E6E6FA;">
        <div class="dropdown">
            <button class="btn custom-dropdown-btn dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                @lang('lang.nav_lang_title')
            </button>

            <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu">
                <li>
                    <a class="dropdown-item custom-dropdown-item"
                    href="{{ route('lang', 'en') }}">
                        @lang('lang.nav_lang_en_choice')
                    </a>
                </li>
                <li>
                    <a class="dropdown-item custom-dropdown-item"
                    href="{{ route('lang', 'fr') }}">
                        @lang('lang.nav_lang_fr_choice')
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="container flex-grow-1">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('content')
</div>

<footer class="footer mt-auto py-3 text-white" style="background-color: #7B68EE;">
    <div class="container text-center">
        &copy; {{ date('Y') }} {{ config('app.name') }} - @lang('lang.footer_right').
        <br>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
