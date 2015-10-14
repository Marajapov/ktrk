@extends('Front::layouts.default')
@section('title', "Главная страница")

@section('content')

    <div class="container main-wrapper">
        <div class="row">
            <section class="content clearfix">

                <div class="clearfix">
                    <div class="top-left-block col-md-8">
                        <div class="panel panel-default panel-top-news">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Топ жаңылыктар</span></h3>
                            </div>
                            <div class="panel-body">
                                @foreach($generalPosts as $post)
                                <div class="col-md-4 block">
                                    <figure class="effect-zoe">
                                        <a href="{{ route('front.post', $post) }}" class="main-img"><img src="@if(empty($post->getFile()))images/2.jpg @else {{ asset($post->getFile()) }} @endif" alt="img26"><i class="fa fa-play-circle-o"></i></a>
                                        <div class="news-channel">
                                            <a href="channel.html"><img src="images/channels/balastan.png" alt=""/></a>
                                        </div>
                                        <figcaption>
                                            <h2><a href="article.html">{{ $post->getTitle() }}</a></h2>
                                            <p class="description"><a href="category.html">{{ $post->category('category_id')->first()->name }}</a></p>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach

                                <footer>
                                    <a href="{{ route('front.general') }}">
                                        <span>Бардык жаңылыктар <i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>
                            </div>
                        </div>

                        <a href="#" class="text-center ads">
                            <img src="images/ads_1.jpg" alt=""/>
                        </a>

                        <div class="panel panel-default panel-carousel">
                            <div class="panel-body">
                                <div class="col-md-3 heading">
                                    <div class="row">
                                        <h4><i class="fa fa-users"></i><span>Элдик репортер</span></h4>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="carousel">
                                        <div class="col-md-4"><img src="images/image.jpeg" alt=""/></div>
                                        <div class="col-md-4"><img src="images/image.jpeg" alt=""/></div>
                                        <div class="col-md-4"><img src="images/image.jpeg" alt=""/></div>
                                        <div class="col-md-4"><img src="images/image.jpeg" alt=""/></div>
                                        <div class="col-md-4"><img src="images/image.jpeg" alt=""/></div>
                                        <div class="col-md-4"><img src="images/image.jpeg" alt=""/></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="top-right-block col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Күндүн видеосу</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 block main-video">
                                    <div class="embed-responsive embed-responsive-16by9">

                                    @foreach($dayVideos as $dayVideo)
                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{ $dayVideo->getUrl()}}" allowfullscreen=""></iframe>
                                    @endforeach

                                    </div>

                                    <h4>Video title</h4>
                                </div>

                                <div class="clearfix"></div>

                                <h4 class="old-videos text-center">Өткөн күндөр</h4>

                                <div class="col-md-6 block main-video">
                                    <div class="embed-responsive embed-responsive-16by9">

                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/" allowfullscreen=""></iframe>

                                    </div>

                                    <h4>Video title</h4>
                                </div>

                                <div class="col-md-6 block main-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/k2w8UII9cgI" allowfullscreen=""></iframe>
                                    </div>

                                    <h4>Video title</h4>
                                </div>

                                <footer>
                                    <a href="#">
                                        <span>Архив <i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>

                            </div>
                        </div>

                        <a href="#" class="text-center ads ads-300x250">
                            <img src="images/ads_300x250.gif" alt=""/>
                        </a>

                    </div>

                </div>



                <div class="bottom-left-block col-md-4">
                    <div class="panel panel-default latest-news">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Акыркы жаңылыктар</span></h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($generalPosts as $post)
                                <li class="list-group-item news-item">
                                    <div class="news-body clearfix">
                                        <a href="{{ route('front.post', $post) }}">
                                            <p class="news-title">{{ $post->getTitle() }}</p>
                                            <span class="ctg"><img src="images/logo_notext.png" alt=""/></span>
                                        </a>
                                    </div>
                                    <div class="news-adds clearfix">
                                        <a href="#" class="">{{ $post->category('category_id')->first()->name }}</a>
                                        <span class="news-file"><i class="fa fa-play-circle-o"></i></span>

                                        <span class="news-time pull-right">{{ $post->getViewed() }}, {{ $post->getCreated() }}</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                @endforeach

                            </ul>

                            <footer>
                                <a href="#">
                                    <span>Бардык жаңылыктар <i class="fa fa-arrow-circle-right"></i></span>
                                </a>
                            </footer>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Башкы директордун баракчасы</span></h3>
                        </div>
                        <div class="panel-body">
                            <div id="slideshow">
                                <div>
                                    <a href="#">
                                        <img src="images/chief.jpg" alt="директор"/>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="images/chief_3.jpg">
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="images/chief_2.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="bottom-right-block col-md-8">
                    <div class="panel panel-default videoportal">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Видеопортал</span></h3>
                        </div>
                        <div class="panel-body">                            
                            <div class="col-md-12">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs videos-block" role="tablist">
                                    <li role="presentation" class="active"><a href="#all-videos" aria-controls="all-videos" role="tab" data-toggle="tab">Бардык</a></li>
                                    <li role="presentation"><a href="#tele" aria-controls="tele" role="tab" data-toggle="tab">Телеберүүлөр</a></li>
                                    <li role="presentation"><a href="#serial" aria-controls="serial" role="tab" data-toggle="tab">Сериалдар</a></li>
                                    <li role="presentation"><a href="#tasma" aria-controls="tasma" role="tab" data-toggle="tab">Көркөм тасма</a></li>
                                    <li role="presentation"><a href="#maanai" aria-controls="maanai" role="tab" data-toggle="tab">Маанайшат</a></li>
                                    <li role="presentation"><a href="#sport" aria-controls="sport" role="tab" data-toggle="tab">Спорт</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    @foreach($mediaAll as $key=> $media)
                                    <div role="tabpanel" class="tab-pane @if($key == 0) active @else active @endif clearfix" id="{{$media->getResourceType()}}">
                                        <div class="row">

                                            <article class="col-md-4">
                                                <a href="#" class="img">
                                                    <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/mqdefault.jpg" alt=""/>
                                                    <h4><i class="fa fa-play-circle-o"></i>Замана</h4>
                                                </a>
                                                <a href="#" class="title">
                                                    <h4>{{ $media->getName()}}</h4>
                                                </a>
                                            </article>

                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>


                            <div class="clearfix"></div>

                            <footer>
                                <a href="#">
                                    <span>Архив <i class="fa fa-arrow-circle-right"></i></span>
                                </a>
                            </footer>

                        </div>
                    </div>

                    <a href="#" class="text-center ads">
                        <img src="images/ads_1.jpg" alt=""/>
                    </a>

                    <div class="panel panel-default panel-apps">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Мобилдүү колдонмолор</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-9">
                                <p>
                                    Загрузив мобильное приложение Общественной телерадиовещательной корпорации вы сможете смотреть:
                                </p>
                                <ul>
                                    <li>
                                        прямой эфир Общественного первого канала;
                                    </li>
                                    <li>
                                        прямой эфир телеканала “Музыка”;
                                    </li>
                                    <li>
                                        просмотреть все выпуски новостей и телепередач;
                                    </li>
                                    <li>
                                        слушать радиостанции: Биринчи радио, Кыргыз радиосу, радио “Достук”, радио “Миң кыял FM”.
                                    </li>
                                </ul>
                                <p>
                                    Скачивайте, делитесь с друзьями и комментируйте! Приложение на кыргызском и русском языках доступно в Google Play Market и AppStore.
                                </p>
                                <p>
                                    <strong>Мобильное приложение КТРК</strong> - это удобно, быстро и легко!
                                </p>
                            </div>
                            <div class="col-md-3 apps-logo">
                                <div class="row">
                                    <a href="#" class="android">
                                        <img src="images/android.png" alt=""/>
                                    </a>
                                    <a href="#" class="ios">
                                        <img src="images/ios.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </div>

    </div>
@stop