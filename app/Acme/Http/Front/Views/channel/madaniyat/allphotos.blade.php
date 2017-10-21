@extends('Front::channel.madaniyat.default')
@section('title', trans('radiopages.Photos'))
@section('styles')
@endsection
@section('content')
<body class="madaniyat">
   @include('Front::channel.madaniyat.nav')
   <div class="container" style="margin-top: 160px;">
      <div class="row">
        <div class="col-md-12 mgallery">
            <div class="panel panel-default panel-footer">
               <div class="panel-heading madaniyatcolor">
                  <h3 class="panel-title"><span>{{ trans('radiopages.Photos') }}</span></h3>
               </div>
               <div class="panel-body">
                  <div class="row">
                    @if($photoGalleries)
                      @foreach($photoGalleries as $photoGallery)
                      <div class="col-md-4">
                         <a href="{{ route('madaniyat.photos', $photoGallery) }}">
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
                      @endforeach
                  @endif
                    <div class="col-md-12">
                          <nav>
                              <ul class="pagination">
                                  <li>
                                      <a href="{{ route('madaniyat.allphotos', ['page' => 1]) }}" class="btn btn-default @if($photoGalleries->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                  </li>
                                  <li>
                                      <a href="{{ $photoGalleries->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                  </li>
                                  @for($i = 0, $j = 1; $i < $photoGalleries->total(); $i+=$perPage)
                                      <li class="@if(($j > $photoGalleries->currentPage()+10) || ($j < $photoGalleries->currentPage()-10)) hidden @endif">
                                          <a href="{{ route('madaniyat.allphotos', ['page' => $j]) }}" class="btn btn-default @if($photoGalleries->currentPage() == $j) active @endif">
                                              {{ $j++ }}
                                          </a>
                                      </li>
                                  @endfor
                                  <li>
                                      <a href="{{ $photoGalleries->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                  </li>
                                  <li>
                                      <a href="{{ route('madaniyat.allphotos', ['page' => ceil($photoGalleries->total()/$perPage)]) }}" class="btn btn-default @if($photoGalleries->currentPage() == ceil($photoGalleries->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                  </li>

                              </ul>
                          </nav>
                    </div>
                    <div class="div"></div>
                  </div>
               </div>
            </div>
        </div>
      </div>
   </div>
   @stop