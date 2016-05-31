@extends('Front::channel.balastan.default')
@section('title', $gallery->getName())
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
<link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>
@endsection
@section('content')
<div class="container-fluid pages-header">
    <div class="row">

        @include('Front::channel.balastan.nav')

        <div class="container pages-title">
            <div class="row">
                <div class="title col-md-12">
                    <h3>{{ $gallery->getName() }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid lightgallery">
  <div class="row">
    <div class="container">
      <div class="col-md-12">
         <div class="panel balastanphoto">
            <div class="panel-body kidphotos">
               <div class="row">
                   <span class="show-extra">
                        <span class="show-date">{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }}, {{ $gallery->getYear() }}</span>
                        <span class="show-view">
                            <i class="fa-view"></i>{{ $gallery->viewed }}
                        </span>
                    </span>
                  <p style="text-align:center; color: #fff; font-size: 18px;">{!! $gallery->getDescription() !!}</p>
                  <ul id="imageGallery">
                     @foreach($images as $image)
                     <li data-thumb="{{ asset('froala/uploads/'.$image->name) }}" data-src="{{ asset('froala/uploads/'.$image->name) }}">
                        <img class="resizegallery" src="{{ asset('froala/uploads/'.$image->name) }}" />
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
        <footer style="text-align: center;">
          <div class="pluso share-buttons">
            <button class="goodshare btn-fb" data-type="fb">
              <i class="fa fa-facebook"></i>
              <span data-counter="fb"></span>
            </button>
            <!-- Button with share to Facebook & share counter -->
            <button class="goodshare btn-vk" data-type="vk">
              <i class="fa fa-vk"></i>
              <span data-counter="vk"></span>
            </button>
            <button class="goodshare btn-ok" data-type="ok">
              <i class="fa fa-odnoklassniki"></i>
              <span data-counter="ok"></span>
            </button>
            <button class="goodshare btn-gp" data-type="gp">
              <i class="fa fa-google-plus"></i>
              <span data-counter="gp"></span>
            </button>
            <button class="goodshare btn-tw" data-type="tw">
              <i class="fa fa-twitter"></i>
              {{--<span data-counter="tw"></span>--}}
            </button>
          </div>
        </footer>
      </div>
    </div>
  </div>
</div>
@stop
@section('footerScript')
<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>  
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
<script src="{{ asset('js/lightslider.js') }}"></script>
<script src="{{ asset('js/lightgallery/picturefill.min.js') }}"></script>
<script src="{{ asset('js/lightgallery/lightgallery.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-fullscreen.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-thumbnail.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-video.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-autoplay.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-zoom.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-hash.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-pager.js') }}"></script>
<script src="{{ asset('jslightgallery/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('js/goodshare.js') }}"></script>
<script>
  $(window).load(function(){
    $('.goodshare').each(function(){
      var span = $(this).children('span');
      var counter = span.text();
      if((counter==0) || (counter=='')){
        $(this).addClass('empty');
      }
    });
  });
</script>
<script type="text/javascript">
   $(document).ready(function() {
   $('#imageGallery').lightSlider({
     gallery:true,
     item:1 ,
     loop:true,
     thumbItem:8,
     slideMargin:0,
     enableDrag: true,
     currentPagerPosition:'right',
     onSliderLoad: function(el) {
         el.lightGallery({
             selector: '#imageGallery .lslide'
         });
     }   
   });  
   });
</script>
@stop