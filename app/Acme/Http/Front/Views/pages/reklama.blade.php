@extends('Front::layouts.default')
@section('title', trans('site.Reklama')." | КТРК")


@section('styles')
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
@endsection

@section('content')

  <div class="container main-wrapper">

    <div class="row">
      <section class="content clearfix">
        <div class="panel panel-default panel-reklama">
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('site.Reklama') }}</h3>
          </div>
          <div class="panel-body">
            @if($lc=='kg')
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Жарнак кабыл алынат</th>
                    <th>Кызмат көрсөтүү</th>
                    <th>Жарнак берүү</th>
                    <th>Байланыш:</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Коомдук биринчи канал</td>
                    <td>Аудио-видео материал даярдоо</td>
                    <td>Жарнамалык ролик (аудио/видео)</td>
                    <td>Бишкек ш., Жаш Гвардия бульвары 59. ,1-каб., 10,7,5- кабинеттер</td>
                  </tr>
                  <tr>
                    <td>"Биринчи радио"</td>
                    <td>Техниканы ижарага берүү</td>
                    <td>Жүгүртмө сап</td>
                    <td>0312 39 15 80</td>
                  </tr>
                  <tr>
                    <td>"Кыргыз радиосу"</td>
                    <td>Эфирдик убакытты сатуу</td>
                    <td>PR-сюжет</td>
                    <td>0312 39 15 80</td>
                  </tr>
                  <tr>
                    <td>"Миң-Кыял FM"</td>
                    <td>Видеоматериалдарды сатуу</td>
                    <td>Аба ырайына демөөрчү</td>
                    <td>Е-mail: <a href="mailto:reklama.otrk@gmail.com">reklama.otrk@gmail.com</a></td>
                  </tr>
                </tbody>
              </table>

              <div class="price">
                <p>Жарнамалык маалыматты эфирге берүү боюнча баалар 2017 ж.</p>
                <a target="_blank" href="{{ asset('static/files/reklama/price2017.pdf') }}">
                  <i class="fa fa-file-pdf-o"></i>
                  <span>
                    Прайс-баракты жүктөө
                  </span>
                </a>
              </div>

            @else

              <table class="table table-bordered">
                <thead>
                <tr>
                  <th>Прием рекламы: </th>
                  <th>Услуги</th>
                  <th>Виды рекламы:</th>
                  <th>Контакты</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Общественный первый канал</td>
                  <td>Создание аудио и видео-роликов</td>
                  <td>Рекламный ролик (аудио/видео</td>
                  <td>г. Бишкек, Молодая Гвардия 59, 1эт., 10,7,5 каб.</td>
                </tr>
                <tr>
                  <td>"Биринчи радио"</td>
                  <td>Аренда техники</td>
                  <td>Бегущая строка</td>
                  <td>0312 39 15 80</td>
                </tr>
                <tr>
                  <td>"Кыргыз радио"</td>
                  <td>Продажа видеоматериала</td>
                  <td>PR-сюжеты</td>
                  <td>0312 39 15 80</td>
                </tr>
                <tr>
                  <td>"Мин-Кыял FM"</td>
                  <td>Продажа эфирного времени</td>
                  <td>Спонсорство прогноза погоды </td>
                  <td>Е-mail: <a href="mailto:reklama.otrk@gmail.com">reklama.otrk@gmail.com</a></td>
                </tr>
                </tbody>
              </table>

              <div class="price">
                <p>Прайс-лист на размещение рекламно-информационных материалов на 2017 год</p>
                <a target="_blank" href="{{ asset('static/files/reklama/price2017.pdf') }}">
                  <i class="fa fa-file-pdf-o"></i>
                  <span>
                    Загрузить Прайс-лист
                  </span>
                </a>
              </div>

            @endif
          </div>
          <div class="banner-img">
              @if($lc=='kg')
              <h3 class="text-center">Сайтка жарнак берүү</h3>
              @else
                <h3 class="text-center">Реклама на сайте</h3>
              @endif
          </div>  
        <div class="panel-body">
          @if($lc=='kg')
          <div class="row">
            <div class="col-md-6">
                <div class="banner-price">
                  <p>Жарнак берүү боюнча байланыш телефону:</p>
                  <span>Коомдук кабылдама: +996 312 39 20 59</span>
                  <span>www.ktrk.kg сайтты колдоо бөлүмү: +996 312 39 22 38</span>
                  <span>Коммерциялык-жарнама бөлүмү: +996 312 39 15 80 </span>              
                </div>
            </div> 
            <div class="col-md-6">
              <div class="price row" style="width: inherit;padding: 0;">
                <p>Өнөктөштөргө коммерциялык сунуштама</p>
                <a target="_blank" href="{{ asset('static/banner/commercial-kg.docx') }}">
                  <i class="fa fa-file-pdf-o"></i>
                  <span>
                    Жүктөө
                  </span>
                </a>
              </div>
            </div>           
          </div>          
          @else
          <div class="row">
            <div class="col-md-6">
              <div class="banner-price">
                <p>По вопросам рекламы обращаться по телефону:</p>
                <span>Общественная приемная: +996 312 39 20 59</span>
                <span>Отдел по поддержке сайта КТРК: +996 312 39 22 38</span>
                <span>Рекламно-коммерческий отдел: +996 312 39 15 80 </span>
              </div>
            </div> 
            <div class="col-md-6">
              <div class="price row" style="width: inherit;padding: 0;">
                <p>Коммерческое предложение для партнеров и рекламодателей</p>
                <a target="_blank" href="{{ asset('static/banner/commercial.docx') }}">
                  <i class="fa fa-file-pdf-o"></i>
                  <span>
                    Загрузить
                  </span>
                </a>
              </div>
            </div>           
          </div>             
          @endif

          <hr>
          <div class="banner-img">
            <h3 class="text-center">
              @if($lc=='kg')
                Башкы бет
              @else
              Главная страница
              @endif
            </h3>
            <img src="{{asset('static/banner/Home.png')}}" alt="">
            <h3 class="text-center">
              @if($lc=='kg')
                Жаңылык барагы
              @else
                Новостная страница
              @endif
            </h3>
            <img src="{{asset('static/banner/News.png')}}" alt="">
            <h3 class="text-center">Видеопортал</h3>
            <img src="{{asset('static/banner/Video.png')}}" alt="">
          </div>

          </div>
        </div>
      </section>

    </div>
  </div>
@endsection


@section('footerScript')
@endsection