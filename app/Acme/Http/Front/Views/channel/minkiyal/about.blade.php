@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
  <link rel="stylesheet" href="{{asset('css/slicebox.css')}}">
@endsection
@section('content')
  @include('Front::channel.minkiyal.nav')
  <nav id="main-menu" class="navbar navbar-minheader">
    <div class="container-fluid">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./#">
            <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">
          </a>
          <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="./">Башкы</a></li>
            <li><a href="./#report">Сүрөтбаяндар</a></li>
            <li><a href="./#contacts">Биз жөнүндө</a></li>
            <li><a href="./#">Ди-Джейлер</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <div class="online">
              <h3><i class="fa fa-microphone"></i>Түз эфир</h3>
              <object width="65" height="40" data="http://ktrk.kg/online/uppod.swf">
                <param name="bgcolor" value="#ffffff" />
                <param name="allowFullScreen" value="false" />
                <param name="allowScriptAccess" value="false" />
                <param name="audio" value="http://ktrk.kg/online/uppod.swf" />
                <param name="flashvars" value="comment=KTRK&amp;st=03AEEZykN3Q3Q3QH3zkOk1mwXRWNvz3b1XAxYTtj1mzC5kA2uyb1kOk1mwXRWNvhzdwf9vwjzC5k=jQZi6jNf1kOk1mwXRWHNXzBGDY31X=jOkZ2sN6HsQfzC5kev0kttj1vL2NXzC5k1sQE3Q2GkTCGfFdGJTCHwXpvQXeWNhHm0X1hsNkTWwWTSUhTd0kNtj1JTWwf9vwnY31DX1CYLex5W=jaktjR1i6W0kbSal1C0V9Rv1XAuaTtj1tzC5kb42Qi63Gktj1ozfUrd&amp;file=http://212.112.96.232:8081" />
              </object>
            </div>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="main-container">
    <section id="about">
      <div class="container">
        <div class="minkiyal-header">
          <h2 class="section-title text-center wow fadeInDown">“МИҢ КЫЯЛ FM” РАДИОСУ ЖӨНҮНДӨ</h2>
        </div>
          <div class="row">
            <div class="container">
              <h3 class="column-title">Радио “Миң кыял FM” - Кыялдар орундалат!!!</h3>
            </div>
            <div class="col-sm-12 wow fadeInRight">
              <img src="{{asset('images/channels/min-kiyal.png')}}" alt="" class="img-responsive fadeInLeft" style="
              float: left;">
              <h4> Кыргыз Коомдук Телерадиокорпорациянын 3-каналы болгон “Миң кыял FM” радиосу 2007-жылы 1-январда ачылган. Кыргыз улуттук Радиосунун 1, 2–программаларынан эфирдик классификациясы аркылуу кескин айырмаланат, тактап айтканда, “Миң-Кыял  FM” 80% музыкадан, 20%ы маалыматтан турат. Радио программаларын музыкалык-маалыматтык форматтын  принциптерин сактоо менен кыргыз тилинде гана даярдайт. Музыкалык саясаты боюнча Кыргызстандык гана аткаруучулардын кыргыз жана орус тилдүү чыгармаларын угармандар арасында жайылта турган алгачкы радиостанция. Ошондой эле рекламалык кызмат дагы эки тилде жүргүзүлөт. Маалымат таратууда “Миң кыял FM” радиосу “Би-Би-Си” Бүткүл дүйнөлүк  маалымат кызматы менен өнөктөш экендиги менен өзгөчөлүү. </h4>
              <img src="{{asset('images/channels/dostuk/about/1.jpg')}}">
              <h4>“Миң кыял FM” Бишкек шаары жана Чүй облусу боюнча <span class="minkiyal_fm">FM 103.7 МГ ц</span> жыштыгында,  “стерео” режиминде,  жалпы көлөмү 24 саат  бою  иш алып барат. Мындан сырткары,  радиостанция учурда Баткенде <span class="minkiyal_fm">FM 102.2 МГ ц</span>, Ош жана Жалал Абад облустары боюнча  <span class="minkiyal_fm">FM 106.3 МГ ц</span>, Нарын облусунда  <span class="minkiyal_fm">FM 107.7 МГ ц</span>, Талас облусунда <span class="minkiyal_fm">FM 105.7 МГ ц</span>, Ысык Көл облусунда <span class="minkiyal_fm">FM 100.6 МГ ц</span> жыштыктарында уктурулат.</h4>
              <h4>Негизинен "МИҢ КЫЯЛ" сөз айкашын чечмелеп келсек “миң”  көп же чексиз деген маанини берет. Ал эми “кыял” – адамдын жан-дүйнөсүндө жашаган эң бир жарык, эң бир сонун, адамды алдыга сүрөп, турмушунда не бир жаркын үмүттөрдү пайда кылган жакшы нерсе. “Кыргыз” деген түпкүлүктүү элдин кулундары болгонубуздан кийин, албетте улуттук колоритке да ылайыктуу келет. Эң негизгиси кыргыз музыкасынын корифейи Токтогул Сатылгановдун толуп-ташып турган жаштыктын символу болгон“Миң-кыял” аттуу күүсүнүн көп кырдуу маанисине таасирленип тандалып алынган.  </h4>
            </div>

            <div class="col-md-12 wow fadeInLeft">
              <h3 class="column-title">Радиостанциянын концепциясы</h3>
              <img src="{{asset('images/channels/dostuk/about/3.jpg')}}" class="pull-left">
              <h4>Радиоугармандардын маалыматтык, социалдык-этикалык жана маданий-эстетикалык талаптарын  канааттандыруу максатында жогорку сапаттагы радиоуктурууларды  даярдоо.</h4>
              <h4>Республика тургундарына ишенимдүү жана оперативдүү маалыматтарды жеткирүү. </h4>

              <h4>Өлкөнүн региондору арасында навигациялык көпүрөлөрдү түзүү.</h4>
              <h4>Угармандар менен,  жана угармандар арасында диалогду тереңдетүү жана кеңейтүү.</h4>
              <h4>Коомчулукту  бириктирүү  каражаты катары  улуттук маданиятты, саясий маданиятты  өнүктүрүүгө көмөк көргөзүү.</h4>
              <h4>Кыргыз тилдүү музыкага басым коюу, ата – мекендик аткаруучуларга колдоо көрсөтүү. </h4>
            </div>
          </div>
      </div>
    </section>
    <!--/#about-->
  </div>
  </body>
@stop
@section('footerScript')
@stop