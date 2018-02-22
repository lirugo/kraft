@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="padding-left: 60px;">
                <h5>Зарегистрированые дистрибьюторы</h5>
                <hr>
                <br>
                @foreach($users as $user)
                    @if($user->hasRole('distributor'))
                        @php $region = \App\Region::where('region_id', '=', $user->getcompany->region)->first(); @endphp
                        <h5><a href="/manager/distributor/{{ $user->id }}"><strong>{{ $user->getcompany->companyname }}</strong></a></h5>
                        <hr style="margin:0; padding: 0;">
                        <h6>{{ $region->regionname_ru." область" }}</h6>
                        <h6>{{ $user->getcompany->city }}</h6>
                        <h6>{{ $user->name." ".$user->surname." ".$user->patronymic }}</h6>
                        <h6>{{ $user->phone }}</h6>
                        <br>
                    @endif
                @endforeach

            </div>
            <div class="col-md-4 col-md-offset-2">
                <h5>Зарегистрированые Архитекторы</h5>
                <hr>
                <br>
                @foreach($users as $user)
                    @if($user->hasRole('designer'))
                        <h5><strong>{{ $user->name." ".$user->surname." ".$user->patronymic }}</strong></h5>
                        <hr style="margin:0; padding: 0;">
                        <h6>{{ $user->phone }}</h6>
                        <br>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
