@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Main')}}</a>
                @if($orders->object_id)
                    <a class="link-bread" href="/order/{{$orders->object_id}}/select">{{trans('app.History Order')}}</a>
                @else
                    <a class="link-bread" href="/order/history">{{trans('app.History Order')}}</a>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label class="pull-right"> {{trans('app.Order')}} № {{ $orders->order_id }}</label>
                <hr style="margin-top: 30px;">
                <table class="table table-striped table-borderless text-center" id="table">
                    <thead>
                    <tr>
                        <th scope="col" style="color: #f78421;">{{trans('app.Vendor Code')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Name')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Count')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Price')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.TOTAL')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        @if($order->production == false)
                            <tr>
                                <td>{{$order->vendor_code}}</td>
                                <td>{{$order->description}}</td>
                                <td>{!! Form::number('pack', $order->count, ['class' => 'form-control', 'id' => 'pack', 'onchange' => 'pack_change('.$order->id.','.$order->id_row.', this.value'.','.$order->price.')']) !!}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->price*$order->count}}</td>
                                <td>
                                    {!! Form::open(['route' => ['select.delete',$order->id], 'method' => 'POST']) !!}
                                    {!! Form::submit(trans('app.Delete'), ['class' => 'btn btn-warning btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: #eeeeee; color: #f78421;"><strong>{{trans('app.TOTAL')}}</strong></td>
                        <td style="background-color: #eeeeee; color: #f78421;" id="total-sum">{{$orders->total}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <hr style="margin-top: 30px;">
                <h3 class="text-center">{{trans('app.Output of data for production')}}</h3>
                <table class="table table-striped table-borderless text-center" id="table">
                    <thead>
                    <tr>
                        <th scope="col" style="color: #f78421;">{{trans('app.Vendor Code')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Name')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Length 1 piece')}}</th>
                        <th scope="col" style="color: #f78421;">м.п.</th>
                        <th scope="col" style="color: #f78421;">шт.</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        @if($order->production == true)
                            <tr>
                                <td>{{$order->vendor_code}}</td>
                                <td>{{$order->description}}</td>
                                <td>{{$order->one_length}}</td>
                                <td>{{$order->mp}}</td>
                                <td>{{$order->count_production}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <hr>
                {{--//Get file if exsist--}}
                <a class="btn btn-primary pull-right m-l-20" href="/order/pdf/{{$orders->order_id}}">{{trans('app.Download PDF')}}</a>
                <div class="row m-l-15">
                    <div class="form-inline pull-right">
                        @if(Auth::user()->hasRole('distributor'))
                            {!! Form::model($orders, ['route' => ['order.invoice.send',$orders->order_id], 'method' => 'POST']) !!}
                            @if(file_exists(public_path().'/uploads/orders/'.$orders->order_id.'.pdf' ))
                                @if($orders->order_available)
                                    <a class="btn btn-success m-r-10" href="{{url('/order/download/'.$orders->order_id)}}" download>{{trans('app.Download Order')}}</a>
                                @endif
                            @endif
                            @if($orders->status == 0)
                                <div class="form-group">
                                    <div class="checkbox">
                                        {{--<label><input type="checkbox" name="pickup" style="margin-right: 10px;">Самовывоз</label>--}}
                                        <select class="form-control" name="delivery" style="width: 200px; margin-right: 10px;" required>
                                            <option value="" selected disabled>Доставка</option>
                                            <option value="pickup">Самовывоз</option>
                                            <option value="express_delivery">Курьерская доставка</option>
                                            @if($orders->total > 200000)
                                            <option value="kraft_delivery">Доставка Крафт</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="payment" style="width: 200px; margin-right: 10px;" required>
                                        <option value="" selected disabled>Тип расчета</option>
                                        <option value="0">Наличный расчет</option>
                                        <option value="1">Безналичный расчет</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::submit(trans('app.Issue an invoice'), ['class' => 'btn btn-primary']) !!}
                                </div>
                            @elseif($orders->status == 1)
                                {{--@if(!$orders->order_available)--}}
                                <div class="form-group">
                                    <a href="{{url('/order/request/'.$orders->order_id.'/repeatInvoiceOrder')}}" class="btn btn-primary">Запрос на перевыставление счета</a>
                                </div>
                                {{--@endif--}}
                            @endif
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        var table = document.getElementById("table");
        function pack_change(id,id_row,pack,price){
            table.rows[id_row].cells[4].innerHTML = (pack*price).toFixed(2);
            total_sum = 0;
            for(var i = 1; i<table.rows.length-1; i++)
            {
                total_sum += +table.rows[i].cells[4].innerHTML;
            }
            table.rows[table.rows.length-1].cells[4].innerHTML = total_sum.toFixed(2);

            // save data
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/order/" + id + "/update",
                data: {"id" : id, "quantity" : pack},
                success: function(data) {
                    console.log('OK');
                },
                error: function(data){
                    console.log(id);
                    console.log(data);
                }
            });
        }

    </script>
@endsection
