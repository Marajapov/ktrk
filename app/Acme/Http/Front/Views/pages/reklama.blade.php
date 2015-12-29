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
                    <th>Байланыш</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Коомдук биринчи канал</td>
                    <td>Аудио-видео материал даярдоо</td>
                    <td>Жарнамалык ролик (аудио/видео)</td>
                    <td> Бишкек ш., Жаш Гвардия бульвары 59, 1,5,7,10-кабинеттер</td>
                  </tr>
                  <tr>
                    <td>Биринчи радио</td>
                    <td>Техниканы ижарага берүү</td>
                    <td>Жүгүртмө сап</td>
                    <td>ТV/RV менеджер – 0312 648581, 0312 649158</td>
                  </tr>
                  <tr>
                    <td>Кыргыз радиосу</td>
                    <td>Эфирдик убакытты сатуу</td>
                    <td>PR-сюжет</td>
                    <td>Жүгүртмө сап боюнча менеджер - 0312 654111</td>
                  </tr>
                  <tr>
                    <td>Миң-Кыял FM</td>
                    <td>Видеоматериалдарды сатуу</td>
                    <td>Аба ырайына демөөрчү</td>
                    <td>Е-mail: reklama.otrk@gmail.com</td>
                  </tr>
                </tbody>
              </table>

              <div class="price">
                <p>Жарнамалык маалыматты эфирге берүү боюнча баалар</p>
                <a target="_blank" href="{{ asset('static/files/reklama/prays-list-prays-2015g_0.pdf') }}">
                  <i class="fa fa-file-pdf-o"></i>
                  <span>
                    Прайс-баракты жүктөө
                  </span>
                </a>
              </div>
            @endif
          </div>
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('site.ReklamaRent') }}</h3>
          </div>
          <div class="panel-body tech-price">
            @if($lc=='kg')
              <p>Прайс –барак. Саатына кошумча нарк салыгы эске алынат.</p>
              <p>Техникалык каражаттардын баасы 1 саат үчүн, сом менен көрсөтүлгөн.</p>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Техникалык каражат</th>
                    <th>Баасы</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>КТС (Көчмө телевизиондук станция) Ford Tranzit</td>
                    <td>14881,34</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>КТС "Магнолия" 83-А №79</td>
                    <td>9329,49</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>КТС "Магнолия" 83-А №66</td>
                    <td>12951,21</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ВСТиР аппараттык кабылдамасы</td>
                    <td>429,31</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Тонваген (Үн көчмө авто)</td>
                    <td>3 119,55</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </section>

    </div>
  </div>
@endsection


@section('footerScript')
@endsection