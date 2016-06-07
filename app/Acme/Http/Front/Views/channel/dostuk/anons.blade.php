@extends('Front::channel.dostuk.default')
@section('title', trans('radiopages.AboutDostuk'))
@section('styles')
@endsection
@section('content')
  @include('Front::channel.dostuk.navs')
  <div class="main-container">
    <!--/#about-->
    <section id="anonses">
      <div class="row">

        @if($dostuk)
          <div class="info">
         <div class="section-header" style="margin-top: 100px;">
            <h2 class="section-title text-center wow fadeInDown">Анонс</h2>
         </div>
            @foreach($dostuk as $key=> $row)
              <div class="col-md-4 col-sm-12 postshow">
                <a href="#" data-toggle="modal" data-target="#{{ $key+99 }}">
                  <img src="{{asset($row->thumbnail)}}" class="img-responsive" alt="">
                  <h3>{{$row->name}}</h3>
                </a>
              </div>
              <!-- Modal -->
              <div id="{{ $key+99 }}" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                      <h4 class="modal-title">{{$row->name}}</h4>
                    </div>
                    <div class="modal-body">
                      {!! $row->getDesc() !!}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            @endif
              <div class="col-md-12" style="margin-bottom: 10px">
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="{{ route('dostuk.anons', ['page' => 1]) }}" class="btn btn-default @if($dostuk->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                        </li>
                        <li>
                            <a href="{{ $dostuk->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        </li>
                        @for($i = 0, $j = 1; $i < $dostuk->total(); $i+=$perPage)
                            <li class="@if(($j > $dostuk->currentPage()+10) || ($j < $dostuk->currentPage()-10)) hidden @endif">
                                <a href="{{ route('dostuk.anons', ['page' => $j]) }}" class="btn btn-default @if($dostuk->currentPage() == $j) active @endif">
                                    {{ $j++ }}
                                </a>
                            </li>
                        @endfor
                        <li>
                            <a href="{{ $dostuk->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </li>
                        <li>
                            <a href="{{ route('dostuk.anons', ['page' => ceil($dostuk->total()/$perPage)]) }}" class="btn btn-default @if($dostuk->currentPage() == ceil($dostuk->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                        </li>

                    </ul>
                </nav>
            </div>
          </div>
      </div>      
    </section>
  </div>
@stop