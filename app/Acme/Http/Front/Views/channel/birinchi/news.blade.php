@extends('Front::channel.birinchi.default')
@section('title', "About")
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

@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="row onenews">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ $post->category('category_id')->first()->getTitle() }}</h3>
                     </div>
                     <div class="panel">

                        <div class="panel-body">
                           <div class="news-info">
                              <span class="date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <h3 class="newstitle">{{ $post->getTitleRuOrKg() }}</h3>
                           <div class="oneimg">
                              <img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" title="{{ $post->getTitleRuOrKg() }}">
                           </div>
                           <article>
                              {!! $post->getContent() !!}
                           </article>
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
               </div>

               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('site.MatpoTeme') }}</h3>
                     </div>
                    
                     @foreach($relatedNews as $post)

                
                     <div class="blocknews col-md-3 col-sm-4 col-xs-12">
                          <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                  <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" title="{{ $post->getTitleRuOrKg() }}">
                                  <div class="card-info">
                                       <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                       <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                  </div>
                              </a>
                              <h3 class="name headline">
                                  <a href="{{ route('birinchi.news', $post) }}" title="">
                                      {{ $post->getTitleRuOrKg() }}
                                  </a>
                              </h3>
                          </article>
                     </div>  
           
                     @endforeach

                          
                  </div>
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
                                      <a class="cat" href="{{ route('birinchi.category', $post->category) }}"><span>{{ $post->category('category_id')->first()->getTitle() }}</span></a>
                                      <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                  </div>
                                  <a class="media-heading" href="{{ route('birinchi.news', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
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
            <div class="row onenews">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('radiopages.Categories') }}</h3>
                     </div>                     
                     <div class="col-md-12 ctg-panel">                          
                        <ul class="list-group">
                           @foreach($categories as $category)
                           <li class="list-group-item">
                              <a href="{{ route('birinchi.category', $category) }}">{{ $category->getTitle() }}</a>
                           </li>
                           @endforeach
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
@section('footerscript2')
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
@endsection