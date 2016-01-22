@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">

   @include('Front::channel.birinchi.nav')

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-9">
                  <div class="row">
                     <div class="panel">
                        <div class="panel-heading">
                           <h3 class="panel-title"><span>{{ $post->category('category_id')->first()->getTitle() }}</span></h3>
                        </div>
                        <div class="panel-body">                     
                              <h2>{{ $post->getTitleRuOrKg() }}</h2>
                              <div class="muzimg">
                                 <img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">
                              </div>
                              <article>
                                 {!! $post->getContent() !!}
                              </article>                       
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="row">
                     <div class="col-md-12">
                        <h3>{{ trans('radiopages.Categories') }}</h3>
                     </div>                     
                  <div class="col-md-12">            
                        <ul>
                           @foreach($categories as $category)
                           <li>
                              <a href="{{ route('front.category', $category) }}">{{ $category->getTitle() }}</a>
                           </li>
                           @endforeach
                        </ul>             
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
@section('footerscript2')
<script src="{{ asset('js/audio/audioplayer.js') }}"></script>
<script>
   $(function ()
   {
       $('audio').audioPlayer();
   });
</script>
@stop