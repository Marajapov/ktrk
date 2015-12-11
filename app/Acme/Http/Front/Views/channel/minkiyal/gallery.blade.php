<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Миң Кыял</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}"/>
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/radios.css') }}"/>

</head>
<body class="min-kiyal">
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
            <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/min-kiyal.png')}}"><h4>Миң Кыял</h4></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav channel_switch">
                <li class="sitemenu" id="site-channel1">
                    <a href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук</span><h4>Достук</h4></a></li>
                <li class="sitemenu" id="site-channel1">
                    <a class="active" href="{{ route('minkiyal.home') }}"><img src="{{ asset('images/channels/min-kiyal.png')}}" ><span>Миң Кыял</span><h4>Миң Кыял</h4></a></li>
                <li class="sitemenu" id="site-channel1">
                    <a href="{{ route('kyrgyzradio.home') }}"><img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз Радиосу</span><h4>Кыргыз Радиосу</h4></a></li>
                <li class="sitemenu" id="site-channel1">
                    <a href="{{ route('balastan.home') }}"><img src="{{ asset('images/channels/balastan_color.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>



{{--<div class=" top-header">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="main-section cf">--}}
{{--<div class="inner-section">--}}
{{--<a href="#" class="tab-header dashboard_trigger" data-tab="stations">--}}
{{--<span class="section-header">Фотогалерея</span>--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="main-section cf">--}}
{{--<div class="inner-section">--}}
{{--<a href="#" class="tab-header dashboard_trigger" data-tab="stations">--}}
{{--<span class="section-header">О радио</span>--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="main-section cf">--}}
{{--<div class="inner-section">--}}
{{--<a href="#" class="tab-header dashboard_trigger" data-tab="stations">--}}
{{--<span class="section-header">Онлайн радио</span>--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<div class="container top-header">
    <div id="topnav_holder">
        <div class="container_v ">
            <div id="topnav" class="">
                <div class="container_v">

                    <ul class="social-menu">
                        <li class="sprite-rss"><a title="Rss Feed" href="#"><i class="fa fa-rss"></i></a></li>
                        <li class="sprite-facebook"><a class="mk-social-facebook" title="Facebook" href=#"><i class="fa fa-facebook"></i></a></li>
                        <li class="sprite-twitter"><a class="mk-social-twitter-alt" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="sprite-instagram"><a class="mk-social-photobucket" title="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="sprite-tumblr"><a class="mk-social-tumblr" title="Tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                    </ul>

                    <nav id="top-navigation" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                        <ul id="main-nav" class="navradio custom-nav sf-js-enabled">
                            <li><a href="#">Онлайн радио</a></li>
                            <li><a href="#">О радио</a></li>
                            <li><a href="{{ route('minkiyal.gallery') }}">Фотогалерея</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="container">

    <div class="row">
        <section class="content clearfix">
            <div class="bottom-left-block col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="flex-container">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <a href="#"><img src="{{asset('images/slide1.jpg')}}" /></a>
                                    </li>

                                    <li>
                                        <img src="{{asset('images/slide2.jpg')}}" />
                                    </li>

                                    <li>
                                        <img src="{{asset('images/slide1.jpg')}}" />
                                        <p>Designing The Well-Tempered Web</p>
                                    </li>
                                </ul>
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

<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{asset('filter/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('filter/js/jquery.mixitup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.roundabout.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.flexslider-min.js')}}"></script>

<script>
    $('.carousel-slick').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1
    });
</script>

<script type="text/javascript">
    (function($) {

        var $descriptions = $('#carousel-descriptions').children('li'),
                $controls = $('#carousel-controls').find('span'),
                $carousel = $('#carousel')
                        .roundabout({childSelector:"a", minOpacity:1, autoplay:false})
                        .on('focus', 'img', function() {
                            var slideNum = $carousel.roundabout("getChildInFocus");

                            $descriptions.add($controls).removeClass('current');
                            $($descriptions.get(slideNum)).addClass('current');
                            $($controls.get(slideNum)).addClass('current');
                        });

        $controls.on('click dblclick', function() {
            var slideNum = -1,
                    i = 0, len = $controls.length;

            for (; i<len; i++) {
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
<script>
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider'
        });
    });
</script>
</body>
</html>