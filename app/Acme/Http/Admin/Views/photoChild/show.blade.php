@extends('Admin::layouts.default')
@section('title', $photoChild->getName())

@section('content')
<div class="row modals">
  <div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
      <div class="x_title">
        <h2>{{ trans('site.Info') }}</h2>
        <div class="clearfix"></div>
      </div>  
    <div class="col-md-12">
      <h2><span class="label label-default"></span>{{ $photoChild->getName() }}</h2>
    </div>

    <div class="col-md-4">
      {!! Form::open(['route' => ['admin.photoChild.destroy', $photoChild], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
      <a href="{{ route('admin.photoChild.edit', $photoChild) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>
      <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>

      {!! Form::close() !!}
    </div>
  </div>
  <div class="col-md-12"><hr></div>
  <div class="panel-body">
    @if($photoChild->isImage())
    <img src="{{ asset($photoChild->getFile()) }}" width="200" height="120">
    @else
    <object width="200" height="120" type="application/x-shockwave-flash" data="{{ asset($photoChild->getFile()) }}"></object>
    @endif

  </div>
</div>
</div>
</div>
@stop

