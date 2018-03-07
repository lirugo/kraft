@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/managers">Менеджеры</a>
                <a class="link-bread" href="#">{{$user->name." ".$user->surname}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="/uploads/avatars/{{ $user->avatar }}" class="avatar"/>
                <h2>Profile</h2>
                {!! Form::label('avatar', 'Update profile Image') !!}
                {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
                <div class="row"> <div class="col-md-12"> </div> </div>
                <div class="row">
                    <div class="col-md-4">
                        <hr>
                        {!! Form::label('surname', 'Surname', ['class' => 'm-t-10']) !!}
                        {!! Form::text('surname', $user->surname, ['class' => 'form-control']) !!}
                        {!! Form::label('name', 'Name', ['class' => 'm-t-10']) !!}
                        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                        {!! Form::label('patronymic', 'Patronymic', ['class' => 'm-t-10']) !!}
                        {!! Form::text('patronymic', $user->patronymic, ['class' => 'form-control']) !!}
                        {!! Form::label('email', 'Email', ['class' => 'm-t-10']) !!}
                        {!! Form::text('email', $user->email, ['class' => 'form-control', 'readonly']) !!}
                        {!! Form::label('dateofbirth', 'Date of birth', ['class' => 'm-t-10']) !!}
                        {!! Form::text('dateofbirth', $user->dateofbirth, ['class' => 'form-control', 'id' => 'datepicker']) !!}
                        {!! Form::label('sex', 'Sex', ['class' => 'm-t-10']) !!}
                        {!! Form::label('sex', $user->sex == 'x' ? trans('app.male') : trans('app.femele'), ['class' => 'form-control']) !!}
                        {!! Form::label('phone', 'Phone', ['class' => 'm-t-10']) !!}
                        {!! Form::text('phone', $user->phone, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
