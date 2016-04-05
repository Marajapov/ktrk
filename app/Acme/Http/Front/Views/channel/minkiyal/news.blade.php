@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:url"                content="{{ Request::url()}}" />
    <meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $post->getTitleRuOrKg()}}" />
    <meta property="og:description"        content="{{ $post->getShortDescription() }}" />
    <meta property="og:image"              content="{{ asset($post->thumbnail_big) }}" />

<link rel="stylesheet" href="{{asset('css/goodshare.css')}}">
<link rel="stylesheet" href="{{asset('css/articles.css')}}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}"/>
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
<nav id="main-menu" class="navbar navbar-minheader">
  <div class="container-fluid">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">        
        </a>
        <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{ route('minkiyal.home')}}">Башкы</a></li>
          <li><a href="{{ route('minkiyal.posts')}}">Сүрөтбаяндар</a></li>
          <li><a href="{{ route('minkiyal.home')}}#contacts">Биз жөнүндө</a></li>
          <li><a href="{{ route('minkiyal.home')}}">Ди-Джейлер</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
                <div class="online">
              <h3><i class="fa fa-microphone"></i>Түз эфир</h3>
              <object width="65" height="40" data="http://ktrk.kg/online/uppod.swf">
                 <param name="bgcolor" value="#ffffff" />
                 <param name="allowFullScreen" value="false" />
                 <param name="allowScriptAccess" value="false" />
                 <param name="audio" value="http://ktrk.kg/online/uppod.swf" />
                 <param name="flashvars" value="comment=KTRK&amp;st=03AEEZykN3Q3Q3QH3zkOk1mwXRWNvz3b1XAxYTtj1mzC5kA2uyb1kOk1mwXRWNvhzdwf9vwjzC5k=jQZi6jNf1kOk1mwXRWHNXzBGDY31X=jOkZ2sN6HsQfzC5kev0kttj1vL2NXzC5k1sQE3Q2GkTCGfFdGJTCHwXpvQXeWNhHm0X1hsNkTWwWTSUhTd0kNtj1JTWwf9vwnY31DX1CYLex5W=jaktjR1i6W0kbSal1C0V9Rv1XAuaTtj1tzC5kb42Qi63Gktj1ozfUrd&amp;file=http://212.112.96.232:8081" />
              </object>
           </div>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
</nav>
    <div class="container mingallery">

                <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ $post->category('category_id')->first()->getTitle() }}</h3>
                     </div>
                     <div class="panel panel-article">

                        <div class="panel-body">
                           <div class="news-info">
                              <span class="date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <h3 class="newstitle">{{ $post->getTitleRuOrKg() }}</h3>
                             <p class="post-thumb" href="{{ route('front.post', $post) }}">
                              <a id="post-thumb" href="@if(empty($post->thumbnail_big)){{  asset($post->thumbnail) }}@else{{ asset($post->thumbnail_big) }}@endif">
                                <img class="left" src="@if(empty($post->thumbnail_big)) {{  asset($post->thumbnail) }} @else {{  asset($post->thumbnail_big) }} @endif" alt="image">
                              </a>
                              @if($post->thumb_desc || $post->thumb_desc_ru)<span class="thumb_desc">{{ $post->getThumbnailDesc() }}</span>@endif
                              {{--@if($post->thumb_author)<span class="thumb_author"> Фото: {{ $post->thumb_author }}</span>@endif--}}
                            </p>
                           <article>
                              {!! $post->getContent() !!}
                           </article>
                          <p>
                              <a href="http://orphus.ru" id="orphus" class="hidden" target="_blank"><img alt="Система Orphus" src="{{ asset('js/orphus.gif') }}" border="0" width="240" height="80" /></a>
                          </p>

                          <div class="orphus-mistake pull-right">
                              <div class="media">
                                  <div class="media-body media-middle">
                                      <h4>
                                          @if(app()->getlocale()=='kg')
                                              Эгерде ката тапсаңыз, текстти белгилеп Ctrl+Enter басыңыз
                                          @elseif(app()->getlocale() == 'ru')
                                              Если вы обнаружили ошибку, выделите текст и нажмите Ctrl+Enter
                                          @endif
                                      </h4>
                                  </div>
                                  <div class="media-right media-middle">
                                      <span class="media-object">
                                          <i class="fa fa-exclamation-circle"></i>
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                       <footer class="with-share">
                           @if(auth()->user())
                               <a class="post-edit" href="{{ route('admin.post.edit', $post) }}" target="_blank"><i class="fa fa-pencil"></i>{{ trans('site.AdminPostEdit') }}</a>
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

                           <a href="{{ route('birinchi.allnews') }}">
                               <span>{{ trans('site.PostAllNews') }}<i class="fa fa-arrow-circle-right"></i></span>
                           </a>
                       </footer>
                     </div>
                  </div>
       <div class="col-md-12">
         <footer class="with-share">      
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
         </footer>
       </div>
    </div>


@stop

@section('footerScript')
<script src="{{asset('js/goodshare.js')}}"></script>
    <script>
        $(window).load(function(){
            $('.goodshare').each(function(){
                var span = $(this).children('span');
                var counter = span.text();
                if((counter==0) || (counter=='')){
                    $(this).addClass('empty');
                }
            });
        });
    </script>
@stop