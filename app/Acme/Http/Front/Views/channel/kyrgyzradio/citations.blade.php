@extends('Front::channel.kyrgyzradio.default')
@section('title', "Кыргыз Радиосу")
@section('styles')
@endsection
@section('content')
  @include('Front::channel.kyrgyzradio.nav')
  <div id="kyrgyzhome" class="container">
    <section id="cta2">
      <div class="text-center">
        <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>Кыргыз радиосу</span> - жан дүйнөнүн азыгы </h2>
        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">“Кыргыз радиосу көөнөрбөс мурастар казынасы</p>
      </div>
    </section>
    <section id="cta" class="wow fadeIn">
      <div class="col-md-12">
        @if($quote)
          <div class="quotes-hidden hidden">
            @foreach($quote as $top)
              <div>
                <img src="{{asset($top->file)}}" alt="">
                <i class="fa fa-quote-left"></i>
                <p>{{ $top->getDesc() }}</p>
                  <span class="name">
                  {{ $top->getAuthor() }}
                  </span>
              </div>
            @endforeach
          </div>
          <div class="quotes">
            @foreach($quote as $top)
              <div>
                <img src="{{asset($top->file)}}" alt="">
                <i class="fa fa-quote-left"></i>
                <p>{{ $top->getDesc() }}</p>
                  <span class="name">
                  {{ $top->getAuthor() }}
                  </span>
              </div>
            @endforeach
          </div>
        @endif
        <footer class="citation">
          <a href="{{ route('kyrgyzradio.citations') }}">
            <span>Баардык цитаталар <i class="fa fa-arrow-circle-right"></i></span>
          </a>
        </footer>
      </div>
    </section>
  </div>
@stop
@section('footerScript')
  <!-- Programm title Anima -->
  <script src="{{ asset('js/audio/jquery.newsTicker.js') }}"></script>
  <script>
    var nt_title = $('#nt-title').newsTicker({
      row_height: 30,
      max_rows: 1,
      duration: 3000,
      pauseOnHover: 1
    });
    var nt_example1 = $('#nt-example1').newsTicker({
      row_height: 30,
      max_rows: 3,
      duration: 4000,
      prevButton: $('#nt-example1-prev'),
      nextButton: $('#nt-example1-next')
    });

    var state = 'stopped';
    var speed;
    var add;

  </script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
@stop