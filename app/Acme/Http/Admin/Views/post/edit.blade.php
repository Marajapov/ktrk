@extends('Admin::layouts.default')
@section('title', $post->getTitle())

@section('content')

{!! Form::model($post, ['route' => ['admin.post.update', $post], 'method' => 'PUT']) !!}
@include('Admin::partials.forms.post', [$post, $tags])
{!! Form::close() !!}

@stop

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#tag_list').select2({
        ajax: {
            url: "/api/tags",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    tag: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: 'Выберите тег',
        tags: true,
        tokenSeparators: [',', ' '],
        minimumInputLength: 1,
    });
</script>
@stop
