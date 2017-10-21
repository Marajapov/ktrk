@extends('Front::layouts.defaultTest')
@section('title', 'Архив | Видеопортал | КТРК')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
@endsection

@section('content')

    <div class="section light-section media-section">

        <div class="container">
            <div class="row">
                <div class="section archive-section">
                    <div class="section-title">
                        
                        <h4>
                            <a href="{{route('front.media.index')}}">
                                Видеопортал
                            </a>
                            <span class="divider"><i class="fa fa-circle"></i></span>
                            <span>Архив</span>
                        </h4>                   
                    </div>

                    @foreach($activeLetters as $letter)

                        <div class="section-desc">
                            {{ mb_strtoupper($letter) }}
                        </div>

                        <div class="section-body">
                            <ul class="archive-list">
                                @foreach($projectList as $project)
                                    @if(mb_strtolower(mb_substr($project->getNameOne(), 0, 1)) == $letter)
                                        <li>
                                            <a href="{{route('front.media.project', $project)}}">
                                                {{$project->getNameOne()}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                    @endforeach

                </div>
                
            </div>
        </div>
    </div>   

@stop
