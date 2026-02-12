<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #E6E6FA;">

<header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #7B68EE;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>

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
                            Liste des étudiants
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white"
                        href="{{ route('student.create') }}"
                        onmouseover="this.style.color='#E6E6FA'; this.style.textDecoration='underline';"
                        onmouseout="this.style.color='white'; this.style.textDecoration='none';">
                            Ajouter un étudiant
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container flex-grow-1 py-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('content')
</div>

<footer class="footer mt-auto py-3 text-white" style="background-color: #7B68EE;">
    <div class="container text-center">
        &copy; {{ date('Y') }} {{ config('app.name') }} - Tous droits réservés.
        <br>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
