@extends('Front::channel.kyrgyzradio.default')
@section('title', trans('site.FrontPostAll'))
@section('styles')
@endsection
@section('content')
@include('Front::channel.kyrgyzradio.nav')
<div id="allnews">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
               <div class="panel panel-articles">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('site.FrontPostAll') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     @if($allPost)
                     @foreach($allPost as $post)
                     <div class="media">
                        <div class="media-left">
                           <a href="{{ route('kyrgyzradio.news', $post) }}">
                           <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                           </a>
                        </div>
                        <div class="media-body">
                           <div class="extra">
                              <span class="e-datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <a class="media-heading" href="{{ route('kyrgyzradio.news', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
                        </div>
                     </div>
                     @endforeach
                     @endif
                  </div>
               </div>
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