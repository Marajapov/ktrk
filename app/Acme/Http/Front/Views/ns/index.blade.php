@extends('Front::layouts.default')
@section('title', trans('site.BaikoochuKeneshFull').' | КТРК')
@section('styles')
  <meta name="_token" content="{!! csrf_token() !!}"/>
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh panel-rs">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshFull') }}</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::ns.sidebar')

                <div class="col-md-10">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>{{ trans('site.Top news') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">
                      {{--@include('Front::ns.lastPosts')--}}
                      @foreach($popPosts as $pop)

                      <div class="col-md-4 first-item">

                        <a href="{{ route('front.ns.post', $pop) }}" class="thumb">
                          <img src="@if(!($pop->getFile()))images/live_bg.png @else {{ asset($pop->thumbnail_big) }} @endif" alt=""/>
                        </a>
                        <div class="post-box">
                          <div class="extra">
                            <span class="e-datetime">{{ $pop->getDay() }} {{ $pop->getMonthRu() }}, {{ $pop->getTime() }}</span>
                            <span class="e-views"><i class="fa fa-eye"></i>{{ $pop->getViewed() }}</span>
                          </div>
                          <h2>
                            <a href="{{ route('front.ns.post', $pop) }}">{{ $pop->getTitleRuOrKg() }}</a>
                          </h2>
                        </div>

                      </div>

                      @endforeach

                      <div class="col-md-6 hidden">

                        @include('Front::ns.lastPosts')
                      </div>

                      <footer>
                        <a href="{{ route('front.ns.posts') }}">
                          <span>{{ trans('site.FrontPostAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                      </footer>

                    </div>


                    {{--<div class="row"> --}}
                    {{--<div class="col-md-12 first-item">--}}
                    {{--@foreach($popPosts as $pop)--}}
                    {{----}}
                    {{--<div class="col-md-4">--}}
                    {{--<a href="{{ route('front.ns.post', $pop) }}" class="thumb">--}}
                    {{--<img src="@if(!($pop->getFile()))images/live_bg.png @else {{ asset($pop->getFile()) }} @endif" alt=""/>--}}
                    {{--</a>--}}
                    {{--<h2>--}}
                    {{--<div class="extra">--}}
                    {{--<span class="e-datetime">{{ $pop->getDay() }} {{ $pop->getMonthRu() }}, {{ $pop->getTime() }}</span>--}}
                    {{--<span class="e-views"><i class="fa fa-eye"></i>{{ $pop->getViewed() }}</span>--}}
                    {{--</div>--}}
                    {{--<a href="{{ route('front.ns.post', $pop) }}">{{ $pop->getTitleRuOrKg() }}</a>--}}
                    {{--</h2>--}}
                    {{--</div>--}}
                    {{----}}
                    {{--@endforeach--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                    {{--@include('Front::ns.lastPosts')--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                    {{--@include('Front::ns.lastPosts')--}}
                    {{--</div>--}}

                    {{--<footer>--}}
                    {{--<a href="{{ route('front.ns.posts') }}">--}}
                    {{--<span>{{ trans('site.FrontPostAll') }} <i class="fa fa-arrow-circle-right"></i></span>--}}
                    {{--</a>--}}
                    {{--</footer>--}}

                    {{--</div>--}}
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>

@stop

@section('footerScript')

  <script>
    $('.carousel-ns').slick({
      arrows: false,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2500
    });
  </script>

  <script src="{{ asset('js/sweetalert.min.js') }}"></script>

  <script>
    function getVote(vote){
      $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });

      var dataString = 'vote='+vote;
      var url = "{{ route('front.poll_vote') }}";
      var parent = $('#poll');

      $.ajax({
          type: "POST",
          url: url,
          data: dataString,
          cache: false,
          success: function(data)
          {
            if(data['status'] == false){
              swal("", "С одного IP-адреса можно голосовать 1 РАЗ!", "error");
              parent.html(data['html']);
            } 
            else{
              swal("Спасибо!", "Ваш голос учтен!", "success");
              parent.html(data['html']);
            }
          }
      });
    }
  </script>

@endsection