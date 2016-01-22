@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">
   @include('Front::channel.birinchi.nav')
   <div class="container homepage">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
               <div class="hometreble">               
                     <div class="col-md-12">
                        <h3 class="title">{{ trans('radiopages.Mainnews') }}</h3>
                     </div>
                     @if($generalPosts)
                     @foreach($generalPosts as $post)
                     <div class="blocks col-md-4 col-sm-4 col-xs-12">
                        <article>
                           <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                              <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                              <div class="card-info">                            
                           <a class="category" href="{{ route('front.category', $post->category) }}">
                           {{ $post->category('category_id')->first()->getTitle() }}
                           </a>                           
                           <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                           </div>
                           </a>
                           <h3 class="name headline">
                              <a href="{{ route('birinchi.news', $post) }}" title="">
                              {{ $post->getTitleRuOrKg() }}
                              </a>
                           </h3>
                        </article>
                     </div>
                     @endforeach
                     @endif              
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="row">
               <div class="homeleftcategory">
                  <div class="col-md-12">
                     <h3 class="title">Баннер</h3>
                  </div>
                  <div class="banner text-center">
                     <a href="#" class="text-center">
                     <img style="width: 90%; height: 250px;" src="{{ asset('images/banner_240x400.png') }}" alt=""/>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
               <div class="col-md-6 homenews"> 
                  <div class="row">              
                        <div class="col-md-12">
                           <h3 class="title">Экономика</h3>
                        </div>
                        @if($allPost)
                        @foreach($allPost as $post)
                        <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                           <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                 <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                 <div class="card-info"> 
                                 <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>                           
                                    <a class="category" href="{{ route('front.category', $post->category) }}">
                                    {{ $post->category('category_id')->first()->getTitle() }}
                                    </a>                           
                                    
                                 </div>
                              </a>
                              <h3 class="name headline">
                                 <a href="{{ route('birinchi.news', $post) }}" title="">
                                 {{ $post->getTitleRuOrKg() }}
                                 </a>
                              </h3>
                           </article>
                        </div>
                        @endforeach
                        @endif              
                  </div>
               </div>
               <div class="col-md-6 homenews">
                  <div class="row">               
                        <div class="col-md-12">
                           <h3 class="title">Илим жана билим</h3>
                        </div>
                        @if($allPost)
                        @foreach($allPost as $post)
                        <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                           <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                 <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                 <div class="card-info"> 
                                 <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>                           
                                    <a class="category" href="{{ route('front.category', $post->category) }}">
                                    {{ $post->category('category_id')->first()->getTitle() }}
                                    </a>                           
                                    
                                 </div>
                              </a>
                              <h3 class="name headline">
                                 <a href="{{ route('birinchi.news', $post) }}" title="">
                                 {{ $post->getTitleRuOrKg() }}
                                 </a>
                              </h3>
                           </article>
                        </div>
                        @endforeach
                        @endif              
                  </div>
               </div>

                <div class="col-md-12 test">
                   <div class="row">               
                        <div class="col-md-12">
                           <h3 class="title">Передачи</h3>
                        </div>
                        @if($allPost)
                        @foreach($allPost as $post)
                        <div class="blocknews col-md-3 col-sm-4 col-xs-12">
                           <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                 <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                 <div class="card-info"> 
                                 <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>                           
                                    <a class="category" href="{{ route('front.category', $post->category) }}">
                                    {{ $post->category('category_id')->first()->getTitle() }}
                                    </a>                           
                                    
                                 </div>
                              </a>
                              <h3 class="name headline">
                                 <a href="{{ route('birinchi.news', $post) }}" title="">
                                 {{ $post->getTitleRuOrKg() }}
                                 </a>
                              </h3>
                           </article>
                        </div>
                        @endforeach
                        @endif              
                  </div>
               </div>

               <div class="col-md-6 homenews"> 
                  <div class="row">              
                        <div class="col-md-12">
                           <h3 class="title">Экономика</h3>
                        </div>
                        @if($allPost)
                        @foreach($allPost as $post)
                        <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                           <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                 <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                 <div class="card-info"> 
                                 <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>                           
                                    <a class="category" href="{{ route('front.category', $post->category) }}">
                                    {{ $post->category('category_id')->first()->getTitle() }}
                                    </a>                           
                                    
                                 </div>
                              </a>
                              <h3 class="name headline">
                                 <a href="{{ route('birinchi.news', $post) }}" title="">
                                 {{ $post->getTitleRuOrKg() }}
                                 </a>
                              </h3>
                           </article>
                        </div>
                        @endforeach
                        @endif              
                  </div>
               </div>
               <div class="col-md-6 homenews">
                  <div class="row">               
                        <div class="col-md-12">
                           <h3 class="title">Илим жана билим</h3>
                        </div>
                        @if($allPost)
                        @foreach($allPost as $post)
                        <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                           <article>
                              <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                 <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                 <div class="card-info"> 
                                 <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>                           
                                    <a class="category" href="{{ route('front.category', $post->category) }}">
                                    {{ $post->category('category_id')->first()->getTitle() }}
                                    </a>                           
                                    
                                 </div>
                              </a>
                              <h3 class="name headline">
                                 <a href="{{ route('birinchi.news', $post) }}" title="">
                                 {{ $post->getTitleRuOrKg() }}
                                 </a>
                              </h3>
                           </article>
                        </div>
                        @endforeach
                        @endif              
                  </div>
               </div>

      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title">{{ trans('radiopages.Photos') }}</h3>
               </div>
               @if($photoGalleries)
               @foreach($photoGalleries as $photoGallery)
               <div class="col-md-4">
                  <a href="{{ route('birinchi.photos', $photoGallery) }}" class="photo-img">
                  <img src="{{ asset($photoGallery->status) }}" alt="" />
                  <span class="photo-overlay"></span>
                  </a>                    
                  <div class="photo-info">
                     <div class="media">
                        <div class="media-left media-middle">
                           <div class="extraone">                                              
                              <span class="e-datetime"><i class="fa  fa-calendar"></i>  {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                           </div>
                           <a href="{{ route('birinchi.photos', $photoGallery) }}">
                           <i class="fa fa-camera photo-icon"></i>
                           </a>
                        </div>
                        <div class="media-body media-middle">
                           <h4 class="media-heading photo-name"><a href="{{route('birinchi.photos', $photoGallery)}}">{{ $photoGallery->getName() }}</a></h4>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               @endif
               <div class="col-md-12">
                  <footer>
                     <a href="{{ route('birinchi.allphotos') }}">
                     <span>{{ trans('radiopages.Allphotos') }}<i class="fa fa-arrow-circle-right"></i></span>
                     </a>
                  </footer>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop