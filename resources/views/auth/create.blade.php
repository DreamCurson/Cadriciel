@extends('layout.layout')
@section('title', 'Login')
@section('content')

@if(!$errors->isEmpty())
<div class="row justify-content-center mt-4">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card shadow rounded-4" style="background-color: #FFE6E6; border-left: 5px solid #FF4C4C;">
            <div class="card-body">
                <ul class="mb-0 text-danger fw-semibold">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>                
@endif

<div class="row justify-content-center mt-5 mb-5">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card shadow-lg rounded-4" style="background-color: #E6E6FA;">
            
            <div class="card-header fs-5 fw-bold text-white" style="background-color: #7B68EE;">
                @lang('lang.auth_title')
            </div>

            <div class="card-body">
                <form method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="username" class="form-label fw-semibold">@lang('lang.auth_email')</label>
                        <input type="text" class="form-control" id="username" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">@lang('lang.auth_password')</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" 
                            class="btn text-white w-50 fw-semibold rounded-pill shadow d-block mx-auto"
                            style="background-color: #7B68EE;"
                            onmouseover="this.style.backgroundColor='#6A5ACD';"
                            onmouseout="this.style.backgroundColor='#7B68EE';">
                        @lang('lang.auth_button')
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection