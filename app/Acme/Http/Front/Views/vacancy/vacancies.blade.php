@extends('Front::layouts.defaultInit')
@section('title', "Вакансия")

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
                        Вакансии
                    </h3>
                </div>
            </div>
            <div class="panel panel-v-tab">
                <ul>                   
                    @foreach($vacancies as $vac)
                    <li class="vacancy-item">
                        <div class="media">
                           <div class="media-left"> 
                                <a href="{{ route('vacancy.job', [$vac, $lc]) }}"> 
                                    <img class="media-object"  src="{{ asset($vac->getFile()) }}"> 
                                </a> 
                            </div>
                           <div class="media-body media-middle media-width">
                                <a href="{{ route('vacancy.job', [$vac, $lc]) }}">
                                    <h5 class="media-heading">{{ $vac->getTitleOne() }}</h5>
                                </a>                               
                              <p>{{ $vac->getShortDesc() }}</p>
                           </div>
                           <div class="media-body media-middle media-width-two">
                              <span class="label label-v">{{ $vac->getWorktimeOne() }}</span>
                           </div>
                           <div class="media-body media-middle">
                              <span class="v-point"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $vac->getLocationOne() }}</span>
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
							<a href="{{ route('front.vacancy.vacancies', ['page' => 1]) }}" class="btn btn-default @if($vacancies->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
						</li>
						<li>
							<a href="{{ $vacancies->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
						</li>
						@for($i = 0, $j = 1; $i < $vacancies->total(); $i+=$perPage)
						<li class="@if(($j > $vacancies->currentPage()+3) || ($j < $vacancies->currentPage()-3)) hidden @endif">
							<a href="{{ route('front.vacancy.vacancies', ['page' => $j]) }}" class="btn btn-default @if($vacancies->currentPage() == $j) active @endif">
								{{ $j++ }}
							</a>
						</li>
						@endfor
						<li>
							<a href="{{ $vacancies->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</li>
						<li>
							<a href="{{ route('front.vacancy.vacancies', ['page' => ceil($vacancies->total()/$perPage)]) }}" class="btn btn-default @if($vacancies->currentPage() == ceil($vacancies->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
						</li>
					</ul>
				</nav>
			</footer>
        </div>
    </div>
@stop

@section('footerScript')
@stop