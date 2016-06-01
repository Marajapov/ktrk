<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">

	<script src="{{ asset('js/dropzone.js') }}"></script>
</head>
<body>
	{!! Form::open(array('route' => 'admin.test.uploadFiles', 'enctype' => 'multipart/form-data', 'class'=>'dropzone', 'id'=>'dropzoneFileUpload')) !!}
	{!! Form::close() !!}
	<script type="text/javascript">

        var baseUrl = "{{ url('/') }}";
        var token = "{{ Session::getToken() }}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#dropzoneFileUpload", {
        	// url: "{{ route('admin.test.uploadFiles') }}",
            // params: {
            // 	_token: token
            // }
        });
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 30, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                  
            },
        };
    </script>

</body>
</html>