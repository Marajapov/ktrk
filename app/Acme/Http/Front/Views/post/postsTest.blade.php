@extends('Front::layouts.defaultTest')

@section('title', trans('site.PostAllNews'))

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>

    <link rel="stylesheet" href="{{ asset('froala/css/froala_style.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>
@endsection()

@section('content')

    <div class="section light-section post-section">
    
        @include('Front::partials.bannerTest')

        <div class="container">
            
            <div class="row">

                <div class="post-left-section col-md-9">                    
                    <div class="section article-section">
                        <div class="section-title">
                            <h4>
                                {{ trans('site.News') }}
                            </h4>
                        </div>

                        <div class="section-body"> 

                            <div class="left-categories categories">
                                @foreach($leftCategories as $category)
                                    <div class="category">

                                        <a href="{{ route('front.category', $category) }}" class="cat-title">
                                            {{ $category->getTitle() }}
                                        </a>

                                        <div class="cat-posts">
                                            @foreach($headerPosts as $headerPost)
                                                @if($headerPost->category_id == $category->id)
                                                    <div class="cat-post last-post news-body">
                                                        <div class="post-extra clearfix">
                                                            @if($headerPost->getIsVideo() == 'yes' || $headerPost->getIsPhoto() == 'yes')
                                                                <span class="post-file">                                                        
                                                                    @if($headerPost->getIsPhoto() == 'yes')
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
                                                                    @if($headerPost->getIsVideo() == 'yes')
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
                                                            <span class="post-date">{{ $headerPost->getDay() }} {{ $headerPost->getMonthRu() }} @if(date('Y') != $headerPost->getYear()) {{ $headerPost->getYear() }} @endif, {{ $headerPost->getTime()}}</span>
                                                            <span class="post-views">                                                        
                                                                <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                    </g>
                                                                </svg>
                                                                {{ $headerPost->getViewed() }}
                                                            </span>                                                    
                                                        </div>
                                                        <a class="post-title" href="{{ route('front.post', [$headerPost, $lc]) }}">
                                                            <img src="@if($headerPost->thumbnail_big) {{ asset($headerPost->thumbnail_big) }} @else {{ asset($headerPost->thumbnail) }}  @endif" alt=""/>
                                                            {{ $headerPost->getTitleRuOrKg() }}
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                            @foreach($posts as $post)
                                                @if($post->category_id == $category->id)
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
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach  
                            </div>  

                            <div class="middle-categories categories">
                                @foreach($middleCategories as $category)
                                    <div class="category">

                                        <a href="{{ route('front.category', $category) }}" class="cat-title">
                                            {{ $category->getTitle() }}
                                        </a>

                                        <div class="cat-posts">
                                            @foreach($headerPosts as $headerPost)
                                                @if($headerPost->category_id == $category->id)
                                                    <div class="cat-post last-post news-body">
                                                        <div class="post-extra clearfix">
                                                            @if($headerPost->getIsVideo() == 'yes' || $headerPost->getIsPhoto() == 'yes')
                                                                <span class="post-file">                                                        
                                                                    @if($headerPost->getIsPhoto() == 'yes')
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
                                                                    @if($headerPost->getIsVideo() == 'yes')
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
                                                            <span class="post-date">{{ $headerPost->getDay() }} {{ $headerPost->getMonthRu() }} @if(date('Y') != $headerPost->getYear()) {{ $headerPost->getYear() }} @endif, {{ $headerPost->getTime()}}</span>
                                                            <span class="post-views">                                                        
                                                                <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                    </g>
                                                                </svg>
                                                                {{ $headerPost->getViewed() }}
                                                            </span>                                                    
                                                        </div>
                                                        <a class="post-title" href="{{ route('front.post', [$headerPost, $lc]) }}">
                                                            <img src="@if($headerPost->thumbnail_big) {{ asset($headerPost->thumbnail_big) }} @else {{ asset($headerPost->thumbnail) }}  @endif" alt=""/>
                                                            {{ $headerPost->getTitleRuOrKg() }}
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                            @foreach($posts as $post)
                                                @if($post->category_id == $category->id)
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
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach  
                            </div>  

                            <div class="right-categories categories">
                                @foreach($rightCategories as $category)
                                    <div class="category">

                                        <a href="{{ route('front.category', $category) }}" class="cat-title">
                                            {{ $category->getTitle() }}
                                        </a>

                                        <div class="cat-posts">
                                            @foreach($headerPosts as $headerPost)
                                                @if($headerPost->category_id == $category->id)
                                                    <div class="cat-post last-post news-body">
                                                        <div class="post-extra clearfix">
                                                            @if($headerPost->getIsVideo() == 'yes' || $headerPost->getIsPhoto() == 'yes')
                                                                <span class="post-file">                                                        
                                                                    @if($headerPost->getIsPhoto() == 'yes')
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
                                                                    @if($headerPost->getIsVideo() == 'yes')
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
                                                            <span class="post-date">{{ $headerPost->getDay() }} {{ $headerPost->getMonthRu() }} @if(date('Y') != $headerPost->getYear()) {{ $headerPost->getYear() }} @endif, {{ $headerPost->getTime()}}</span>
                                                            <span class="post-views">                                                        
                                                                <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                    </g>
                                                                </svg>
                                                                {{ $headerPost->getViewed() }}
                                                            </span>                                                    
                                                        </div>
                                                        <a class="post-title" href="{{ route('front.post', [$headerPost, $lc]) }}">
                                                            <img src="@if($headerPost->thumbnail_big) {{ asset($headerPost->thumbnail_big) }} @else {{ asset($headerPost->thumbnail) }}  @endif" alt=""/>
                                                            {{ $headerPost->getTitleRuOrKg() }}
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                            @foreach($posts as $post)
                                                @if($post->category_id == $category->id)
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
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach  
                            </div>                        
                                              
                        </div>
                    </div>

                    @include('Front::partials.postBanner')

                </div>

                @include('Front::post.rightSectionGeneral')
                
            </div>
        </div>
    </div>
@stop

@section('footerScript')

    <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ru.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/transition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/collapse.js') }}"></script>

    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#inlineCalendar').datetimepicker({
                locale: 'ru',
                format: 'L',
                inline: true,
            sideBySide: true,
            icons: {
                previous: 'fa fa-angle-left',
                next: 'fa fa-angle-right'               
            },
            maxDate: moment().format('YYYY-MM-DD'),
                @if($date)
                    defaultDate: moment('{{$date}}').format('YYYY-MM-DD')
                @endif      
            }).on('dp.change', function(e) {
                var date = moment(e.date).format('YYYY-MM-DD');
                $('input[name=d]').val(date);
                $('#changeDate').submit();
            });
        });
    </script>

@endsection