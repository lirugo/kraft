@extends('layouts.admin')

@section('breadcrumbs')
    {!! Breadcrumbs::render('createuser') !!}
@endsection

@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="/css/dropzone.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        {!! Form::open(['method' => 'POST', 'route' =>['admin.users.create'], 'files' => true]) !!}
        <div class="row">
            <div class="col-md-4">
                <h5> {{trans('app.userprofile')}} </h5>
                <hr>
                {!! Form::text('name', null , ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.name')]) !!}
                {!! Form::text('dateofbirth',null , ['class' => 'form-control m-t-20','required',  'id' => 'datepicker', 'placeholder' => trans('app.date')]) !!}
                {!! Form::select('sex', ['X' => trans('app.male'), 'Y' => trans('app.femele')], null, ['class' => 'form-control m-t-20', 'required']); !!}
                {!! Form::text('phone', null , ['class' => 'form-control m-t-20', 'required','pattern' => '(\+38)[ 0-9]{10}', 'title' => '+38 XXX XXX XXXX', 'placeholder' => trans('app.phone')."*"]) !!}
                {!! Form::email('email', null,['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.email')]) !!}
                {!! Form::password('password', ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.password')]) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control m-t-20', 'required', 'placeholder' => trans('app.confirmpassword')]) !!}
            </div>
            <div class="col-md-4">
                <h5> {{trans('app.uploadavatar')}} </h5>
                <hr>
                {!! Form::text('avatar', null , ['class' => 'form-control m-t-20 m-b-20 ','hidden','id' => 'upl', 'placeholder' => 'avatar', 'readonly']) !!}
                <div id="iamgeUpload" class="dropzone text-center"></div>
                <hr>
                <select id="role_user" name="role" class="form-control" required>
                    <option value="" selected disabled>{{ trans('admin.selectuserrole') }}</option>
                    <option id="manager" value="manager">{{ trans('admin.managerrole') }}</option>
                    <option id="top-manager" value="top-manager">{{ trans('admin.toprole') }}</option>
                </select>

                <div id="region" class="m-t-20">
                    <h5>{{ trans('admin.regionrole') }}</h5>
                    <select name="regionname" class="form-control">
                        <option value="center">{{ trans('admin.centerrole') }}</option>
                        <option value="east">{{ trans('admin.eastrole') }}</option>
                        <option value="south">{{ trans('admin.southrole') }}</option>
                        <option value="west">{{ trans('admin.westrole') }}</option>
                        <option value="shop">Shop</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit(trans('app.registration'), ['class' => 'botton pull-right btn-sm botton-primary m-t-10']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose:true,
            defaultViewDate: {
                year: 1980,
                month: 0,
                day: 1
            }
        });
    </script>
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

        $(function() {
            $("#role_user").change(function() {
                if ($("#manager").is(":selected")) {
                    $("#region").show();
                } else {
                    $("#region").hide();
                }
            }).trigger('change');
        });
    </script>
@endsection