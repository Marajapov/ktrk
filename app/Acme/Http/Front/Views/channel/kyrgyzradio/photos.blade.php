@extends('Front::channel.kyrgyzradio.default')
@section('title', $gallery->getName())
@section('styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:url"                content="{{ Request::url()}}" />
    <meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $gallery->getName()}}" />
    <meta property="og:description"        content="{{ $gallery->getDescription() }}" />
    <meta property="og:image"              content="{{ asset($gallery->thumbnail_big) }}" />

    <link rel="stylesheet" href="{{asset('css/goodshare.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
    @include('Front::channel.kyrgyzradio.nav')
    <div id="photos">
        <div class="container">
            <div class="section-header2">
                <h4 class="section-title text-center wow fadeInDown">{{ $gallery->getName() }}</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <span class="show-extra">
                        <span class="show-date">{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }}, {{ $gallery->getYear() }}</span>
                        <span class="show-view">
                            <i class="fa-view"></i>{{ $gallery->viewed }}
                        </span>
                    </span>
                    <p>{!! $gallery->getDescription() !!}</p>
                    <ul id="imageGallery">
                        @foreach($images as $image)
                            <li data-thumb="{{ asset('froala/uploads/'.$image->name) }}" data-src="{{ asset('froala/uploads/'.$image->name) }}">
                                <img class="resizegallery" src="{{ asset('froala/uploads/'.$image->name) }}" />
                            </li>
                        @endforeach
                    </ul>
                    <div class="col-md-12">
                        <footer class="with-share">
                            <div class="pluso share-buttons">
                                <button class="goodshare btn-fb" data-type="fb">
                                    <i class="fa fa-facebook"></i>
                                    <span data-counter="fb"></span>
                                </button>
                                <!-- Button with share to Facebook & share counter -->
                                <button class="goodshare btn-vk" data-type="vk">
                                    <i class="fa fa-vk"></i>
                                    <span data-counter="vk"></span>
                                </button>
                                <button class="goodshare btn-ok" data-type="ok">
                                    <i class="fa fa-odnoklassniki"></i>
                                    <span data-counter="ok"></span>
                                </button>
                                <button class="goodshare btn-gp" data-type="gp">
                                    <i class="fa fa-google-plus"></i>
                                    <span data-counter="gp"></span>
                                </button>
                                <button class="goodshare btn-tw" data-type="tw">
                                    <i class="fa fa-twitter"></i>
                                    {{--<span data-counter="tw"></span>--}}
                                </button>
                            </div>

                            <a href="{{ route('kyrgyzradio.allphotos') }}">
                                <span>Баардык сүрөтбаяндар<i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footerScript')
    <script src="{{asset('js/goodshare.js')}}"></script>
    <script>
        $(window).load(function(){
            $('.goodshare').each(function(){
                var span = $(this).children('span');
                var counter = span.text();
                if((counter==0) || (counter=='')){
                    $(this).addClass('empty');
                }
            });
        });
    </script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/lightgallery/picturefill.min.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lightgallery.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lg-thumbnail.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lg-video.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lg-hash.js') }}"></script>
    <script src="{{ asset('js/lightgallery/lg-pager.js') }}"></script>
    <script src="{{ asset('js/lightgallery/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery:true,
                item:1 ,
                loop:true,
                thumbItem:8,
                slideMargin:0,
                enableDrag: true,
                currentPagerPosition:'right',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                }
            });
        });
    </script>
@stop