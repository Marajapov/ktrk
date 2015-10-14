@extends('Admin::layouts.default')

@section('title', $category->getTitle())

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Информация</div>
    <div class="panel-body">

        <div class="col-md-5"><h3>{{ $category->getTitle() }}</h3> ({{ $category->getName() }})</div>

        <div class="col-md-5">
            {!! Form::open(['route' => ['admin.category.destroy', $category], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
            <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-primary">edit</a>
            <button class="btn btn-danger" type="submit">delete</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<h2><span class="label label-default">Все новости относящий </span></h2>
<div class="list-group">
@foreach($category->posts as $post)
    
        <a href="{{ route('admin.post.show', $post) }}" class="list-group-item">{{ $post->getTitle() }} ({!! $post->getDescription() !!})</a>
        
@endforeach
</div>

@stop

