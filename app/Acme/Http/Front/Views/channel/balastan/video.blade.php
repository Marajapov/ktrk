@extends('Front::channel.balastan.default')
@section('title', "Видео")
@section('styles')
@endsection
@section('content')
    <div class="container-fluid pages-header">
        <div class="row">
            @include('Front::channel.balastan.nav')
            <div class="container pages-title">
                <div class="row">
                    <div class="title col-md-12">
                        @if($balastanProjects )
                            @foreach($balastanProjects as $project)
                                <h3>{{ $project->getName() }}</h3>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fullvideo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if($balastanLastVideo)
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$balastanLastVideo->getUrl()}}?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>
                        </div>
                        <div class="episode-info">
                            
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid relatedvideos">
        <div class="container">
            <div class="row">
                <div class="title col-md-12">
                    <h3>Байланышкан видеолор</h3>
                </div>
            </div>
            <div class="row">
                @if($balastanMedias)
                    @foreach($balastanMedias as $media)
                        <div class="col-md-4 video-block">
                            <a href="{{ route('balastan.video', $media)}}" class="video-img">
                                @if($media->thumbnail_big)
                                    <img src="{{ asset($media->thumbnail_big) }}" alt="" />
                                @else
                                    <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/0.jpg" alt="" />
                                @endif
                                <span class="video-overlay"></span>
                            </a>
                            <div class="video-info">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <i class="fa fa-youtube-play video-icon"></i>
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="media-heading video-name"><a href="{{ route('balastan.video', $media)}}">{{ $media->getName() }}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="container" style="padding:0px;">

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12 kidsvideoblock">
                <div class="panel panel-default">
                    <div class="panel-body" style="padding:0px;">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-12 kidspered text-center">
                                    <h2>{{ trans('radiopages.Bperedachi') }}</h2>
                                    @if($balastanProjects)
                                        @foreach($balastanProjects as $project)
                                            <nav>
                                                <ul>
                                                    <li><a class="kid1" href="{{ route('balastan.projectVideos', $project) }}">{{ $project->getName() }}</a></li>
                                                </ul>
                                            </nav>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- col-md-offset-1 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footerscript2')
@stop