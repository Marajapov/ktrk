@extends('Front::layouts.default')
@section('title', trans('site.BaikoochuKeneshFull').' | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <meta name="_token" content="{!! csrf_token() !!}"/>
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
            <div class="panel panel-default panel-kenesh">
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

                      <div class="col-md-12 block news-block">
                        <h4 class="news-title">
                          {{ $post->getTitleRuOrKg() }}
                          <div class="extra">
                            <span class="art-date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime() }}</span>
                            <span class="art-view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                          </div>
                        </h4>

                        <p class="post-thumb" href="#">
                          <img height="150" class="left" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                        </p>

                        <p>
                          {!! $post->getContent() !!}
                        </p>

                         <div class="carousel-post">
                             @if($images != null)
                             @foreach($images as $image)
                             <div class="col-md-4">
                                <a href="#">

                                <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                </a>
                             </div>
                             @endforeach
                             @endif
                          </div>

                      </div>

                      <footer>
                        <a href="{{ route('front.general') }}">
                          <span>{{ trans('site.FrontPostAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                      </footer>

                    </div>

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