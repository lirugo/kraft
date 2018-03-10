@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/admin/manage">Admin</a>
                <a class="link-bread" href="/admin/calc">Калькулятор</a>
                <a class="link-bread" href="#">T-Профиль</a>
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
                    <th scope="col">Т-профиль 3600 мм</th>
                    <th scope="col">Т-профиль 1200 мм</th>
                    <th scope="col">Т-профиль 600 мм</th>
                    <th scope="col">L 3000 мм</th>
                    <th scope="col">Подвес</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.tprofile.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('tp3600',$constants->tp3600, ['class' => 'form-control','required','step' => '0.01', 'min' => '0.00']) }}</td>
                    <td>{{ Form::number('tp1200',$constants->tp1200, ['class' => 'form-control','required','step' => '0.1', 'min' => '0.00']) }}</td>
                    <td>{{ Form::number('tp600',$constants->tp600, ['class' => 'form-control','required','step' => '0.1', 'min' => '0.00']) }}</td>
                    <td>{{ Form::number('L3000',$constants->L3000, ['class' => 'form-control','required','step' => '1', 'min' => '0.00']) }}</td>
                    <td>{{ Form::number('susp',$constants->susp, ['class' => 'form-control','required','step' => '0.1', 'min' => '0.00']) }}</td>
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
