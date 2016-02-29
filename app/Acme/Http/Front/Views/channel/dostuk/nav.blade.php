<div class="switch">
   <nav class="navbar">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
         <span class="sr-only">Меню</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">
            <img src="{{ asset('images/channels/dostuk.png')}}">
            <h4>Достук радиосу</h4>
         </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="menu">
         <ul class="nav navbar-nav channel_switch">
            <li class="sitemenu" id="site-channel1">
               <a href="{{ route('front.home') }}">
                  <img src="{{ asset('images/ktrk_last.svg')}}"><span>КТРК</span>
                  <h4>КТРК</h4>
               </a>
            </li>
            <li class="sitemenu" id="site-channel1">
               <a href="{{ route('birinchi.home') }}">
                  <img src="{{ asset('images/channels/1-radio.png')}}" ><span>Биринчи радио</span>
                  <h4>Биринчи радио</h4>
               </a>
            </li>
            <li class="sitemenu" id="site-channel1">
               <a href="{{ route('kyrgyzradio.home') }}">
                  <img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз радиосу</span>
                  <h4>Кыргыз радиосу</h4>
               </a>
            </li>
            <li class="sitemenu" id="site-channel1">
               <a href="{{ route('minkiyal.home') }}">
                  <img src="{{ asset('images/channels/min-kiyal.png')}}"><span>Миң кыял FM</span>
                  <h4>Миң кыял FM</h4>
               </a>
            </li>
            <li class="sitemenu" id="site-channel1">
               <a class="active" href="{{ route('dostuk.home') }}">
                  <img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук</span>
                  <h4>Достук</h4>
               </a>
            </li>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </nav>
         <div class="languages">
            <ul>
               <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
               <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
            </ul>
         </div>
</div>

