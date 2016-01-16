@extends('Front::channel.balastan.default')
@section('title', "Vertex")
@section('styles')
@endsection
@section('content')
    <body class="balastan" id="balastan">
    <!--BEGIN MAIN HEADER MENU for all channels  -->
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
                    <img src="{{ asset('images/channels/balastan_white_notext.png')}}">
                    <h4>Баластан</h4>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav channel_switch">
                    <li class="sitemenu" id="site-channel1">
                        <a href="{{ route('front.home') }}">
                            <img src="{{ asset('images/ktrk_last.svg')}}"><span>КТРК</span>
                            <h4>КТРК</h4>
                        </a>
                    </li>
                    <li class="sitemenu" id="site-channel1">
                        <a href="{{ route('muzkanal.home') }}">
                            <img src="{{ asset('images/channels/muztv_color.png')}}" ><span>Музыка</span>
                            <h4>Музыка</h4>
                        </a>
                    </li>
                    <li class="sitemenu" id="site-channel1">
                        <a href="{{ route('madaniyat.home') }}">
                            <img src="{{ asset('images/channels/madaniyat_color.png')}}"><span>Маданият</span>
                            <h4>Маданият</h4>
                        </a>
                    </li>
                    <li class="sitemenu" id="site-channel1">
                        <a class="active" href="{{ route('balastan.home') }}">
                            <img src="{{ asset('images/channels/balastan_color.png')}}"><span>Баластан</span>
                            <h4>Баластан</h4>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
    <!--END -->

    <div class="container-fluid kidsmainbg">
        <div class="container">
            <div class="row clearfix">
                <div class="bl-logo">
                    <a href="{{ route('balastan.home') }}">
                        <img src="{{ asset('images/channels/balastan_white_notext.png') }}" alt="Balastan Logo"/>
                    </a>
                </div>
                <ul class="kidstopheader">
                    <li>
                        <a href="{{ route('balastan.about') }}">
                            <i class="fa fa-info-circle i2"></i>
                            <span>{{ trans('radiopages.BAbout') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('balastan.world') }}">
                            <i class="fa fa-star i3"></i>
                            <span>{{ trans('radiopages.Bworld') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('balastan.video') }}">
                            <i class="fa fa-play i4 "></i>
                            <span>Видео</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('balastan.allphotos') }}">
                            <i class="fa fa-picture-o i5"></i>
                            <span>{{ trans('radiopages.Photos') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-search i6"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="shows-slider">
                <div class="shows-carousel container">
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
              </div>
              <div class="row">
                  <div class="col-md-8">
                      <a href="">
                          <h2 class="cat">Манас таануу</h2>
                          <img class="video" width="100%" src="http://img.youtube.com/vi/rYEDA3JcQqw/maxresdefault.jpg" alt="" />
                          <h3 class="name">Биринчи чыгарылыш</h3>
                      </a>
                  </div>         
                  <div class="col-md-4">
                      <a href="">
                          <h2 class="cat">Бирге окуйбуз</h2>
                          <img class="video" width="100%" src="http://img.youtube.com/vi/rYEDA3JcQqw/maxresdefault.jpg" alt="" />
                          <h3 class="name">Алтын казына</h3>
                      </a>
                  </div>
                  <div class="col-md-4">
                      <a href="">
                          <h2 class="cat">Манас таануу</h2>
                          <img class="video" width="100%" src="http://img.youtube.com/vi/rYEDA3JcQqw/maxresdefault.jpg" alt="" />
                          <h3 class="name">Биринчи чыгарылыш</h3>
                      </a>
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
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img class="cover" src="http://img.youtube.com/vi/rZhEr9mZfh4/mqdefault.jpg" alt="">
                        <h3 class="name">Баластан бир жашта</h3>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img class="cover" src="http://img.youtube.com/vi/rYEDA3JcQqw/mqdefault.jpg" alt="">
                        <h3 class="name">Керемет көчтүн балдары Америкага барып келди</h3>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img class="cover" src="http://img.youtube.com/vi/rYEDA3JcQqw/mqdefault.jpg" alt="">
                        <h3 class="name">Керемет көчтүн балдары Америкага барып келди</h3>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img class="cover" src="http://img.youtube.com/vi/rYEDA3JcQqw/mqdefault.jpg" alt="">
                        <h3 class="name">Керемет көчтүн балдары Америкага барып келди</h3>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img class="cover" src="http://img.youtube.com/vi/rYEDA3JcQqw/mqdefault.jpg" alt="">
                        <h3 class="name">Керемет көчтүн балдары Америкага барып келди</h3>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img class="cover" src="http://img.youtube.com/vi/rYEDA3JcQqw/mqdefault.jpg" alt="">
                        <h3 class="name">Керемет көчтүн балдары Америкага барып келди</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Photogalleries -->

    @stop
    @section('footerscript2')
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

            //    var current = $('.shows-carousel').slick('slickCurrentSlide');

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
