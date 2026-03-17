@extends('layout.layout')

@section('title', __('lang.document_title_page'))

@section('content')

<div class="d-flex justify-content-center align-items-center mt-3 mb-5 text-purple">
    <h1 class="fw-bold me-3">@lang('lang.document_title_page')</h1>
    <a href="{{ route('document.create') }}" class="text-purple">
        <i class="bi bi-plus-square fs-3"></i>
    </a>
</div>

<div class="table-responsive">
    <table class="table table-hover table-bordered align-middle rounded-3 shadow-sm overflow-hidden">
        <thead class="table-dark text-center">
            <tr class="text-white bg-purple">
                <th>#</th>
                <th>@lang('lang.document_title')</th>
                <th>@lang('lang.document_author')</th>
                <th>Langue</th>
                <th>@lang('lang.document_file')</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($documents as $document)
                <tr class="bg-light">
                    <td>{{ $document->id }}</td>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->author }}</td>
                    <td class="text-center">
                        <span class="badge {{ $document->lang == 'fr' ? 'bg-purple' : 'bg-primary' }}">
                            {{ strtoupper($document->lang) }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ asset('storage/' . $document->document) }}" target="_blank" class="text-decoration-none text-dark">
                            {{ $document->original_name }}
                        </a>
                    </td>
                    @if ($document->author == $student)
                    <td class="text-center p-0">
                        <a href="{{ route('document.edit', $document) }}" class="btn btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <button type="button" class="btn btn-sm text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                             <i class="bi bi-trash3-fill"></i>
                        </button>
                    </td>
                    @else
                    <td class="text-center">
                        
                    </td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">@lang('lang.document_no_file')</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-4">
      <div class="modal-header" style="background-color: #7B68EE; color:white;">
        <h1 class="modal-title fs-5" id="deleteModalLabel">@lang('lang.document_modal_title')</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6">
        @lang('lang.forum_edit_modal_message') <strong>{{ $document->title }}</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
            @lang('lang.student_modal_cancel')
        </button>
        <form method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger rounded-pill" value="@lang('lang.document_modal_title')">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection