@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
<nav id="main-menu" class="navbar navbar-minheader container-fluid">
   <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">
            <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">
            <h4 class="minkiyal_brand">Миң кыял FM</h4>
         </a>
         <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Башкы барак" class="red-tooltip"><i class="fa fa-home"></i></a></li>
            <li><a href="#report" data-toggle="tooltip" data-placement="bottom" title="Сүрөтбаяндар" class="red-tooltip"><i class="fa fa-picture-o"></i></a></li>
            <li><a href="#about" data-toggle="tooltip" data-placement="bottom" title="Биз жөнүндө" class="red-tooltip"><i class="fa fa-info-circle"></i></a></li>
            <li><a href="{{route('minkiyal.djs')}}" data-toggle="tooltip" data-placement="bottom" title="Диджейлер" class="red-tooltip"><i class="fa fa-microphone"></i></a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <div class="online">
               <h3><i class="fa fa-microphone"></i>Түз эфир</h3>
               <object width="65" height="40" data="http://www.ktrk.kg/online/uppod.swf">
                  <param name="bgcolor" value="#ffffff" />
                  <param name="allowFullScreen" value="false" />
                  <param name="allowScriptAccess" value="false" />
                  <param name="audio" value="http://www.ktrk.kg/online/uppod.swf" />
                  <param name="flashvars" value="comment=KTRK&amp;st=03AEEZykN3Q3Q3QH3zkOk1mwXRWNvz3b1XAxYTtj1mzC5kA2uyb1kOk1mwXRWNvhzdwf9vwjzC5k=jQZi6jNf1kOk1mwXRWHNXzBGDY31X=jOkZ2sN6HsQfzC5kev0kttj1vL2NXzC5k1sQE3Q2GkTCGfFdGJTCHwXpvQXeWNhHm0X1hsNkTWwWTSUhTd0kNtj1JTWwf9vwnY31DX1CYLex5W=jaktjR1i6W0kbSal1C0V9Rv1XAuaTtj1tzC5kb42Qi63Gktj1ozfUrd&amp;file=http://85.113.29.232:8081" />
               </object>
            </div>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </div>
</nav>
<div class="container minkiyal_news">
   <div class="row">
    <div class="col-md-12">
            <div class="row oneallnews" style="font-family: 'Roboto Regular';">
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">Баардык жаңылыктар</h3>
                        </br>
                     </div>
                     <div class="col-md-12">
                     @if($postAll)
                     @foreach($postAll as $post)
                     <div class="media blockallnews">
                        <div class="media-left">
                           <a href="{{ route('minkiyal.news', $post) }}">
                              <img class="media-object" src="{{ asset($post->getFile()) }}" alt="...">
                           </a>
                        </div>
                        <div class="media-body">
                           <div class="extra">
                              <span class="datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                              <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                           </div>
                           <a class="media-heading " href="{{ route('minkiyal.news', $post) }}">{{ $post->getTitle() }}</a>
                           <span class="mb_substr">
                              {!! mb_substr($post->getContentKg(), 0, 290, "UTF-8") !!}
                           </span>
                        </div>
                     </div>
                     @endforeach
                     @endif
                     <footer class="allnewsfooter">
                        <nav>
                           <ul class="pagination">
                              <li>
                                 <a href="{{ route('minkiyal.allnews', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                              </li>
                              <li>
                                 <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                              </li>
                              <li>
                                 <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </li>
                              @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                              <li>
                                 <a href="{{ route('minkiyal.allnews', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">{{ $j++ }}</a>
                              </li>
                              @endfor
                              <li>
                                 <a href="{{ route('minkiyal.allnews', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                              </li>
                           </ul>
                        </nav>
                     </footer>
                     </div>                   
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row popular">
                           <div class="col-md-12">
                              <h3 class="title">Көп окумдуу</h3>
                              </br>
                           </div>                     
                           <div class="col-md-12"> 
                                                              
                           </div>                    
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="title">Уктуруулар</h3>
                     </div>                     
                     <div class="col-md-12 ctg-panel">                          
                        <ul class="list-group">
    
                        </ul>                          
                     </div>                    
                  </div>
               </div>   
            </div>
    </div>
   </div>
</div>
@stop
@section('footerScript')
@stop