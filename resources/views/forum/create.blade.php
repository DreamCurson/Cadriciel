@extends('layout.layout')
@section('title',  __('lang.forum_form_title_page'))
@section('content')

<h1 class="mb-4 text-center fw-bold" style="color: #7B68EE;">
    @lang('lang.forum_form_title_page')
</h1>

<div class="row justify-content-center mb-5">
    <div class="col-12 col-md-8">
        <div class="card shadow-lg rounded-4" style="background-color: #E6E6FA;">
            
            <div class="card-header fs-5 fw-bold text-white" style="background-color: #7B68EE;">
                @lang('lang.forum_form_under_title')
            </div>

            <div class="card-body">
                <form action="{{ route('forum.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold">@lang('lang.forum_form_title')</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        @if($errors->has('title'))
                            <div class="text-danger mt-2">{{ $errors->first('title') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label fw-semibold">@lang('lang.forum_form_content')</label>
                        <textarea class="form-control" id="content" name="content" rows="5" placeholder="@lang('lang.forum_form_placeholder')">{{ old('content') }}</textarea>
                        @if($errors->has('content'))
                            <div class="text-danger mt-2">{{ $errors->first('content') }}</div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="lang" class="form-label fw-semibold">@lang('lang.forum_form_lang')</label>
                        <select class="form-select bg-light text-dark" name="lang" id="lang">
                            <option value="fr" {{ old('lang') == 'fr' ? 'selected' : '' }}>Français</option>
                            <option value="en" {{ old('lang') == 'en' ? 'selected' : '' }}>Anglais</option>
                        </select>
                        @if($errors->has('lang'))
                            <div class="text-danger mt-2">{{ $errors->first('lang') }}</div>
                        @endif
                    </div>
                    
                    <div class="mb-3">
                        <label for="author" class="form-label fw-semibold">@lang('lang.forum_author')</label>
                        <input type="text" class="form-control bg-light text-muted readonly-input" id="author" name="author" value="{{ $student }}" readonly>
                    </div>

                    <button type="submit" 
                            class="btn text-white w-50 fw-semibold rounded-pill shadow d-block mx-auto"
                            style="background-color: #7B68EE;"
                            onmouseover="this.style.backgroundColor='#6A5ACD';"
                            onmouseout="this.style.backgroundColor='#7B68EE';">
                        @lang('lang.forum_form_button')
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
