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
         <div class="col-md-12">
            <h3 class="title">{{ trans('radiopages.Peredachi') }}</h3>
         </div>
         @if($birinchiProjects) 
         @foreach($birinchiProjects as $project)
         @foreach($project->oneprogram()->get() as $post)
         <div class="allBroadcast col-md-4 col-sm-6 col-xs-12">
            <span class="category">
               <a href="#">{{ $project->getName() }}</a>
            </span>
            <span class="date">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
            <article>
               <a href="{{ route('birinchi.broadcast', $post) }}" class="image-link">
                  <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">       
               </a>
               <h2 class="headline">
                  <a href="{{ route('birinchi.broadcast', $post) }}" title="">
                  {{ $post->getTitleRuOrKg() }}
                  </a>
               </h2>
            </article>
         </div>
         @endforeach
         @endforeach
         @endif
      </div>
   </div>
</div>
@stop
