@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')

<div class="container-fluid main">
   <img src="{{ asset('images/channels/minkiyal/main.png')}}" alt="" class="img-responsive innerfix">
   <div class="container inner">

      <div class="innermain">         
         <h4 class="slideRight">FM 103.7</h4>
         <h3 class="slideRight">Миң Кыял ФМ</h3>
         <div class="overlay slideRight"></div>
         <h5 class="slideRight">Сонун радио</h5>
         <div class="container others">
            <div class="jyshtyktar">
               <ul>
                  <li>
                     <span class="num">103.7</span>
                     <span class="name">Бишкек FM</span>
                  </li>                  
                  <li>
                     <span class="num">106.3</span>
                     <span class="name">Ош, Жалал-Абад FM</span>
                  </li>                  
                  <li>
                     <span class="num">102.2</span>
                     <span class="name">Баткен FM</span>
                  </li>                  
                  <li>
                     <span class="num">100.6</span>
                     <span class="name">Ысык-Көл FM</span>
                  </li>                  
                  <li>
                     <span class="num">105.7</span>
                     <span class="name">Талас FM</span>
                  </li>                  
                  <li>
                     <span class="num">107.7</span>
                     <span class="name">Нарын FM</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>

      <div class="innerimg">
         <img src="{{ asset('images/channels/min-kiyal.png')}}" class="img-responsive slideLeft" alt="">
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
</div>


@include('Front::channel.minkiyal.nav')
<div class="contaner-fluid ">
   
   <div class="container info">
         <div class="col-md-12">
               <h2>Фоторепортаждар</h2>
            <div id="allposts" class=" row">
               @if($photoGalleries)
                   @foreach($photoGalleries as $photoGallery)
                       <div class="col-md-4 col-sm-12 postshow">
                          <img src="{{ asset($photoGallery->thumbnail_big) }}" class="img-responsive" alt="">
                          <a href="{{ route('minkiyal.post', $photoGallery) }}"><h3>{{ $photoGallery->getName() }}</h3></a>
                       </div>
                   @endforeach
               @endif

               <div class="col-md-12">
                   <a class="show-btn loadMore" href="#">
                       дагы жүктөө
                   </a>
               </div>

            </div>
   

         </div>
   </div>
</div>

<div class="container contacts">

      <div class="row">
         <div class="col-md-12 xcontact">
            <h2>- КТРК  “Миң Кыял FM” радиосу -</h2>
         </div>
         <div class="col-md-4 address">
            <h3><i class="fa fa-map-marker"></i> Дареги</h3>
            <ul>
               <li>Кыргызстан, Бишкек  шаары</li>      
               <li>Жаш Гвардия бульвары, 59</li>
            </ul>
         </div>
         <div class="col-md-4 address">
            <h3><i class="fa fa-phone"></i> Байланыш телефон:</h3>
            <ul>
               <li>Түз эфир: 0312 65 37 14</li>               
               <li>sms-портал: 10 00</li>
            </ul>
         </div>
         <div class="col-md-4 address">
            <h3><i class="fa fa-envelope-o"></i>E-mail:</h3>
            <ul>
               <li>mkfmradio@gmail.com</li>               
               <li>www.facebook.com/MinKyalFm</li>
            </ul>
         </div>
      </div>

   
</div>

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
@stop