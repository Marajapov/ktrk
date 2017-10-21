@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Photos'))
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')

	<!-- Main slider -->
	<div class="container">
		<div class="row imgmuz mb20 g-blocks">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title"><span>{{ trans('site.Galleries') }}</span></h3>
				</div>
			 	<div class="panel-body">
					<div class="clearfix">
						@if($photoGalleries != null)
							@foreach($photoGalleries as $photoGallery)
								<div class="m-block g-block">
									<a class="m-thumb g-thumb" href="{{ route('muzkanal.photos', $photoGallery) }}">
										<img src="{{ asset($photoGallery->thumbnail_big) }}" />
										<svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
	                                        <g>
	                                            <g transform="translate(-428.000000, -532.000000)">
	                                                <g transform="translate(428.000000, 532.000000)">
	                                                    <g>
	                                                        <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
	                                                            c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
	                                                            C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
	                                                            c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
	                                                            L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
	                                                            C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
	                                                            C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
	                                                            C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
	                                                    </g>
	                                                </g>
	                                            </g>
	                                        </g>
	                                    </svg>
									</a>
									<div class="m-extra g-extra">
										<div class="m-date-view clearfix">
											<div class="m-date">
	                                            {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getYear() }}
	                                        </div>
	                                        <div class="m-view all-view">
	                                            <svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
	                                                <g>
	                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
	                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
	                                                </g>
	                                            </svg>
	                                            {{ $photoGallery->viewed }}
	                                        </div>
										</div>
									</div>
									<div class="m-title g-title">
										<a href="{{ route('muzkanal.photos', $photoGallery) }}">
											{{ $photoGallery->getName() }}
										</a>
									</div>
								</div>						
							@endforeach
						@endif		
					</div>			
                    <nav class="pagination-nav clearfix">
                        <ul class="pagination">
                            <li class="pagination-auto">
                                <a href="{{ route('muzkanal.allphotos', ['page' => 1]) }}" class="@if($photoGalleries->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                            </li>
                            <li>
                                <a href="{{ $photoGalleries->previousPageUrl() }}" class="slick-arrow arrow-prev @if($photoGalleries->currentPage() == 1) disabled @endif">
                                    <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
                                </a>
                            </li>

                            @if($photoGalleries->lastPage() > 4)
                                @if($photoGalleries->currentPage() < 3)
                                    @for($i = 1; $i <= 5; $i++)
                                        <li>
                                            <a href="{{ route('muzkanal.allphotos', ['page' => $i]) }}" class="@if($photoGalleries->currentPage() == $i) active @endif">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endfor
                                @elseif(ceil($photoGalleries->total()/$perPage) - $photoGalleries->currentPage() < 2)
                                    @for($i = ceil($photoGalleries->total()/$perPage)-4; $i <= ceil($photoGalleries->total()/$perPage); $i++)
                                        <li>
                                            <a href="{{ route('muzkanal.allphotos', ['page' => $i]) }}" class="@if($photoGalleries->currentPage() == $i) active @endif">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endfor
                                @else
                                    @for($i = $photoGalleries->currentPage()-2; $i <= $photoGalleries->currentPage()+2; $i++)
                                        <li>
                                            <a href="{{ route('muzkanal.allphotos', ['page' => $i]) }}" class="@if($photoGalleries->currentPage() == $i) active @endif">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endfor                                         
                                @endif
                            @else
                                @for($i = 1; $i <= $photoGalleries->lastPage(); $i++)
                                    <li>
                                        <a href="{{ route('muzkanal.allphotos', ['page' => $i]) }}" class="@if($photoGalleries->currentPage() == $i) active @endif">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endfor
                            @endif                                    

                            <li>
                                <a href="{{ $photoGalleries->nextPageUrl() }}" class="slick-arrow arrow-next @if($photoGalleries->currentPage() == ceil($photoGalleries->total()/$perPage)) disabled @endif">
                                    <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>
                                </a>
                            </li>

                            <li class="pagination-auto">
                                <a href="{{ route('muzkanal.allphotos', ['page' => ceil($photoGalleries->total()/$perPage)]) }}" class="@if($photoGalleries->currentPage() == ceil($photoGalleries->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                            </li>

                        </ul>
                    </nav>
			 	</div>
			</div>
		</div>
	</div>

@stop