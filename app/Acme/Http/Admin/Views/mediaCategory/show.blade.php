@extends('Admin::layouts.default')

@section('title', $mediaCategory->getName())

@section('content')

<div class="row modals">
 <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{ trans('site.Info') }}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="col-md-5"><h3>{{ $mediaCategory->getName() }}</h3> ({{ $mediaCategory->getVideoType() }})</div>
            <div class="col-md-5">
                {!! Form::open(['route' => ['admin.mediaCategory.destroy', $mediaCategory], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                <a href="{{ route('admin.mediaCategory.edit', $mediaCategory) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>
                <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>
<h2><span class="label label-default">{{ trans('site.AdminMediaCategoryTekteshArticles') }}</span></h2>
<div class="list-group">
    @foreach($mediaCategory->medias as $media)        
    <a href="{{ route('admin.media.show', $media) }}" class="list-group-item">{{ $media->getName() }}</a>        
    @endforeach
</div>

@stop
