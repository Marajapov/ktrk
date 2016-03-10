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
            </div>
            @if(app()->getlocale() == 'kg')
            <div class="row">
               <div class="container">
                   <h3 class="column-title">Эл достугуна доо кетирбей ыр менен достукка көпүрө болууга ниет кылган радио - "Достук" радиосу</h3>
               </div>   
               <div class="col-sm-12 wow fadeInRight">
                  <img src="{{asset('images/channels/dostuk.png')}}" alt="" class="img-responsive fadeInLeft" style="
                  float: left;">                  
                  <h4> Радио адегенде интернет аркылуу чыга баштаган, ал эми 2015-жылдан тарта аны  санариптик пакеттен табууга болот. «Радионун негизги максаты - өлкөбүздө жашаган этностор аралык достук мамилелердин өнүгүшүнө жана бекемделишине көмөк көрсөтүү эсептелет».</h4>
                  <h4>Радио КТРКнын 2013-2015-жылдарга карата өнүгүү стратегиясына, ошондой эле мамлекет башчысынын жарлыгы менен кабыл алынган Кыргызстандагы этностор аралык мамилелер концепциясына ылайык ачылууда. Радионун берүүлөр сеткасы маданият, тарых, искусство жана адабиятка байланышкан темаларды камтыйт. Өлкөбүздө ушундай радионун ачылышы менен Кыргыз Республикасында жашап жатышкан этностордун өз маданий баалуулуктары менен алмашып турушу үчүн аянтча түзүүгө басым коюлат.Ошондой эле радиодо президенттин мамлекеттик тилди өнүктүрүү жөнүндө жарлыгынын аткарылышы үчүн кыргыз тилин окуп-үйрөнүү боюнча өз алдынча долбоор орун алмакчы. </h4>
                  <a class="show-btn" href="{{ route('dostuk.about')}}">
                     толук маалымат
                  </a>
               </div>
            </div>
            @elseif(app()->getlocale() == 'ru')
            <div class="row">
               <div class="container">
                   <h3 class="column-title">Радио "ДОСТУК" вещает в онлайн-режиме на сайте www.ktrk.kg в познавательном, литературном и музыкальном формате. </h3>
               </div>   
               <div class="col-sm-12 wow fadeInRight">
                  <img src="{{asset('images/channels/dostuk.png')}}" alt="" class="img-responsive fadeInLeft" style="
                  float: left;">
                  <h3>Цель радиостанции:</h3>                  
                  <h4>• просвятить молодежь в таких важнейших сферах культуры, как музыка, литература, кино и театр.</h4>
                  <h4>•  познакомить с классическими образцами и культовыми личностями в этих сферах, а также освещать последние достижения, достойные внимания. </h4>
                  <h4>•  углубление и расширение диалога радио со слушателями;</h4>
                  <h4>•  содействие развитию дружеских отношений между народами Кыргызстана;</h4>
                  <h4>•  ориентация на музыку этнических народов Кыргызстана, поддержка отечественных исполнителей;</h4>
                  <h4>•  познакомить слушателей с творчеством исполнителей, музыкантов, поэтов;</h4>
                  <h4>•  проводить беседы в студии со специалистами разных областей, а так же в области музыки:</h4>

                  <a class="show-btn" href="{{ route('dostuk.about')}}">
                     подробнее
                  </a>
               </div>
            </div>
            @endif
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