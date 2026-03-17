@extends('layout.layout')

@section('title', 'Forum')

@section('content')

<div style="height:400px;" class="d-flex justify-content-center align-items-center">
    <div class="forum-thread mb-3 mt-3 p-3 rounded-2" 
     style="background-color: #F8F8F8; border: 1px solid #DDD; width: 100%;">
                
        <div class="d-flex justify-content-between align-items-centee">
            <a href="{{ route('forum.show', $article->id) }}" class="forum-title fw-bold text-decoration-none text-dark">
                        {{ $article->title }}
            </a>
            <span class="badge {{ $article->lang == 'fr' ? 'bg-purple' : 'bg-blue-en' }}">
                {{ strtoupper($article->lang) }}
            </span>
        </div>

        <div class="text-muted mt-1 mb-2" style="font-size: 0.85rem;">
            <span>@lang('lang.forum_author'): {{ $article->author }}</span>
        </div>

        <p class="mb-2">
            {{ $article->content }}
        </p>
        <div class="d-flex justify-content-between align-items-centee">
            <span class="text-muted mt-1" style="font-size: 0.85rem;">{{ $article->created_at->format('d/m/Y H:i') }}</span>
            @if ($article->author == $active_student)
                <a href="{{ route('forum.edit', $article) }}" style="color: #7b68ee;"><i class="bi bi-pencil-square fs-5"></i></a>
            @endif
        </div>
    </div>
</div>
<a href="{{ route('forum.index') }}" class="btn-soft-purple"><i class="bi bi-arrow-left"></i> @lang('lang.forum_show_button')</a>

@endsection