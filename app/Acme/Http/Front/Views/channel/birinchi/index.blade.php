@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@section('styles')
@endsection
@section('content')              
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   
   <div class="container homepage b-maincolor">
      <div class="row">
         <div class="col-md-8">
            <div class="row">
               <div class="hometreble">
                  <div class="col-md-12">
                     <h3 class="title">{{ trans('radiopages.Mainnews') }}</h3>
                  </div>
                  <div class="row">
                     <div class="col-xs-12 hoverslider">
                        <div class="slider-for3 col-xs-9">
                           @if($generalPosts)
                           @foreach($generalPosts as $post)
                           <div>
                              <div class="slide-info">
                                 <a href="{{ route('birinchi.news', [$post, $lc]) }}" title="">
                                 <img class="img" src="@if(!($post->getFileBig()))images/live_bg.png @else {{ asset($post->getFileBig()) }} @endif" alt=""/>
                                 </a>
                                 <!-- <span class="slide-category"></span> -->
                                 <span class="slide-date">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              </div>
                           </div>
                           @endforeach
                           @endif
                        </div>
                        <div class="slider-nav3 col-xs-3">
                           @if($generalPosts)
                           @foreach($generalPosts as $post)
                           <div>
                              <div class="switcher">
                                 <h3 class="name">
                                    <a href="{{ route('birinchi.news', [$post, $lc]) }}" title="">
                                    {{ $post->getTitleRuOrKg() }}
                                    </a>
                                 </h3>
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
         <div class="col-md-4">
            <div class="row">
               <div class="homeleftcategory">
                  <div class="col-md-12">
                     <h3 class="title">
                        {{ trans('radiopages.Newslenta') }}
                        <div class="pull-right">
                           <i class="fa fa-arrow-up" id="newsticker-prev"></i>
                           <i class="fa fa-arrow-down" id="newsticker-next"></i>
                        </div>
                     </h3>
                  </div>
                  <div class="col-md-12">
                     <div class="lenta">
                        @if($lentaNews)
                        <div id="newsticker-container">
                           <ul id="newsticker">
                              @foreach($lentaNews as $lenta)
                              <li class="lentanews">
                                 <span class="xdate">
                                    {{$lenta->getDay() }} 
                                    <p>{{ $lenta->getMonthRu() }}</p>
                                    <p>{{ $lenta->getTime()}}</p>
                                 </span>
                                 <span class="xtitle"><a href="{{ route('birinchi.news', [$lenta, $lc]) }}">{{ $lenta->getTitleRuOrKg() }}</a></span>
                              </li>
                              @endforeach
                           </ul>
                        </div>
                        @endif
                     </div>
                     <footer>
                        <a href="{{ route('birinchi.allnews') }}">{{ trans('radiopages.Morenews') }}<i class="fa fa-arrow-right"></i></a>
                     </footer>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach($topCategories as $topCategory)
         <div class="col-md-6 homenews">
            <div class="row">
               <div class="col-md-12">
                  <a class="cat-link" href="{{ route('birinchi.category', $topCategory) }}">
                     <h3 class="title">{{ $topCategory->getTitle() }}</h3>
                  </a>
               </div>
               @if($posts)
               @foreach($posts as $post)
               @if($post->category_id == $topCategory->id)
               <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                  <article>
                     <a href="{{ route('birinchi.news', [$post, $lc]) }}" class="image-link">
                        <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                        <div class="card-info">
                           <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                           <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                        </div>
                     </a>
                     <h3 class="name headline">
                        <a href="{{ route('birinchi.news', [$post, $lc]) }}" title="">
                        {{ $post->getTitleRuOrKg() }}
                        </a>
                     </h3>
                  </article>
               </div>
               @endif
               @endforeach
               @endif
            </div>
         </div>
         @endforeach
         <div class="clearfix">
            <div class="col-md-12 text-center ads top-ad hidden-xs">
               <a href="@if(!empty($birinchiBottom->linkTo)){{ $birinchiBottom->linkTo }} @else # @endif" target="_blank">
                  <img src="@if(!empty($birinchiBottom->file)) {{ asset($birinchiBottom->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt="phot1"/>
               </a>
            </div>
            <div class="col-xs-12 top-ad visible-xs">
               <a href="@if(!empty($birinchiBottom->linkTo)){{ $birinchiBottom->linkTo }} @else # @endif" target="_blank">
               <img src="@if(!empty($birinchiBottom->file)) {{ asset($birinchiBottom->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt="phot1"/>
               </a>
            </div>
         </div>
         <div class="col-md-8 ">
            <div class="row shows">
               <div class="col-md-12">
                  <h3 class="titleshows">{{ trans('radiopages.Peredachi') }}</h3>
                  <h3 class="titleshowsright"><a href="{{ route('birinchi.projects') }}">{{ trans('radiopages.AllPereadachi') }}<i class="fa fa-arrow-right"></i></a></h3>
               </div>
               @if($projectAll)
               @foreach($projectAll as $post)                                                  
               <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                  <article class="ukturuular">
                     <a href="{{ route('birinchi.show', [$post, $lc]) }}" class="image-link">
                        <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                        <div class="card-info">
                           <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                           <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                        </div>
                     </a>
                     <h3 class="name headline">
                        <a href="{{ route('birinchi.show', [$post, $lc]) }}" title="">
                        {{ $post->getTitleRuOrKg() }}
                        </a>
                     </h3>
                  </article>
               </div>
               @endforeach
               @endif
            </div>
         </div>
         <div class="col-md-4">
            <div class="row">
               <div class="col-md-12 shows" >
                  <h3 class="titleshows">Аудиоуктуруулар</h3>
                  <iframe width="100%" height="490" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/229824839&amp;color=00aabb&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
               </div>
            </div>
         </div>
         @foreach($bottomCategories as $bottomCategory)
         <div class="col-md-6 homenews">
            <div class="row">
               <div class="col-md-12">
                  <a class="cat-link" href="{{ route('birinchi.category', $topCategory) }}">
                     <h3 class="title">{{ $bottomCategory->getTitle() }}</h3>
                  </a>
               </div>
               @if($posts)
               @foreach($posts as $post)
               @if($post->category_id == $bottomCategory->id)
               <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                  <article>
                     <a href="{{ route('birinchi.news', [$post, $lc]) }}" class="image-link">
                        <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                        <div class="card-info">
                           <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                           <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                        </div>
                     </a>
                     <h3 class="name headline">
                        <a href="{{ route('birinchi.news', [$post, $lc]) }}" title="">
                        {{ $post->getTitleRuOrKg() }}
                        </a>
                     </h3>
                  </article>
               </div>
               @endif
               @endforeach
               @endif
            </div>
         </div>
         @endforeach
      </div>
      <div class="row">
         <div class="col-md-12 birinchigallery">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title">{{ trans('radiopages.PhotoReports') }}</h3>
                  <h3 class="titleshowsright"><a href="{{ route('birinchi.allphotos') }}">{{ trans('radiopages.AllPhotoReports') }}<i class="fa fa-arrow-right"></i></a></h3>
               </div>
               @if($photoGalleries)
               @foreach($photoGalleries as $photoGallery)
               <div class="col-md-4">
                  <a href="{{ route('birinchi.photos', $photoGallery) }}" class="photo-img">
                  <img src="{{ asset($photoGallery->thumbnail_big) }}" alt="" />
                  <span class="photo-overlay"></span>
                  </a>
                  <div class="photo-info">
                     <div class="media">
                        <div class="media-left media-middle">
                           <div class="extraone">
                              <span class="e-datetime"><i class="fa  fa-calendar"></i>  {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                           </div>
                           <a href="{{ route('birinchi.photos', $photoGallery) }}">
                           <i class="fa fa-camera photo-icon"></i>
                           </a>
                        </div>
                        <div class="media-body media-middle">
                           <h4 class="media-heading photo-name"><a href="{{route('birinchi.photos', $photoGallery)}}">{{ $photoGallery->getName() }}</a></h4>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               @endif
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 sociallinks">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title">Биз социалдык тармактарда</h3>
               </div>
               <div class="col-md-3">
                  <div class="fb-page" style="height: 455px;overflow: hidden;" data-href="https://www.facebook.com/1Radiokg" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                     <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/1Radiokg"><a href="https://www.facebook.com/1Radiokg">Биринчи радио</a></blockquote>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <a class="twitter-timeline" data-height="460" href="https://twitter.com/KTRK_kg"></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
               </div>
               <div class="col-md-offset-4"></div>
               <div class="col-md-3">
                  <div id="ok_group_widget"></div>
                  <script>
                     !function (d, id, did, st) {
                       var js = d.createElement("script");
                       js.src = "https://connect.ok.ru/connect.js";
                       js.onload = js.onreadystatechange = function () {
                         if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                           if (!this.executed) {
                             this.executed = true;
                             setTimeout(function () {
                               OK.CONNECT.insertGroupWidget(id,did,st);
                             }, 0);
                           }
                         }}
                       d.documentElement.appendChild(js);
                     }(document,"ok_group_widget","52136546861265","{width:263,height:455}");
                  </script>
               </div>
               <div class="col-md-3">
                  <img src="{{ asset('images/channels/birinchiradio/birinchiapp.jpg') }}" alt="" class="img-responsive">
                  <!-- <iframe src="{{asset('images/channels/birinchiradio/inwidget/index.php?height=455&inline=3')}}" scrolling='no' frameborder='no' style='border:none;width:263px;height:455px;overflow:hidden;'></iframe> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
@section('footerscript2')
    <script>
        $('.slider-for3').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            asNavFor: '.slider-nav3'
        });
        $('.slider-nav3').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for3',
            dots: true,
            focusOnSelect: true,
            vertical:true,
            arrows:false
        });
    </script>
    <script src="{{ asset('js/audio/jquery.newsTicker.js')}}"></script> 
    <script>
        var nt_example1 = $('#newsticker').newsTicker({
            row_height: 50,
            max_rows:6,
            duration: 2500,
            direction:'up',
            pauseOnHover: 1,
            autostart: 1,
            prevButton: $('#newsticker-prev'),
            nextButton: $('#newsticker-next')
        });
    </script>

    <script>
        $('.slider-nav3').on('mouseenter', '.slick-slide', function (e) {
            var $currTarget = $(e.currentTarget),
                index = $currTarget.data('slick-index'),
                slickObj = $('.slider-for3').slick('getSlick');
            slickObj.slickGoTo(index);
        });
    </script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
       fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

@endsection