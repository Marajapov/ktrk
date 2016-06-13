@extends('Front::channel.madaniyat.default')
@section('title',  $project->getNameOne())
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/radios.css') }}">
@endsection
@section('content')
<body class="madaniyat">
   @include('Front::channel.madaniyat.nav')
   <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="panel panel-default">
              <div class="panel-body no-padding panel-allnews">
                  <div class="col-md-9 no-padding ">
                    <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                          <h3 class="panel-title"><span>{{ $project->getNameOne() }}</span></h3>
                        </div>
                          <div class="panel-show ">
                            <div class="col-md-12 show-block">
                              <div class="media" style="margin-top: 20px;">
                                <div class="media-left media-top">
                                  <a>
                                    <img class="media-object" src="@if(!($project->getFile())) {{ asset('images/project_default.png') }} @else {{ asset($project->getFile()) }} @endif" alt="{{ $project->getNameOne() }}">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="show-title media-heading">{{ $project->getNameOne() }}</h4>
                                  <p class="show-desc">
                                    {{ $project->description }}
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="show-block">
                            <div class="panel-heading madaniyatcolor"  style="display: inline-block; width: 100%;">
                              <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                            </div>
                            <div class="col-md-12 panel-body">
                              @if($relatedNews)
                              @foreach($relatedNews as $post)
                              <div class="media blockallnews">
                                <div class="media-left">
                                  <a href="{{ route('birinchi.show', $post) }}">
                                    <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <div class="extra">
                                    <span class="datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                    <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                  </div>
                                  <a class="media-heading" href="{{ route('birinchi.show', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
                                  <span class="mb_substr">
                                    {!! mb_substr($post->getContent(), 0, 250, "UTF-8") !!}
                                  </span>
                                </div>
                              </div>
                              @endforeach
                              @endif
                              <footer>
                                <a href="{{ route('birinchi.projects') }}">{{ trans('radiopages.Morenews') }}</a>
                              </footer>
                            </div>
                          </div>
                    </div>
                  </div>                  
                  <div class="col-md-3 no-padding">
                      <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                          <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                        </div>
                        <div class="panel-body ctg-panel">
                          <ul class="list-group">
                             @if($birinchiProjects) 
                               @foreach($birinchiProjects as $project_one)
                                 <li class="list-group-item">
                                    <a href="{{ route('madaniyat.projects', $project_one) }}">{{ $project_one->getName() }}</a>
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
      </div>
   </div>
   @stop
   @section('footerscript2')  
   @stop