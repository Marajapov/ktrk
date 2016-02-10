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
         <h5 class="slideRight">Кыялдар орундалат</h5>
            <footer>
               Бишкек FM 103.7, Ош, Жалал-Абад FM 106.3, Баткен FM 102.2, Ысык-Көл FM 100.6, Талас FM 105.7, Нарын FM 107.7
            </footer>
      </div>
      <div class="innerimg">
         <img src="{{ asset('images/channels/min-kiyal.png')}}" class="img-responsive slideLeft" alt="">
      </div>

   </div>
</div>

@include('Front::channel.minkiyal.nav')
<div class="contaner-fluid ">
   
   <div class="container info">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-4 sm-12 postshow slideUp">
                  <img src="{{asset('images/channels/minkiyal/12.png')}}" class="img-responsive" alt="">
                  <h3>Анжелика жаны ыр тартуулады</h3>
               </div>
               <div class="col-md-4 sm-12 postshow">
                  <img src="{{asset('images/channels/minkiyal/kalykov.jpg')}}" class="img-responsive" alt="">
                  <h3>Гүлжигит Калыков Нарын жергесине концерт койду. </h3>
               </div>
               <div class="col-md-4 sm-12 postshow">
                  <img src="{{asset('images/channels/minkiyal/ayana.jpg')}}" class="img-responsive" alt="">
                  <h3>Аяна Касымова интернетти дагы дүңгүрөттү.</h3>
               </div>
            </div>
            <div class="row">
               <div class="more">
                  <a href="#"><h3>Баардык Фоторепортаждар</h3></a>
               </div>
            </div>
         </div>
    
   </div>
</div>

<div class="container-fluid">
      <img src="{{ asset('images/channels/minkiyal/winter.jpg')}}" alt="">
</div>

@stop