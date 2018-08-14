@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/users">Список клиентов</a>
                <a class="link-bread" href="#">{{$distributors->getcompany->companyname}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Icons -->
        <div class="row m-t-20">
            <div class="col-md-2 col-md-offset-1 text-center">
                <div class="card">
                    <a href="{{ route('manager.distributor.profile', $distributors->id) }}">
                        <i class="fa fa-tasks fa-5x" aria-hidden="true"></i>
                        <div class="description m-t-10">
                            {{ trans('app.profilecompany') }}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="card">
                    <a href="/manager/distributor/users/{{$distributors->id}}">
                        <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                        <div class="description m-t-10">
                            {{ trans('app.userscompany') }}
                        </div>
                    </a>
                </div>
            </div>
            {{--<div class="col-md-2 text-center">--}}
                {{--<div class="card">--}}
                    {{--<a href="/manager/distributor/discount/{{$distributors->id}}">--}}
                        {{--<i class="fa fa-percent fa-5x" aria-hidden="true"></i>--}}
                        {{--<div class="description m-t-10">--}}
                           {{--Скидки--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <!-- ShowRegistred objects-->
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>Зарегестрированые объекты</h5>
                <table class="table" id="clickable">
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
                    @foreach($distributors->getcompany->objects as $object)
                        @if($object->active == true)
                            @php
                                $reportdiff = Carbon\Carbon::parse($object->reports->last()->dateofreport)->diff(Carbon\Carbon::now());
                            @endphp
                            <tr bgcolor="@if($reportdiff->days <= 3 && $reportdiff->invert == 1) #ffff81 @elseif($reportdiff->days > 3 && $reportdiff->invert == 1) white @else #fe8081 @endif">
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>
                                    @php
                                        if($reportdiff->invert == 0 && $reportdiff->days == 0)
                                            echo "Отчет нужно сдать сегодня!";
                                        else  if($reportdiff->invert == 1 && $reportdiff->days == 0)
                                            echo "Отчет нужно сдать завтра!";
                                        else  if($reportdiff->invert == 1)
                                            echo "Дней осталось: ".$reportdiff->days;
                                        else  if($reportdiff->invert == 0)
                                            echo "Дней просрочено: ".$reportdiff->days;
                                    @endphp
                                </td>
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">Просмотреть<br></a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ShowNotRegistred objects-->
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1">
                <h5>Не зарегестрированые объекты</h5>
                <table class="table" id="clickable">
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
                    @foreach($distributors->getcompany->objects as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td></td>
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">Просмотреть<br></a>
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
