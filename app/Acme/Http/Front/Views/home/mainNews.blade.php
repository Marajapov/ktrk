<div class="section light-section main-news-section">

    <div class="container">
        <div class="row">
            <div class="section-title">
                <h4>{{ trans('site.Top news') }}</h4>
            </div>

            <div class="section-body">
                <div class="main-news">
                    @if($generalPosts)
                        @foreach($generalPosts as $key=>$post)
                            @if($post)
                                @if($livePost && $key == 0)
                                    <div class="main-news-item main-news-live">
                                        <figure>
                                            <a href="{{ route('front.post', [$post, $lc]) }}" class="main-news-thumb">
                                                <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                            </a>
                                            <figcaption>
                                                <div class="inner">
                                                    <a class="main-news-title" href="{{ route('front.post', [$post, $lc]) }}">
                                                        {{$post->getTitleRuOrKg()}}
                                                    </a>
                                                    <div id="blinkLive1" class="main-news-category clearfix">
                                                        <svg x="0px" y="0px" viewBox="0 0 205 105.1" xml:space="preserve">
                                                            <style type="text/css">
                                                                .st0{fill:none;stroke:#ffffff;stroke-width:5;stroke-miterlimit:10;}
                                                                .st1{fill:none;stroke:#ffffff;stroke-width:5;stroke-miterlimit:10;}
                                                                .st2{fill:none;stroke:#ffffff;stroke-width:5;stroke-miterlimit:10;}
                                                                .st3{fill:#ffffff;}
                                                            </style>
                                                            <g>
                                                                <path class="st0" d="M152.5,2.6c27.6,0,50,22.4,50,50c0,27.6-22.4,50-50,50"/>
                                                                <path class="st0" d="M52.5,102.6c-27.6,0-50-22.4-50-50c0-27.6,22.4-50,50-50"/>
                                                                <line class="st2" x1="152.5" y1="102.6" x2="52.5" y2="102.6"/>
                                                                <line class="st2" x1="152.5" y1="2.6" x2="52.5" y2="2.6"/>
                                                                <g>
                                                                    <path class="st3" d="M90.2,60h10v7.2H82.8V38.1h7.4V60z"/>
                                                                    <path class="st3" d="M102.9,38.1h7.4v29.1h-7.4V38.1z"/>
                                                                    <path class="st3" d="M122,67.2l-9.4-29.1h8.1l5.7,20l5.7-20h8.1l-9.4,29.1H122z"/>
                                                                    <path class="st3" d="M150,60.2h11.3v7h-18.7V38.1h18.5v6.9H150v4h10V56h-10V60.2z"/>
                                                                </g>
                                                                <circle class="st3 blinkCircle" cx="52.5" cy="53.7" r="12.5"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                @else
                                    <div class="main-news-item">
                                        <figure>
                                            <a href="{{ route('front.post', [$post, $lc]) }}" class="main-news-thumb">
                                                <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                            </a>
                                            <figcaption>
                                                <div class="inner">
                                                    <a class="main-news-title" href="{{ route('front.post', [$post, $lc]) }}">
                                                        {{$post->getTitleRuOrKg()}}
                                                    </a>
                                                    <div class="main-news-extra clearfix">                                                                
                                                        <div class="main-news-category clearfix">
                                                            <a href="{{ route('front.category', $post->category) }}">
                                                                {{ $post->category('category_id')->first()->getTitle() }}
                                                            </a>
                                                        </div>
                                                        @if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes')
                                                            <span class="main-news-file post-file">                                                        
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
                                                        <span class="main-news-date">{{ $post->getDay() }} {{ $post->getMonthRu() }} @if(date('Y') != $post->getYear()) {{ $post->getYear() }} @endif, {{ $post->getTime()}}</span>
                                                        <span class="main-news-views">                                                                    
                                                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>
                                                            {{ $post->getViewed() }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @endif
                </div>            
            </div>
           
            <div class="col-md-12 ad-block">
                <a href="@if($positionLeft) {{ $positionLeft->linkTo }} @else # @endif" target="_blank">
                    <img src="@if($positionLeft) {{ asset($positionLeft->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif"/>
                </a>
            </div>
        </div>
    </div>
</div>