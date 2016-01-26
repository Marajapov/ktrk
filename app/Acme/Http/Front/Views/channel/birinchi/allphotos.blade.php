@extends('Front::channel.birinchi.default')
@section('title', "Все фото")
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span> {{ trans('radiopages.Photos') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     @if($photoGalleries != null)
                     @foreach($photoGalleries as $photoGallery)
                     <div class="col-md-4 gallery-item">
                      
                           <a href="{{ route('birinchi.photos', $photoGallery) }}" class="thumb">
                           <img src="{{ asset($photoGallery->status) }}" alt="..." class="img-thumbnail">
                           <i class="fa fa-camera"></i>
                           </a>
                           <h2>
                              <div class="extra">
                                 <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                              </div>
                              <a href="{{ route('birinchi.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                           </h2>
                    
                     </div>
                     @endforeach
                     @endif
                  </div>
               </div>
               <!-- end panel default -->
            </div>
         </div>
      </div>
   </div>
</div>
@stop