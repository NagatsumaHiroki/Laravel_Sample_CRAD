@extends('layouts.base')

@section('title')
MyBBS
@endsection
@section('content')
    <h1 class="heater">MyBBS</h1>
        <ul>
            @forelse ($posts as $post)
                <li>
                <a href="{{ route('posts.detail', $post->id ) }}"">
                        {{ $post->title }}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
@endsection
