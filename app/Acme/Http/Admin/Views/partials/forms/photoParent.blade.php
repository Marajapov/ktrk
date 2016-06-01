@include('Front::messages.flash')

@section('styles')
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
    <!-- Include Editor style. -->
    <link href="{{ asset('froala/css/froala_editor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
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

=======
<meta name="_token" content="{!! csrf_token() !!}"/>

<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
<!-- Include Editor style. -->
<link href="{{ asset('froala/css/froala_editor.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
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

<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
<script src="{{ asset('js/dropzone.js') }}"></script>
@endsection
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
<div class="panel panel-success">

    <div class="panel-body">

        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.TitleKG') }}</label>
            <div class="col-sm-10">
                {!! Form::text('name', null, ["class" => "form-control"]) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.DescKG') }}</label>
            <div class="col-sm-10">
                {!! Form::textarea('description', null, ["class" => "form-control", "title" => "",  "id" => "editKg"]) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.TitleRU') }}</label>
            <div class="col-sm-10">
                {!! Form::text('nameRu', null, ["class" => "form-control"]) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.DescRU') }}</label>
            <div class="col-sm-10">
                {!! Form::textarea('descriptionRu', null, ["class" => "form-control",  "id" => "editRu"]) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.AuthorKG') }}</label>
            <div class="col-sm-10">
                {!! Form::text('author', null, ["class" => "form-control"]) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.AuthorRU') }}</label>
            <div class="col-sm-10">
                {!! Form::text('authorRu', null, ["class" => "form-control"]) !!}
            </div>
        </div>

        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label">Миниатюра</label>
            <div class="col-sm-10">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 250px; height: 150px;">
<<<<<<< HEAD
                        @if($photoParent->getThumbnail()) <img src="{{ asset($photoParent->getThumbnail()) }}" alt="..."> @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
            <span class="btn btn-default btn-file">
              <span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span>
              <span class="fileinput-exists">{{ trans('site.Change') }}</span>
              {!! Form::file('status', null, ["class" => "form-control"]) !!}
            </span>
=======
                        @if($photoParent->getThumbnail())
                        <img src="{{ asset($photoParent->getThumbnail()) }}" alt="..."> @endif</div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-default btn-file">
                            <span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span>
                            <span class="fileinput-exists">{{ trans('site.Change') }}</span>
                            {!! Form::file('status', null, ["class" => "form-control"]) !!}
                        </span>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">{{ trans('site.Delete') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- watermark -->
        <div class="form-group">
<<<<<<< HEAD
            <label for="watermark" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::checkbox('watermark', 1, null, ["id" => "watermark", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="watermark">
                        Водяной знак
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label">{{ trans('site.Images') }}</label>
            <div class="col-sm-10">
                {!! Form::file('images[]', ["multiple" => "true", "class" => "form-control"]) !!}
            </div>
=======
            <label for="watermark" class="col-sm-2 control-label">Водяной знак</label>
            <div class="col-sm-10">
                {!! Form::select('watermark', ['0'=>'Без водяного знака']+$channels, null, ["id"=>"watermark","class" => "selectpicker form-control", "data-live-search"=>"true", "required" => true, "title" => "-- Выбрать --"]) !!}
            </div>
        </div>    

        <div id="watermarkGroup">
                
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
        </div>

        <!-- main -->
        <div class="form-group">
<<<<<<< HEAD
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('extracolumn', 0) !!}
                    {!! Form::checkbox('extracolumn', 1, null, ["id" => "extracolumn", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="extracolumn">
                        {{ trans('site.AdminHomeTitle') }}
                    </label>
=======
            <label for="parentId" class="col-sm-2 control-label">Разделы</label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('extracolumn', 0) !!}
                        {!! Form::checkbox('extracolumn', 1, null, ["id" => "extracolumn", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="extracolumn">{{ trans('site.AdminHomeTitle') }}</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- ns -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('ns', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('ns', 1, null, ["id" => "ns", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="ns">
                        {{ trans('site.BaikoochuKenesh') }}
                    </label>
=======
                        {!! Form::checkbox('ns', 1, null, ["id" => "ns", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="ns">{{ trans('site.BaikoochuKenesh') }}</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- rs -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('rs', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('rs', 1, null, ["id" => "rs", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="rs">
                        {{ trans('site.RedKenesh') }}
                    </label>
=======
                        {!! Form::checkbox('rs', 1, null, ["id" => "rs", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="rs">{{ trans('site.RedKenesh') }}</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- director -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('director', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('director', 1, null, ["id" => "director", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="director">
                        Ген.директор
                    </label>
=======
                        {!! Form::checkbox('director', 1, null, ["id" => "director", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="director">Ген.директор</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- muzkanal -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('muzkanal', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('muzkanal', 1, null, ["id" => "muzkanal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="muzkanal">
                        Муз канал
                    </label>
=======
                        {!! Form::checkbox('muzkanal', 1, null, ["id" => "muzkanal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="muzkanal">Муз канал</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- kyrgyzradio -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('kyrgyzradio', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('kyrgyzradio', 1, null, ["id" => "kyrgyzradio", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="kyrgyzradio">
                        Кыргыз радио
                    </label>
=======
                        {!! Form::checkbox('kyrgyzradio', 1, null, ["id" => "kyrgyzradio", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="kyrgyzradio">Кыргыз радио</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- birinchi -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('birinchi', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('birinchi', 1, null, ["id" => "birinchi", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="birinchi">
                        Биринчи радио
                    </label>
=======
                        {!! Form::checkbox('birinchi', 1, null, ["id" => "birinchi", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="birinchi">Биринчи радио</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- minkiyal -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('minkiyal', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('minkiyal', 1, null, ["id" => "minkiyal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="minkiyal">
                        Мин кыял
                    </label>
=======
                        {!! Form::checkbox('minkiyal', 1, null, ["id" => "minkiyal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="minkiyal">Мин кыял</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- balastan -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('balastan', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('balastan', 1, null, ["id" => "balastan", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="balastan">
                        Баластан
                    </label>
=======
                        {!! Form::checkbox('balastan', 1, null, ["id" => "balastan", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="balastan">Баластан</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- madaniyat -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('madaniyat', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('madaniyat', 1, null, ["id" => "madaniyat", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="madaniyat">
                        Маданият
                    </label>
=======
                        {!! Form::checkbox('madaniyat', 1, null, ["id" => "madaniyat", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="madaniyat">Маданият</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

        <!-- Dostuk -->
        <div class="form-group">
            <label for="parentId" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('dostuk', 0) !!}
<<<<<<< HEAD
                    {!! Form::checkbox('dostuk', 1, null, ["id" => "dostuk", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="dostuk">
                        Достук
                    </label>
=======
                        {!! Form::checkbox('dostuk', 1, null, ["id" => "dostuk", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="dostuk">Достук</label>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
                </div>
            </div>
        </div>

<<<<<<< HEAD


=======
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    </div>

</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>

<<<<<<< HEAD
<a href="{{ route('admin.photoParent.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
=======
<a href="{{ route('admin.photoParent.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
