@extends('Admin::layouts.default')
@section('title', $post->getTitle())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.post.destroy', $post], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Өчүрүүгө макулсузбу?")']) !!}
    <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>Өзгөртүү</a>
    <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Өчүрүү</button>
    
    {!! Form::close() !!}
</div>


<div>
    <h3>{{ $post->getTitle() }}</h3>
    <p>Категория: <a href="{{ route('admin.category.show', $post->category) }}">{{ $post->category->getTitle()  }}</a></p>
    <hr>
    <p>{!! $post->getContent() !!}</p>
</div>
<hr />
<div>
    <p>Миниатюра:</p>
    @if($post->isImage())
    <img src="{{ asset($post->getFile()) }}" width="200" height="100">
    @endif
</div>

@if(count($post->tags)>0)
<hr>
<div>
    <h4>Теги:</h4>
    @foreach($post->tags as $tag)
    <span>{{ $tag->getName() }}</span>
    @endforeach
</div>
@endif
@stop

