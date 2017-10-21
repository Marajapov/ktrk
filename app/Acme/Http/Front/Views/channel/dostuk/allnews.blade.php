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
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <div class="row onenews">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <h3 class="title">{{ trans('site.FrontPostAll') }}</h3>
                        </div>                   
                        @if($allPost)
                        @foreach($allPost as $post)                
                        <div class="blocknews col-md-3 col-sm-4 col-xs-12">
                             <article>
                                 <a href="{{ route('dostuk.news', $post) }}" class="image-link">
                                     <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" title="{{ $post->getTitleRuOrKg() }}">
                                     <div class="card-info">
                                          <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                          <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                     </div>
                                 </a>
                                 <h3 class="name headline">
                                     <a href="{{ route('dostuk.news', $post) }}" title="">
                                         {{ $post->getTitleRuOrKg() }}
                                     </a>
                                 </h3>
                             </article>
                        </div>             
                        @endforeach
                        @endif
                             
                     </div>
                  </div>

               </div>
            </div>
            <div class="col-md-3">
               <div class="row onenews">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <h3 class="title">{{ trans('radiopages.Peredachi') }}</h3>
                        </div>                     
                        <div class="col-md-12 ctg-panel">                          
                           <ul class="list-group">
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
         </div>
      </div>
   </div>
   @stop