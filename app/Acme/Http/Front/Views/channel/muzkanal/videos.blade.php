@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Clips'))
@section('styles')
@endsection
@section('content')
    <body class="music">
    @include('Front::channel.muzkanal.nav')
    <!-- Main slider -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb20">
                <div class="row m-blocks topvideos videostyle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>{{ trans('radiopages.Clips') }}</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="clearfix">
                                @if($MediaNew)
                                    @foreach($MediaNew as $row)
                                    <div class="m-block all-block">
                                        <a class="m-thumb all-thumb" href="{{ route('muzkanal.video', $row)}}">
                                            <img src="http://img.youtube.com/vi/{{ $row->getUrl()}}/mqdefault.jpg" alt="{{ $row->getName() }}"/>
                                        </a>
                                        <div class="m-extra all-extra clearfix">                                          
                                            @if($row->program)
                                                <a class="m-project" href="{{route('muzkanal.project', $row->hasProject)}}">
                                                    {{$row->hasProject->getNameOne()}}
                                                </a>
                                            @endif                                 
                                            @if($row->exclusive)
                                                <div class="m-hit all-hit">Эксклюзив</div>
                                            @endif
                                            <div class="m-date">
                                                {{ $row->getDay() }} {{ $row->getMonthRu() }}, {{ $row->getYear() }}
                                            </div>
                                            <div class="m-view all-view">
                                                <svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                    <g>
                                                        <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                    </g>
                                                </svg>
                                                {{ $row->getViewed() }}
                                            </div>
                                        </div>
                                        <div class="m-title all-title">
                                            <a href="{{ route('muzkanal.video', $row)}}">
                                                {{ $row->getName() }}
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                            <nav class="pagination-nav clearfix">
                                <ul class="pagination">
                                    <li class="pagination-auto">
                                        <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="@if($MediaNew->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ $MediaNew->previousPageUrl() }}" class="slick-arrow arrow-prev @if($MediaNew->currentPage() == 1) disabled @endif">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
                                        </a>
                                    </li>

                                    @if($MediaNew->lastPage() > 4)
                                        @if($MediaNew->currentPage() < 3)
                                            @for($i = 1; $i <= 5; $i++)
                                                <li>
                                                    <a href="{{ route('muzkanal.videos', ['page' => $i]) }}" class="@if($MediaNew->currentPage() == $i) active @endif">
                                                        {{ $i }}
                                                    </a>
                                                </li>
                                            @endfor
                                        @elseif(ceil($MediaNew->total()/$perPage) - $MediaNew->currentPage() < 2)
                                            @for($i = ceil($MediaNew->total()/$perPage)-4; $i <= ceil($MediaNew->total()/$perPage); $i++)
                                                <li>
                                                    <a href="{{ route('muzkanal.videos', ['page' => $i]) }}" class="@if($MediaNew->currentPage() == $i) active @endif">
                                                        {{ $i }}
                                                    </a>
                                                </li>
                                            @endfor
                                        @else
                                            @for($i = $MediaNew->currentPage()-2; $i <= $MediaNew->currentPage()+2; $i++)
                                                <li>
                                                    <a href="{{ route('muzkanal.videos', ['page' => $i]) }}" class="@if($MediaNew->currentPage() == $i) active @endif">
                                                        {{ $i }}
                                                    </a>
                                                </li>
                                            @endfor                                         
                                        @endif
                                    @else
                                        @for($i = 1; $i <= $MediaNew->lastPage(); $i++)
                                            <li>
                                                <a href="{{ route('muzkanal.videos', ['page' => $i]) }}" class="@if($MediaNew->currentPage() == $i) active @endif">
                                                    {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    @endif                                    

                                    <li>
                                        <a href="{{ $MediaNew->nextPageUrl() }}" class="slick-arrow arrow-next @if($MediaNew->currentPage() == ceil($MediaNew->total()/$perPage)) disabled @endif">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>
                                        </a>
                                    </li>

                                    <li class="pagination-auto">
                                        <a href="{{ route('muzkanal.videos', ['page' => ceil($MediaNew->total()/$perPage)]) }}" class="@if($MediaNew->currentPage() == ceil($MediaNew->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb20">
                <div class="row topvideos videostyle">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @if($musicProjects)
                                @foreach($musicProjects as $row)
                                    <div class="panel-subbody">
                                        <div class="panel-subheading clearfix">
                                            <span>
                                                <a href="{{route('muzkanal.project', $row)}}">
                                                    {{ $row->getNameOne() }}
                                                </a>
                                            </span>
                                        </div>
                                        <div class="topclips clearfix">
                                            @if($row->medias)
                                                @foreach($row->medias->take(3) as $row1)
                                                <div class="m-block pr-block">
                                                    <a class="m-thumb pr-thumb" href="{{ route('muzkanal.video', $row1)}}">
                                                        <img src="http://img.youtube.com/vi/{{ $row1->getUrl() }}/mqdefault.jpg" alt=""/>
                                                    </a>
                                                    <div class="m-desc pr-desc">
                                                        <div class="m-extra pr-extra clearfix">
                                                            @if($row1->exclusive == 1)
                                                                <div class="m-hit pr-hit">Эксклюзив!</div>
                                                            @endif
                                                            <div class="m-view pr-view">
                                                                <svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                    </g>
                                                                </svg>
                                                                {{ $row1->getViewed() }}
                                                            </div>
                                                        </div>
                                                        <div class="m-title pr-title">
                                                            <a href="{{ route('muzkanal.video', $row1)}}">
                                                                {{ $row1->getName() }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif
                                        </div>   
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footerScript')
@stop