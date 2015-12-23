@extends('Front::channel.balastan.default')
@section('title', "Баластан")
@section('styles')
@endsection
@section('content')
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
               <div class="col-md-12 col-sm-12 col-xs-12 clouds">
                  <div class="sun">
                     <img src="{{asset('images/channels/balastan/sun-icon.png')}}" alt=""/> 
                  </div>
                  <div class="langs">
                     <ul>
                        <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                        <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                     </ul>
                  </div>
                  <img src="{{asset('images/channels/balastan/clouds.png')}}" alt=""/> 
                  <nav class="cloudlinks">
                     <ul>
                        <li><a href="{{ route('balastan.home') }}">{{ trans('radiopages.Home') }}</a></li>
                        <li><a href="{{ route('balastan.about') }}">{{ trans('radiopages.BAbout') }}</a></li>
                        <li><a class="active" href="{{ route('balastan.world') }}">{{ trans('radiopages.Bworld') }}</a></li>
                        <li><a href="{{ route('balastan.video') }}">Видео</a></li>
                        <li><a href="{{ route('balastan.allphotos') }}">{{ trans('radiopages.Photos') }}</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 50px;">
         <div class="col-md-12 worldmain">
            <div class="panel panel-default">
               <div class="panel-body" style="padding: 0px;">
                  <div class="row worldtext">
                     @if(app()->getlocale() == 'ru')
                     <div class="col-md-12 worldall world1">
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/birge_ru.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                           <h2>«Читаем вместе»</h2>
                           <p>Программа «Читаем вместе». 
                              Данная программа станет отличным инструментом привлечения родителей и детей к СОВМЕСТНОМУ ЧТЕНИЮ. Формат программы  основан на принципе поощрения людей,  повысить  свои знания и навыки. Это отличное средство повышения индивидуального потенциала и способности каждого человека во всем. Участники будут соревноваться в чтении посредством игр с детьми, что сделает процесс более интересным и захватывающим. Родители осознают о пользе чтения в семье. Отношения между родителями и детьми укрепляются и совершенствуются. Связь между членами семьи увеличивается. Это образовательно - развивающая программа для всех членов семьи. Читайте  вместе  с нами!
                           </p>
                        </div>
                     </div>
                     @elseif(app()->getlocale() == 'kg')
                     <div class="col-md-12 worldall world2">
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/birge_kg.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                           <h2>«Бирге окуйбуз»</h2>
                           <p>Үй бүлөлүк   “Биргеокуйбуз”  шоу  программасы
                              Бүгүнкү күндө балдар көбүнчө   ар кандай анимациялык фильмдерге, компюьтердик оюндарга , интернетке кызыгышат. Мунун кесепетинен алар китеп окуудан алыстап   калганы байкалат. Улуу ойчул  Белинский   “Адамдар китеп окууну таштаса, алар ой ойлонуудан да калат” – деп айтканы бар.  Демек китепке кызыкпаган, китеп окубаган балдар жетиштүү билимге ээ боло албайт.  Бирок  ар бир эле ата-эне өз баласын тартиптүү,  билимдүү болуп чоңоюшун каалайт. Муну ишке ашыруунун эң жөнөкөй жолу үйбүлөбүз менен бирге күн сайын китеп окуу.  Ошондуктан Коомдук биринчи канал,  Кыргызстандагы Ага Хан фондунун демилгеси менен үйбүлөлүк “Бирге окуйбуз” шоу программасын жалпы көрөрмандарга сунуштайт.
                           </p>
                        </div>
                     </div>
                     @endif
                     @if(app()->getlocale() == 'ru')
                     <div class="col-md-12 worldall world3">
                        <div class="col-md-8">
                           <h2>Таалимтай</h2>
                           <p>“Таалимтай”- юмористическая-познавательная программа студии “Келечек”  и телеканала ” Баластан”.</p>
                           <p>В каждом сюжете выпуска – истории, которые случаются с ребятами в школе и дома, во дворах и на улице. Поучительные кинозарисовки прививают молодому поколению любовь и уважение к старшим,  сверстникам и окружающим. </p>
                           <p>По итогам 2014-года опроса среди телезрителей телепроект «Таалимтай» признан «Лучшим проектом».</p>
                           <p>Участники-дети отбираются путем кастинга.</p>
                        </div>
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/taalimtay.png')}}" alt="">
                        </div>
                     </div>
                     @elseif(app()->getlocale() == 'kg')
                     <div class="col-md-12 worldall world3">
                        <div class="col-md-8">
                           <h2>Таалимтай</h2>
                           <p>“Келечек” студиясы жана ” Баластан” телеканалы  аркылуу “Таалимтай” көрсөтүүсү эфирге чыгып жатат. Балдарга арналган бул телекөрсөтүү жуманын ишемби, жекшемби күндөрү эфирге чыгат.
                              Көрсөтүүнүн негизги максаты: балдарга кыргыздын канына, кыргыз менталитетине ылайык келген таалим- тарбиялык мааниге ээ сюжеттер берилет. Алардын бардыгы юмор, күлкү менен коштолуп турат. 
                           </p>
                           <p>2014- жылы телекөрүүчүлөрдү сурамжылоонун натыйжасында, “Таалимтай” телекөрсөтүүсү КТРК боюнча биринчи оорундуээлеп  “Мыктыдолбоор” деген наамды жеңип алган. Жыл аягындаТаалимтай көрсөтүүсү беш жашка чыгат.</p>
                           <p>Таалимтай телекөрсөтүүсүнө катышкан балдар кастинг (тандоо) аркылуу алынат.</p>
                        </div>
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/taalimtay.png')}}" alt="">
                        </div>
                     </div>
                     @endif
                     @if(app()->getlocale() == 'ru')
                     <div class="col-md-12 worldall world4">
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/manastaanuu.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8">
                           <h2>Интеллектуальное состязание “Манас таануу”.</h2>
                           <p>Проект предназначен для зрителя с целью широкого ознакомления с эпосом «Манас», истории кыргызов, распространения идеологии эпоса, воспитания патриотического духа у подрастающего поколения. </p>
                           <p>В программе две команды учащихся старших классах соревнуются в знаниях эпоса «Манас» и традиций кыргызского народа.</p>
                        </div>
                     </div>
                     @elseif(app()->getlocale() == 'kg')
                     <div class="col-md-12 worldall world4">
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/manastaanuu.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8">
                           <h2>“Манас таануу” интеллектуалдык таймашы</h2>
                           <p>Жалпы көрүүчүлөргө жана окуучуларга “Манас” эпосу тууралуу кеңири маалымат берип,  жайылтуу,  кыргыз элинин тарыхын үйрөтүү, элибиздин улуулугун, касиетин, бийиктигин, эл жерин сүйгөн баатыр эл экендигин даңазалап, балдардын мекенчилдикке тарбиялоо максатында Коомдук каналдын  “Келечек” студиясы республикалык алкактагы               “Манастаануу”  интеллектуалдык таймашын (конкурс)  даярдап эфирге чыгарып келет. </p>
                        </div>
                     </div>
                     @endif
                     @if(app()->getlocale() == 'ru')
                     <div class="col-md-12 worldall world5">
                        <div class="col-md-8">
                           <h2>Күн балдары</h2>
                           <p>“Күнбалдары”  - это передача с участием талантливых детей, которые демонстрируют свои таланты в умении петь, танцевать и выразительно читать стихи. Номера на тему любви к родине, к родителям, многонациональные танцы. </p>
                        </div>
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/sun-kids.jpg')}}" alt="">
                        </div>
                     </div>
                     @elseif(app()->getlocale() == 'kg')
                     <div class="col-md-12 worldall world5">
                        <div class="col-md-8">
                           <h2>Күн балдары</h2>
                           <p>“Күн балдары”  - бул балдар үчүн концерттик программасы талантуу, ыр-бийге шыктуу балдардын катышуусундагы көрсөтүү.  Күн балдарына катышуучу таланттар ата-эне, мекен, балалык жана башка  балдар темасына арналган ырларды,  кыргыз,  башка улуттардын элдик бийлерин жана заманбап бийлерди аткарышат.  Программа  ар жуманын ишемби жана жекшемби күндөрү Коомдук биринчи каналдын эфиринен көрсөтүлөт.</p>
                        </div>
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/sun-kids.jpg')}}" alt="">
                        </div>
                     </div>
                     @endif
                     @if(app()->getlocale() == 'ru')
                     <div class="col-md-12 worldall world6">
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/birge3.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                           <h2>Баарын билгим келет</h2>
                           <p>Программа для любознательных детей школьного и дошкольного возраста, которая в доступной форме рассказывает детям обо всём на свете: о загадках и тайнах вселенной, об устройстве окружающего мира, о выдающихся научных открытиях и достижениях технического прогресса, о флоре и фауне земного шара, о строении самого человека, о всевозможных природных явлениях. Каждый выпуск программы позволяет юному зрителю найти ответ, казалось бы, на простой, но очень важный вопрос современных мальчишек и девчонок.</p>
                           <p>В программе «Баарын билгим келет» есть ряд интересных рубрик  «Салам, жаш талант!», «Жаныбарым-жандосум», «Сонун ыр», «Билип ал!», «Таттуу тамак», «Балдар жанылыктары».</p>
                        </div>
                     </div>
                     @elseif(app()->getlocale() == 'kg')
                     <div class="col-md-12 worldall world6">
                        <div class="col-md-4">
                           <img src="{{asset('images/channels/balastan/birge3.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                           <h2>Баарын билгим келет</h2>
                           <p>«Баарын билгим келет» көрсөтүүсүнүн максаты бала бакчадан баштап мектеп курака чейинки балдарды тура жолго үндөө, аң сезимин өстүрүү, пайдалуу жана кызыктуу маалыматтарды берүү. Балдардын интеллектуалдык деңгээлин жогорулатуу, дүйнөгө болгон көз карашын тура калыптандыруу.</p>
                           <p>«Баарын билгим келет» көрсөтүүсүнүн ичинде бир нече рубрикалар камтылган. Алсак, «Салам, жаш талант!», «Жаныбарым-жан досум», «Сону ныр», «Билип ал!», «Таттуутамак», «Балдар жанылыктары».</p>
                           <p>«Салам, жаш талант!» түрмөгүндө жаш таланттардын өнөрлөрү көрсөтүлүп, көрүүчүлөргө тааныштырылат. Бул таланттуу баланын андан ары да ийгилик жаратуусун ашык берет.</p>
                           <p>«Жаныбарым-жан досум»  түрмөгүндө түрдүү жаныбарлардын жашоосу тууралуу маалымат берилип, ар бир жаныбардын башкалардан айырмаланган негизги өзгөчөлүктөрү айтылып, көрсөтүлөт.</p>
                           <p>«Сонуныр» түрмөгүндө бала бакчадагы бал тилдүүбалдар ар кандай темада жаттаган ырларын көркөм айтып беришет. Бул көрүнүш балдардын туура, так сүйлөөсүнө чоң жардам берет.</p>
                           <p>«Билип ал!» түрмөгү «өткөндү барктабайын, келечек даңкталбайт» деген уран менен элибизге эмгеги сиңген, мамлекетибиздин өнүгүшүнө зор салымын кош конулуу инсандарды балдардын эсине салып, аларды биле жүрүүгө үндөйт.</p>
                           <p>«Таттуу тамак» түрмөгүндө балдарды табигыйтамактардыжегенгеүндөөмаксатындаата-энелер жана атактуу инсандар балдарга ылайыктуу жана пайдалуу тамактарды жасап көрсөтүп беришет</p>
                           <p>«Балдар жаңылыктары» түрмөгүндө бала бакчада жана мектепте болуп жаткан жаңылыктарды кичинекей көрүүчүлөргө бөлүшүү.</p>
                        </div>
                     </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @stop
   @section('footerscript2')
   @stop