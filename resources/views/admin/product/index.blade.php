@extends('layouts.admin')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/admin/manage">Manage Dashboard</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vendor Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($products as $product)
                            {!! Form::open(['route' => ['admin.product.update',$product->id], 'method' => 'POST']) !!}
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->vendor_code}}</td>
                                <td>{{$product->description}}</td>
                                <td>{!! Form::number('price', $product->price, ['class' => 'form-control', 'required', 'min' => '1', 'step' => '0.01']) !!}</td>
                                <td>{!! Form::submit('Update',['class' => 'btn btn-sm btn-warning']) !!}</td>
                            </tr>
                            {!! Form::close() !!}
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
