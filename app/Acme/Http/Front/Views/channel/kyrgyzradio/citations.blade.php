@extends('Front::channel.kyrgyzradio.default')
@section('title', "Кыргыз Радиосу")
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta property="og:url"                content="{{ Request::url()}}" />
<meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
<meta property="og:type"               content="article" />
@if($quote)
@foreach($quote->take(1) as $top)
<meta property="og:title"              content="{{ $top->getAuthor()}}" />
<meta property="og:description"        content="{{ $top->getDesc() }}" />
<meta property="og:image"              content="{{ asset($top->file) }}" />
@endforeach
@endif

@endsection
@section('content')
  @include('Front::channel.kyrgyzradio.nav')
  <div id="kyrgyzhome" class="container">
    <div class="container">
      <div class="row">
        <div class="section-header2">
          <h2 class="section-title text-center wow fadeInDown" style="margin-bottom: 30px">Белгилүү инсандардын учкул сөздөрү</h2>
        </div>
        <div class="row" style="padding: 0px 0px 30px 0px;">
          <div class="col-md-12">
            @if($quote)
              @foreach($quote as $top)
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="quote-item">

                      <div class="quote-image">
                        <img src="{{asset($top->file)}}" alt="">
                        <i class="fa fa-quote-left"></i>
                        <p>{{ $top->getDesc() }}</p>
                        <span class="name">
                        {{ $top->getAuthor() }}
                        </span>
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