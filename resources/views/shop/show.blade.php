@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">Shop</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Description</th>
                                <th scope="col">Count</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    {!! Form::open(['route' => 'shop.add', 'method' => 'POST']) !!}
                                    <tr>
                                        <td>{{$product->vendor_code}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{!! Form::number('count', 0, ['class' => 'form-control', 'min' => 0, 'step' => 0]) !!}</td>
                                        <td>{!! Form::submit('Buy', ['class' => 'btn btn-success']) !!}</td>
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
