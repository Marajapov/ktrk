<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Баластан</title>

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
                    <img src="{{asset('images/channels/balastan/sun-icon.png')}}" alt=""/>
           <!--          <img class="balastanlogo" src="images/channels/balastan_white.png" alt=""/> -->

                    </div>
                             <img src="{{asset('images/channels/balastan/clouds.png')}}" alt=""/> 
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



            <div class="row">               
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>В мире Баластана</span></h3>
                        </div>
                        <div class="panel-body">                  
                  			<div class="row worldtext">
                  			
                  				<div class="col-md-12">
                  					<div class="col-md-4">
                  						<img class="img-circle .img-responsive" src="{{asset('images/channels/balastan/birge.png')}}" alt="">
                  					</div>
                  					<div class="col-md-8">
                  						<h2>«Читаем вместе»</h2>
                  						<p>Программа «Читаем вместе». 
Данная программа станет отличным инструментом привлечения родителей и детей к СОВМЕСТНОМУ ЧТЕНИЮ. Формат программы  основан на принципе поощрения людей,  повысить  свои знания и навыки. Это отличное средство повышения индивидуального потенциала и способности каждого человека во всем. Участники будут соревноваться в чтении посредством игр с детьми, что сделает процесс более интересным и захватывающим. Родители осознают о пользе чтения в семье. Отношения между родителями и детьми укрепляются и совершенствуются. Связь между членами семьи увеличивается. Это образовательно - развивающая программа для всех членов семьи. Читайте  вместе  с нами!
</p>
                  					</div>
                  				</div> 
                   				<div class="col-md-12">
                  					<div class="col-md-4">
                  						<img src="{{asset('images/channels/balastan/birge.png')}}" alt="">
                  					</div>
                  					<div class="col-md-8">
                  						<h2>«Бирге окуйбуз»</h2>
                  						<p>Үй бүлөлүк   “Биргеокуйбуз”  шоу  программасы
											Бүгүнкү күндө балдар көбүнчө   ар кандай анимациялык фильмдерге, компюьтердик оюндарга , интернетке кызыгышат. Мунун кесепетинен алар китеп окуудан алыстап   калганы байкалат. Улуу ойчул  Белинский   “Адамдар китеп окууну таштаса, алар ой ойлонуудан да калат” – деп айтканы бар.  Демек китепке кызыкпаган, китеп окубаган балдар жетиштүү билимге ээ боло албайт.  Бирок  ар бир эле ата-эне өз баласын тартиптүү,  билимдүү болуп чоңоюшун каалайт. Муну ишке ашыруунун эң жөнөкөй жолу үйбүлөбүз менен бирге күн сайын китеп окуу.  Ошондуктан Коомдукбиринчи канал,  Кыргызстандагы Ага Хан фондунун демилгеси менен үйбүлөлүк “Бирге окуйбуз” шоу программасын жалпы көрөрмандарга сунуштайт.
											</p>
                  					</div>
                  				</div>                 				
                  				<div class="col-md-12">
                  					<div class="col-md-4">
                  						<img src="{{asset('images/channels/balastan/baaryn.png')}}" alt="">
                  					</div>
                  					<div class="col-md-8">
                  						<h2>Баарын билгим келет</h2>
                  						<p>«Баарын билгим келет» көрсөтүүсүнүн максаты бала бакчадан баштап мектеп курака чейинки балдарды тура жолго үндөө, аң сезимин өстүрүү, пайдалуу жана кызыктуу маалыматтарды берүү. Балдардын интеллектуалдык деңгээлин жогорулатуу, дүйнөгө болгон көз карашын тура калыптандыруу.
«Баарын билгим келет» көрсөтүүсүнүн ичинде бир нече рубрикалар камтылган. Алсак, «Салам, жаш талант!», «Жаныбарым-жан досум», «Сону ныр», «Билип ал!», «Таттуутамак», «Балдар жанылыктары».
«Салам, жаш талант!» түрмөгүндө жаш таланттардын өнөрлөрү көрсөтүлүп, көрүүчүлөргө тааныштырылат. Бул таланттуу баланын андан ары да ийгилик жаратуусун ашык берет.
«Жаныбарым-жан досум»  түрмөгүндө түрдүү жаныбарлардын жашоосу тууралуу маалымат берилип, ар бир жаныбардын башкалардан айырмаланган негизги өзгөчөлүктөрү айтылып, көрсөтүлөт.
 «Сонуныр» түрмөгүндө бала бакчадагы бал тилдүүбалдар ар кандай темада жаттаган ырларын көркөм айтып беришет. Бул көрүнүш балдардын туура, так сүйлөөсүнө чоң жардам берет.
«Билип ал!» түрмөгү «өткөндү барктабайын, келечек даңкталбайт» деген уран менен элибизге эмгеги сиңген, мамлекетибиздин өнүгүшүнө зор салымын кош конулуу инсандарды балдардын эсине салып, аларды биле жүрүүгө үндөйт.
 «Таттуу тамак» түрмөгүндө балдарды табигыйтамактардыжегенгеүндөөмаксатындаата-энелер жана атактуу инсандар балдарга ылайыктуу жана пайдалуу тамактарды жасап көрсөтүп беришет.
 «Балдар жаңылыктары» түрмөгүндө бала бакчада жана мектепте болуп жаткан жаңылыктарды кичинекей көрүүчүлөргө бөлүшүү.
</p>
                  					</div>
                  				</div>                  				
                  				<div class="col-md-12">
                  					<div class="col-md-4">
                  						<img src="{{asset('images/channels/balastan/taalimtay.png')}}" alt="">
                  					</div>
                  					<div class="col-md-8">
                  						<h2>Таалимтай</h2>
                  						<p>“Келечек” студиясы жана ” Баластан” телеканалы  аркылуу “Таалимтай” көрсөтүүсү эфирге чыгып жатат. Балдарга арналган бул телекөрсөтүү жуманын ишемби, жекшемби күндөрү эфирге чыгат.
Көрсөтүүнүн негизги максаты: балдарга кыргыздын канына, кыргыз менталитетине ылайык келген таалим- тарбиялык мааниге ээ сюжеттер берилет. Алардын бардыгы юмор, күлкү менен коштолуп турат. 2014- жылы телекөрүүчүлөрдү сурамжылоонун натыйжасында, “Таалимтай” телекөрсөтүүсү КТРК боюнча биринчи оорундуээлеп  “Мыктыдолбоор” деген наамды жеңип алган. Жыл аягындаТаалимтай көрсөтүүсү беш жашка чыгат.
Таалимтай телекөрсөтүүсүнө катышкан балдар кастинг (тандоо) аркылуу алынат.
</p>
                  					</div>
                  				</div>                  				
                  				<div class="col-md-12">
                  					<div class="col-md-4"></div>
                  					<div class="col-md-8">
                  						<h2>“Манас таануу” интеллектуалдык таймашы</h2>
                  						<p>Жалпы көрүүчүлөргө жана окуучуларга “Манас” эпосу тууралуу кеңири маалымат берип,  жайылтуу,  кыргыз элинин тарыхын үйрөтүү, элибиздин улуулугун, касиетин, бийиктигин, эл жерин сүйгөн баатыр эл экендигин даңазалап, балдардын мекенчилдикке тарбиялоо максатында Коомдук каналдын  “Келечек” студиясы республикалык алкактагы               “Манастаануу”  интеллектуалдык таймашын (конкурс)  даярдап эфирге чыгарып келет. </p>
                  					</div>
                  				</div>                  				
                  				<div class="col-md-12">
                  					<div class="col-md-4"></div>
                  					<div class="col-md-8">
                  						<h2>Күн балдары</h2>
                  						<p>“Күн балдары”  - бул балдар үчүн концерттик программасы талантуу, ыр-бийге шыктуу балдардын катышуусундагы көрсөтүү.  Күн балдарына катышуучу таланттар ата-эне, мекен, балалык жана башка  балдар темасына арналган ырларды,  кыргыз,  башка улуттардын элдик бийлерин жана заманбап бийлерди аткарышат.  Программа  ар жуманын ишемби жана жекшемби күндөрү Коомдук биринчи каналдын эфиринен көрсөтүлөт.</p>
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
    </body>
</html>