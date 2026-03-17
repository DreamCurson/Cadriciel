@extends('layout.layout')
@section('title', __('lang.forum_edit_title_page') . ' ' . $article->title)
@section('content')

<h1 class="mb-4 text-center fw-bold" style="color: #7B68EE;">
    @lang('lang.forum_edit_title_page') {{ $article->title }}
</h1>

<div class="row justify-content-center mb-5">
    <div class="col-12 col-md-8">
        <div class="card shadow-lg rounded-4" style="background-color: #E6E6FA;">
            
            <div class="card-header fs-5 fw-bold text-white" style="background-color: #7B68EE;">
                @lang('lang.forum_edit_under_title')
            </div>

            <div class="card-body">
                <form action="{{ route('forum.update', $article) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold">@lang('lang.forum_form_title')</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}">
                        @if($errors->has('title'))
                            <div class="text-danger mt-2">{{ $errors->first('title') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label fw-semibold">@lang('lang.forum_form_content')</label>
                        <textarea class="form-control" id="content" name="content" rows="5" placeholder="@lang('lang.forum_form_placeholder')">{{ old('content', $article->content) }}</textarea>
                        @if($errors->has('content'))
                            <div class="text-danger mt-2">{{ $errors->first('content') }}</div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="lang" class="form-label fw-semibold">@lang('lang.forum_form_lang')</label>
                        <select class="form-select bg-light text-dark" name="lang" id="lang">
                            <option value="fr" {{ old('lang', $article->lang) == 'fr' ? 'selected' : '' }}>@lang('lang.document_add_fr')</option>
                            <option value="en" {{ old('lang', $article->lang) == 'en' ? 'selected' : '' }}>@lang('lang.document_add_en')</option>
                        </select>
                        @if($errors->has('lang'))
                            <div class="text-danger mt-2">{{ $errors->first('lang') }}</div>
                        @endif
                    </div>
                    
                    <div class="mb-3">
                        <label for="author" class="form-label fw-semibold">@lang('lang.forum_author')</label>
                        <input type="text" class="form-control bg-light text-muted readonly-input" id="author" name="author" value="{{ $student }}" readonly>
                    </div>

                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <button type="submit" 
                                class="btn text-white w-50 fw-semibold rounded-pill shadow d-block mx-auto"
                                style="background-color: #7B68EE;"
                                onmouseover="this.style.backgroundColor='#6A5ACD';"
                                onmouseout="this.style.backgroundColor='#7B68EE';">
                            @lang('lang.forum_form_button')
                        </button>
                        <button type="button" class="border-0 bg-transparent p-0"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bi bi-trash3-fill text-danger fs-4"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-4">
      <div class="modal-header" style="background-color: #7B68EE; color:white;">
        <h1 class="modal-title fs-5" id="deleteModalLabel">@lang('lang.forum_edit_modal_title')</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6">
        @lang('lang.forum_edit_modal_message') <strong>{{ $article->title }}</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
            @lang('lang.student_modal_cancel')
        </button>
        <form method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger rounded-pill" value="@lang('lang.forum_edit_modal_title')">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
