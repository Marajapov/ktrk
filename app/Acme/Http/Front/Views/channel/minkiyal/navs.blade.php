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
               <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Диджейлер"> <i class="fa fa-microphone"></i></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{route('minkiyal.dj.rasul')}}">Расул Мырзатегин</a></li>
                        <li><a href="{{route('minkiyal.dj.jazgyl')}}">Жазгүл Жолдубай кызы</a></li>
                        <li><a href="{{route('minkiyal.dj.ulan')}}">Улан Улукболсун</a></li>
                        <li><a href="{{route('minkiyal.dj.akyl')}}">Акыл Жеңишбек уулу</a></li>
                        <li><a href="{{route('minkiyal.dj.kanat')}}">Канат Кадыржан</a></li>
                        <li><a href="{{route('minkiyal.dj.bekzat')}}">Бекзат Калыбек уулу</a></li>
                     </ul>
               </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <ul class="soc">
                  <li class="tw"><a href="https://twitter.com/mk1000radio" data-toggle="tooltip" data-placement="bottom" title="Twitter" class="red-tooltip"><i class="fa fa-twitter"></i> </a>  </li>
                  <li class="fb"><a href="https://www.facebook.com/MinKyalFm/" data-toggle="tooltip" data-placement="bottom" title="Facebook" class="red-tooltip"><i class="fa fa-facebook"></i></a></li>
                  <li class="ok"><a href="http://ok.ru/group/57765907202108" data-toggle="tooltip" data-placement="bottom" title="Odnoklassniki" class="red-tooltip"><i class="fa fa-odnoklassniki"></i></a></li>
                  <li class="in"><a href="https://www.instagram.com/min_kyalfm/" data-toggle="tooltip" data-placement="bottom" title="Instagram" class="red-tooltip"><i class="fa fa-instagram"></i></a></li>
               </ul>
               <div class="online">
                  <div class="onetime">
                  <a href="{{ asset('online/online-1000.php')}}" onclick="window.open(this.href, '', 'scrollbars=1,height='+Math.min(210, screen.availHeight)+',width='+Math.min(400, screen.availWidth)); return false;">
                     <button class="btn"><i class="fa fa-microphone"></i>
                     <span>Түз эфир</span>
                     </button>
                  </a>
                  </div>
               </div>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
</nav>