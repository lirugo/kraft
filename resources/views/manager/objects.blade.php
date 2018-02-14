@extends('layouts.app')
@section('breadcrumbs')
    {!! Breadcrumbs::render('object') !!}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>Зарегестрированые объекты</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Область</th>
                        <th scope="col">Менеджер</th>
                        <th scope="col">Дата регистрации</th>
                        <th scope="col">Дата поставки товара</th>
                        <th scope="col">Следующий отчет</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objects as $object)
                        @if($object->active == true)
                            <th scope="row">{{$object->id}}</th>
                            <td>{{$object->name}}</td>
                            <td>{{$object->region}}</td>
                            <td>{{$object->creatorname}}</td>
                            <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                            <td>{{$object->dateofdelivery}}</td>
                            <td>{{$object->dateofreport}}</td>
                            <td>
                                {!! Form::model($object,['route' => ['manger.object.activate', $object->id], 'method' => 'POST', 'style' => 'margin-top:-25px;']) !!}
                                <button class="btn btn-danger btn-sm pull-right">{{$object->active == true ? "Отключить" : "Активировать"}}</button>
                                {!! Form::close() !!}
                                {!! Form::model($object,['route' => ['manger.object.verified', $object->id], 'method' => 'POST']) !!}
                                <button class="btn btn-danger btn-sm pull-right">{{$object->active == true ? "Непроверен" : "Проверен"}}</button>
                                {!! Form::close() !!}
                            </td>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>Не зарегестрированые объекты</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Область</th>
                        <th scope="col">Менеджер</th>
                        <th scope="col">Дата регистрации</th>
                        <th scope="col">Дата поставки товара</th>
                        <th scope="col">Следующий отчет</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objects as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->region}}</td>
                                <td>{{$object->creatorname}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>{{$object->dateofreport}}</td>
                                <td>
                                    {!! Form::model($object,['route' => ['manger.object.activate', $object->id], 'method' => 'POST', 'style' => 'margin-top:-25px;']) !!}
                                    <button class="btn btn-danger btn-sm pull-right">{{$object->active == true ? "Отключить" : "Активировать"}}</button>
                                    {!! Form::close() !!}
                                    {!! Form::model($object,['route' => ['manger.object.verified', $object->id], 'method' => 'POST']) !!}
                                    <button class="btn btn-danger btn-sm pull-right">{{$object->active == true ? "Непроверен" : "Проверен"}}</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
