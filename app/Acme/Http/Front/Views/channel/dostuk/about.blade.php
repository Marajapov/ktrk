@extends('Front::channel.dostuk.default')
@section('title', trans('radiopages.AboutDostuk'))
@section('styles')
@endsection
@section('content')
@include('Front::channel.dostuk.navs')
<div class="main-container">
  <section id="about">
     <div class="container">
        <div class="section-header">
           <br>
           <br>
          <h3 class="section-title text-center">{{ trans('radiopages.AboutDostuk') }}</h3>
        </div>
 		   @if(app()->getlocale() == 'kg')
        <div class="row">
           <div class="container">
               <h3 class="column-title">КТРК жаңы «Достук» радиосун этника аралык макулдук идеяларын колдоо максатында 2013-жылдын 7-октябрында ишке киргизген.</h3>
           </div>   
           <div class="col-sm-12 wow fadeInRight">
              <img src="{{asset('images/channels/dostuk.png')}}" alt="" class="img-responsive fadeInLeft" style="
              float: left;">                  
              <h4> Радио адегенде интернет аркылуу чыга баштаган, ал эми 2015-жылдан тарта аны  санариптик пакеттен табууга болот. «Радионун негизги максаты - өлкөбүздө жашаган этностор аралык достук мамилелердин өнүгүшүнө жана бекемделишине көмөк көрсөтүү эсептелет».</h4>
              <img src="{{asset('images/channels/dostuk/about/5.jpg')}}">
              <h4>Радио КТРКнын 2013-2015-жылдарга карата өнүгүү стратегиясына, ошондой эле мамлекет башчысынын жарлыгы менен кабыл алынган Кыргызстандагы этностор аралык мамилелер концепциясына ылайык ачылууда. Радионун берүүлөр сеткасы маданият, тарых, искусство жана адабиятка байланышкан темаларды камтыйт. Өлкөбүздө ушундай радионун ачылышы менен Кыргыз Республикасында жашап жатышкан этностордун өз маданий баалуулуктары менен алмашып турушу үчүн аянтча түзүүгө басым коюлат.Ошондой эле радиодо президенттин мамлекеттик тилди өнүктүрүү жөнүндө жарлыгынын аткарылышы үчүн кыргыз тилин окуп-үйрөнүү боюнча өз алдынча долбоор орун алмакчы. </h4>
				      <img src="{{asset('images/channels/dostuk/about/6.jpg')}}" class="pull-left">
              <h4>Радио суткасына online жана ишемби жекшемби күндөрү “Биринчи” радионун толкунунан обого чыгып турат.</h4>
              <h4>Радионун редакциясы диаспоралар жана Кыргызстан элдеринин ассамблеясы менен кызматташат, алар таанып-билүүчү жана окутуучу берүүлөрдүн авторлору, бул баарлашуу үчүн аянт даярдоого, аймактар ортосунда байланыштарды түзүүгө шарт түзөт жана маданий баалуулуктар менен алмашуу мүмкүндүгүн берет. </h4>
              <h4>Радионун тутунганы: «Биримдигибиз – ынтымакта!».</h4>
           </div>
           <div class="col-md-12 wow fadeInLeft">
           		<h3 class="column-title">Максаты</h3>
           		<img src="{{asset('images/channels/dostuk/about/3.jpg')}}" class="pull-left">
           		<h4>Кыргызстан-көп улуттуу  мамлекет, мында  бир жерде кайталангыс көп этностук гамма түзүлгөн. Ал кыргыздарды, өзбектерди, орустарды, украиндерди, татарларды, дунгандарды, уйгурларды,  казактарды азербаджандарды  жана  башкаларды камтыйт. </h4>
           		<img src="{{asset('images/channels/dostuk/about/4.jpg')}}">
           		<h4>Жалпысынан Кыргызстанда 90 го жакын улут жашайт. Кыргыз Республикасынын Конституциясына ылайык  өлкөнүн бардык жарандары  алардын этностук  таандуулугуна  карабастан бирдей укукка ээ.Мекенибизде  республикалык деңгээлдеги  улуттук 30 борбор облустарда 72 маданий борбор бар. </h4>

           		<h4>Кыргыз жергебизде  “Достук”темасына байланышкан көптөгөн маданий иш чаралар байма-бай өткөрүлүп  жатканын эске алсак  “Достук”  радиосунун ачылышы коомчулуктун арасында колдоого ээ болот деген ишенимдебиз. Эгиз козудай ээрчишкен элдердин биримдигин болоттой бекем, темирдей кайраттуу кылып ширетүү үчүн улуттар  аралык ынтымактын радиосу сөзсүз түрдө керек. </h4>
           		<h4>Эл достугуна доо кетирбей ыр менен  достукка көпүрө болууга ниет кылган радио азырынча бирөө эле. Ал “Достук” радиосу.</h4>
           </div>
        </div>
        @elseif(app()->getlocale() == 'ru')
        <div class="row">
           <div class="container">
               <h3 class="column-title">Радио "ДОСТУК" вещает в онлайн-режиме на сайте www.ktrk.kg в познавательном, литературном и музыкальном формате. </h3>
           </div>   
           <div class="col-sm-12 wow fadeInRight">
              <img src="{{asset('images/channels/dostuk.png')}}" alt="" class="img-responsive fadeInLeft" style="
              float: left;">
               <h3>Основными целями радио "Достук" являются:</h3>
               <h4>• прославление многоязычия и дружбы народов;</h4>
               <h4>• создание высококачественных радиопрограмм в интересах удовлетворения культурно</h4>
               <img src="{{asset('images/channels/dostuk/about/5.jpg')}}">
               <h4>• углубление и расширение диалога радио со слушателями;</h4>
               <h4>• Цель нашей радиостанции заключается в том, чтобы просвещать молодежь в таких важнейших сферах культуры, как музыка, литература, кино и театр. Знакомить с классическими образцами и культовыми личностями в этих сферах, а также освещать последние достижения, достойные внимания. Тем самым мы хотим расширить кругозор молодежи, повысить ее образованность, помочь воспитать вкус на лучших достижениях литературы, музыки, кино и театра.</h4>
               <h4>• Время   вещания составляет 9 часов в сутки. Программы  выходят в  эфир  на  кыргызском, русском, польском, украинском, дунганском, уйгурском, татарском, узбекском,турецком  языках </h4>
               <h4>• Vолодежь в области искусства, способствует ее духовному развитию. В этом заключается миссия нашего радио.</h4>
           </div>
           <div class="col-md-12 wow fadeInLeft">
             </br>
           		<h3 class="column-title">Задачи</h3>
             
               <h3>Основными задачами радио являются:</h3>
               <img src="{{asset('images/channels/dostuk/about/6.jpg')}}">
               <h4>• Cоздание высококачественных радиопрограмм и осуществление 18 часового вещания познавательных, литературных, музыкально-развлекательных программ в эфире радио;</h4>
               <h4>• Углубление и расширение диалога радио со слушателями;</h4>               
               <h4>• Содействие развитию дружеских отношении между народами Кыргызстана</h4>
               <h4>• Ориентация на музыку этнических народов Кыргызстана, поддержка отечественных исполнителей;</h4>
               <h4>• Познакомить слушателей с творчеством исполнителей  , музыкантов, поэтов;</h4>
               <h4>• Познакомить молодежь с интересными сведениями </h4>
               <h4>• Проводить беседы в студии со специалистами разной   области,  в области музыки:</h4>
                <img src="{{asset('images/channels/dostuk/about/3.jpg')}}" class="pull-left">
               <h4>• Познакомить слушателей с лучшими образцами классических, фольклорных направлений в музыке (классика, джаз, эстрада, поп-музыка и так далее);</h4>
               <h4>• Дать представление о многообразие современного музыкального процесса;</h4>
               <h4>• Осветить творчество местных музыкантов и музыкальных групп;</h4>
               <h4>• Познакомить молодых радиослушателей с интересными фактами из жизни</h4>
               <h4>• Проводить беседы в студии со специалистами в области кино (актерами, режиссерами, операторами, сценаристами, кинокритиками и так далее).</h4>
               <h4>• Наше радио будет интерактивным. Благодаря этому предполагается тесная связь со слушателями. Мы будем рады общению со своими слушателями.</h4>
           </div>
           <div class="col-md-12 wow fadeInLeft">
             </br>
              <h3 class="column-title">Радио “Достук”.  Мы рады служить для своих слушателей!</h3>
              <h3>Краткое описание программ, представленных в эфире :</h3>
              <h4><span>“Салам Кыргызстан”</span> — утренний эфир радио Достук, выходит с 8.00-08.30 и включает в себя несколько интересных рубрик, а также беседы с личностями разной сферы. </h4>
              <img src="{{asset('images/channels/dostuk/about/4.jpg')}}">
              <h4><span>« Иштин башы ишемби»</span> - утренний эфир радио Достук, выходит с 09.00-10 на ФМ 104,1  и включает в себя несколько интересных рубрик, а также беседы с личностями разной сферы.</h4>
              <h4><span>« Наполним музыкой сердца »</span> - Жизнь рождает музыку, а музыка воздействует на жизнь. Программа посвященная жизни и творчеству известных музыкантов . Программы подготовленные диаспорами АНК рассказывают о традициях , обычаях, культуре и знаменательных событиях в жизни этих народов</h4>
              <h4><span>«Тарых сабактары»</span> - Знание истории своей страны приводит к формированию и распространению идей гражданского патриотизма, единства нации, духовной и культурной общности народа Кыргызстана, межэтнического согласия и толерантности . Программа рассказывает об истории страны.</h4>
              <h4><span>«Достук ыры»</span> - Концертная программа составленная из песен народов мира , с целью развития культуры страны. Только высокий уровень культуры народа может обеспечить высокие результаты в развитии патриотизма, к дружбе народа.</h4>
              <h4><span>« Древо дружбы»</span> , <span>«Данакер»</span>, <span>«Джаз и только джаз»</span> , <span>«Алтын бешик»</span> , <span>«Ретро вояж»</span> и еще много других интересных и познавательных программ радио «Достук» предлагает вниманию радиослушателей. </h4>
           </div>
        </div>
        @endif
     </div>
  </section>
  <!--/#about-->
</div>
@stop