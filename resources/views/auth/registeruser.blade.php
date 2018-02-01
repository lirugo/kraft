@extends('layouts.app')

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
                {!! Form::text('dateofbirth', '1990-09-09' , ['class' => 'form-control m-t-20', 'placeholder' => 'Date of birth']) !!}

                {!! Form::select('sex', ['X' => 'Man', 'Y' => 'Woman'], null, ['class' => 'form-control m-t-20']); !!}

                {!! Form::text('phone', null , ['class' => 'form-control m-t-20', 'placeholder' => 'Phone']) !!}
                {!! Form::email('email', null,['class' => 'form-control m-t-20', 'placeholder' => 'Email']) !!}
                {!! Form::password('password', ['class' => 'form-control m-t-20' , 'placeholder' => 'Password']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control m-t-20', 'placeholder' => 'Confirm Password']) !!}




            </div>

            <div class="col-md-4">
                <h5> You must upload your photo. </h5>
                <hr>
                <label class="btn btn-default">
                    <i class="fa fa-plus"></i>
                    <input type="file" name="avatar" hidden>
                </label>




            </div>



            <div class="col-md-4">

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr>
                {!! Form::submit('Registration', ['class' => 'btn pull-right btn-sm btn-primary m-t-10']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
