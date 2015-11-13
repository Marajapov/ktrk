@extends('Admin::layouts.default')
@section('title', $banner->getName())

@section('content')

<div class="row modals">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ trans('site.Info') }}</h2>
        <div class="clearfix"></div>
      </div>      
      <div class="panel-body">
        <div class="col-md-12">
          <h2><span class="label label-default"></span>{{ $banner->getName() }}</h2>
        </div>

        <div class="col-md-6">
          Категория: <a href="{{ route('admin.category.show', $banner->category) }}">{{ $banner->category->getTitle()  }}</a>
        </div>

        <div class="col-md-4">
          {!! Form::open(['route' => ['admin.banner.destroy', $banner], 'method' => 'DELETE', 'onsubmit' => 'return confirm("{{ trans('site.AreYouAgree') }}")']) !!}
          <a href="{{ route('admin.banner.edit', $banner) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>
          <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>
          {!! Form::close() !!}

        </div>
      </div>

      <div class="panel-body">
        @if($banner->isImage())
        <img src="{{ asset($banner->getFile()) }}">
        @else
        <object width="400" height="200" type="application/x-shockwave-flash" data="{{ asset($banner->getFile()) }}"></object>
        @endif

      </div>
    </div>
  </div>

</div>

@stop
