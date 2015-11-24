@extends('Front::layouts.default')
@section('title', "Биринчи Радио")
@stop

@section('styles')
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="filter/css/layout.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/style.css"/>
@stop


@section('content')
<div class="container birinchiradio">

    <div class="row">

                     <div class="col-md-12" style="padding: 10px 0px 0px 0px;">
                        <div class="panel panel-default panel-carousel ">
                            <div class="panel-heading madaniyatcolor">
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
            </div>    
    </div>

</div>

@stop


@section('footerscript2')

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
@stop