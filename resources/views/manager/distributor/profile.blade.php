@extends('layouts.app')
@section('breads')
    <a class="link-bread" href="/manage">Панель управления</a>
    <a class="link-bread" href="/manager/distributor/{{$user->id}}">Дистрибьютор</a>
    <a class="link-bread" href="#">Профиль компании</a>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="padding: 30px 0 0 50px;">
                <h5>{{$user->getcompany->companyname}}</h5>
                <hr style="margin: 0;">
                @php $region = \App\Region::where('region_id', '=', $user->getcompany->region)->first(); @endphp
                

            </div>
        </div>
    </div>
@endsection
