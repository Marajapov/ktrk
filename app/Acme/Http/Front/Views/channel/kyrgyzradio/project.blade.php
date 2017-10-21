@extends('Front::channel.kyrgyzradio.default')
@section('title', $project->getNameOne())
@section('styles')
@endsection
@section('content')
@include('Front::channel.kyrgyzradio.nav')
<div id="pojects">
   <div class="container" style="background: white">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
               <div class="panel panel-show">
                  <div class="panel-heading">
                     <h3 class="panel-title">
                        <a href="{{ route('kyrgyzradio.projects') }}">Уктуруу жөнүндө</a>
                     </h3>
                  </div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-md-12 block show-block">
                           <div class="media">
                              <div class="media-left media-top">
                                 <a>
                                 <img class="media-object" src="@if(!($project->getFile())) {{ asset('images/project_default.png') }} @else {{ asset($project->getFile()) }} @endif" alt="{{ $project->getNameOne() }}">
                                 </a>
                              </div>
                              <div class="media-body">
                                 <h4 class="show-title media-heading">{{ $project->getName() }}</h4>                                  
                                 <p class="show-desc">
                                    {{ $project->description }}
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="panel panel-articles">
                  <div class="panel-heading">
                     <h3 class="panel-title">
                        Жаңылыктар
                     </h3>
                  </div>
                  <div class="panel-body">
                     @if($relatedNews)
                     @foreach($relatedNews as $post)
                     <div class="media">
                        <div class="media-left">
                           <a href="{{ route('kyrgyzradio.show', $post) }}">
                           <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                           </a>
                        </div>
                        <div class="media-body">
                           <div class="extra">
                              <span class="e-datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <a class="media-heading" href="{{ route('kyrgyzradio.show', $post) }}">{{ $post->getTitle() }}</a>
                        </div>
                     </div>
                     @endforeach
                     <footer>
                        <nav>
                            <ul class="pagination">

                                <li>
                                    <a href="{{ route('kyrgyzradio.project', ['project' => $project, 'page' => 1]) }}" class="btn btn-default @if($relatedNews->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                </li>
                                <li>
                                    <a href="{{ $relatedNews->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>

                                @for($i = 0, $j = 1; $i < $relatedNews->total(); $i+=$perPage)
                                    <li class="@if(($j > $relatedNews->currentPage()+3) || ($j < $relatedNews->currentPage()-3)) hidden @endif">
                                        <a href="{{ route('kyrgyzradio.project', ['project' => $project, 'page' => $j]) }}" class="btn btn-default @if($relatedNews->currentPage() == $j) active @endif">
                                            {{ $j++ }}
                                        </a>
                                    </li>
                                @endfor

                                <li>
                                    <a href="{{ $relatedNews->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>

                                <li>
                                    <a href="{{ route('kyrgyzradio.project', ['project' => $project, 'page' => ceil($relatedNews->total()/$perPage)]) }}" class="btn btn-default @if($relatedNews->currentPage() == ceil($relatedNews->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                </li>

                            </ul>
                        </nav>
                     </footer>
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
   <!--/.container-->
</div>
@stop