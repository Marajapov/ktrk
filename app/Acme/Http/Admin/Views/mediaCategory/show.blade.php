@extends('Admin::layouts.default')

@section('title', $mediaCategory->getName())

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Информация</div>
    <div class="panel-body">

        <div class="col-md-5"><h3>{{ $mediaCategory->getTitle() }}</h3> ({{ $mediaCategory->getName() }})</div>

        <div class="col-md-5">
            {!! Form::open(['route' => ['admin.mediaCategory.destroy', $mediaCategory], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
            <a href="{{ route('admin.mediaCategory.edit', $mediaCategory) }}" class="btn btn-primary">Редактировать</a>
            <button class="btn btn-danger" type="submit">Удалить</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<h2><span class="label label-default">Все новости относящий </span></h2>
<div class="list-group">
@foreach($mediaCategory->posts as $post)
    
        <a href="{{ route('admin.post.show', $post) }}" class="list-group-item">{{ $post->getTitle() }} ({!! $post->getDescription() !!})</a>
        
@endforeach
</div>

@stop

