@extends('Front::channel.madaniyat.default')
@section('title', trans('radiopages.Homepage'))
@section('styles')
@endsection
@section('content')
<body class="madaniyat">
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
               <img src="{{ asset('images/channels/madaniyat_white_notext.png')}}">
               <h4>Маданият</h4>
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
                  <a class="active"  href="{{ route('madaniyat.home') }}">
                     <img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span>
                     <h4>Маданият</h4>
                  </a>
               </li>
               <li class="sitemenu" id="site-channel1">
                  <a href="{{ route('balastan.home') }}">
                     <img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span>
                     <h4>Баластан</h4>
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
   </div>
   <div class="container ">
      <div class="row fixedheader">
         <nav class="navbar">
            <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                  <a class="navbar-brand" href="{{ route('madaniyat.home') }}"> <i class="fa fa-home"></i>{{ trans('radiopages.Home') }}</a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                     <li><a href="{{ route('madaniyat.about') }}"></i>{{ trans('radiopages.Mabout') }}</a></li>
                     <li class="dropdown">
                        <a href="{{ route('madaniyat.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i>{{ trans('radiopages.Korsotuu') }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="#"><i class="fa fa-minus"></i>Тоолуктардын ток-шоусу</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Улутман</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Кыз-жигит. Сармерден</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Өмүр сызыгы - Линия жизни</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Улуу мурас</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Сүрөттөр сүйлөйт</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Доор инсаны: Алай ханышасы <br>Доор инсаны: Алымбек датка </a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Салт-санат</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>Өкүт</a></li>
                           <li><a href="#"><i class="fa fa-minus"></i>ТВнын  казынасынан</a></li>
                        </ul>
                     </li>
                     <li><a href="{{ route('madaniyat.allphotos') }}"><i class="fa fa-picture-o"></i>{{ trans('radiopages.Photos') }}</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right logo-block">
                     <ul class="soc socmuz">    
                        <li class="fb"><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="ok"><a href="#" title="Odnoklassniki"><i class="fa fa-odnoklassniki"></i></a></li>
                        <li class="yt"><a href="#" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                        <li class="in"><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                     </ul>
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
                     <div class="clangs">
                        <ul>
                           <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                           <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                        </ul>
                     </div>
                     <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                     <i class="fa fa-dot-circle-o"></i>
                     {{ trans('radiopages.Live') }}
                     </button>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </div>
   </div>
   <!-- Main slider -->
   <div class="container" style="margin-top:10px;">
      <div class="row">
         <section class="content clearfix">
            <div class="col-md-12" style="padding:0px;">
               <div class="panel panel-default mvideo">
                  <div class="panel-heading madaniyatcolor">
                     <h3 class="panel-title"><span>{{ trans('radiopages.NewKorsotuu') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 panelVideo">
                        <div class="row">
                           <div class="col-md-3 peredacha">
                              <div class="first">
                                 <div class="img">
                                    <a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt="" title=""></a>
                                    <div class="views"><i class="fa fa-eye"></i> 10 099 </div>
                                    <div class="time">4:52</div>
                                    <a class="play" href=""></a>
                                       <div class="text">
                                          <div class="date">11.11.15</div>
                                          <a href="#">Адыгейский сор из избы. Самые драматичные моменты</a>
                                       </div>
                                 </div>

                              </div>
                           </div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                           <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>       
                        </div>
                     </div>
                  </div>
               </div> 
            </div>  
         </section>
      </div>      
   </div>
   <div class="container" style="margin-top:30px;">
      <div class="row">
         <section class="content clearfix">
            <div class="col-md-12" style="margin-top: 15px;">
               <div class="row videostyle">
                  <div class="panel panel-default">
                     <div class="panel-heading madaniyatcolor madaniyatfix">
                        <h3 class="panel-title"><span>{{ trans('radiopages.TopKorsotuu') }}</span></h3>
                     </div>
                     <div class="panel-body">
                        <div class="col-md-12 videofix">
                           <div class="row" style="margin:-11px;">  
                              <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                              <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                              <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
                              <div class="col-md-3 peredacha"><a href="#"><img src="{{asset ('images/channels/madaniyat.png') }}" alt=""/></a></div>
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
   @section('footerscript2')
   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
   <script src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>


   <!-- Fixed Sticky header -->
   <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>   
   <!-- Fixed Sticky header -->
   @stop
