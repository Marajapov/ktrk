@extends('Admin::layouts.default')
@section('title', "Posts")

@section('content')
<div>
    <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>
<div class="list-group">
@foreach($posts as $post)

<div class="@if(!$post->isPublished()) alert alert-danger list-group-item @endif list-group-item">
    <i>{{ $post->id() }}. </i><a href="{{ route('admin.post.show', $post) }}">{{ $post->getTitle() }}</a> ({{ $post->category->getTitle()  }})
</div>
@endforeach
</div>

<a href="{{ route('admin.post.index', ['page' => 1]) }}" class="btn btn-default @if($posts->currentPage() == 1) disabled @endif">Начало</a>
<a href="{{ $posts->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a href="{{ $posts->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>

@for($i = 0, $j = 1; $i < $posts->total(); $i+=$perPage)
<a href="{{ route('admin.post.index', ['page' => $j]) }}" class="btn btn-default @if($posts->currentPage() == $j) disabled @endif">{{ $j++ }}</a>
@endfor

<a href="{{ route('admin.post.index', ['page' => ceil($posts->total()/$perPage)]) }}" class="btn btn-default @if($posts->currentPage() == ceil($posts->total()/$perPage)) disabled @endif">Конец</a>

@stop

