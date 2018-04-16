@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/users">Список клиентов</a>
                <a class="link-bread" href="/manager/distributor/{{ $company->user_id }}">{{$company->companyname}}</a>
                <a class="link-bread" href="#">Скидки</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="text-center">{{$company->companyname}}</h3>
                {!! Form::model($company,['route' => ['manager.distributor.discount.update',$company->user_id], 'method' => 'POST']) !!}
                <div class="col-md-3">
                    <img src="/img/icon/calc/tprofile.png" onclick="showTProfile()" width="150px"/>
                    <h4>T-Profile Discount</h4>
                    {!! Form::number('tprofile', $company->discount_tprofile, ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
                </div>
                <div class="col-md-3">
                    <img src="/img/icon/calc/grilyato.png"  onclick="showGrilyato()" width="150px"/>
                    <h4>Grilyato Discount</h4>
                    {!! Form::number('grilyato', $company->discount_grilyato, ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
                </div>
                <div class="col-md-3">
                    <img src="/img/icon/calc/cube.png" width="150px"/>
                    <h4>Cube Discount</h4>
                    {!! Form::number('cube', $company->discount_cube, ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
                </div>
                <div class="col-md-3">
                    <img src="/img/icon/calc/led.png" width="150px"/>
                    <h4>Led Discount</h4>
                    {!! Form::number('led', $company->discount_led, ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
                </div>
                {!! Form::submit('Save',['class' => 'botton botton-primary pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
