@extends('Front::layouts.default')
@section('title', "Галереи")

@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
@stop

@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh">
              <div class="panel-heading">
                <h3 class="panel-title"><span>Фотогалерея</span></h3>
              </div>
              <div class="panel-body">

                <section>
                  @if($galleries)
                    @foreach($galleries as $gallery)

                      <div class="col-md-4">

                        <div class="gallery-item">
                          <a href="{{ route('front.gallery', $gallery) }}" class="thumb">
                            <img src="{{ asset($gallery->thumbnail_big) }}" alt="..." class="img-thumbnail">
                            <i class="fa fa-camera"></i>
                          </a>
                          <h2>
                            <div class="extra">
                              <span class="e-datetime">{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }}, {{ $gallery->getTime() }}</span>
                            </div>
                            <a href="{{ route('front.gallery', $gallery) }}">{{ $gallery->getName() }}</a>
                          </h2>
                        </div>

                      </div>
                    @endforeach
                  @endif

                </section>

              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>

@stop
@section('footerScript')

@endsection
