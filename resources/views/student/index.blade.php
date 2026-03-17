@extends('layout.layout')

@section('title', __('lang.student_list_title'))

@section('content')
    <h1 class="mt-3 mb-5 fw-bold text-center" style="color: #7B68EE;">
        @lang('lang.student_list_title')
    </h1>

    <div class="row g-4 justify-content-center mb-5">
        @forelse($students as $student)
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card h-100 shadow rounded-2" style="background-color: #E6E6FA;">
                    
                    <div class="card-header text-white fw-bold fs-5" style="background-color: #7B68EE;">
                        {{ $student->name }}
                    </div>

                    <div class="card-body fs-6">
                        <p class="mb-2"><strong>@lang('lang.student_list_address') :</strong> {{ $student->address }}</p>
                        <p class="mb-2"><strong>@lang('lang.student_list_phone') :</strong> {{ $student->phone }}</p>
                        <p class="mb-2"><strong>@lang('lang.student_list_email') :</strong> {{ $student->email }}</p>
                        <p class="mb-2"><strong>@lang('lang.student_list_birthdate') :</strong> {{ $student->birth }}</p>
                        <p class="mb-0"><strong>@lang('lang.student_list_country') :</strong> {{ $student->country->name }}</p>
                    </div>

                    <div class="p-2 text-end">
                        <a href="{{ route('student.show', $student->id) }}"
                           class="btn btn-sm text-white rounded-pill shadow fw-semibold"
                           style="background-color: #7B68EE;"
                           onmouseover="this.style.backgroundColor='#6A5ACD';"
                           onmouseout="this.style.backgroundColor='#7B68EE';">
                            @lang('lang.student_list_button')
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    @lang('lang.student_list_error')
                </div>
            </div>
        @endforelse
    </div>
@endsection
