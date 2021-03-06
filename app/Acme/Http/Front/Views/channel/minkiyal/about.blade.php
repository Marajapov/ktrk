@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
  <link rel="stylesheet" href="{{asset('css/slicebox.css')}}">
@endsection
@section('content')
  @include('Front::channel.minkiyal.nav')
  @include('Front::channel.minkiyal.navs')

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
              <h4>“Миң кыял FM” Бишкек шаары жана Чүй облусу боюнча <span class="minkiyal_fm">FM 103.7 МГ ц</span> жыштыгында,  “стерео” режиминде,  жалпы көлөмү 24 саат  бою  иш алып барат. Мындан сырткары,  радиостанция учурда Баткенде <span class="minkiyal_fm">FM 102.2 МГ ц</span>, Ош жана Жалал Абад облустары боюнча  <span class="minkiyal_fm">FM 106.3 МГ ц</span>, Нарын облусунда  <span class="minkiyal_fm">FM 107.7 МГ ц</span>, Талас облусунда <span class="minkiyal_fm">FM 105.7 МГ ц</span>, Ысык Көл облусунда <span class="minkiyal_fm">FM 100.6 МГ ц</span> жыштыктарында уктурулат.</h4>
              <h4>Негизинен "МИҢ КЫЯЛ" сөз айкашын чечмелеп келсек “миң”  көп же чексиз деген маанини берет. Ал эми “кыял” – адамдын жан-дүйнөсүндө жашаган эң бир жарык, эң бир сонун, адамды алдыга сүрөп, турмушунда не бир жаркын үмүттөрдү пайда кылган жакшы нерсе. “Кыргыз” деген түпкүлүктүү элдин кулундары болгонубуздан кийин, албетте улуттук колоритке да ылайыктуу келет. Эң негизгиси кыргыз музыкасынын корифейи Токтогул Сатылгановдун толуп-ташып турган жаштыктын символу болгон“Миң-кыял” аттуу күүсүнүн көп кырдуу маанисине таасирленип тандалып алынган.  </h4>
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