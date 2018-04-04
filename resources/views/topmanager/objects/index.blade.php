@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">Главная</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 pull-right">
                <select onchange="window.location.href=this.value;">
                    <option selected disabled>Дата посставки товара</option>
                    <option {{$data['sort'] === 'date_asc' ? "selected" : ""}} value="?sort=date_asc">Сначала</option>
                    <option {{$data['sort'] === 'date_desc' ? "selected" : ""}} value="?sort=date_desc">С конца</option>
                </select>
                <a href="?rm=manager">Type:</a>
                {{$data['sort']}}
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
                        <th scope="col">Менеджер</th>
                        <th scope="col">Дата регистрации</th>
                        <th scope="col">Дата поставки товара</th>
                        <th scope="col">Дней до отчета</th>
                        <th scope="col">РМ</th>
                        <th scope="col">Телефон РМ</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['objects'] as $object)
                        @if($object->active == true)
                            @php
                                $reportdiff = Carbon\Carbon::parse($object->reports->last()->dateofreport)->diff(Carbon\Carbon::now());
                            @endphp
                            <tr bgcolor="@if($reportdiff->days <= 3 && $reportdiff->invert == 1) #ffff81 @elseif($reportdiff->days > 3 && $reportdiff->invert == 1) white @else #fe8081 @endif">
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name." ".$object->user->surname}}</td>
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
                                <td>{{$object->rmuser->name." ".$object->rmuser->surname}}</td>
                                <td>{{$object->rmuser->phone}}</td>
                                <td>
                                    <a href="/distributor/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">Просмотреть<br></a>
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
                        <th scope="col">Менеджер</th>
                        <th scope="col">Дата регистрации</th>
                        <th scope="col">Дата поставки товара</th>
                        <th scope="col">Дней до отчета</th>
                        <th scope="col">РМ</th>
                        <th scope="col">Телефон РМ</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['objects'] as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name." ".$object->user->surname}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td></td>
                                <td>{{$object->rmuser->name." ".$object->rmuser->surname}}</td>
                                <td>{{$object->rmuser->phone}}</td>
                                <td>
                                    <a href="/distributor/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">Просмотреть<br></a>
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