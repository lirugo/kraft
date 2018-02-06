@extends('layouts.app')

@section('stylesheets')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5> You must fill out a user profile. </h5>
                <hr>

                {!! Form::open(['method' => 'POST', 'route' =>['register.user'], 'files' => true]) !!}

                {!! Form::text('name', null , ['class' => 'all-form m-t-20', 'placeholder' => 'Name']) !!}
                {!! Form::text('surname', null , ['class' => 'all-form m-t-20', 'placeholder' => 'Surname']) !!}
                {!! Form::text('patronymic', null , ['class' => 'all-form m-t-20', 'placeholder' => 'Patronymic']) !!}
                {!! Form::text('dateofbirth', '1990-09-09' , ['class' => 'all-form m-t-20', 'placeholder' => 'Date of birth']) !!}

                {!! Form::select('sex', ['X' => 'Man', 'Y' => 'Woman'], null, ['class' => 'all-form m-t-20']); !!}

                {!! Form::text('phone', null , ['class' => 'all-form m-t-20', 'placeholder' => 'Phone']) !!}
                {!! Form::email('email', null,['class' => 'all-form m-t-20', 'placeholder' => 'Email']) !!}
                {!! Form::password('password', ['class' => 'all-form m-t-20' , 'placeholder' => 'Password']) !!}
                {!! Form::password('password_confirmation', ['class' => 'all-form m-t-20', 'placeholder' => 'Confirm Password']) !!}

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

@endsection
