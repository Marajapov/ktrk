@extends('Front::channel.kyrgyzradio.default')
@section('title', 'Анонс')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}"/>
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
<div class="container main-wrapper">
  <div class="row">
    <section class="content clearfix">
      <div class="clearfix">
        <div class="top-left-block col-md-9">
          <div class="panel panel-default panel-article panel-kenesh">
            <div class="panel-body clearfix">
              <div class="col-md-12 block news-block">

                @if($kyrgyzradiotop)
                  @foreach($kyrgyzradiotop as $key=> $row)
                <h4 class="news-title">
                  {{$row->name}}
                  <div class="extra">
                    <span class="art-date"><i class="fa fa-calendar"></i>18 Март, 2016 </span>
                    <span class="art-view"><i class="fa fa-eye"></i>62</span>
                  </div>
                </h4>
                <p class="post-thumb" href="{{ route('front.post', $row) }}">
                  <a id="post-thumb" href="{{asset($row->thumbnail)}}">
                    <img class="left" src="{{asset($row->thumbnail)}}" alt="image">
                  </a>
                  <span class="thumb_desc">{!! $row->getDesc() !!}</span>
                  {{--@if($post->thumb_author)<span class="thumb_author"> Фото: {{ $post->thumb_author }}</span>@endif--}}
                </p>

                  @endforeach
                @endif

              </div>


              <footer class="with-share" style="text-align: center">
                {{--@if(auth()->user())--}}
                  {{--<a class="post-edit" href="{{ route('admin.post.edit', $kyrgyzradiotop) }}" target="_blank"><i class="fa fa-pencil"></i>{{ trans('site.AdminPostEdit') }}</a>--}}
                {{--@endif--}}

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




        </div>

        <div class="col-md-3" style="padding: 15px;">
          <div class="row">
            <div class="panel ctg-panel media-ctg-panel">
              <div class="panel-heading" style="padding: 2px">
                <h3 class="panel-title" style="color: #04549C"><span>Уктуруулар</span></h3>
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
    </section>
  </div>
</div>

@stop
@section('footerScript')
  {{--MAGNIFIC POPUP--}}
  <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
  <script>
    $('#post-thumb').magnificPopup({
      type: 'image',
      mainClass: 'mfp-zoom-in',
      tLoading: '',
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {

        imageLoadComplete: function() {
          var self = this;
          setTimeout(function() {
            self.wrap.addClass('mfp-image-loaded');
          }, 16);
        },
        close: function() {
          this.wrap.removeClass('mfp-image-loaded');
        },




        // don't add this part, it's just to avoid caching of image
        beforeChange: function() {
          this.items[0].src = this.items[0].src + '?=' + Math.random();
        }
      },

      closeBtnInside: false,
      closeOnContentClick: true,
      midClick: true
    });
  </script>

  {{--SHARE BUTTONS--}}
  <script src="{{ asset('js/goodshare.js') }}"></script>
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