@extends('Front::layouts.defaultTest')

@section('title', $post->getTitleRuOrKg().' - КТРК' )

@section('styles')
    <meta property="og:url"                content="{{ Request::url()}}" />
    <meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $post->getTitleRuOrKg()}}" />
    <meta property="og:description"        content="{{ $post->getShortDescription() }}" />
    <meta property="og:image"              content="{{ asset($post->thumbnail_big) }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>

    <link rel="stylesheet" href="{{ asset('froala/css/froala_style.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>
@endsection()
@section('content')

    <div class="section light-section post-section">
    
        @include('Front::partials.bannerTest')

        @if($post->getTilda())
            <div class="post-tilda" id="postTilda">
                <a class="tilda-logo" href="{{route('front.home')}}">
                    <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
                    {{ trans('site.Back') }}
                </a>
                <iframe src="{{$post->getTilda()}}">Browser not compatible.</iframe>
            </div>
        @else

        <div class="container">
            
            <div class="row">

                <div class="post-left-section col-md-9">                    
                    <div class="section article-section">
                        <div class="section-title">
                            <h4>
                                <a href="{{route('front.general')}}">
                                    {{ trans('site.News') }} 
                                </a>
                                <span class="divider"><i class="fa fa-circle"></i></span>
                                <a href="{{ route('front.category', $post->category) }}">
                                    @if(app()->getlocale() == 'kg')
                                        {{ $post->category('category_id')->first()->title }}
                                    @else
                                        {{ $post->category('category_id')->first()->titleRu }}
                                    @endif
                                </a>
                            </h4>
                        </div>

                        <div class="section-body">                        
                            <div class="main-news-item">
                                <span class="hidden" id="postId">{{ $post->id }}</span>
                                <span class="hidden" id="orphusAction">{{ route('front.orphus') }}</span>
                                <figure>
                                    <div class="main-news-thumb">
                                        <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                    </div>
                                    <figcaption>
                                        <div class="inner">
                                            <p class="main-news-title">
                                                {{$post->getTitleRuOrKg()}}
                                            </p>
                                            <div class="main-news-extra clearfix">
                                                <span class="main-news-date">
                                                    {{ $post->getDay() }} {{ $post->getMonthRu() }} @if(date('Y') != $post->getYear()) {{ $post->getYear() }} @endif, {{ $post->getTime()}}
                                                </span>
                                                <span class="main-news-views">
                                                    <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                        <g>
                                                            <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                        </g>
                                                    </svg>
                                                    {{ $post->getViewed() }}
                                                </span>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>

                                <div class="article-extra clearfix">
                                    <div class="pluso share-buttons pull-left">
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
                                    <div class="orphus-mistake pull-right">
                                        <h4>
                                            @if($lc=='kg')                                            
                                                <span>Эгерде текстте ката тапсаңыз,</span>
                                                <span>белгилеп Ctrl+Enter басыңыз</span>
                                            @elseif($lc == 'ru')
                                                <span>Обнаружили опечатку в тексте?</span>
                                                <span>Выделите и нажмите Ctrl+Enter</span>
                                            @endif
                                        </h4>
                                        <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                            <g>
                                                <path d="M16,32C7.1,32,0,24.9,0,16S7.1,0,16,0s16,7.1,16,16S24.9,32,16,32z M16,1.4C7.9,1.4,1.4,7.9,1.4,16S7.9,30.6,16,30.6
                                                    S30.6,24.1,30.6,16S24.1,1.4,16,1.4z"/>
                                                <g>
                                                    <path d="M15.4,20l-0.6-8.5V8h2.5v3.5L16.7,20H15.4z M14.8,24v-2.2h2.2V24H14.8z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <section class="clearfix">
                                    
                                    <div>                                    
                                        {!! $post->getEmbed() !!}                                    
                                    </div>

                                    @if($post->live)
                                        <div id="player"></div>
                                    @endif

                                    {!! $content !!}

                                    @if($images)                                     
                                        <div class="slider-for">
                                            @if($images)   
                                                @foreach($images as $image)
                                                    <div>
                                                        <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="slider-nav">
                                            @if($images)
                                                @if($images)
                                                    @foreach($images as $image)
                                                        <div>
                                                            <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </div>
                                    @endif

                                    @if($images2)
                                        <div class="slider-for2">
                                            @if($images2)

                                                @foreach($images2 as $image2)
                                                    <div>
                                                        <img src="{{ asset('froala/uploads/'.$image2->name) }}" alt=""/>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="slider-nav2 col-md-12">
                                            @if($images2)
                                                @if($images2)
                                                    @foreach($images2 as $image2)
                                                        <div>
                                                            <img class="img" src="{{ asset('froala/uploads/'.$image2->name) }}" alt=""/>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </div>
                                    @endif
                                    
                                </section>
                            </div>

                            <p>
                                <a href="http://orphus.ru" id="orphus" class="hidden" target="_blank"><img alt="Система Orphus" src="{{ asset('js/orphus.gif') }}" border="0" width="240" height="80" /></a>
                            </p>

                            <footer>
                                @if(auth()->user())
                                    <a class="post-edit pull-left" href="{{ route('admin.post.edit', $post) }}" target="_blank"><i class="fa fa-pencil"></i>{{ trans('site.AdminPostEdit') }}</a>
                                @endif

                                <a href="{{ route('front.general') }}">
                                    <span>{{ trans('site.PostAllNews') }}</span>
                                </a>
                            </footer>                  
                        </div>
                    </div>

                    @include('Front::partials.postBanner')

                    <div class="section related-section">
                        <div class="section-title">
                            <h4>                                
                                {{ trans('site.TekteshNews') }}
                            </h4>
                        </div>

                        <div class="section-body">
                            @foreach($relatedPosts as $relatedPost)
                                @if($relatedPost->id == $post->id)
                                @else
                                    <div class="block">
                                        <a href="{{ route('front.post', [$relatedPost, $lc]) }}" class="news-thumb">
                                            <img src="{{ asset($relatedPost->getFile()) }}" alt=""/>
                                        </a>
                                        <a class="related-title" href="{{ route('front.post', [$relatedPost, $lc]) }}">
                                            {{ $relatedPost->getTitleRuOrKg() }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                @include('Front::post.rightSection')
                
            </div>
        </div>
    @endif
    </div>
@stop

@section('footerScript')
		@if($post->live)
	    <script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
	    <script>jwplayer.key="tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>
	    <script type="text/javascript">

	        var playerInstance = jwplayer("player");

	        playerInstance.setup({
	            autostart: true,
	            playlist: [{
	                image: "{{ asset('images/live_bg.png')}}",
	                title: "КТРК",
	                sources: [{
	                      file:"{{$stream}}"
	                }]
	            }],
	            primary: "flash",
	            skin: "seven",
	            stretching: "exactfit",
	            height: 460,
	            width: "100%",
	            sharing: {
	                sites: ["facebook","twitter"]
	              }
	            });
	    </script>
    @endif

    <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ru.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/transition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/collapse.js') }}"></script>

    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#inlineCalendar').datetimepicker({
                locale: 'ru',
                format: 'L',
                inline: true,
            sideBySide: true,
            icons: {
                previous: 'fa fa-angle-left',
                next: 'fa fa-angle-right'               
            },
            maxDate: moment().format('YYYY-MM-DD'),
                @if($date)
                    defaultDate: moment('{{$date}}').format('YYYY-MM-DD')
                @endif      
            }).on('dp.change', function(e) {
                var date = moment(e.date).format('YYYY-MM-DD');
                $('input[name=d]').val(date);
                $('#changeDate').submit();
            });
        });
    </script>

    <!-- Google reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Share buttons -->
    <script src="{{ asset('js/goodshare.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.goodshare').each(function(){
                var span = $(this).children('span');
                var counter = span.text();
                if((counter==0) || (counter=='')){
                    $(this).addClass('empty');
                }
            });

            var iframe = $('.article-section section .fr-video iframe'),
            		iframeW = iframe.width(),
            		iframeH = iframe.height();

        		iframe.height(iframeW*9/16);

        		console.log(iframeW, iframeH, iframeW*9/16);
        });

        @if($post->getTilda())
            $('body').addClass('post-with-tilda');
        @endif
    </script>

    <!-- Sweet Alert -->
    <script>
        @if(session('success') == 'true')
            swal("Спасибо!", "Ваш комментарий принят на модерацию!", "success");
        @elseif(session('success') == 'false')
            swal("", "Где то произошла ошибка!", "error");
        @endif
    </script>

    <!--Carousel-->
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.slider-nav',
            arrows: true,
            prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg></button>',
            nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg></button>'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            arrows: false
        });
        $('.slider-for2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.slider-nav2',
            arrows: true,
            prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg></button>',
            nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg></button>'           
        });
        $('.slider-nav2').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for2',
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true
        });
    </script>

    @if(session('send') == 'true')
        <script>
        swal("Спасибо!", "В ближайшее время ошибка будет устранена!", "success");
        </script>
    @endif

    <!-- Orphus -->
    <script>
        var formAction = $("#orphusAction").text();
        var postId = $("#postId").text();
        var _token = $('meta[name="csrf-token"]').attr('content');
        var url = window.location.href;

        (function(){var _1="5.01";
            var _2="!ekdnriabvea.bikeg@amlic.mo";
            var hq="http://orphus.ru/ru/";
            var _4="****";
            var _5="####";
            var _6=60;
            var _7=256;
            var _8={// Russian (\u0420\u0443\u0441\u0441\u043A\u0438\u0439)
                alt:        "\u0412\u044B\u0434\u0435\u043B\u0438\u0442\u0435 \u043E\u0440\u0444\u043E\u0433\u0440\u0430\u0444\u0438\u0447\u0435\u0441\u043A\u0443\u044E \u043E\u0448\u0438\u0431\u043A\u0443 \u043C\u044B\u0448\u044C\u044E \u0438 \u043D\u0430\u0436\u043C\u0438\u0442\u0435 Ctrl+Enter. \u0421\u0434\u0435\u043B\u0430\u0435\u043C \u044F\u0437\u044B\u043A \u0447\u0438\u0449\u0435!",
                badbrowser: "\u0412\u0430\u0448 \u0431\u0440\u0430\u0443\u0437\u0435\u0440 \u043D\u0435 \u043F\u043E\u0434\u0434\u0435\u0440\u0436\u0438\u0432\u0430\u0435\u0442 \u0432\u043E\u0437\u043C\u043E\u0436\u043D\u043E\u0441\u0442\u044C \u043F\u0435\u0440\u0435\u0445\u0432\u0430\u0442\u0430 \u0432\u044B\u0434\u0435\u043B\u0435\u043D\u043D\u043E\u0433\u043E \u0442\u0435\u043A\u0441\u0442\u0430 \u0438\u043B\u0438 IFRAME. \u0412\u043E\u0437\u043C\u043E\u0436\u043D\u043E, \u0441\u043B\u0438\u0448\u043A\u043E\u043C \u0441\u0442\u0430\u0440\u0430\u044F \u0432\u0435\u0440\u0441\u0438\u044F, \u0430 \u0432\u043E\u0437\u043C\u043E\u0436\u043D\u043E, \u0435\u0449\u0435 \u043A\u0430\u043A\u0430\u044F-\u043D\u0438\u0431\u0443\u0434\u044C \u043E\u0448\u0438\u0431\u043A\u0430.",
                toobig:     "\u0412\u044B \u0432\u044B\u0431\u0440\u0430\u043B\u0438 \u0441\u043B\u0438\u0448\u043A\u043E\u043C \u0431\u043E\u043B\u044C\u0448\u043E\u0439 \u043E\u0431\u044A\u0435\u043C \u0442\u0435\u043A\u0441\u0442\u0430!",
                thanks:     "\u0421\u043F\u0430\u0441\u0438\u0431\u043E \u0437\u0430 \u0441\u043E\u0442\u0440\u0443\u0434\u043D\u0438\u0447\u0435\u0441\u0442\u0432\u043E!",
                subject:    "\u041E\u0440\u0444\u043E\u0433\u0440\u0430\u0444\u0438\u0447\u0435\u0441\u043A\u0430\u044F \u043E\u0448\u0438\u0431\u043A\u0430",
                docmsg:     "\u0414\u043E\u043A\u0443\u043C\u0435\u043D\u0442:",
                intextmsg:  "\u041E\u0440\u0444\u043E\u0433\u0440\u0430\u0444\u0438\u0447\u0435\u0441\u043A\u0430\u044F \u043E\u0448\u0438\u0431\u043A\u0430 \u0432 \u0442\u0435\u043A\u0441\u0442\u0435:",
                ifsendmsg:  "\u041F\u043E\u0441\u043B\u0430\u0442\u044C \u0441\u043E\u043E\u0431\u0449\u0435\u043D\u0438\u0435 \u043E\u0431 \u043E\u0448\u0438\u0431\u043A\u0435 \u0430\u0432\u0442\u043E\u0440\u0443?\n\u0412\u0430\u0448 \u0431\u0440\u0430\u0443\u0437\u0435\u0440 \u043E\u0441\u0442\u0430\u043D\u0435\u0442\u0441\u044F \u043D\u0430 \u0442\u043E\u0439 \u0436\u0435 \u0441\u0442\u0440\u0430\u043D\u0438\u0446\u0435.",
                gohome:     "\u041F\u0435\u0440\u0435\u0439\u0442\u0438 \u043D\u0430 \u0434\u043E\u043C\u0430\u0448\u043D\u044E\u044E \u0441\u0442\u0440\u0430\u043D\u0438\u0446\u0443 \u0441\u0438\u0441\u0442\u0435\u043C\u044B Orphus?",
                newwin:     "\u0421\u0442\u0440\u0430\u043D\u0438\u0446\u0430 \u043E\u0442\u043A\u0440\u043E\u0435\u0442\u0441\u044F \u0432 \u043D\u043E\u0432\u043E\u043C \u043E\u043A\u043D\u0435.",
                name:       "\u0421\u0438\u0441\u0442\u0435\u043C\u0430 Orphus",
                author:     "\u0410\u0432\u0442\u043E\u0440: \u0414\u043C\u0438\u0442\u0440\u0438\u0439 \u041A\u043E\u0442\u0435\u0440\u043E\u0432.",
                to:         "\u041F\u043E\u043B\u044C\u0437\u043E\u0432\u0430\u0442\u0435\u043B\u044C Orphus",
                send:       "\u041E\u0442\u043F\u0440\u0430\u0432\u0438\u0442\u044C",
                cancel:     "\u041E\u0442\u043C\u0435\u043D\u0430",
                entercmnt:  "\u041A\u043E\u043C\u043C\u0435\u043D\u0442\u0430\u0440\u0438\u0439 \u0434\u043B\u044F \u0430\u0432\u0442\u043E\u0440\u0430 (\u043D\u0435\u043E\u0431\u044F\u0437\u0430\u0442\u0435\u043B\u044C\u043D\u043E):"

            };
            var _9="css";
            var _a=0;
            var w=window;
            var d=w.document;
            var de=d.documentElement;
            var b=d.body;
            var _f=null;
            var _10={};
            var _11=false;
            var _12="";
            var _13=function(){if(_2.substr(0,1)=="!"){_2=_2.substr(1).replace(/(.)(.)/g,"$2$1");}setTimeout(function(){var _14=_15();
                if(_14){_14.onclick=_16;
                    _14.title=_14.childNodes[0]&&_14.childNodes[0].alt;}},100);
                d.onkeypress=_17;
                _8.gohome+=" "+_8.newwin;};
            var _15=function(){return d.getElementById("orphus");};
            var _16=function(){with(_8){if(confirm(name+" v"+_1+".\n"+author+"\n\n"+alt+"\n\n"+gohome)){w.open(hq,"_blank");}return false;}};
            var _18=function(){var n=0;
                var _1a=function(){if(++n>20){return;}w.status=(n%5)?_8.thanks:" ";
                    setTimeout(_1a,100);};
                _1a();};
            var _1b=function(e){e.style.position="absolute";
                e.style.top="-10000px";
                if(b.lastChild){b.insertBefore(e,b.lastChild);}else{b.appendChild(e);}};
            var _1d=function(_1e){var div=d.createElement("DIV");
                div.innerHTML="<iframe name=\""+_1e+"\"></iframe>";
                _1b(div);
                return d.childNodes[0];};
            var _20=function(url,_22,_23){var _24="orphus_ifr";
                if(!_f){_f=_1d(_24);}var f=d.createElement("FORM");
                f.style.position="absolute";
                f.style.top="-10000px";
                f.action=hq;
                f.method="post";
                f.target=_24;
                var _26={version:_1,email:_2,to:_8.to,subject:_8.subject,ref:url,c_pre:_22.pre,c_sel:_22.text,c_suf:_22.suf,c_pos:_22.pos,c_tag1:_4,c_tag2:_5,charset:d.charset||d.characterSet||"",comment:_23};
                for(var k in _26){var h=d.createElement("INPUT");
                    h.type="hidden";
                    h.name=k;
                    h.value=_26[k];
                    f.appendChild(h);}_1b(f);
                f.submit();
                f.parentNode.removeChild(f);};
            var _29=function(){var _2a=0,_2b=0;
                if(typeof (w.innerWidth)=="number"){_2a=w.innerWidth;
                    _2b=w.innerHeight;}else{if(de&&(de.clientWidth||de.clientHeight)){_2a=de.clientWidth;
                    _2b=de.clientHeight;}else{if(b&&(b.clientWidth||b.clientHeight)){_2a=b.clientWidth;
                    _2b=b.clientHeight;}}}var _2c=0,_2d=0;
                if(typeof (w.pageYOffset)=="number"){_2d=w.pageYOffset;
                    _2c=w.pageXOffset;}else{if(b&&(b.scrollLeft||b.scrollTop)){_2d=b.scrollTop;
                    _2c=b.scrollLeft;}else{if(de&&(de.scrollLeft||de.scrollTop)){_2d=de.scrollTop;
                    _2c=de.scrollLeft;}}}return {w:_2a,h:_2b,x:_2c,y:_2d};};
            _10.confirm=function(_2e,_2f,_30){var ts=new Date().getTime();
                var _32=confirm(_8.docmsg+"\n   "+d.location.href+"\n"+_8.intextmsg+"\n   \""+_2e+"\"\n\n"+_8.ifsendmsg);
                var dt=new Date().getTime()-ts;
                if(_32){_2f("");}else{if(!_30&&dt<50){var sv=d.onkeyup;
                    d.onkeyup=function(e){if(!e){e=window.event;}if(e.keyCode==17){d.onkeyup=sv;
                        _10.confirm(_2e,_2f,true);}};}}};
            _10.css=function(_36,_37){if(_11){return;}_11=true;
                var div=d.createElement("DIV");
                var w=550;
                if(w>b.clientWidth-10){w=b.clientWidth-10;}div.style.zIndex="10001";
                div.innerHTML=""+"<div class=\"orphus clearfix\" style=\"width:"+w+"px; z-index:10001; \">"+"<a href=\"javascript:void(0)\" onclick=\"return closeForm();\" class=\"sprite_close\"><i class=\"fa fa-close\"></i></a>"+"<div class=\"header\">"+_8.intextmsg+"</div>"+"<div class=\"item\">&laquo;&#133;"+_36.replace(_4,"<u style=\"color:red\">").replace(_5,"</u>")+"&#133;&raquo;</div>"+"<div class=\"message\">"+_8.ifsendmsg.replace(/\n/,"<br/>")+"</div>"+"<form id=\"orphus\" method=\"post\" action=\""+formAction+"\"><input name=\"comment\" placeholder=\"Комментарий для автора (необязательно)\" type=\"text\"/><input name=\"message\" value=\""+_36+"\" type=\"hidden\"/>"+"<div class=\"buttons\">"+"<input name=\"submit\" type=\"submit\" value=\""+_8.send+"\">"+"<input type=\"button\" value=\""+_8.cancel+"\" class=\"cancel\"><input type=\"hidden\" name=\"_token\" value=\""+_token+"\"/><input type=\"hidden\" name=\"url\" value=\""+url+"\"/><input type=\"hidden\" name=\"postId\" value=\""+postId+"\"/>"+"</div>"+"</form>"+"</div>"+"";

                _1b(div);
                var _3a=div.getElementsByTagName("input");
                var _3b=div.getElementsByTagName("form");
                var t=_3a[0];
                var _3d=null;
                var _3e=[];
                var _3f=function(){d.onkeydown=_3d;
                    _3d=null;
                    div.parentNode.removeChild(div);
                    for(var i=0;i<_3e.length;i++){_3e[i][0].style.visibility=_3e[i][1];}_11=false;
                    _12=t.value;};
                var pos=function(p){var s={x:0,y:0};
                    while(p.offsetParent){s.x+=p.offsetLeft;
                        s.y+=p.offsetTop;
                        p=p.offsetParent;}return s;};
                setTimeout(function(){var w=div.clientWidth;
                    var h=div.clientHeight;
                    var dim=_29();
                    var x=(dim.w-w)/2+dim.x;
                    if(x<10){x=10;}var y=(dim.h-h)/2+dim.y-10;
                    if(y<10){y=10;}div.style.left=x+"px";
                    div.style.top=y+"px";
                    if(navigator.userAgent.match(/MSIE (\d+)/)&&RegExp.$1<7){var _49=d.getElementsByTagName("SELECT");
                        for(var i=0;i<_49.length;i++){var s=_49[i];
                            var p=pos(s);
                            if(p.x>x+w||p.y>y+h||p.x+s.offsetWidth<x||p.y+s.offsetHeight<y){continue;}_3e[_3e.length]=[s,s.style.visibility];
                            s.style.visibility="hidden";}}t.value=_12;
                    t.focus();
                    t.select();
                    _3d=d.onkeydown;
                    d.onkeydown=function(e){if(!e){e=window.event;}if(e.keyCode==27){_3f();}};
                    _3b[0].onsubmit=function(){_37(t.value);
                        _3f();
                        _12="";
                        return false;};
                    _3a[2].onclick=function(){_3f();};},10);};
            var _4e=function(_4f){return (""+_4f).replace(/[\r\n]+/g," ").replace(/^\s+|\s+$/g,"");};
            var _50=function(){try{var _51=null;
                var _52=null;
                if(w.getSelection){_52=w.getSelection();}else{if(d.getSelection){_52=d.getSelection();}else{_52=d.selection;}}var _53=null;
                if(_52!=null){var pre="",_51=null,suf="",pos=-1;
                    if(_52.getRangeAt){var r=_52.getRangeAt(0);
                        _51=r.toString();
                        var _58=d.createRange();
                        _58.setStartBefore(r.startContainer.ownerDocument.body);
                        _58.setEnd(r.startContainer,r.startOffset);
                        pre=_58.toString();
                        var _59=r.cloneRange();
                        _59.setStart(r.endContainer,r.endOffset);
                        _59.setEndAfter(r.endContainer.ownerDocument.body);
                        suf=_59.toString();}else{if(_52.createRange){var r=_52.createRange();
                        _51=r.text;
                        var _58=_52.createRange();
                        _58.moveStart("character",-_6);
                        _58.moveEnd("character",-_51.length);
                        pre=_58.text;
                        var _59=_52.createRange();
                        _59.moveEnd("character",_6);
                        _59.moveStart("character",_51.length);
                        suf=_59.text;}else{_51=""+_52;}}var p;
                    var s=(p=_51.match(/^(\s*)/))&&p[0].length;
                    var e=(p=_51.match(/(\s*)$/))&&p[0].length;
                    pre=pre+_51.substring(0,s);
                    suf=_51.substring(_51.length-e,_51.length)+suf;
                    _51=_51.substring(s,_51.length-e);
                    if(_51==""){return null;}return {pre:pre,text:_51,suf:suf,pos:pos};}else{alert(_8.badbrowser);
                    return;}}catch(e){return null;}};
            var _5d=function(){if(!_2||navigator.appName.indexOf("Netscape")!=-1&&eval(navigator.appVersion.substring(0,1))<5){alert(_8.badbrowser);
                return;}var _5e=function(_5f){alert("Wrong installation (code "+_5f+"). Please reinstall Orphus.");};
                var _60=_15();
                if(!_60){_5e(1);
                    return;}if(_60.href.replace(/.*\/\/|\/.*/g,"")!=hq.replace(/.*\/\/|\/.*/g,"")){_5e(2);
                    return;}var i=null;
                for(var n=0;n<_60.childNodes.length;n++){if(_60.childNodes[n].tagName=="IMG"){i=_60.childNodes[n];
                    break;}}if(!i){_5e(3);
                    return;}if(!i.alt.match(/orphus/i)){_5e(4);
                    return;}if(i.width<30&&i.height<10){_5e(5);
                    return;}if(_60.style.display=="none"||i.style.display=="none"||_60.style.visibility=="hidden"||i.style.visibility=="hidden"){_5e(6);
                    return;}var _63=_50();
                if(!_63){return;}with(_63){pre=pre.substring(pre.length-_6,pre.length).replace(/^\S{1,10}\s+/,"");
                    suf=suf.substring(0,_6).replace(/\s+\S{1,10}$/,"");}var _64=_4e(_63.pre+_4+_63.text+_5+_63.suf);
                if(_64.length>_7){alert(_8.toobig);
                    return;}_10[_9](_64,function(_65){_20(d.location.href,_63,_65);
                    _18();});};
            var _17=function(e){var _67=0;
                var we=w.event;
                if(we){_67=we.keyCode==10||(we.keyCode==13&&we.ctrlKey);}else{if(e){_67=(e.which==10&&e.modifiers==2)||(e.keyCode==0&&e.charCode==106&&e.ctrlKey)||(e.keyCode==13&&e.ctrlKey);}}if(_67){_5d();
                    return false;}};
            _13();})();

        function closeForm(){
            $('.orphus').parent().hide();
        }
    </script>
@endsection