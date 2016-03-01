@extends('Front::channel.dostuk.default')
@section('title', $post->getTitleRuOrKg())
@section('styles')
@endsection
@section('content')
@include('Front::channel.dostuk.navs')

   <!--/header-->
   <div class="container" style="background: #fff;padding: 0px; margin: 20px auto;">
      <section id="services" style="padding: 0px;">
         <div class="container">
            <div class="row">
               <div class="top-left-block col-md-9">
                  <div>
                     <div class="panel-heading">
                        <h3 class="panel-title"> 
                         @if($dostukProjects) 
                          @foreach($dostukProjects as $dostukProject)                       
                           <a href="{{ route('dostuk.allnews') }}">{{ $dostukProject->first()->getName() }}</a>
                           @endforeach
                           @endif
                        </h3>
                     </div>
                     <div class="col-md-12">
                        <h2 style="margin: 0px 0px 10px 0px;font-size: 21px;">{{ $post->getTitleRuOrKg() }}</h2>
                        <div class="radioimg">
                           <img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">
                        </div>
                        <article>
                           {!! $post->getContent() !!}
                           <div class="carousel-post whitefix">
                              @if($images)
                              @foreach($images as $image)
                              <div class="col-md-4"> 
                                 <a href="#">
                                 <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                 </a>
                              </div>
                              @endforeach
                              @endif
                           </div>
                        </article>
                     </div>
                     <footer>
                        <a class="pull-right" href="{{ route('dostuk.allnews') }}">{{ trans('radiopages.Morenews') }}</a>
                     </footer>
                  </div>
               </div>
               <div class="top-right-block col-md-3">
                  <div class="panel ctg-panel media-ctg-panel">
                     <div class="panel-heading">
                        <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                     </div>
                     <div class="panel-body">
                        <div class="col-md-12">
                           <div class="row">
                              <ul class="list-group">
                                 @if($dostukProjects) 
                                 @foreach($dostukProjects as $key=> $project)
                                 <li class="list-group-item">
                                    <a href="{{ route('dostuk.project', $project) }}">{{ $project->getName() }}</a>
                                 </li>
                                 @endforeach
                                 @endif
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.container-->
      </section>
   </div>
   @stop
   @section('footerscript2')

   <script src="{{ asset('js/landing/mousescroll.js') }}"></script>
   <script src="{{ asset('js/landing/smoothscroll.js') }}"></script>
   <script src="{{ asset('js/landing/jquery.prettyPhoto.js') }}"></script>
   <script src="{{ asset('js/landing/jquery.isotope.min.js') }}"></script>
   <script src="{{ asset('js/landing/jquery.inview.min.js') }}"></script>
   <script src="{{ asset('js/landing/fixed.js') }}"></script>

   @stop