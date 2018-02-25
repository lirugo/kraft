@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  Upload file
                    {!! Form::open(['route' => 'admin.product.upload', 'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
                    {!! Form::file('mock_data', ['style' => 'margin:10px 0 10px 0', 'accept' => '.csv']) !!}
                    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                    <div class="text-center">
                        {{$products->links()}}
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Color</th>
                            <th>Count</th>
                            <th>Room configuration</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->firstname}}</td>
                                <td>{{$product->lastname}}</td>
                                <td>{{$product->email}}</td>
                                <td>{{$product->gender}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
