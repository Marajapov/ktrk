@extends('Front::layouts.default')
@section('title', $gallery->getName())
@section('styles')
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
@endsection()

@section('content')
    <div class="container main-wrapper">
        <div class="row">
            <section class="content clearfix">
                <div class="clearfix">
                    <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
                        <div class="panel panel-default panel-kenesh">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>{{ $gallery->getName() }}</span></h3>
                            </div>
                            <div class="panel-body">

                                <p style="margin: 20px 0;">{{ $gallery->getDescription() }}</p>

                                <div class="col-md-12" style="margin-bottom: 15px;">

                                    <div class="row">
                                        <div class="slider-for">
                                            @if($images)
                                                @foreach($images as $image)
                                                    <div>
                                                        <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                <span class="slide-caption hidden">
                                  {{ $gallery->getName() }}
                                </span>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>

                                        <div class="slider-nav col-md-12">
                                            @if($images)
                                                @foreach($images as $image)
                                                    <div>
                                                        <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <footer class="with-share">

                                    @if(auth()->user())
                                        <a class="post-edit" href="{{ route('admin.photoParent.edit', $gallery) }}" target="_blank">
                                            <i class="fa fa-pencil"></i>
                                            {{ trans('site.AdminPostEdit') }}
                                        </a>
                                    @endif

                                    <script type="text/javascript">(function() {
                                            if (window.pluso)if (typeof window.pluso.start == "function") return;
                                            if (window.ifpluso==undefined) { window.ifpluso = 1;
                                                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                                s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                                var h=d[g]('body')[0];
                                                h.appendChild(s);
                                            }})();</script>
                                    <div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=06" data-services="vkontakte,odnoklassniki,facebook,twitter,google"></div>

                                    <a href="{{ route('front.gallery.galleries') }}">
                                        <span>{{ trans('site.FrontGalleryAll') }}<i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div><!-- end row-->
    </div><!-- end container main-wrapper -->

@stop
@section('footerScript')

    <script>
        function getVote(int) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("poll").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","{{ asset('poll_vote.php') }}?vote="+int,true);
            xmlhttp.send();
        }
    </script>

    <!--Carousel-->
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true
        });
    </script>

@endsection
