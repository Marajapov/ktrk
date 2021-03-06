@extends('Front::channel.birinchi.default')
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
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
    <div class="birinchiradio">
        @include('Front::channel.birinchi.nav')
        <div class="container b-maincolor">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title">
                                {{ $gallery->getName() }}
                                &nbsp;
                                <span class="show-extra">
                                    <span class="show-date">{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }}, {{ $gallery->getYear() }}</span>
                                    <span class="show-view">
                                        <i class="fa-view"></i>{{ $gallery->viewed }}
                                    </span>
                                </span>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body">
                                <div class="row">
                                    <p>{!! $gallery->getDescription() !!}</p>
                                    <ul id="imageGallery">
                                        @if($images != null)
                                            @foreach($images as $image)
                                                <li data-thumb="{{ asset('froala/uploads/'.$image->name) }}" data-src="{{ asset('froala/uploads/'.$image->name) }}">
                                                    <img class="resizegallery" src="{{ asset('froala/uploads/'.$image->name) }}" />
                                                </li>
                                            @endforeach
                                        @endif
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

                                            <a href="{{ route('birinchi.allphotos') }}">
                                                <span>Баардык сүрөтбаяндар<i class="fa fa-arrow-circle-right"></i></span>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 allgallery">
                      <div class="row">
                          <div class="col-md-12">
                              <h3 class="title">{{ trans('site.LastGalleries') }}</h3>
                          </div>
                          @if($photoGalleries)
                              @foreach($photoGalleries as $photoGallery)
                                  <div class="col-md-4">
                                      <a href="{{ route('birinchi.photos', $photoGallery) }}" class="photo-img">
                                          <img src="{{ asset($photoGallery->thumbnail_big) }}" alt="" />
                                          <span class="photo-overlay"></span>
                                      </a>
                                      <div class="photo-info">
                                          <div class="media">
                                              <div class="media-left media-middle">
                                                  <div class="extraone">
                                                      <span class="e-datetime"><i class="fa  fa-calendar"></i>  {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                                  </div>
                                                  <a href="{{ route('birinchi.photos', $photoGallery) }}">
                                                      <i class="fa fa-camera photo-icon"></i>
                                                  </a>
                                              </div>
                                              <div class="media-body media-middle">
                                                  <h4 class="media-heading photo-name"><a href="{{route('birinchi.photos', $photoGallery)}}">{{ $photoGallery->getName() }}</a></h4>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          @endif
                      </div>
                  </div>
            </div>
        </div>
    </div>
@stop
@section('footerscript2')
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
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('slick/slick.min.js') }}"></script>
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