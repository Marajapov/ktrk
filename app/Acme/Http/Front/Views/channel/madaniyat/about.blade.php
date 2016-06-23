@extends('Front::channel.madaniyat.default')
@section('title',  trans('radiopages.Mabout'))
@section('styles')
@endsection
@section('content')
    <body class="madaniyat">
    @include('Front::channel.madaniyat.nav')
    <div class="container" style="margin-top: 160px;">
        <div class="row">
            <section class="content clearfix">
                <div class="panel panel-default mabout">
                    <div class="panel-body no-padding">

                        <div class="hero-image">
                            <img src="{{asset('images/channels/madaniyat/about_logo.jpg')}}" alt="Logo"/>
                        </div>

                        @if(app()->getlocale() == 'ru')
                            <div class="mheader clearfix">
                                <div class="col-md-4">
                                    <p><span>Телеканал «Маданият»</span> - канал, посвященный культуре.</p>
                                </div>

                                <div class="col-md-4">
                                    <p><span>Культура</span> в жизни каждого человека играет особо важную роль. Невозможно представить жизньбез музыки, живописи и тех шедевров искусства, которые создаются и передаются из поколения в поколение.</p>
                                </div>

                                <div class="col-md-4">
                                    <p><span>Культура</span> – это мост между историей и настоящим, между различными народами.</p>
                                </div>
                            </div>
                            <div class="mbody">
                                <div class="mtop clearfix">
                                    <p>
                                        Концепция телеканала заключается в создании и распространении передач на разную тематику: музыка, искусство, литература, отражение культурного многообразия народов, а также просвещение, сохранение и развитие национальных традиций кыргызского народа и воспитание патриотизма.
                                    </p>
                                    <div class="hero-video">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9WsRuMRxycE?rel=0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <p>
                                        Миссия телеканала заключается в содействии в воспитании в человеке лучших качеств, как добропорядочность, стремление к знаниям и просвещению, гуманность, любовь к искусству.
                                    </p>
                                </div>
                            </div>
                        @elseif(app()->getlocale() == 'kg')
                            <div class="mheader clearfix">
                                <div class="col-md-4">
                                    <p><span>Маданият</span> – абалкы менен азыркынын, эзелки менен эмикинин байланышы.</p>
                                </div>

                                <div class="col-md-4">
                                    <p><span>Маданият</span> – көөнөргүс классика менен тарыхий тасмаларды, обологон опера жана балкыткан балетти, сезим козгогон спектакльдер менен  кайрыктуу концертти тартуулайт.</p>
                                </div>

                                <div class="col-md-4">
                                    <p><span>Маданият</span> – кыргыздын көрөӊгөсүн, улуттун жөрөлгөсүн камтыган канал.</p>
                                </div>
                            </div>
                            <div class="mbody">
                                <div class="mtop clearfix">
                                    <p>
                                        Маданият телеканалы Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын курамындагы маданият, тил жана тарых багытындагы телекөрсөтүүлөрдү даярдаган жана  көрсөткөн канал болуп эсептелинет.
                                    </p>
                                    <div class="hero-video">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9WsRuMRxycE?rel=0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <p>
                                        Бүгүнкү күндө маданияттын  маанилүүлүгүн эске алуу менен МТ каналы Коомдук телерадиоберүү корпорациясы тарабынан Кыргызстандын калкы үчүн түзүлгөн.
                                    </p>
                                    <div class="col-md-6">
                                        Телекөрсөтүү торчосунун  негизги бөлүгү өздүк көрсөтүүлөрдөн  жана  дүйнөлүк  маданий мурастардан, окуялардан, жаңылыктардан түзүлмөкчү.
                                    </div>
                                    <div class="col-md-6">
                                        Маданияттын ар кыл  тармактарынын ишмердүүлүгү  чагылдырылмакчы.
                                    </div>
                                </div>
                            </div>
                            <div class="mfooter">
                                <div class="mfooter-top">
                                    <h1>
                                        Каналдын негизги  иштөө принциптери
                                    </h1>
                                    <p>
                                        Кыргызстан жана  эл аралык  ММКарына   тийиштуу  стандарттын негизинде  иш алып баруу. Көрүүчүгө  таңуулабастан тандоо укугун берүү.
                                    </p>
                                </div>
                                <div class="mfooter-bottom">
                                    <h1>
                                        Каналдын негизги максаты
                                    </h1>
                                    <p>
                                        Көрүүчүлөрдүн купулуна  толгон  мыкты берүүлөрдү даярдоо. Маданияттын ар тармагын аракеттуу  чагылдыруу. Тарбия багыты, тарыхты тактоо, баамдоо, таанып билүү, тил маселелери – МТ каналынын  көңүл чордонунда. Көрүүчунүн көңүлүн буруу менен аны бийик  нерсеге  шыктандыруу.
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
    @stop
    @section('footerscript2')
        <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>
        <script>
            $(document).ready(function () {
                $(".search-toggle").click(function () {
                    $(".logo-block").addClass("search-show");
                    $(".form-search").addClass("visible");
                    $(".clangs").addClass("hidden");
                });
                $(".close-search").click(function () {
                    $(".logo-block").removeClass("search-show");
                    $(".form-search").removeClass("visible");
                    $(".clangs").removeClass("hidden");

                });
            });
        </script>
@stop