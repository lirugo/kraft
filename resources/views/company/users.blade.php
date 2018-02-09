@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height: 50px;">
                            {{$user->name}}
                            <button class="btn btn-danger btn-sm pull-right">Delete</button>
                            <button class="btn btn-primary btn-sm pull-right"  style="margin-right: 5px;">Edit</button>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <hr>
                                <p>Имя - {{$user->name}}</p>
                                <p>Фамилия  - {{$user->surname}}</p>
                                <p>Отчество - {{$user->patronymic}}</p>
                                <p>Дата рождения - {{$user->dateofbirth}}</p>

                            </div>
                            <div class="col-md-4">
                                <hr>
                                <p>Пол - {{$user->sex == 'X' ? trans('app.male') : trans('app.femele')}}</p>
                                <p>Email - {{$user->email}}</p>
                                <p>Телефон - {{$user->phone}}</p>
                            </div>
                            <div class="col-md-4">
                                <hr>
                                <img src="/uploads/avatars/default.jpg" style="
                                    width:150px;
                                    height:150px;
                                    border-radius: 50%;
                                    display: block;
                                    margin: 0 auto;
                                "/>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
