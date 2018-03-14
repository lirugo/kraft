@extends('layouts.admin')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/admin/manage">Admin</a>
                <a class="link-bread" href="/admin/calc">Калькулятор</a>
                <a class="link-bread" href="#">Cube</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Led коэффициент</th>
                    <th scope="col">Led цена за шт</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.led.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('coefficient_led',$constants->coefficient_led, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('price_led',$constants->price_led, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
