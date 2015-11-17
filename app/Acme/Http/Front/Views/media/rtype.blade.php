@extends('Front::layouts.default')
@section('title', 'Все видео')

@section('content')

  <div class="shows-slider">
    <div class="slider-overlay"></div>
    <div class="shows-carousel container">
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/anons/1.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/anons/2.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/anons/3.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/anons/1.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/anons/2.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/anons/3.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
    </div>
  </div>

  <div class="container main-wrapper">

    <div class="row">
      <section class="content clearfix">

        <div class="clearfix">
          <div class="top-left-block col-md-12">
            <div class="panel panel-default panel-videos">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Видеопортал
                </h3>
              </div>
              <div class="panel-body">

                <ul class="nav nav-tabs videos-block">
                  @foreach($MediaCategories as $key => $MediaCategory)
                    <li role="presentation" class="@if($MediaCategory->getVideoType() == $rtype) active @endif">
                      <a href="{{ route('front.media.rtype', $MediaCategory->getVideoType()) }}">{{ $MediaCategory->getName() }}</a>
                    </li>
                  @endforeach
                </ul>

                <ul id="myTab" class="nav nav-tabs">
                  @foreach($MediaCategories as $key=>$MediaCategory)
                    <li class="@if($MediaCategory->getVideoType() == $rtype) active @endif">
                      <a href="#{{ $MediaCategory->getVideoType() }}" data-toggle="tab">{{ $MediaCategory->getName() }}</a>
                    </li>
                  @endforeach
                </ul>

                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade active in" id="home">
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                  </div>
                  <div class="tab-pane fade" id="profile">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                  </div>
                  <div class="tab-pane fade" id="dropdown1">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                  </div>
                  <div class="tab-pane fade" id="dropdown2">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                  </div>
                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="active clearfix" id="all-videos">
                    <div class="row">
                      @foreach($mediaAll as $media)
                        <article class="col-md-3" data-cat="all-videos">
                          <a href="#" class="img">
                            <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/mqdefault.jpg" alt=""/>
                            <h4><i class="fa fa-play-circle-o"></i>Замана</h4>
                          </a>
                          <a href="#" class="title">
                            <h4>{{ $media->getName() }} </h4>
                          </a>
                        </article>
                      @endforeach
                    </div>
                    <button class="loadMore btn btn-default">Показать еще</button>
                  </div>
                </div>

                <nav class="clearfix hidden">
                  <ul class="pagination">
                    <li class="hidden">
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>

              </div>
            </div>

            <a href="#" class="text-center ads">
              <img src="images/ads_1.jpg" alt=""/>
            </a>

          </div>



        </div>

      </section>
    </div>

  </div>

@stop

@section('footerScript')

  <script>

    //    var current = $('.shows-carousel').slick('slickCurrentSlide');

    $('.shows-carousel').slick({
//        autoplay: true,
//        autoplaySpeed: 2000,
      centerPadding: '0',
      dots: true,
      infinite: true,
      slidesToShow: 1,
      speed: 600
    });
  </script>

  <script>
    $(function() {
      $("#MainTabs").tab();
      $("#MainTabs").bind("show", function(e) {
        var contentID  = $(e.target).attr("data-target");
        var contentURL = $(e.target).attr("href");
        if (typeof(contentURL) != 'undefined')
          $(contentID).load(contentURL, function(){ $("#MainTabs").tab(); });
        else
          $(contentID).tab('show');
      });
      $('#MainTabs a:first').tab("show");
    });
  </script>

  <script>
    $(function(){
      $("#all-videos article").slice(0, 5).show(); // select the first ten
      $("#all-videos .loadMore").click(function(e){ // click event for load more
        e.preventDefault();
        $("#all-videos article:hidden").slice(0, 8).show(); // select next 10 hidden divs and show them
        if($("#all-videos article:hidden").length == 0){ // check if any hidden divs still exist
          $("#all-videos .loadMore").hide();
        }
      });
      if($("#all-videos article:hidden").length == 0){ // check if any hidden divs still exist
        $("#all-videos .loadMore").hide();
      }
    });
  </script>
@stop