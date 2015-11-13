<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная страница</title>

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
                        <a href="#"><img src="{{ asset('images/ktrk_last.svg')}}"><span>КТРК</span></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="#"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>
                            <li class="sitemenu" id="site-channel1">
                                <a class="active" href="#"><img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span><h4>Музыка</h4></a></li>
                                <li class="sitemenu" id="site-channel1">
                                    <a href="#"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span><h4>Маданият</h4></a></li>
                                    <li class="sitemenu" id="site-channel1">
                                        <a href="#"><img src="{{ asset('images/channels/1-radio.png')}}"><span>Биринчи Радио</span><h4>Биринчи Радио</h4></a></li>
                       <!--  <li class="sitemenu" id="site-channel1">
                       <a href="#"><img src="{{ asset('images/channels/baldar.png')}}"><span>Балдар ФМ</span></a></li> -->
                       <li class="sitemenu" id="site-channel1">
                        <a href="#"><img src="{{ asset('images/channels/min-kiyal.png')}}"><span>Миң Кыял ФМ</span></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="#"><img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз Радиосу</span></a></li> 
                            <li class="sitemenu" id="site-channel1">
                                <a href="#"><img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук Радиосу</span></a></li> 
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
                                            <a class="navbar-brand" href="#"> <i class="fa fa-home"></i>Башкы</a>
                                        </div>



                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav">     
                                                <li><a href="#"><i class="fa fa-info-circle"></i>О канале</a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-microphone"></i>Хит-Парад <!-- <span class="caret"></span> --></a>
                                     <!--        <ul class="dropdown-menu">
                                                <li><a href="#">Хит парад</a></li>
                                                <li><a href="#">Хит парад 2</a></li>
                                                <li><a href="#">Хит парад 3</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Топ парад</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Парад планет</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="#"><i class="fa fa-picture-o"></i>Фото</a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i>Клипы</a></li>
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right logo-block">
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
                <div class="col-md-12 aboutmuz">
                       <div class="panel panel-default ">
                           <div class="panel-heading">
                            <h3 class="panel-title"><span>О телеканале</span></h3>
                        </div> 
                        <div class="row">
                         <img class="backmuz" src="{{ asset('images/channels/muzkanal/notes.png')}}">   
                            <div class="col-md-8">                            
                                <div class="panel-body">
                                    <div class="media">                                
                                      <div class="media-body">
                                        <h4 class="media-heading"> <p><span>«Русский роман»</span> - настоящий подарок для всех любителей отечественных мелодрам. В жизни миллионов телезрителей кинороманы занимают особое место и ни одно другое телевизионное зрелище не в состоянии заменить их.</p> </h4>
                                        <div class="media-left">
                                           <img class="media-object" src="{{ asset('images/channels/muzkanal/1.jpg')}}" alt="..."> 
                                           <h4 class="media-body"> <p><span>«Русский роман»</span> - настоящий подарок для всех любителей отечественных мелодрам. В жизни миллионов телезрителей кинороманы занимают особое место и ни одно другое телевизионное зрелище не в состоянии заменить их.</p> </h4>
                                           <img class="media-object" src="{{ asset('images/channels/muzkanal/3.jpg')}}" alt="...">                                          
                                       </div> 

                                       <div class="media-right">
                                           <img class="media-object" src="{{ asset('images/channels/muzkanal/2.jpg')}}" alt="...">                                                                                    
                                       </div>
                                         <h4 class="media-body"> <p><span>«Русский роман»</span> - настоящий подарок для всех любителей отечественных мелодрам. В жизни миллионов телезрителей кинороманы занимают особое место и ни одно другое телевизионное зрелище не в состоянии заменить их.</p></h4>
                                         <h4><p>Фильмы канала – это лирические, человечные, глубоко волнующие жизненные истории.
                                            Мы верим, что канал станет по-настоящему успешным и популярным среди телезрительниц: мы изучили мотивы просмотра мелодрам и тщательно отобрали пакет фильмов, которые соответствуют ожиданиям женщин. В них есть все, чтобы зрительницы не отрывались от экрана: любимые актеры, жизненные сюжеты, острые интриги.
                                            Главное свойство контента «Русского романа», то, ради чего его будут смотреть – это яркие эмоции!</p></h4>
                                            <hr>
                                            <p><h3>Как смотреть</h3><h4>
                                                Телеканал «Русский роман» ежедневно доступен для зрителей, подключенных к кабельным сетям. Информацию о подключении к телеканалу уточняйте у кабельного оператора, обслуживающего Вашу сеть.
                                                По вопросам подключения и трансляции телеканала "Русский роман" обращайтесь в службу дистрибуции по адресу: contact@signalmedia.ru</h4></p>
                                   </div>
                               </div>

                               <iframe width="100%" height="450px" src="https://www.youtube.com/embed/ZYm3JvXPpKU" frameborder="0" allowfullscreen></iframe>
                            </div>
                         </div>
                         <div class="col-md-4">
                             <div class="aboutposter">
                                 <img src="{{ asset('images/channels/muzkanal/1.jpg')}}" alt="...">
                                 <img src="{{ asset('images/channels/muzkanal/2.jpg')}}" alt="...">
                                 <img src="{{ asset('images/channels/muzkanal/3.jpg')}}" alt="...">    
                             </div>
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
            $(document).ready(function(){
                $(".search-toggle").click(function(){
                    $(".logo-block").addClass("search-show");
                    $(".form-search").addClass("visible");
                });
                $(".close-search").click(function(){
                    $(".logo-block").removeClass("search-show");
                    $(".form-search").removeClass("visible");
                });
            });
        </script>   

        <script src="{{ asset('js/gallery/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/gallery/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/gallery/classie.js') }}"></script>
        <script src="{{ asset('js/gallery/cbpGridGallery.js') }}"></script>

        <script>
            new CBPGridGallery(document.getElementById('grid-gallery'));
        </script>

        <script>
            var serverTZoffset = 360;
        </script>

        <script src="{{ asset('js/lightslider.js') }}"></script>

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

        <script src="{{ asset('js/audio/dkp.min.js') }}"></script>

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

<script>
    $(document).ready(function () {
        var likes = 12;
        var dislikes = 6;
        $('.like').attr('data-likes', likes);
        $('.dislike').attr('data-dislikes', dislikes);
        $('.text').click(function () {
            $('.like').toggleClass('like_active');
            $('.dislike').toggleClass('dislike_active');
            if ($('.text').text() == 'Vote') {
                $('.text').text('Cancel');
            } else {
                $('.text').text('Vote');
            }
        })
        $('.like').click(function () {
            likes++;
            $('.like').attr('data-likes', likes);
            $('.like').removeClass('like_active');
            $('.dislike').removeClass('dislike_active');
            $('.text').text('Vote');
        })
        $('.dislike').click(function () {
            dislikes++;
            $('.dislike').attr('data-dislikes', dislikes);
            $('.like').removeClass('like_active');
            $('.dislike').removeClass('dislike_active');
            $('.text').text('Vote');
        })
    })
</script>


</body>
</html>
