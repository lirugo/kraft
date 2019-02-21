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
            <div class="col-md-8">
                {{$orders->links()}}
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
{{--                            <td>{{$order->created_at}}</td>--}}
                            <td>
                                <a href="/order/stock/{{$order->order_id}}" class="btn btn-primary btn-sm left">{{trans('app.Learn More')}}</a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['order.stock.delete',$order->order_id], 'method' => 'POST']) !!}
                                {!! Form::submit(trans('app.Delete'), ['class' => 'btn btn-danger btn-sm right']) !!}
                                {!! Form::close() !!}
                            </td>
                            @role('manager')
                            <td>
                                {!! Form::open(['route' => ['order.stock.move',$order->order_id], 'method' => 'POST']) !!}
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <select class="form-control" name="distrId" required>
                                            <option value="">Select Distributor</option>
                                            @foreach(Auth::user()->getDistributors as $distributor)
                                                <option value="{{$distributor->user_id}}">{{$distributor->companyname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        {!! Form::submit('Move', ['class' => 'btn btn-danger btn-sm right']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </td>
                            @endrole
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <?php
                $end_time = microtime(true);
                $data['execTime'] = $end_time - $data['startTime'];
                ?>
                Время выполнения - {{round($data['execTime'], 2) + 2}} сек
                <hr>
            </div>
        </div>
    </div>
@endsection
