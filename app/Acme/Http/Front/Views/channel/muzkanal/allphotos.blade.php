@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Photos'))
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')

   <!-- Main slider -->
   <div class="container">
      <div class="row photosmuz">
         <div class="col-md-12 topchart">
            <div class="panel">
               <div class="panel-heading">
                  <div class="panel-title">
                     <h4 class="show-title">
                        <a href="#">{{ trans('radiopages.Photos') }}</a> 
                     </h4>
                  </div>
               </div>
               <div class="panel-body">
               <div class="featured_4 allphotospace clearfix">
                  @if($photoGalleries != null)
                  @foreach($photoGalleries as $photoGallery)
                  <div class="col-md-3 col-sm-4 col-xs-6 onepadding">
                     <div class="featured_element">
                        <div class="featured_item">
                           <img src="{{ asset($photoGallery->thumbnail_big) }}">                           
                           <i class="fa fa-camera"></i>
                           <div class="extra" style="position: absolute; bottom: 0px; left: 10px;color: #fff;">
                              <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                           </div>
                        </div>
                        <a href="{{ route('muzkanal.photos', $photoGallery) }}" class="f_overlay"></a>
                        
                           <div class="featured_title_over text-center"> 
                              <a href="{{ route('muzkanal.photos', $photoGallery) }}">                                                
                              {{ $photoGallery->getName() }}
                              </a>                                                
                           </div>                        
                     </div>
                  </div>
                  @endforeach
                  @endif
               </div>
               </div>
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