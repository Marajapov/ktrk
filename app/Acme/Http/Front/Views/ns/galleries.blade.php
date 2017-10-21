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
            <div class="panel panel-default panel-kenesh">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshFull') }}</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::ns.sidebar')

                <div class="col-md-10">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshGallery') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      <section>
                      @if($galleries)
                      @foreach($galleries as $gallery)
                        <div class="col-md-4">
                        {!! Form::open(['route' => ['front.ns.gallery', $gallery->id], 'method' => 'get', 'onclick' => "submit()"]) !!}
                          <div class="gallery-item">
                            <a href="#" class="thumb">
                              <img src="{{ asset($gallery->status) }}" alt="..." class="img-thumbnail">
                              <i class="fa fa-camera"></i>
                            </a>
                            <h2>
                              <div class="extra">
                                <span class="e-datetime">{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }}, {{ $gallery->getTime() }}</span>
                              </div>
                              <a href="#">{{ $gallery->getName() }}</a>
                            </h2>
                          </div>
                          <input type="hidden" value="{{ $gallery->id }}" name="photoParentId">
                          {!! Form::close() !!}
                        </div>
                        @endforeach
                        @endif

                      </section>

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