@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
@include('Front::channel.minkiyal.navs')

<div class="container minkiyal_news">
   <div class="row">
    <div class="col-md-12">
            <div class="row oneallnews" style="font-family: 'Roboto Regular';">
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">Баардык жаңылыктар</h3>
                        </br>
                     </div>
                     <div class="col-md-12">
                     @if($postAll)
                     @foreach($postAll as $post)
                     <div class="media blockallnews">
                        <div class="media-left">
                           <a href="{{ route('minkiyal.news', $post) }}">
                              <img class="media-object" src="{{ asset($post->getFile()) }}" alt="...">
                           </a>
                        </div>
                        <div class="media-body">
                           <div class="extra">
                              <span class="datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <a class="media-heading " href="{{ route('minkiyal.news', $post) }}">{{ $post->getTitle() }}</a>
                           <span class="mb_substr">
                              {{ $post->description }}
                           </span>
                        </div>
                     </div>
                     @endforeach
                     @endif
                     <footer class="allnewsfooter">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="{{ route('minkiyal.allnews', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                </li>
                                <li>
                                    <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>

                                @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                                    <li class="@if(($j > $postAll->currentPage()+3) || ($j < $postAll->currentPage()-3)) hidden @endif">
                                        <a href="{{ route('minkiyal.allnews', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">
                                            {{ $j++ }}
                                        </a>
                                    </li>
                                @endfor

                                <li>
                                    <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>

                                <li>
                                    <a href="{{ route('minkiyal.allnews', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
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
                              <h3 class="title">Көп окумдуу</h3>
                              </br>
                           </div>                     
                             <div class="col-md-12"> 
                                  @if($popArticles) 
                                  @foreach($popArticles as $post)
                                 <div class="media">

                                     <div class="media-body">
                                         <div class="extra" style="width: 100%; float: right;">
                                             <span class="datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}</span>                          
                                             <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                         </div>
                                         <a class="media-heading" href="{{ route('minkiyal.news', $post) }}">{{ $post->getTitle() }}</a>
                                     </div>

                                 </div>
                                 @endforeach 
                                 @endif                                                
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
@section('footerScript')
@stop