@extends('Front::channel.balastan.default')
@section('title', "Видео")
@section('styles')
@endsection
@section('content')
    <div class="container-fluid pages-header">
        <div class="row">
            @include('Front::channel.balastan.nav')
            <div class="container pages-title">
                <div class="row">
                    <div class="title col-md-12">
                         <h3>Все видео</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Main slider -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row topvideos videostyle">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('radiopages.NewClips') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 videofix">
                        <div class="row" style="margin:-11px;">
                           @if($MediaNew)
                           @foreach($MediaNew as $newVideo)   
                           <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                              <div class="muzvideoall">
                                 <a href="{{ route('muzkanal.video', $newVideo)}}">
                                 <img src="http://img.youtube.com/vi/{{ $newVideo->getUrl()}}/mqdefault.jpg" alt=""/></a>
                                 <div class="item-desc">
                                    <ul>
                                       <a href="{{ route('muzkanal.video', $newVideo)}}">
                                          <li class="item-artist">{{ $newVideo->getName() }}</li>
                                       </a>
                                    </ul>
                                 </div>
                                 @if($newVideo->exclusive == 1)
                                 <div class="ishit">Экслюзив!</div>
                                 @endif
                                 <div class="views"><i class="fa fa-eye"></i>{{ $newVideo->getViewed() }}</div>
                              </div>
                           </div>
                           @endforeach
                           @endif                            
                        </div>
                        <nav class="muzpaginate">
                           <ul class="pagination">
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="btn btn-default @if($postAllNew->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                              </li>
                              <li>
                                 <a href="{{ $postAllNew->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                              </li>
                              <li>
                                 <a href="{{ $postAllNew->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </li>
                              @for($i = 0, $j = 1; $i < $postAllNew->total(); $i+=$perPage)
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => $j]) }}" class="btn btn-default @if($postAllNew->currentPage() == $j) active @endif">{{ $j++ }}</a>
                              </li>
                              @endfor
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => ceil($postAllNew->total()/$perPage)]) }}" class="btn btn-default @if($postAllNew->currentPage() == ceil($postAllNew->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="row topvideos videostyle">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 videofix">
                        <div class="row" style="margin:-11px;">
                           @if($MediaTop)
                           @foreach($MediaTop as $topVideo)   
                           <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                              <div class="muzvideoall">
                                 <a href="{{ route('muzkanal.video', $topVideo)}}">
                                 <img src="http://img.youtube.com/vi/{{ $topVideo->getUrl()}}/mqdefault.jpg" alt=""/></a>
                                 <div class="item-desc">
                                    <ul>
                                       <a href="{{ route('muzkanal.video', $topVideo)}}">
                                          <li class="item-artist">{{ $topVideo->getName() }}</li>
                                       </a>
                                    </ul>
                                 </div>
                                 @if($topVideo->exclusive == 1)
                                 <div class="ishit">Экслюзив!</div>
                                 @endif
                                 <div class="views"><i class="fa fa-eye"></i>{{ $topVideo->getViewed() }}</div>
                              </div>
                           </div>
                           @endforeach
                           @endif                            
                        </div>
                        <nav class="muzpaginate">
                           <ul class="pagination">
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="btn btn-default @if($postAllTop->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                              </li>
                              <li>
                                 <a href="{{ $postAllTop->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                              </li>
                              <li>
                                 <a href="{{ $postAllTop->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </li>
                              @for($i = 0, $j = 1; $i < $postAllTop->total(); $i+=$perPage)
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => $j]) }}" class="btn btn-default @if($postAllTop->currentPage() == $j) active @endif">{{ $j++ }}</a>
                              </li>
                              @endfor
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => ceil($postAllTop->total()/$perPage)]) }}" class="btn btn-default @if($postAllTop->currentPage() == ceil($postAllTop->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="row topvideos videostyle">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>Экслюзив</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 videofix">
                        <div class="row" style="margin:-11px;">
                           @if($MediaLive)
                           @foreach($MediaLive as $liveVideo)   
                           <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                              <div class="muzvideoall">
                                 <a href="{{ route('muzkanal.video', $liveVideo)}}">
                                 <img src="http://img.youtube.com/vi/{{ $liveVideo->getUrl()}}/mqdefault.jpg" alt=""/></a>
                                 <div class="item-desc">
                                    <ul>
                                       <a href="{{ route('muzkanal.video', $liveVideo)}}">
                                          <li class="item-artist">{{ $liveVideo->getName() }}</li>
                                       </a>
                                    </ul>
                                 </div>
                                 <div class="views"><i class="fa fa-eye"></i>{{ $liveVideo->getViewed() }}</div>
                              </div>
                           </div>
                           @endforeach
                           @endif                            
                        </div>
                        <nav class="muzpaginate">
                           <ul class="pagination">
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="btn btn-default @if($postAllLive->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                              </li>
                              <li>
                                 <a href="{{ $postAllLive->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                              </li>
                              <li>
                                 <a href="{{ $postAllLive->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </li>
                              @for($i = 0, $j = 1; $i < $postAllLive->total(); $i+=$perPage)
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => $j]) }}" class="btn btn-default @if($postAllLive->currentPage() == $j) active @endif">{{ $j++ }}</a>
                              </li>
                              @endfor
                              <li>
                                 <a href="{{ route('muzkanal.videos', ['page' => ceil($postAllLive->total()/$perPage)]) }}" class="btn btn-default @if($postAllLive->currentPage() == ceil($postAllLive->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>         
      </div>
   </div>
   @stop
   @section('footerscript2')
   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script> 


   <!-- Fixed Sticky header -->
   <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>   
   <!-- Fixed Sticky header -->
   @stop
