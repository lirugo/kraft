@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/manager/users">{{ trans('app.List of Client') }}</a>
                <a class="link-bread" href="/manager/distributor/{{$user->id}}">{{$user->getcompany->companyname}}</a>
                <a class="link-bread" href="#">{{ trans('app.Company Profile') }}</a>
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
                <h5>{{ trans('app.Region') }}: {{ $region->regionname_ru }}</h5>
                <p>{{ trans('app.city') }}: {{ $user->getcompany->city }}</p>
                <p>{{ trans('app.street') }}: {{ $user->getcompany->street }}</p>
                <p>{{ trans('app.house') }}: {{ $user->getcompany->house." Корпус ".$user->getcompany->housing." Офис ".$user->getcompany->office }}</p>
                <p>{{ trans('app.phone') }}: {{ $user->getcompany->phone }}</p>
                <p>Email: {{ $user->email }}</p>
                <br>
                <h5><strong>{{$user->getcompany->companyname}}</strong></h5>
                <hr style="margin: 0;">
                <h5>{{ trans('app.Name') }}: {{ $user->name }}</h5>
                <p>{{ trans('app.Date of Birth') }}: {{ $user->dateofbirth }}</p>
                <p>{{ trans('app.Phone') }}: {{ $user->phone }}</p>
                <p>Email: {{ $user->email }}</p>
            </div>
            <div class="col-md-3 col-md-offset-1"  style="padding-top: 30px;">
                <h5><strong>{{ trans('app.Financial information') }}</strong></h5>
                <hr style="margin: 0;">
                <h5>{{ trans('app.Bank') }}: {{ $user->getcompany->bank }}</h5>
                <p>{{ trans('app.MFO') }}: {{ $user->getcompany->mfo }}</p>
                <p>{{ trans('app.Checking account') }}: {{ $user->getcompany->settlementaccount }}</p>
                <p>{{ trans('app.OKPO') }}: {{ $user->getcompany->okpo }}</p>
                <p>{{ trans('app.Phone') }}: {{ $user->getcompany->lawphone }}</p>
            </div>
            <div class="col-md-3 col-md-offset-1"  style="padding-top: 30px;">
                <a href="/manager/distributor/users/{{ $user->id }}"><h5><strong>{{ trans('app.Employees of the company') }}</strong></h5></a>
                <hr style="margin: 0;">
                @php
                    $users = \App\User::all()->where('company', '=', $user->company);
                @endphp

                @foreach($users as $us)
                    <h5><strong>{{ $us->name }}</strong></h5>
                    <hr style="margin: 0;">
                    <p>{{ trans('app.Phone') }}: {{ $us->phone }}</p>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
