@extends('Front::channel.kyrgyzradio.default')
@section('title', 'Баардык сүрөттөр')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
<link rel="stylesheet" href="{{ asset('css/landing/main.css')}}">
<link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
<body id="home" class="homepage">
@include('Front::channel.kyrgyzradio.nav')
   <!--/header-->
   <div class="container" style="background: #fff;padding: 0px; margin: 20px auto;">
      <section id="portfolio" style="padding:20px 0px;background:#fff;" >
         <div class="container">
            <div class="section-header2">
               <h2 class="section-title text-center wow fadeInDown">Сүрөттөр</h2>
            </div>
            <div class="panel-body imagegrid">
               <div class="row">
                  <div class="col-md-12 otherphotos">
                     <section>
                        @if($photoGalleries != null)
                        @foreach($photoGalleries as $photoGallery)
                        <div class="col-md-4">
                           <div class="gallery-item">
                              <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}" class="thumb">
                                 <img src="{{ asset($photoGallery->status) }}" alt="..." class="img-thumbnail">
                                 <i class="fa fa-camera"></i>
                                 <div class="extra" style="position: absolute; bottom: 0px; left: 10px;color: #fff;">
                                    <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                 </div>
                              </a>
                              <h2>                           
                                 <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                              </h2>
                           </div>
                        </div>
                        @endforeach
                        @endif
                     </section>
                  </div>
               </div>
            </div>
         </div>
   </div>
   <!--/.container-->
   </section><!--/#portfolio-->
   </div>
   @stop