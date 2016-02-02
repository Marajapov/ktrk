@extends('Front::channel.kyrgyzradio.default')
@section('title', $post->getTitleRuOrKg())
@section('content')
@include('Front::channel.kyrgyzradio.nav')
<div id="news">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
               <div class="panel-heading">
                  <h3 class="panel-title">                        
                     <a href="{{ route('kyrgyzradio.allnews') }}">
                     @if($kyrgyzradioProjects)
                     @foreach($kyrgyzradioProjects->take(1) as $kyrgyzradioProject)
                     {{ $kyrgyzradioProject->getName() }}
                     @endforeach
                     @endif
                     </a>
                  </h3>
               </div>
               <div class="panel-body post">
                  <div class="news-info">
                     <span class="date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                     <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                  </div>
                  <h2>{{ $post->getTitleRuOrKg() }}</h2>
                  <div class="muzimg">
                     <img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">
                  </div>
                  <article>
                     {!! $post->getContent() !!}
                     <div class="carousel-post whitefix">
                        @if($images)
                        @foreach($images as $image)
                        <div class="col-md-4">
                           <a href="#">
                           <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                           </a>
                        </div>
                        @endforeach
                        @endif
                     </div>
                  </article>
               </div>
               <footer>
                  <a class="pull-right" href="{{ route('kyrgyzradio.allnews') }}">Башка жаңылыктар</a>
               </footer>
            </div>
         </div>
         <div class="col-md-3">
            <div class="row">
               <div class="panel ctg-panel media-ctg-panel">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>Уктуруулар</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12">
                        <div class="row">
                           <ul class="list-group">
                              @if($kyrgyzradioProjects) 
                              @foreach($kyrgyzradioProjects as $key=> $project)
                              <li class="list-group-item">
                                 <a href="{{ route('kyrgyzradio.project', $project) }}">{{ $project->getName() }}</a>
                              </li>
                              @endforeach
                              @endif
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop