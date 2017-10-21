@include('Front::messages.flash')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/tokenfield-typeahead.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-tokenfield.css') }}"/>

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
<div class="panel panel-success">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">Канал</label>
            <div class="col-sm-10">
                {!! Form::select('channel', ['0'=>'-- Выберите --']+$channels, null, ["id"=>"category","class" => "selectpicker form-control", "data-live-search"=>"true", "required" => true, "title" => ""]) !!}
            </div>
            <div class="col-sm-10 pull-right" style="margin-top: 10px;"> 

                <div id="balastanAnons" class="col-sm-4 panel-success display-none">
                    <div class="panel-heading">
                        <h3 class="panel-title">Баластан</h3>
                    </div>

                    <!-- skoro -->
                    <div class="form-group">
                        <label for="parentId" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12">
                            <div class="checkbox checkbox-primary ">
                                {!! Form::hidden('balastansoon', 0) !!}
                                {!! Form::checkbox('balastansoon', 1, null, ["id" => "balastansoon", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                                <label for="balastansoon">
                                    Жакында
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="madaniyatAnons" class="col-sm-4 panel-success display-none">
                    <div class="panel-heading">
                        <h3 class="panel-title">Маданият</h3>
                    </div>

                    <!-- skoro -->
                    <div class="form-group">
                        <label for="parentId" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12">
                            <div class="checkbox checkbox-primary ">
                                {!! Form::hidden('madaniyatsoon', 0) !!}
                                {!! Form::checkbox('madaniyatsoon', 1, null, ["id" => "madaniyatsoon", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                                <label for="madaniyatsoon">
                                    Жакында
                                </label>
                            </div>
                        </div>
                    </div>
                </div>                

                <div id="kyrgyzradioanons" class="col-sm-4 panel-success display-none">
                    <div class="panel-heading">
                        <h3 class="panel-title">Кыргыз Радио</h3>
                    </div>

                    <!-- skoro -->
                    <div class="form-group">
                        <label for="parentId" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12">
                            <div class="checkbox checkbox-primary ">
                                {!! Form::hidden('kyrgyzradiotop', 0) !!}
                                {!! Form::checkbox('kyrgyzradiotop', 1, null, ["id" => "kyrgyzradiotop", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                                <label for="kyrgyzradiotop">
                                    Уктуруулар Анонс
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div id="minkiyalAnons" class="col-sm-4 panel-success display-none">
                    <div class="panel-heading">
                        <h3 class="panel-title">Миң Кыял</h3>
                    </div>
                    <!-- bir -->
                    <div class="form-group">
                        <label for="parentId" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12">
                            <div class="checkbox checkbox-primary ">
                                {!! Form::hidden('minkiyaltop', 0) !!}
                                {!! Form::checkbox('minkiyaltop', 1, null, ["id" => "minkiyaltop", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                                <label for="minkiyaltop">
                                    Верхний анонс
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- eki -->
                    <div class="form-group">
                        <label for="parentId" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12" style="top: -15px;">
                            <div class="checkbox checkbox-primary ">
                                {!! Form::hidden('minkiyalbottom', 0) !!}
                                {!! Form::checkbox('minkiyalbottom', 1, null, ["id" => "minkiyalbottom", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                                <label for="minkiyalbottom">
                                    Анонс 2
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="dostukAnons" class="col-sm-4 panel-success display-none">
                    <div class="panel-heading">
                        <h3 class="panel-title">Достук</h3>
                    </div>
                    <!-- bir -->
                    <div class="form-group">
                        <label for="parentId" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12">
                            <div class="checkbox checkbox-primary ">
                                {!! Form::hidden('dostuktop', 0) !!}
                                {!! Form::checkbox('dostuktop', 1, null, ["id" => "dostuktop", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                                <label for="dostuktop">
                                    Анонс
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="musicAnons" class="col-sm-4 panel-success display-none">
                    <div class="panel-heading">
                        <h3 class="panel-title">Музыка</h3>
                    </div>
                    <!-- bir -->
                    <div class="form-group">
                        <label for="parentId" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12">
                            <div class="checkbox checkbox-primary ">
                                {!! Form::hidden('musictop', 0) !!}
                                {!! Form::checkbox('musictop', 1, null, ["id" => "musictop", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                                <label for="musictop">
                                    Анонс
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div id="nameKg" class="form-group display-none">
            <label class="col-sm-2 control-label">{{ trans('site.TitleKG') }}</label>
            <div class="col-sm-10">
                {!! Form::text('name', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>

        <div id="nameRu" class="form-group display-none">
            <label class="col-sm-2 control-label">{{ trans('site.TitleRU') }}</label>
            <div class="col-sm-10">
                {!! Form::text('nameRu', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>

        <div id="editorTextArea" class="form-group display-none">
            <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TextKG') }}</label>
            <div class="col-sm-10">
                {!! Form::textarea('description', null, ["class" => "form-control", "title" => "","id" => "editKg"]) !!}
            </div>
        </div>

        <div id="editorTextAreaRu" class="form-group display-none">
            <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TextRU') }}</label>
            <div class="col-sm-10">
                {!! Form::textarea('descriptionRu', null, ["class" => "form-control", "title" => "","id" => "editRu"]) !!}
            </div>
        </div>

        <div id="linkArea" class="form-group display-none">
            <label class="col-sm-2 control-label">Ссылка</label>
            <div class="col-sm-10">
                {!! Form::text('url', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>

        <div id="weekDayKg" class="form-group display-none">
            <label class="col-sm-2 control-label">{{ trans('site.AdminAnonsWeekDay') }}</label>
            <div class="col-sm-10">
                {!! Form::text('weekday', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>

        <div id="weekDayRu" class="form-group display-none">
            <label class="col-sm-2 control-label">{{ trans('site.AdminAnonsWeekDayRu') }}</label>
            <div class="col-sm-10">
                {!! Form::text('weekdayRu', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>

        <div id="timeArea" class="form-group display-none">
            <label class="col-sm-2 control-label">{{ trans('site.AdminAnonsTime') }}</label>
            <div class="col-sm-10">
                {!! Form::text('time', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>

        <div id="media" class="form-group display-none">
            <label class="col-sm-2 control-label">Порядок</label>
            <div class="col-sm-4">
                {!! Form::text('media', null, ["class" => "form-control"]) !!}
            </div>
        </div>

        <!-- Thumb -->
        <div id="thumbForm" class="form-group display-none">
            <label for="parentId" class="col-sm-2 control-label">Файл</label>
            <div class="col-sm-10">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 250px; height: 150px;">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 150px;"></div>
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

        <div id="publish" class="row col-md-12 display-none">
            <label for="parentId" class="col-sm-2 control-label">&nbsp;</label>
            <div class="form-group col-md-2">
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
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.anons.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>