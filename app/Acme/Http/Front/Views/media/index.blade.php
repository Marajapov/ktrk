@extends('Front::layouts.default')
@section('title', 'Видеопортал | КТРК')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/videoportal.css') }}"/>
@endsection

@section('content')

    <div class="shows-slider">
        <div class="slider-overlay"></div>
        <div class="shows-carousel container">
            <div>
                <div class="overlay"></div>
                <a href="#">
                    <img src="{{ asset('images/projects/ala-too.jpg') }}" alt=""/>
                </a>
                <div class="show-info">
                    <h4>Ала-Тоо</h4>
                    <span class="show-day">{{ trans('site.Monday') }} - {{ trans('site.Friday') }}</span>
                    <span class="show-time">19:30 / 21:30</span>
                </div>
            </div>
            <div>
                <div class="overlay"></div>
                <a href="#">
                    <img src="{{ asset('images/projects/zamana.jpg') }}" alt=""/>
                </a>
                <div class="show-info">
                    <h4>Замана</h4>
                    <span class="show-day">{{ trans('site.Monday') }} - {{ trans('site.Friday') }}</span>
                    <span class="show-time">07:00</span>
                </div>
            </div>
            <div>
                <div class="overlay"></div>
                <a href="#">
                    <img src="{{ asset('images/projects/hit-parad.jpg') }}" alt=""/>
                </a>
                <div class="show-info">
                    <h4>Хит-Парад</h4>
                    <span class="show-day">{{ trans('site.Sunday') }}</span>
                    <span class="show-time">22:00</span>
                </div>
            </div>

            <div>
                <div class="overlay"></div>
                <a href="#">
                    <img src="{{ asset('images/projects/oi-ordo.jpg') }}" alt=""/>
                </a>
                <div class="show-info">
                    <h4>Ой-Ордо</h4>
                    <span class="show-day">{{ trans('site.Tuesday') }}, {{ trans('site.Wednesday') }}, {{ trans('site.Thursday') }}</span>
                    <span class="show-time">20:10</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container main-wrapper">

        <div class="row">
            <section class="content clearfix">

                <div class="clearfix">
                    <div class="top-left-block col-md-12">
                        <div class="panel panel-default panel-videos">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Видеопортал
                                </h3>
                            </div>
                            <div class="panel-body">

                                <ul id="myTabs" class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#all">{{ trans('site.AllVideos') }}</a>
                                    </li>
                                    @foreach($mediaCategories as $key=>$MediaCategory)
                                        <li>
                                            <a href="#{{ $MediaCategory->getVideoType() }}" data-toggle="tab">{{ $MediaCategory->getName() }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active clearfix" id="all">
                                        <div class="row">
                                            {{-- @foreach($mediaAll as $media) --}}
                                            <div class="col-md-3 media-ctg">
                                                @include('Front::partials.leftMediaCategories')
                                            </div>
                                            <div class="col-md-9 panel panel-default media-videos">
                                                <div class="row">

                                                    <div class="panel-heading">
                                                        <h3>{{ trans('site.LastVideos') }}</h3>
                                                    </div>

                                                    <div class="panel-body">
                                                        @foreach($mediaLastVideos as $key=>$mediaLastVideo)
                                                            <article class="col-md-4" data-cat="all-videos">
                                                                <div class="img">
                                                                    <a href="{{ route('front.media.video', $mediaLastVideo) }}">
                                                                        <span class="media-view"><i class="fa fa-eye"></i>{{ $mediaLastVideo->getViewed() }}</span>
                                                                        <span class="media-date">{{ $mediaLastVideo->getTime() }}, {{ $mediaLastVideo->getDay() }} {{ $mediaLastVideo->getMonthRu() }}</span>
                                                                        <img src="http://img.youtube.com/vi/{{ $mediaLastVideo->getUrl() }}/mqdefault.jpg" alt=""/>
                                                                    </a>
                                                                    @if($mediaLastVideo->program)
                                                                        <h4>
                                                                            <a class="media-project" href="{{ route('front.media.project', $mediaLastVideo->program) }}"><i class="fa fa-play-circle-o"></i>{{ $mediaLastVideo->getProgramName() }}</a>
                                                                        </h4>
                                                                    @endif
                                                                </div>
                                                                <div class="media-title">
                                                                    <a href="{{ route('front.media.video', $mediaLastVideo) }}">
                                                                        <h4>{{ $mediaLastVideo->getName() }}</h4>
                                                                    </a>
                                                                </div>
                                                            </article>
                                                        @endforeach

                                                        <footer>
                                                            <a href="{{ route('front.media.all') }}">
                                                                <span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                                                            </a>
                                                        </footer>

                                                    </div>

                                                    <div class="panel-heading">
                                                        <h3>{{ trans('site.TopVideos') }}</h3>
                                                    </div>

                                                    <div class="panel-body">

                                                        @if($mediaPops)
                                                            @foreach($mediaPops as $pop)
                                                                <article class="col-md-4" data-cat="all-videos">
                                                                    <div class="img">
                                                                        <a href="{{ route('front.media.video', $pop) }}">
                                                                            <span class="media-view"><i class="fa fa-eye"></i>{{ $pop->getViewed() }}</span>
                                                                            <span class="media-date">{{ $pop->getTime() }}, {{ $pop->getDay() }} {{ $pop->getMonthRu() }}</span>
                                                                            <img src="http://img.youtube.com/vi/{{ $pop->getUrl() }}/mqdefault.jpg" alt=""/>
                                                                        </a>
                                                                        @if($pop->program)
                                                                            <h4>
                                                                                <a class="media-project" href="{{ route('front.media.project', $pop->program) }}"><i class="fa fa-play-circle-o"></i>{{ $pop->getProgramName() }}</a>
                                                                            </h4>
                                                                        @endif
                                                                    </div>
                                                                    <div class="media-title">
                                                                        <a href="{{ route('front.media.video', $pop) }}">
                                                                            <h4>{{ $pop->getName() }}</h4>
                                                                        </a>
                                                                    </div>
                                                                </article>
                                                            @endforeach
                                                        @endif

                                                        <footer>
                                                            <a href="{{ route('front.media.all') }}">
                                                                <span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                                                            </a>
                                                        </footer>

                                                    </div>

                                                </div>
                                            </div>

                                            {{-- @endforeach --}}
                                        </div>
                                    </div>
                                    @foreach($mediaCategories as $key=>$MediaCategory)
                                        <div role="tabpanel" class="tab-pane @if($MediaCategory->getVideoType() == 'all') active @endif clearfix" id="{{ $MediaCategory->getVideoType() }}">
                                            <div class="row">
                                                {{-- @foreach($mediaAll as $media) --}}
                                                <div class="col-md-3 media-ctg">
                                                    @include('Front::partials.leftMediaCategories')
                                                </div>
                                                <div class="col-md-9 panel panel-default media-videos">
                                                    <div class="row">

                                                        <div class="panel-heading">
                                                            <h3>Акыркы видеолор</h3>
                                                        </div>

                                                        <div class="panel-body">

                                                            @foreach($categoriesVideos as $key => $media)
                                                                @foreach($media as $row)
                                                                    @if($row->videoType == $MediaCategory->videoType)
                                                                        <article class="col-md-4" data-cat="all-videos">
                                                                            <div class="img">
                                                                                <a href="{{ route('front.media.video', $row) }}">
                                                                                    <span class="media-view"><i class="fa fa-eye"></i>{{ $row->getViewed() }}</span>
                                                                                    <span class="media-date">{{ $row->getTime() }}, {{ $row->getDay() }} {{ $row->getMonthRu() }}</span>
                                                                                    <img src="http://img.youtube.com/vi/{{ $row->url }}/mqdefault.jpg" alt=""/>
                                                                                </a>
                                                                                @if($row->program)
                                                                                    <h4>
                                                                                        <a class="media-project" href="{{ route('front.media.project', $row->program) }}"><i class="fa fa-play-circle-o"></i>{{ $row->getProgramName() }}</a>
                                                                                    </h4>
                                                                                @endif
                                                                            </div>
                                                                            <div class="media-title">
                                                                                <a href="{{ route('front.media.video', $row) }}">
                                                                                    <h4>{{ $row->getName() }}</h4>
                                                                                </a>
                                                                            </div>
                                                                        </article>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach

                                                            <footer>
                                                                <a href="{{ route('front.media.all') }}">
                                                                    <span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                                                                </a>
                                                            </footer>

                                                        </div>

                                                        <div class="panel-heading">
                                                            <h3>Топ видеолор</h3>
                                                        </div>

                                                        <div class="panel-body">

                                                            @if($topCategoriesVideos)
                                                                @foreach($topCategoriesVideos as $key => $topCatVideo)
                                                                    @foreach($topCatVideo as $row)
                                                                        @if($row->videoType == $MediaCategory->videoType)
                                                                            <article class="col-md-4" data-cat="all-videos">
                                                                                <div class="img">
                                                                                    <a href="{{ route('front.media.video', $row) }}">
                                                                                        <span class="media-view"><i class="fa fa-eye"></i>{{ $row->getViewed() }}</span>
                                                                                        <span class="media-date">{{ $row->getTime() }}, {{ $row->getDay() }} {{ $row->getMonthRu() }}</span>
                                                                                        <img src="http://img.youtube.com/vi/{{ $row->url }}/mqdefault.jpg" alt=""/>
                                                                                    </a>
                                                                                    @if($row->program)
                                                                                        <h4>
                                                                                            <a class="media-project" href="{{ route('front.media.project', $row->program) }}"><i class="fa fa-play-circle-o"></i>{{ $row->getProgramName() }}</a>
                                                                                        </h4>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="media-title">
                                                                                    <a href="{{ route('front.media.video', $row) }}">
                                                                                        <h4>{{ $row->getName() }}</h4>
                                                                                    </a>
                                                                                </div>
                                                                            </article>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            @endif

                                                            <footer>
                                                                <a href="{{ route('front.media.all') }}">
                                                                    <span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                                                                </a>
                                                            </footer>

                                                        </div>

                                                    </div>
                                                </div>

                                                {{-- @endforeach --}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

@stop

@section('footerScript')

    <script>
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>

    <script>

        //    var current = $('.shows-carousel').slick('slickCurrentSlide');

        $('.shows-carousel').slick({
//        autoplay: true,
//        autoplaySpeed: 2000,
            centerPadding: '0',
            dots: true,
            infinite: true,
            slidesToShow: 1,
            speed: 600
        });
    </script>
@stop
