@extends('Admin::layouts.default')
@section('title', $media->getName())

@section('content')

<div class="row modals">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ trans('site.Info') }}</h2>
        <div class="clearfix"></div>
    </div>      
    <div class="panel-body">
        <div class="col-md-6">        

            <h3>{{ $media->getName() }}</h3>
            <span class="pull-left"><span class="glyphicon glyphicon-eye-open"></span> &nbsp;&nbsp;{{ $media->getViewed() }}</span>
         
            @if($media->isImage())
            <img src="{{ $media->getUrl() }}" class="img-responsive">
            @else
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $media->getUrl() }}?rel=0" frameborder="0" allowfullscreen></iframe>
            @endif

            {!! Form::open(['route' => ['admin.media.destroy', $media], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
            <a href="{{ route('admin.media.edit', $media) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>
            <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>

            {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
</div>

@stop