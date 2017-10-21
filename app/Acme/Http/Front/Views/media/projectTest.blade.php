@extends('Front::layouts.defaultTest')
@section('title', $project->getNameOne().' | Видеопортал | КТРК')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
@endsection

@section('content')

    <div class="section light-section media-section">

        <div class="container">
            <div class="row">
                <div class="section videoportal-section">
                    <div class="section-title">
                        
                        <h4>
                            <a href="{{route('front.media.index')}}">
                                Видеопортал
                            </a>
                            <span class="divider"><i class="fa fa-circle"></i></span>
                            {{$project->getNameOne()}}
                        </h4>                   
                    </div>
                    <div class="section-desc">
                        {{trans('site.AboutProject')}}
                    </div>
                    <div class="section-body">
                        {!! $project->getDescription() !!}
                    </div>

                </div>

                <div class="section">
                    
                    <div class="section-desc">
                        {{trans('site.Episodes')}}
                    </div>
                    <div class="section-body">

                        <div id="portfoliolist" class="clearfix">
                            @foreach($allVideos as $key=>$media)
                                <div class="portfolio">
                                    <div class="portfolio-wrapper">
                                        <div class="media-image">
                                            <a href="{{ route('front.media.video', $media) }}">
                                                <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="{{ $media->getName() }}" />
                                                <div class="overlay">
                                                    <div class="media-extra">
                                                        <span class="media-date">
                                                            {{ $media->getDay() }} {{ $media->getMonthRu() }} @if(date('Y') != $media->getYear()) {{ $media->getYear() }} @endif, {{ $media->getTime()}}
                                                        </span>
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

                        <footer>
                            <nav class="pagination-nav">
                                <ul class="pagination">
                                    <li class="pagination-auto">
                                        <a href="{{ route('front.media.project', ['project' => $project, 'page' => 1]) }}" class="@if($allVideos->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ $allVideos->previousPageUrl() }}" class="slick-arrow arrow-prev @if($allVideos->currentPage() == 1) disabled @endif">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
                                        </a>
                                    </li>

                                    @if($allVideos->lastPage() > 4)
                                        @if($allVideos->currentPage() < 3)
                                            @for($i = 1; $i <= 5; $i++)
                                                <li>
                                                    <a href="{{ route('front.media.project', ['project' => $project, 'page' => $i]) }}" class="@if($allVideos->currentPage() == $i) active @endif">
                                                        {{ $i }}
                                                    </a>
                                                </li>
                                            @endfor
                                        @elseif(ceil($allVideos->total()/$perPage) - $allVideos->currentPage() < 2)
                                            @for($i = ceil($allVideos->total()/$perPage)-4; $i <= ceil($allVideos->total()/$perPage); $i++)
                                                <li>
                                                    <a href="{{ route('front.media.project', ['project' => $project, 'page' => $i]) }}" class="@if($allVideos->currentPage() == $i) active @endif">
                                                        {{ $i }}
                                                    </a>
                                                </li>
                                            @endfor
                                        @else
                                            @for($i = $allVideos->currentPage()-2; $i <= $allVideos->currentPage()+2; $i++)
                                                <li>
                                                    <a href="{{ route('front.media.project', ['project' => $project, 'page' => $i]) }}" class="@if($allVideos->currentPage() == $i) active @endif">
                                                        {{ $i }}
                                                    </a>
                                                </li>
                                            @endfor                                         
                                        @endif
                                    @else
                                        @for($i = 1; $i <= $allVideos->lastPage(); $i++)
                                            <li>
                                                <a href="{{ route('front.media.project', ['project' => $project, 'page' => $i]) }}" class="@if($allVideos->currentPage() == $i) active @endif">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @endif

                                    

                                    <li>
                                        <a href="{{ $allVideos->nextPageUrl() }}" class="slick-arrow arrow-next @if($allVideos->currentPage() == ceil($allVideos->total()/$perPage)) disabled @endif">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>
                                        </a>
                                    </li>

                                    <li class="pagination-auto">
                                        <a href="{{ route('front.media.project', ['project' => $project, 'page' => ceil($allVideos->total()/$perPage)]) }}" class="@if($allVideos->currentPage() == ceil($allVideos->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                    </li>

                                </ul>
                            </nav>
                        </footer> 
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>   

@stop
