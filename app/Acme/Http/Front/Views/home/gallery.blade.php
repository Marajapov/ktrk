<div class="section light-section gallery-section">

    <div class="container">
        <div class="row">
            <div class="section-title">
                <h4>{{ trans('site.BaikoochuKeneshGallery') }}</h4>
            </div>

            <div class="section-body">

                @if($photoGalleryFirst)
                <div class="col-md-6 gallery-left">
                    <div class="row">
                        <a class="gallery-item" href="{{ route('front.gallery', $photoGalleryFirst) }}">
                            <figure>
                                <img src="{{ asset($photoGalleryFirst->thumbnail_big) }}" alt=""/>
                                <figcaption>
                                    <div class="post-extra clearfix">
                                        <span class="post-date">{{ $photoGalleryFirst->getDay() }} {{ $photoGalleryFirst->getMonthRu() }}, {{ $photoGalleryFirst->getTime()}}</span>
                                        <span class="post-views">                                                        
                                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                <g>
                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                </g>
                                            </svg>
                                            {{ $photoGalleryFirst->viewed }}
                                        </span>                                                    
                                    </div>
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
                                    <span class="gallery-title">
                                        {{ $photoGalleryFirst->getName() }}
                                    </span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>                                
            @endif

            <div class="col-md-6 gallery-right">
                <div class="row">
                    @if($photoGalleries)
                        @foreach($photoGalleries as $photoGallery)
                            <div class="col-md-6">
                                <div class="row">
                                    <a class="gallery-item" href="{{ route('front.gallery', $photoGallery) }}">
                                        <figure>
                                            <img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/>
                                            <figcaption>
                                                <div class="post-extra clearfix">
                                                    <span class="post-date">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime()}}</span>
                                                    <span class="post-views">                                                        
                                                        <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                            <g>
                                                                <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                    C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                            </g>
                                                        </svg>
                                                        {{ $photoGallery->viewed }}
                                                    </span>                                                    
                                                </div>
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
                                                <span class="gallery-title">
                                                    {{ $photoGallery->getName() }}
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>    
                            </div>
                        @endforeach
                    @endif
                    </div>
                </div>

            </div>
            
            <footer>
                <a href="{{ route('front.gallery.galleries') }}">
                    <span>{{ trans('site.FrontGalleryAll') }}</span>
                </a>
            </footer>
        </div>
    </div>

</div>