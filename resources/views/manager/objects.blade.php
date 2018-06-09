@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/manager/objects">Объекты</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row m-t-20 m-b-20">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-2 text-center">
                    <div class="card">
                        <a href="/manager/objects/create">
                            <i class="fa fa-plus fa-5x" aria-hidden="true"></i>
                            <div class="description m-t-10">
                                Создать
                            </div>
                        </a>
                    </div>
                </div>
                {{--@endif--}}
            </div>
        </div>
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
                    @foreach($data['objects'] as $object)
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
                    @foreach($data['objects'] as $object)
                        @if($object->active == false)
                            <tr>
                                <th scope="row">{{$object->id}}</th>
                                <td>{{$object->name}}</td>
                                <td>{{$object->getregion->regionname_ru}}</td>
                                <td>{{$object->user->name}}</td>
                                <td>{{ Carbon\Carbon::parse($object->created_at)->format('Y-m-d') }}</td>
                                <td>{{$object->dateofdelivery}}</td>
                                <td>{{$object->dateofreport}}</td>
                                <td>
                                    <a href="/manager/object/show/{{$object->id}}" class="btn btn-danger btn-sm pull-right">Просмотреть
                                        @if($object->viewed == 0)
                                        <span class="badge badge-secondary" style="position: relative">New</span>
                                        @endif
                                        <br></a>

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

@section('scripts')
    <script>
        $(document).ready(function() {

            $('#clickable tr').click(function() {
                var href = $(this).find("a").attr("href");
                if(href) {
                    window.location = href;
                }
            });

        });
    </script>
@endsection