@extends('Front::channel.balastan.default')
@section('title', trans('radiopages.BAbout'))
@section('styles')
@endsection
@section('content')
<div class="container-fluid pages-header">
   <div class="row">
      @include('Front::channel.balastan.nav')
      <div class="container pages-title">
         <div class="row">
            <div class="title col-md-12">
               <h3>{{ trans('radiopages.BAbout') }}</h3>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid aboutbtn">
   <div class="row">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p>“Баластан” мектеп жашына чейинки жана мектептин башталгыч ошондой эле ортоңку класстарында окуган  балдарга арналган  Кыргызстандагы эң алгачкы  балдар каналы. Бул канал  2013-жылы  1-октябрда  ачылып,   программалардын контенти 6 саатка түзүлгөн.  Таңкы саат  7:00дөн  түнкү 12:00гө  чейинки  убакытар алыгында  3 жолу кайталанып  сунушталат.</p>
               <p>Күн сайын кыргыз жана орус тилдериндеги (70% кыргыз, 30% орустилинде)  таалим-тарбиялык мааниси бар, билим алуу жана  таанып-билүү  багытындагы  программалар, ошондой эле  кино, мультфильмдер  көрсөтүлөт. “Баластан”  каналы бир гана балдар үчүн эмес, ата-энелер үчүн да маанилүү маалымат булагы болуп саналат.</p>
            </div>
            <div class="col-md-12">
               <p>“Баластан” - счастливый смех детей и радость в каждую семью! 
                  Вещает по кабельным каналам в Чуйской области, в социальном пакете цифрового вещания “Кыргызтелеком” в Ошской и Джалал-Абадской области. С января 2014 года канал начал показывать в Баткенской области. 
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
@section('footerscript2')
@stop