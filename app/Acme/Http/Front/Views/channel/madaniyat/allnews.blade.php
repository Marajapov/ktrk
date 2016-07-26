@extends('Front::channel.madaniyat.default')
@section('title', trans('radiopages.Morenews'))
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/radios.css') }}">
@endsection
@section('content')
<body class="madaniyat">
   @include('Front::channel.madaniyat.nav')
   <div class="container" style="margin-top: 140px;">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="panel panel-default">
              <div class="panel-body no-padding panel-allnews">
                  <div class="col-md-9 no-padding ">
                    <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                          <h3 class="panel-title"><span>{{ trans('radiopages.Morenews') }}</span></h3>
                        </div>
                        <div class="panel-body">
                            @if($postAll)
                            @foreach($postAll as $post)
                            <div class="media blockallnews">
                              <div class="media-left">
                                 <a href="{{ route('madaniyat.news', [$post, $lc]) }}">
                                    <img class="media-object" src="{{ asset($post->getFile()) }}" alt="...">
                                 </a>
                              </div>
                              <div class="media-body">
                                 <div class="extra">
                                    <span class="datetime">{{ $post->getDay() }}, {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                    <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                 </div>
                                 <a class="media-heading " href="{{ route('madaniyat.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
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
                                    <a href="{{ route('madaniyat.allnews', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                  </li>
                                  <li>
                                    <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                  </li>
                                  <li>
                                    <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                  </li>
                                  @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                                  <li>
                                    <a href="{{ route('madaniyat.allnews', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">{{ $j++ }}</a>
                                  </li>
                                  @endfor
                                  <li>
                                    <a href="{{ route('madaniyat.allnews', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                  </li>
                                </ul>
                              </nav>
                            </footer>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-3 no-padding">
                      <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                          <h3 class="panel-title"><span>{{ trans('site.PostPopular') }}</span></h3>
                        </div>
                        <div class="panel-body popular">
                            @if($popArticles) 
                            @foreach($popArticles as $post)
                            <div class="media">
                                <div class="media-body">
                                    <div class="extra">
                                        <span class="datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}</span>
                                        <a class="cat" href="#"><span>&nbsp;</span></a>
                                        <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                    </div>
                                    <a class="media-heading" href="{{ route('madaniyat.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
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
   @section('footerscript2')  
   @stop