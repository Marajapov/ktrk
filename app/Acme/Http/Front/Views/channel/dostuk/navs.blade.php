<style>
   #header{
      margin-top:10px !important; 
      height: 60px;
   }
   #header #main-menu {
      background: #009688;
   }   
   #header #main-menu.navbar-default .navbar-nav > li > a{
      color: #fff;
   }
   #header #main-menu.navbar-default .navbar-nav > li > a:hover{
      color: #005386;
   }
   #header .navbar-brand{
      color: #fff !important;
   }
</style>

<header id="header">

   <nav id="main-menu" class="container navbar navbar-default">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('dostuk.home') }}"><img src="{{asset('images/channels/dostuk.png')}}" alt="logo">Достук радиосу</a>
            <div class="onetime"><a href="{{ asset('online/online-kg_radio.php')}}" onclick="window.open(this.href, '', 'scrollbars=1,height='+Math.min(210, screen.availHeight)+',width='+Math.min(400, screen.availWidth)); return false;"><button class="btn"><i class="fa fa-microphone blink"></i><span>Түз эфир</span></button></a></div>
         </div>
         <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
               <li class=""><a href="{{route('dostuk.home')}}"><i class="fa fa-home"></i> Башкы</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-microphone"></i> Уктуруулар<i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                     @if($dostukProjects) 
                     @foreach($dostukProjects as $dostukProject)
                     <li>
                        <a href="{{ route('dostuk.project', $dostukProject) }}">{{ $dostukProject->getName() }}</a>
                     </li>
                     @endforeach
                     @endif
                  </ul>
               </li>
               <li><a href="{{route('dostuk.allphotos')}}"><i class="fa fa-picture-o"></i> {{ trans('radiopages.PhotoReports') }}</a></li>
               <li><a href="{{route('dostuk.home')}}#about"><i class="fa fa-info"></i>Радио жөнүндө</a></li>
            </ul>
         </div>
   </nav>
   <!--/nav-->

</header>
