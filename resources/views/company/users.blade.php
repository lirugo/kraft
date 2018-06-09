@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="#">Пользователи компании</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                Зарегистрированные пользователи компании
                <hr style="margin: 0;">
            </div>
        </div>
        <div class="row">
            @foreach($users as $user)
                @if($user->active == true)
                    <div class="col-md-4" style="padding-bottom: 20px;">
                        <h5><strong>{{$user->name }}</strong></h5>
                        <hr style="margin: 0;">
                        <div class="col-md-4">
                            <img src="/uploads/avatars/{{$user->avatar}}" style="
                                            width:100px;
                                            height:100px;
                                            border-radius: 50%;
                                            display: block;
                                            margin: 0 auto;
                                            margin-top: 10px;
                                        "/>
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>Дата рождения: {{ $user->dateofbirth }}</p>
                            <p>Телефон: {{ $user->phone }}</p>
                            <p>Email: {{ $user->email }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                Незарегистрированные пользователи компании
                <hr style="margin: 0;">
            </div>
        </div>
        <div class="row">
            @foreach($users as $user)
                @if($user->active == false)
                    <div class="col-md-4" style="padding-bottom: 20px;">
                        <h5><strong>{{ $user->name}}</strong></h5>
                        <hr style="margin: 0;">
                        <div class="col-md-4">
                            <img src="/uploads/avatars/{{$user->avatar}}" style="
                                            width:100px;
                                            height:100px;
                                            border-radius: 50%;
                                            display: block;
                                            margin: 0 auto;
                                            margin-top: 10px;
                                        "/>
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>Дата рождения: {{ $user->dateofbirth }}</p>
                            <p>Телефон: {{ $user->phone }}</p>
                            <p>Email: {{ $user->email }}</p>
                            <p>

                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
