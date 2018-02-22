@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/distributor/{{$users->idback}}">Дистрибьютор</a>
                <a class="link-bread" href="#">Сотрудники компании</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-4" style="padding-bottom: 20px;">
                    <h5><strong>{{ $user->name." ".$user->surname." ".$user->patronymic }}</strong></h5>
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
            @endforeach
        </div>
    </div>
@endsection
