<header id="header">

   <nav id="main-menu" class="container navbar navbar-default">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="{{route('dostuk.home')}}"><i class="fa fa-home"></i> Башкы</a>
         </div>
         <div class="collapse navbar-collapse navbar-left">
            <ul class="nav navbar-nav">
               <li class="dropdown">
                  <a class="dropdown-toggle" href="{{route('dostuk.projects')}}" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-microphone"></i> Уктуруулар<i class="fa fa-angle-down"></i></a>
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
               <li><a href="{{route('dostuk.allphotos')}}"><i class="fa fa-picture-o"></i> Сүрөтбаяндар</a></li>
               <li><a href="{{route('dostuk.home')}}#about"><i class="fa fa-info"></i>Радио жөнүндө</a></li>
            </ul>
         </div>
   </nav>
   <!--/nav-->

</header>