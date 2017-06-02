<div class="section dark-section bottom-section">

    <div class="container">
        <div class="row">
            
            <div class="bottom-left-section col-md-8">
                <div class="section reporter-section">
                    <div class="section-title">
                        <h4>{{ trans('site.Reporter') }}</h4>
                    </div>

                    <div class="section-body">

                        <div class="reporter-slider">
                            @if($reporterPosts)
                                @foreach($reporterPosts as $post)
                                    <div class="col-md-4 rep-post">
                                        <a class="rep-thumb" href="{{ route('front.post', [$post, $lc]) }}">
                                            <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt=""/>
                                            <div class="overlay">
                                                <span class="rep-name">{{ $post->getTitleRuOrKg() }}</span>
                                                <span class="rep-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getYear() }}</span>
                                                <span class="rep-view">{{ $post->getViewed() }}</span>
                                                <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                    <g>
                                                        <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <div class="bottom-right-section col-md-4">
                <a target="_blank" href="@if($positionRight) {{ $positionRight->linkTo }} @else # @endif" class="ad-block">
                    <img src="@if(!empty($positionRight->file)) {{ asset($positionRight->file) }} @else {{ asset('images/banner_300x250.png') }} @endif" alt="phot1"/>
                </a>
            </div>

        </div>
    </div>

</div>