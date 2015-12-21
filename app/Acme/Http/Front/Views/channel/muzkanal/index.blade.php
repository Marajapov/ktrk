@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Homepage'))
@section('styles')
<link rel="stylesheet" href="css/audio/muzslider.css">
@endsection
@section('content')
<body class="music">
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
               <img src="{{ asset('images/channels/muz_white_notext.png')}}">
               <h4>Музыка</h4>
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
                  <a class="active" href="{{ route('muzkanal.home') }}">
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
   <div class="container main-header">
      <div class="row">
         <div class="col-md-12">
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
                        <a class="navbar-brand" href="{{ route('muzkanal.home') }}"> <i class="fa fa-home"></i>{{ trans('radiopages.Home') }}</a>
                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           <li><a href="{{ route('muzkanal.about') }}"></i>{{ trans('radiopages.Mabout') }}</a></li>
                           <li>
                              <a href="{{ route('muzkanal.hitparad') }}">
                                 <i class="fa fa-microphone"></i>Хит-Парад <!-- <span class="caret"></span> -->
                              </a>
                           </li>
                           <li><a href="{{ route('muzkanal.photos') }}"><i class="fa fa-picture-o"></i>{{ trans('radiopages.Photos') }}</a></li>
                           <li><a href="{{ route('muzkanal.videos') }}"><i class="fa fa-youtube-play"></i>{{ trans('radiopages.Clips') }}</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right logo-block">
                           <ul class="soc socmuz">
                              <li class="tw"><a href="#" title="Twitter"><i class="fa fa-twitter"></i> </a>  </li>
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
                           <!--                                         <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                              <i class="fa fa-dot-circle-o"></i>
                              түз эфир
                              </button> -->
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- /.container-fluid -->
               </nav>
            </div>
         </div>
      </div>
   </div>

   <!-- Main slider -->
   <div class="container">
      <div class="row">
         <div class="col-sm-12 dkp-slideshow dkp-moving-right">
            <div id="dkp-slideshow-right"></div>
            <div id="dkp-slideshow-left"></div>
            <div class="row dkp-slide">
               <a href="#">
                  <div class="col-sm-12 dkp-anonce dkp-anonce-big" style="background-image: url(images/channels/muzkanal/12.png);">
                     <div class="dkp-anonce-time">
                        <span>21:00</span>
                     </div>
                     <div class="dkp-anonce-title">
                        Анжелика - Кызыма
                     </div>
                     <div class="dkp-anonce-when">
                        <span>
                        <span>
                        ЭКЛЮЗИВ
                        </span>
                        </span>
                     </div>
                  </div>
               </a>
            </div>
            <div class="row dkp-slide slide-left">
               <a href="#">
                  <div class="col-sm-12 dkp-anonce dkp-anonce-big" style="background-image: url(images/channels/muzkanal/14.jpg);">
                     <div class="dkp-anonce-time">
                        <span>21:30</span>
                     </div>
                     <div class="dkp-anonce-title">
                        Хит-Парад ТОП-10
                     </div>
                     <div class="dkp-anonce-when">
                        <span>
                        <span>
                        Ар Ишемби
                        </span>
                        </span>
                     </div>
                  </div>
               </a>
            </div>
            <div class="row dkp-slide slide-left">
               <a href="#">
                  <div class="col-sm-12 dkp-anonce dkp-anonce-big" style="background-image: url(images/channels/muzkanal/soon.jpg);">
                     <div class="dkp-anonce-time">
                        <span>18:30</span>
                     </div>
                     <div class="dkp-anonce-title">
                        Жаңы программа. 
                     </div>
                     <div class="dkp-anonce-when">
                        <span>
                        <span>
                        Күн сайын 
                        </span>
                        </span>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
      <div class="row dkp-big-3now ">
         <div class="col-xs-4 rowfix" >
            <a href="#" data-toggle="modal" data-target="#myModal" class="dkp-anonce dkp-anonce-small  dkp-border" style="background-image: url(images/channels/muzkanal/mirbek.jpg);" data-id="12269">
               <div class="dkp-3now-item-wrapper">
                  <div class="dkp-3now-item-time">
                     <span>
                     <span>18:00</span>
                     </span>
                  </div>
                  <div class="dkp-3now-item-title">
                     <span>Булбулум</span> Мирбек Атабеков
                  </div>
               </div>
            </a>
            <!-- Анонс Модал-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Анонс</h4>
                     </div>
                     <div class="modal-body">
                        Телеберүү же дагы бир нерсе боюнча маалымат
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('radiopages.Close') }}</button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-4 rowfix" >
            <a href="#" data-toggle="modal" data-target="#myModal" class="dkp-anonce dkp-anonce-small  dkp-border" style="background-image: url(images/channels/muzkanal/kalykov.jpg);" data-id="12269">
               <div class="dkp-3now-item-wrapper">
                  <div class="dkp-3now-item-time">
                     <span>
                     <span>20:00</span>
                     </span>
                  </div>
                  <div class="dkp-3now-item-title">
                     <span>Интервью</span> Гүлжигит Калыков
                  </div>
               </div>
            </a>
            <!-- Анонс Модал-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Анонс</h4>
                     </div>
                     <div class="modal-body">
                        Телеберүү же дагы бир нерсе боюнча маалымат
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('radiopages.Close') }}</button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-4 rowfix">
            <a href="#" data-toggle="modal" data-target="#myModal" class="dkp-anonce dkp-anonce-small  dkp-border" style="background-image: url(images/channels/muzkanal/minura.jpg);" data-id="14540">
               <div class="dkp-3now-item-wrapper">
                  <div class="dkp-3now-item-time">
                     <span>
                     <span>21:30</span>
                     </span>
                  </div>
                  <div class="dkp-3now-item-title">
                     <span>Мен кат жаздым</span>Минюра Рахимжанова
                  </div>
               </div>
            </a>
            <!-- Анонс Модал-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Анонс</h4>
                     </div>
                     <div class="modal-body">
                        Телеберүү же дагы бир нерсе боюнча маалымат
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('radiopages.Close') }}</button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 onairmuz">
            <div class="panel">
               <div class="panel-heading">
                  <h3 class="panel-title"><span> - {{ trans('radiopages.Live') }}- </span></h3>
               </div>
               <div id="player"></div>
            </div>
         </div>
         <div class="col-md-4 promo">
            <div class="panel panel-default promorolik">
               <div class="panel-heading">
                  <h3 class="panel-title"><span> - Промо - </span></h3>
               </div>
               <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nA2tGgAzQ9E" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="panel panel-default programtitle">
               <div class="panel-heading">
                  <h3 class="panel-title"><span> - {{ trans('radiopages.KorsotuuList') }} - </span></h3>
               </div>
               <div class="centered">
                  <div id="nt-example1-container">
                     <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
                     <i class="fa fa-arrow-down" id="nt-example1-next" style="right:25px;"></i>
                     <ul id="nt-example1">
                        <li>
                           <span>13:00</span>
                           <h4>Хит-Парад ТОП-10</h4>
                        </li>
                        <li>
                           <span>14:00</span>
                           <h4>Ырдайлы кыргыз ырларын</h4>
                        </li>
                        <li>
                           <span>15:00</span>
                           <h4>Орто Азия хиттери.</h4>
                        </li>
                        <li>
                           <span>16:00</span>
                           <h4>Айылдын таланттары конокто</h4>
                        </li>
                        <li>
                           <span>17:00</span>
                           <h4>Атабековдон кем эмес</h4>
                        </li>
                        <li>
                           <span>18:00</span>
                           <h4>90-жылдардын дискотекасы</h4>
                        </li>
                        <li>
                           <span>19:00</span>
                           <h4>Кайдасың менин 18 жашым</h4>
                        </li>
                        <li>
                           <span>20:00</span>
                           <h4>Хит-Парад ТОП-10</h4>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-8">
            <div class="row newvideos">
               <div class="panel panel-default panel-carousel gallery">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('radiopages.NewClips') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12">
                        <div class="carousel-slick1">
                        @if($MediaPop1)
                        @foreach($MediaPop1 as $pop1)
                           <div class="col-md-4 col-xs-12">
                              <a href="{{ route('muzkanal.video', $pop1)}}">
                              <img src="http://img.youtube.com/vi/{{ $pop1->getUrl()}}/mqdefault.jpg" alt=""/></a>
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $pop1)}}">
                                       <li class="item-artist">{{ $pop1->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              <div class="views"><i class="fa fa-eye"></i>{{ $pop1->getViewed() }}</div>
                           </div>
                           @endforeach
                        @endif
                        </div>

                        <div class="carousel-slick1 videosfix">
                        @if($MediaPop2)
                        @foreach($MediaPop2 as $pop2)
                           <div class="col-md-4">
                              <a href="{{ route('muzkanal.video', $pop2)}}"><img src="http://img.youtube.com/vi/{{ $pop2->getUrl()}}/mqdefault.jpg" alt=""/></a> 
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $pop2)}}">
                                       <li class="item-artist">{{ $pop2->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              <div class="views"><i class="fa fa-eye"></i>{{ $pop2->getViewed() }}</div>
                           </div>
                           @endforeach
                        @endif
                        </div>
                        <div class="carousel-slick1 videosfix">
                        @if($MediaPop3)
                        @foreach($MediaPop3 as $pop3)                        
                           <div class="col-md-4">
                              <a href="{{ route('muzkanal.video', $pop3)}}"><img src="http://img.youtube.com/vi/{{ $pop3->getUrl()}}/mqdefault.jpg" alt=""/></a> 
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $pop3)}}">
                                       <li class="item-artist">{{ $pop3->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              <div class="views"><i class="fa fa-eye"></i>{{ $pop3->getViewed() }}</div>
                           </div>
                           @endforeach
                        @endif                                 
                        </div>
                        <footer>
                           <a href="{{ route('muzkanal.videos') }}">
                           <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                           </a>
                        </footer>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 hittop">
            <div class="panel panel-default hit-parad">
               <div class="panel-heading">
                  <h3 class="panel-title"><span> - Хит парад - </span></h3>
               </div>
               <div class="panel-body">
                  <ul class="list-group" >
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/1.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Атабеков Мирбек</span>
                        <p> <small>Мөлмөлүм</small></p>
                     </a>
                     <span class="numeric">1</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/2.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Борбиев Бек</span>
                        <p> <small>Шамал</small></p>
                     </a>
                     <span class="numeric">2</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/3.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Бегиш жана Баястан </span>
                        <p> <small>Айтчы</small></p>
                     </a>
                     <span class="numeric">3</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/4.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Примбердиев Кайрат</span>
                        <p> <small>Поезддеги Махабат</small></p>
                     </a>
                     <span class="numeric">4</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Акулова Динара</span>
                        <p> <small>Ай кызым</small></p>
                     </a>
                     <span class="numeric">5</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Акулова Динара</span>
                        <p> <small>Ай кызым</small></p>
                     </a>
                     <span class="numeric">6</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Акулова Динара</span>
                        <p> <small>Ай кызым</small></p>
                     </a>
                     <span class="numeric">7</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Акулова Динара</span>
                        <p> <small>Ай кызым</small></p>
                     </a>
                     <span class="numeric">8</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Акулова Динара</span>
                        <p> <small>Ай кызым</small></p>
                     </a>
                     <span class="numeric">9</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
                  <li class="list-group-item clearfix">
                     <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                     <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                     <a class="clear" href="#">
                        <span>Акулова Динара</span>
                        <p> <small>Ай кызым</small></p>
                     </a>
                     <span class="numeric">10</span>
                     <div class="vote">
                        <div class="like" data-likes="10"><i class="fa fa-thumbs-up"></i></div>
                     </div>
                  </li>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="row topvideos">
               <div class="panel panel-default panel-carousel gallery">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12">
                        <div class="carousel-slick">
                           @if($MediaTop1)
                           @foreach($MediaTop1 as $top1)
                           <div class="col-md-4">
                              <a href="{{ route('muzkanal.video', $top1)}}">
                              <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/mqdefault.jpg" alt=""/></a>
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $top1)}}">
                                       <li class="item-artist">{{ $top1->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              <div class="views"><i class="fa fa-eye"></i>{{ $top1->getViewed() }}</div>
                           </div>
                           @endforeach
                          @endif                           
                        </div>
                        <div class="carousel-slick videosfix">
                           @if($MediaTop2)
                           @foreach($MediaTop2 as $top2)                        
                           <div class="col-md-4">
                              <a href="{{ route('muzkanal.video', $top2)}}"><img src="http://img.youtube.com/vi/{{ $top2->getUrl() }}/mqdefault.jpg" alt=""/></a> 
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $top2)}}">
                                       <li class="item-artist">{{ $top2->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              <div class="views"><i class="fa fa-eye"></i>{{ $top2->getViewed() }}</div>
                           </div>
                           @endforeach
                          @endif                             
                        </div>
                        <footer>
                           <a href="#">
                           <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                           </a>
                        </footer>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 ">
            <div class="row imgmuz">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span> - {{ trans('radiopages.Photos') }} - </span></h3>
                  </div>
                  <div class="ia-container">
                     <figure>
                        <img src="images/channels/muzkanal/mirbek.jpg" alt="image01" />
                        <input type="radio" name="radio-set" checked="checked"/>
                        <figcaption><a href=""><span>Мирбек Атабеков</span></a></figcaption>
                        <figure>
                           <img src="images/channels/muzkanal/kalykov.jpg" alt="image02" />
                           <input type="radio" name="radio-set" />
                           <figcaption><a href=""><span>Гүлжигит Калыков</span></a></figcaption>
                           <figure>
                              <img src="images/channels/muzkanal/minura.jpg" alt="image03" />
                              <input type="radio" name="radio-set" />
                              <figcaption><a href=""><span>Минюра Рахимжанова</span></a></figcaption>
                              <figure>
                                 <img src="images/channels/muzkanal/top10.jpg" alt="image04" />
                                 <input type="radio" name="radio-set" />
                                 <figcaption><a href=""><span>Хит-Парад</span></a></figcaption>
                                 <figure>
                                    <img src="images/channels/muzkanal/14.jpg" alt="image05" />
                                    <input type="radio" name="radio-set" />
                                    <figcaption><a href=""><span>Хит-Парад</span></a></figcaption>
                                    <figure>
                                       <img src="images/channels/muzkanal/soon.jpg" alt="image06" />
                                       <input type="radio" name="radio-set" />
                                       <figcaption><a href=""><span>Жакында</span></a></figcaption>
                                    </figure>
                                 </figure>
                              </figure>
                           </figure>
                        </figure>
                     </figure>
                  </div>
                  <!-- ia-container -->
               </div>
            </div>
         </div>
      </div>
   </div>
   @stop
   @section('footerscript2')
   <script src="js/jquery-1.11.2.min.js"></script>
   <script src="js/bootstrap.min.js"></script> 
   <script>
      $(document).ready(function () {
          $(".search-toggle").click(function () {
              $(".logo-block").addClass("search-show");
              $(".form-search").addClass("visible");
          });
          $(".close-search").click(function () {
              $(".logo-block").removeClass("search-show");
              $(".form-search").removeClass("visible");
          });
      });
   </script>   
   <script src="js/gallery/imagesloaded.pkgd.min.js"></script>
   <script src="js/gallery/masonry.pkgd.min.js"></script>
   <script src="js/gallery/classie.js"></script>
   <script src="js/gallery/cbpGridGallery.js"></script>
   <script>
      new CBPGridGallery(document.getElementById('grid-gallery'));
   </script>
   <script>
      var serverTZoffset = 360;
   </script>
   <script src="js/lightslider.js"></script>
   <script>
      $(document).ready(function () {
          $("#content-slider").lightSlider({
              loop: true,
              keyPress: true
          });
          $('#image-gallery').lightSlider({
              gallery: true,
              item: 1,
              thumbItem: 9,
              slideMargin: 0,
              speed: 500,
              auto: true,
              loop: true,
              onSliderLoad: function () {
                  $('#image-gallery').removeClass('cS-hidden');
              }
          });
      });
   </script>
   <script src="js/audio/dkp.min.js"></script>
   <script type="text/javascript" src="filter/js/jquery.easing.min.js"></script>
   <script type="text/javascript" src="filter/js/jquery.mixitup.min.js"></script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script type="text/javascript" src="slick/slick.min.js"></script>
   <script type="text/javascript" src="js/jquery.roundabout.js"></script>
   <!-- Fixed Sticky header -->
   <script type ="text/javascript" src ="js/script.js"></script>   
   <!-- Fixed Sticky header -->
   <!-- Programm title Anima -->
   <script src="js/audio/jquery.newsTicker.js"></script>
   <script>
      var nt_title = $('#nt-title').newsTicker({
          row_height: 30,
          max_rows: 1,
          duration: 3000,
          pauseOnHover: 0
      });
      var nt_example1 = $('#nt-example1').newsTicker({
          row_height: 30,
          max_rows: 3,
          duration: 4000,
          prevButton: $('#nt-example1-prev'),
          nextButton: $('#nt-example1-next')
      });
      
      var state = 'stopped';
      var speed;
      var add;
      
   </script>
   <!-- Ptogramm title Anima -->
   <script type="text/javascript">
      $(function () {
      
          var filterList = {
              init: function () {
      
                  // MixItUp plugin
                  // http://mixitup.io
                  $('#portfoliolist').mixitup({
                      showOnLoad: 'all-videos',
                      targetSelector: '.portfolio',
                      filterSelector: '.filter',
                      effects: ['fade'],
                      easing: 'snap',
                      // call the hover effect
                      onMixEnd: filterList.hoverEffect()
                  });
      
              },
              hoverEffect: function () {
      
                  // Simple parallax effect
                  $('#portfoliolist .portfolio').hover(
                          function () {
                              $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                              $(this).find('img').stop().animate({top: -40}, 250, 'easeOutQuad');
                          },
                          function () {
                              $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                              $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                          }
                  );
      
              }
      
          };
          // Run the show!
          filterList.init();
      });
   </script>
   <script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
   <script>jwplayer.key = "tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>
   <script type="text/javascript">
      var playerInstance = jwplayer("player");
      
      //    $('#playerPlay').click(function(){
      //        playerInstance.play();
      //    });
      
      playerInstance.setup({
          autostart: true,
          playlist: [{
                  image: "{{ asset('images/channels/muztv.png') }}",
                  sources: [{
                          file: "http://212.112.97.18:80/live/4002.flv"
                      }]
              }],
          width: "100%",
          height: "100%",
          aspectratio: "16:9",
          primary: "flash",
          skin: {
              name: "five"
          },
          stretching: "exactfit"
      });
   </script>
   <!--Carousel-->
   <script>
      if ($(window).width() > 768) {
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
          $('.carousel-slick1').slick({
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
      if ($(window).width() < 768) {
          $('.carousel-slick1').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
      if ($(window).width() < 768) {
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
   </script>

   @stop