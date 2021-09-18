@extends('layouts.base')

@section('title')
MyBBS EDIT
@endsection
@section('content')
<h1 class="detail-title">編集画面</h1>
       <form action="{{ route('posts.update') }}" method="post">
        @csrf
        @if ($errors->has('title'))
            <div>{{$errors->first('title')}}</div>
        @endif
        <div class="add-title">
            <span>Title:</span><input type="text" name="title" value="{{ $params->title }}"/>
        </diV>
        @if ($errors->has('body'))
            <div>{{$errors->first('body')}}</div>
        @endif
        <div>
            <span>Bodys:</span>
            <br>
            <textarea rows="2" cols="40" name="body">{{ $params->body }}</textarea>
        </diV>
        <input type="hidden" name="id" value="{{ $params->id }}">
        &laquo; <a href="{{ route('posts.index') }}">Back</a><input class="sumbit" type="submit" value="修正">
   </form>
@endsection
