@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">Главная</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label class="pull-right"> Заказ № {{ $orders->order_id }}</label>
                <hr style="margin-top: 30px;">
                <table class="table table-striped table-borderless text-center">
                    <thead>
                    <tr>
                        <th scope="col" style="color: #f78421;">Артикул</th>
                        <th scope="col" style="color: #f78421;">Модель</th>
                        <th scope="col" style="color: #f78421;">Наименование</th>
                        <th scope="col" style="color: #f78421;">Ширина, мм.</th>
                        <th scope="col" style="color: #f78421;">Длина, мм.</th>
                        <th scope="col" style="color: #f78421;">Цвет RAL</th>
                        <th scope="col" style="color: #f78421;">Кол-во упаковок</th>
                        <th scope="col" style="color: #f78421;">Стоимость</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                            <tr>
                                <td>{{$order->vendor_code}}</td>
                                <td>{{$order->model}}</td>
                                <td>{{$order->description}}</td>
                                <td>{{$order->width}}</td>
                                <td>{{$order->length}}</td>
                                <td>{{$order->color}}</td>
                                <td>{{$order->pack}}</td>
                                <td>{{$order->sum}}</td>
                            </tr>
                    @endforeach
                    <tr>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: #eeeeee; color: #f78421;"><strong>ИТОГО</strong></td>
                        <td style="background-color: #eeeeee; color: #f78421;">{{$orders->total}} грн</td>
                    </tr>
                    </tbody>
                </table>
                <hr>

                {!! Form::model($orders, ['route' => ['order.send',$orders->order_id], 'method' => 'POST']) !!}
                {!! Form::submit('Email', ['class' => 'btn btn-primary pull-right']) !!}
                <br>
                <br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
