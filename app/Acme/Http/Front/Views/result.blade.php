@extends('Front::layouts.default')
@section('title', "Главная страница")

@section('content')
    <h1>Posts</h1>
    @foreach($posts as $post)
        <div class="">
            <a href="{{ route('front.post', $post) }}" target="_blank">{{ $post->getTitle() }}</a>
        </div>
    @endforeach
    <hr>
    <h1>Pages</h1>
    @foreach($pages as $page)
        <div class="">
            <a href="{{ route('front.page', $page) }}" target="_blank">{{ $page->getName() }}</a>
        </div>
    @endforeach
@stop
