<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Баластан</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="filter/css/layout.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link href="css/allinone_carousel.css" rel="stylesheet" type="text/css">


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
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><h4>Баластан</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('muzkanal.home') }}"><img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span><h4>Музыка</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('madaniyat.home') }}"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span><h4>Маданият</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('balastan.home') }}"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>
                    </ul>  
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="container">
            <div class="row">      
                <div class="col-md-12 logo-block logocenter">
                    <div class="row">
                
                    <div class="col-md-12 clouds">
                       <div class="sun">
                    <img src="images/channels/balastan/sun-icon.png" alt=""/>
           <!--          <img class="balastanlogo" src="images/channels/balastan_white.png" alt=""/> -->

                    </div>
                             <img src="images/channels/balastan/clouds.png" alt=""/> 
                             <nav class="cloudlinks"> 
                               <ul>
                                   <li><a href="{{ route('balastan.about') }}">О нас</a></li>
                                   <li><a href="{{ route('balastan.world') }}">В мире Баластана</a></li>
                                   <li><a href="{{ route('balastan.photos') }}">Фотогалерея</a></li>
                               </ul>
                           </nav>                        
                        </div>
        
                    </div>
                 
                </div>   
            </div> 

           <div class="row tvblock">
                <div class="col-md-2"> 
                  <img src="{{ asset('images/channels/balastan/taalim2.png')}}" alt="" class="leftcloud">
                  <img class="iconleft" src="{{ asset('images/channels/balastan/akylay.png')}}" alt="">                    

                </div>
                <div class="col-md-8" style="text-align:center;">
                    <img class="tvthree" src="{{ asset('images/channels/balastan/tv3.png')}}" alt="">
                    <div class="iconcenter">                            
                        <iframe width="495" height="360" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>
                    </div>
                    <img class="tvtop" src="{{ asset('images/channels/balastan/tvtop.png')}}" alt="">
                    <img class="tvbottom" src="{{ asset('images/channels/balastan/tvbottom.png')}}" alt="">
                    <img class="tvleft" src="{{ asset('images/channels/balastan/tvleft.png')}}" alt="">
                    <img class="tvright" src="{{ asset('images/channels/balastan/tvright.png')}}" alt="">


                </div>
                <div class="col-md-2">
                <img src="{{ asset('images/channels/balastan/taalim.png')}}" alt="" class="rightcloud">
                    <img class="iconright" src="{{ asset('images/channels/balastan/aktan.png')}}" alt="">
                </div>
            </div>

            <div class="row">               
                <div class="col-md-12 kidsvblock">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Видео</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row ">
                               
                                    <div class="col-md-4">
                                        <div class="kidsvideo kidsboard">
                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
                                        </div>           
                                    </div>
                                    <div class="col-md-4">
                                        <div class="kidsvideo kidsboard">
                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                            
                                        </div>  
                                    </div>
                                    <div class="col-md-4">
                                        <div class="kidsvideo kidsboard">
                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                                   
                                        </div>  
                                    </div>
                                    <div class="col-md-4">
                                        <div class="kidsvideo kidsboard">
                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
                                        </div>  
                                    </div>
                                    <div class="col-md-4">
                                        <div class="kidsvideo kidsboard">
                                          <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
                                        </div>           
                                    </div>
                                    <div class="col-md-4">
                                        <div class="kidsvideo kidsboard">
                                            <iframe width="100%" height="180px" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                   
                                        </div>  
                                    </div>                                 
                              
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">               
                <div class="col-md-12 kidsvblock">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Фотогалерея</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row ">                                                    
                                <div class="allinone_carousel charming ui-draggable">
                                   <div id="allinone_carousel_charming">
                                      <div class="myloader" style="display: none;"></div>
                                      <!-- CONTENT -->
                                      <ul class="allinone_carousel_list">
                                    
                                         <li><img src="{{asset('images/gallery/001.jpg')}}" alt=""></li>
                                         <li><img src="{{asset('images/gallery/002.jpg')}}" alt=""></li>
                                         <li><img src="{{asset('images/gallery/003.jpg')}}" alt=""></li>
                                         <li><img src="{{asset('images/gallery/004.jpg')}}" alt=""></li>
                                         <li><img src="{{asset('images/gallery/005.jpg')}}" alt=""></li>
                                         <li><img src="{{asset('images/gallery/006.jpg')}}" alt=""></li>
                                         <li><img src="{{asset('images/gallery/007.jpg')}}" alt=""></li>
                                      </ul>
                                   </div>                         

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
        <script src="js/balastan/jquery-ui.min.js"></script>
        <script src="js/balastan/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
        <script src="js/balastan/allinone_carousel.js" type="text/javascript"></script>
            <script>
         jQuery(function() {
         
           jQuery('#allinone_carousel_charming').allinone_carousel({
             skin: 'charming',
             width: 990,
             height: 410,
             autoPlay: 3,
             resizeImages:true,
             autoHideBottomNav:false,
             showElementTitle:false,
             verticalAdjustment:50,
             showPreviewThumbs:false,
             //easing:'easeOutBounce',
             numberOfVisibleItems:5,
             nextPrevMarginTop:0,
             playMovieMarginTop:0,
             bottomNavMarginBottom:-10
           });                 
           
         });
      </script>

    </body>
</html>