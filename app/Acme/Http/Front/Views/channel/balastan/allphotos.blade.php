@extends('Front::channel.balastan.default')
@section('title', "Vertex")
@section('styles')
@endsection
@section('content')
  <body class="balastan" id="balastan">
  <!--BEGIN MAIN HEADER MENU for all channels  -->
  <div class="switch">
    <nav class="navbar">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
          <span class="sr-only">Меню</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/channels/balastan_white_notext.png')}}">
          <h4>Баластан</h4>
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav channel_switch">
          <li class="sitemenu" id="site-channel1">
            <a href="{{ route('front.home') }}">
              <img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span>
              <h4>КТРК</h4>
            </a>
          </li>
          <li class="sitemenu" id="site-channel1">
            <a href="{{ route('muzkanal.home') }}">
              <img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span>
              <h4>Музыка</h4>
            </a>
          </li>
          <li class="sitemenu" id="site-channel1">
            <a href="{{ route('madaniyat.home') }}">
              <img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span>
              <h4>Маданият</h4>
            </a>
          </li>
          <li class="sitemenu" id="site-channel1">
            <a class="active" href="{{ route('balastan.home') }}">
              <img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span>
              <h4>Баластан</h4>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </div>
  <!--END -->
  <div class="container-fluid kidsmainbg">
    <div class="container">
      <div class="row clearfix">
        <div class="bl-logo">
          <a href="{{ route('balastan.home') }}">
            <img src="{{ asset('images/channels/balastan_white_notext.png') }}" alt="Balastan Logo"/>
          </a>
        </div>
        <ul class="kidstopheader">
          <li>
            <a href="{{ route('balastan.about') }}">
              <i class="fa fa-info-circle i2"></i>
              <span>{{ trans('radiopages.BAbout') }}</span>
            </a>
          </li>
          <li>
            <a href="{{ route('balastan.world') }}">
              <i class="fa fa-star i3"></i>
              <span>{{ trans('radiopages.Bworld') }}</span>
            </a>
          </li>
          <li>
            <a href="{{ route('balastan.video') }}">
              <i class="fa fa-play i4 "></i>
              <span>Видео</span>
            </a>
          </li>
          <li>
            <a href="{{ route('balastan.allphotos') }}">
              <i class="fa fa-picture-o i5"></i>
              <span>{{ trans('radiopages.Photos') }}</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-search i6"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- BEGIN Photogalleries -->
  <div class="container-fluid kidsgallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h3><span>Фотогалерея</span></h3>
          </div>
        </div>
        @if($photoGalleries != null)
          @foreach($photoGalleries as $photoGallery)
            <div class="col-md-4">
              <a href="{{ route('balastan.photos', $photoGallery) }}">
                <img class="cover" src="{{ asset($photoGallery->status) }}" alt=""/>
                <h3 class="name">{{ $photoGallery->getName() }}</h3>
                <div class="extra" style="position: absolute; top: 7px; left: 18px;color: #fff;">
                  <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                </div>
              </a>
            </div>
          @endforeach
        @endif
    </div>
  </div>
  <!-- END Photogalleries -->

  <div class="row" style="margin-top: 50px;">
    <div class="col-md-12">
      <div class="panel" style="background:none">

              <nav class="muzpaginate">
                <ul class="pagination">
                  <li>
                    <a href="{{ route('balastan.allphotos', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                  </li>
                  <li>
                    <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                  </li>
                  <li>
                    <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                  </li>
                  @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                    <li>
                      <a href="{{ route('balastan.allphotos', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">{{ $j++ }}</a>
                    </li>
                  @endfor
                  <li>
                    <a href="{{ route('balastan.allphotos', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @stop
  @section('footerscript2')
    <script>
      if ($(window).width() > 768) {
        $('.kids-slide').slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1
        });
      }

      if ($(window).width() < 768) {
        $('.kids-slide').slick({
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 1
        });
      }

    </script>
    <script>

      //    var current = $('.shows-carousel').slick('slickCurrentSlide');

      $('.shows-carousel').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        speed: 1000
      });
    </script>
@stop
