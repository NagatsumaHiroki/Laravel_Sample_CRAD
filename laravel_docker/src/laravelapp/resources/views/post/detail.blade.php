@extends('layouts.base')

@section('title')
MyBBS Detail
@endsection
@section('content')
        <div class="heater">
                &laquo; <a href="{{ route('posts.index') }}">Back</a>
                        <a href="{{ route('posts.add') }}" class="insert">投稿</a>
                        <a href="{{route('posts.edit', ['id' => $params->id])}}" class="">編集</a>

        </diV>
           <h1 class="detail-title">Title：{{ $params->title }}</h1>
           <div class="detail-body">Detail:{{ $params->body }}</div>
@endsection

