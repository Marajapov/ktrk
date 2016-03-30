@extends('Front::channel.kyrgyzradio.default')
@section('title', 'Анонс')
@section('styles')
@endsection
@section('content')
@include('Front::channel.kyrgyzradio.nav')
<div id="allphotos">
   <div class="container">
      <div class="row">
         <div class="section-header2">
            <h2 class="section-title text-center wow fadeInDown" style="margin-bottom: 30px">Анонс</h2>
         </div>
         <div class="row">
            <div class="col-md-12">
         @if($kyrgyzradiotop)
         <div class="info">
            @foreach($kyrgyzradiotop as $key=> $row)
            <div class="col-md-4 col-sm-12 postshow">
               <a href="{{ route('kyrgyzradio.anonses') }}" data-toggle="modal" data-target="">
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
      </div>
   </div>
</div>
@stop
@section('footerScript')

@stop