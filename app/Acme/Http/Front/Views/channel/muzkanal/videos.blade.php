<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Все клипы</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
        <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/gallery/component.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
        <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>

        <script src="{{ asset('js/gallery/modernizr.custom.js') }}"></script>        

    </head>
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
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/muz_white_notext.png')}}"><h4>Музыка</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="#"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="#"><img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span><h4>Музыка</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="#"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>

                        <li class="sitemenu" id="site-channel1">
                            <a href="#"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span><h4>Маданият</h4></a></li>

                    </ul>  
                </div><!-- /.navbar-collapse -->
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
                                    <a class="navbar-brand" href="{{ route('muzkanal.home') }}"> <i class="fa fa-home"></i>Башкы</a>
                                </div>



                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                                           
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>О канале <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('muzkanal.about') }}"><i class="fa fa-television"></i>О телеканале</a></li>
                                                <li><a href="{{ route('muzkanal.contacts') }}"><i class="fa fa-envelope-o"></i>Контакты</a></li>                                                
                                            </ul>
                                        </li>  
                                        <li>
                                            <a href="{{ route('muzkanal.hitparad') }}"><i class="fa fa-microphone"></i>Хит-Парад <!-- <span class="caret"></span> --></a>

                                        </li>
                                        <li><a href="{{ route('muzkanal.photos') }}"><i class="fa fa-picture-o"></i>Фото</a></li>
                                        <li><a href="{{ route('muzkanal.videos') }}"><i class="fa fa-youtube-play"></i>Клипы</a></li>
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
                                        <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                                            <i class="fa fa-dot-circle-o"></i>
                                            түз эфир
                                        </button>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>

                </div>
            </div>
        </div>

        <!--     <a href="#" class="col-md-12 hidden-xs text-center ads">
                <img src="images/ads_1.jpg" alt=""/>
            </a> -->
        <!-- Main slider -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row topvideos videostyle">
                        <div class="panel panel-default panel-carousel gallery">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Топ просматриваемых</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 videofix">
                                    <div class="carousel-slick">
                                        <div class="col-md-4 col-xs-12">
                                            <a href="#">
                                                <img src="https://pp.vk.me/c411523/v411523588/80c5/frGFAOC5RpE.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Бегиш жана Баястан</li>
                                                        <li class="item-song">Айтчы, айтпайсыңбы эми</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;235123</div>
                                        </div>
                                        <div class="col-md-4 col-xs-12"><a href="#"><img src="http://i.ytimg.com/vi/Kwc5i5qD88o/maxresdefault.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Атабеков Мирбек</li>
                                                        <li class="item-song">Мөлмөлүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="isnew">Жаңы!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4 col-xs-12"><a href="#"><img src="http://data.vb.kg/image/big/2012-11-01_03-22-47_527900.jpg" alt="Калыков Гүлжигит" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Калыков Гүлжигит</li>
                                                        <li class="item-song">Жамгыр төктү</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2014-10/1413603938_screenshot_81.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Анжелика</li>
                                                        <li class="item-song">Менин сүйүүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2015-02/1424795870_screenshot_2.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Арсен</li>
                                                        <li class="item-song">Тагдырым сага жазганда</li>
                                                    </a>
                                                </ul>

                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://data.vb.kg/kyrgyz/image/original/2015-03-12_12-25-35_386407_w.jpg" alt=""/></a>  <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Нурзат Садыкова</li>
                                                        <li class="item-song">Балалык</li>
                                                    </a>
                                                </ul>
                                            </div>

                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://i.ytimg.com/vi/VR32pj_ulW8/maxresdefault.jpg" alt=""/></a> 
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">НОН СТОП дуети</li>
                                                        <li class="item-song">Кыздар ай, балдар ай</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://img.youtube.com/vi/_oPnqszMoHM/mqdefault.jpg" alt=""/></a>  
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Борбиев Бек</li>
                                                        <li class="item-song">Тамчы шүүдүрүм</li>
                                                    </a>
                                                </ul>
                                            </div><div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>

                                    </div>
                                    <div class="carousel-slick videosfix">

                                        <div class="col-md-4"><a href="#"><img src="http://data.vb.kg/kyrgyz/image/original/2015-03-12_12-25-35_386407_w.jpg" alt=""/></a> <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Нурзат Садыкова</li>
                                                        <li class="item-song">Балалык</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://i.ytimg.com/vi/VR32pj_ulW8/maxresdefault.jpg" alt=""/></a> 
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">НОН СТОП дуети</li>
                                                        <li class="item-song">Кыздар ай, балдар ай</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://img.youtube.com/vi/_oPnqszMoHM/mqdefault.jpg" alt=""/></a>  
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Борбиев Бек</li>
                                                        <li class="item-song">Тамчы шүүдүрүм</li>
                                                    </a>
                                                </ul>
                                            </div><div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#">
                                                <img src="https://pp.vk.me/c411523/v411523588/80c5/frGFAOC5RpE.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Бегиш жана Баястан</li>
                                                        <li class="item-song">Айтчы, айтпайсыңбы эми</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://i.ytimg.com/vi/Kwc5i5qD88o/maxresdefault.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Атабеков Мирбек</li>
                                                        <li class="item-song">Мөлмөлүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="isnew">Жаңы!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://data.vb.kg/image/big/2012-11-01_03-22-47_527900.jpg" alt="Калыков Гүлжигит" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Калыков Гүлжигит</li>
                                                        <li class="item-song">Жамгыр төктү</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2014-10/1413603938_screenshot_81.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Анжелика</li>
                                                        <li class="item-song">Менин сүйүүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2015-02/1424795870_screenshot_2.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Арсен</li>
                                                        <li class="item-song">Тагдырым сага жазганда</li>
                                                    </a>
                                                </ul>

                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>

                                    </div>
                                    <footer>
                                        <a href="#">
                                            <span>Все видео <i class="fa fa-arrow-circle-right"></i></span>
                                        </a>
                                    </footer>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row topvideos videostyle">
                        <div class="panel panel-default panel-carousel gallery">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Новые клипы</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 videofix">
                                    <div class="carousel-slick">
                                        <div class="col-md-4">
                                            <a href="#">
                                                <img src="https://pp.vk.me/c411523/v411523588/80c5/frGFAOC5RpE.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Бегиш жана Баястан</li>
                                                        <li class="item-song">Айтчы, айтпайсыңбы эми</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://i.ytimg.com/vi/Kwc5i5qD88o/maxresdefault.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Атабеков Мирбек</li>
                                                        <li class="item-song">Мөлмөлүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="isnew">Жаңы!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://data.vb.kg/image/big/2012-11-01_03-22-47_527900.jpg" alt="Калыков Гүлжигит" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Калыков Гүлжигит</li>
                                                        <li class="item-song">Жамгыр төктү</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2014-10/1413603938_screenshot_81.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Анжелика</li>
                                                        <li class="item-song">Менин сүйүүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2015-02/1424795870_screenshot_2.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Арсен</li>
                                                        <li class="item-song">Тагдырым сага жазганда</li>
                                                    </a>
                                                </ul>

                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://data.vb.kg/kyrgyz/image/original/2015-03-12_12-25-35_386407_w.jpg" alt=""/></a>  <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Нурзат Садыкова</li>
                                                        <li class="item-song">Балалык</li>
                                                    </a>
                                                </ul>
                                            </div>

                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://i.ytimg.com/vi/VR32pj_ulW8/maxresdefault.jpg" alt=""/></a> 
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">НОН СТОП дуети</li>
                                                        <li class="item-song">Кыздар ай, балдар ай</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://img.youtube.com/vi/_oPnqszMoHM/mqdefault.jpg" alt=""/></a>  
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Борбиев Бек</li>
                                                        <li class="item-song">Тамчы шүүдүрүм</li>
                                                    </a>
                                                </ul>
                                            </div><div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>

                                    </div>
                                    <div class="carousel-slick videosfix">

                                        <div class="col-md-4"><a href="#"><img src="http://data.vb.kg/kyrgyz/image/original/2015-03-12_12-25-35_386407_w.jpg" alt=""/></a> <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Нурзат Садыкова</li>
                                                        <li class="item-song">Балалык</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://i.ytimg.com/vi/VR32pj_ulW8/maxresdefault.jpg" alt=""/></a> 
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">НОН СТОП дуети</li>
                                                        <li class="item-song">Кыздар ай, балдар ай</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://img.youtube.com/vi/_oPnqszMoHM/mqdefault.jpg" alt=""/></a>  
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Борбиев Бек</li>
                                                        <li class="item-song">Тамчы шүүдүрүм</li>
                                                    </a>
                                                </ul>
                                            </div><div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#">
                                                <img src="https://pp.vk.me/c411523/v411523588/80c5/frGFAOC5RpE.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Бегиш жана Баястан</li>
                                                        <li class="item-song">Айтчы, айтпайсыңбы эми</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://i.ytimg.com/vi/Kwc5i5qD88o/maxresdefault.jpg" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Атабеков Мирбек</li>
                                                        <li class="item-song">Мөлмөлүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="isnew">Жаңы!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://data.vb.kg/image/big/2012-11-01_03-22-47_527900.jpg" alt="Калыков Гүлжигит" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Калыков Гүлжигит</li>
                                                        <li class="item-song">Жамгыр төктү</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2014-10/1413603938_screenshot_81.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Анжелика</li>
                                                        <li class="item-song">Менин сүйүүм</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>
                                        <div class="col-md-4"><a href="#"><img src="http://tumar.fm/uploads/posts/2015-02/1424795870_screenshot_2.png" alt=""/></a>
                                            <div class="item-desc">
                                                <ul><a href="#">
                                                        <li class="item-artist">Арсен</li>
                                                        <li class="item-song">Тагдырым сага жазганда</li>
                                                    </a>
                                                </ul>

                                            </div>
                                            <div class="ishit">Хит!</div>
                                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                        </div>

                                    </div>
                                    <footer>
                                        <a href="#">
                                            <span>Все видео <i class="fa fa-arrow-circle-right"></i></span>
                                        </a>
                                    </footer>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <ul>
                                        <li><a href="#">Башкы бет</a></li>
                                        <li><a href="#">КТРК</a></li>
                                        <li><a href="#">Видеопортал</a></li>
                                        <li><a href="#">Телепрограмма</a></li>
                                        <li><a href="#">Байкоочу кеңеш</a></li>
                                        <li><a href="#">Редакциялык кеңешчи</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-12 copy"><i class="fa fa-copyright"></i> 2015 Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 

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


        <script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.roundabout.js') }}"></script>

        <!-- Fixed Sticky header -->
        <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>   
        <!-- Fixed Sticky header -->

        <!-- Programm title Anima -->
        <script src="{{ asset('js/audio/jquery.newsTicker.js') }}"></script>
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


        <script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
        <script>jwplayer.key = "tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>

        <script type="text/javascript">

            var playerInstance = jwplayer("player");

            //    $('#playerPlay').click(function(){
            //        playerInstance.play();
            //    });

            playerInstance.setup({
                playlist: [{
                        image: "{{ asset('images/channels/muztv.png') }}",
                        sources: [{
                                file: "rtmp://212.112.96.233:1936/live/ktrk.stream"
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

    </body>
</html>
