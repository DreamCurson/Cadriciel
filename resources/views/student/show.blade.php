@extends('layout.layout')
@section('title', $student->name)
@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8" style="flex-grow: 1;">
        <div class="card shadow-lg rounded-4" style="background-color: #E6E6FA;">
            
            <div class="card-header text-white fs-5 fw-bold" style="background-color: #7B68EE;">
                {{ $student->name }}
            </div>

            <div class="card-body fs-6">
                <ul class="list-unstyled mb-3">
                    <li><strong>Adresse :</strong> {{ $student->address }}</li>
                    <li><strong>Téléphone :</strong> {{ $student->phone }}</li>
                    <li><strong>Email :</strong> {{ $student->email }}</li>
                    <li><strong>Date de naissance :</strong> {{ $student->birth }}</li>
                    <li><strong>Pays :</strong> {{ $student->country->name }}</li>
                </ul>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('student.edit', $student->id) }}" 
                       class="btn btn-sm text-white rounded-pill shadow fw-semibold"
                       style="background-color: #7B68EE;"
                       onmouseover="this.style.backgroundColor='#6A5ACD';"
                       onmouseout="this.style.backgroundColor='#7B68EE';">
                        Modifier
                    </a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm text-white rounded-pill shadow fw-semibold"
                        style="background-color: #DC3545;"
                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                        onmouseover="this.style.backgroundColor='#C82333';"
                        onmouseout="this.style.backgroundColor='#DC3545';">
                        Supprimer l'étudiant(e)
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-4">
      <div class="modal-header" style="background-color: #7B68EE; color:white;">
        <h1 class="modal-title fs-5" id="deleteModalLabel">Supprimer</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6">
        Êtes-vous sûr de supprimer cet(te) élève?: <strong>{{ $student->name }}</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
            Annuler
        </button>
        <form method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger rounded-pill" value="Supprimer">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
