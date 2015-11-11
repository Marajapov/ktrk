<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Главная страница</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="filter/css/layout.css">
        <link rel="stylesheet"  href="css/gallery/component.css" />
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/audio/muzslider.css"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
        <link rel="stylesheet"  href="css/lightslider.css"/>

        <script src="js/gallery/modernizr.custom.js"></script>        

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
            <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/swicth/music.png')}}"></a>
            </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav channel_switch">
             <li class="sitemenu" id="site-channel1">
                <a href="#"><img src="{{ asset('images/channels/swicth/ktrk_color.png')}}"><span>КТРК</span></a></li>
             <li class="sitemenu" id="site-channel1">
                <a href="#"><img src="{{ asset('images/channels/swicth/balastan.png')}}"><span>Баластан</span></a></li>
             <li class="sitemenu" id="site-channel1">
                <a class="active" href="#"><img src="{{ asset('images/channels/swicth/music.png')}}" ><span>Музыка</span></a></li>
             <li class="sitemenu" id="site-channel1">
                <a href="#"><img src="{{ asset('images/channels/swicth/madaniat.png')}}"><span>Маданият</span></a></li>
             <li class="sitemenu" id="site-channel1">
                <a href="#"><img src="{{ asset('images/channels/swicth/birirnchi.png')}}"><span>Биринчи Радио</span></a></li>
             <li class="sitemenu" id="site-channel1">
                <a href="#"><img src="{{ asset('images/channels/swicth/baldar.png')}}"><span>Балдар ФМ</span></a></li>
             <li class="sitemenu" id="site-channel1">
                <a href="#"><img src="{{ asset('images/channels/swicth/min-kiyal.png')}}"><span>Миң Кыял ФМ</span></a></li>
             <li class="sitemenu" id="site-channel1">
                <a href="#"><img src="{{ asset('images/channels/swicth/kg-radio.png')}}"><span>Кыргыз Радиосу</span></a></li> 
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
                                    <a class="navbar-brand" href="#"> <i class="fa fa-home"></i>Башкы</a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">     
                                        <li><a href="#"><i class="fa fa-info"></i>О канале</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i>Телепередачи <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Хит парад</a></li>
                                                <li><a href="#">Хит парад 2</a></li>
                                                <li><a href="#">Хит парад 3</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Топ парад</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Парад планет</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-picture-o"></i>Фото</a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i>Клипы</a></li>
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><button class="btn btn-danger btn-live onairtv" style="margin-top:6px; ">
                                                <i class="fa fa-dot-circle-o"></i>
                                                түз эфир
                                            </button> </li>
                                        <form class="navbar-form navbar-left" role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Издөө">
                                            </div>       
                                        </form>
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
                <div class="col-sm-12 dkp-slideshow dkp-moving-right">
                    <div id="dkp-slideshow-right"></div>
                    <div id="dkp-slideshow-left"></div>
                    <div class="row dkp-slide">
                        <div class="col-sm-12 dkp-anonce dkp-anonce-big" style="background-image: url(images/channels/muzkanal/7.jpeg);">
                            <div class="dkp-anonce-time">
                                <span>21:00</span>
                            </div>
                            <div class="dkp-anonce-title">
                                Хит-Парад ТОП-10
                            </div>
                            <div class="dkp-anonce-when">
                                <span>
                                    <span>
                                        ар ЖЕКШЕМБИ
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row dkp-slide slide-left">
                        <div class="col-sm-12 dkp-anonce dkp-anonce-big" style="background-image: url(images/channels/muzkanal/Music.jpg);">
                            <div class="dkp-anonce-time">
                                <span>21:30</span>
                            </div>
                            <div class="dkp-anonce-title">
                                ЭКЛЮЗИВ. Жаңы клиптер. 
                            </div>
                            <div class="dkp-anonce-when">
                                <span>
                                    <span>
                                        Бүгүн
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>                 
                    <div class="row dkp-slide slide-left">
                        <div class="col-sm-12 dkp-anonce dkp-anonce-big" style="background-image: url(images/channels/muzkanal/6.jpg);">
                            <div class="dkp-anonce-time">
                                <span class="dkp-soon">Жакында</span>
                            </div>
                        </div>
                    </div>
                </div>                         
            </div>

            <div class="row dkp-big-3now ">
                <div class="col-xs-4 rowfix">
                    <a type="button" data-toggle="modal" data-target="#myModal" class="dkp-anonce dkp-anonce-small now dkp-border" style="background-image: url(images/channels/muzkanal/6.jpg);" data-id="12056" data-target="#myModal">
                        <div class="dkp-3now-item-wrapper">
                            <div class="dkp-3now-item-time">
                                <span>
                                    <span>Эклюзив</span>
                                </span>
                            </div>
                            <div class="dkp-3now-item-title">
                                <span>Мирбек Атабеков</span> Булбулум
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
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 rowfix" >
                    <a href="#" data-toggle="modal" data-target="#myModal" class="dkp-anonce dkp-anonce-small  dkp-border" style="background-image: url(images/channels/muzkanal/2.jpg);" data-id="12269">
                        <div class="dkp-3now-item-wrapper">
                            <div class="dkp-3now-item-time">
                                <span>
                                    <span>19:55</span>
                                </span>
                            </div>
                            <div class="dkp-3now-item-title">
                                <span>Телеберүү</span> Хит парад
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
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 rowfix">
                    <a href="#" data-toggle="modal" data-target="#myModal" class="dkp-anonce dkp-anonce-small  dkp-border" style="background-image: url(images/channels/muzkanal/3.jpg);" data-id="14540">
                        <div class="dkp-3now-item-wrapper">
                            <div class="dkp-3now-item-time">
                                <span>
                                    <span>21:30</span>
                                </span>
                            </div>
                            <div class="dkp-3now-item-title">
                                <span>Сериал</span> Крёстный
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
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button> 
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
                    <div id="player"></div>
                </div>
                <div class="col-md-4 promo">
                    <div class="panel panel-default promorolik">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span> - Промо - </span></h3>
                        </div>
                        <iframe width="100%" height="85%" src="https://www.youtube.com/embed/nA2tGgAzQ9E" frameborder="0" allowfullscreen></iframe>
                    </div>                    
                    <div class="panel panel-default programtitle">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span> - Программа телепередач - </span></h3>
                        </div>
                        <div class="centered">
                            <div id="nt-example1-container">
                                <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
                                <i class="fa fa-arrow-down" id="nt-example1-next" style="right:25px;"></i>
                                <ul id="nt-example1">
                                    <li><span>13:00</span><h4>Хит-Парад ТОП-10</h4></li>
                                    <li><span>14:00</span><h4>Ырдайлы кыргыз ырларын</h4></li>
                                    <li><span>15:00</span><h4>Орто Азия хиттери.</h4></li>
                                    <li><span>16:00</span><h4>Айылдын таланттары конокто</h4></li>
                                    <li><span>17:00</span><h4>Атабековдон кем эмес</h4></li>
                                    <li><span>18:00</span><h4>90-жылдардын дискотекасы</h4></li>
                                    <li><span>19:00</span><h4>Кайдасың менин 18 жашым</h4></li>
                                    <li><span>20:00</span><h4>Хит-Парад ТОП-10</h4></li>
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
                                <h3 class="panel-title"><span>Новые клипы</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="carousel-slick1">
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
                                    <div class="carousel-slick1 videosfix">

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
                                    <div class="carousel-slick1 videosfix">

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
                <div class="col-md-4 hittop">
                    <div class="panel panel-default hit-parad">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span> - Хит парад - </span></h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group" >
                                <li class="list-group-item clearfix"> <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                                    <a href="#" class="pull-left"> <img src="{{ asset('images/1.jpg') }}" class="hitimg"> </a>
                                    <a class="clear" href="#"> <span>Атабеков Мирбек</span><p> <small>Мөлмөлүм</small></p></a>
                                    <span class="numeric">1</span>
                                    <span class="starRating">
                                        <input id="rating5" type="radio" name="rating" value="5">
                                        <label for="rating5">5</label>
                                        <input id="rating4" type="radio" name="rating" value="4">
                                        <label for="rating4">4</label>
                                        <input id="rating3" type="radio" name="rating" value="3" checked>
                                        <label for="rating3">3</label>
                                        <input id="rating2" type="radio" name="rating" value="2">
                                        <label for="rating2">2</label>
                                        <input id="rating1" type="radio" name="rating" value="1">
                                        <label for="rating1">1</label>
                                    </span>
                                </li>
                                <li class="list-group-item clearfix"><a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                                    <a href="#" class="pull-left"> <img src="{{ asset('images/2.jpg') }}" class="hitimg"> </a>
                                    <a class="clear" href="#"> <span>Борбиев Бек</span><p> <small>Шамал</small></p></a> <span class="numeric">2</span>
                                    <span class="starRating">
                                        <input id="rating5" type="radio" name="rating" value="5">
                                        <label for="rating5">5</label>
                                        <input id="rating4" type="radio" name="rating" value="4">
                                        <label for="rating4">4</label>
                                        <input id="rating3" type="radio" name="rating" value="3" checked>
                                        <label for="rating3">3</label>
                                        <input id="rating2" type="radio" name="rating" value="2">
                                        <label for="rating2">2</label>
                                        <input id="rating1" type="radio" name="rating" value="1">
                                        <label for="rating1">1</label>
                                    </span></li>
                                <li class="list-group-item clearfix"> <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                                    <a href="#" class="pull-left"> <img src="{{ asset('images/3.jpg') }}" class="hitimg"> </a>
                                    <a class="clear" href="#"> <span>Бегиш жана Баястан </span><p> <small>Айтчы</small></p></a> <span class="numeric">3</span>
                                    <span class="starRating">
                                        <input id="rating5" type="radio" name="rating" value="5">
                                        <label for="rating5">5</label>
                                        <input id="rating4" type="radio" name="rating" value="4">
                                        <label for="rating4">4</label>
                                        <input id="rating3" type="radio" name="rating" value="3" checked>
                                        <label for="rating3">3</label>
                                        <input id="rating2" type="radio" name="rating" value="2">
                                        <label for="rating2">2</label>
                                        <input id="rating1" type="radio" name="rating" value="1">
                                        <label for="rating1">1</label>
                                    </span></li>
                                <li class="list-group-item clearfix"><a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                                    <a href="#" class="pull-left"> <img src="{{ asset('images/4.jpg') }}" class="hitimg"> </a>
                                    <a class="clear" href="#"> <span>Примбердиев Кайрат</span><p> <small>Поезддеги Махабат</small></p></a> <span class="numeric">4</span>
                                    <span class="starRating">
                                        <input id="rating5" type="radio" name="rating" value="5">
                                        <label for="rating5">5</label>
                                        <input id="rating4" type="radio" name="rating" value="4">
                                        <label for="rating4">4</label>
                                        <input id="rating3" type="radio" name="rating" value="3" checked>
                                        <label for="rating3">3</label>
                                        <input id="rating2" type="radio" name="rating" value="2">
                                        <label for="rating2">2</label>
                                        <input id="rating1" type="radio" name="rating" value="1">
                                        <label for="rating1">1</label>
                                    </span></li>
                                <li class="list-group-item clearfix"><a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                                    <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                                    <a class="clear" href="#"> <span>Акулова Динара</span><p> <small>Ай кызым</small></p></a> <span class="numeric">5</span>
                                    <span class="starRating">
                                        <input id="rating5" type="radio" name="rating" value="5">
                                        <label for="rating5">5</label>
                                        <input id="rating4" type="radio" name="rating" value="4">
                                        <label for="rating4">4</label>
                                        <input id="rating3" type="radio" name="rating" value="3" checked>
                                        <label for="rating3">3</label>
                                        <input id="rating2" type="radio" name="rating" value="2">
                                        <label for="rating2">2</label>
                                        <input id="rating1" type="radio" name="rating" value="1">
                                        <label for="rating1">1</label>
                                    </span></li>

                        </div>
                    </div>                    
                </div> 
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row topvideos">
                        <div class="panel panel-default panel-carousel gallery">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Популярные клипы</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
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
            <div class="row">  
                <div class="col-md-12 ">
                    <div class="row imgmuz">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span> - Фотогалерея - </span></h3>
                        </div>
                        <div id="grid-gallery" class="grid-gallery">
                            <section class="grid-wrap">
                                <ul class="grid">
                                    <li>
                                        <figure>
                                            <img src="images/logo_notext.png" alt="img01"/>

                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/4.jpg" alt="img02"/>

                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/3.jpg" alt="img03"/>

                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/3.jpg" alt="img04"/>

                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/6.jpg" alt="img04"/>

                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/7.jpg" alt="img04"/>

                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/6.jpg" alt="img04"/>

                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="images/7.jpg" alt="img04"/>

                                        </figure>
                                    </li>

                                </ul>
                            </section><!-- // grid-wrap -->
                            <section class="slideshow tofront">
                                <ul>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Таң калыштуу</h3>
                                                <p>Дүйнөдө эмне деген ган укмуштар болуп жатат.</p>
                                            </figcaption>
                                            <img src="images/logo_notext.png" alt="img01"/>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Күн кайрадан тийүүдө</h3>
                                                <p>Бүгүн аяабай жакшы күн анткени күн бар, демек күн аябагандай жакшы болот</p>
                                            </figcaption>
                                            <img src="images/4.jpg" alt="img02"/>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Булуттар бар, демек маанай да бар</h3>
                                                <p>Булуттар табияттын укмуш белеги, жөн эле карап аларадын учупу атканы керемет.</p>
                                            </figcaption>
                                            <img src="images/3.jpg" alt="img03"/>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Chillwave nihil occupy</h3>
                                                <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                            </figcaption>
                                            <img src="images/3.jpg" alt="img04"/>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Chillwave nihil occupy</h3>
                                                <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                            </figcaption>
                                            <img src="images/6.jpg" alt="img04"/>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Chillwave nihil occupy</h3>
                                                <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                            </figcaption>
                                            <img src="images/7.jpg" alt="img04"/>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Chillwave nihil occupy</h3>
                                                <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                            </figcaption>
                                            <img src="images/4.jpg" alt="img04"/>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <figcaption>
                                                <h3>Chillwave nihil occupy</h3>
                                                <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                            </figcaption>
                                            <img src="images/7.jpg" alt="img04"/>
                                        </figure>
                                    </li>


                                </ul>
                                <nav>
                                    <span class="icon nav-prev"><i class="fa fa-arrow-left"></i>
                                    </span>
                                    <span class="icon nav-next"><i class="fa fa-arrow-right"></i>
                                    </span>
                                    <span class="icon nav-close"><i class="fa fa-times"></i>

                                    </span>
                                </nav>
                                <div class="info-keys"><i class="fa fa-info"></i>
                                    Клавитауранын белгилери менен башкарсаңыз болот</div>
                            </section><!-- // slideshow -->
                        </div><!-- // grid-gallery -->
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

        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>    

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
                playlist: [{
                        image: "{{ asset('images/channels/muztv.png') }}",
                        sources: [{
                                file: "rtmp://212.112.96.233:1936/live/ktrk.stream"
                            }]
                    }],
                width: "100%",
                height: "450",
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
            if($(window).width() > 768){
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

            if($(window).width() < 768){
                $('.carousel-slick1').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 4500
                });
            }

               if($(window).width() < 768){
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
