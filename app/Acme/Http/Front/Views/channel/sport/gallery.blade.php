@extends('Front::channel.sport.default')
@section('title', trans('radiopages.SurotBayan'))
@section('styles')

@endsection
@section('content')
@include('Front::channel.sport.nav')
   <div class="container">
        <div class="panel panel-default panel-photos">
           <div class="panel-heading">
                <div class="heading-title">
                    <span class="name" style="text-transform: capitalize;font-size: 18px;">{{ trans('radiopages.SurotBayan') }}</span>
                    <div class="border"></div>
                </div>
           </div>
           <div class="panel-body">
              <div class="row">
               @if($photoGalleriesTop)
                  @foreach($photoGalleriesTop as $photoGalleryTop)
                  <div class="col-md-6 col-sm-12">
                    <div class="photos-item">
                       <a href="{{ route('sport.photos', $photoGalleryTop) }}">
                          <img src="{{ asset($photoGalleryTop->thumbnail_big) }}" alt=""/>
                          <div class="g-extra">
                              <span class="datetime"><i class="fa fa-calendar"></i> {{ $photoGalleryTop->getDay() }} {{ $photoGalleryTop->getMonthRu() }}, {{ $photoGalleryTop->getTime() }}</span>
                              <span class="view"><i class="fa fa-eye"></i>{{ $photoGalleryTop->viewed }}</span>
                           </div>
                          <div class="g-title">
                            {{ $photoGalleryTop->getName() }}
                          </div>
                       </a>
                     </div>
                  </div>
                  @endforeach
                @endif 
                @if($photoGalleries)
                  @foreach($photoGalleries as $photoGallery)
                  <div class="col-md-4">
                    <div class="photos-item">
                       <a href="{{ route('sport.photos', $photoGallery) }}">
                          <img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/>
                          <div class="g-extra">
                              <span class="datetime"><i class="fa fa-calendar"></i> {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                              <span class="view"><i class="fa fa-eye"></i>{{ $photoGallery->viewed }}</span>
                           </div>
                          <div class="g-title">
                            {{ $photoGallery->getName() }}
                          </div>
                       </a>
                     </div>
                  </div>
                  @endforeach
                @endif              
                <div class="col-md-12">
                      <nav>
                          <ul class="pagination">
                              <li>
                                  <a href="{{ route('sport.gallery', ['page' => 1]) }}" class="btn btn-default @if($photoGalleries->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                              </li>
                              <li>
                                  <a href="{{ $photoGalleries->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                              </li>
                              @for($i = 0, $j = 1; $i < $photoGalleries->total(); $i+=$perPage)
                                  <li class="@if(($j > $photoGalleries->currentPage()+10) || ($j < $photoGalleries->currentPage()-10)) hidden @endif">
                                      <a href="{{ route('sport.gallery', ['page' => $j]) }}" class="btn btn-default @if($photoGalleries->currentPage() == $j) active @endif">
                                          {{ $j++ }}
                                      </a>
                                  </li>
                              @endfor
                              <li>
                                  <a href="{{ $photoGalleries->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </li>
                              <li>
                                  <a href="{{ route('sport.gallery', ['page' => ceil($photoGalleries->total()/$perPage)]) }}" class="btn btn-default @if($photoGalleries->currentPage() == ceil($photoGalleries->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                              </li>

                          </ul>
                      </nav>
                <div class="margin-with-bottom"></div>
                </div>
              </div>
           </div>
        </div>
   </div>
@stop
@section('footerscript2')
@endsection