@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">

   @include('Front::channel.birinchi.nav')

  <div class="container">
       <div class="row">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                </div>
                <div class="panel-body">
                    <div class="row specpad">
                      @if($birinchiProjects) 
                      @foreach($birinchiProjects as $project)
                      @foreach($project->oneprogram()->get() as $post)
                         <div class="blocks col-md-4 col-sm-6 col-xs-12">
                            <span class="cart-title category">
                            <a href="#">{{ $project->getName() }}</a>
                            </span>
                            <article>
                               <a href="{{ route('birinchi.broadcast', $post) }}" class="image-link">
                               <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                               <span class="date">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                               </a>
                               <h2 class="name headline">
                                  <a href="#" title="">
                                  {{ $post->getTitleRuOrKg() }}
                                  </a>
                               </h2>
                               <div class="description">
                                  <p>{!! substr($post->getContent(),0,205) !!}</p>
                               </div>
                            </article>
                         </div>
                      @endforeach
                      @endforeach
                      @endif
                    </div>
                </div>

            </div>
        </div> 
</div>
@stop