@include('Front::messages.flash')
<script type="text/javascript" src="/vendor/tinymce/js/tinymce/tinymce.min.js"></script>

@section('styles')
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

<div class="row">
    
    <div class="panel panel-success">

        <div class="panel-heading">
            <h3 class="panel-title">Общая информация</h3>
        </div>

        <div class="panel-body">

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Канал</label>
                            {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "select2_group  form-control", "required" => true, "title" => ""]) !!}
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Категория</label>
                            {!! Form::select('category_id', \Model\Category\ModelName::lists('titleRu', 'id')->toArray(), null, ["class" => "select2_group  form-control", "required" => true, "title" => ""]) !!}
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">{{ trans('site.AdminPhotoChildSelectGaller') }}</label>
                            {!! Form::select('parentId', array('0'=>'--Выберите--')+ $PhotoParentList, null, ["class" => "select2_group  form-control", "title" => ""]) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">{{ trans('site.Publish') }}</label>
                            {!! Form::hidden('published', 0) !!}
                            {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Анонс</label>
                            {!! Form::hidden('announcement', 0) !!}
                            {!! Form::checkbox('announcement', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">{{ trans('site.AdminHomeTitle') }}</label>
                            {!! Form::hidden('general', 0) !!}
                            {!! Form::checkbox('general', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="control-label" style="display:block;">Миниатюра</label>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file"><span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span>
                                    <span class="fileinput-exists">{{ trans('site.Change') }}</span>
                                 {!! Form::file('thumbnail', null, ["class" => "form-control"]) !!}             
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

            <div class="col-xs-12">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.TitleKG') }}</label>
                    {!! Form::text('title', null, ["class" => "form-control", "required" => true]) !!}
                </div>
            </div>

            <div class="col-xs-12">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.TextKG') }}</label>
                    {!! Form::textarea('content', null, ["class" => "form-control", "id" => "editKg"]) !!}
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.TagsKG') }}</label>
                    {!! Form::select('tag_list[]', $tags, null, ["class" => "form-control", "id" => "tag_list", "multiple"]) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.AdminPostThemaone') }}</label>
                    
                    {!! Form::select('related1', array('default'=>'--Выберите--') + $relatedPosts,null, ["class" => "select2_group  form-control", "title" => ""]) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.AdminPostThematwo') }}</label>
                    {!! Form::select('related2', array('default'=>'--Выберите--') + $relatedPosts,null, ["class" => "select2_group  form-control", "title" => ""]) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.AdminPostThemathree') }}</label>
                    {!! Form::select('related3', array('default'=>'--Выберите--') + $relatedPosts, null, ["class" => "select2_group  form-control", "title" => ""]) !!}
                </div>
            </div>

        </div>
    </div> 

    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">Информация на русском</h3>
        </div>
        <div class="panel-body">

            <div class="col-xs-12">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.TitleRU') }}</label>
                    {!! Form::text('titleRu', null, ["class" => "form-control"]) !!}
                </div>
            </div>

            <div class="col-xs-12">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.TextRU') }}</label>
                    {!! Form::textarea('contentRu', null, ["class" => "form-control", "id" => "editRu"]) !!}
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.TagsRU') }}</label>
                    {!! Form::select('tag_list2[]', $tags2, null, ["class" => "form-control", "id" => "tag_list2", "multiple"]) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.AdminPostThemaone') }}</label>
                    
                    {!! Form::select('related1', array('default'=>'--Выберите--') + $relatedPosts2,null, ["class" => "select2_group  form-control", "title" => ""]) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.AdminPostThematwo') }}</label>
                    {!! Form::select('related2', array('default'=>'--Выберите--') + $relatedPosts2,null, ["class" => "select2_group  form-control", "title" => ""]) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.AdminPostThemathree') }}</label>
                    {!! Form::select('related3', array('default'=>'--Выберите--') + $relatedPosts2, null, ["class" => "select2_group  form-control", "title" => ""]) !!}
                </div>
            </div>

        </div>
    </div>  
    
    <div><br></div>

</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.post.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

<div><br></div>
<div><br></div>
<div><br></div>

 <!-- select2 -->
<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /select2 -->

