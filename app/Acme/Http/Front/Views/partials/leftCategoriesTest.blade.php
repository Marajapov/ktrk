<div class="top-right-block col-md-3 @if($topArticles) with-top-articles @endif">

    @if($topArticles)

        <div class="panel panel-default latest-news">
            <div class="panel-heading main-heading">
                <h3 class="panel-title"><span>{{ trans('site.PostAktualno') }}</span></h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($topArticles as $post)
                        <li class="list-group-item news-item">
                            <div class="news-body clearfix">

                                <div class="post-extra clearfix">
                                    <a href="{{ route('front.category', $post->category) }}" class="post-category">{{ $post->category('category_id')->first()->getTitle() }}</a>
                                    <span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
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
                                <a class="post-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                    {{ $post->getTitleRuOrKg() }}
                                </a>
                            </div>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div> 

        <a target="_blank" href="#" class="text-center ads ads-300x250 middle-ad">
            <img src="{{ asset('images/banner_240x400.png') }}" alt="phot1"/>
        </a>

        <div class="panel panel-default latest-news">
            <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.PostPopular') }}</span></h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($popArticles as $post)
                        <li class="list-group-item news-item">
                            <div class="news-body clearfix">

                                <div class="post-extra clearfix">
                                    <a href="{{ route('front.category', $post->category) }}" class="post-category">{{ $post->category('category_id')->first()->getTitle() }}</a>
                                    <span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
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
                                <a class="post-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                    {{ $post->getTitleRuOrKg() }}
                                </a>
                            </div>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>

    @endif
    
</div><!-- end of left categories -->