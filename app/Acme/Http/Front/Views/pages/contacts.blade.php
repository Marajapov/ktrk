@extends('Front::layouts.default')
@section('title', trans('site.Contacts')." | КТРК")


@section('styles')
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
@endsection

@section('content')

  <div class="container main-wrapper">

    <div class="row">
      <section class="content clearfix">
        <div class="panel panel-default panel-contacts">
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('site.Contacts') }}</h3>
          </div>
          <div class="panel-body">

            @if($lc=='kg')
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th>Аталышы</th>
                  <th>Байланыш маалымат/E-mail</th>
                  <th>Социалдык тармактар</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Коомдук телерадиоберүү корпорациясы</td>
                  <td>Кыргыз Республикасы, Бишкек шаары, Жаш Гвардия бульвары, 59, 720010, www.ktrk.kg</td>
                  <td>
                    <ul>
                      <li class="fb">
                        <a href="#">
                          <i class="fa fa-facebook-square"></i>
                          KTRKkg
                        </a>
                      </li>
                      <li class="tw">
                        <a href="#">
                          <i class="fa fa-twitter-square"></i>
                          @KTRK_kg
                        </a>
                      </li>
                      <li class="yt">
                        <a href="#">
                          <i class="fa fa-youtube-square"></i>
                          KTRKkg
                        </a>
                      </li>
                    </ul>
                  </td>
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