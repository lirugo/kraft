@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/moderation">Модерация</a>
                <a class="link-bread" href="#">Пользователи компании</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($users) == 0)
                <div class="col-md-12 text-center">
                    <h1>Запросов на изменение профиля - нет.</h1>
                </div>
            @endif
            @foreach($users as $user)
                <div class="col-md-4">
                    <h4 class="text-center">{{$user->company}}</h4>
                    <div class="col-md-6">
                        <hr>
                        <p>{{$user->email}}</p>
                        <p>{{$user->name}}</p>
                        <p>{{$user->phone}}</p>
                    </div>
                    <div class="col-md-6">
                        <hr>
                        <img src="/uploads/avatars/{{ $user->avatar }}" class="avatar"/>
                    </div>
                    <div class="col-md-12">
                        {!! Form::open(['route' => ['moderation.company.users.activate', $user->id], 'method' => 'POST']) !!}
                        {!! Form::submit('Активировать', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
