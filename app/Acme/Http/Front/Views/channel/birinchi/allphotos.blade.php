@extends('Front::channel.birinchi.default')
@section('title', trans('radiopages.Photos'))
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container b-maincolor">
      <div class="row">
          <div class="col-md-12 allgallery">
              <div class="row">
                  <div class="col-md-12">
                      <h3 class="title">{{ trans('site.Galleries') }}</h3>
                  </div>
                  @if($photoGalleries)
                      @foreach($photoGalleries as $photoGallery)
                          <div class="col-md-4">
                              <a href="{{ route('birinchi.photos', $photoGallery) }}" class="photo-img">
                                  <img src="{{ asset($photoGallery->thumbnail_big) }}" alt="" />
                                  <span class="photo-overlay"></span>
                              </a>
                              <div class="photo-info">
                                  <div class="media">
                                      <div class="media-left media-middle">
                                          <div class="extraone">
                                              <span class="e-datetime"><i class="fa  fa-calendar"></i>  {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                          </div>
                                          <a href="{{ route('birinchi.photos', $photoGallery) }}">
                                              <i class="fa fa-camera photo-icon"></i>
                                          </a>
                                      </div>
                                      <div class="media-body media-middle">
                                          <h4 class="media-heading photo-name"><a href="{{route('birinchi.photos', $photoGallery)}}">{{ $photoGallery->getName() }}</a></h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  @endif
                  <div class="col-md-12">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="{{ route('birinchi.allphotos', ['page' => 1]) }}" class="btn btn-default @if($photoGalleries->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                </li>
                                <li>
                                    <a href="{{ $photoGalleries->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>
                                @for($i = 0, $j = 1; $i < $photoGalleries->total(); $i+=$perPage)
                                    <li class="@if(($j > $photoGalleries->currentPage()+10) || ($j < $photoGalleries->currentPage()-10)) hidden @endif">
                                        <a href="{{ route('birinchi.allphotos', ['page' => $j]) }}" class="btn btn-default @if($photoGalleries->currentPage() == $j) active @endif">
                                            {{ $j++ }}
                                        </a>
                                    </li>
                                @endfor
                                <li>
                                    <a href="{{ $photoGalleries->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('birinchi.allphotos', ['page' => ceil($photoGalleries->total()/$perPage)]) }}" class="btn btn-default @if($photoGalleries->currentPage() == ceil($photoGalleries->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                </li>

                            </ul>
                        </nav>
                  </div>
              </div>
          </div>
        </div>
   </div>
</div>
@stop