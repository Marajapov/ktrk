@extends('Front::channel.madaniyat.default')
@section('title',  trans('radiopages.Mabout'))
@section('styles')
@endsection
@section('content')
<body class="madaniyat">
   @include('Front::channel.madaniyat.nav')
   <div class="container" style="margin-top: 140px;">
      <div class="row">
         <section class="content clearfix">
            <div class="col-md-12" style="padding:10px 0px;">
               <div class="panel panel-default">
                  <div class="panel-heading madaniyatcolor">
                     <h3 class="panel-title"><span>{{ trans('radiopages.MadanTV') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 mabout">
                        <div class="row">
                           <div class="col-md-5 mimage">
                              <div class="mlogo">
                                 <img src="{{ asset('images/channels/madaniyat.png')}}" alt="">
                              </div>
                           </div>
                           @if(app()->getlocale() == 'ru')
                           <div class="col-md-7 mculture">
                              <p>Телеканал «Маданият» - канал, посвященный культуре. </p>                           
                              <p>Культура в жизни каждого человека играет особо важную роль. Невозможно представить жизньбез музыки, живописи и тех шедевров искусства, которые создаются и передаются из поколения в поколение. </p>
                              <p>Культура – это мост между историей и настоящим, между различными народами. </p>
                           </div>
                           @elseif(app()->getlocale() == 'kg')
                           <div class="col-md-7 mculture">
                              <p>МАДАНИЯТ – абалкы менен азыркынын, эзелки менен эмикинин байланышы.</p>
                              <p>МАДАНИЯТ – кыргыздын көрөӊгөсүн, улуттун жөрөлгөсүн камтыган канал.</p>
                              <p>МАДАНИЯТ – көөнөргүс классика менен тарыхий тасмаларды, обологон опера жана балкыткан балетти, сезим козгогон спектакльдер менен  кайрыктуу концертти тартуулайт.</p>
                           </div>
                              @endif
                        </div>
                        <div class="row">
                           @if(app()->getlocale() == 'ru')
                           <div class="col-md-5 m1">
                              <p>Концепция телеканала заключается в создании и распространении передач на разную тематику: музыка, искусство, литература, отражение культурного многообразия народов, а также просвещение, сохранение и развитие национальных традиций кыргызского народа и воспитание патриотизма.</p>
                              <p>Миссия телеканала заключается в содействии в воспитании в человеке лучших качеств, как добропорядочность, стремление к знаниям и просвещению, гуманность, любовь к искусству. </p>
                           </div>
                           @elseif(app()->getlocale() == 'kg')
                           <div class="col-md-5 m1">
                              <p>Маданият телеканалы Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын курамындагы маданият, тил жана тарых багытындагы телекөрсөтүүлөрдү даярдаган жана  көрсөткөн канал болуп эсептелинет. </p>
                              <p>Бүгүнкү күндө маданияттын  маанилүүлүгүн эске алуу менен МТ каналы Коомдук телерадиоберүү корпорациясы тарабынан Кыргызстандын калкы үчүн түзүлгөн.  </p>
                              <p>- Телекөрсөтүү торчосунун  негизги бөлүгү өздүк көрсөтүүлөрдөн  жана  дүйнөлүк  маданий мурастардан, окуялардан, жаңылыктардан түзүлмөкчү.</p>
                              <p>- Маданияттын ар кыл  тармактарынын ишмердүүлүгү  чагылдырылмакчы. </p>
                            </div>
                           @endif
                           <div class="col-md-7 m4">
                              <iframe width="100%" height="450" src="https://www.youtube.com/embed/9WsRuMRxycE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                           </div>
                        </div>
                        @if(app()->getlocale() == 'ru')
                         @elseif(app()->getlocale() == 'kg')
                        <div class="row">
                           <div class="col-md-5 m2">
                              <p>Каналдын негизги  иштөө принциптери:</p>
                           </div>
                           <div class="col-md-7 m3">
                              <p>Кыргызстан жана  эл аралык  ММКарына   тийиштуу  стандарттын негизинде  иш алып баруу. Көрүүчүгө  таңуулабастан тандоо укугун берүү</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-5 m22">
                              <p>Каналдын негизги максаты:</p>
                           </div>
                           <div class="col-md-7 m3">
                              <p>Көрүүчүлөрдүн купулуна  толгон  мыкты берүүлөрдү даярдоо. Маданияттын ар тармагын аракеттуу  чагылдыруу.
                                 Тарбия багыты, тарыхты тактоо, баамдоо, таанып билүү, тил маселелери – МТ каналынын  көңүл чордонунда. Көрүүчунүн көңүлүн буруу менен аны бийик  нерсеге  шыктандыруу.
                              </p>
                           </div>
                        </div>
                          @endif
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   @stop
   @section('footerscript2')
   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>
   <script>
      $(document).ready(function () {
          $(".search-toggle").click(function () {
              $(".logo-block").addClass("search-show");
              $(".form-search").addClass("visible");
              $(".clangs").addClass("hidden");
          });
          $(".close-search").click(function () {
              $(".logo-block").removeClass("search-show");
              $(".form-search").removeClass("visible");
              $(".clangs").removeClass("hidden");

          });
      });
   </script>
   @stop