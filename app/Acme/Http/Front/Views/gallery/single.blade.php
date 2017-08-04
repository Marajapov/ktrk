@extends('Front::layouts.defaultTest')
@section('title', $gallery->getName())
@section('styles')

    <meta property="og:url"                content="{{ Request::url()}}" />
    <meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $gallery->getName() }}" />
    <meta property="og:description"        content="" />
    <meta property="og:image"              content="{{ asset($gallery->thumbnail_big) }}" />

    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
    <link rel="stylesheet" href="{{ asset('froala/css/froala_style.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>
@stop

@section('content')

    <div class="section light-section gallery-section">
        <div class="container">
            <div class="row">
                <div class="section">
                    <div class="section-title">
                        <h4>
                            <a href="{{ route('front.vertex.galleries') }}">
                                {{trans('site.Galleries')}}
                            </a>
                        </h4>
                    </div>
                    <div class="section-body">
                        @if($images)                                     
                            <div class="slider-for">
                                @if($images)   
                                    @foreach($images as $image)
                                        <div>
                                            <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="slider-nav">
                                @if($images)
                                    @if($images)
                                        @foreach($images as $image)
                                            <div>
                                                <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                        @endif
                        <section>
                            <div class="media-info">
                                <h4 class="media-title">
                                    {{$gallery->getName()}}                                    
                                </h4>
                                <div class="media-extra clearfix">
                                    <div class="pluso share-buttons pull-right">
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
                                            <!-- <span data-counter="tw"></span> -->
                                        </button>
                                    </div>
                                    <div class="post-extra pull-left">
                                        <span class="post-date">{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }} @if(date('Y') != $gallery->getYear()) {{ $gallery->getYear() }} @endif, {{ $gallery->getTime()}}</span>
                                        <span class="post-views">
                                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                <g>
                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                </g>
                                            </svg>
                                            {{ $gallery->viewed }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @if($gallery->getDescription())
                                <div class="media-content">
                                    {!! $gallery->getDescription() !!}                                
                                </div>
                            @endif                            
                            <footer class="@if($gallery->getDescription()) with-top-border @endif">
                                @if(auth()->user())
                                    <a class="post-edit pull-left" href="{{ route('admin.photoParent.edit', $gallery) }}" target="_blank">
                                        {{ trans('site.AdminPostEdit') }}
                                    </a>
                                @endif                                

                                <a href="{{ route('front.vertex.galleries') }}">
                                    <span>{{ trans('site.FrontGalleryAll') }}</span>
                                </a>
                            </footer>
                        </section>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@stop

@section('footerScript')

    <script src="{{ asset('js/goodshare.js') }}"></script>
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

    <!--Carousel-->
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.slider-nav',
            arrows: true,
            prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg></button>',
            nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg></button>'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            arrows: false
        });
    </script>

@endsection
