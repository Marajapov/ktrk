@extends('Front::layouts.default')
@section('title', trans('site.BaikoochuKeneshFull').' | КТРК')
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
                      <h3 class="panel-title"><span>{{ trans('site.Top news') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      {{--@include('Front::ns.lastPosts')--}}

                      <div class="col-md-5 first-item">
                        
                        <div class="row">

                            <a href="#" class="thumb">
                              <img src="{{ asset('images/11449585369.jpg') }}" alt=""/>
                            </a>
                            <h2>
                              <div class="extra">
                                <span class="e-datetime">18 Нояб , 12:22</span>
                                <span class="e-views"><i class="fa fa-eye"></i>17</span>
                              </div>
                              <a href="#">Атамбаев Кыргызстанда “кол тийбес” аткаминерлер жок экенин айтты</a>
                            </h2>

                        </div>
                        
                      </div>
                      <div class="col-md-7">
                        @include('Front::ns.lastPosts')
                      </div>

                      <footer>
                        <a href="{{ route('front.general') }}">
                          <span>{{ trans('site.FrontPostAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                      </footer>

                    </div>

                    <div class="panel-heading second-panel-heading">

                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshGallery') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body gallery">

                      <div class="carousel-ns">
                        <div class="col-md-4"><a href="#"><img src="{{ asset('images/gallery/001.jpg') }}" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                        <div class="col-md-4"><a href="#"><img src="{{ asset('images/gallery/001.jpg') }}" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                        <div class="col-md-4"><a href="#"><img src="{{ asset('images/gallery/001.jpg') }}" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                        <div class="col-md-4"><a href="#"><img src="{{ asset('images/gallery/001.jpg') }}" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                        <div class="col-md-4"><a href="#"><img src="{{ asset('images/gallery/001.jpg') }}" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                      </div>

                      <footer>
                        <a href="{{ route('front.general') }}">
                          <span>{{ trans('site.FrontGalleryAll') }} <i class="fa fa-arrow-circle-right"></i></span>
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

@endsection