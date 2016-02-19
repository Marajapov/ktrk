@include('Front::messages.flash')

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
                                    Анонс 1
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
            <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.Content') }}</label>
            <div class="col-sm-10">
                {!! Form::textarea('description', null, ["class" => "form-control", "title" => "","id" => "editKg"]) !!}
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