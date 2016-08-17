@extends('Front::channel.sport.default')
@section('title', trans('radiopages.aboutChannel'))
@section('styles')

@endsection
@section('content')
@include('Front::channel.sport.nav')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body no-padding panel-allnews">
      <div class="col-md-12 no-padding ">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="heading-title">
              <span class="name">{{ trans('radiopages.aboutChannel') }}</span>
              <div class="border"></div>
            </div>
          </div>
          <div class="panel-body">
            <p>Телеканал КТРК СПОРТ – первый спортивный телеканал в Кыргызстане, входящий в состав телесемейства Общественной телерадиовещательной корпорации. Канал является специализированно - ориентированным на создание и распространение телевизионной продукции на спортивную тематику и культуру физического здоровья человека.</p>
            <p>Учитывая возросший интерес к спорту во всем мире в целом и в Кыргызстане, в частности, миссия телеканала заключается в содействии развития спорта в стране, пропаганде здорового образа жизни и привлечении молодежи к занятию спортом, распространению и продвижению национальных видов спорта. </p>
            <p>Трансляции спортивных состязаний - это основа эфирной политики телеканала КТРК СПОРТ, они  занимают более 50% эфирного времени канала и выходят в прямом эфире.</p>
            <p>Зрители телеканала в режиме реального времени могут следить за ходом крупнейших соревнований, проходящих в стране и мире, включая Олимпийские и Азиатские игры, чемпионаты страны, мира и Европы по футболу, национальным видам спорта, легкой атлетике, хоккею и другим видам спорта. </p>
            <div class="row">
                <div class="panel-heading">
                  <div class="heading-title">
                    <span class="name">{{ trans('site.Contacts')}}</span>
                    <div class="border"></div>
                  </div>
                </div>
                <div class="panel-body" style="padding-bottom: 30px;">
                    <p><strong>Адрес:</strong> Кыргызстан, г.Бишкек, блв.Молодой Гвардии 59</p>
                    <p><strong>Телефон:</strong>  +996 312 65 21 00</p>
                    <p><strong>E-mail:</strong> tv.ktrksport@gmail.com</p>

                </div>
            </div>
             <div class="embed-responsive embed-responsive-16by9"> 
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/sBGXzmF3V_0?rel=0" allowfullscreen=""></iframe> 
             </div>
            <br>
          </div>
        </div>
      </div>
      <div class="col-md-12 no-padding">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="heading-title">
              <span class="name">{{ trans('radiopages.Wearesocial')}}</span>
              <div class="border"></div>
            </div>
          </div>
          <div class="panel-body popular">
            <div class="col-sm-3 no-padding">
              <div class="fb-page" style="height: 460px;overflow: hidden;" data-href="https://www.facebook.com/KTRKSport" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/KTRKSport"><a href="https://www.facebook.com/KTRKSport/">КТРК СПОРТ</a></blockquote>
                  </div>
              </div>  
            </div>
            <div class="col-sm-3">
                <a class="twitter-timeline" data-height="460" href="https://twitter.com/ktrksport">Твиты Ktrksport</a> 
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>              
            </div>
            <div class="col-sm-3">
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
                    }(document,"ok_group_widget","52921979764889","{width:263,height:460}");
                </script>
            </div>
            <div class="col-sm-3">
              <iframe src="{{asset('images/channels/sport/inwidget/index.php?height=460&inline=3')}}" scrolling='no' frameborder='no' style='border:none;width:263px;height:455px;overflow:hidden;'></iframe>
            </div>

          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="margin-with-bottom"></div>
@stop
@section('footerscript2')
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