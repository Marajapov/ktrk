@include('Front::messages.flash')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/admin/tokenfield-typeahead.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-tokenfield.css') }}"/>
@endsection

<div class="panel panel-success">
  <div class="panel-body">

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.Title') }}</label>
      <div class="col-sm-10">
        {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
      </div>
    </div>

    {{--<div class="form-group">--}}
      {{--<label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TitleRU') }}</label>--}}
      {{--<div class="col-sm-10">--}}
        {{--{!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}--}}
      {{--</div>--}}
    {{--</div>--}}

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">Категория</label>
      <div class="col-sm-10">
        {!! Form::select('videoType', \Model\MediaCategory\ModelName::lists('name', 'videoType')->toArray(), null, ["class" => "selectpicker","data-live-search"=>"true", "required" => true, "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminMediaProject') }}</label>
      <div class="col-sm-10">
        {!! Form::select('program', $projectList, null, ["class" => "selectpicker","data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.Content') }}</label>
      <div class="col-sm-10">
        {!! Form::textarea('description', null, ["class" => "form-control", "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminMediaURL') }}</label>
      <div class="col-sm-10">
        {!! Form::text('url', null, ["class" => "form-control", "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="parentId" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <div class="checkbox checkbox-primary ">
          {!! Form::hidden('published', 0) !!}
          {!! Form::checkbox('published', 1, null, ["id" => "checkboxPublished", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
          <label for="checkboxPublished">
            {{ trans('site.Publish') }}
          </label>
        </div>
      </div>
    </div>

    <!-- ns -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('ns', 0) !!}
            {!! Form::checkbox('ns', 1, null, ["id" => "ns", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="ns">
              Наблюдательный совет
            </label>
          </div>
        </div>
      </div>

      <!-- rs -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('rs', 0) !!}
            {!! Form::checkbox('rs', 1, null, ["id" => "rs", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="rs">
              Редакционный совет
            </label>
          </div>
        </div>
      </div>

      <!-- director -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('director', 0) !!}
            {!! Form::checkbox('director', 1, null, ["id" => "director", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="director">
              Страница Ген. директора
            </label>
          </div>
        </div>
      </div>

      <!-- muzkanal -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('muzkanal', 0) !!}
            {!! Form::checkbox('muzkanal', 1, null, ["id" => "muzkanal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="muzkanal">
              Муз канал
            </label>
          </div>
        </div>
      </div>

      <!-- kyrgyzradio -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('kyrgyzradio', 0) !!}
            {!! Form::checkbox('kyrgyzradio', 1, null, ["id" => "kyrgyzradio", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="kyrgyzradio">
              Кыргыз радио
            </label>
          </div>
        </div>
      </div>

      <!-- birinchi -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('birinchi', 0) !!}
            {!! Form::checkbox('birinchi', 1, null, ["id" => "birinchi", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="birinchi">
              Биринчи радио
            </label>
          </div>
        </div>
      </div>

      <!-- balastan -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('balastan', 0) !!}
            {!! Form::checkbox('balastan', 1, null, ["id" => "balastan", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="balastan">
              Баластан
            </label>
          </div>
        </div>
      </div>

      <!-- madaniyat -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('madaniyat', 0) !!}
            {!! Form::checkbox('madaniyat', 1, null, ["id" => "madaniyat", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="madaniyat">
              Маданият
            </label>
          </div>
        </div>
      </div>

      <!-- minkiyal -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('minkiyal', 0) !!}
            {!! Form::checkbox('minkiyal', 1, null, ["id" => "minkiyal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="minkiyal">
              Мин кыял
            </label>
          </div>
        </div>
      </div>


  </div>
</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.media.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
