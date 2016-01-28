@extends('Front::channel.birinchi.default')
@section('title', "About")
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row onenews">
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ $post->category('category_id')->first()->getTitle() }}</h3>
                     </div>
                     <div class="panel">
                        <div class="panel-body">
                           <h3>{{ $post->getTitleRuOrKg() }}</h3>
                           <div class="oneimg">
                              <img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">
                           </div>
                           <article>
                              {!! $post->getContent() !!}
                           </article>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('radiopages.Categories') }}</h3>
                     </div>                     
                     <div class="col-md-12 ctg-panel">                          
                        <ul class="list-group">
                           @foreach($categories as $category)
                           <li class="list-group-item">
                              <a href="{{ route('front.category', $category) }}">{{ $category->getTitle() }}</a>
                           </li>
                           @endforeach
                        </ul>                          
                     </div>                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop