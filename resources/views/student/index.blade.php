@extends('layout.layout')

@section('title', 'Liste des étudiants')

@section('content')
    <h1 class="mt-3 mb-5 fw-bold text-center" style="color: #7B68EE;">
        Liste des étudiants
    </h1>

    <div class="row g-4 justify-content-center">
        @forelse($students as $student)
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card h-100 shadow rounded-2" style="background-color: #E6E6FA;">
                    
                    <div class="card-header text-white fw-bold fs-5" style="background-color: #7B68EE;">
                        {{ $student->name }}
                    </div>

                    <div class="card-body fs-6">
                        <p class="mb-2"><strong>Adresse :</strong> {{ $student->address }}</p>
                        <p class="mb-2"><strong>Téléphone :</strong> {{ $student->phone }}</p>
                        <p class="mb-2"><strong>Email :</strong> {{ $student->email }}</p>
                        <p class="mb-2"><strong>Date de naissance :</strong> {{ $student->birth }}</p>
                        <p class="mb-0"><strong>Pays :</strong> {{ $student->country->name }}</p>
                    </div>

                    <div class="p-2 text-end">
                        <a href="{{ route('student.show', $student->id) }}"
                           class="btn btn-sm text-white rounded-pill shadow fw-semibold"
                           style="background-color: #7B68EE;"
                           onmouseover="this.style.backgroundColor='#6A5ACD';"
                           onmouseout="this.style.backgroundColor='#7B68EE';">
                            Détails
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Aucun étudiant n'existe
                </div>
            </div>
        @endforelse
    </div>
@endsection
