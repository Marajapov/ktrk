@extends('Front::channel.madaniyat.default')
@section('title', trans('radiopages.Homepage'))
@section('styles')
@endsection
@section('content')
<body class="madaniyat">
   @include('Front::channel.madaniyat.nav')
   <div class="container m-container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default" style="background-color: transparent">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
              <div class="col-md-12 block">
                <div id="carousel">
                  <a href="#">
                    <img src="{{ asset('images/anons/1.jpg') }}" alt="" class="slide" />
                  </a>
                  <a href="#">
                    <img src="{{ asset('images/anons/2.jpg') }}" alt="" class="slide" />
                  </a>
                  <a href="#">
                    <img src="{{asset('images/anons/3.jpg')}}" alt="" class="slide" />
                  </a>

                  <a href="#">
                    <img src="{{ asset('images/anons/3.jpg') }}" alt="" class="slide" />
                  </a>

                  <a href="#">
                    <img src="{{ asset('images/anons/3.jpg') }}" alt="" class="slide" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 panel-avi">
          <div class="row">
            <div class="panel panel-default panel-anons-video">
              <div class="panel-body no-padding">
                  <div class="col-md-6 no-padding">
                    <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                          <h3 class="panel-title"><span>Скоро в эфире</span></h3>
                        </div>
                        <div class="panel-body">
                          <div class="slider-anons">
                            <div>
                                <img src="{{asset('images/channels/madaniyat/anons.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{asset('images/channels/madaniyat/anons2.jpg')}}" alt="">
                            </div>
                            <div>
                                <img src="{{asset('images/channels/madaniyat/anons3.jpg')}}" alt="">
                            </div>
                          </div>
                          <div class="tele-programma">                          
                              <div class="panel">
                              <h2>Телепрограмма</h2>
                                  <div class="panel-padding">                              
                                    <div class="col-md-3 t-padding">
                                        <div class="programm"></div>
                                    </div>
                                    <div class="col-md-3 t-padding">
                                        <div class="programm"></div>
                                    </div>
                                    <div class="col-md-3 t-padding">
                                        <div class="programm"></div>
                                    </div>
                                    <div class="col-md-3 t-padding">
                                        <div class="programm"></div>
                                    </div>
                                  </div>
                                  <footer>
                                    <a href="#">
                                        <span>Вся телепрограмма<i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>                            
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 no-padding">
                      <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                          <h3 class="panel-title"><span>Новые видео</span></h3>
                        </div>
                        <div class="panel-body panel-promo m-promo">                     
                            <div class="main-video">
                                <div class="slider slider-for">
                                    <div> <!-- video1 -->
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/AlMUcmmZ_zE?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0"></iframe>
                                        </div>
                                        <div class="slick-text">
                                            <a href="#">
                                                <h2>Alicia Keys at Champions League final opening ceremony</h2>
                                            </a>
                                        </div>
                                    </div>
                                    <div> <!-- video2 -->
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/AlMUcmmZ_zE?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0"></iframe>
                                        </div>
                                        <div class="slick-text">
                                            <a href="#">
                                                <h2>Alicia Keys at Champions League final opening ceremony</h2>
                                            </a>
                                        </div>
                                    </div>

                                    <div> <!-- video3 -->
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/AlMUcmmZ_zE?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0"></iframe>
                                        </div>
                                        <div class="slick-text">
                                            <a href="#">
                                                <h2>Alicia Keys at Champions League final opening ceremony</h2>
                                            </a>
                                        </div>
                                    </div>

                                    <div> <!-- video4 -->
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/AlMUcmmZ_zE?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0"></iframe>
                                        </div>
                                        <div class="slick-text">
                                            <a href="#">
                                                <h2>Alicia Keys at Champions League final opening ceremony</h2>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="slider slider-nav">
                                    <div>
                                        <span class="videoTitle hidden">{{ trans('site.FrontPostDaysNews') }}</span>
                                        <img src="https://i.ytimg.com/vi/MPzYhb3O4Hc/hqdefault.jpg" alt="" />
                                   
                                    </div>
                                    <div>
                                        <span class="videoTitle hidden">{{ trans('site.FrontPostDaysEpisode') }}</span>
                                        <img src="https://i.ytimg.com/vi/MPzYhb3O4Hc/hqdefault.jpg" alt="" />
                                       
                                    </div>
                                    <div>
                                        <span class="videoTitle hidden">{{ trans('site.FrontPostDaysAnons') }}</span>
                                        <img src="https://i.ytimg.com/vi/MPzYhb3O4Hc/hqdefault.jpg" alt="" />
                                    </div>

                                    <div>
                                        <span class="videoTitle hidden">{{ trans('site.FrontPostDaysMaanai') }}</span>
                                        <img src="https://i.ytimg.com/vi/MPzYhb3O4Hc/hqdefault.jpg" alt="" />
                                    </div>
                                </div>

                                <footer>
                                    <a href="#">
                                        <span>{{ trans('site.FrontVideoAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>

                            </div>                  
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-12 no-padding">
            <div class="panel panel-default">
               <div class="panel-heading madaniyatcolor">
                  <h3 class="panel-title"><span>Жаңылыктар</span></h3>
               </div>
               <div class="panel-body panel-news">
                 <div class="row">
                    @if($postAll)
                    @foreach($postAll as $post)
                    <article class="col-md-3 no-padding">
                      <div class="col-md-12">                
                       <a href="{{ route('madaniyat.news', [$post, $lc]) }}">
                          <img src="{{ asset($post->getFile()) }}" alt="">
                          <div class="more">
                          <div class="dates"><i class="fa fa-calendar"></i>
                              {{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</div>
                              <div class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</div>                      
                          </div>
                          <span class="pn-title">{{ $post->getTitleRuOrKg() }}</span>
                        </a>
                      </div>                    
                    </article>                    
                    @endforeach
                    @endif
                  </div>
                  <footer>
                     <a href="{{ route('madaniyat.allnews') }}">
                     <span>Баардык жаңылыктар<i class="fa fa-arrow-circle-right"></i></span>
                     </a>
                  </footer>
               </div>
            </div>
        </div>
        <div class="col-md-12 video-block">          
            <div class="panel panel-default ctg-panel">
               <div class="panel-heading madaniyatcolor">
                  <h3 class="panel-title"><span>{{ trans('radiopages.NewKorsotuu') }}</span></h3>
               </div>
               <div class="panel-body">
                  <div class="col-md-3 no-padding">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <a href="#">Дебаты</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">На крутых перевалах истории!</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Реновация</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Капкан</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Разговор в полдень </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Улуу Мурас </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">«Кайрымдуу бол»</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Тарыхты тактайлы</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Кинобаян </a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Чудесные напевы музыки</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Арт-Салон</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Чарбакер</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Мосты дружбы</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Линия жизни</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">"Кыз-жигит" Сармерден</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Кылым күүлөрү</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Керемет көч</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#">Новости </a>
                        </li>  
                      </ul>
                  </div>
                  <div class="col-md-9 panel-videos no-padding">
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2997">
                            <img src="http://www.ktrk.kg/img/thumbnail/29971465545302.png" alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">0</span>
                              <span class="media-project">
                                Замана
                              </span>
                              <span class="media-date">10.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2997">
                            <h4>Телесабак: Терминологиялык комиссия тарабынан айрым сөздүк табылгалар</h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2998">
                            <img src=" http://www.ktrk.kg/img/thumbnail/29981465545745.png " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">1</span>
                              <span class="media-project">
                                Замана
                              </span>
                              <span class="media-date">10.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2998">
                            <h4>“Үркүн” жана “Саякбай” тасмасы</h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2995">
                            <img src=" http://www.ktrk.kg/img/thumbnail/29951465544904.jpg " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">1</span>
                              <span class="media-project">
                                Замана
                              </span>
                              <span class="media-date">10.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2995">
                            <h4>Бул күнү 2008-жылы Чыңгыз Айтматов каза болгон</h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2992">
                            <img src=" http://www.ktrk.kg/img/thumbnail/29921465529192.png " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">161</span>
                              <span class="media-project">
                                На крутых перевалах истории!
                              </span>
                              <span class="media-date">10.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2992">
                            <h4>На крутых перевалах истории: Пик кризиса. Год 1993</h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2991">
                            <img src=" http://www.ktrk.kg/img/thumbnail/29911465493142.png " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">141</span>
                              <span class="media-project">
                                Новости
                              </span>
                              <span class="media-date">09.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2991">
                            <h4>Ала-Тоо жаңылыктары: бейшемби 09.06.2016</h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2990">
                            <img src=" http://www.ktrk.kg/img/thumbnail/29901465491766.png " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">57</span>
                              <span class="media-project">
                                Новости
                              </span>
                              <span class="media-date">09.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2990">
                            <h4>Көшөгө артындагы көп сөз</h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2914">
                            <img src=" http://www.ktrk.kg/img/thumbnail/29141465191481.jpg " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">7110</span>
                              <span class="media-project">
                                Формула успеха
                              </span>
                              <span class="media-date">06.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2914">
                            <h4>Ийгилик сырлары: Жогорку Кеңештин депутаты Өмүрбек Текебаев </h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/92">
                            <img src=" http://img.youtube.com/vi/GvKxrkzU5LM/hqdefault.jpg " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">3804</span>
                              <span class="media-date">20.12.2015</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/92">
                            <h4>Жаңы клип: Асел &amp; Элмурат "Комуз деми"</h4>
                          </a>
                        </div>
                      </article>
                      <article class="col-md-4" data-cat="all-videos">
                        <div class="img">
                          <a href="http://www.ktrk.kg/media/video/2925">
                            <img src=" http://www.ktrk.kg/img/thumbnail/29251465212715.png " alt="">
                            <div class="overlay">
                              <i class="fa-view"></i>
                              <span class="media-view">2985</span>
                              <span class="media-project">
                                Актуальный разговор
                              </span>
                              <span class="media-date">06.06.2016</span>
                            </div>
                            <i class="fa-video"></i>
                          </a>
                        </div>
                        <div class="media-title">
                          <a href="http://www.ktrk.kg/media/video/2925">
                            <h4>Маанилүү маек: Орозо кармоонун туура эрежелери</h4>
                          </a>
                        </div>
                      </article>
                  </div>
                  <footer>
                     <a href="{{ route('madaniyat.videos') }}">
                     <span>{{ trans('radiopages.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                     </a>
                  </footer>
               </div>
            </div>    
        </div>
        <div class="col-md-12 mgallery">
            <div class="panel panel-default">
               <div class="panel-heading madaniyatcolor">
                  <h3 class="panel-title"><span>{{ trans('radiopages.Photos') }}</span></h3>
               </div>
               <div class="panel-body">
                  <div class="col-md-12">
                     <div class="carousel-slick">
                      @if($photoGalleries)
                          @foreach($photoGalleries as $photoGallery)
                            <div class="col-md-4">
                               <a href="{{ route('madaniyat.photos', $photoGallery) }}">
                                  <img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/>
                                  <div class="main-back">
                                    <div class="g-extra">
                                        <span class="datetime"><i class="fa fa-calendar"></i> {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                        <span class="view"><i class="fa fa-eye"></i>{{ $photoGallery->viewed }}</span>
                                     </div>
                                    <div class="g-title">
                                      {{ $photoGallery->getName() }}
                                    </div>
                                  </div>
                               </a>
                            </div>
                          @endforeach
                      @endif
                     </div>
                  </div>
                  <footer class="m-footer">
                     <a href="{{ route('madaniyat.allphotos') }}">
                     <span>{{ trans('radiopages.AllPhotoReports') }}<i class="fa fa-arrow-circle-right"></i></span>
                     </a>
                  </footer>
               </div>
            </div>
        </div>
      </div>
   </div>
   @stop
   @section('footerscript2')
      <script type="text/javascript" src="{{asset('js/jquery.roundabout.js')}}"></script>
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            fade: true,
            arrows: false,
            autoplay:false
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            asNavFor: '.slider-for',
            focusOnSelect: true
        });
        $('.m-promo .slider-nav .slick-slide').each(function () {
            $(this).click(function (i, el) {
                $('.m-promo .slider-for .embed-responsive-item').each(function () {
                    $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
                });
            });
        });
    </script> 
   <script>
      if ($(window).width() > 768) {
        $('.carousel-slick_peredachi').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1
        });
        $('.carousel-slick').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1
      
        });
      }
      if ($(window).width() < 400) {
        $('.carousel-slick_peredachi').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1
      
        });
      }
      
      if ($(window).width() < 768) {
        $('.carousel-slick_peredachi').slick({
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 1
      
        });
      }
      if ($(window).width() < 768) {
        $('.carousel-slick').slick({
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 1
      
        });
      }

      $('.slider-anons').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3500,
      });
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
  
   @stop