@extends('layouts.admin')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/admin/manage">Admin</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach($distributors as $distributor)
                {!! Form::open(['route' => ['admin.distributor.update', $distributor->id]]) !!}
                <div class="col-md-4" style="padding-bottom: 20px;">
                    <h5>Company name - <strong>{{$distributor->getcompany->companyname}}</strong></h5>
                    <hr style="margin: 0;">
                    <div class="col-md-4">
                        <img src="/uploads/avatars/{{$distributor->avatar}}" style="
                                            width:100px;
                                            height:100px;
                                            border-radius: 50%;
                                            display: block;
                                            margin: 0 auto;
                                            margin-top: 10px;
                                        "/>
                    </div>
                    <div class="col-md-8">
                        <br>
                        <p>Дата рождения: {{ $distributor->dateofbirth }}</p>
                        <p>Телефон: {{ $distributor->phone }}</p>
                        <p>Email: {{ $distributor->email }}</p>
                    </div>

                    <div class="col-md-8">
                        {!! Form::text('vendor_code_1c', $distributor->vendor_code_1c, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::submit('Update', ['class' => 'btn btn-warning pull-right']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            @endforeach
        </div>
    </div>
@endsection
