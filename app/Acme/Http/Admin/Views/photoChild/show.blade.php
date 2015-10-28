@extends('Admin::layouts.default')
@section('title', $photoChild->getName())

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Информация</h3>

    <div class="col-md-12">
      <h2><span class="label label-default"></span>{{ $photoChild->getName() }}</h2>
    </div>

    <div class="col-md-4">
      {!! Form::open(['route' => ['admin.photoChild.destroy', $photoChild], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Өчүрүүгө макулсузбу?")']) !!}
      <a href="{{ route('admin.photoChild.edit', $photoChild) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>Өзгөртүү</a>
      <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Өчүрүү</button>

      {!! Form::close() !!}
    </div>
  </div>
  <div class="col-md-12"><hr></div>
  <div class="panel-body">
    @if($photoChild->isImage())
    <img src="{{ asset($photoChild->getFile()) }}">
    @else
    <object width="400" height="200" type="application/x-shockwave-flash" data="{{ asset($photoChild->getFile()) }}"></object>
    @endif

  </div>
</div>
@stop

