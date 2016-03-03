@extends('Front::channel.dostuk.default')
@section('title', "Достук Радиосу")
@section('styles')
@endsection
@section('content')
@include('Front::channel.dostuk.nav')
<section id="main-slider">
   <div class="banners">
      @if($anons->first())
      @foreach($anons as $row)
      <div>
         <img src="{{asset($row->thumbnail)}}" width="1366" alt="">
         <div class="container">
            <div class="banners-content">
               <h2><span>{{ $row->getNameOne() }}</span></h2>
            </div>
         </div>
      </div>
      @endforeach
      @endif
   </div>
</section>
@include('Front::channel.dostuk.header')
<div class="main-container">
   <!--/#main-slider-->
   <div id="homepage">
      <!--       <section id="cta2">
         <div class="container">
            <div class="section-header3">
               <h2 class="section-title text-center wow fadeInDown"></h2>
               <h2 data-wow-duration="300ms" data-wow-delay="0ms"><span>{{ trans('radiopages.DostukSlogan') }}</span></h2>
               <h2 class="section-title text-center wow fadeInDown"></h2>
            </div>
         </div>
         </section> -->
      <section id="anonses">
         <div class="row">
            @if($dostuktop)
            <div class="info">
               @foreach($dostuktop as $key=> $row)
               <div class="col-md-4 col-sm-12 postshow">
                  <a href="#" data-toggle="modal" data-target="#{{ $key+99 }}">
                     <img src="{{asset($row->thumbnail)}}" class="img-responsive" alt="">
                     <h3>{{$row->name}}</h3>
                  </a>
               </div>
               <!-- Modal -->
               <div id="{{ $key+99 }}" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-lg">
                     <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                           <h4 class="modal-title">{{$row->name}}</h4>
                        </div>
                        <div class="modal-body">
                           {!! $row->getDesc() !!}
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               @endif
            </div>
         </div>
      </section>
      <section id="services" >
         <div class="container">
            <div class="section-header">
               <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Peredachi') }}</h2>
            </div>
            <div class="row">
               <div class="col-md-12">
               @if($dostukProjects) 
               @foreach($dostukProjects as $project)       
               
                  @if($project->program()->get())
                  @foreach($project->program()->get() as $post)
                  <div class="col-md-4 ukturuu">
                     <div class="media-info">
                           <img src="@if(empty($post->thumbnail_big)) {{  asset($post->thumbnail) }} @else {{  asset($post->thumbnail_big) }} @endif" alt="image">
                           <span class="project">
                              <a href="{{ route('dostuk.project',$project->id) }}"><i class="fa fa-list"></i>{{ $project->getName() }}</a>
                           </span>
                           <span class="date">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                           <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                     </div>
                     <div class="media-name">
                        <a class="media-heading" href="{{ route('dostuk.news', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
                     </div>
                  </div>
                  @endforeach
                  @endif
            
        
               @endforeach
               @endif 
               </div>
               <div class="col-md-12">
               <footer class="morelink">
                  <a href="{{ route('dostuk.allnews') }}">
                  <span>{{ trans('radiopages.AllPereadachi') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
               </footer>
               </div>
            </div>
            <!--/.row-->    
         </div>
         <!--/.container-->
      </section>
      <!--/#services-->
      <section id="portfolio">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.PhotoReports') }}</h2>
            </div>
            <div class="panel-body">
               <section>
                  @if($photoGalleries != null)
                  @foreach($photoGalleries as $photoGallery)
                  <div class="col-md-4">
                     <div class="gallery-item">
                        <a href="{{ route('dostuk.photos', $photoGallery) }}" class="thumb">
                           <img src="{{ asset($photoGallery->status) }}" alt="...">
                           <i class="fa fa-camera"></i>
                           <div class="extra">
                              <span class="date">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                           </div>
                        </a>
                        <h2>                           
                           <a href="{{ route('dostuk.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                        </h2>
                     </div>
                  </div>
                  @endforeach
                  @endif
               </section>
               <footer>
                  <a href="{{ route('dostuk.allphotos') }}">
                  <span>{{ trans('radiopages.Allphotos') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
               </footer>
            </div>
         </div>
         <!--/.container-->
      </section>
      <!--/#portfolio-->
      <section id="about">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.AboutDostuk') }}</h2>
               <p class="text-center wow fadeInDown">{{ trans('radiopages.AboutDostukup') }}</p>
            </div>
            <div class="row">
               <div class="container">
                   <h3 class="column-title">{{ trans('radiopages.AboutAim') }}</h3>
               </div>   
               <div class="col-sm-12 wow fadeInLeft">
                  <p class="text-center wow fadeInDown">{{ trans('radiopages.AboutPromo') }}</p>
               </div>
               <div class="col-sm-12 wow fadeInRight">                  
                  <p>{{ trans('radiopages.DostukText1') }}</p>
                  <p>{{ trans('radiopages.DostukText2') }}</p>
                  <p>{{ trans('radiopages.DostukText3') }}</p>
                  <p>{{ trans('radiopages.DostukText4') }}</p>
                  <p>{{ trans('radiopages.DostukText5') }}</p>
                  <p>{{ trans('radiopages.DostukText6') }}</p>
                  <p>{{ trans('radiopages.DostukText7') }}</p>
                  <p>{{ trans('radiopages.DostukText8') }}</p>
                  <p>{{ trans('radiopages.DostukText9') }}</p>
                  <p>{{ trans('radiopages.DostukText10') }}</p>
                  <p>{{ trans('radiopages.DostukText11') }}</p>
               </div>
            </div>
         </div>
      </section>
      <!--/#about-->
      <section id="get-in-touch">
         <div class="container">
            <div class="section-header3">
               <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Address') }}</h2>
               <p class="text-center wow fadeInDown">{{ trans('radiopages.AddressName') }}</p>
            </div>
            <div class="section-header3">
               <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Phone') }}</h2>
               <p class="text-center wow fadeInDown">0312 65 67 04 <br> 0312 65 66 10</p>
            </div>
            <div class="section-header3">
               <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Volna') }}</h2>
            </div>
         </div>
      </section>
      <!--/#get-in-touch-->
   </div>
</div>
@stop
@section('footerScript')
<script>
   $('.banners').slick({
     dots: false,
     infinite: true,
     arrows: true,
     speed: 300,
     slidesToShow: 1,
     fade: true,
     cssEase: 'linear'
   });
</script>
@stop