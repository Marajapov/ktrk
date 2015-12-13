@extends('Admin::layouts.default')
@section('title', trans('site.AdminMediaArticles'))

@section('content')

  <div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <a href="{{ route('admin.media.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>{{ trans('site.AdminMediaNew') }}</a>
        </div>
        <div class="x_content">
          <h2>{{ trans('site.AdminMediaArticles') }}</h2>

          <div class="list-group">
            @foreach($medias as $media)
              <div class="col-md-1 col-sm-3 col-xs-6">
                <a href="{{ route('admin.media.show', $media) }}">
                  @if($media->isImage())
                    <img src="http://img.youtube.com/vi/{{ $media->getUrl() }}/sddefault.jpg" class="img-responsive">
                  @else
                    <img src="http://img.youtube.com/vi/{{ $media->getUrl() }}/sddefault.jpg" class="img-responsive">
                  @endif
                    <h2>{!! $media->getName() !!}</h2>
                </a>
              <!-- video1 -->
              {!! Form::open(['route' => ['admin.media.dayVideo1', $media->id], 'method' => 'get', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
              <input type="hidden" value="{{ $media->id }}" name="media">

              <button class="btn @if($media->dayVideo == 1) btn-warning @else btn-default @endif" type="submit"><i class="fa fa-star"></i></button>
              {!! Form::close() !!}

              <!-- video2 -->
              {!! Form::open(['route' => ['admin.media.dayVideo2', $media->id], 'method' => 'get', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
              <input type="hidden" value="{{ $media->id }}" name="media">

              <button class="btn @if($media->dayVideo == 2) btn-warning @else btn-default @endif" type="submit"><i class="fa fa-plane"></i></button>
              {!! Form::close() !!}

              <!-- video3 -->
              {!! Form::open(['route' => ['admin.media.dayVideo3', $media->id], 'method' => 'get', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
              <input type="hidden" value="{{ $media->id }}" name="media">

              <button class="btn @if($media->dayVideo == 3) btn-warning @else btn-default @endif" type="submit"><i class="fa fa-rocket"></i></button>
              {!! Form::close() !!}

              <!-- video4 -->
              {!! Form::open(['route' => ['admin.media.dayVideo4', $media->id], 'method' => 'get', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
              <input type="hidden" value="{{ $media->id }}" name="media">

              <button class="btn @if($media->dayVideo == 4) btn-warning @else btn-default @endif" type="submit"><i class="fa fa-car"></i></button>
              {!! Form::close() !!}

              <!-- video5 -->
              {!! Form::open(['route' => ['admin.media.dayVideo5', $media->id], 'method' => 'get', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
              <input type="hidden" value="{{ $media->id }}" name="media">

              <button class="btn @if($media->dayVideo == 5) btn-warning @else btn-default @endif" type="submit"><i class="fa fa-train"></i></button>
              {!! Form::close() !!}


              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

@stop

