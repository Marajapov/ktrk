@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@stop
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
<div class="birinchiradio">
    <div class="container-fluid metatop">
        <div class="container onepadding">
            <nav class="top-nav">
                <ul>
                    @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
                    @if(count($menu->submenus) > 0)
                    <li>
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($menu->submenus as $submenu)
                            <li><a href="{{ $submenu->getUrl() }}">{{ $submenu->getName() }}</a></li>
                            @endforeach
                        </ul>
                    </li>          
                    @else
                    <li><a href="{{ $menu->getUrl() }}">{{ $menu->getName() }}</a></li>    
                    @endif
                    @endforeach 
                </ul>
                <ul class="topradio pull-right">
                    <li><a href="#">Кыргыз Радиосу</a></li>
                    <li><a href="#">Миң Кыял</a></li>
                    <li></li>
                </ul>


            </nav>
        </div>
    </div>
    <div class="container-fluid cffix">
        <div class="col-md-12 topheader">
            <div class="container onepadding">           
                <div class="col-md-3">
                    <nav>
                        <ul>
                            <li class="sitemenu" id="site-channel1">
                                <a href="{{ route('birinchi.home') }}">
                                    <img class="onelogos" src="{{ asset('images/channels/1-radio-notext.png')}}">
                                    <span>Биринчи радио</span>
                                    <h4>Биринчи ради</h4>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9 oneheader onepadding">
                <ul class="nav navbar-nav chastota">
                    <li>Бишкек 104.1</li>
                    <li>Ыссык-Көл 102.4</li>
                    <li>Нарын 100.5</li>
                    <li>Ош 100.7</li>
                    <li>Баткен 104.2</li>
                    <li>Жалал-Абад 104.7</li>
                    <li>Талас 102.0</li>
                </ul>      
                    <ul class="nav navbar-nav oneline">
                        <li><a class="time" href="#"><time>11:15</time></a></li>
                        <li class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>Прямой эфир</span></button></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right onesoc">
                        <li class="onepost"><a href=""><i class="fa fa-facebook"></i><span>facebook</span></a></li>
                        <li class="onetwit"><a href=""><i class="fa fa-twitter"></i><span>twitter</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="row" style="margin:0px;">
                <nav class="navbar">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header oneheaderone">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                                <span class="sr-only">Меню</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="logo-block search-block">
                                <a class="search-toggle"><i class="fa fa-search"></i></a>
                                <form class="form-search" action="{{ route('front.search') }}" method="get">
                                    <div class="form-group pull-right">
                                        <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                                    </div>
                                    <a class="btn close-search">
                                        <i class="fa fa-close"></i>
                                    </a>
                                    <button class="btn submit-search" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <a class="navbar-brand" href="{{ route('birinchi.home') }}"> Башкы</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav onenavbar">
                                <li><a href="{{ route('birinchi.about') }}">О радио</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('birinchi.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Передачи <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Сереп</a></li>
                                        <li><a href="#">Аймактар үнү</a></li>
                                    </ul>
                                </li>                             
                                <li>
                                    <a href="{{ route('birinchi.broadcastsprogramm') }}">
                                        Программа передач <!-- <span class="caret"></span> -->
                                    </a>
                                </li>
                                <li><a class="active" href="{{ route('birinchi.photos') }}">Фотогалерея</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right logo-block onesearch">
                                <a class="search-toggle"><i class="fa fa-search"></i></a>
                                <form class="form-search" action="{{ route('front.search') }}" method="get">
                                    <div class="form-group pull-right">
                                        <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                                    </div>
                                    <a class="btn close-search">
                                        <i class="fa fa-close"></i>
                                    </a>
                                    <button class="btn submit-search" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
         <div class="top-left-block col-md-12">
            <div class="panel panel-default">
                     

              <div class="panel-heading">
                <h3 class="panel-title"><span>Фотогалерея</span></h3>
              </div>

              <div class="panel-body">

                <div class="col-md-offset-1 col-md-10 col-md-offset-1" >
                  <div class="row">
                    <ul id="imageGallery">
                      <li data-thumb="{{ asset('static/files/rrts/1.jpg') }}" data-src="{{ asset('static/files/rrts/1.jpg') }}">
                        <img class="resizegallery" src="{{ asset('static/files/rrts/1.jpg') }}" />
                      </li>
                      <li data-thumb="{{ asset('static/files/rrts/2.jpg') }}" data-src="{{ asset('static/files/rrts/2.jpg') }}">
                        <img class="resizegallery" src="{{ asset('static/files/rrts/2.jpg') }}" />
                      </li>
                       <li data-thumb="{{ asset('static/files/rrts/3.jpg') }}" data-src="{{ asset('static/files/rrts/3.jpg') }}">
                        <img class="resizegallery" src="{{ asset('static/files/rrts/3.jpg') }}" />
                      </li>
                       <li data-thumb="{{ asset('static/files/rrts/4.jpg') }}" data-src="{{ asset('static/files/rrts/4.jpg') }}">
                        <img class="resizegallery" src="{{ asset('static/files/rrts/4.jpg') }}" />
                      </li>
                       <li data-thumb="{{ asset('static/files/rrts/5.jpg') }}" data-src="{{ asset('static/files/rrts/5.jpg') }}">
                        <img class="resizegallery"src="{{ asset('static/files/rrts/5.jpg') }}" />
                      </li>
                       <li data-thumb="{{ asset('static/files/rrts/6.jpg') }}" data-src="{{ asset('static/files/rrts/6.jpg') }}">
                        <img class="resizegallery"src="{{ asset('static/files/rrts/6.jpg') }}" />
                      </li>
                       <li data-thumb="{{ asset('static/files/rrts/7.jpg') }}" data-src="{{ asset('static/files/rrts/6.jpg') }}">
                        <img class="resizegallery" src="{{ asset('static/files/rrts/7.jpg') }}" />
                      </li>
                       <li data-thumb="{{ asset('static/files/rrts/8.jpg') }}" data-src="{{ asset('static/files/rrts/8.jpg') }}">
                        <img class="resizegallery" src="{{ asset('static/files/rrts/8.jpg') }}" />
                      </li>
                    </ul>
                  </div>
                </div>

              </div>

            </div><!-- end panel default -->
          </div>

        </div>  
 
    </div>
</div>

@stop

@section('footerscript2')

<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
        <script src="{{ asset('js/lightslider.js') }}"></script>
        <script src="{{ asset('js/lightgallery/picturefill.min.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lightgallery.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lg-fullscreen.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lg-thumbnail.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lg-video.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lg-autoplay.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lg-zoom.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lg-hash.js') }}"></script>
        <script src="{{ asset('js/lightgallery/lg-pager.js') }}"></script>
        <script src="{{ asset('jslightgallery/jquery.mousewheel.min.js') }}"></script>

             <script type="text/javascript">
                $(document).ready(function() {
              $('#imageGallery').lightSlider({
                  gallery:true,
                  item:1 ,
                  loop:true,
                  thumbItem:8,
                  slideMargin:0,
                  enableDrag: true,
                  currentPagerPosition:'right',
                  onSliderLoad: function(el) {
                      el.lightGallery({
                          selector: '#imageGallery .lslide'
                      });
                  }   
              });  
            });
        </script>


@stop