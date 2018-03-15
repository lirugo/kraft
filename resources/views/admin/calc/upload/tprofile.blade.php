@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    Upload file
                    {!! Form::open(['route' => 'admin.calc.tprofile.upload', 'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
                    {!! Form::file('mock_data', ['style' => 'margin:10px 0 10px 0', 'accept' => '.csv']) !!}
                    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
                    <br>
                    {!! Form::label('Example => NULL;11224900336;Nova;24;600;9010;Профіль KRAFT Nova 24 600*38*24мм RAL 9010') !!}
                    {!! Form::close() !!}
                    <div class="text-center">
                        {{$vendors->links()}}
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Артикул</th>
                            <th>Модель</th>
                            <th>Наименование</th>
                            <th>Ширина</th>
                            <th>Длина</th>
                            <th>Цвет</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vendors as $vendor)
                            <tr>
                                <td>{{$vendor->id}}</td>
                                <td>{{$vendor->vendor_code}}</td>
                                <td>{{$vendor->model}}</td>
                                <td>{{$vendor->description}}</td>
                                <td>{{$vendor->profile_thickness}}</td>
                                <td>{{$vendor->profile}}</td>
                                <td>{{$vendor->color}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
