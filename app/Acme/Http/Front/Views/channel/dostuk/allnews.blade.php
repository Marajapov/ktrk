@extends('Front::channel.dostuk.default')
@section('title', trans('site.FrontPostAll'))
@section('styles')
@endsection
@section('content')
@include('Front::channel.dostuk.navs')
<style>
   .container{
      background: #fff;
   }
   #services{
      padding: 0px;
   }
   #services .panel-heading h3{
      color: #404142;
   }
</style>
   <div class="main-container">
      <section id="services">
         <div class="container">
            <div class="row">
               <div class="top-left-block col-md-9">
                  <div class="panel panel-articles" style="border:none;">
                     <div class="panel-heading">
                        <h3 class="panel-title"><span>{{ trans('site.FrontPostAll') }}</span></h3>
                     </div>
                     <div class="col-md-12">
                        @if($allPost)
                        @foreach($allPost as $post)
                        <div class="media">
                           <div class="media-left">
                              <a href="{{ route('dostuk.news', $post) }}">
                              <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                              </a>
                           </div>
                           <div class="media-body">
                              <div class="extra">
                                 <span class="e-datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                 <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                              </div>
                              <a class="media-heading" href="{{ route('dostuk.news', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
                           </div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                  </div>
               </div>
               <div class="top-right-block col-md-3">
                  <div class="panel ctg-panel media-ctg-panel">
                     <div class="panel-heading">
                        <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                     </div>
                     <div class="panel-body">
                        <ul class="list-group" style="margin-top:-20px">
                           @if($dostukProjects) 
                           @foreach($dostukProjects as $key=> $project)
                           <li class="list-group-item">
                              <a href="{{ route('dostuk.project', $project) }}">{{ $project->getName() }}</a>
                           </li>
                           @endforeach
                           @endif
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.container-->
      </section>
   </div>
   @stop