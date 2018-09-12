@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">{{ trans('app.Panel Control') }}</a>
                <a class="link-bread" href="/shop">{{ trans('app.Shop') }}</a>
                <a class="link-bread" href="#">
                    {{Request::get('sort') == 'tprofile' ? 'T-Profile' : ''}}
                    {{Request::get('sort') == 'grilyato' ? 'Gryljato' : ''}}
                    {{Request::get('sort') == 'reyka' ? 'Reyka' : ''}}
                    {{Request::get('sort') == 'accessories' ? 'Accessories' : ''}}
                    {{Request::get('sort') == 'svet' ? 'Light' : ''}}
                </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">{{trans('app.Code')}}</th>
                                <th scope="col">{{trans('app.Description')}}</th>
                                <th scope="col">{{trans('app.Price')}}</th>
                                <th scope="col">{{trans('app.Count')}}</th>
                                <th scope="col">{{trans('app.Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    {!! Form::open(['route' => ['shop.add',$product->vendor_code], 'method' => 'POST']) !!}
                                    <tr>
                                        <td>{{$product->vendor_code}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{!! Form::number('count', null, ['class' => 'form-control', 'min' => 1, 'step' => 1, 'max' => 1000, 'required', 'placeholder' => '0']) !!}</td>
                                        <td>{!! Form::submit(trans('Add to cart'), ['class' => 'btn btn-primary btn-sm']) !!}</td>
                                    </tr>
                                    {!! Form::close() !!}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
