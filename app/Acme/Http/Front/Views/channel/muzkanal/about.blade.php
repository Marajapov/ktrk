@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Mabout'))
@section('styles')
<link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')

   <!-- Main slider -->
   <div class="container">
      <div class="row">
         <div class="col-md-12 aboutmuz">
            <div class="panel panel-default ">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.AboutMusic') }}</span></h3>
               </div>
               <div class="row">
                  <img class="backmuz" src="{{ asset('images/channels/muzkanal/notes.png')}}">   
                  <div class="col-md-8">
                     <div class="panel-body abouttextmuz">
                        @if(app()->getlocale() == 'ru')
                        <p class="onemuztext"><span>МУЗЫКА</span> — главный музыкальный телеканал в Кыргызстане, который начал свое вещание с 1 октября 2012 года, и в этот период в его эфире можно увидеть самые модные клипы кыргызских и зарубежных исполнителей, хит-парад и много интересных программ. </p>
                        @elseif(app()->getlocale() == 'kg')
                        <p class="onemuztext"><span>МУЗЫКА</span>– 2012 жылдын 1-октябрынан тарта иштеп келе жаткан Кыргызстандын эң негизги музыкалык телеканалы. Бул мезгилде МУЗЫКАнын эфиринен Кыргызстан жана чет элдик ырчыларынын эң саркеч клиптерин, ошондой эле Хит-Парад жана башка кызыктуу көрсөтүүлөрдү көрө аласыздар.</p>
                        @endif
                        <div class="aboutvipromo">
                           <iframe src="http://www.youtube.com/embed/t8r7ifqRViY?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="450"></iframe>
                        </div>
                        @if(app()->getlocale() == 'ru')
                        <p class="twomuztext"><img src="{{ asset('images/channels/muztv_color.png')}}" alt=""><span>МУЗЫКА</span> — единственный музыкальный канал, вошедший в пакет цифрового телевидения, который будет доступен каждому жителю Кыргызстана, охват канала составит 98% аудитории Кыргызстана. Так же телеканал МУЗЫКА вещает через спутник и в кабельных сетях Кыргызстана. </p>
                        @elseif(app()->getlocale() == 'kg')
                        <p class="twomuztext"><img src="{{ asset('images/channels/muztv_color.png')}}" alt=""><span>МУЗЫКА</span> –бул музыкалык каналдар арасынан санарипке кирген жалгыз телеканал болгондуктан Кыргызстандын ар-бир жашоочусуна жеткиликтүү телеканал. Бул жагдай аркылуу, телеканалдын аудиториясы  Кыргызстандын 98% көрүүчүлөрүн камтыйт.  Ошондой эле МУЗЫКА спутник жана кабелдик түйүндөр аркылуу да тартууланып келет.</p>
                        @endif
                        @if(app()->getlocale() == 'ru')
                        <p class="threemuztext">Сегодня МУЗЫКА– это только хиты, клипы и концерты лучших кыргызских артистов, музыкальный Хит-Парад, актуальные программы для зрителей. </p>
                        @elseif(app()->getlocale() == 'kg')
                        <p class="threemuztext">Бүгүнкү күндө МУЗЫКА-бул жалаң кыргыз аткаруучуларынын хит ырларын, эң мыкты клиптерин жана концерттерин, ошондой эле музыкалык Хит-Парад жана кызыктуу көрсөтүүлөрдү сунуштайт.</p>
                        @endif
                        @if(app()->getlocale() == 'ru')
                        <h3>Телеканал «МУЗЫКА»- только качественная музыка 24 часа в сутки.</h3>
                        @elseif(app()->getlocale() == 'kg')
                        <h3>МУЗЫКА телеканалы- 24 саат бою сапаттуу музыка тартуулайт.</h3>
                        @endif
                        @if(app()->getlocale() == 'ru')
                        <p class="twomuztext">МУЗЫКА – молодежный музыкальный канал, а это самая требовательная аудитория, которую только можно представить. Молодежь сложно удивлять и постоянно следовать современным тенденциям, МУЗЫКЕ удается не только показывать в эфире модную музыку, но и воспитывать настоящий, правильный музыкальный вкус молодежи.</p>
                        @elseif(app()->getlocale() == 'kg')
                        <p class="twomuztext">- бул эң жогорку сапатты талап  кылган жаштардын телеканалы. Жаштарды оңой менен таң калдыра албайсың, алар дайыма жаны тенденцияларга көңүл буруп келишет. МУЗЫКА- эфирден жалаң саркеч музыканы гана көргөзбөстөн, ошондой эле өсүп келе жаткан жаш муундун табитин тарбиялап жакшыртуу максатын көздөйт</p>
                        @endif
                        @if(app()->getlocale() == 'ru')
                        <h4>ПРЕМИЯ телеканала «МУЗЫКА»</h4>
                        @elseif(app()->getlocale() == 'kg')
                        <h4>«МУЗЫКА» телеканалынын СЫЙЛЫГЫ</h4>
                        @endif
                        @if(app()->getlocale() == 'ru')
                        <p class="twomuztext">Премия телеканала МУЗЫКА — одно из самых значимых, масштабных и престижных событий шоу-бизнеса, проводимое каналом «МУЗЫКА» с 2015 года. Это народный выбор, где победители определяются путем зрительского голосования. Стать обладателем желанной награды стремятся как начинающие музыканты, так и уже состоявшиеся звезды. Вручение «Премии МУЗЫКА» сопровождается появлением специальных гостей самых известных личностей страны. </p>
                        @elseif(app()->getlocale() == 'kg')
                        <p class="twomuztext">МУЗЫКА телеканалыны сыйлыгы- бул 2015 жылдан тарта  “МУЗЫКА” каналы өткөргөн, Кыргыз шоу-бизнесинин эң чоң, маанилүү  жана престиждүү аземи. Бул элдик тандоо, себеби мыктылар көрүучүлөрдүн добушу аркылуу тандалып  келет. Бул сыйлыктын ээси болууну жаш аткаруучулардан улуу муундун өкүлдөрүнө чейин каалап аракеттенишет. МУЗЫКА телеканалынын сыйлыгынын тапшыруусу кыргызстандын эң белгилүү инсандарынын катышуусу менен коштолуп өткөрүлөт.</p>
                        @endif
                        <div class="aboutvipromotwo">
                           <iframe src="http://www.youtube.com/embed/_qu2p_PTU0w?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                           <iframe src="http://www.youtube.com/embed/uLP1tEJlaDY?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="aboutposter"> 
                        <iframe src="http://www.youtube.com/embed/4YcI-Aya8YM?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                        <iframe src="http://www.youtube.com/embed/-wvYxvbALTI?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                        <iframe src="http://www.youtube.com/embed/WM1-Ofjhci4?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                        <iframe src="http://www.youtube.com/embed/nVE-p6Sse8k?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                        <iframe src="http://www.youtube.com/embed/I7YHajcdjvA?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                        <iframe src="http://www.youtube.com/embed/d1Lagbbn4TM?hd=1&rel=0&autohide=1&showinfo=0" frameborder="0" width="100%" height="200"></iframe>
                     </div>
                  </div>
               </div>
               <br>
            </div>
         </div>
      </div>
   </div>
   @stop
   @section('footerScript')
   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
   <!-- Fixed Sticky header -->
   <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>   
   <!-- Fixed Sticky header -->
   @stop