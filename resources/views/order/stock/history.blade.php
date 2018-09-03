@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{trans('app.Main')}}</a>
                <a class="link-bread" href='javascript:history.back(1);'>{{trans('app.Back')}}</a>
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
                        <th scope="col" style="color: #f78421;">{{trans('app.Number Order')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Date Order')}}</th>
                        <th scope="col" style="color: #f78421;">{{trans('app.Action')}}</th>
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
                                <a href="/order/stock/{{$order->order_id}}" class="btn btn-primary">{{trans('app.Learn More')}}</a>
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
