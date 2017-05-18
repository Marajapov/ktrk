@extends('Front::layouts.defaultnew')

@section('styles')
    <link href="http://vjs.zencdn.net/5.8.6/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
    <div class="container main-wrapper">
        <div class="row">
            <div class="panel panel-default teleprogramm clearfix">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Онлайн
                    </h3>
                </div>

                <div class="panel-body">

                    {{--<div id="player"></div>--}}

                    {{--<video style="margin: 0 auto; width: 100%;" id="my-video" class="video-js" controls preload="auto" poster="{{ asset('images/live_bg.png') }}" data-setup="{}" src="http://85.113.29.233:1936/live/ktrk.stream/playlist.m3u8">--}}
                        {{--<p class="vjs-no-js">--}}
                            {{--To view this video please enable JavaScript, and consider upgrading to a web browser that--}}
                            {{--<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>--}}
                        {{--</p>--}}
                    {{--</video>--}}

                    <!-- <video style="margin: 0 auto; width: 100%;" id="my-video" class="video-js" controls preload="auto" poster="{{ asset('images/live_bg.png') }}" hd="http://85.113.29.233:1936/live/ktrk.stream/playlist.m3u8" nonhd="http://85.113.29.233:1936/live/mp4:ktrk.stream/playlist.m3u8" hdrtmp="rtmp://85.113.29.233:1936/live/mp4:ktrk.stream" nonhdrtmp="rtmp://85.113.29.233:1936/live/ktrk.stream" autoplay="" src="http://85.113.29.233:1936/live/mp4:ktrk.stream/playlist.m3u8" data-setup="{}">
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video> -->
                    <div id="my-video">
                        sory
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--<div id="player"></div>--}}

{{--<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>--}}

{{--<script src="{{ asset('jwplayer/jwplayer.js') }}"></script>--}}
{{--<script>jwplayer.key="tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>--}}

{{--<script type="text/javascript">--}}

    {{--var playerInstance = jwplayer("player");--}}

    {{--//    $('#playerPlay').click(function(){--}}
    {{--//        playerInstance.play();--}}
    {{--//    });--}}
    {{--$('#playerStop').click(function(){--}}
        {{--playerInstance.stop();--}}
    {{--});--}}

    {{--playerInstance.setup({--}}
        {{--autostart: true,--}}
        {{--playlist: [{--}}
            {{--image: "--}}{{-- asset('images/live_bg.png') --}}{{--",--}}
            {{--sources: [{--}}
                {{--file: "rtmp://212.2.227.13:1935/live/ktrk.stream"--}}
            {{--}]--}}
        {{--}],--}}
        {{--width: "640",--}}
        {{--height: "360",--}}
        {{--skin: {--}}
            {{--name: "five"--}}
        {{--},--}}
        {{--stretching: "exactfit"--}}
    {{--});--}}
{{--</script>--}}

{{--</body>--}}



@section('footerScript')
    <script src="http://vjs.zencdn.net/5.8.6/video.js"></script>

    <script>
        $(document).ready(function () {
            var el = $('#my-video');
            var videoWidth = el.width();
            el.height(videoWidth*9/16);
        });
    </script>
@stop