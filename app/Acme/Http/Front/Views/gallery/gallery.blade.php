@extends('Front::layouts.default')
@section('title', $gallery->getName())
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
@stop

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
@endsection()

@section('content')
  <div class="container main-wrapper">
    <div class="row">
    	<section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ $gallery->getName() }}</span></h3>
              </div>
              <div class="panel-body">

                <div class="col-md-12">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      
                    </div>
                    <div class="panel-body second-panel-body">

                    <p style="margin-bottom: 20px;">{{ $gallery->getDescription() }}</p>

                      <div class="col-md-12">

                        <div class="row">
                          <div class="slider-for">
                            @foreach($images as $image)
                              <div>
                                <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                <span class="slide-caption hidden">
                                  {{ $gallery->getName() }}
                                </span>
                              </div>
                            @endforeach
                            
                          </div>

                          <div class="slider-nav col-md-12">
                            @foreach($images as $image)
                              <div>
                                <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                              </div>
                            @endforeach
                          </div>
                         
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div><!-- end row-->
  </div><!-- end container main-wrapper -->

@stop
@section('footerScript')

  <script>
    function getVote(int) {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          document.getElementById("poll").innerHTML=xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET","{{ asset('poll_vote.php') }}?vote="+int,true);
      xmlhttp.send();
    }
  </script>

  <!--Carousel-->
  <script>
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      centerMode: true,
      focusOnSelect: true,
      variableWidth: true
    });
  </script>

@endsection
