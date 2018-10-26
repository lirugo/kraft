@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Panel Control')}}</a>
            </div>
        </div>
    </div>
@endsection
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css"
          rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="/uploads/avatars/{{ $user->avatar }}" class="avatar"/>
                        {!! Form::open(['method' => 'POST', 'route' =>['profile.update'], 'files' => true]) !!}
                        <h2>{{trans('app.profile')}}</h2>
                        {!! Form::label('avatar', trans('app.Update profile image')) !!}
                        {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <hr>
                                {!! Form::label('name', trans('app.Name'), ['class' => 'm-t-10']) !!}
                                {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}

                                {!! Form::label('email', 'Email', ['class' => 'm-t-10']) !!}
                                {!! Form::text('email', $user->email, ['class' => 'form-control', 'readonly']) !!}

                                {!! Form::label('dateofbirth', trans('app.Date of Birth'), ['class' => 'm-t-10']) !!}
                                {!! Form::text('dateofbirth', $user->dateofbirth, ['class' => 'form-control', 'id' => 'datepicker']) !!}

                                {!! Form::label('sex', trans('app.Sex'), ['class' => 'm-t-10']) !!}
                                {!! Form::label('sex', $user->sex == 'x' || $user->sex == 'X' ? trans('app.male') : trans('app.femele'), ['class' => 'form-control']) !!}

                                {!! Form::label('phone', trans('app.Phone'), ['class' => 'm-t-10']) !!}
                                {!! Form::text('phone', $user->phone, ['class' => 'form-control', 'pattern' => '^(\+380)[0-9]{9}$', 'title' => '+380XXXXXXXXX']) !!}

                                {!! Form::submit(trans('app.Update Profile'), ['class' => 'btn pull-right btn-sm btn-primary m-t-10']) !!}

                                {!! Form::close() !!}
                            </div>
                            <div class="col-md-4">
                                <hr>
                                {!! Form::open(['route' => 'profile.password.update']) !!}
                                {!! Form::label('current_password', trans('app.Current Password'), ['class' => 'm-t-10']) !!}
                                {!! Form::password('current_password', ['class' => 'form-control', 'required']) !!}
                                {!! Form::label('password', trans('app.New Password'), ['class' => 'm-t-10']) !!}
                                {!! Form::password('password', ['class' => 'form-control', 'required', 'minlength' => 8]) !!}
                                {!! Form::label('password_confirmation', trans('app.Confirm New Password'), ['class' => 'm-t-10']) !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'required', 'minlength' => 8]) !!}
                                {!! Form::submit(trans('app.Update Password'), ['class' => 'btn pull-right btn-sm btn-primary m-t-10']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/datepicker.js"></script>
@endsection