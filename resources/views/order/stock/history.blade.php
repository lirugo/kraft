@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Главная</a>
                <a class="link-bread" href='javascript:history.back(1);'>Назад</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <hr>
                <table class="table table-striped table-borderless">
                    <thead>
                    <tr>
                        <th scope="col" style="color: #f78421;">Номер заказа</th>
                        <th scope="col" style="color: #f78421;">Дата заказа</th>
                        <th scope="col" style="color: #f78421;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['orders'] as $order)
                        @php
                            $total = 0;
                            $or = \App\CalcHistory::all()->where('order_id', $order->order_id);
                            foreach($or as $o)
                                $total += $o->sum;
                        @endphp
                        <tr>
                            <td>{{$order->order_id}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>
                                <a href="/order/stock/{{$order->order_id}}" class="btn btn-primary">Подробнее</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>
@endsection
