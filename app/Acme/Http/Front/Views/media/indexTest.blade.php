@extends('Front::layouts.defaultTest')
@section('title', 'Видеопортал | КТРК')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
@endsection

@section('content')

    <div class="section light-section media-section">

        <div class="container">
            <div class="row">
                <div class="section videoportal-section">
                    <div class="section-title">
                        <h4>{{trans('site.LastVideos')}}</h4>
                    </div>
                    <div class="section-body">                        
                        <ul class="filters clearfix">
                            <li class="filter active" data-id="0" data-filter="total">
                                <span>{{ trans('site.AllVideos') }}</span>
                            </li>
                            @foreach($MediaCategories as $key => $MediaCategory)
                                <li class="filter" data-id="{{ $MediaCategory->id }}" data-filter="{{ $MediaCategory->getVideoType() }}">
                                    <span>{{ $MediaCategory->getGlobalName() }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div id="portfoliolist" class="clearfix">
                            @foreach($mediaLastVideos as $key=>$media)
                                <div class="portfolio">
                                    <div class="portfolio-wrapper">
                                        <div class="media-image">
                                            <a href="{{ route('front.media.video', $media) }}">
                                                <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="{{ $media->getName() }}" />
                                                <div class="overlay">
                                                    <div class="media-extra">
                                                        <span class="media-date">{{ $media->getDay() }} {{ $media->getMonthRu() }}, {{ $media->getTime()}}</span>
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
                        
                    </div>

                    <div class="section-footer">
                        <a href="{{ route('front.media.all') }}">
                            {{ trans('site.AllVideos') }}
                        </a>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

    <div class="section dark-section projects-section">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>
                        {{trans('site.Projects')}}
                        <div class="pull-right">
                            <a href="#">
                                Архив
                            </a>
                        </div>                         
                    </h4>
                </div>
                <div class="section-body">
                    <div class="row">
                        @foreach($activeProjects as $project)
                            <div class="project col-md-6">
                                <a href="{{ route('front.media.project', $project) }}">
                                    <figure>
                                        <img src="{{asset($project->getFile())}}" alt="{{$project->getNameOne()}}">
                                        <figcaption>
                                            <h4>{{$project->getNameOne()}}</h4>
                                        </figcaption>
                                    </figure>  
                                </a>                              
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('footerScript')
    <script>

        // Videoportal filter
        $('.filter').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
                var type = $(this).attr('data-filter');
                var dataString = 'type='+type;
                var url = "{{ route('front.homeVideoportal') }}";
                var parent = $('#portfoliolist');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    cache: false,
                    success: function(data)
                    {
                        if(data){
                            parent.html(data);
                        }
                    }
                });
            }
        });

    </script>
@stop
