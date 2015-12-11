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
            <div class="panel panel-default panel-kenesh panel-rs">
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
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://sputnik.kg/images/102017/14/1020171449.jpg" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРК: из-за работы я стал изгоем для родственников</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://1000.ktrk.kg/img/thumbnail/11447849392.png" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КМЮА: ректор шайланды</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://sputnik.kg/images/102017/14/1020171449.jpg" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРК: из-за работы я стал изгоем для родственников</a>
                        </div>
                      </div>

                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="extra">
                            <span class="e-datetime">18 Нояб , 12:22</span>
                            <span class="e-views"><i class="fa fa-eye"></i>17</span>
                          </div>
                          <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                        </div>
                      </div>
                    </div>

                    <nav>
                      <ul class="pagination">
                        <li class="hidden">
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                          </a>
                        </li>
                      </ul>
                    </nav>

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