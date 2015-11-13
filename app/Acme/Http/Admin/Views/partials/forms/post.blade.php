@include('Front::messages.flash')
<script type="text/javascript" src="/vendor/tinymce/js/tinymce/tinymce.min.js"></script>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Канал</label>
            {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "select2_group  form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Категория</label>
            {!! Form::select('category_id', \Model\Category\ModelName::lists('title', 'id')->toArray(), null, ["class" => "select2_group  form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">{{ trans('site.TagsKG') }}</label>
            {!! Form::select('tag_list[]', $tags, null, ["class" => "form-control", "id" => "tag_list", "multiple"]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">{{ trans('site.TagsRU') }}</label>
            {!! Form::select('tag_list2[]', $tags2, null, ["class" => "form-control", "id" => "tag_list2", "multiple"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">{{ trans('site.Publish') }}</label>
            {!! Form::hidden('published', 0) !!}
            {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>


    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Анонс</label>
            {!! Form::hidden('announcement', 0) !!}
            {!! Form::checkbox('announcement', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminHomeTitle') }}</label>
            {!! Form::hidden('general', 0) !!}
            {!! Form::checkbox('general', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">{{ trans('site.TitleKG') }}</label>
            {!! Form::text('title', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Текст на кыргызском{{ trans('site.TextKG') }}</label>
            {!! Form::textarea('content', null, ["class" => "form-control tinymce-container"]) !!}
        </div>
    </div>

    <!-- RU section -->
    <div class="col-xs-12"><hr><hr></div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">{{ trans('site.TitleRU') }}</label>
            {!! Form::text('titleRu', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">{{ trans('site.TextRU') }}</label>
            {!! Form::textarea('contentRu', null, ["class" => "form-control tinymce-container"]) !!}
        </div>
    </div>


     <div class="col-xs-12">
            <div class="fileinput fileinput-new" data-provides="fileinput">
               <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
               <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span><span class="fileinput-exists">{{ trans('site.Change') }}</span>
                 {!! Form::file('thumbnail', null, ["class" => "form-control"]) !!}             
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminPhotoChildSelectGaller') }}</label>
            {!! Form::select('parentId', array('0'=>'--Выберите--')+ $PhotoParentList, null, ["class" => "select2_group  form-control", "title" => ""]) !!}
        </div>
    </div>

     <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminPostThemaone') }}</label>
            
            {!! Form::select('related1', array('default'=>'--Выберите--') + $relatedPosts,null, ["class" => "select2_group  form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminPostThematwo') }}</label>
            {!! Form::select('related2', array('default'=>'--Выберите--') + $relatedPosts,null, ["class" => "select2_group  form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminPostThemathree') }}</label>
            {!! Form::select('related3', array('default'=>'--Выберите--') + $relatedPosts, null, ["class" => "select2_group  form-control", "title" => ""]) !!}
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

<script type="text/javascript">
    tinymce.init({
        selector: "textarea.tinymce-container",
        language: "ru",
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste textcolor",
        ],
        toolbar: "fontselect fontsizeselect forecolor | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | undo redo",
        font_formats: "Calibri=calibri,helvetica,sans-serif;"+
        "Helvetica=helvetica;"+
        "Times New Roman=times new roman,times;"+
        "Verdana=verdana,geneva;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Courier New=courier new,courier;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Impact=impact,chicago;",
        relative_urls: false,
        image_advtab: true ,
    });
</script>