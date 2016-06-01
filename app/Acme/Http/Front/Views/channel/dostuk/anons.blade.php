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
          </div>
      </div>
    </section>
  </div>
@stop