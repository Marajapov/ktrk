@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')

@include('Front::channel.minkiyal.nav')
<nav id="main-menu" class="navbar navbar-minheader">
  <div class="container-fluid">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">        
        </a>
        <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{ route('minkiyal.home')}}">Башкы</a></li>
          <li><a href="{{ route('minkiyal.posts')}}">Сүрөтбаяндар</a></li>
          <li><a href="{{ route('minkiyal.home')}}#contacts">Биз жөнүндө</a></li>
          <li><a href="{{ route('minkiyal.home')}}">Ди-Джейлер</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
                <div class="online">
              <h3><i class="fa fa-microphone"></i>Түз эфир</h3>
              <object width="65" height="40" data="http://ktrk.kg/online/uppod.swf">
                 <param name="bgcolor" value="#ffffff" />
                 <param name="allowFullScreen" value="false" />
                 <param name="allowScriptAccess" value="false" />
                 <param name="audio" value="http://ktrk.kg/online/uppod.swf" />
                 <param name="flashvars" value="comment=KTRK&amp;st=03AEEZykN3Q3Q3QH3zkOk1mwXRWNvz3b1XAxYTtj1mzC5kA2uyb1kOk1mwXRWNvhzdwf9vwjzC5k=jQZi6jNf1kOk1mwXRWHNXzBGDY31X=jOkZ2sN6HsQfzC5kev0kttj1vL2NXzC5k1sQE3Q2GkTCGfFdGJTCHwXpvQXeWNhHm0X1hsNkTWwWTSUhTd0kNtj1JTWwf9vwnY31DX1CYLex5W=jaktjR1i6W0kbSal1C0V9Rv1XAuaTtj1tzC5kb42Qi63Gktj1ozfUrd&amp;file=http://212.112.96.232:8081" />
              </object>
           </div>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
</nav
<div class="contaner-fluid imagereports">
  <div class="container info">
    <div id="allposts" class="col-md-12">
      <h2>Фоторепортаждар</h2>
      <div class="row">
          @if($photoGalleries)
           @foreach($photoGalleries as $photoGallery)
           <div class="col-md-4 sm-12 imageshow">
              <img src="{{ asset($photoGallery->thumbnail_big) }}" class="img-responsive" alt="">
              <a href="{{ route('minkiyal.post', $photoGallery) }}"><h3>{{ $photoGallery->getName() }}</h3></a>  
           </div>
           @endforeach
           @endif
        <div class="col-md-12 more">
          <a class="show-btn loadMore" href="#">
            дагы жүктөө
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
@stop
@section('footerScript')
    <script>
        $(function(){
            $("#allposts .imageshow").slice(0, 6).show(); // select the first six
            $("#allposts .loadMore").click(function(e){ // click event for load more
                e.preventDefault();
                $("#allposts .imageshow:hidden").slice(0, 6).show(); // select next 6 hidden divs and show them
                if($("#allposts .imageshow:hidden").length == 0){ // check if any hidden divs still exist
                    $("#allposts .loadMore").hide();
                }
            });
            if($("#allposts .imageshow:hidden").length == 0){ // check if any hidden divs still exist
                $("#allposts .loadMore").hide();
            }
        });
    </script>
@stop