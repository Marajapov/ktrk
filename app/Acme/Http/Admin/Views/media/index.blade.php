@extends('Admin::layouts.default')
@section('title', "Channels")

@section('content')

<div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
               <a href="{{ route('admin.media.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>{{ trans('site.AdminMediaNew') }}</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h2>{{ trans('site.AdminMediaArticles') }}</h2>

                <div class="clearfix"></div>
                <div class="list-group">
                    @foreach($medias as $media)
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <a href="{{ route('admin.media.show', $media) }}">
                            @if($media->isImage())
                            <img src="http://img.youtube.com/vi/{{ $media->getUrl() }}/sddefault.jpg" class="img-responsive">
                            @else
                            <img src="http://img.youtube.com/vi/{{ $media->getUrl() }}/sddefault.jpg" class="img-responsive">
                            @endif
                        </a>
                        <h2>{!! $media->getName() !!}</h2>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@stop

