<div class="section dark-section video-section">

    <div class="container section-title">
        <div class="row">
            <h4>{{ trans('site.FrontPostDaysVideo') }}</h4>
        </div>
    </div>

    <div class="section-body">

        <!-- Day Video 1 -->
        @if($dayVideo1)
            <div class="video">
                <div class="embed-youtube embed-responsive embed-responsive-16by9">
                    <figure>
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo1){{$dayVideo1->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                        <figcaption>
                            <div class="video-thumb">
                                <img src="@if($dayVideo1->thumbnail_big) {{ asset($dayVideo1->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo1->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo1->getName() }}" />
                            </div>
                            <div class="video-type">
                                <h3 id="videoTitle">
                                    <span>{{ trans('site.FrontPostDaysNews') }}</span>
                                </h3>
                            </div>
                            <div class="video-info">
                                <a href="{{route('front.media.video',$dayVideo1)}}">
                                    @if($dayVideo1){{ $dayVideo1->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                </a>
                            </div>
                            <div class="video-play">                                                        
                                <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                    <g transform="translate(0,-952.36218)">
                                        <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                            c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                            L11.7,961.3z"/>
                                    </g>
                                </svg>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        @endif

        <!-- Day Video 2 -->
        @if($dayVideo2)
            <div class="video">
                <div class="embed-youtube embed-responsive embed-responsive-16by9">
                    <figure>
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo2){{$dayVideo2->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                        <figcaption>
                            <div class="video-thumb">
                                <img src="@if($dayVideo2->thumbnail_big){{ asset($dayVideo2->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo2->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo2->getName() }}" />
                            </div>
                            <div class="video-type">
                                <h3 id="videoTitle">
                                    <span>{{ trans('site.FrontPostDaysEpisode') }}</span>
                                </h3>
                            </div>
                            <div class="video-info">
                                <a href="{{route('front.media.video',$dayVideo2)}}">
                                    @if($dayVideo2){{ $dayVideo2->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                </a>
                            </div>
                            <div class="video-play">                                                        
                                <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                    <g transform="translate(0,-952.36218)">
                                        <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                            c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                            L11.7,961.3z"/>
                                    </g>
                                </svg>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        @endif

        <!-- Day Video 3 -->
        @if($dayVideo3)
            <div class="video">
                <div class="embed-youtube embed-responsive embed-responsive-16by9">
                    <figure>
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo3){{$dayVideo3->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                        <figcaption>
                            <div class="video-thumb">
                                <img src="@if($dayVideo3->thumbnail_big) {{ asset($dayVideo3->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo3->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo3->getName() }}" />
                            </div>
                            <div class="video-type">
                                <h3 id="videoTitle">
                                    <span>{{ trans('site.FrontPostDaysAnons') }}</span>
                                </h3>
                            </div>
                            <div class="video-info">
                                <a href="{{route('front.media.video',$dayVideo3)}}">
                                    @if($dayVideo3){{ $dayVideo3->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                </a>
                            </div>
                            <div class="video-play">
                                <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                    <g transform="translate(0,-952.36218)">
                                        <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                            c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                            L11.7,961.3z"/>
                                    </g>
                                </svg>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        @endif

        <!-- Day Video 4 -->
        @if($dayVideo4)
            <div class="video">
                <div class="embed-youtube embed-responsive embed-responsive-16by9">
                    <figure>
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo4){{$dayVideo4->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                        <figcaption>
                            <div class="video-thumb">
                                <img src="@if($dayVideo4->thumbnail_big) {{ asset($dayVideo4->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo4->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo4->getName() }}" />
                            </div>
                            <div class="video-type">
                                <h3 id="videoTitle">
                                    <span>{{ trans('site.FrontPostDaysMaanai') }}</span>
                                </h3>
                            </div>
                            <div class="video-info">
                                <a href="{{route('front.media.video',$dayVideo4)}}">
                                    @if($dayVideo4){{ $dayVideo4->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                </a>
                            </div>
                            <div class="video-play">
                                <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                    <g transform="translate(0,-952.36218)">
                                        <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                            c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                            L11.7,961.3z"/>
                                    </g>
                                </svg>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        @endif
                   
    </div>
</div>