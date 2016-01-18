@extends('Front::channel.balastan.default')
@section('title', "Vertex")

@section('styles')
@endsection

@section('content')

    <div class="container-fluid kidsmainbg">

        @include('Front::channel.balastan.nav')

        <div class="row">
            <div class="shows-slider">
                <div class="shows-carousel container">
                    <div>
                        <article>
                            <div class="show-info">
                                <h1 class="show-name">Баарын билгим келет</h1>
                                <span class="show-day">{{ trans('site.Monday') }} - {{ trans('site.Friday') }}</span>
                                <span class="show-time">19:30</span>


                                <a class="show-btn" href="#">
                                    Подробнее
                                </a>
                            </div>

                            <div class="show-img">
                                <img src="{{ asset('images/channels/balastan/slider/1.png') }}" alt="" draggable="false">
                            </div>
                        </article>
                    </div>
                    <div>
                        <article>
                            <div class="show-info">
                                <h1 class="show-name">Баарын билгим келет</h1>
                                <span class="show-day">{{ trans('site.Monday') }} - {{ trans('site.Friday') }}</span>
                                <span class="show-time">19:30 / 21:30</span>


                                <a class="show-btn" href="#">
                                    Подробнее
                                </a>
                            </div>

                            <div class="show-img">
                                <img src="{{ asset('images/channels/balastan/slider/1.png') }}" alt="" draggable="false">
                            </div>
                        </article>
                    </div>
                    <div>
                        <article>
                            <div class="show-info">
                                <h1 class="show-name">Баарын билгим келет</h1>
                                <span class="show-day">{{ trans('site.Monday') }} - {{ trans('site.Friday') }}</span>
                                <span class="show-time">19:30 / 21:30</span>


                                <a class="show-btn" href="#">
                                    Подробнее
                                </a>
                            </div>

                            <div class="show-img">
                                <img src="{{ asset('images/channels/balastan/slider/1.png') }}" alt="" draggable="false">
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="kidsslider" class="container-fluid kidsslider">
        <div class="container">
            <div class="row">
                <div class="col-md-12 programs-slide">
                    <div class="kids-slide">
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{ asset('images/channels/balastan/keremet.jpg')}}" alt=""/>
                                <h3 class="programmcat">Керемет көч</h3>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{ asset('images/channels/balastan/sun-kids.jpg')}}" alt=""/>
                                <h3 class="programmcat">Күн балдары</h3>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{ asset('images/channels/balastan/baaryn.png')}}" alt=""/>
                                <h3 class="programmcat">Акыл ордо</h3>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{ asset('images/channels/balastan/birge2.png')}}" alt=""/>
                                <h3 class="programmcat">Бирге окуйбуз</h3>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{ asset('images/channels/balastan/manastaanuu.jpg')}}" alt=""/>
                                <h3 class="programmcat">Манас Таануу</h3>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{ asset('images/channels/balastan/taalimtay.png')}}" alt=""/>
                                <h3 class="programmcat">Таалимтай</h3>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#">
                                <img src="{{ asset('images/channels/balastan/taalimtay.png')}}" alt=""/>
                                <h3 class="programmcat">Баарын билгим келет</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Programms slide -->

    <!-- BEGIN NEW videos -->
    <div class="container-fluid preklams">
        <div class="container">
            <div class="row">

                <div class="title col-md-12">
                    <h3>Жакында</h3>
                </div>

                <div class="col-md-6 adblock">
                    <a href="#">
                        <img class="videomain" width="100%" height="340px" src="{{asset('images/channels/balastan/legends.jpg')}}" alt="" />
                    </a>
                    <div class="show-text">
                        <h2>Түнкү сакчылардын уламышы</h2>

                        <a class="soon-btn" href="#">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 adblock">
                    <a href="#">
                        <img class="videomain" width="100%" height="340px" src="{{asset('images/channels/balastan/po.jpg')}}" alt="" />
                    </a>
                    <div class="show-text">
                        <h2>Кунг Фу Панда 3</h2>

                        <a class="soon-btn" href="#">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid newtopvideos">
        <div class="container">
            <div class="newkidvideos">
                <div class="title">
                    <h3>Видеолор</h3>
                    <a href="#" class="more-link">Бардык видеолор</a>
                </div>
                <div class="row">
                    <div class="col-md-4 video-block">
                        <a href="#" class="video-img">
                            <img src="http://img.youtube.com/vi/a_O0hArYqiQ/0.jpg" alt="" />
                            <span class="video-overlay"></span>
                        </a>
                        <div class="video-info">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <i class="fa fa-youtube-play video-icon"></i>
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading video-name">Бирге окуйбуз: "Ким күчтүү?"</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 video-block">
                        <a href="#" class="video-img">
                            <img src="http://img.youtube.com/vi/jCEiq-zo2BI/0.jpg" alt="" />
                            <span class="video-overlay"></span>
                        </a>
                        <div class="video-info">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <i class="fa fa-youtube-play video-icon"></i>
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading video-name">Бирге окуйбуз: "Кызык экен..."</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 video-block">
                        <a href="#" class="video-img">
                            <img src="http://img.youtube.com/vi/GhPBEOklj8I/0.jpg" alt="" />
                            <span class="video-overlay"></span>
                        </a>

                        <div class="video-info">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <i class="fa fa-youtube-play video-icon"></i>
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading video-name">Баарын билгим келет: "Дүйнөдөгү эң чоң дарыя"</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 video-block">
                        <a href="#" class="video-img">
                            <img src="http://img.youtube.com/vi/0soUNUVl4k0/0.jpg" alt="" />
                            <span class="video-overlay"></span>
                        </a>
                        <div class="video-info">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <i class="fa fa-youtube-play video-icon"></i>
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading video-name">Баарын билгим келет: "Иммунитет деген эмне?" (29.11.2015)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 video-block">
                        <a href="#" class="video-img">
                            <img src="http://img.youtube.com/vi/jCEiq-zo2BI/0.jpg" alt="" />
                            <span class="video-overlay"></span>
                        </a>
                        <div class="video-info">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <i class="fa fa-youtube-play video-icon"></i>
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading video-name">Бирге окуйбуз: "Кызык экен..."</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 video-block">
                        <a href="#" class="video-img">
                            <img src="http://img.youtube.com/vi/GhPBEOklj8I/0.jpg" alt="" />
                            <span class="video-overlay"></span>
                        </a>

                        <div class="video-info">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <i class="fa fa-youtube-play video-icon"></i>
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading video-name">Баарын билгим келет: "Дүйнөдөгү эң чоң дарыя"</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NEW videos -->

    <!-- BEGIN Photogalleries -->
    <div class="container-fluid kidsgallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h3>Фотогалерея</h3>
                        <a href="#" class="more-link">Бардык галереялар</a>
                    </div>
                </div>
                <div class="col-md-4 video-block">
                    <a href="#" class="video-img">
                        <img src="http://img.youtube.com/vi/a_O0hArYqiQ/0.jpg" alt="" />
                        <span class="video-overlay"></span>
                    </a>
                    <div class="video-info">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <i class="fa fa-camera video-icon"></i>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading video-name">Бирге окуйбуз: "Ким күчтүү?"</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 video-block">
                    <a href="#" class="video-img">
                        <img src="http://img.youtube.com/vi/jCEiq-zo2BI/0.jpg" alt="" />
                        <span class="video-overlay"></span>
                    </a>
                    <div class="video-info">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <i class="fa fa-camera video-icon"></i>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading video-name">Бирге окуйбуз: "Кызык экен..."</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 video-block">
                    <a href="#" class="video-img">
                        <img src="http://img.youtube.com/vi/GhPBEOklj8I/0.jpg" alt="" />
                        <span class="video-overlay"></span>
                    </a>

                    <div class="video-info">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <i class="fa fa-camera video-icon"></i>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading video-name">Баарын билгим келет: "Дүйнөдөгү эң чоң дарыя"</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Photogalleries -->

@stop
@section('footerscript')
    <script>
        if ($(window).width() > 768) {
            $('.kids-slide').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1
            });
        }

        if ($(window).width() < 768) {
            $('.kids-slide').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1
            });
        }

    </script>
    <script>
        $('.shows-carousel').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            speed: 1000
        });
    </script>
@stop
