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
                           <div class="news-info">
                              <span class="date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <h3 class="newstitle">{{ $post->getTitleRuOrKg() }}</h3>
                           <div class="oneimg">
                              <img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" title="{{ $post->getTitleRuOrKg() }}">
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
                        <h3 class="title">{{ trans('site.MatpoTeme') }}</h3>
                     </div>
                    
                     @foreach($relatedNews as $post)

                
                     <div class="blocknews col-md-3 col-sm-4 col-xs-12">
                          <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                  <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" title="{{ $post->getTitleRuOrKg() }}">
                                  <div class="card-info">
                                       <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                       <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
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