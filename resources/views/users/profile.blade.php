@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $user->name }}'s Profile</div>

                    <div class="panel-body">
                        <img src="/uploads/avatars/{{ $user->avatar }}" class="avatar"/>
                        {!! Form::open(['method' => 'POST', 'route' =>['profile.update'], 'files' => true]) !!}
                        <h2>Profile</h2>
                            {!! Form::label('avatar', 'Update profile Image') !!}
                            {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
                        <div class="row"> <div class="col-md-12"> </div> </div>

                        <div class="row">
                            <div class="col-md-4">
                                <hr>
                                {!! Form::label('name', 'Name', ['class' => 'm-t-10']) !!}
                                {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}

                                {!! Form::label('surname', 'Surname', ['class' => 'm-t-10']) !!}
                                {!! Form::text('surname', $user->surname, ['class' => 'form-control']) !!}

                                {!! Form::label('patronymic', 'Patronymic', ['class' => 'm-t-10']) !!}
                                {!! Form::text('patronymic', $user->patronymic, ['class' => 'form-control']) !!}

                                {!! Form::label('email', 'Email', ['class' => 'm-t-10']) !!}
                                {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}

                                {!! Form::label('dateofbirth', 'Date of birth', ['class' => 'm-t-10']) !!}
                                {!! Form::text('dateofbirth', $user->dateofbirth, ['class' => 'form-control']) !!}

                                {!! Form::label('sex', 'Sex', ['class' => 'm-t-10']) !!}
                                {!! Form::text('sex', $user->sex, ['class' => 'form-control']) !!}

                                {!! Form::label('phone', 'Phone', ['class' => 'm-t-10']) !!}
                                {!! Form::text('phone', $user->phone, ['class' => 'form-control']) !!}


                                {!! Form::submit('Update Profile', ['class' => 'btn pull-right btn-sm btn-primary m-t-10']) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection