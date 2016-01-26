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
                  <div class="col-md-9 onenews">
                       <div class="panel panel-articles">
                          <div class="panel-heading">
                             <h3 class="panel-title">{{ trans('radiopages.Newslenta') }}</h3>
                          </div>
                          <div class="panel-body">
                             <div class="panel-body">
                             @if($postAll)
                             @foreach($postAll as $post)
                                <div class="media">
                                   <div class="media-left">
                                      <a href="{{ route('birinchi.news', $post) }}">
                                      <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                                      </a>
                                   </div>
                                   <div class="media-body">
                                      <div class="extra">
                                         <span class="e-datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                         <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                      </div>
                                      <a class="media-heading" href="{{ route('birinchi.news', $post) }}">{{ $post->getTitleRuOrKg() }}</a>

                                      <p>
                                         {!! mb_substr($post->getContent(), 0, 290, "UTF-8") !!}
                                      </p>
                                      
                                   </div>
                                </div>
                                @endforeach
                                @endif                     
                                <footer>
                                    <nav>
                                      <ul class="pagination">

                                        <li>
                                          <a href="{{ route('birinchi.allnews', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                        </li>
                                        <li>
                                          <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        </li>
                                        <li>
                                          <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </li>

                                        @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                                          <li>
                                            <a href="{{ route('birinchi.allnews', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">{{ $j++ }}</a>
                                          </li>
                                        @endfor

                                        <li>
                                          <a href="{{ route('birinchi.allnews', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                        </li>

                                      </ul>
                                    </nav>
                                </footer>
                             </div>
                          </div>
                       </div>
                  </div>

                  <div class="col-md-3 onenews">
                        <div class="panel ctg-panel media-ctg-panel">
                           <div class="panel-heading">
                              <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                           </div>
                           <div class="panel-body">
                              <div class="col-md-12">
                                 <div class="row">
                                   <ul class="list-group">
                                       @foreach($categories as $category)
                                       <li class="list-group-item">
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
        </div>
    </div>   
</div>

@stop
