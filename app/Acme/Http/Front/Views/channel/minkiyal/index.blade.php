@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')

@endsection
@section('content')
  @include('Front::channel.minkiyal.nav')
  <div class="container">

      <div class="shows-slider slidermin">
        <div class="slider-overlay"></div>

        <div class="shows-carousel">     
          <div>
          <div class="overlay"></div>
          <a href="#">
            <img src="{{ asset('images/channels/minkiyal/radio.jpg') }}" alt=""/>
          </a>
        </div>
        <div>
          <div class="overlay"></div>
          <a href="#">
            <img src="{{ asset('images/channels/minkiyal/red.jpg') }}" alt=""/>
          </a>
        </div>
        </div>

      </div> 
  </div>

      <div class="container info">

          <div id="allposts">
<!--               @if($photoGalleries)
               @foreach($photoGalleries as $photoGallery)
               <div class="col-md-4 sm-12 postshow">
                  <img src="{{ asset($photoGallery->thumbnail_big) }}" class="img-responsive" alt="">
                  <a href="{{ route('minkiyal.post', $photoGallery) }}"><h3>{{ $photoGallery->getName() }}</h3></a>  
               </div>
               @endforeach
               @endif -->
            <div class="col-md-3 col-sm-12 postshow">
              <a href="#">
                <img src="{{asset('images/channels/minkiyal/anjelika.png')}}" class="img-responsive" alt="">
                <h3>Анжелика жаны ырын тартуулады</h3>
              </a>
            </div>
            <div class="col-md-3 col-sm-12 postshow">
              <a href="#">
                <img src="{{asset('images/channels/minkiyal/ayana.jpg')}}" class="img-responsive" alt="">
                <h3>Аяна Касымова Интернетти кайра дүңгүрөттү</h3>
              </a>
            </div>
            <div class="col-md-3 col-sm-12 postshow">
              <a href="#">
                <img src="{{asset('images/channels/minkiyal/kalykov.jpg')}}" class="img-responsive" alt="">
                <h3>Гүлжигит Калыков биздин студияда</h3>
              </a>
            </div>
            <div class="col-md-3 col-sm-12 postshow">
              <a href="#">
                <img src="{{asset('images/channels/minkiyal/winter.jpg')}}" class="img-responsive" alt="">
                <h3>Анжелика жаны ырын тартуулады</h3>
              </a>
            </div>
          </div>
      </div>
  <section id="report">
  <div class="container konoktor">
    <div class="title">
      <h3>Эфирдин коногу</h3>
    </div>
      <div class="row">
        <div class="withpad">
          <div class="col-md-4 first">
              <a href="#">
                <img src="{{asset('images/channels/muzkanal/14.png')}}" class="img-responsive" alt="">
                <h3>Биздин эфирге ким келди?</h3>
              </a>
          </div>
          <div class="col-md-4 first">
              <a href="#">
                <img src="{{asset('images/channels/muzkanal/minura.jpg')}}" class="img-responsive" alt="">
                <h3>Минюра Рахимжанова өзүнүн жигити жөнүндө кеп салып берди</h3>
              </a>
          </div>
          <div class="col-md-4 first">
              <a href="#">
                <img src="{{asset('images/channels/minkiyal/ayana.jpg')}}" class="img-responsive" alt="">
                <h3>Аяна Касымова Интернетти кайра дүңгүрөттү</h3>
              </a>
          </div>
        </div>
      </div>
  </div>
  <div class="container-fluid allgallery">
    <div class="container ">
      <div class="title">
        <h3>Сүрөтбаяндар</h3>
      </div>
        <div class="row">
          <div class="withpad">
            <div class="col-md-4 second">
                <a href="#">
                  <img src="{{asset('images/channels/birinchiradio/olivia.jpg')}}" class="img-responsive" alt="">
                  <h3>Бактылуу Оливия биздин кечки конокто</h3>
                </a>
            </div>
            <div class="col-md-4 second">
                <a href="#">
                  <img src="{{asset('images/channels/muzkanal/mirbek.jpg')}}" class="img-responsive" alt="">
                  <h3>Мирбек Атабеков чоң гастролго аттанаарда</h3>
                </a>
            </div>
            <div class="col-md-4 second">
                <a href="#">
                  <img src="{{asset('images/channels/minkiyal/kalykov.jpg')}}" class="img-responsive" alt="">
                  <h3>Гүлжигит Калыков биздин студияда</h3>
                </a>
            </div>
          </div>
        </div>
    </div>
  </div>
  </section>

  <section id="network" >
      <div class="container network">
          <div class="title">
            <h3>Биз социалдык тармактарда </h3>
          </div>
          <div class="row">
            <div class="col-md-3">
            </div>
          </div>
      </div>
  </section><!--/#services-->

  <section id="contacts" >
    <div class="container-fluid infobar">
      <div class="container contacts">
          <div class="title">
            <h3>Байланыш</h3>
          </div>
          <div class="row">          
            <div class="col-md-4 address">
              <h3><i class="fa fa-map-marker"></i> Дареги</h3>
              <ul>
                <li><i class="fa fa-location-arrow"></i> Кыргызстан, Бишкек  шаары</li>
                <li><i class="fa fa-home"></i> Жаш Гвардия бульвары, 59</li>
              </ul>
            </div>
            <div class="col-md-4 address">
              <h3><i class="fa fa-phone"></i> Байланыш телефон:</h3>
              <ul>
                <li><i class="fa fa-microphone"></i> Түз эфир: 0312 65 37 14</li>
                <li><i class="fa fa-commenting-o"></i> sms-портал: 10 00</li>
              </ul>
            </div>
            <div class="col-md-4 address">
              <h3><i class="fa fa-envelope-o"></i>E-mail:</h3>
              <ul>
                <li><i class="fa fa-envelope"></i> mkfmradio@gmail.com</li>
                <li><i class="fa fa-facebook-official"></i> www.facebook.com/MinKyalFm</li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </section><!--/#services-->

</body>


@stop

@section('footerScript')
    <script>
        $(function(){
            $("#allposts .postshow").slice(0, 6).show(); // select the first six
            $("#allposts .loadMore").click(function(e){ // click event for load more
                e.preventDefault();
                $("#allposts .postshow:hidden").slice(0, 6).show(); // select next 6 hidden divs and show them
                if($("#allposts .postshow:hidden").length == 0){ // check if any hidden divs still exist
                    $("#allposts .loadMore").hide();
                }
            });
            if($("#allposts .postshow:hidden").length == 0){ // check if any hidden divs still exist
                $("#allposts .loadMore").hide();
            }
        });
    </script>
    <script>
        $('.shows-carousel').slick({
//        autoplay: true,
//        autoplaySpeed: 2000,
            centerPadding: '0',
            dots: true,
            arrows: false,
            infinite: true,
            slidesToShow: 1,
            speed: 600,
            speed: 500,
            fade: true,
            cssEase: 'linear',
        });
    </script>
@stop