@extends('layout.layout')

@section('title', 'Forum')

@section('addnav')
<nav class="navbar navbar" style="background-color: #c9adff57">
    <div class="container-fluid">
        @guest
        <li class="nav-item">
            <a class="nav-link active"
               href="{{ route('login') }}"
               onmouseover="this.style.color='#621393'; this.style.textDecoration='underline';"
               onmouseout="this.style.color='black'; this.style.textDecoration='none';">
               @lang('lang.forum_login_message')
            </a>
        </li> 
        @else
        <li class="nav-item">
            <a class="nav-link active"
               href="{{ route('forum.create') }}"
               onmouseover="this.style.color='#621393'; this.style.textDecoration='underline';"
               onmouseout="this.style.color='black'; this.style.textDecoration='none';">
               @lang('lang.forum_add_article')
            </a>
        </li> 
        @endguest
    </div>
</nav>
@endsection

@section('content')

<h1 class="mt-3 mb-5 fw-bold text-center" style="color: #7b68ee;">
    Forum
</h1>

<div class="mb-5">
    @forelse($articles as $article)
        <div class="forum-thread mb-3 p-3 rounded-2" style="background-color: #F8F8F8; border: 1px solid #DDD;">
            
            <div class="d-flex justify-content-between align-items-centee">
                <a href="{{ route('forum.show', $article) }}" class="forum-title fw-bold text-decoration-none text-dark">
                    {{ $article->title }}
                </a>
                <span class="badge {{ $article->lang == 'fr' ? 'bg-purple' : 'bg-blue-en' }}">
                    {{ strtoupper($article->lang) }}
                </span>
            </div>

            <div class="text-muted mt-1 mb-2" style="font-size: 0.85rem;">
                <span>@lang('lang.forum_author') : {{ $article->author }}</span>
            </div>

            <p class="mb-2 text-truncate" style="max-height: 3em; overflow: hidden; text-overflow: ellipsis;">
                {{ $article->content }}
            </p>
            <div class="d-flex justify-content-between align-items-centee">
                <span class="text-muted mt-1" style="font-size: 0.85rem;">{{ $article->created_at->format('d/m/Y H:i') }}</span>
                @if ($article->author == $active_student)
                    <a href="{{ route('forum.edit', $article) }}" style="color: #7b68ee;"><i class="bi bi-pencil-square fs-5"></i></a>
                @endif
            </div>
        </div>
    @empty
        <div class="text-center text-muted mt-4">
            @lang('lang.forum_no_article')
        </div>
    @endforelse
</div>

@endsection