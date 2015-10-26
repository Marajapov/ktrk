@extends('Front::layouts.default')
@section('title', 'Все видео')

@section('content')
        <div class="container main-wrapper">

            <div class="row">
                <section class="content clearfix">

            <div class="clearfix">
                <div class="top-left-block col-md-12">
                    <div class="panel panel-default panel-videos">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Видеопортал
                            </h3>
                        </div>
                        <div class="panel-body">

                                <ul class="nav nav-tabs videos-block">
                                @foreach($MediaCategories as $key => $MediaCategory)
                                    <li role="presentation" class="@if($key == 0) active @endif">
                                        <a href="{{ route('front.media.rtype', $MediaCategory->getVideoType()) }}">{{ $MediaCategory->getName() }}</a>
                                    </li>
                                @endforeach
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="active clearfix" id="all-videos">
                                        <div class="row">
                                        @foreach($mediaAll as $media)
                                            <article class="col-md-3" data-cat="all-videos">
                                                <a href="#" class="img">
                                                    <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/mqdefault.jpg" alt=""/>
                                                    <h4><i class="fa fa-play-circle-o"></i>Замана</h4>
                                                </a>
                                                <a href="#" class="title">
                                                    <h4>{{ $media->getName() }} </h4>
                                                </a>
                                            </article>
                                        @endforeach
                                        </div>
                                        <button class="loadMore btn btn-default">Показать еще</button>
                                    </div>
                                </div>

                                <nav class="clearfix hidden">
                                    <ul class="pagination">
                                        <li class="hidden">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                        </div>
                    </div>

                    <a href="#" class="text-center ads">
                        <img src="images/ads_1.jpg" alt=""/>
                    </a>

                </div>

    

            </div>

        </section>
            </div>

        </div>

@stop

@section('footerScript')
<script>
    $(function(){
        $("#all-videos article").slice(0, 12).show(); // select the first ten
        $("#all-videos .loadMore").click(function(e){ // click event for load more
            e.preventDefault();
            $("#all-videos article:hidden").slice(0, 8).show(); // select next 10 hidden divs and show them
            if($("#all-videos article:hidden").length == 0){ // check if any hidden divs still exist
                $("#all-videos .loadMore").hide();
            }
        });
        if($("#all-videos article:hidden").length == 0){ // check if any hidden divs still exist
            $("#all-videos .loadMore").hide();
        }
    });
</script>
@stop
