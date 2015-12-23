@include('Front::messages.flash')

@section('styles')
  <!-- Include Editor style. -->
  <link href="{{ asset('froala/css/froala_editor.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/admin/tokenfield-typeahead.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-tokenfield.css') }}"/>

  <!-- Include Editor Plugins style. -->
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/char_counter.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/code_view.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/colors.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/emoticons.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/file.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/fullscreen.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/image.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/image_manager.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/line_breaker.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/table.css')}}">
  <link rel="stylesheet" href="{{ asset('froala/css/plugins/video.css')}}">
@endsection

  <div class="panel panel-success">

    <div class="panel-heading">
      <h3 class="panel-title">Общая информация</h3>
    </div>

    <div class="panel-body">     

    <!-- Category -->
    <div class="form-group">
      <label for="category_id" class="col-sm-2 control-label">Категория</label>
      <div class="col-sm-10">
        {!! Form::select('category_id', $categoryList, null, ["class" => "selectpicker", "data-live-search"=>"true", "required" => true, "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <!-- PhotoGallery -->
    <div class="form-group">
      <label for="parentId" class="col-sm-2 control-label">Фотогалерея</label>
      <div class="col-sm-10">
        {!! Form::select('parentId', $PhotoParentList, null, ["class" => "selectpicker", "data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <!-- Thumb -->
    <div class="form-group">
      <label for="parentId" class="col-sm-2 control-label">Миниатюра</label>
      <div class="col-sm-10">
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new thumbnail" style="width: 132px; height: 100px;">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 132px; max-height: 100px;"></div>
          <div>
              <span class="btn btn-default btn-file">
                <span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span>
                <span class="fileinput-exists">{{ trans('site.Change') }}</span>
                {!! Form::file('thumbnail', null, ["class" => "form-control"]) !!}
              </span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">{{ trans('site.Delete') }}</a>
          </div>
        </div>
      </div>
    </div> 

    <!-- Audio -->
    <div class="form-group">
    <label for="audio" class="col-sm-2 control-label">Аудио:(Из soundcloud.com)</label>
      <div class="col-sm-2">
        {!! Form::text('audio', null, ["class" => "form-control", "id" => "audio", "title" => ""]) !!}
      </div>
    </div>

    <!-- Datepicker -->
    <div class="form-group">
    <label for="created_at" class="col-sm-2 control-label">Дата</label>
      <div class="col-sm-2">
        {!! Form::text('created_at', null, ["class" => "form-control", "id" => "date", "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="parentId" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">

        <div class="checkbox checkbox-primary col-sm-2">
          {!! Form::hidden('published', 0) !!}
          {!! Form::checkbox('published', 1, null, ["id" => "checkboxPublished", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
          <label for="checkboxPublished">
            {{ trans('site.Publish') }}
          </label>
        </div>

        <div class="checkbox checkbox-primary col-sm-2">
          {!! Form::hidden('announcement', 0) !!}
          {!! Form::checkbox('announcement', 1, null, ["id" => "checkboxAnnouncement", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
          <label for="checkboxAnnouncement">
            Анонс
          </label>
        </div>

        <div class="checkbox checkbox-primary col-sm-2">
          {!! Form::hidden('general', 0) !!}
          {!! Form::checkbox('general', 1, null, ["id" => "checkboxGeneral", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
          <label for="checkboxGeneral">
            {{ trans('site.AdminHomeTitle') }}
          </label>
        </div>

      </div>
    </div>

              

      <div class="row">
        <div class="col-sm-12" style="margin-top: 10px;">
          <div class="row morepages">
            <div class="col-sm-4  panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Доп. страницы</h3>
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

               <!-- reporter -->
              <div class="form-group">
                <label for="parentId" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                  <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('reporter', 0) !!}
                    {!! Form::checkbox('reporter', 1, null, ["id" => "reporter", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="reporter">
                      Народный репортер
                    </label>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-sm-4  panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Радио каналы</h3>
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
            <div class="col-sm-4  panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Телеканалы</h3>
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
            </div>
          </div>
        </div>

      </div> 



    </div>

  </div>

  <div class="panel panel-info">

    <div class="panel-heading">
      <h3 class="panel-title">Информация на кыргызском</h3>
    </div>

    <div class="panel-body">

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TitleKG') }}</label>
        <div class="col-sm-10">
          {!! Form::text('title', null, ["class" => "form-control"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TextKG') }}</label>
        <div class="col-sm-10">
          {!! Form::textarea('content', null, ["class" => "form-control", "id" => "editKg"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TagsKG') }}</label>
        <div class="col-sm-10">
          {!! Form::text('tag_kg', null, ["class" => "form-control", "id" => "tag_kg"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminPostTheme') }}</label>
        <div class="col-sm-10">
          {!! Form::select('related1', $relatedPosts, null, ["class" => "selectpicker", "data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminPostTheme') }}</label>
        <div class="col-sm-10">
          {!! Form::select('related2', $relatedPosts, null, ["class" => "selectpicker", "data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminPostTheme') }}</label>
        <div class="col-sm-10">
          {!! Form::select('related3', $relatedPosts, null, ["class" => "selectpicker", "data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
        </div>
      </div>

    </div>
  </div>

  <div class="panel panel-default">

    <div class="panel-heading">
      <h3 class="panel-title">Информация на русском</h3>
    </div>

    <div class="panel-body">

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TitleRU') }}</label>
        <div class="col-sm-10">
          {!! Form::text('titleRu', null, ["class" => "form-control"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TextRU') }}</label>
        <div class="col-sm-10">
          {!! Form::textarea('contentRu', null, ["class" => "form-control", "id" => "editRu"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TagsRU') }}</label>
        <div class="col-sm-10">
          {!! Form::text('tag_ru', null, ["class" => "form-control", "id" => "tag_ru"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminPostTheme') }}</label>
        <div class="col-sm-10">
          {!! Form::select('related1', $relatedPosts, null, ["class" => "selectpicker", "data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminPostTheme') }}</label>
        <div class="col-sm-10">
          {!! Form::select('related2', $relatedPosts, null, ["class" => "selectpicker", "data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminPostTheme') }}</label>
        <div class="col-sm-10">
          {!! Form::select('related3', $relatedPosts, null, ["class" => "selectpicker", "data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
        </div>
      </div>

    </div>
  </div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.post.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

