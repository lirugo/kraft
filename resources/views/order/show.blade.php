@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Главная</a>
                <a class="link-bread" href="/order/{{$orders->object_id}}/select">История заказов</a>
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
                <table class="table table-striped table-borderless text-center" id="table">
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
                        <th scope="col" style="color: #f78421;">Action</th>
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
                                <td>{!! Form::number('pack', $order->pack, ['class' => 'form-control', 'onchange' => 'pack_change('.$order->id_row.','.$order->sum_by_one.','.$order->count_pack.')']) !!}</td>
                                <td>{{$order->sum}}</td>
                                <td>
                                    {!! Form::open(['route' => ['select.delete',$order->id], 'method' => 'POST']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-warning btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
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
                        <td style="background-color: #eeeeee; color: #f78421;" id="total-sum">{{$orders->total}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                {!! Form::model($orders, ['route' => ['order.invoice.send',$orders->order_id], 'method' => 'POST']) !!}
                @if(Auth::user()->vendor_code_1c && $orders->status == 0)
                {!! Form::submit('Выписать счет', ['class' => 'btn btn-primary pull-right']) !!}
                @endif
                <br>
                <br>
                {!! Form::close() !!}
                {!! Form::model($orders, ['route' => ['order.send',$orders->order_id], 'method' => 'POST']) !!}
                {{--{!! Form::submit('Email', ['class' => 'btn btn-primary pull-right']) !!}--}}
                <br>
                <br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        var table = document.getElementById("table");
    function pack_change(id,sum_by_one,count_pack){
        table.rows[id].cells[7].innerHTML = table.rows[id].cells[6].children[0].value * sum_by_one *count_pack;
        total_sum = 0;
        for(var i = 1; i<table.rows.length-1; i++)
        {
            total_sum = +total_sum + +table.rows[i].cells[7].innerHTML;
        }

        table.rows[table.rows.length-1].cells[7].innerHTML = total_sum;
    }

    </script>
@endsection
