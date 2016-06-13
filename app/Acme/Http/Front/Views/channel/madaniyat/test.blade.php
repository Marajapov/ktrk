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
                 @if($banner->first())
                    @foreach($banner as $banner)
                    <a href="#">
                      <img src="{{asset($banner->thumbnail)}}" alt="{{ $banner->getNameOne() }}" class="slide" />
                    </a>
                    @endforeach
                  @endif
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
                            @if($anons->first())
                              @foreach($anons as $row)
                              <div>
                                  <img src="{{asset($row->thumbnail)}}" alt="{{ $row->getNameOne() }}">
                              </div>
                              @endforeach
                            @endif
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
                          <span class="mb_substr pn-substr" style="display: block;">
                            {{$post->getShortDescription()}}
                          </span>
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
                        @foreach($projectList as $project)
                        <li class="list-group-item">
                          <a href="{{ route('madaniyat.media.project', $project) }}">{{ $project->getNameOne() }}</a>
                        </li>
                        @endforeach
                      </ul>
                  </div>
                  <div class="col-md-9 panel-videos no-padding">

                      @if($media)
                        @foreach($media as $media)
                          <article class="col-md-4" data-cat="all-videos">
                            <div class="img">
                              <a href="{{ route('madaniyat.media.video', $media) }}">
                                <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail) }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="">
                                <div class="overlay">
                                  <i class="fa-view"></i>
                                  <span class="media-view">{{ $media->viewed }}</span>
                                     @if(($media->getProgramName()))
                                          <span class="media-project">
                                              {{ $media->getProgramName() }}
                                          </span>
                                       @endif
                                  <span class="media-date">{{ $media->getDateFormatted() }}</span>
                                </div>
                                <i class="fa-video"></i>
                              </a>
                            </div>
                            <div class="media-title">
                              <a href="{{ route('madaniyat.media.video', $media) }}">
                                <h4>{{ $media->getName() }}</h4>
                              </a>
                            </div>
                          </article>
                        @endforeach
                      @endif
                  </div>
                  <footer>
                     <a href="{{ route('madaniyat.media.all') }}">
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