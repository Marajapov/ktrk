@extends('Front::layouts.default')
@section('title', trans('site.Homepage').' | КТРК' )

@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-md-8">
            <div class="panel panel-default panel-top-news">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.Top news') }}</span></h3>
              </div>
              <div class="panel-body">
                @foreach($generalPosts as $post)
                  <div class="col-md-4 block">
                    <figure class="effect-zoe">
                      <!--<span class="post-timer pull-right">  <i class="fa fa-eye"></i>&nbsp;{{ $post->getViewed() }}</span> -->
                      <a href="{{ route('front.post', $post) }}" class="main-img">
                        <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="img26">
                      </a>
                      <!--<div class="news-channel">

                       <a href="#">
                        <img src="{{-- $post->isChannelIcon($post->channel_id) --}}" alt=""/>
                      </a>
                    </div>-->

                      <p class="description clearfix">
                        <a href="{{ route('front.category', $post->category) }}">
                          {{ $post->category('category_id')->first()->getTitle() }}
                        </a>

                      <span>
                        @if($post->getIsVideo() == 'yes')<i class="fa fa-play-circle-o"></i> @endif
                        @if($post->getIsPhoto() == 'yes') <i class="fa fa-picture-o"></i> @endif
                      </span>
                      </p>
                      <div class="news-title">
                        <a href="{{ route('front.post', $post) }}">
                          <!--<h2>{!! $result = substr($post->getTitle(),0,75) !!}...</h2> -->
                          {{ $post->getTitleRuOrKg() }}
                        </a>
                      </div>
                    </figure>
                  </div>
                @endforeach

                <footer>
                  <a href="{{ route('front.general') }}">
                    <span>{{ trans('site.FrontPostAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>
              </div>
            </div>

            <a href="#" class="text-center ads middle-ad">
              <img src="@if(!empty($positionLeft->file)) {{ asset($positionLeft->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt=""/>
            </a>

            <div class="panel panel-default panel-carousel peoplereporter">

              <div class="panel-body">

                <div class="col-md-3 heading">

                  <img src="{{ asset('images/locationcameramini2.png') }}">

                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <span>Элдик репортер</span>
                    </h3>
                    <p>Народный репортер</p>

                  </div>

                  <div class="panel-heading2">
                    <h3 class="panel-title">
                      <a href="{{ route('front.reporter') }}"><span>Жаңылык кошуу</span><span class="prrus">Добавить новость</span><i class="fa fa-file-text-o"></i></a>
                    </h3>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                      <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title" id="exampleModalLabel">Жаңылык жөнөтүү / Отправить новость</h3>
                          </div>

                          <div class="modal-body">
                            {!! Form::open(array('route' => 'admin.peopleReporter.store', 'enctype' => 'multipart/form-data', 'multiple'=>true, 'id'=>'addNews')) !!}

                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                  <label for="recipient-name" class="control-label">Аты жөнүңүз / Ваше имя </label>
                                  <input name="name" type="text" class="form-control" placeholder="Сизди ким деп тааныштырабыз / Как вас познакомить" id="recipient-name">
                                </div>
                                <div class="col-md-6">
                                  <label for="recipient-name" class="control-label">Телефонуңуз же Email / Телефон или Email</label>
                                  <input name="info" type="text" class="form-control" placeholder="Байланыш телефонуңуз же Email / Ваш контактный телефон или Email" id="recipient-name">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-12 textforma">
                                  <label for="message-text" class="control-label">Жаңылыктын мазмуну / Описание содержания:</label>
                                  <textarea name="question" class="form-control" placeholder="Жаңылыктын мазмуну, сүрөт жана видеолор боюнча маалымат / Содержание, информация по снимкам или видео" id="message-text"></textarea>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="file" class="control-label">Фото</label>
                              <div class="form-group">
                                <input name="photo" class="file" type="file">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="video" class="control-label">Видео</label>
                              <div class="form-group">
                                <input name="video" class="file" type="file">
                              </div>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу / Закрыть</button>
                              <input type="submit" name="submit" class="btn btn-primary" value="Кабарды жөнөтүү / Отправить новость">
                            </div>
                            {!! Form::close() !!}
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-9">
                  <div class="carousel carousel-reporter">
                    @if($reporterPosts)
                    @foreach($reporterPosts as $post)
                    <div class="col-md-4">
                      <a href="{{ route('front.post', $post) }}">
                        <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt=""/>
                      </a>
                      <div class="datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getYear() }}</div>
                      <div class="views"><i class="fa fa-eye"></i>&nbsp;{{ $post->getViewed() }}</div>
                      <p>{{ $post->getTitleRuOrKg() }}</p>
                    </div>
                    @endforeach
                    @endif

                  </div>
                </div>

              </div>
            </div>

          </div>

          <div class="top-right-block col-md-4">
            <div class="panel panel-default panel-promo">
              <div class="panel-heading">
                <h3 class="panel-title" id="videoTitle"><span>{{ trans('site.FrontPostDaysNews') }}</span></h3>
              </div>
              <div class="panel-body main-video">

                <div class="slider slider-for">

                  <div> <!-- video1 -->
                    <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo1){{$dayVideo1->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer" allowfullscreen=""></iframe>
                    </div>
                    <div class="slick-text">
                      <a href="{{ route('front.media.video', $dayVideo1) }}">
                        <h2>@if($dayVideo1){{ $dayVideo1->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif</h2>
                      </a>
                    </div>
                  </div>

                  <div> <!-- video2 -->
                    <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo2){{$dayVideo2->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer" allowfullscreen=""></iframe>
                    </div>
                    <div class="slick-text">
                      <a href="{{ route('front.media.video', $dayVideo2) }}">
                        <h2>@if($dayVideo2){{ $dayVideo2->getName() }} @else {{ trans('site.FrontPostDaysEpisode') }} @endif</h2>
                      </a>
                    </div>
                  </div>

                  <div> <!-- video3 -->
                    <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo3){{$dayVideo3->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer" allowfullscreen=""></iframe>
                    </div>
                    <div class="slick-text">
                      <a href="{{ route('front.media.video', $dayVideo3) }}">
                        <h2>@if($dayVideo3){{ $dayVideo3->getName() }} @else {{ trans('site.FrontPostDaysAnons') }} @endif</h2>
                      </a>
                    </div>
                  </div>

                  <div> <!-- video4 -->
                    <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo4){{$dayVideo4->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer" allowfullscreen=""></iframe>
                    </div>
                    <div class="slick-text">
                      <a href="{{ route('front.media.video', $dayVideo4) }}">
                        <h2>@if($dayVideo4){{ $dayVideo4->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h2>
                      </a>
                    </div>
                  </div>

                </div>
                <div class="slider slider-nav">
                  <div>
                    <span class="videoTitle hidden">{{ trans('site.FrontPostDaysNews') }}</span>
                    <img src="http://img.youtube.com/vi/@if($dayVideo1){{$dayVideo1->getUrl()}}@else{{$defaultVideo}}@endif/mqdefault.jpg" alt="" />
                    <h4>@if($dayVideo1){{ $dayVideo1->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h4>
                  </div>
                  <div>
                    <span class="videoTitle hidden">{{ trans('site.FrontPostDaysEpisode') }}</span>
                    <img src="http://img.youtube.com/vi/@if($dayVideo2){{$dayVideo2->getUrl()}}@else{{$defaultVideo}}@endif/mqdefault.jpg" alt="" />
                    <h4>@if($dayVideo2){{ $dayVideo2->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h4>
                  </div>
                  <div>
                    <span class="videoTitle hidden">{{ trans('site.FrontPostDaysAnons') }}</span>
                    <img src="http://img.youtube.com/vi/@if($dayVideo3){{$dayVideo3->getUrl()}}@else{{$defaultVideo}}@endif/mqdefault.jpg" alt="" />
                    <h4>@if($dayVideo3){{ $dayVideo3->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h4>
                  </div>

                  <div>
                    <span class="videoTitle hidden">{{ trans('site.FrontPostDaysMaanai') }}</span>
                    <img src="http://img.youtube.com/vi/@if($dayVideo4){{$dayVideo4->getUrl()}}@else{{$defaultVideo}}@endif/mqdefault.jpg" alt="" />
                    <h4>@if($dayVideo4){{ $dayVideo4->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h4>
                  </div>
                </div>

                <footer>
                  <a href="{{ route('front.media.index') }}">
                    <span>{{ trans('site.FrontVideoAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>

              </div>
            </div>

            <a href="#" class="text-center ads ads-300x250 middle-ad">
              <img src="@if(!empty($positionRight->file)) {{ asset($positionRight->file) }} @else {{ asset('images/banner_300x250.png') }} @endif" alt="phot1"/>
            </a>

          </div>

          <div class="bottom-left-block col-md-4">
            <div class="panel panel-default latest-news">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.FrontPostLastNews') }}</span></h3>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  @foreach($latestPosts as $post)
                    <li class="list-group-item news-item">
                      <div class="news-body clearfix">
                        <a href="{{ route('front.post', $post) }}">
                          <p class="news-title">{{ $post->getTitleRuOrKg() }}</p>
                          <span class="ctg"><img src="@if($post->channel_id){{ $post->isChannelIcon($post->channel_id)}}@else {{ asset('images/logo_notext.png') }} @endif" alt=""/></span>
                        </a>
                      </div>
                      <div class="news-adds clearfix">
                        <a href="{{ route('front.category', $post->category) }}" class="">{{ $post->category('category_id')->first()->title }}</a>

                            <span class="news-file">
                              @if($post->getIsVideo() == 'yes')<i class="fa fa-play-circle-o"></i> @endif
                              @if($post->getIsPhoto() == 'yes')<i class="fa fa-picture-o"></i> @endif
                            </span>
                        <span class="news-time pull-right"> {{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                        <span class="news-timer pull-right"><i class="fa fa-eye"></i>&nbsp;{{ $post->getViewed() }}</span>

                      </div>
                      <div class="clearfix"></div>
                    </li>
                  @endforeach

                </ul>

                <footer>
                  <a href="{{ route('front.general') }}">
                    <span>{{ trans('site.FrontPostAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>

              </div>
            </div>

            <div class="panel panel-default panel-director">
              <div class="panel-heading">
                <h3 class="panel-title director-title">
                  <a class="director-img" href="{{ route('front.pages.director') }}">
                    <img src="{{ asset('images/manager.png') }}" alt="директор"/>
                  </a>
                  <a class="director-text" href="{{ route('front.pages.director') }}">{{ trans('site.FrontDirectorPage') }}</a>
                </h3>
              </div>
              <div class="panel-body">

                <div class="">
                  <div class="carousel carousel-director">

                    @if($directorPosts)
                      @foreach($directorPosts as $post)
                        <div>

                          <a href="{{ route('front.post', $post) }}">
                            <img src="@if(!($post->thumbnail_big))images/live_bg.png @else {{ asset($post->thumbnail_big) }} @endif" alt=""/>
                          </a>
                          <a href="{{ route('front.post', $post) }}">
                            {{ $post->getTitleRuOrKg() }}
                          </a>
                        </div>
                      @endforeach
                    @else
                      <div>
                        <a href="#">
                          <img src="{{ asset('images/gallery/001.jpg') }}" alt=""/>
                        </a>
                        <a href="#">
                          Мы разворачиваем масштабную работу по реализации проекта «Ухта — Торжок-2». Задачи поставлены, сроки определены. До конца 2019 года газопровод будет построен и готов к эксплуатации.
                        </a>
                      </div>
                    @endif

                  </div>
                </div>

                <footer>
                  <a href="{{ route('front.pages.director') }}">
                    <span>{{ trans('site.FrontToDirectorPage') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>
              </div>
            </div>

          </div>

          <div class="bottom-right-block col-md-8">
            <div class="panel panel-default videoportal">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="{{ route('front.media.index') }}"><span>Видеопортал</span></a></h3>
              </div>
              <div class="panel-body">

                <ul id="filters" class="clearfix">
                  <li><span class="filter active" data-filter="total">{{ trans('site.AllVideos') }}</span></li>
                  @foreach($MediaCategories as $key => $MediaCategory)
                    <li><span class="filter" data-filter="{{ $MediaCategory->getVideoType() }}">{{ $MediaCategory->getName() }}</span></li>
                  @endforeach
                </ul>

                <div id="portfoliolist">
                  @foreach($mediaLastVideos as $key=>$media)
                    <div class="portfolio total" data-cat="total">
                      <div class="portfolio-wrapper">
                        <div class="media-image">
                          <a href="{{ route('front.media.video', $media) }}">
                            <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/mqdefault.jpg" alt="" />
                            <i class="fa fa-youtube-play"></i>
                          </a>
                          @if(($media->getProgramName()))
                            <div class="label">
                              <div class="label-text">
                                <a href="{{ route('front.media.project', $media->program) }}" title="{{ $media->getProgramName() }}" class="text-title">{{ $media->getProgramName() }}</a>
                              </div>
                              <div class="label-bg"></div>
                            </div>
                          @endif
                        </div>
                        <div class="media-title">
                          <a href="{{ route('front.media.video', $media) }}">
                            <h4>{{ $media->getName() }}</h4>
                          </a>
                        </div>

                      </div>
                    </div>
                  @endforeach

                  @foreach($MediaCategories as $key=>$MediaCategory)

                    @foreach($categoriesVideos as $key => $media)

                      @foreach($media as $row)

                        @if($row->videoType == $MediaCategory->videoType)
                          <div class="portfolio {{ $row->getVideoType() }}" data-cat="{{ $row->getVideoType() }}">
                            <div class="portfolio-wrapper">
                              <div class="media-image">
                                <a href="{{ route('front.media.video', $row) }}">
                                  <img src="http://img.youtube.com/vi/{{ $row->getUrl()}}/mqdefault.jpg" alt="" />
                                  <i class="fa fa-youtube-play"></i>
                                </a>
                                @if(($row->getProgramName()))
                                  <div class="label">
                                    <div class="label-text">
                                      <a href="{{ route('front.media.video', $row) }}" title="{{ $row->getProgramName() }}" class="text-title">{{ $row->getProgramName() }}</a>
                                    </div>
                                    <div class="label-bg"></div>
                                  </div>
                                @endif
                              </div>
                              <div class="media-title">
                                <a href="{{ route('front.media.video', $row) }}">
                                  <h4>{{ $row->getName() }}</h4>
                                </a>
                              </div>
                            </div>
                          </div>
                        @endif

                      @endforeach

                    @endforeach

                  @endforeach

                </div>

                <div class="clearfix"></div>

                <footer>
                  <a href="{{ route('front.media.index') }}">
                    <span>{{ trans('site.FrontVideoAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>

                </footer>

              </div>
            </div>

            <a href="#" class="text-center ads">
              <img src="@if(!empty($positionCenter->file)) {{ asset($positionCenter->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt=""/>
            </a>

            <div class="panel panel-default panel-carousel gallery">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a href="{{ route('front.gallery.galleries') }}"><span>Фотогалерея</span></a>
                  {{--<a class="all" href="{{ route('front.gallery.galleries') }}">{{ trans('site.FrontGalleryAll') }} <i class="fa fa-arrow-circle-right"></i></a>--}}
                </h3>
              </div>
              <div class="panel-body">
                <div class="col-md-12">
                  <div class="carousel-slick">
                    @if($photoGalleries)
                      @foreach($photoGalleries as $photoGallery)

                        <div class="col-md-4">
                          <a href="{{ route('front.gallery', $photoGallery) }}">
                            <img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/><span>{{ $photoGallery->getName() }}</span>
                            <div class="overlay"></div>
                            <i class="fa fa-camera"></i>
                          </a>
                        </div>

                      @endforeach
                    @endif
                  </div>
                </div>

                <footer>
                  <a href="{{ route('front.gallery.galleries') }}">
                    <span>{{ trans('site.FrontGalleryAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>

                </footer>

              </div>
            </div>

          </div>
        </div>

      </section>

    </div>

  </div>

@stop

@section('footerScript')

  <script type="text/javascript">
    $(function () {

      var filterList = {

        init: function () {

          // MixItUp plugin
          // http://mixitup.io
          $('#portfoliolist').mixitup({
            showOnLoad: 'total',
            targetSelector: '.portfolio',
            filterSelector: '.filter',
            effects: ['fade'],
            easing: 'snap'
            // call the hover effect
          });

        }

      };
      // Run the show!
      filterList.init();
    });
  </script>
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

    $('.slider-nav .slick-slide').each(function () {
      $(this).click(function (i, el) {
        $('.slider-for .embed-responsive-item').each(function () {
          $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
        });

      });
    });
  </script>
@endsection