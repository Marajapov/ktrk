@extends('Front::channel.madaniyat.default')
@section('title', trans('radiopages.Homepage'))
@section('styles')
    <link rel="stylesheet" href="{{asset('css/articles.css')}}">
@endsection
@section('content')
    <body class="madaniyat">
    @include('Front::channel.madaniyat.nav')
    <div class="container m-container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 120px;">
                <div class="panel panel-default" style="background-color: transparent">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12 block">
                            <div id="carousel">
                                @if($banner->first())
                                    @foreach($banner as $banner)
                                        <a href="{{ $banner->url }}">
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
                            <div class="col-md-8 no-padding">
                                <div class="panel panel-default">
                                    <div class="panel-heading madaniyatcolor">
                                        <h3 class="panel-title"><span>{{ trans('radiopages.MadaniyatNews') }}</span></h3>
                                    </div>
                                    <div class="panel-body panel-news">
                                        <div class="row">
                                            @if($postAll)
                                                @foreach($postAll as $post)
                                                    <article class="col-md-6 no-padding">
                                                        <div class="col-md-12 news-top">
                                                            <a href="{{ route('madaniyat.news', [$post, $lc]) }}">
                                                                <div class="box">
                                                                    <div class="carousel-caption">{{ $post->getTitleRuOrKg() }}</div>
                                                                    <img class="img-responsive" src="{{ asset($post->getFileBig()) }}" alt="">
                                                                    <div class="overlay"></div>
                                                                    <div class="info">
                                                                        <p>
                                                                            {{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </article>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding">
                                <div class="panel panel-default">
                                    <div class="panel-body panel-news">
                                        <div class="row">

                                            @if($topArticles)

                                                <div class="panel panel-default panel-articles panel-top-articles">
                                                    <div class="panel-heading hidden">
                                                        <h3 class="panel-title"><span>{{ trans('site.PostAktualno') }}</span></h3>
                                                    </div>
                                                    <div class="panel-body">

                                                        <div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <!-- Nav tabs -->
                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                        <li role="presentation" class="active"><a href="#main" aria-controls="home" role="tab" data-toggle="tab">{{ trans('site.PostMain') }}</a></li>
                                                                        <li role="presentation"><a href="#popular" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('site.PostPopular') }}</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane fade in active" id="main">
                                                                    @foreach($topArticles as $post)

                                                                        <div class="media">

                                                                            <div class="media-body">
                                                                                <div class="extra">
                                                                                    <span class="e-datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}</span>
                                                                                    @if($madaniyatProjects)
                                                                                        @foreach($madaniyatProjects as $project)
                                                                                            <a class="e-cat text-uppercase" href="{{ route('madaniyat.projects', $project) }}">
                                                                                                <span>
                                                                                                  @if($project->id == $post->madaniyatProgram)
                                                                                                        {{ ($project->getName()) }}
                                                                                                    @endif
                                                                                                </span>
                                                                                            </a>
                                                                                        @endforeach
                                                                                    @endif
                                                                                    <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                                                                </div>
                                                                                <a class="media-heading" href="{{ route('madaniyat.news', [$post, $lc]) }}">
                                                                                    {{ $post->getTitleRuOrKg() }}
                                                                                    @if($post->getIsVideo() == 'yes')<i class="fa fa-video-camera"></i> @endif
                                                                                    @if($post->getIsPhoto() == 'yes')<i class="fa fa-camera"></i> @endif
                                                                                </a>
                                                                            </div>

                                                                        </div>

                                                                    @endforeach
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade" id="popular">
                                                                    @foreach($popArticles as $post)
                                                                        <div class="media">
                                                                            <div class="media-body">
                                                                                <div class="extra">
                                                                                    <span class="e-datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}</span>
                                                                                    @if($madaniyatProjects)
                                                                                        @foreach($madaniyatProjects as $project)
                                                                                            @if($project->id == $post->madaniyatProgram)
                                                                                                <a class="e-cat text-uppercase" href="{{ route('madaniyat.projects', $project) }}">
                                                                        <span>

                                                                          {{ ($project->getName()) }}

                                                                        </span>
                                                                                                </a>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                    <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                                                                </div>
                                                                                <a class="media-heading" href="{{ route('madaniyat.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            @endif

                                        </div>
                                        <footer>
                                            <a href="{{ route('madaniyat.allnews') }}">
                                                <span>{{ trans('radiopages.Morenews')}}<i class="fa fa-arrow-circle-right"></i></span>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 panel-avi">
                <div class="row">
                    <div class="panel panel-default panel-anons-video panel-soonnew">
                        <div class="panel-body no-padding">
                            <div class="col-md-6 no-padding">
                                <div class="panel panel-default">
                                    <div class="panel-heading madaniyatcolor">
                                        <h3 class="panel-title"><span>{{ trans('radiopages.SoonLive')}}</span></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="slider-anons">
                                            @if($anons)
                                                @foreach($anons as $row)
                                                    <div>
                                                        <a href="{{$row->getUrl()}}">
                                                            <div class="anons-box">
                                                                <div class="inner">
                                                                    <img src="{{asset($row->thumbnail)}}" alt="{{ $row->getNameOne() }}">
                                                                    <div class="anons-date">
                                                                        <span>{{$row->getTime()}}</span>
                                                                    </div>
                                                                    <div class="anons-title">
                                                                        <div class="anons-inner">
                                                                            <span>{{$row->getNameOne()}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default panel-program">
                                    <div class="panel-heading madaniyatcolor">
                                        <h3 class="panel-title">
                                            <span>Телепрограмма</span>
                                            <a href="{{ route('madaniyat.teleprogram')}}">
                                                <span>{{ trans('radiopages.TeleSeeMore')}}<i class="fa fa-arrow-circle-right"></i></span>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="tele-programma">
                                            <div class="panel">
                                                <div class="panel-padding t-padding clearfix">
                                                    @if($program)
                                                        @foreach($program as $key => $row)
                                                            @if(($key<(count($program)-1)) && (strtotime($program[$key]->time) <= strtotime($currentTime)) && (strtotime($currentTime) < strtotime($program[$key+1]->time)) )
                                                                <div class="col-md-4 no-padding programma-list">
                                                                    <div class="programm live">
                                                                        @if($lc == 'kg')
                                                                            <span id="bcLive" class="bcLive"><i class="fa fa-circle"></i>азыр эфирде</span>
                                                                        @elseif($lc == 'ru')
                                                                            <span id="bcLive" class="bcLive"><i class="fa fa-circle"></i>сейчас в эфире</span>
                                                                        @endif
                                                                        <span class="date">{{ $row->time }}</span>
                                                                        <span class="title">{{ $row->name }}</span>
                                                                    </div>
                                                                </div>

                                                                @if($key == count($program)-2)
                                                                    <div class="col-md-4 no-padding programma-list">
                                                                        <div class="programm">
                                                                            <span class="date">{{ $program[$key+1]->time }}</span>
                                                                            <span class="title">{{ $program[$key+1]->name }}</span>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    @for($i=1;$i<3;$i++)
                                                                        <div class="col-md-4 no-padding programma-list">
                                                                            <div class="programm">
                                                                                <span class="date">{{ $program[$key+$i]->time }}</span>
                                                                                <span class="title">{{ $program[$key+$i]->name }}</span>
                                                                            </div>
                                                                        </div>
                                                                    @endfor
                                                                @endif

                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 no-padding">
                                <div class="panel panel-default">
                                    <div class="panel-heading madaniyatcolor">
                                        <h3 class="panel-title"><span>{{ trans('radiopages.NewsShows') }}</span></h3>
                                    </div>
                                    <div class="panel-body panel-promo m-promo">
                                        <div class="main-video">
                                            <div class="slider slider-for">
                                                @if($videonumbers)
                                                    @foreach($videonumbers as $video)
                                                        <div> <!-- video1 -->
                                                            <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($video){{$video->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                                            </div>
                                                            <div class="slick-text">
                                                                <a href="{{ route('madaniyat.media.video', $video) }}">
                                                                    <h2>@if($video){{ $video->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif</h2>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif


                                            </div>
                                            <div class="slider slider-nav">
                                                @if($videonumbers)
                                                    @foreach($videonumbers as $video)
                                                        <div>
                                                            <span class="videoTitle hidden">{{ trans('site.FrontPostDaysNews') }}</span>
                                                            <img src="http://img.youtube.com/vi/@if($video){{$video->getUrl()}}@else{{$defaultVideo}}@endif/mqdefault.jpg" alt="" />
                                                        </div>
                                                    @endforeach
                                                @endif

                                            </div>

                                            <footer>
                                                <a href="{{ route('madaniyat.media.all')}}">
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
            <div class="col-md-12 video-block">
                <div class="panel panel-default ctg-panel">
                    <div class="panel-heading madaniyatcolor">
                        <h3 class="panel-title"><span>{{ trans('radiopages.PopularVideos') }}</span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12 panel-videos no-padding">
                            <div class="row">
                                <div class="col-md-6 panel-main-video">
                                    @if($mediaone)
                                        @foreach($mediaone as $media)
                                            <article class="col-md-12 panel-no-padding" data-cat="all-videos">
                                                <div class="img">
                                                    <a href="{{ route('madaniyat.media.video', $media) }}">
                                                        <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail_big) }} @elseif($media->thumbnail) {{ asset($media->thumbnail) }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="">
                                                        <i class="fa-video"></i>
                                                    </a>
                                                </div>
                                                <div class="media-header">
                                                    <div class="media-category">
                                                        @if(($media->getProgramName()))
                                                            <span class="media-project">
                                                                <a href="{{ route('madaniyat.media.project', $media->program) }}">
                                                                    {{ $media->getProgramName() }}
                                                                </a>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="media-views">
                                                        <i class="fa-view"></i>
                                                        <span class="media-view">{{ $media->viewed }}</span>
                                                    </div>
                                  <span class="media-date">
                                    {{ $media->getDateFormatted() }}
                                  </span>
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
                                <div class="col-md-6 no-padding panel-four-video">
                                    @if($mediathree)
                                        @foreach($mediathree as $media)
                                            <article class="col-md-6 " data-cat="all-videos">
                                                <div class="img">
                                                    <a href="{{ route('madaniyat.media.video', $media) }}">
                                                        <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail_big) }} @elseif($media->thumbnail) {{ asset($media->thumbnail) }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="">
                                                        <i class="fa-video"></i>
                                                    </a>
                                                </div>
                                                <div class="media-top-header clearfix">
                                  <span class="media-date">
                                    {{ $media->getDateFormatted() }}
                                  </span>
                                                    <div class="media-views">
                                                        <i class="fa-view"></i>
                                                        <span class="media-view">{{ $media->viewed }}</span>
                                                    </div>
                                                </div>
                                                <div class="media-header">
                                                    <div class="media-category">
                                                        @if(($media->getProgramName()))
                                                            <span class="media-project">
                                                            <a href="{{ route('madaniyat.media.project', $media->program) }}">
                                                                {{ $media->getProgramName() }}
                                                            </a>
                                                            </span>
                                                        @endif
                                                    </div>
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
                            </div>
                        </div>
                        <footer>
                            <a href="{{ route('madaniyat.media.all') }}">
                                <span>{{ trans('radiopages.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mgallery homemgallery">
                <div class="panel panel-default">
                    <div class="panel-heading madaniyatcolor">
                        <h3 class="panel-title"><span>{{ trans('radiopages.PhotoReports') }}</span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="carousel-slick">
                                @if($photoGalleries)
                                    @foreach($photoGalleries as $photoGallery)
                                        <div class="g-row">

                                            <div class="inner">
                                                <div class="carousel-photo">
                                                    <a href="{{ route('madaniyat.photos', $photoGallery) }}">
                                                        <img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/>
                                                    </a>
                                                </div>

                                                <div class="main-back">
                                                    <div class="g-extra">
                                                        <span class="datetime"><i class="fa fa-calendar"></i> {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                                        <span class="view"><i class="fa-view"></i>{{ $photoGallery->viewed }}</span>
                                                    </div>
                                                    <div class="g-title">
                                                        <a href="{{ route('madaniyat.photos', $photoGallery) }}">
                                                            {{ $photoGallery->getName() }}
                                                        </a>
                                                    </div>
                                                    <div class="gdesc">
                                                        {!! $photoGallery->getDescription() !!}
                                                    </div>
                                                </div>
                                            </div>

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
            <div class="col-md-12 no-padding msocial">
                <div class="panel panel-default">
                    <div class="panel-heading madaniyatcolor">
                        <h3 class="panel-title"><span>{{ trans('radiopages.Wearesocial')}}</span></h3>
                    </div>
                    <div class="panel-body" style="padding-bottom: 30px;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="fb-page" style="height: 455px;overflow: hidden;" data-href="https://www.facebook.com/madaniyatkg" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <div class="fb-xfbml-parse-ignore">
                                        <blockquote cite="https://www.facebook.com/madaniyatkg"><a href="https://www.facebook.com/madaniyatkg/">Маданият.Тарых.Тил</a></blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a class="twitter-timeline" data-height="460" href="https://twitter.com/Madaniat2016">Tweets by Madaniat2016</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                            <div class="col-md-3">
                                <div id="ok_group_widget"></div>
                                <script>
                                    !function (d, id, did, st) {
                                        var js = d.createElement("script");
                                        js.src = "https://connect.ok.ru/connect.js";
                                        js.onload = js.onreadystatechange = function () {
                                            if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                                                if (!this.executed) {
                                                    this.executed = true;
                                                    setTimeout(function () {
                                                        OK.CONNECT.insertGroupWidget(id,did,st);
                                                    }, 0);
                                                }
                                            }}
                                        d.documentElement.appendChild(js);
                                    }(document,"ok_group_widget","54021149884512","{width:263,height:460}");
                                </script>
                            </div>
                            <div class="col-md-3">
                                <iframe src="{{asset('images/channels/madaniyat/inwidget/index.php?height=460&inline=3')}}" scrolling='no' frameborder='no' style='border:none;width:263px;height:455px;overflow:hidden;'></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 no-padding mcontacts">
                <div class="panel panel-default">
                    <div class="panel-heading madaniyatcolor">
                        <h3 class="panel-title"><span>{{ trans('site.Contacts')}}</span></h3>
                    </div>
                    <div class="panel-body" style="padding-bottom: 30px;">
                        <div class="col-md-4">
                            <article class="mcontacts-box">
                                <h4>{{trans('radiopages.Address')}}</h4>
                                <p>{{trans('radiopages.Maddress')}}</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="mcontacts-box">
                                <h4>Телефон</h4>
                                <p>0312 65 97 34</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="mcontacts-box">
                                <h4>E-mail</h4>
                                <p>public@ktrk.kg</p>
                            </article>
                        </div>
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
                arrows: false,
                autoplay:false,
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
                    slidesToShow: 2,
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
                    slidesToShow: 1,
                    slidesToScroll: 1

                });
            }

            $('.slider-anons').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 3500
            });

        </script>

        <script type="text/javascript">
            (function ($) {

                var $descriptions = $('#carousel-descriptions').children('li'),
                        $controls = $('#carousel-controls').find('span'),
                        $carousel = $('#carousel')
                                .roundabout({childSelector: "a", minOpacity: 1, autoplay: true, autoplayDuration: '3000', triggerFocusEvents: false})
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

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#tabs').tab();

                blink($('#bcLive'), -1, 500);

                function blink(elem, times, speed) {
                    if (times > 0 || times < 0) {
                        if ($(elem).hasClass("blink"))
                            $(elem).removeClass("blink");
                        else
                            $(elem).addClass("blink");
                    }
                    clearTimeout(function () {
                        blink(elem, times, speed);
                    });
                    if (times > 0 || times < 0) {
                        setTimeout(function () {
                            blink(elem, times, speed);
                        }, speed);
                        times -= .5;
                    }
                }
            });
        </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
@stop