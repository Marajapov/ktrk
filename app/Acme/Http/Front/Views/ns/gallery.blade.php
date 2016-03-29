@extends('Front::layouts.default')
@section('title', 'Асылбек Жээнбеков КТРКнын Байкоочу кеңеши менен жолукту | КТРК')
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
                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshGallery') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      <h4 class="gallery-title">{{ $row->getName() }}</h4>

                      <div class="col-md-12">
                        <div class="row">
                          <div class="slider-for">
                          @foreach($images as $image)
                            <div>
                              <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                              <span class="slide-caption">
                                {{ $row->getName() }}
                              </span>
                            </div>
                            @endforeach
                            
                          </div>

                          <div class="slider-nav col-md-12">
                            @foreach($images as $image)
                            <div>
                              <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>

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
            parent.html(data['html']);
          }
      });
    }
  </script>

  <!--Carousel-->
  <script>
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      centerMode: true,
      focusOnSelect: true,
      variableWidth: true
    });
  </script>

@endsection