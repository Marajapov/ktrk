@extends('Front::channel.sport.default')
@section('title', trans('radiopages.Morenews'))
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/radios.css') }}">
@endsection
@section('content')
@include('Front::channel.sport.nav')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body no-padding panel-allnews">
      <div class="col-md-9 no-padding ">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="heading-title">
              <span class="name">{{ trans('radiopages.Morenews') }}</span>
              <div class="border"></div>
            </div>
          </div>
          <div class="panel-body">
            @if($postAll)
            @foreach($postAll as $post)
            <div class="media blockallnews">
              <div class="media-left">
                <a href="{{ route('sport.news', [$post, $lc]) }}">
                  <img class="media-object" src="{{ asset($post->getFile()) }}" alt="...">
                </a>
              </div>
              <div class="media-body">
                <div class="extra">
                  <span class="datetime">{{ $post->getDay() }}, {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                  <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                </div>
                <a class="media-heading " href="{{ route('sport.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
                <span class="mb_substr">
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
                         <a href="{{ route('sport.allnews', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                      </li>
                      <li>
                         <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                      </li>
                      @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                      <li class="@if(($j > $postAll->currentPage()+3) || ($j < $postAll->currentPage()-3)) hidden @endif">
                         <a href="{{ route('sport.allnews', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">
                         {{ $j++ }}
                         </a>
                      </li>
                      @endfor
                      <li>
                         <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                      </li>
                      <li>
                         <a href="{{ route('sport.allnews', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                      </li>
                   </ul>
                </nav>
            </footer>                
          </div>
        </div>
      </div>
      <div class="col-md-3 no-padding">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="heading-title">
              <span class="name">{{ trans('site.PostPopular') }}</span>
              <div class="border"></div>
            </div>
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
                <a class="media-heading" href="{{ route('sport.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
              </div>
            </div>
            @endforeach
            @endif
            <div class="banner-right">
              <a href="@if($sportBottom) {{ $sportBottom->linkTo }} @else # @endif" class="text-center ads ads-300x250 middle-ad">
                <img src="@if(!empty($sportBottom->file)) {{ asset($sportBottom->file) }} @else {{ asset('images/banner_240x400.png') }} @endif" alt=""/>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('footerscript2')
@endsection