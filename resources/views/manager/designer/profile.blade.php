@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/users">Дистрибьюторы</a>
                <a class="link-bread" href="#">Профиль дизайнера</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="padding: 30px 0 0 50px;">
                <h5><strong>{{$user->name." ".$user->patronymic." ".$user->surname}}</strong></h5>
                <hr>
                <p>Дата рождения: {{ $user->dateofbirth }}</p>
                <p>Моб. телефон: {{ $user->phone }}</p>
                <p>Email: {{ $user->email }}</p>
                <p>Стаж работы, кол-во лет: {{ $user->workexperience }}</p>
                <p>Сайт: <a href="http://{{ $user->site }}">{{ $user->site }}</a></p>
                <p>
                    @if(!empty($user->social1))<a href="{{$user->social1}}"><i class="fa fa-facebook-official fa-3x" style="color:#3b5998;" aria-hidden="true"></i></a>@endif
                    @if(!empty($user->social2))<a href="{{$user->social2}}"><i class="fa fa-linkedin-square fa-3x" style="color:#0274b3;" aria-hidden="true"></i></a>@endif
                    @if(!empty($user->social3))<a href="{{$user->social3}}"><i class="fa fa-twitter-square fa-3x" style="color:black" aria-hidden="true"></i></a>@endif
                <p>Место работы:
                @if($user->work_user == "himself")
                    Работает на себя
                @elseif($user->work_user == "company")
                    <br>Компания: {{ $user->companyname }}
                    <br>Город: {{ $user->companycity }}
                    <br>Сайт компании: <a href="http://{{ $user->companysite }}">{{ $user->companysite }}</a>
                @endif
                </p>
                <p>Коментарий: {{$user->comments}}</p>
            </div>

        </div>
    </div>
@endsection
