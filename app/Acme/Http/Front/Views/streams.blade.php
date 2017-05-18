@extends('Front::layouts.defaultTest')
@section('title', "Стрим")

@section('styles')    
    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vertex.css') }}">
@endsection

@section('content')
    <div id="stream" class="container main-wrapper">
        <div class="row">
            <div class="panel panel-default clearfix">
                <div class="clearfix">
                    <div class="col-md-9 no-padding">
                        <div id="player"></div> 
                        <div class="panel-body">
                            @foreach($streams as $key=> $stream)
                            <span id="content{{$key+99}}" class="data-content" style="display: none">{!! $stream->getContentOne() !!}</span>
                            @endforeach   
                        </div>             
                    </div>
                    <div class="col-md-3 no-padding">
                        <ul class="playlist">
                            @foreach($streams as $key=> $stream)
                            <li class="stream">
                                <a href="javascript:playStream('{{ $stream->getStreamUrl()}}', '../{{ $stream->getFileBig()}}')" onClick="return dataContent({{$key+99}})">
                                    <img src='../{{ $stream->getFile()}}' />
                                    <h4>{{ $stream->getTitleOne()}}</h4>
                                </a>
                            </li>  
                            @endforeach                                                   
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@stop

@section('footerScript')

<script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
<script>jwplayer.key="tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>
<script type="text/javascript">

    var playerInstance = jwplayer("player");

    $('#playerStop').click(function(){
        playerInstance.stop();
    });

    playerInstance.setup({
        autostart: false,
        playlist: [{
            image: "{{ asset('images/live_bg.png')}}",
            title: "КТРК",
            sources: [{
                  file:"http://85.113.29.234:80/live/5001.flv"
            }]
        }],
        primary: "html5",
        skin: "seven",
        stretching: "exactfit",
        height: 460,
        width: "100%",
        sharing: {
            sites: ["facebook","twitter"]
          }
        });
</script>

<script>
    function playStream(video, thumb, id) { 
      playerInstance.load([{
        file: video,
        image: thumb
      }]);
      playerInstance.play();
    }
</script>

<script>
$(document).ready(function() {
    var $links = $('a');
    $links.click(function () {
        $links.removeClass('current');
        $(this).addClass('current');
    });
});
</script>
<script>

  function dataContent(key){
    $('.data-content').hide();
     $('#content'+key).show();
  }
</script>

@stop