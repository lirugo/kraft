@extends('layouts.app')

@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5> You must fill out a user profile. </h5>
                <hr>

                {!! Form::open(['method' => 'POST', 'route' =>['register.user'], 'files' => true]) !!}

                {!! Form::text('name', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Name']) !!}
                {!! Form::text('surname', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Surname']) !!}
                {!! Form::text('patronymic', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Patronymic']) !!}
                {!! Form::text('dateofbirth',null , ['class' => 'form-control m-t-20', 'id' => 'datepicker', 'placeholder' => 'YYYY/MM/DD']) !!}

                {!! Form::select('sex', ['X' => trans('app.male'), 'Y' => trans('app.femele')], null, ['class' => 'form-control m-t-20']); !!}

                {!! Form::text('phone', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Phone']) !!}
                {!! Form::email('email', null,['class' => 'form-control m-t-20', 'placeholder' => 'Email']) !!}
                {!! Form::password('password', ['class' => 'form-control m-t-20' , 'placeholder' => 'Password']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control m-t-20', 'placeholder' => 'Confirm Password']) !!}

            </div>
            <div class="col-md-4">
                <h5> You must upload your photo. </h5>
                <hr>
                <label class="botton botton-default">
                    <i class="fa fa-plus"></i>
                    <input type="file" name="avatar" hidden>
                </label>
            </div>

            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr>
                {!! Form::submit('Registration', ['class' => 'botton pull-right btn-sm botton-primary m-t-10']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>
@endsection
