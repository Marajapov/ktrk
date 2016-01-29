@extends('Front::channel.birinchi.default')
@section('title', "About")
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="row onenews">
               <div class="col-md-12">
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

               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('radiopages.RelatedNews') }}</h3>
                     </div>
                    
                     @foreach($relatedNews as $post)

                
                     <div class="blocknews col-md-3 col-sm-4 col-xs-12">
                          <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                  <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                  <div class="card-info">
                                      <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                  </div>
                              </a>
                              <h3 class="name headline">
                                  <a href="{{ route('birinchi.news', $post) }}" title="">
                                      {{ $post->getTitleRuOrKg() }}
                                  </a>
                              </h3>
                          </article>
                     </div>  
           
                     @endforeach
                          
                  </div>
               </div>

            </div>
         </div>
         <div class="col-md-3">
            <div class="row onenews">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('radiopages.Categories') }}</h3>
                     </div>                     
                     <div class="col-md-12 ctg-panel">                          
                        <ul class="list-group">
                           @foreach($categories as $category)
                           <li class="list-group-item">
                              <a href="{{ route('birinchi.category', $category) }}">{{ $category->getTitle() }}</a>
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