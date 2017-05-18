@extends('Front::layouts.default')
@section('title', $mediaPost->getName())

@section('content')
        <div class="container main-wrapper">

            <div class="row">

            <section class="content clearfix">

            <div class="clearfix">
                <div class="top-left-block col-md-9">
                    <div class="panel panel-default panel-video">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a href="#">Видеопортал</a>
                                <span class="divider"><i class="fa fa-circle"></i></span>
                                <a href=""><span class="ctg">{{ $mediaPost->videoType}}</span></a>
                            </h3>
                        </div>
                        <div class="panel-body">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="clearfix" id="all-videos">
                                    <div class="row">
                                        <article class="col-md-12" data-cat="all-videos">
                                            <h4 class="show-title">
                                                <a href="#">Замана</a>
                                                <i class="fa fa-circle"></i>
                                                <span>{{ $mediaPost->getName()}}</span>
                                            </h4>
                                            <div class="embed-responsive embed-responsive-16by9 show-video">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $mediaPost->getUrl()}}"></iframe>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="#" class="text-center ads">
                        <img src="images/ads_1.jpg" alt=""/>
                    </a>

                    <div class="panel panel-default panel-related-videos">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Тектеш чыгаруулар
                            </h3>
                        </div>
                        <div class="panel-body" id="relatedVideos">
                            <div class="col-md-4 block">
                                <a href="#" class="video-thumb">
                                    <img src="http://img.youtube.com/vi/kPG5DRKB0cQ/mqdefault.jpg" alt=""/>
                                    <i class="fa fa-play-circle-o"></i>
                                </a>
                                <a href="#" class="video-title">
                                    <h4>Название новости Название новости Название новости Название новости Название новости Название новости </h4>
                                </a>
                            </div>


                            <div class="col-md-12">
                                <button class="loadMore btn btn-default">Показать еще</button>
                            </div>
                        </div>
                    </div>

                </div>

                @include('Front::partials.leftCategories')

            </div>

        </section>
            </div>

        </div>

@stop

@section('footerScript')
<script>
    $(function(){
        $("#relatedVideos .block").slice(0, 12).show(); // select the first ten
        $("#relatedVideos .loadMore").click(function(e){ // click event for load more
            e.preventDefault();
            $("#relatedVideos .block:hidden").slice(0, 12).show(); // select next 10 hidden divs and show them
            if($("#relatedVideos .block:hidden").length == 0){ // check if any hidden divs still exist
                $("#relatedVideos .loadMore").hide();
            }
        });
        if($("#relatedVideos .block:hidden").length == 0){ // check if any hidden divs still exist
            $("#relatedVideos .loadMore").hide();
        }
    });
</script>
@stop
