@extends('Admin::layouts.default')
@section('title', $photoParent->getName())

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Информация</h3>

    <div class="col-md-12">
        <h2><span class="label label-default"></span>{{ $photoParent->getName() }}</h2>
    </div>

    <div class="col-md-4">
        {!! Form::open(['route' => ['admin.photoParent.destroy', $photoParent], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
        <a href="{{ route('admin.photoParent.edit', $photoParent) }}" class="btn btn-primary">Изменить</a>
        <button class="btn btn-danger" type="submit">Удалить</button>
        {!! Form::close() !!}
    </div>
  </div>
  <div class="col-md-12"><hr></div>
  <div class="panel-body">
    @if($photoParent->isImage())
    <img src="{{ asset($photoParent->getFile()) }}">
    @else
    <object width="400" height="200" type="application/x-shockwave-flash" data="{{ asset($photoParent->getFile()) }}"></object>
    @endif

  </div>
</div>
@stop

