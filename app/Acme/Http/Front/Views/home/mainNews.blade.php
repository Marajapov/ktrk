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
                                            <a href="{{ route('front.vertex.post', [$post, $lc]) }}" class="main-news-thumb">
                                                <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                            </a>
                                            <figcaption>
                                                <div class="inner">
                                                    <a class="main-news-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                                        {{$post->getTitleRuOrKg()}}
                                                    </a>
                                                    <div class="main-news-category clearfix">
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
                                                                <line class="st1" x1="52.5" y1="62.6" x2="52.5" y2="42.6"/>
                                                                <line class="st2" x1="152.5" y1="102.6" x2="52.5" y2="102.6"/>
                                                                <line class="st2" x1="152.5" y1="2.6" x2="52.5" y2="2.6"/>
                                                                <g>
                                                                    <path class="st3" d="M90.2,60h10v7.2H82.8V38.1h7.4V60z"/>
                                                                    <path class="st3" d="M102.9,38.1h7.4v29.1h-7.4V38.1z"/>
                                                                    <path class="st3" d="M122,67.2l-9.4-29.1h8.1l5.7,20l5.7-20h8.1l-9.4,29.1H122z"/>
                                                                    <path class="st3" d="M150,60.2h11.3v7h-18.7V38.1h18.5v6.9H150v4h10V56h-10V60.2z"/>
                                                                </g>
                                                                <circle class="st3" cx="52.5" cy="53.7" r="12.5"/>
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
                                            <a href="{{ route('front.vertex.post', [$post, $lc]) }}" class="main-news-thumb">
                                                <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                            </a>
                                            <figcaption>
                                                <div class="inner">
                                                    <a class="main-news-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                                        {{$post->getTitleRuOrKg()}}
                                                    </a>
                                                    <div class="main-news-extra clearfix">                                                                
                                                        <div class="main-news-category clearfix">
                                                            <a href="{{ route('front.category', $post->category) }}">
                                                                {{ $post->category('category_id')->first()->getTitle() }}
                                                            </a>
                                                        </div>
                                                        <span class="main-news-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
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