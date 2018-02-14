@extends('layouts.app')
@section('breadcrumbs')

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 50px;">
                            {{$user->name}}
                            <button class="btn btn-danger btn-sm pull-right">Delete</button>
                            {!! Form::model($user,['route' => ['manger.user.activate', $user->id], 'method' => 'POST']) !!}
                            <button class="btn btn-danger btn-sm pull-right">{{$user->active == true ? "Отключить" : "Активировать"}}</button>
                            {!! Form::close() !!}
                            {!! Form::model($user,['route' => ['manger.user.verified', $user->id], 'method' => 'POST']) !!}
                            <button class="btn btn-danger btn-sm pull-right">{{$user->active == true ? "Непроверен" : "Проверен"}}</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <hr>
                                <p>{{trans('app.name')}}: {{$user->name}}</p>
                                <p>{{trans('app.surname')}}: {{$user->surname}}</p>
                                <p>{{trans('app.patronymic')}}: {{$user->patronymic}}</p>
                                <p>{{trans('app.dateofbirth')}}: {{$user->dateofbirth}}</p>
                                <p>{{trans('app.gender')}}: {{$user->sex == 'X' ? trans('app.male') : trans('app.femele')}}</p>
                                <p>{{trans('app.email')}}: {{$user->email}}</p>
                                <p>{{trans('app.phone')}}: {{$user->phone}}</p>
                            </div>
                            <div class="col-md-4">
                                <hr>
                                <img src="/uploads/avatars/{{$user->avatar}}" style="
                                    width:150px;
                                    height:150px;
                                    border-radius: 50%;
                                    display: block;
                                    margin: 0 auto;
                                "/>
                            </div>
                            <div class="col-md-4">
                                <hr>
                                    <p>Активен: {{$user->active == true ? "Да" : "Нет"}}</p>
                                    <p>Проверен: {{$user->verified == true ? "Да" : "Нет"}} </p>
                                </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection