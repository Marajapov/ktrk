@extends('Front::layouts.defaultInit')
@section('title', "Новости")

@section('styles')    
    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vertex.css') }}">
@endsection

@section('content')
    <div id="vacansy" class="container main-wrapper">
        <div class="row">
            <div class="panel panel-v">
                <div class="panel-heading">
                    <h3 class="panel-title"> 
                        Новости
                    </h3>
                </div>
            </div>
            <div class="panel panel-v-tab">
                <ul>                 
                    @foreach($news as $vnews)
					<li class="article-item">
                        <div class="media">
                           <div class="media-left"> 
                                <a href="{{ route('vacancy.post', [$vnews, $lc]) }}"> 
                                    <img class="media-object"  src="{{  asset($vnews->thumbnail) }}"> 
                                </a> 
                            </div>
                           <div class="media-body media-middle">
                                <div class="card-info">
                                    <span class="date ">{{ $vnews->getDay() }} {{ $vnews->getMonthRu() }}, {{ $vnews->getYear() }}</span>
                                    <span class="view"><i class="fa fa-eye"></i>{{ $vnews->getViewed() }}</span>
                                </div>
                                <a href="{{ route('vacancy.post', [$vnews, $lc]) }}">
                                    <h5 class="media-heading">{{ $vnews->getTitleOne() }}</h5>
                                </a>
                           </div>
                        </div>
                   </li>
                    @endforeach
                </ul>
            </div>
			<footer class="panel-v-footer">
				<nav>
					<ul class="pagination">
						<li>
							<a href="{{ route('front.vacancy.news', ['page' => 1]) }}" class="btn btn-default @if($news->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
						</li>
						<li>
							<a href="{{ $news->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
						</li>
						@for($i = 0, $j = 1; $i < $news->total(); $i+=$perPage)
						<li class="@if(($j > $news->currentPage()+3) || ($j < $news->currentPage()-3)) hidden @endif">
							<a href="{{ route('front.vacancy.news', ['page' => $j]) }}" class="btn btn-default @if($news->currentPage() == $j) active @endif">
								{{ $j++ }}
							</a>
						</li>
						@endfor
						<li>
							<a href="{{ $news->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</li>
						<li>
							<a href="{{ route('front.vacancy.news', ['page' => ceil($news->total()/$perPage)]) }}" class="btn btn-default @if($news->currentPage() == ceil($news->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
						</li>
					</ul>
				</nav>
			</footer>
        </div>
    </div>
@stop

@section('footerScript')
@stop