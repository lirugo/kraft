@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="#">Объекты</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="col-md-2 col-md-offset-1 text-center">
                    <div class="card">
                        <a href="/designer/object/register">
                            <i class="fa fa-plus fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                Новый объект
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>Зарегестрированые объекты компании</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Область</th>
                        <th scope="col">Дата регистрации</th>
                        <th scope="col">Дата поставки товара</th>
                        <th scope="col">Дней до отчета</th>
                        <th scope="col">РМ</th>
                        <th scope="col">Телефон РМ</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objects as $object)
                        @if($object->active == true)
                            @php
                                if(!empty($object->reports->last()))
                                    $reportdiff = Carbon\Carbon::parse($object->reports->last()->dateofreport)->diff(Carbon\Carbon::now());
                            @endphp
                            <tr bgcolor="
                                @if(!empty($object->reports->last()))
                            @if($reportdiff->days <= 3 && $reportdiff->invert == 1))
                                #ffff81
                                @elseif($reportdiff->days > 3 && $reportdiff->invert == 1)
                                    white
@else #fe8081
                                @endif
                            @else
                                    white
@endif">
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>
                                    @php
                                        if(empty($object->reports->last()))
                                               echo "Без отчетов";
                                        else{
                                           if($reportdiff->invert == 0 && $reportdiff->days == 0)
                                               echo "Отчет нужно сдать сегодня!";
                                           else  if($reportdiff->invert == 1 && $reportdiff->days == 0)
                                               echo "Отчет нужно сдать завтра!";
                                           else  if($reportdiff->invert == 1)
                                               echo "Дней осталось: ".$reportdiff->days;
                                           else  if($reportdiff->invert == 0)
                                               echo "Дней просрочено: ".$reportdiff->days;
                                        }
                                    @endphp
                                </td>
                                <td>{{$object->rmuser->name}}</td>
                                <td>{{$object->rmuser->phone}}</td>
                                <td>
                                    <a href="/designer/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">Просмотреть<br></a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>Не зарегестрированые объекты компании</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Область</th>
                        <th scope="col">Дата регистрации</th>
                        <th scope="col">Дата поставки товара</th>
                        <th scope="col">Дней до отчета</th>
                        <th scope="col">РМ</th>
                        <th scope="col">Телефон РМ</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objects as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td></td>
                                <td>{{$object->rmuser->name}}</td>
                                <td>{{$object->rmuser->phone}}</td>
                                <td>
                                    <a href="/designer/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">Просмотреть<br></a>
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
