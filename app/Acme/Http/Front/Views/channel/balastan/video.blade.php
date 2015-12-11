<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Video</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
        <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    </head>
    <body class="balastan">
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
                        <img src="{{ asset('images/channels/balastan_white_notext.png')}}">
                        <h4>Баластан</h4>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}">
                                <img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span>
                                <h4>КТРК</h4>
                            </a>
                        </li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('muzkanal.home') }}">
                                <img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span>
                                <h4>Музыка</h4>
                            </a>
                        </li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('madaniyat.home') }}">
                                <img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span>
                                <h4>Маданият</h4>
                            </a>
                        </li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('balastan.home') }}">
                                <img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span>
                                <h4>Баластан</h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="container" style="padding:0px;">
            <div class="row">
                <div class="col-md-12 logo-block logocenter">
                    <div class="row">
                        <div class="col-md-12 clouds">
                            <div class="sun">
                                <img src="{{asset('images/channels/balastan/sun-icon.png')}}" alt=""/>
                                <!--          <img class="balastanlogo" src="images/channels/balastan_white.png" alt=""/> -->
                            </div>
                            <img src="{{asset('images/channels/balastan/clouds.png')}}" alt=""/> 
                            <nav class="cloudlinks"> 
                                <ul>
                                    <li><a href="{{ route('balastan.home') }}">Главная</a></li>
                                    <li><a href="{{ route('balastan.about') }}">О нас</a></li>
                                    <li><a href="{{ route('balastan.world') }}">В мире Баластана</a></li>
                                    <li><a class="active" href="{{ route('balastan.video') }}">Видео</a></li>
                                    <li><a href="{{ route('balastan.photos') }}">Фотогалерея</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
				            <div class="row">               
				                <div class="col-md-12 kidsvideoblock">
				                    <div class="panel panel-default">
<!-- 				                        <div class="panel-heading">
				                            <h3 class="panel-title"><span>Видео</span></h3>
				                        </div> -->
				                        <div class="panel-body" style="padding:0px;">
			                               <div class="row">
			                               	<div class="row ">
				                            	<div class="col-md-6">
				                            		<div class="kidsvideo kidsmainv">
			                                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                     
			                                        </div>
			                                        <h3>Названиее</h3>
				                            	</div>
				                            	<div class="col-md-4"></div>	
			                               </div>
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                        	
			                                        </div>
			                                         <h4>Название</h4>           
			                                    </div>
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                            
			                                        </div> 
			                                        <h4>Название</h4>           
			                                    </div>
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                                   
			                                        </div>
			                                        <h4>Название</h4>    
			                                    </div>
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
			                                        </div>
			                                        <h4>Название</h4>    
			                                    </div>
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                          <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
			                                        </div>
			                                        <h4>Название</h4>             
			                                    </div>
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
			                                        </div>
			                                        <h4>Название</h4>    
			                                    </div> 			                                    
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                          <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
			                                        </div>
			                                        <h4>Название</h4>             
			                                    </div>
			                                    <div class="col-md-3 col-sm-6">
			                                        <div class="kidsvideo kidsboard">
			                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
			                                        </div>
			                                        <h4>Название</h4>    
			                                    </div>                                 
				                              
				                            </div>

				                        </div>
				                    </div>
				                </div>
				            </div>
        </div>
        <footer class="footer">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <ul>
                                        <li><a href="#">Башкы бет</a></li>
                                        <li><a href="#">КТРК</a></li>
                                        <li><a href="#">Видеопортал</a></li>
                                        <li><a href="#">Телепрограмма</a></li>
                                        <li><a href="#">Байкоочу кеңеш</a></li>
                                        <li><a href="#">Редакциялык кеңешчи</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 copy"><i class="fa fa-copyright"></i> 2015 Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid">
            <!--        <img src="{{ asset('images/channels/balastan/footer.png')}}" alt=""> -->
        </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/balastan/jquery.min.js" type="text/javascript"></script>
    </body>
</html>