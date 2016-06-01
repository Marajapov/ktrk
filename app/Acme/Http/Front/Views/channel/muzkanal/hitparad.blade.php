@extends('Front::channel.muzkanal.default')
@section('title', "Хит-Парад")
@section('styles')
<link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')
   <!-- Main slider -->
   <div class="container">
      <div class="row">
         <div class="col-md-8 topchart">
            <div class="panel">
               <div class="panel-heading">
                  <div class="panel-title">
                     <h4 class="show-title">
                        <a href="#">Музыка</a>
                        <i class="fa fa-caret-right"></i>
                        <span>Хит-Парад ТОП-10</span>
                     </h4>
                  </div>
               </div>
               <div class="panel-body">
                  <div class="col-xs-12 toplist videofix" style="margin-bottom: 15px;">
                     @if($hitNumbers)
                     @foreach($hitNumbers as $hit)
                     <div class="row topborder">
                        <div class="col-xs-1 topnumber" style="height:50px;">
                           <h2>{{ $hit->hitnumber }}</h2>
                        </div>
                        <div class="col-xs-1 topimg" style="height:50px;">
                           <img src="http://img.youtube.com/vi/{{ $hit->getUrl()}}/mqdefault.jpg" alt="">
                        </div>
                        <a href="{{route('muzkanal.video', $hit)}}">
                        <div class="col-xs-9 topartist" style="height:50px;">
                           
                              <h3>{{ $hit->getName() }}</h3>
                           
                        </div>
                        </a>
                        <div class="col-xs-1 topclip" style="height:50px;">
                           <a href="{{route('muzkanal.video', $hit)}}"><i class="glyphicon glyphicon-play"></i> </a>
                        </div>
                     </div>
                     @endforeach
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 topchart">
            <div class="panel">
               <div class="panel-heading">
                  <div class="panel-title">
                     <h4 class="show-title">
                        <a href="#">Промо</a> 
                        <!--  <i class="fa fa-caret-right"></i> -->
                        <span>.</span>                              
                     </h4>
                  </div>
               </div>
               @if($promo != null)
               <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $promo->getUrl()}}" frameborder="0" allowfullscreen></iframe>
               @else
               <iframe width="100%" height="300" src="https://www.youtube.com/embed/t8r7ifqRViY" frameborder="0" allowfullscreen></iframe>    
               @endif
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12" style="margin-bottom:15px;">
            <div class="row topvideos ">
               <div class="panel panel-default panel-carousel">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 videofix">
                        <div class="carousel-slick">
                           @if($MediaTop1)
                           @foreach($MediaTop1 as $top1)
                           <div class="col-md-4 col-xs-12">
                              <a href="{{ route('muzkanal.video', $top1)}}">
                              <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/mqdefault.jpg" alt=""/></a>
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $top1)}}">
                                       <li class="item-artist">{{ $top1->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              @if($top1->exclusive == 1)
                                 <div class="ishit">Экслюзив!</div>
                              @endif
                              <div class="views"><i class="fa fa-eye"></i>{{ $top1->getViewed() }}</div>
                           </div>
                           @endforeach
                           @endif
                        </div>
                        <footer>
                           <a href="#">
                           <span>{{ trans('radiopages.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                           </a>
                        </footer>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @stop
   @section('footerScript')
   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script> 

   <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
   <!-- Fixed Sticky header -->
   <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>   
   <!-- Fixed Sticky header -->



   <!--Carousel-->
   <script>
      if ($(window).width() > 768) {
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
          $('.carousel-slick1').slick({
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
      if ($(window).width() < 768) {
          $('.carousel-slick1').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
      if ($(window).width() < 768) {
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
   </script>
   @stop