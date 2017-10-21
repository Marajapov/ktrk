@extends('Front::channel.birinchi.default')
@section('title', trans('radiopages.Peredachi'))
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container b-maincolor">
      <div class="row">
         <div class="col-md-12">
            <div class="row oneallnews">
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('radiopages.Peredachi') }}</h3>
                     </div>
                     <div class="col-md-12">
                     @if($postAll)
                     @foreach($postAll as $post)
                     <div class="media blockallnews">
                        <div class="media-left">
                           <a href="{{ route('birinchi.news', [$post, $lc]) }}">
                              <img class="media-object" src="{{ asset($post->getFile()) }}" alt="...">
                           </a>
                        </div>
                        <div class="media-body">
                           <div class="extra">
                              <span class="datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <a class="media-heading " href="{{ route('birinchi.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
                           <span class="mb_substr" style="display: block;">
                              {{$post->getShortDescription()}}
                           </span>
                        </div>
                     </div>
                     @endforeach
                     @endif
                     <footer class="allnewsfooter">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="{{ route('birinchi.projects', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                </li>
                                <li>
                                    <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>
                                @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                                    <li class="@if(($j > $postAll->currentPage()+10) || ($j < $postAll->currentPage()-10)) hidden @endif">
                                        <a href="{{ route('birinchi.projects', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">
                                            {{ $j++ }}
                                        </a>
                                    </li>
                                @endfor
                                <li>
                                    <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('birinchi.projects', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                </li>

                            </ul>
                        </nav>
                     </footer>
                     </div>                   
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row popular">
                           <div class="col-md-12">
                              <h3 class="title">{{ trans('site.PostPopular') }}</h3>
                           </div>                     
                           <div class="col-md-12"> 
                                 @if($popArticles) 
                                 @foreach($popArticles as $post)
                                <div class="media">

                                    <div class="media-body">
                                        <div class="extra">
                                            <span class="datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}</span>
                                            <a class="cat" href="{{ route('birinchi.category', $post->category) }}"><span> @if($birinchiProjects) 
                                               @foreach($birinchiProjects as $project)   
                                                 @if($project->id == $post->birinchiProgram)
                                                  {{ ($project->getName()) }}
                                                 @endif
                                               @endforeach
                                             @endif
                                            </span></a>
                                            <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                        </div>
                                        <a class="media-heading" href="{{ route('birinchi.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
                                    </div>

                                </div>
                                @endforeach 
                                @endif                                                
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
                              @foreach($birinchiProjects as $key=> $project)
                              <li class="list-group-item">
                                 <a href="{{ route('birinchi.shows', $project) }}">{{ $project->getName() }}</a>
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