@extends('layouts.app')

@section('content')
    <h1>Search Results for "{{ $query }}"</h1>

    @if ($posts->count() > 0)
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif
@endsection
