@extends('Front::layouts.default')
@section('title', "Главная страница")

@section('content')

  <!-- <div class="pogoda">
  <script>var yaWDefCity=27612;</script><script type="text/javascript" src="http://ru.commontools.net/geoip/ya.w.v2.ini.js" target="_blank" style="background:red"></script>
  <script type="text/javascript">document.write('<'+'script type="text/javascript" src="http://ru.commontools.net/geoip/ya.w.v2.js?def_country=159&def_city=27612&user_city='+yaWCityIndex+'"target="_blank"><'+'/script>');</script>
  <script type="text/javascript">document.write('<a href="http://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*http://pogoda.yandex.ru/'+yaWCityCode+'"target="_blank"><img src="http://info.weather.yandex.net/'+yaWCityCode+'/3_white.ru.png"target="_blank" border="0" /></a>');</script>
  </div> -->
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
                    <img src="@if(empty($post->getFile()))images/2.jpg @else {{ asset($post->getFile()) }} @endif" alt="img26">
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
                    <a class="news-title" href="{{ route('front.post', $post) }}">
                      <!--<h2>{!! $result = substr($post->getTitle(),0,75) !!}...</h2> -->
                      <h2>{{ $post->getTitle() }}</h2>
                    </a>
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
              <img src="@if(!empty($positionCenter->file)) {{ asset($positionCenter->file) }} @else images/ads_1.jpg @endif" alt=""/>
            </a>



            <div class="panel panel-default panel-carousel peoplereporter">

              <div class="panel-body">

                <div class="col-md-3 heading">

                  <img src="images/locationcameramini2.png">

                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <span>Элдик репортер</span>
                    </h3>
                    <p>Народный репортер</p>

                  </div>

                  <div class="panel-heading2">
                    <h3 class="panel-title">
                      <a  type="button" data-toggle="modal" data-target="#exampleModal"><span>Жаңылык кошуу</span><span class="prrus">Добавить новость</span><i class="fa fa-file-text-o"></i></a>
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
                    <div class="col-md-4">
                      <a href="">
                        <img src="images/1.jpg" alt=""/>
                      </a>
                      <div class="datetime">12:11:2015</div>
                      <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                      <p>Бүгүн Дордойдо курткалар аябагандай көп сатылды</p>
                    </div>
                    <div class="col-md-4">
                      <a href="">
                        <img src="images/2.jpg" alt=""/>
                      </a>
                      <div class="datetime">12:11:2015</div>
                      <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                      <p>Суук түшкөндөн бери, эшикте аябай суук болууда</p>
                    </div>
                    <div class="col-md-4">
                      <a href="">
                        <img src="images/gallery/002.jpg" alt=""/>
                      </a>
                      <div class="datetime">12:11:2015</div>
                      <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                      <p>Маршруткалар маселесин эртерээк чечпесес жакында транспорттук коллапс башталат </p>
                    </div>
                    <div class="col-md-4">
                      <a href="">
                        <img src="images/gallery/002.jpg" alt=""/>
                      </a>
                      <div class="datetime">12:11:2015</div>
                      <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                      <p>Маршруткалар маселесин эртерээк чечпесе жакында транспорттук коллапс башталат </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>

          <div class="top-right-block col-md-4">
            <div class="panel panel-default panel-promo">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.FrontPostDaysVideo') }}</span></h3>
              </div>
              <div class="panel-body">
                <div class="col-md-12 block main-video">
                  <div class="embed-responsive embed-responsive-16by9">

                    @foreach($dayVideos as $dayVideo)
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{ $dayVideo->getUrl()}}" allowfullscreen=""></iframe>
                    @endforeach

                  </div>

                  <h4>Стратегия-2017</h4>
                </div>

                <div class="clearfix"></div>

                <h4 class="old-videos text-center">{{ trans('site.FrontPostLastDays') }}</h4>

                <div class="col-md-6 block main-video">
                  <div class="embed-responsive embed-responsive-16by9">

                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/KhJUlC4aJZM" allowfullscreen=""></iframe>

                  </div>

                  {{-- <h4>Жеткиликтүү насыя</h4> --}}
                </div>

                <div class="col-md-6 block main-video">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/k2w8UII9cgI" allowfullscreen=""></iframe>
                  </div>

                  {{-- <h4>Мандаттар</h4> --}}
                </div>

                <div class="col-md-6 block main-video">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/k2w8UII9cgI" allowfullscreen=""></iframe>
                  </div>

                  {{-- <h4>Мандаттар</h4> --}}
                </div>

                <div class="col-md-6 block main-video">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/k2w8UII9cgI" allowfullscreen=""></iframe>
                  </div>

                  {{-- <h4>Мандаттар</h4> --}}
                </div>

                <footer>
                  <a href="#">
                    <span>{{ trans('site.FrontVideoAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>

              </div>
            </div>

            <a href="#" class="text-center ads ads-300x250 middle-ad">
              <img src="@if(!empty($positionRight->file)) {{ asset($positionRight->file) }} @else images/ads_300x250.gif @endif" alt="phot1"/>
            </a>

          </div>

          <div class="bottom-left-block col-md-4">
            <div class="panel panel-default latest-news">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.FrontPostLastNews') }}</span></h3>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  @foreach($generalPosts as $post)
                    <li class="list-group-item news-item">
                      <div class="news-body clearfix">
                        <a href="{{ route('front.post', $post) }}">
                          <p class="news-title">{{ $post->getTitle() }}</p>
                          <span class="ctg"><img src="{{ $post->isChannelIcon($post->channel_id)}}" alt=""/></span>
                        </a>
                      </div>
                      <div class="news-adds clearfix">
                        <a href="{{ route('front.category', $post->category) }}" class="">{{ $post->category('category_id')->first()->title }}</a>

                            <span class="news-file">
                              @if($post->getIsVideo() == 'yes')<i class="fa fa-play-circle-o"></i> @endif
                              @if($post->getIsPhoto() == 'yes')<i class="fa fa-picture-o"></i> @endif
                            </span>
                        <span class="news-time pull-right"> {{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getYear()}}</span>
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
                  <a class="director-img" href="#">
                    <img src="images/chief.jpg" alt="директор"/>
                  </a>
                  <a class="director-text" href="{{ route('front.pages.director') }}">{{ trans('site.FrontDirectorPage') }}</a>
                </h3>
              </div>
              <div class="panel-body">

                <div class="col-md-12">
                  <div class="carousel carousel-director">
                    <div>
                      <a href="#">
                        <img src="images/chief_2.jpg" alt=""/>
                      </a>
                      <a href="#">
                        Мы разворачиваем масштабную работу по реализации проекта «Ухта — Торжок-2». Задачи поставлены, сроки определены. До конца 2019 года газопровод будет построен и готов к эксплуатации.
                      </a>
                    </div>
                    <div>
                      <a href="#">
                        <img src="images/chief_3.jpg" alt=""/>
                      </a>
                      Мы разворачиваем масштабную работу по реализации проекта «Ухта — Торжок-2». Задачи поставлены, сроки определены. До конца 2019 года газопровод будет построен и готов к эксплуатации.
                    </div>
                    <div>
                      <a href="#">
                        <img src="images/chief.jpg" alt=""/>
                      </a>
                      Мы разворачиваем масштабную работу по реализации проекта «Ухта — Торжок-2». Задачи поставлены, сроки определены. До конца 2019 года газопровод будет построен и готов к эксплуатации.
                    </div>
                  </div>
                </div>

                <footer>
                  <a href="#">
                    <span>{{ trans('site.FrontToDirectorPage') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>
              </div>
            </div>

          </div>

          <div class="bottom-right-block col-md-8">
            <div class="panel panel-default videoportal">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="#"><span>Видеопортал</span></a></h3>
              </div>
              <div class="panel-body">

                <ul id="filters" class="clearfix">
                  @foreach($MediaCategories as $key => $MediaCategory)
                    <li><span class="filter @if($key == 0) active @endif" data-filter="{{ $MediaCategory->getVideoType() }}">{{ $MediaCategory->getName() }}</span></li>
                  @endforeach
                </ul>

                <div id="portfoliolist">
                  @foreach($mediaPosts as $media)
                    <div class="portfolio {{ $media->getVideoType() }}" data-cat="{{ $media->getVideoType() }}">
                      <div class="portfolio-wrapper">
                        <a href="{{ route('front.media.video', $media) }}">
                          <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/mqdefault.jpg" alt="" />
                        </a>
                        <div class="label">
                          <div class="label-text">
                            <a class="text-title">{{ $media->getName() }}</a>
                          </div>
                          <div class="label-bg"></div>
                        </div>
                      </div>
                    </div>
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
              <img src="@if(!empty($positionCenter->file)) {{ asset($positionCenter->file) }} @else images/ads_1.jpg @endif" alt=""/>
            </a>

            <div class="panel panel-default panel-carousel gallery">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a href="#"><span>Фотогалерея</span></a>
                  <a class="all" href="#">{{ trans('site.FrontGalleryAll') }} <i class="fa fa-arrow-circle-right"></i></a>
                </h3>
              </div>
              <div class="panel-body">
                <div class="col-md-12">
                  <div class="carousel-slick">
                    <div class="col-md-4"><a href="#"><img src="images/gallery/001.jpg" alt=""/><span>Название</span><div class="overlay"></div></a>
                    </div>
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


            <!-- @if(!empty($parentId))
                @foreach($photoChilds as $photoChild)
                <div class="col-md-4">
                <a href="#"><img src="{{ asset($photoChild->getFile()) }}" alt=""/><span>Название</span>
                <div class="overlay"></div>
              </a>
            </div>
            @endforeach
            @endif  -->

          </div>
        </div>

      </section>

    </div>

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
            showOnLoad: 'all',
            targetSelector: '.portfolio',
            filterSelector: '.filter',
            effects: ['fade'],
            easing: 'snap',
            // call the hover effect
          });

        }

      };
      // Run the show!
      filterList.init();
    });
  </script>
@endsection
