<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Маданият</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="filter/css/layout.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/style.css"/>

    </head>
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
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><h4>Маданият</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('muzkanal.home') }}"><img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span><h4>Музыка</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active"  href="{{ route('madaniyat.home') }}"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span><h4>Маданият</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('balastan.home') }}"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>
                    </ul>  
                </div><!-- /.navbar-collapse -->
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
                            <a class="navbar-brand" href="{{ route('madaniyat.home') }}"> <i class="fa fa-home"></i>Башкы</a>
                        </div>



                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                                           
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="{{ route('madaniyat.about') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>О канале <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('madaniyat.about') }}"><i class="fa fa-television"></i>О телеканале</a></li>
                                        <li><a href="{{ route('madaniyat.contacts') }}"><i class="fa fa-envelope-o"></i>Контакты</a></li>                                                
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="{{ route('madaniyat.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i>Передачи <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-television"></i>О телеканале</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i>Контакты</a></li>                                                
                                    </ul>
                                </li>

                                <li><a href="{{ route('madaniyat.photos') }}"><i class="fa fa-picture-o"></i>Фотогалерея</a></li>
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



        <div class="container">

            <div class="row">
                <section class="content clearfix">

                    <div class="col-md-12">
                        <div class="panel panel-default" style="background-color: transparent">
                            <div class="panel-heading">

                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 block">
                                    <div id="carousel">
                                        <a href="#">
                                            <img src="images/anons/1.jpg" alt="" class="slide" />
                                        </a>
                                        <a href="#">
                                            <img src="images/anons/2.jpg" alt="" class="slide" />
                                        </a>
                                        <a href="#">
                                            <img src="images/anons/3.jpg" alt="" class="slide" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding:0px;">
                        <div class="panel panel-default panel-carousel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Новые передачи</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="carousel-slick_peredachi">
                                        <div class="col-md-4 peredacha">
                                            <div class="first">
                                                <div class="img">
                                                    <a href="#"><img src="images/10.png" alt="" title=""></a>
                                                    <div class="views"><i class="fa fa-eye"></i> 10 099 </div>
                                                    <div class="time">4:52</div>
                                                    <a class="play" href=""></a>
                                                </div>
                                                <div class="txt">
                                                    <div class="date">11.11.15</div>
                                                    <a href="#">Адыгейский сор из избы. Самые драматичные моменты</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/002.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/003.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/004.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/005.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/006.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/007.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/008.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/009.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/010.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/011.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/012.jpg" alt=""/></a></div>
                                    </div>
                                </div>

                            </div>

                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Популярные передачи</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="carousel-slick_peredachi">
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/001.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/002.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/003.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/004.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/005.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/006.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/007.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/008.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/009.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/010.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/011.jpg" alt=""/></a></div>
                                        <div class="col-md-4 peredacha"><a href="#"><img src="images/gallery/012.jpg" alt=""/></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" style="padding: 10px 0px 0px 0px;">
                        <div class="panel panel-default panel-carousel ">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Фотогалерея</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 broadimages">
                                    <div class="carousel-slick">
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/001.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/002.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/003.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/004.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/005.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/006.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/007.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/008.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/009.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/010.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/011.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                        <div class="col-md-4"><a href="#"><img src="images/gallery/012.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>
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
        <script src="js/bootstrap-hover-dropdown.js"></script>
       

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


        <script type="text/javascript" src="filter/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="filter/js/jquery.mixitup.min.js"></script>

        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script type="text/javascript" src="js/jquery.roundabout.js"></script>


         <script>
            if ($(window).width() > 768) {
                $('.carousel-slick_peredachi').slick({
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,        
                });
                $('.carousel-slick').slick({
                    infinite: true,
                    slidesToShow: 6,
                    slidesToScroll: 1,

                });
            }

            if ($(window).width() < 768) {
                $('.carousel-slick').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
    
                });
            }

            if ($(window).width() < 768) {
                $('.carousel-slick_peredachi').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
        
                });
            }

        </script>

        <script type="text/javascript">
            (function ($) {

                var $descriptions = $('#carousel-descriptions').children('li'),
                        $controls = $('#carousel-controls').find('span'),
                        $carousel = $('#carousel')
                        .roundabout({childSelector: "a", minOpacity: 1, autoplay: false})
                        .on('focus', 'img', function () {
                            var slideNum = $carousel.roundabout("getChildInFocus");

                            $descriptions.add($controls).removeClass('current');
                            $($descriptions.get(slideNum)).addClass('current');
                            $($controls.get(slideNum)).addClass('current');
                        });

                $controls.on('click dblclick', function () {
                    var slideNum = -1,
                            i = 0, len = $controls.length;

                    for (; i < len; i++) {
                        if (this === $controls.get(i)) {
                            slideNum = i;
                            break;
                        }
                    }

                    if (slideNum >= 0) {
                        $controls.removeClass('current');
                        $(this).addClass('current');
                        $carousel.roundabout('animateToChild', slideNum);
                    }
                });
            }(jQuery));
        </script>


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
    </body>
</html>