@extends('layouts.admin')
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
                    <td>{{ Form::number('tp3600',$constants->tp3600, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('tp1200',$constants->tp1200, ['class' => 'form-control','required','step' => '0.1', 'min' => '0.00']) }}</td>
                    <td>{{ Form::number('tp600',$constants->tp600, ['class' => 'form-control','required','step' => '0.1', 'min' => '0.00']) }}</td>
                    <td>{{ Form::number('L3000',$constants->L3000, ['class' => 'form-control','required','step' => '1', 'min' => '0.00']) }}</td>
                    <td>{{ Form::number('susp',$constants->susp, ['class' => 'form-control','required','step' => '0.1', 'min' => '0.00']) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Т-профиль 3600 мм цена за шт</th>
                    <th scope="col">Т-профиль 1200 мм цена за шт</th>
                    <th scope="col">Т-профиль 600 мм цена за шт</th>
                    <th scope="col">L 3000 мм цена за шт</th>
                    <th scope="col">Подвес цена за шт</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.tprofile.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('tp3600_price',$constants->tp3600_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('tp1200_price',$constants->tp1200_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('tp600_price',$constants->tp600_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('L3000_price',$constants->L3000_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('susp_price',$constants->susp_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Т-профиль 3600 кол-во в уп.</th>
                    <th scope="col">Т-профиль 1200 кол-во в уп.</th>
                    <th scope="col">Т-профиль 600 кол-во в уп.</th>
                    <th scope="col">L 3000 мм кол-во в уп.</th>
                    <th scope="col">Подвес кол-во в уп.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.tprofile.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('tp3600_pack',$constants->tp3600_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('tp1200_pack',$constants->tp1200_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('tp600_pack',$constants->tp600_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('L3000_pack',$constants->L3000_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('susp_pack',$constants->susp_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
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
