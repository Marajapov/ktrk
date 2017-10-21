@extends('Front::layouts.defaultTest')
@section('title', trans('site.Search').' | КТРК')

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/articles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/test3.css') }}">

@endsection

@section('content')

<div class="section light-section">
        
    @include('Front::partials.bannerTest')

    <div class="container">
        <div class="row">
            <div class="left-section col-md-9">
                <div class="section search-news-section">
                    <div class="section-title">
                        <h4>
                            {{ trans('site.Search') }}
                            <span class="divider"><i class="fa fa-circle"></i></span>                        
                            {{ trans('site.DataResult') }} - {{ $searchKey }}
                        </h4>
                    </div>
                    <div class="section-desc">
                        {{ trans('site.News') }}
                    </div>
                    <div class="section-body">
                        <div class="left-categories categories left-news">
                            <div class="cat-posts">
                                @if($leftPosts)
                                    @foreach($leftPosts as $key => $post)
                                        <div class="cat-post news-body">
                                            <div class="post-extra clearfix">
                                                @if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes')
                                                    <span class="post-file">                                                        
                                                        @if($post->getIsPhoto() == 'yes')
                                                            <svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                                <g>
                                                                    <g transform="translate(-428.000000, -532.000000)">
                                                                        <g transform="translate(428.000000, 532.000000)">
                                                                            <g>
                                                                                <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
                                                                                    c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
                                                                                    C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
                                                                                    c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
                                                                                    L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
                                                                                    C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
                                                                                    C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
                                                                                    C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        @endif
                                                        @if($post->getIsVideo() == 'yes')
                                                            <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                                <g transform="translate(0,-952.36218)">
                                                                    <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                                        c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                                        L11.7,961.3z"/>
                                                                </g>
                                                            </svg>                                                                
                                                        @endif
                                                    </span>
                                                @endif
                                                <span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }} @if(date('Y') != $post->getYear()) {{ $post->getYear() }} @endif, {{ $post->getTime()}}</span>
                                                <span class="post-views">                                                        
                                                    <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                        <g>
                                                            <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                        </g>
                                                    </svg>
                                                    {{ $post->getViewed() }}
                                                </span>                                                    
                                            </div>
                                            <a class="post-title" href="{{ route('front.post', [$post, $lc]) }}">
                                                {{ $post->getTitleRuOrKg() }}
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>                      
                        </div>
                        <div class="middle-categories categories middle-news">
                            <div class="cat-posts">
                                @if($middlePosts)
                                    @foreach($middlePosts as $key => $post)
                                        <div class="cat-post news-body">
                                            <div class="post-extra clearfix">
                                                @if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes')
                                                    <span class="post-file">                                                        
                                                        @if($post->getIsPhoto() == 'yes')
                                                            <svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                                <g>
                                                                    <g transform="translate(-428.000000, -532.000000)">
                                                                        <g transform="translate(428.000000, 532.000000)">
                                                                            <g>
                                                                                <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
                                                                                    c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
                                                                                    C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
                                                                                    c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
                                                                                    L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
                                                                                    C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
                                                                                    C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
                                                                                    C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        @endif
                                                        @if($post->getIsVideo() == 'yes')
                                                            <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                                <g transform="translate(0,-952.36218)">
                                                                    <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                                        c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                                        L11.7,961.3z"/>
                                                                </g>
                                                            </svg>                                                                
                                                        @endif
                                                    </span>
                                                @endif
                                                <span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }} @if(date('Y') != $post->getYear()) {{ $post->getYear() }} @endif, {{ $post->getTime()}}</span>
                                                <span class="post-views">                                                        
                                                    <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                        <g>
                                                            <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                        </g>
                                                    </svg>
                                                    {{ $post->getViewed() }}
                                                </span>                                                    
                                            </div>
                                            <a class="post-title" href="{{ route('front.post', [$post, $lc]) }}">
                                                {{ $post->getTitleRuOrKg() }}
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>                      
                        </div>
                        <div class="right-categories categories right-news">
                            <div class="cat-posts">
                                @if($rightPosts)
                                    @foreach($rightPosts as $key => $post)                                      
                                        <div class="cat-post news-body">
                                            <div class="post-extra clearfix">
                                                @if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes')
                                                    <span class="post-file">                                                        
                                                        @if($post->getIsPhoto() == 'yes')
                                                            <svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                                <g>
                                                                    <g transform="translate(-428.000000, -532.000000)">
                                                                        <g transform="translate(428.000000, 532.000000)">
                                                                            <g>
                                                                                <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
                                                                                    c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
                                                                                    C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
                                                                                    c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
                                                                                    L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
                                                                                    C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
                                                                                    C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
                                                                                    C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        @endif
                                                        @if($post->getIsVideo() == 'yes')
                                                            <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                                <g transform="translate(0,-952.36218)">
                                                                    <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                                        c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                                        L11.7,961.3z"/>
                                                                </g>
                                                            </svg>                                                                
                                                        @endif
                                                    </span>
                                                @endif
                                                <span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }} @if(date('Y') != $post->getYear()) {{ $post->getYear() }} @endif, {{ $post->getTime()}}</span>
                                                <span class="post-views">                                                        
                                                    <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                        <g>
                                                            <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                        </g>
                                                    </svg>
                                                    {{ $post->getViewed() }}
                                                </span>                                                    
                                            </div>
                                            <a class="post-title" href="{{ route('front.post', [$post, $lc]) }}">
                                                {{ $post->getTitleRuOrKg() }}
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>                      
                        </div>                        
                        <div class="showbox">
                          <div class="loader">
                            <svg class="circular" viewBox="25 25 50 50">
                              <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                            </svg>
                          </div>
                        </div>
                        <footer>
                            <nav class="pagination-nav pg-news" data-current="1">
                                <ul class="pagination">
                                    <li class="pagination-auto">
                                        <a href="#" class="pg-start disabled" data-page="1">{{ trans('site.Start') }}</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pg-prev slick-arrow arrow-prev disabled" data-page="{{$currentPage-1}}">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
                                        </a>
                                    </li>

                                    @if($totalPostsPages > 4)
                                        @for($i = 1; $i <= 5; $i++)
                                            <li class="@if($i > 5) hidden @endif">
                                                <a href="#" class="pg pg-{{$i}} @if($i == $currentPage) active @endif" data-page="{{$i}}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @else
                                        @for($i = 1; $i <= $totalPostsPages; $i++)
                                            <li class="@if($i > 5) hidden @endif">
                                                <a href="#" class="pg pg-{{$i}} @if($i == $currentPage) active @endif" data-page="{{$i}}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @endif

                                    <li>
                                        <a href="#" class="pg-next slick-arrow arrow-next" data-page="{{$currentPage+1}}">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l  10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>
                                        </a>
                                    </li>

                                    <li class="pagination-auto">
                                        <a href="#" class="pg-end" data-page="{{$totalPostsPages}}">{{ trans('site.End') }}</a>
                                    </li>

                                </ul>
                            </nav>
                        </footer>
                    </div>
                </div>  
                <div class="section search-media-section">                    
                    <div class="section-desc">
                        {{ trans('site.MediaMaterials') }}
                    </div>
                    <div class="section-body">
                        <div id="portfoliolist" class="clearfix">
                            @foreach($medias as $key=>$media)
                                <div class="portfolio">
                                    <div class="portfolio-wrapper">
                                        <div class="media-image">
                                            <a href="{{ route('front.media.video', $media) }}">
                                                <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="{{ $media->getName() }}" />
                                                <div class="overlay">
                                                    <div class="media-extra">
                                                        <span class="media-date">{{ $media->getDay() }} {{ $media->getMonthRu() }} @if(date('Y') != $media->getYear()) {{ $media->getYear() }} @endif, {{ $media->getTime()}}</span>
                                                        <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                            <g>
                                                                <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                    C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                            </g>
                                                        </svg>
                                                        <span class="media-view">{{ $media->viewed }}</span>
                                                    </div>
                                                </div>
                                                <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                    <g transform="translate(0,-952.36218)">
                                                        <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                            c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                            L11.7,961.3z"/>
                                                    </g>
                                                </svg>                                                  
                                            </a>
                                        </div>
                                        <div class="media-title">
                                            <a href="{{ route('front.media.video', $media) }}">
                                                {{ $media->getName() }}
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            @endforeach  
                        </div>                                                
                        <div class="showbox">
                          <div class="loader">
                            <svg class="circular" viewBox="25 25 50 50">
                              <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                            </svg>
                          </div>
                        </div>
                        <footer>
                            <nav class="pagination-nav pg-medias" data-current="1">
                                <ul class="pagination">
                                    <li class="pagination-auto">
                                        <a href="#" class="pg-start-media disabled" data-page="1">{{ trans('site.Start') }}</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pg-prev-media slick-arrow arrow-prev disabled" data-page="{{$currentPage-1}}">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
                                        </a>
                                    </li>

                                    @if($totalMediaPages > 4)
                                        @for($i = 1; $i <= 5; $i++)                                            
                                            <li class="@if($i > 5) hidden @endif">
                                                <a href="#" class="pg-media pg-media-{{$i}} @if($i == $currentPage) active @endif" data-page="{{$i}}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @else
                                        @for($i = 1; $i <= $totalMediaPages; $i++)
                                            <li class="@if($i > 5) hidden @endif">
                                                <a href="#" class="pg-media pg-media-{{$i}} @if($i == $currentPage) active @endif" data-page="{{$i}}">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @endif

                                    <li>
                                        <a href="#" class="pg-next-media slick-arrow arrow-next" data-page="{{$currentPage+1}}">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l  10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>
                                        </a>
                                    </li>

                                    <li class="pagination-auto">
                                        <a href="#" class="pg-end-media" data-page="{{$totalMediaPages}}">{{ trans('site.End') }}</a>
                                    </li>

                                </ul>
                            </nav>
                        </footer>                      
                    </div>
                </div>              
            </div>            
            @include('Front::post.rightSection')
        </div>
    </div>
</div>

@stop

@section('footerScript')
    <script type="text/javascript">
        $('.pg-news a').click(function(e){

            e.preventDefault();

            var parent = $('.pg-news');
            var currentPage = parent.attr('data-current');
            var page = $(this).attr('data-page');

            var pgStart = $('.pg-start');
            var pgPrev = $('.pg-prev');
            var pgNext = $('.pg-next');
            var pgEnd = $('.pg-end');
            var pg = $('.pg');

            var total = pgEnd.attr('data-page');

            console.log(page);

            if(page != currentPage){

                $('.search-news-section').addClass('is-loading');
                var url = "{{ route('front.searchPgNews') }}";
                var search = '{{$searchKey}}';
                var perPage = '{{$perPage}}';

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {                            
                        page : page,
                        perPage : perPage,
                        search : search
                    },
                    cache: false,
                    success: function (data) {
                        if(data){
                            $('.left-news .cat-posts').html(data.left);
                            $('.middle-news .cat-posts').html(data.middle);
                            $('.right-news .cat-posts').html(data.right);
                        }
                        $('.search-news-section').removeClass('is-loading');

                        if(page < 3){
                            for(var i = 1; i<=5; i++){
                                $('.pg-'+i).html(i).attr('data-page', i);
                            }
                        } else if(total - page < 2) {
                            for(var j = total-4, i = 1; j<=total, i<=5; j++, i++){
                                $('.pg-'+i).html(j).attr('data-page', j);
                            }
                        } else {
                            for(var j = page-2, i = 1; j<=page+2, i<=5; j++, i++){
                                $('.pg-'+i).html(j).attr('data-page', j);
                            }
                        }

                        if(page > 1){
                            pgStart.removeClass('disabled');
                            pgPrev.removeClass('disabled');
                            pgPrev.attr('data-page', parseInt(page)-1);
                            pgNext.attr('data-page', parseInt(page)+1);
                        } else {                                 
                            pgStart.addClass('disabled');
                            pgPrev.addClass('disabled');
                        }
                        if(page < pgEnd.attr('data-page')) {
                            pgNext.removeClass('disabled');
                            pgPrev.attr('data-page', parseInt(page)-1);
                            pgNext.attr('data-page', parseInt(page)+1);
                            pgEnd.removeClass('disabled');
                        } else {                     
                            pgNext.addClass('disabled');
                            pgEnd.addClass('disabled');
                        }

                        parent.attr('data-current', page);

                        pg.removeClass('active');
                        for(var i = 1; i<=5; i++){
                            if($('.pg-'+i).attr('data-page') == page){
                                $('.pg-'+i).addClass('active');
                            }
                        }

                    }
                });                
            }
        });
        $('.pg-medias a').click(function(e){

            e.preventDefault();

            var parent = $('.pg-medias');
            var currentPage = parseInt(parent.attr('data-current'));
            var page = parseInt($(this).attr('data-page'));

            var pgStart = $('.pg-start-media');
            var pgPrev = $('.pg-prev-media');
            var pgNext = $('.pg-next-media');
            var pgEnd = $('.pg-end-media');
            var pg = $('.pg-media');

            var total = parseInt(pgEnd.attr('data-page'));

            if(page != currentPage){

                $('.search-media-section').addClass('is-loading');
                var url = "{{ route('front.searchPgMedia') }}";
                var search = '{{$searchKey}}';
                var perPage = '{{$perPage}}';

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {                            
                        page : page,
                        perPage : perPage,
                        search : search
                    },
                    cache: false,
                    success: function (data) {
                        if(data){
                            $('#portfoliolist').html(data);
                        }
                        $('.search-media-section').removeClass('is-loading');

                        if(page < 3){
                            for(var i = 1; i<=5; i++){
                                $('.pg-media-'+i).html(i).attr('data-page', i);
                            }
                        } else if(total - page < 2) {
                            for(var j = total-4, i = 1; j<=total, i<=5; j++, i++){
                                $('.pg-media-'+i).html(j).attr('data-page', j);
                            }
                        } else {
                            for(var j = page-2, i = 1; j<=page+2, i<=5; j++, i++){
                                $('.pg-media-'+i).html(j).attr('data-page', j);
                            }
                        }

                        if(page > 1){
                            pgStart.removeClass('disabled');
                            pgPrev.removeClass('disabled');
                            pgPrev.attr('data-page', parseInt(page)-1);
                            pgNext.attr('data-page', parseInt(page)+1);
                        } else {                                 
                            pgStart.addClass('disabled');
                            pgPrev.addClass('disabled');
                        }
                        if(page < parseInt(pgEnd.attr('data-page'))) { 
                            pgNext.removeClass('disabled');
                            pgPrev.attr('data-page', parseInt(page)-1);
                            pgNext.attr('data-page', parseInt(page)+1);
                            pgEnd.removeClass('disabled');
                        } else {                  
                            pgNext.addClass('disabled');
                            pgEnd.addClass('disabled');
                        }

                        parent.attr('data-current', page);

                        pg.removeClass('active');
                        for(var i = 1; i<=5; i++){
                            if(parseInt($('.pg-media-'+i).attr('data-page')) == page){
                                $('.pg-media-'+i).addClass('active');
                            }
                        }

                    }
                });                
            }
        });
    </script>
@endsection
