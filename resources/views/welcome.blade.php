@extends('layout.layout')

@section('title', 'Bienvenue')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 70vh;">
        
        <h1 class="text-center fw-bold mb-4 text-purple">
            {{ config('app.name') }}
        </h1>

        <p class="fs-5 mb-3 text-center">
            Bienvenue sur la plateforme des étudiants du Collège de Maisonneuve.
        </p>

        <p class="text-muted mb-4 text-center">
            Cette application vous permet de consulter et gérer les informations des étudiants.
        </p>

        <a href="{{ route('student.index') }}" class="btn btn-lg w-50 text-white fw-semibold rounded-pill shadow"
            style="background-color: #7B68EE;"
            onmouseover="this.style.backgroundColor='#6A5ACD';"
            onmouseout="this.style.backgroundColor='#7B68EE';">
            Liste des étudiants
        </a>


    </div>
@endsection
