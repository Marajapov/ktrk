@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
<div class="container">
  <div class="logoon">
    <div class="logomin">
      <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">
    </div>
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
  </div>
   <div class="shows-slider slidermin">
      <div class="slider-overlay"></div>
      <div class="shows-carousel">
         <div>
            <a href="#">
            <img src="{{ asset('images/channels/minkiyal/radio.jpg') }}" alt=""/>
            </a>
         </div>
         <div>
            <a href="#">
            <img src="{{ asset('images/channels/minkiyal/red.jpg') }}" alt=""/>
            </a>
         </div>         
         <div>
            <a href="#">
            <img src="{{ asset('images/channels/minkiyal/nonred.png') }}" alt=""/>
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
   <div class="container anonses">
       <div class="anons-slider slidermin">
          <div class="slider-overlay"></div>
          <div class="anons-carousel">
             <div>
               <div class="row">
                 <div class="col-md-3">
                   <img src="{{ asset('images/channels/minkiyal/ayana.jpg') }}" alt=""/>
                 </div>
                 <div class="col-md-9">
                  <span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita doloribus itaque vero sequi nisi. Deserunt laboriosam, beatae tenetur suscipit accusantium recusandae adipisci illum, fuga quos. Mollitia ad repellendus sint.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita doloribus itaque vero sequi nisi. Deserunt laboriosam, beatae tenetur suscipit accusantium recusandae adipisci illum, fuga quos. Mollitia ad repellendus sint.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita doloribus itaque vero sequi nisi. Deserunt laboriosam, beatae tenetur suscipit accusantium recusandae adipisci illum, fuga quos. Mollitia ad repellendus sint.</p>
                  </span>
                 </div> 
                </div>      
             </div>             
             <div>
               <div class="row">
                 <div class="col-md-3">
                   <img src="{{ asset('images/channels/minkiyal/ayana.jpg') }}" alt=""/>
                 </div>
                 <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora dolorum adipisci natus autem, ipsa saepe praesentium eius laudantium expedita necessitatibus, placeat minima, repudiandae pariatur vitae beatae. Aut ipsam qui cum!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam doloribus magnam, nobis non vel aut beatae assumenda eveniet rerum, incidunt perspiciatis est ipsa quia dicta illum velit consequuntur fugit molestias.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam doloribus magnam, nobis non vel aut beatae assumenda eveniet rerum, incidunt perspiciatis est ipsa quia dicta illum velit consequuntur fugit molestias.</p>
                 </div> 
                </div>      
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
            <div class="fb-page" data-href="https://www.facebook.com/MinKyalFm/?ref=hl" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
               <div class="fb-xfbml-parse-ignore">
                  <blockquote cite="https://www.facebook.com/MinKyalFm/?ref=hl"><a href="https://www.facebook.com/MinKyalFm/?ref=hl">МИҢ КЫЯЛ  FM радиосу</a></blockquote>
               </div>
            </div>
         </div>
         <div class="col-md-3">
        <a class="twitter-timeline" href="https://twitter.com/mk1000radio" data-widget-id="699897862478548992">Твиты от @mk1000radio</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
         </div>
         <div class="col-md-3">
<div id="ok_group_widget"></div>
<script>
!function (d, id, did, st) {
  var js = d.createElement("script");
  js.src = "https://connect.ok.ru/connect.js";
  js.onload = js.onreadystatechange = function () {
  if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
    if (!this.executed) {
      this.executed = true;
      setTimeout(function () {
        OK.CONNECT.insertGroupWidget(id,did,st);
      }, 0);
    }
  }}
  d.documentElement.appendChild(js);
}(document,"ok_group_widget","50582132228315","{width:263,height:500}");
</script>
         </div>
      </div>
   </div>
</section>
<!--/#services-->
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
</section>
<!--/#services-->
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
    $('.anons-carousel').slick({
   //        autoplay: true,
   //        autoplaySpeed: 2000,
       centerPadding: '0',
       dots: true,
       arrows: false,
       infinite: true,
       slidesToShow: 1,
       speed: 600,
       speed: 500,
   });
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
   fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@stop