@extends('Front::layouts.default')
@section('title', 'Новости | Редакционный советник | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh">
              <div class="panel-heading">
                <h3 class="panel-title"><span>Редакционный советник</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::rs.sidebar')

                <div class="col-md-9">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>Новости</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      <div class="col-md-12 block news-block">
                        <h4 class="news-title">
                          КТРК БК: илим боюнча берүүлөр көп болсун
                          <div class="extra">
                            <span class="art-date"><i class="fa fa-calendar"></i>18 Нояб , 12:22</span>
                            <span class="art-view"><i class="fa fa-eye"></i>17</span>
                          </div>
                        </h4>

                        <p class="post-thumb" href="#">
                          <img height="150" class="left" src="{{ asset('images/11449585369.jpg') }}" alt="image">
                        </p>

                        <p>
                          Коомдук телерадио берүү корпорациясы - инновациялык жана илимге байланыштуу берүүлөрдү көбүрөөк көрсөтүшү керек. Бул тууралуу, КТРКнын байкоочу кеңешинин кезектеги жыйынында айтылды. Жыйында айтылгандарга караганда, учурда Улуттук илимдер академиясынын окумуштуулары бир катар илимий ачылыштарды жасаган. Бирок алардын эмгеги телеканалдардан чагылдырылбай жатат.
                        </p>

                      </div>

                      <footer>
                        <a href="{{ route('front.general') }}">
                          <span>{{ trans('site.FrontPostAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                      </footer>

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

@endsection