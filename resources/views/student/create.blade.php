@extends('layout.layout')
@section('title', 'Ajouter un élève')
@section('content')

<h1 class="mb-4 text-center fw-bold" style="color: #7B68EE;">
    Ajouter un élève
</h1>

<div class="row justify-content-center">
    <div class="col-12 col-md-8">
        <div class="card shadow-lg rounded-4" style="background-color: #E6E6FA;">
            
            <div class="card-header fs-5 fw-bold text-white" style="background-color: #7B68EE;">
                Nouvel(le) élève
            </div>

            <div class="card-body">
                <form action="{{ route('student.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label fw-semibold">Adresse</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                        @if($errors->has('address'))
                            <div class="text-danger mt-2">{{ $errors->first('address') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label fw-semibold">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                        @if($errors->has('phone'))
                            <div class="text-danger mt-2">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Adresse courriel</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="birth" class="form-label fw-semibold">Date de naissance</label>
                        <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth') }}">
                        @if($errors->has('birth'))
                            <div class="text-danger mt-2">{{ $errors->first('birth') }}</div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="country_id" class="form-label fw-semibold">Pays de résidence</label>
                        <select name="country_id" id="country_id" class="form-select">
                            <option value="">Sélectionner un pays</option>
                            @foreach($country as $c)
                                <option value="{{ $c->id }}" {{ old('country_id') == $c->id ? 'selected' : '' }}>
                                    {{ $c->name }}
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('country_id'))
                            <div class="text-danger mt-2">{{ $errors->first('country_id') }}</div>
                        @endif
                    </div>

                    <button type="submit" 
                            class="btn text-white w-50 fw-semibold rounded-pill shadow d-block mx-auto"
                            style="background-color: #7B68EE;"
                            onmouseover="this.style.backgroundColor='#6A5ACD';"
                            onmouseout="this.style.backgroundColor='#7B68EE';">
                        Enregistrer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
