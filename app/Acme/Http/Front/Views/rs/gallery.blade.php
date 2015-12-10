@extends('Front::layouts.default')
@section('title', 'Асылбек Жээнбеков КТРКнын Байкоочу кеңеши менен жолукту | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
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

                      <h4 class="gallery-title">Асылбек Жээнбеков КТРКнын Байкоочу кеңеши менен жолукту</h4>

                      <div class="col-md-12">
                        <div class="row">
                          <div class="slider-for">
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                              <span class="slide-caption">
                                @if($lc == 'kg') "Ала-Тоо" аянты алаканга салгандай
                                @elseif($lc == 'ru') Площадь "Ала-Тоо" как на ладони
                                @endif
                              </span>
                            </div>
                          </div>

                          <div class="slider-nav col-md-12">
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                            </div>
                            <div>
                              <img class="img" src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
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
        </div>
      </section>
    </div>
  </div>

@stop

@section('footerScript')

  <script>
    function getVote(int) {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          document.getElementById("poll").innerHTML=xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET","{{ asset('poll_vote.php') }}?vote="+int,true);
      xmlhttp.send();
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
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      centerMode: true,
      focusOnSelect: true,
      variableWidth: true
    });
  </script>

@endsection