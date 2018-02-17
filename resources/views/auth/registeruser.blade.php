@extends('layouts.app')
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="/css/dropzone.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5> {{trans('app.userprofile')}} </h5>
                <hr>
                {!! Form::open(['method' => 'POST', 'route' =>['register.user'], 'files' => true]) !!}
                {!! Form::text('name', null , ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.name')]) !!}
                {!! Form::text('surname', null , ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.surname')]) !!}
                {!! Form::text('patronymic', null , ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.patronymic')]) !!}
                {!! Form::text('dateofbirth',null , ['class' => 'form-control m-t-20','required',  'id' => 'datepicker', 'placeholder' => trans('app.date')]) !!}
                {!! Form::select('sex', ['X' => trans('app.male'), 'Y' => trans('app.femele')], null, ['class' => 'form-control m-t-20', 'required']); !!}
                {!! Form::text('phone', null , ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.phone')]) !!}
                {!! Form::email('email', null,['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.email')]) !!}
                {!! Form::password('password', ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.password')]) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.confirmpassword')]) !!}
            </div>
            <div class="col-md-4 text-center">
                <h5> {{trans('app.uploadavatar')}} </h5>
                <hr>
                {!! Form::hidden('avatar', null , ['class' => 'form-control m-t-20 m-b-20', 'id' => 'upl', 'placeholder' => 'avatar', 'readonly']) !!}
                <div id="iamgeUpload" class="dropzone"></div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                {!! Form::submit(trans('app.registration'), ['class' => 'botton pull-right btn-sm botton-primary m-t-10']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#iamgeUpload", {
            url:'/upload/avatar',
            type:'POST',
            maxFilesize:3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            maxFiles: 1,
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{{ csrf_token() }}}");
            },
            init: function() {
                var myDropzone = this;
                this.on('success', function(file, response) {
                    document.getElementById('upl').value = response.success;
                })
            }
        });
    </script>
@endsection
