@extends('Front::channel.kyrgyzradio.default')
@section('title', $post->getTitle())
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta property="og:url"                content="{{ Request::url()}}" />
<meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{ $post->getTitleRuOrKg()}}" />
<meta property="og:description"        content="{{ $post->getShortDescription() }}" />
<meta property="og:image"              content="{{ asset($post->thumbnail_big) }}" />

<style>
  .mfp-ready .mfp-figure {
    opacity: 0;
  }

  .mfp-zoom-in {
    /* start state */
    /* animate in */
    /* animate out */
  }
  .mfp-zoom-in .mfp-figure {
    opacity: 0;
    transition: all 0.3s ease-out;
    transform: scale(0.9);
  }
  .mfp-zoom-in.mfp-bg,
  .mfp-zoom-in .mfp-preloader {
    opacity: 0;
    transition: all 0.3s ease-out;
  }
  .mfp-zoom-in.mfp-image-loaded .mfp-figure {
    opacity: 1;
    transform: scale(1);
  }
  .mfp-zoom-in.mfp-ready.mfp-bg,
  .mfp-zoom-in.mfp-ready .mfp-preloader {
    opacity: 0.8;
  }
  .mfp-zoom-in.mfp-removing .mfp-figure {
    transform: scale(0.9);
    opacity: 0;
  }
  .mfp-zoom-in.mfp-removing.mfp-bg,
  .mfp-zoom-in.mfp-removing .mfp-preloader {
    opacity: 0;
  }

  /* CSS-based preloader */
  .mfp-preloader {
    width: 30px;
    height: 30px;
    background-color: #FFF;
    opacity: 0.65;
    margin: 0 auto;
    animation: rotateplane 1.2s infinite ease-in-out;
  }

  @keyframes rotateplane {
    0% {
      transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    }
    50% {
      transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    }
    100% {
      transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    }
  }
</style>

@endsection
@section('content')
@include('Front::channel.kyrgyzradio.nav')
<div id="news">
   <div class="container" style="background: #ffffff">
      <div class="row">
         <div class="col-md-9" style="background: white;">
            <div class="row">
               <div class="panel-heading">
                  <h3 class="panel-title">                        
                     <a href="{{ route('kyrgyzradio.allnews') }}">
                     @if($kyrgyzradioProjects)
                     @foreach($kyrgyzradioProjects->take(1) as $kyrgyzradioProject)
                     {{ $kyrgyzradioProject->getName() }}
                     @endforeach
                     @endif
                     </a>
                  </h3>
               </div>
               <div class="panel-body post">
                  <div class="news-info">
                     <span class="date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                     <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                  </div>
                  <h2>{{ $post->getTitle() }}</h2>

                 <div class="post-thumb radioimg">
                   <a id="post-thumb" href="@if(empty($post->thumbnail_big)){{  asset($post->thumbnail) }}@else{{ asset($post->thumbnail_big) }}@endif">
                     <img class="left" src="@if(empty($post->thumbnail_big)) {{  asset($post->thumbnail) }} @else {{  asset($post->thumbnail_big) }} @endif" alt="image">
                   </a>
                   {{--@if($post->thumb_desc || $post->thumb_desc_ru)<span class="thumb_desc">{{ $post->getThumbnailDesc() }}</span>@endif--}}
                   {{--@if($post->thumb_author)<span class="thumb_author"> Фото: {{ $post->thumb_author }}</span>@endif--}}
                 </div>

                  {{--<div class="radioimg post-thumb">--}}
                     {{--<a id="post-thumb" href="@if(empty($post->thumbnail_big)){{  asset($post->thumbnail) }}@else{{ asset($post->thumbnail_big) }}@endif">--}}
                       {{--<img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">--}}
                     {{--</a>--}}
                  {{--</div>--}}
                  <article>
                     {!! $post->getContentKG() !!}
                     <div class="carousel-post whitefix">
                        @if($images)
                        @foreach($images as $image)
                        <div class="col-md-4">
                           <a href="#">
                           <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                           </a>
                        </div>
                        @endforeach
                        @endif
                     </div>
                  </article>
                  <p>
                     <a href="http://orphus.ru" id="orphus" class="hidden" target="_blank"><img alt="Система Orphus" src="{{ asset('js/orphus.gif') }}" border="0" width="240" height="80" /></a>
                  </p>
                  <div class="orphus-mistake pull-right">
                     <div class="media">
                        <div class="media-body media-middle">
                           <h4>                                         
                              Эгерде ката тапсаңыз, текстти белгилеп Ctrl+Enter басыңыз                                       
                           </h4>
                        </div>
                        <div class="media-right media-middle">
                           <span class="media-object">
                           <i class="fa fa-exclamation-circle"></i>
                           </span>
                        </div>
                     </div>
                  </div>
                  <footer class="with-share">
                     @if(auth()->user())
                     <a class="post-edit" href="{{ route('admin.post.edit', $post) }}" target="_blank"><i class="fa fa-pencil"></i>Өзгөртүү</a>
                     @endif
                     <div class="pluso share-buttons">
                        <button class="goodshare btn-fb" data-type="fb">
                        <i class="fa fa-facebook"></i>
                        <span data-counter="fb"></span>
                        </button>
                        <!-- Button with share to Facebook & share counter -->
                        <button class="goodshare btn-vk" data-type="vk">
                        <i class="fa fa-vk"></i>
                        <span data-counter="vk"></span>
                        </button>
                        <button class="goodshare btn-ok" data-type="ok">
                        <i class="fa fa-odnoklassniki"></i>
                        <span data-counter="ok"></span>
                        </button>
                        <button class="goodshare btn-gp" data-type="gp">
                        <i class="fa fa-google-plus"></i>
                        <span data-counter="gp"></span>
                        </button>
                        <button class="goodshare btn-tw" data-type="tw">
                        <i class="fa fa-twitter"></i>
                        {{--<span data-counter="tw"></span>--}}
                        </button>
                     </div>
                     <a href="{{ route('kyrgyzradio.allnews') }}">
                     <span>Баардык жаңылыктар<i class="fa fa-arrow-circle-right"></i></span>
                     </a>
                  </footer>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="row">
               <div class="col-md-12" style="background: white;">
                  <div class="row popular">
                     <div class="panel-heading">
                        <h3 class="panel-title"><span>Көп окулууда</span></h3>
                     </div>
                     <div class="col-md-12">

                   
                        @if($popArticles) 
                        @foreach($popArticles as $post)

                        <div class="media">
                           <div class="media-body">
                              <div class="extra">
                                <span class="datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}</span>                     
                         
                                <a class="cat" href="{{ route('kyrgyzradio.project', $post->kyrgyzradioProgram) }}"><span>
                                  @if($post->kyrgyzradioProjects()) {{ $post->kyrgyzradioProjects()->first()->getName()}} @endif
                                </span></a>                       
                                <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                              </div>
                              <a class="media-heading" href="{{ route('kyrgyzradio.news', $post) }}">{{ $post->getTitle() }}</a>
                           </div>
                        </div>                      
                        @endforeach 
                        @endif                                                
                     </div>
                  </div>
               </div>
            </div>

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
</div>
@stop
@section('footerscript2')
@endsection