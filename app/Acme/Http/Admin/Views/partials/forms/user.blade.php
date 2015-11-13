@include('Front::messages.flash')

<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminUserName') }}</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label class="control-label">Канал</label>
            {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label class="control-label">Роль</label>
            {!! Form::select('role', ['ADMIN' => 'admin', 'MANAGER' => 'manager'], null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label class="control-label">Почта</label>
            {!! Form::email('email', null, ["class" => "form-control tinymce-container"]) !!}
        </div>
    </div>

</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.user.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

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