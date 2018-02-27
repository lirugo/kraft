@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/users">Список клиентов</a>
                <a class="link-bread" href="/manager/distributor/{{$user->id}}">{{$user->getcompany->companyname}}</a>
                <a class="link-bread" href="#">Профиль компании</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="padding: 30px 0 0 50px;">
                <h5><strong>{{$user->getcompany->companyname}}</strong></h5>
                <hr style="margin: 0;">
                @php $region = \App\Region::where('region_id', '=', $user->getcompany->region)->first(); @endphp
                <h5>Область: {{ $region->regionname_ru }}</h5>
                <p>Город: {{ $user->getcompany->city }}</p>
                <p>Улица: {{ $user->getcompany->street }}</p>
                <p>Дом: {{ $user->getcompany->house." Корпус ".$user->getcompany->housing." Офис ".$user->getcompany->office }}</p>
                <p>Телефон: {{ $user->getcompany->phone }}</p>
                <p>Email: {{ $user->email }}</p>
                <br>
                <h5><strong>{{$user->getcompany->companyname}}</strong></h5>
                <hr style="margin: 0;">
                <h5>ФИО: {{ $user->surname." ".$user->name." ".$user->patronymic }}</h5>
                <p>Дата рождения: {{ $user->dateofbirth }}</p>
                <p>Телефон: {{ $user->phone }}</p>
                <p>Email: {{ $user->email }}</p>
            </div>
            <div class="col-md-3 col-md-offset-1"  style="padding-top: 30px;">
                <h5><strong>Финансовые реквизиты</strong></h5>
                <hr style="margin: 0;">
                <h5>Банк: {{ $user->getcompany->bank }}</h5>
                <p>МФО: {{ $user->getcompany->mfo }}</p>
                <p>Рассчетный счет: {{ $user->getcompany->settlementaccount }}</p>
                <p>ОКПО: {{ $user->getcompany->okpo }}</p>
                <p>Телефон: {{ $user->getcompany->lawphone }}</p>
            </div>
            <div class="col-md-3 col-md-offset-1"  style="padding-top: 30px;">
                <a href="/manager/distributor/users/{{ $user->id }}"><h5><strong>Сотрудники компании</strong></h5></a>
                <hr style="margin: 0;">
                @php
                    $users = \App\User::all()->where('company', '=', $user->company);
                @endphp

                @foreach($users as $us)
                    <h5><strong>{{ $us->surname." ".$us->name." ".$us->patronymic }}</strong></h5>
                    <hr style="margin: 0;">
                    <p>Телефон: {{ $us->phone }}</p>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
