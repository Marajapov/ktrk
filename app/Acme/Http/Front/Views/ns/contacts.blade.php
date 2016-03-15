@extends('Front::layouts.default')
@section('title', trans('site.BaikoochuKeneshContactsFull').' | '.trans('site.BaikoochuKeneshFull').' | КТРК')
@section('styles')

  <meta name="_token" content="{!! csrf_token() !!}"/>
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">

  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>

    var ktrk=new google.maps.LatLng(42.878037, 74.576290);

    function initialize() {
      var mapProp = {
        center:ktrk,
        zoom:18,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

      var marker=new google.maps.Marker({
        position:ktrk,
        {{--icon:'{{ asset('images/ktrk_last.png') }}'--}}
      });
      marker.setMap(map);

      var infowindow = new google.maps.InfoWindow({
        content:"{{ trans('site.Ktrk') }}"
      });
      infowindow.open(map,marker);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshFull') }}</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::ns.sidebar')

                <div class="col-md-10">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshContactsFull') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body panel-ns-contacts">

                      <div class="col-md-6">
                        <p>
                          <span><i class="fa fa-map-marker"></i></span>
                          {{ trans('site.BaikoochuKeneshContactsAdresText') }}
                        </p>

                        <p>
                          <span><i class="fa fa-phone"></i></span>
                          0(312) 65-67-21
                        </p>

                        <p>
                          <span><i class="fa fa-envelope"></i></span>
                          sovetotv@gmail.com
                        </p>
                      </div>

                      <div class="col-md-6">
                        <div id="googleMap"></div>
                      </div>



                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>

@stop

@section('footerScript')
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>

  <script>
    function getVote(vote){
      $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });

      var dataString = 'vote='+vote;
      var url = "{{ route('front.poll_vote') }}";
      var parent = $('#poll');

      $.ajax({
          type: "POST",
          url: url,
          data: dataString,
          cache: false,
          success: function(data)
          {
            if(data['status'] == false){
              swal("", "С одного IP-адреса можно голосовать 1 РАЗ!", "error");
            }
            else{
              swal("Спасибо!", "Ваш голос учтен!", "success");
              parent.html(data['html']);
            }
          }
      });
    }
  </script>

@endsection