@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                @if(Auth::user()->hasRole('distributor'))
                    <a class="link-bread" href="/distributor/object/show/{{$calcs->last()->object_id}}">Объект</a>
                @elseif(Auth::user()->hasRole('designer'))
                    <a class="link-bread" href="/designer/object/show/{{$calcs->last()->object_id}}">Объект</a>
                @else
                    <a class="link-bread" href="#">Объект</a>
                @endif
                <a class="link-bread" href="/calc/{{$calcs->last()->object_id}}">Калькулятор</a>
                <a class="link-bread" href="#">История</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="table">

                <div class="text-center">
                    <h4>T-Profile</h4>
                    {{$calcs->links()}}
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">T-Profile 3600мм</th>
                        <th scope="col">T-Profile 1200мм</th>
                        <th scope="col">T-Profile 600мм</th>
                        <th scope="col">Уголок L 3000мм</th>
                        <th scope="col">Подвес</th>
                        <th scope="col">Итого</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($calcs as $calc)
                        @if($calc->type === "T-Profile")
                            <tr>
                                <th scope="row">Кол-во</th>
                                <td id="table-tp3600">{{$calc->tp3600}}</td>
                                <td id="table-tp1200">{{$calc->tp1200}}</td>
                                <td id="table-tp600">{{$calc->tp600}}</td>
                                <td id="table-angles">{{$calc->L3000}}</td>
                                <td id="table-susp">{{$calc->susp}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Цена за шт</th>
                                <td id="table-price-tp3600">{{$calc->tp3600_priceByOne}}</td>
                                <td id="table-price-tp1200">{{$calc->tp1200_priceByOne}}</td>
                                <td id="table-price-tp600">{{$calc->tp600_priceByOne}}</td>
                                <td id="table-price-angles">{{$calc->L3000_priceByOne}}</td>
                                <td id="table-price-susp">{{$calc->susp_priceByOne}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Кол-во упаковок</th>
                                <td id="table-pack-tp3600">{{$calc->tp3600_package}}</td>
                                <td id="table-pack-tp1200">{{$calc->tp1200_package}}</td>
                                <td id="table-pack-tp600">{{$calc->tp600_package}}</td>
                                <td id="table-pack-angles">{{$calc->L3000_package}}</td>
                                <td id="table-pack-susp">{{$calc->susp_package}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость</th>
                                <td id="table-summ-tp3600">{{$calc->tp3600_price}}</td>
                                <td id="table-summ-tp1200">{{$calc->tp1200_price}}</td>
                                <td id="table-summ-tp600">{{$calc->tp600_price}}</td>
                                <td id="table-summ-angles">{{$calc->L3000_price}}</td>
                                <td id="table-summ-susp">{{$calc->susp_price}}</td>
                                <td id="table-summ"><strong>{{$calc->sum}} грн</strong></td>
                            </tr>
                            <tr>
                                <th scope="row"><hr style="border-color:#dddddd"></th>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
