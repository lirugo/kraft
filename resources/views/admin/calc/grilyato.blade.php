@extends('layouts.admin')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/admin/manage">Admin</a>
                <a class="link-bread" href="/admin/calc">Калькулятор</a>
                <a class="link-bread" href="#">Grilyato</a>
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
                    <th scope="col">Grilyato 2400 до 100 мм</th>
                    <th scope="col">Grilyato 2400 более 120 мм</th>
                    <th scope="col">Grilyato 1200 более 120 мм</th>
                    <th scope="col">Grilyato 600 мм</th>
                    <th scope="col">Grilyato 600 (мама,папа) мм</th>
                    <th scope="col">Grilyato L3000 мм</th>
                    <th scope="col">Grilyato Соеденитель мм</th>
                    <th scope="col">Grilyato Подвес в сборе</th>
                    <th scope="col">Grilyato GLK торцевой елемент</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.grilyato.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('g2400_a',$constants->g2400_a, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('g2400_b',$constants->g2400_b, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('g1200_b',$constants->g1200_b, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('g600_a',$constants->g600_a, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('g600f_a',$constants->g600f_a, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('L3000_a',$constants->L3000_a, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('susp_a',$constants->susp_a, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('suspass_a',$constants->suspass_a, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                    <td>{{ Form::number('g600tc',$constants->g600tc, ['class' => 'form-control','required','step' => '0.001', 'min' => '0.000']) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Grilyato 2400 цена за шт</th>
                    <th scope="col">Grilyato 1200 цена за шт</th>
                    <th scope="col">Grilyato 600 цена за шт</th>
                    <th scope="col">Grilyato 600 (мама,папа) цена за шт</th>
                    <th scope="col">Grilyato L3000 цена за шт</th>
                    <th scope="col">Grilyato Соеденитель цена за шт</th>
                    <th scope="col">Grilyato Подвес в сборе цена за шт</th>
                    <th scope="col">Grilyato дюбель для подвесов цена за шт</th>
                    <th scope="col">Grilyato дюбель для L профиля  цена за шт</th>
                    <th scope="col">Grilyato GLK торцевой елемент цена за шт</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.tprofile.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('g2400_price',$constants->g2400_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g1200_price',$constants->g1200_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g600_price',$constants->g600_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g600f_price',$constants->g600f_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('gL3000_price',$constants->gL3000_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('gsusp_price',$constants->gsusp_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('gsuspass_price',$constants->gsuspass_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('dowel1_price',$constants->dowel1_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('dowel2_price',$constants->dowel2_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g600tc_price',$constants->g600tc_price, ['class' => 'form-control','required','step' => '0.1', 'min' => '1.00']) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Grilyato 2400 кол-во в уп.</th>
                    <th scope="col">Grilyato 1200 кол-во в уп.</th>
                    <th scope="col">Grilyato 600 кол-во в уп.</th>
                    <th scope="col">Grilyato 600 (мама,папа)кол-во в уп.</th>
                    <th scope="col">Grilyato 600 торцевой елемент кол-во в уп.</th>
                    <th scope="col">Grilyato L3000 кол-во в уп.</th>
                    <th scope="col">Grilyato Соеденитель кол-во в уп.</th>
                    <th scope="col">Grilyato Подвес в сборе кол-во в уп.</th>
                    <th scope="col">Grilyato дюбель для L профиля кол-во в уп.</th>
                    <th scope="col">Grilyato GLK торцевой елемент кол-во в уп.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    {!! Form::open(['route' => 'admin.calc.tprofile.update', 'method' => 'POST']) !!}
                    <th scope="row">#</th>
                    <td>{{ Form::number('g2400_pack',$constants->g2400_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g1200_pack',$constants->g1200_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g600_pack',$constants->g600_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g600f_pack',$constants->g600f_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('g600tc_pack',$constants->g600tc_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('gL3000_pack',$constants->gL3000_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('gsusp_pack',$constants->gsusp_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('gsuspass_pack',$constants->gsuspass_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('dowel1_pack',$constants->dowel1_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
                    <td>{{ Form::number('dowel2_pack',$constants->dowel2_pack, ['class' => 'form-control','required','step' => '1', 'min' => '1.00']) }}</td>
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
