@extends('Front::layouts.defaultTest')
@section('title', trans('site.Galleries').' | КТРК')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
@stop

@section('content') 
    
    <div class="section light-section gallery-section inner-gallery-section">
        <div class="container">
            <div class="row">
                <div class="section gallery-right">
                    <div class="section-title">
                        <h4>
                            {{trans('site.Galleries')}}
                        </h4>
                    </div>
                    <div class="section-body">
                        <div class="row">
                            @if($galleries)
                                @foreach($galleries as $photoGallery)
                                    <div class="col-md-4">
                                        <a class="gallery-item" href="{{ route('front.gallery', $photoGallery) }}">
                                            <figure>
                                                <img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/>
                                                <figcaption>
                                                    <div class="post-extra clearfix">
                                                        <span class="post-date">
                                                            {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }} @if(date('Y') != $photoGallery->getYear()) {{ $photoGallery->getYear() }} @endif, {{ $photoGallery->getTime()}}
                                                        </span>
                                                        <span class="post-views">                                                        
                                                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>
                                                            {{ $photoGallery->viewed }}
                                                        </span>                                                    
                                                    </div>
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
                                                    <span class="gallery-title">
                                                        {{ $photoGallery->getName() }}
                                                    </span>
                                                </figcaption>
                                            </figure>
                                        </a>    
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <footer>
                            <nav class="pagination-nav">
                                <ul class="pagination">
                                    <li class="pagination-auto">
                                        <a href="{{ route('front.gallery.galleries', ['page' => 1]) }}" class="@if($galleries->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ $galleries->previousPageUrl() }}" class="slick-arrow arrow-prev @if($galleries->currentPage() == 1) disabled @endif">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
                                        </a>
                                    </li>

                                    @if($galleries->currentPage() < 3)
                                        @for($i = 1; $i <= 5; $i++)
                                            <li>
                                                <a href="{{ route('front.gallery.galleries', ['page' => $i]) }}" class="@if($galleries->currentPage() == $i) active @endif">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @elseif(ceil($galleries->total()/$perPage) - $galleries->currentPage() < 2)
                                        @for($i = ceil($galleries->total()/$perPage)-4; $i <= ceil($galleries->total()/$perPage); $i++)
                                            <li>
                                                <a href="{{ route('front.gallery.galleries', ['page' => $i]) }}" class="@if($galleries->currentPage() == $i) active @endif">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @else
                                        @for($i = $galleries->currentPage()-2; $i <= $galleries->currentPage()+2; $i++)
                                            <li>
                                                <a href="{{ route('front.gallery.galleries', ['page' => $i]) }}" class="@if($galleries->currentPage() == $i) active @endif">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor                                         
                                    @endif

                                    <li>
                                        <a href="{{ $galleries->nextPageUrl() }}" class="slick-arrow arrow-next @if($galleries->currentPage() == ceil($galleries->total()/$perPage)) disabled @endif">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>
                                        </a>
                                    </li>

                                    <li class="pagination-auto">
                                        <a href="{{ route('front.gallery.galleries', ['page' => ceil($galleries->total()/$perPage)]) }}" class="@if($galleries->currentPage() == ceil($galleries->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                    </li>

                                </ul>
                            </nav>
                        </footer>   
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('footerScript')

@endsection
