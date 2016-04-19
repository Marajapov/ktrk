@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')

@include('Front::channel.minkiyal.nav')
@include('Front::channel.minkiyal.navs')

<div class="contaner-fluid">
  <div class="container info" style="display: inherit; margin-top: inherit;">
    <div id="allposts" class="col-md-12">
      <h2>Сүрөт баяндар</h2>
      <div class="row">
          @if($photoGalleries)
           @foreach($photoGalleries as $photoGallery)
           <div class="col-md-4 sm-12 imageshow">
              <a href="{{ route('minkiyal.post', $photoGallery) }}">
                <img src="{{ asset($photoGallery->thumbnail_big) }}" class="img-responsive" alt=""></a>  
              <div class="extra" style="background: none; padding: 0; width: 91%;">                
                <a href="{{ route('minkiyal.post', $photoGallery) }}">
                <h3 style="padding: 20px 15px">{{ $photoGallery->getName() }}</h3> 
                <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}</span>
                </a> 
              </div>
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