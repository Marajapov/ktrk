@extends('Admin::layouts.default')

@section('title', $mediaCategory->getName())

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Информация</div>
    <div class="panel-body">

        <div class="col-md-5"><h3>{{ $mediaCategory->getName() }}</h3> ({{ $mediaCategory->getResourceType() }})</div>

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
@foreach($mediaCategory->medias as $media)
    
        <a href="{{ route('admin.media.show', $media) }}" class="list-group-item">{{ $media->getName() }}</a>
        
@endforeach
</div>

@stop

