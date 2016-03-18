@extends('Front::channel.kyrgyzradio.default')
@section('title', "Кыргыз Радиосу")
@section('styles')
@endsection
@section('content')
  @include('Front::channel.kyrgyzradio.nav')
  <div id="kyrgyzhome" class="container">
    <div class="container">
      <div class="row">
        <div class="section-header2">
          <h2 class="section-title text-center wow fadeInDown" style="margin-bottom: 10px">Цитаталар</h2>
        </div>
        <div class="row">
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
                  <footer class="with-share">
                    <div class="pluso share-buttons">
                      <button class="goodshare btn-fb" data-type="fb">
                        <i class="fa fa-facebook"></i>
                        <span data-counter="fb"></span>
                      </button>
                      <!-- Button with share to Facebook & share counter -->
                      <button class="goodshare btn-vk" data-type="vk">
                        <i class="fa fa-vk"></i>
                        <span data-counter="vk"></span>
                      </button>
                      <button class="goodshare btn-ok" data-type="ok">
                        <i class="fa fa-odnoklassniki"></i>
                        <span data-counter="ok"></span>
                      </button>
                      <button class="goodshare btn-gp" data-type="gp">
                        <i class="fa fa-google-plus"></i>
                        <span data-counter="gp"></span>
                      </button>
                      <button class="goodshare btn-tw" data-type="tw">
                        <i class="fa fa-twitter"></i>
                        {{--<span data-counter="tw"></span>--}}
                      </button>
                    </div>
                  </footer>
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
  <script src="{{ asset('js/goodshare.js') }}"></script>
  <script>
    $(window).load(function(){
      $('.goodshare').each(function(){
        var span = $(this).children('span');
        var counter = span.text();
        if((counter==0) || (counter=='')){
          $(this).addClass('empty');
        }
      });
    });
  </script>
@stop