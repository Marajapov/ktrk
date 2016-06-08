@extends('Front::channel.dostuk.default')
@section('title', $project->getNameOne())
@section('styles')

@endsection
@section('content')
@include('Front::channel.dostuk.navs')
<div class="main-container">
   <div class="container" style="padding-bottom: 50px;">
      <div class="row">
         <div class="col-md-9">
            <div class="row onenews">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ $project->getName() }}</h3>
                     </div>
                     <div class="panel">
                        <div class="panel-body">
                         <div class="col-md-12 block show-block">
                           <div class="media">
                              <div class="media-left media-top">
                                 <a>
                                    <img class="media-object" src="@if(!($project->getFile())) {{ asset('images/project_default.png') }} @else {{ asset($project->getFile()) }} @endif" alt="{{ $project->getNameOne() }}">
                                 </a>
                              </div>
                              <div class="media-body">                                 
                                 <p class="show-desc">
                                    {{ $project->description }}
                                 </p>
                              </div>
                           </div>
                        </div>                              
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('site.MatpoTeme') }}</h3>
                     </div>                   
                     @if($relatedNews)
                     @foreach($project->program()->get() as $post)                
                     <div class="blocknews col-md-4 col-sm-2 col-xs-12">
                          <article>
                              <a href="{{ route('dostuk.news', [$post, $lc]) }}" class="image-link">
                                  <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" title="{{ $post->getTitleRuOrKg() }}">
                                  <div class="card-info">
                                       <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                       <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                  </div>
                              </a>
                              <h3 class="name headline">
                                  <a href="{{ route('dostuk.news', [$post, $lc]) }}" title="">
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