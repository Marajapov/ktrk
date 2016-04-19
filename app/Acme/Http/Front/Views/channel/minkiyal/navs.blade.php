<nav id="main-menu" class="navbar navbar-minheader container-fluid">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="blink" href="{{route('minkiyal.home')}}">
            <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">
            <h4 class="minkiyal_brand">Миң кыял FM</h4>
            </a>
            <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li><a href="{{route('minkiyal.home')}}" data-toggle="tooltip" data-placement="bottom" title="Башкы барак" class="red-tooltip"><i class="fa fa-home"></i></a></li>
               <li><a href="{{route('minkiyal.allnews')}}" data-toggle="tooltip" data-placement="bottom" title="Жаңылыктар" class="red-tooltip"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a></li>
               <li><a href="{{route('minkiyal.posts')}}" data-toggle="tooltip" data-placement="bottom" title="Сүрөтбаяндар" class="red-tooltip"><i class="fa fa-picture-o"></i></a></li>
               <li><a href="{{route('minkiyal.about')}}" data-toggle="tooltip" data-placement="bottom" title="Биз жөнүндө" class="red-tooltip"><i class="fa fa-info-circle"></i></a></li>
               <li><a href="{{route('minkiyal.home')}}#djs" data-toggle="tooltip" data-placement="bottom" title="Диджейлер" class="red-tooltip"><i class="fa fa-microphone"></i></a></li>
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