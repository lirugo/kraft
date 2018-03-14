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
                    <th scope="col">Cube кол-во рейки</th>
                    <th scope="col">Cube стрингер</th>
                    <th scope="col">Cube подвес</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.cube.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('count',$constants->count, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('stringer',$constants->stringer, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('podves',null , ['class' => 'form-control','required','disabled','step' => '0.001', 'min' => '0.000']) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cube рейки цена за шт</th>
                    <th scope="col">Cube стрингер цена за шт</th>
                    <th scope="col">Cube подвес цена за шт</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.tprofile.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('count_price',$constants->count_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('stringer_price',$constants->stringer_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('csusp_price',$constants->csusp_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cube рейка кол-во в уп.</th>
                    <th scope="col">Cube стрингер кол-во в уп.</th>
                    <th scope="col">Cube подвес кол-во в уп.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.tprofile.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('count_pack',$constants->count_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1']) }}</td>
                    <td>{{ Form::number('stringer_pack',$constants->stringer_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1']) }}</td>
                    <td>{{ Form::number('csusp_pack',$constants->csusp_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1']) }}</td>
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
