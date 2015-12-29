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