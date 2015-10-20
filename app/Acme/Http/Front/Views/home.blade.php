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
                                        <a href="{{ route('front.post', $post) }}" class="main-img">
                                            <img src="@if(empty($post->getFile()))images/2.jpg @else {{ asset($post->getFile()) }} @endif" alt="img26">
                                            <i class="fa fa-play-circle-o"></i></a>
                                        <div class="news-channel">
                                            <a href="channel.html">
                                                <img src="{{ $post->isChannelIcon($post->channel_id)}}" alt=""/>
                                            </a>
                                        </div>                                    
                                        <p class="description clearfix">
                                           <a href="{{ route('front.category', $post->category) }}">{{ $post->category('category_id')->first()->title }}</a>
                                           <span><i class="fa fa-play-circle-o"></i><i class="fa fa-picture-o"></i></span>
                                        </p>
                                        <a class="news-title" href="{{ route('front.post', $post) }}">
                                            <h2>{!! $result = substr($post->getTitle(),0,75) !!}...</h2>                                            
                                        </a>
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
                            <img src="@if(!empty($positionRight->file)) {{ asset($positionRight->file) }} @else images/ads_300x250.gif @endif" alt="phot1"/>
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
                                            <span class="ctg"><img src="{{ $post->isChannelIcon($post->channel_id)}}" alt=""/></span>
                                        </a>
                                    </div>
                                    <div class="news-adds clearfix">
                                        <a href="{{ route('front.category', $post->category) }}" class="">{{ $post->category('category_id')->first()->title }}</a>
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

                            <ul id="filters" class="clearfix">
                            @foreach($MediaCategories as $key => $MediaCategory)
                                <li><span class="filter @if($key == 0) active @endif" data-filter="{{ $MediaCategory->getVideoType() }}">{{ $MediaCategory->getName() }}</span></li>
                            @endforeach 
                            </ul>

                        <div id="portfoliolist">
                        @foreach($mediaPosts as $media)
                            <div class="portfolio {{ $media->getVideoType() }}" data-cat="{{ $media->getVideoType() }}">
                                <div class="portfolio-wrapper">
                                    <a href="{{ route('front.media', $media) }}">
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
                                <a href="#">
                                    <span>Архив <i class="fa fa-arrow-circle-right"></i></span>
                                </a>
                            </footer>

                        </div>
                    </div>

                    <a href="#" class="text-center ads">
                        <img src="images/ads_1.jpg" alt=""/>
                    </a>

                    <div class="panel panel-default panel-carousel gallery">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Фотогалерея</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
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

            </section>

        </div>

    </div>

    <div class="container">
            <div class="col-md-12 apps-logo">
                <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                        <a href="#" class="android">
                            <img src="images/android.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="ios">
                            <img src="images/ios.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop