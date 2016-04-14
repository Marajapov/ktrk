@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta property="og:url"                content="{{ Request::url()}}" />
      <meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
      <meta property="og:type"               content="article" />
      <meta property="og:title"              content="{{ $post->getTitleRuOrKg()}}" />
      <meta property="og:description"        content="{{ $post->getShortDescription() }}" />
      <meta property="og:image"              content="{{ asset($post->thumbnail_big) }}" />

      <link rel="stylesheet" href="{{asset('css/goodshare.css')}}">
      <link rel="stylesheet" href="{{asset('css/articles.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
      <link href="{{ asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}"/>
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
<nav id="main-menu" class="navbar navbar-minheader container-fluid">
   <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">
            <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">
            <h4 class="minkiyal_brand">Миң кыял FM</h4>
         </a>
         <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Башкы барак" class="red-tooltip"><i class="fa fa-home"></i></a></li>
            <li><a href="#report" data-toggle="tooltip" data-placement="bottom" title="Сүрөтбаяндар" class="red-tooltip"><i class="fa fa-picture-o"></i></a></li>
            <li><a href="#about" data-toggle="tooltip" data-placement="bottom" title="Биз жөнүндө" class="red-tooltip"><i class="fa fa-info-circle"></i></a></li>
            <li><a href="{{route('minkiyal.djs')}}" data-toggle="tooltip" data-placement="bottom" title="Диджейлер" class="red-tooltip"><i class="fa fa-microphone"></i></a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <div class="online">
               <h3><i class="fa fa-microphone"></i>Түз эфир</h3>
               <object width="65" height="40" data="http://www.ktrk.kg/online/uppod.swf">
                  <param name="bgcolor" value="#ffffff" />
                  <param name="allowFullScreen" value="false" />
                  <param name="allowScriptAccess" value="false" />
                  <param name="audio" value="http://www.ktrk.kg/online/uppod.swf" />
                  <param name="flashvars" value="comment=KTRK&amp;st=03AEEZykN3Q3Q3QH3zkOk1mwXRWNvz3b1XAxYTtj1mzC5kA2uyb1kOk1mwXRWNvhzdwf9vwjzC5k=jQZi6jNf1kOk1mwXRWHNXzBGDY31X=jOkZ2sN6HsQfzC5kev0kttj1vL2NXzC5k1sQE3Q2GkTCGfFdGJTCHwXpvQXeWNhHm0X1hsNkTWwWTSUhTd0kNtj1JTWwf9vwnY31DX1CYLex5W=jaktjR1i6W0kbSal1C0V9Rv1XAuaTtj1tzC5kb42Qi63Gktj1ozfUrd&amp;file=http://85.113.29.232:8081" />
               </object>
            </div>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </div>
</nav>
<div class="container minkiyal_news">
   <div class="row">
      <div class="col-md-9">
         <div class="row minkiyal_post">
            <div class="col-md-12">
               <h3 class="title">{{ $post->category('category_id')->first()->title }}</h3>
            </div>
            <div class="panel panel-article">
               <div class="panel-body">
                  <div class="news-info">
                     <span class="date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                     <span class="view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                  </div>
                  <h3 class="newstitle">{{ $post->getTitle() }}</h3>
                  <p class="post-thumb" href="{{ route('front.post', $post) }}">
                     <a id="post-thumb" href="@if(empty($post->thumbnail_big)){{  asset($post->thumbnail) }}@else{{ asset($post->thumbnail_big) }}@endif">
                     <img class="left" src="@if(empty($post->thumbnail_big)) {{  asset($post->thumbnail) }} @else {{  asset($post->thumbnail_big) }} @endif" alt="image">
                     </a>
                     @if($post->thumb_desc || $post->thumb_desc_ru)<span class="thumb_desc">{{ $post->getThumbnailDesc() }}</span>@endif
                     {{--@if($post->thumb_author)<span class="thumb_author"> Фото: {{ $post->thumb_author }}</span>@endif--}}
                  </p>
                  <article>
                     {!! $post->getContentKG() !!}
                  </article>
                  <p>
                     <a href="http://orphus.ru" id="orphus" class="hidden" target="_blank"><img alt="Система Orphus" src="{{ asset('js/orphus.gif') }}" border="0" width="240" height="80" /></a>
                  </p>
                  <div class="orphus-mistake pull-right">
                     <div class="media">
                        <div class="media-body media-middle">
                           <h4>
                              @if(app()->getlocale()=='kg')
                              Эгерде ката тапсаңыз, текстти белгилеп Ctrl+Enter басыңыз
                              @elseif(app()->getlocale() == 'ru')
                              Если вы обнаружили ошибку, выделите текст и нажмите Ctrl+Enter
                              @endif
                           </h4>
                        </div>
                        <div class="media-right media-middle">
                           <span class="media-object">
                           <i class="fa fa-exclamation-circle"></i>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <footer class="with-share">
                  @if(auth()->user())
                  <a class="post-edit" href="{{ route('admin.post.edit', $post) }}" target="_blank"><i class="fa fa-pencil"></i>{{ trans('site.AdminPostEdit') }}</a>
                  @endif
                  <div class="pluso share-buttons">
                     <button class="goodshare btn-fb" data-type="fb">
                     <i class="fa fa-facebook"></i><span data-counter="fb"></span>
                     <!-- Button with share to Facebook & share counter -->
                     <button class="goodshare btn-vk" data-type="vk">
                     <i class="fa fa-vk"></i><span data-counter="vk"></span></button>
                     <button class="goodshare btn-ok" data-type="ok">
                     <i class="fa fa-odnoklassniki"></i><span data-counter="ok"></span></button>
                     <button class="goodshare btn-gp" data-type="gp">
                     <i class="fa fa-google-plus"></i><span data-counter="gp"></span></button>
                     <button class="goodshare btn-tw" data-type="tw"><i class="fa fa-twitter"></i></button>
                  </div>
                  <a href="{{ route('minkiyal.allnews') }}">
                  <span>{{ trans('site.PostAllNews') }}<i class="fa fa-arrow-circle-right"></i></span>
                  </a>
               </footer>
            </div>
         </div>
      </div>
      <div class="col-md-3"></div>
   </div>
</div>
@stop
@section('footerScript')
<script src="{{asset('js/goodshare.js')}}"></script>
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

    {{-- Sweet Alert --}}
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        @if(session('success') == 'true')
        swal("Спасибо!", "Ваш комментарий принят на модерацию!", "success");
        @elseif(session('success') == 'false')
        swal("", "Где то произошла ошибка!", "error");
        @endif
    </script>

    @if(session('send') == 'true')
        <script>
        swal("Спасибо!", "В ближайшее время ошибка будет устранена!", "success");
        </script>
    @endif

    {{--Orphus--}}
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
// 5.0
                send:       "\u041E\u0442\u043F\u0440\u0430\u0432\u0438\u0442\u044C",
                cancel:     "\u041E\u0442\u043C\u0435\u043D\u0430",
                entercmnt:  "\u041A\u043E\u043C\u043C\u0435\u043D\u0442\u0430\u0440\u0438\u0439 \u0434\u043B\u044F \u0430\u0432\u0442\u043E\u0440\u0430 (\u043D\u0435\u043E\u0431\u044F\u0437\u0430\u0442\u0435\u043B\u044C\u043D\u043E):"
// Dmitry Koterov

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
//
//                div.innerHTML=""+"<div class=\"orphus clearfix\" style=\"width:"+w+"px; z-index:10001;\">"+"<div class=\"header\">"+_8.intextmsg+"</div>"+"<div class=\"item\">&laquo;&#133;"+_36.replace(_4,"<u style=\"color:red\">").replace(_5,"</u>")+"&#133;&raquo;</div>"+"<div class=\"message\">"+_8.ifsendmsg.replace(/\n/,"<br/>")+"</div>"+"<form action=\""+formAction+"\" id=\"orphus\" method=\"post\">"+"<input name=\"comment\" placeholder=\"Комментарий для автора (необязательно)\" type=\"text\"/>"+"<div class=\"buttons\">"+"<input name=\"submit\" type=\"submit\" value=\""+_8.send+"\">"+"<input class=\"cancel\" type=\"button\" value=\""+_8.cancel+"\">"+"<input name=\"message\" value=\""+_36+"\" type=\"hidden\"/>"+"<input type=\"hidden\" name=\"_token\" value=\""+_token+"\"/>"+"<input type=\"hidden\" name=\"url\" value=\""+url+"\"/>"+"<input type=\"hidden\" name=\"postId\" value=\""+postId+"\"/>"+"</div>"+"</form>"+"</div>";
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
@stop