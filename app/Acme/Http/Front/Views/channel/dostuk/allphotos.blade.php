@extends('Front::channel.dostuk.default')
@section('title', trans('radiopages.Allphotos'))
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
@include('Front::channel.dostuk.navs')
   <div class="main-container">

    <section id="portfolio">
        <div class="container">
            <div class="section-header2">
                <h2 class="section-title2 text-center wow fadeInDown">{{ trans('radiopages.PhotoReports') }}</h2>
            </div>

               <div class="panel-body imagegrid">
                  <div class="row">
                     <div class="col-md-12 otherphotos">
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
<div class="col-md-12">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="{{ route('dostuk.allphotos', ['page' => 1]) }}" class="btn btn-default @if($photoGalleries->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                </li>
                                <li>
                                    <a href="{{ $photoGalleries->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>
                                @for($i = 0, $j = 1; $i < $photoGalleries->total(); $i+=$perPage)
                                    <li class="@if(($j > $photoGalleries->currentPage()+10) || ($j < $photoGalleries->currentPage()-10)) hidden @endif">
                                        <a href="{{ route('dostuk.allphotos', ['page' => $j]) }}" class="btn btn-default @if($photoGalleries->currentPage() == $j) active @endif">
                                            {{ $j++ }}
                                        </a>
                                    </li>
                                @endfor
                                <li>
                                    <a href="{{ $photoGalleries->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('dostuk.allphotos', ['page' => ceil($photoGalleries->total()/$perPage)]) }}" class="btn btn-default @if($photoGalleries->currentPage() == ceil($photoGalleries->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                     </div>
                      
                  </div>
               </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

   </div>
   @stop
