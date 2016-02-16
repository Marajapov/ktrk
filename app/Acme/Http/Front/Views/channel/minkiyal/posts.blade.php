@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')

@include('Front::channel.minkiyal.nav')
  <div class="container headermin">
      <div id="main-menu" class="navbar" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Меню</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse text-center">
          <div class="menu">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ route('minkiyal.home') }}">Башкы</a></li>
              <li><a href="{{ route('minkiyal.home') }}#report">Фоторепортаж</a></li>
              <li><a href="{{ route('minkiyal.home') }}#contacts">Байланыш</a></li>
            </ul>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
<div class="contaner-fluid imagereports">
  <div class="container info">
    <div class="col-md-12">
      <h2>Фоторепортаждар</h2>
      <div id="allposts" class="row">
          @if($photoGalleries)
           @foreach($photoGalleries as $photoGallery)
           <div class="col-md-4 sm-12 postshow">
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
            $("#allposts .postshow").slice(0, 6).show(); // select the first six
            $("#allposts .loadMore").click(function(e){ // click event for load more
                e.preventDefault();
                $("#allposts .postshow:hidden").slice(0, 6).show(); // select next 6 hidden divs and show them
                if($("#allposts .postshow:hidden").length == 0){ // check if any hidden divs still exist
                    $("#allposts .loadMore").hide();
                }
            });
            if($("#allposts .postshow:hidden").length == 0){ // check if any hidden divs still exist
                $("#allposts .loadMore").hide();
            }
        });
    </script>
@stop