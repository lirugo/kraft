@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/report/{{$report->object->id}}">Отчеты</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
    <link href="/css/dropzone.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        {!! Form::open(['route' => ['report.upload', $report->id], 'method' => 'POST']) !!}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::label('label', "Report") !!}
                <hr>
                <div id="scanUpload" class="dropzone"></div>
                <div id="boatAddForm"></div>
                <br>
                {!! Form::textarea('comments',null ,['class' => 'form-control', 'placeholder' => 'Комментарий к отчету', 'required']) !!}
                <br>
                {!! Form::submit('Send', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#scanUpload", {
            url:'/upload/report',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            init: function() {
                var myDropzone = this;
                this.on('success', function(file, response) {
                    $("#boatAddForm").append($('<input type="hidden" ' +
                        'name="photos[]" ' +
                        'value="' + response.success + '">'));
                })
            }
        });
    </script>
@endsection
