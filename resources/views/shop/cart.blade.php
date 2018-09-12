@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/shop">{{ trans('app.Shop') }}</a>
                <a class="link-bread" href="#">{{ trans('app.Cart') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                   @if(Session::has('cart'))
                       {!! Form::model($products, ['route' => 'shop.save', 'method' => 'POST']) !!}
                        <div class="row m-b-20">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary" style="border-radius:0; margin:0;">{{trans('app.Save Order')}}</button>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-right">
                                <label>{{trans('app.Order')}} №</label> <label id="order_code">{{$objectId.\Carbon\Carbon::now()->format('Y'.'m'.'d'.'H'.'i'.'s')}}</label>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body bg-success">
                                <h4>{{ trans('app.TOTAL') }} - {{Session::get('cart')->totalPrice}} UAH | {{trans('app.Count')}} - {{Session::get('cart')->totalQty}} |
                                    <a class="" href="{{url('/shop/clear')}}"><small>{{trans('app.Clear all')}}</small></a>
                                </h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {!! Form::hidden('orderId', $objectId.\Carbon\Carbon::now()->format('Y'.'m'.'d'.'H'.'i'.'s')) !!}
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">{{trans('app.Code')}}</th>
                                        <th scope="col">{{trans('app.Description')}}</th>
                                        <th scope="col">{{trans('app.Count')}}</th>
                                        <th scope="col">{{trans('app.Price')}}</th>
                                        <th scope="col">{{trans('app.Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td scope="row">{{$product['item']->vendor_code}}</td>
                                                <td>{{$product['item']->description}}</td>
                                                <td>{!! Form::number('count', $product['qty'], ['class' =>'form-control', 'min' => '1', 'step' => '1', 'max' => '1000']) !!}</td>
                                                <td>{{$product['item']->price * $product['qty']}}</td>
                                                {!! Form::open(['route' => ['shop.cart.delete', $product['item']->vendor_code], 'method' => 'POST']) !!}
                                                    <td>{!! Form::submit(trans('app.Remove'), ['class' => 'btn btn-danger btn-small']) !!}</td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                       {!! Form::close() !!}
                   @else
                        {{trans('app.Nothing here yet')}}, <a href="{{url('/shop')}}">{{trans('app.go to shop')}}</a> ...
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
