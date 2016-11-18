@extends('Front::channel.birinchi.default')
@section('title',  $project->getNameOne())
@section('styles')

@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container b-maincolor">
      <div class="row">
         <div class="col-md-12">
            <div class="row onenews">
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ $project->getNameOne() }}</h3>
                     </div>
                     <div class="panel-show ">
                        <div class="col-md-12 show-block">
                           <div class="media ">
                              <div class="media-left media-top">
                                 <a>
                                 <img class="media-object" src="@if(!($project->getFile())) {{ asset('images/project_default.png') }} @else {{ asset($project->getFile()) }} @endif" alt="{{ $project->getNameOne() }}">
                                 </a>
                              </div>
                              <div class="media-body">
                                 <h4 class="show-title media-heading">{{ $project->getNameOne() }}</h4>
                                 <p class="show-desc">
                                    {{ $project->description }}
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="show-block">
                        <div class="col-md-12">
                           <h3 class="title">{{ trans('radiopages.Peredachi') }}</h3>
                        </div>
                        <div class="col-md-12 panel-body">
                           @if($relatedNews)
                           @foreach($relatedNews as $post)
                           <div class="media blockallnews">
                              <div class="media-left">
                                 <a href="{{ route('birinchi.show', [$post, $lc]) }}">
                                 <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                                 </a>
                              </div>
                              <div class="media-body">
                                 <div class="extra">
                                    <span class="datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                    <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                 </div>
                                 <a class="media-heading" href="{{ route('birinchi.show', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
                                 <span class="mb_substr">
                                    {{ $project->description }}                                    
                                 </span>
                              </div>
                           </div>
                           @endforeach
                           @endif
                           <div class="col-sm-12">                              
                              <footer>
                                 <nav>
                                     <ul class="pagination">

                                         <li>
                                             <a href="{{ route('birinchi.shows', ['project' => $project, 'page' => 1]) }}" class="btn btn-default @if($relatedNews->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                         </li>
                                         <li>
                                             <a href="{{ $relatedNews->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                         </li>

                                         @for($i = 0, $j = 1; $i < $relatedNews->total(); $i+=$perPage)
                                             <li class="@if(($j > $relatedNews->currentPage()+3) || ($j < $relatedNews->currentPage()-3)) hidden @endif">
                                                 <a href="{{ route('birinchi.shows', ['project' => $project, 'page' => $j]) }}" class="btn btn-default @if($relatedNews->currentPage() == $j) active @endif">
                                                     {{ $j++ }}
                                                 </a>
                                             </li>
                                         @endfor

                                         <li>
                                             <a href="{{ $relatedNews->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                         </li>

                                         <li>
                                             <a href="{{ route('birinchi.shows', ['project' => $project, 'page' => ceil($relatedNews->total()/$perPage)]) }}" class="btn btn-default @if($relatedNews->currentPage() == ceil($relatedNews->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                         </li>

                                     </ul>
                                 </nav>
                              </footer>
                              <br/>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('radiopages.Peredachi') }}</h3>
                     </div>
                     <div class="col-md-12 ctg-panel">
                        <ul class="list-group">
                           @if($birinchiProjects) 
                           @foreach($birinchiProjects as $project_one)
                           <li class="list-group-item">
                              <a href="{{ route('birinchi.shows', $project_one) }}">{{ $project_one->getName() }}</a>
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