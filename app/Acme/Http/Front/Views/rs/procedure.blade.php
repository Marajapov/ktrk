@extends('Front::layouts.default')
@section('title', 'Процедура рассмотрений заявлений и жалоб | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh panel-rs">
              <div class="panel-heading">
                <h3 class="panel-title"><span>Редакционный советник</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::rs.sidebar')

                <div class="col-md-9">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>Процедура рассмотрений заявлений и жалоб</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      <h4><strong>Редакционный Советник (РС) рассматривает жалобы  в соответствии со статьей 10 «Процедура рассмотрения заявлений и жалоб»</strong></h4>

                      <ul class="procedure">
                        <li>
                          Редакционный Советник рассматривает заявления и жалобы граждан, юридических лиц Кыргызской Республики, находящихся в Кыргызской Республике иностранцев и лиц без гражданства либо их представителей, касающиеся прав и свобод телезрителей и радиослушателей Кыргызской Республики, установленные законодательством Кыргызской Республики и стандартами международной журналистики. Здесь не могут быть препятствием гражданство, расовая и национальная принадлежность, религиозные и политические убеждения, место жительства, пол, несовершеннолетие, неправоспособность субъекта, интернирование или изоляция, а также какое-либо особое отношение подчиненности либо зависимости от администрации или государственной власти. Редакционный Советник осуществляет свою деятельность также на основании сведений о нарушении прав и свобод телезрителей и радиослушателей, которые получает из обращений членов Наблюдательного Совета КТРК КР или по собственной инициативе.
                        </li>
                        <li>
                          Заявления и жалобы Редакционный Советник рассматривает только в том случае, если заявления или жалобы касаются нарушения прав и свобод телезрителей и радиослушателей КТРК КР.
                        </li>
                        <li>
                          Редакционный Советник имеет право не рассматривать заявления или жалобы, по которым им было раньше принято решение, если не возникли новые обстоятельства.
                        </li>
                        <li>Редакционный Советник не рассматривает обстоятельства дела по тем жалобам, которые уже являются предметом судопроизводства, и прекращает свои действия, если уже после их начала заинтересованное лицо направит жалобу или апелляцию в суд. Редакционный Советник проявляет заботу о том, чтобы соответствующий орган рассмотрел в определенный срок и в определенной форме направленные ему жалобы и апелляции. Рассмотрение Редакционным Советником  заявления или жалобы не может воспрепятствовать рассмотрению аналогичных заявления или жалобы, поступивших в Комиссию по рассмотрению жалоб на СМИ.
                        </li>
                        <li>
                          Обращения подаются Редакционному Советнику в письменной форме в течение 7 дней со дня выявления нарушения прав и свобод телезрителей и радиослушателей. При наличии исключительных обстоятельств этот срок может быть продлен Редакционным Советником, но не более чем до одного месяца.
                        </li>
                        <li>
                          Заявление или жалоба должны быть подписаны заинтересованным лицом и содержать фамилию, имя, отчество и адрес заявителя, изложение существа решений или действий (бездействия), нарушивших или нарушающих, по мнению заявителя, его права и свободы, а также сопровождаться копиями решений, принятых по его жалобе, если таковые принимались.
                        </li>
                        <li>
                          Заявление и жалоба государственной пошлиной не облагаются.
                        </li>
                        <li>
                          Услуги, оказываемые заинтересованному лицу Редакционным Советником, являются безвозмездными.
                        </li>
                        <li>
                          Редакционный Советник регистрирует внесенные жалобы и выдает расписки в получении этих жалоб, которые затем он принимает к рассмотрению либо отклоняет. В последнем случае он делает это в мотивированном письме, информируя заинтересованное лицо о лучших возможностях ведения дела, если, по его мнению, такие существуют, не препятствуя заинтересованному лицу предпринять те действия, которые он сам сочтет лучшими.
                        </li>
                        <li>
                          Поданная Редакционному Советнику жалоба может быть отозвана заявителем или его представителем.
                        </li>
                        <li>
                          Редакционный Советник не рассматривает анонимные жалобы и может отклонить те, в которых констатирует наличие недобросовестности, немотивированности, отсутствие притязаний, а также другие жалобы, рассмотрение которых нанесет вред законным правам третьего лица. Его рекомендации не подлежат обжалованию.
                        </li>
                        <li>
                          По получении заявления или жалобы Редакционный Советник самостоятельно принимает решение о начале рассмотрения жалоб/заявлений.
                        </li>
                        <li>
                          О принятом решении Редакционный Советник сообщает Наблюдательному Совету КТРК КР и сотрудникам, действия которых обжаловано с тем, чтобы в срок до пятнадцати дней они направили письменные объяснения по вопросам, подлежащим выяснению.
                        </li>
                        <li>
                          Отказ в принятии обращения к рассмотрению должен быть мотивированным.
                        </li>
                      </ul>

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
@endsection