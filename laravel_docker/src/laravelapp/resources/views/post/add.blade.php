@extends('layouts.base')

@section('title')
MyBBS ADD
@endsection
@section('content')
       <h1 class="detail-title">投稿画面</h1>
       <form action="{{ route('posts.save') }}"" method="post">
            @csrf
            @if ($errors->has('title'))
                <div>{{$errors->first('title')}}</div>
            @endif
            <div class="add-title">
                <span>Title:</span><input type="text" name="title" value=""/>
            </diV>
            @if ($errors->has('body'))
                <div>{{$errors->first('body')}}</div>
            @endif
            <div>
                <span>Bodys:</span>
                <br>
                <textarea rows="2" cols="40" name="body" value=""></textarea>
            </diV>
            &laquo; <a href="{{ route('posts.index') }}">Back</a><input class="sumbit" type="submit" value="投稿">
       </form>
@endsection
