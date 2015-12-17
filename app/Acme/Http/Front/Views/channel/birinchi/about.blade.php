@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")

@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">

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
                    <li><a href="{{ route('kyrgyzradio.home') }}">Кыргыз Радиосу</a></li>
                    <li><a href="{{ route('minkiyal.home') }}">Миң Кыял FM</a></li>
                    <li><a href="{{ route('dostuk.home') }}">Достук</a></li>
                    <li></li>
                </ul>

            </nav>
        </div>
    </div>
<div class="container-fluid cffix">
   <div class="col-md-12 topheader">
      <div class="container onepadding">
        <div class="language">
            <ul>
                <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
            </ul>
        </div>
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
               <li>{{ trans('radiopages.Issyk') }} 102.4</li>
               <li>Нарын 100.5</li>
               <li>Ош 100.7</li>
               <li>Баткен 104.2</li>
               <li>Жалал-Абад 104.7</li>
               <li>Талас 102.0</li>
            </ul>
            <ul class="nav navbar-nav oneline">
               <li><a class="time" href="#"><time>11:15</time></a></li>
               <li class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>{{ trans('radiopages.Live') }}</span></button></a></li>
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
                  <a class="navbar-brand" href="{{ route('birinchi.home') }}">{{ trans('radiopages.Home') }}</a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav onenavbar">
                     <li><a class="active" href="{{ route('birinchi.about') }}">{{ trans('radiopages.About') }}</a></li>
                     <li class="dropdown">
                        <a href="{{ route('birinchi.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('radiopages.Peredachi') }} <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Багыт</a></li>
                           <li><a href="#">Инсанат</a></li>
                           <li><a href="#">Кыргызстан</a></li>
                           <li><a href="#">Радиокүзөт</a></li>
                           <li><a href="#">Күндүн темасы</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="{{ route('birinchi.broadcastsprogramm') }}">
                           {{ trans('radiopages.Prperedach') }}
                        </a>
                     </li>
                     <li><a href="{{ route('birinchi.photos') }}"> {{ trans('radiopages.Photos') }}</a></li>
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
            <div class="panel panel-default onenews">                    
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('radiopages.About') }}</span></h3>
              </div>

              <div class="panel-body aboutnumber">
                <p>{{ trans('radiopages.AboutText1') }} </p>
                <p>{{ trans('radiopages.AboutText2') }}</p>    
                <p>{{ trans('radiopages.AboutText3') }}</p>    
                <p>{{ trans('radiopages.AboutText4') }}</p>    
                <p><h3 class="text-center">{{ trans('radiopages.AboutText5') }}</h3></p>
                <p>{{ trans('radiopages.AboutText6') }}</p>
                <p>{{ trans('radiopages.AboutText7') }}</p>
                <p>{{ trans('radiopages.AboutText8') }}</p>  
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
        

@stop