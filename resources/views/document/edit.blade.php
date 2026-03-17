@extends('layout.layout')
@section('title', __('lang.document_edit_title_page'))
@section('content')

<h1 class="mb-4 text-center fw-bold" style="color: #7B68EE;">
    @lang('lang.document_edit_title_page')
</h1>

<div class="row justify-content-center mb-5">
    <div class="col-12 col-md-8">
        <div class="card shadow-lg rounded-4" style="background-color: #E6E6FA;">
            
            <div class="card-header fs-5 fw-bold text-white" style="background-color: #7B68EE;">
                @lang('lang.document_edit_under_title')
            </div>

            <div class="card-body">
                <form action="{{ route('document.update', $document) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold">@lang('lang.forum_form_title')</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $document->title) }}">
                        @if($errors->has('title'))
                            <div class="text-danger mt-2">{{ $errors->first('title') }}</div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="lang" class="form-label fw-semibold">@lang('lang.document_add_lang')</label>
                        <select class="form-select bg-light text-dark" name="lang" id="lang">
                            <option value="fr" {{ old('lang', $document->lang) == 'fr' ? 'selected' : '' }}>@lang('lang.document_add_fr')</option>
                            <option value="en" {{ old('lang', $document->lang) == 'en' ? 'selected' : '' }}>@lang('lang.document_add_en')</option>
                        </select>
                        @if($errors->has('lang'))
                            <div class="text-danger mt-2">{{ $errors->first('lang') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="document" class="form-label fw-semibold">@lang('lang.document_add_file')</label>
                        <p class="mb-2 text-muted">@lang('lang.document_edit_current') {{ $document->original_name }}</p>
                        <input type="file" class="form-control" id="document" name="document">
                        <span class="form-text text-muted">@lang('lang.document_add_authorize') | @lang('lang.document_edit_message')</span>
                        @if($errors->has('document'))
                            <div class="text-danger mt-2">{{ $errors->first('document') }}</div>
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
                        @lang('lang.document_edit_button')
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
