@extends('Front::layouts.default')
@section('title', 'Название | Телеберүүлөр | КТРК')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/videoportal.css') }}"/>
@endsection

@section('content')
  <div class="container main-wrapper">

    <div class="row">

      <section class="content clearfix">

        <div class="clearfix">
          <div class="top-left-block col-md-9">
            <div class="panel panel-default panel-show">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a href="#">Видеопортал</a>
                  <span class="divider"><i class="fa fa-circle"></i></span>
                  <a href="#"><span class="ctg">Телепередачи</span></a>
                </h3>
              </div>

              <div class="panel-body">

                <div class="row">

                  <div class="col-md-12 block show-block">
                    <div class="media">
                      <div class="media-left media-top">
                        <a>
                          <img class="media-object" src="{{ asset('images/image.jpeg') }}" alt="Show image">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="show-title media-heading">Project Title</h4>
                        <p class="show-desc">
                          Борбор шаардагы Эркиндик бульварында 1-октябрь улгайган адамдардын эл аралык күнүнө карата жарманке болуп өттү. Жарманкеге Ысык-Көл, Чүй, облустарынан жана Бишкек шаарынан келген улгайган
                        </p>
                      </div>
                    </div>
                  </div>

                </div>

              </div>

            </div>

            <div class="panel panel-default panel-related-videos">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Чыгаруулар
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

          <div class="top-right-block col-md-3">
            @include('Front::partials.leftMediaCategories')
          </div>

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
