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
        {{--T-Profile--}}
        <div class="row">
            <div class="col-md-12" id="table">
                <div class="text-center">
                    {{$calcs->links()}}
                    <h4>T-Profile</h4>
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
        {{--Grilyato--}}
        <div class="row">
            <div class="col-md-12" id="table">
                <div class="text-center">
                    <h4>Grilyato</h4>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Профиль 2400 мм</th>
                        <th scope="col">Профиль 1200 мм</th>
                        <th scope="col">Профиль 600 мм</th>
                        <th scope="col">Профиль 600 мм, мама</th>
                        <th scope="col">Профиль 600 мм, папа</th>
                        <th scope="col">Профиль 600 мм, торцевой элемент</th>
                        <th scope="col">Соединитель</th>
                        <th scope="col">Уголок L 3000 мм</th>
                        <th scope="col">Подвес в сборе шт</th>
                        <th scope="col">Дюбель для подвесов</th>
                        <th scope="col">Дюбель для L-прифиля</th>
                        <th scope="col">Итого</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($calcs as $calc)
                        @if($calc->type === "Grilyato")
                            <tr>
                                <th scope="row">Кол-во</th>
                                <td id="table-tp2400_grilyato">{{$calc->tp2400_grilyato}}</td>
                                <td id="table-tp1200_grilyato">{{$calc->tp1200_grilyato}}</td>
                                <td id="table-tp600_grilyato">{{$calc->tp600_grilyato}}</td>
                                <td id="table-tp600f_grilyato">{{$calc->tp600f_grilyato}}</td>
                                <td id="table-tp600f_grilyato">{{$calc->tp600f_grilyato}}</td>
                                <td id="table-tp600tc_grilyato">{{$calc->tp600tc_grilyato}}</td>
                                <td id="table-susp_grilyato">{{$calc->susp_grilyato}}</td>
                                <td id="table-angles_grilyato">{{$calc->angles_grilyato}}</td>
                                <td id="table-suspass_grilyato">{{$calc->suspass_grilyato}}</td>
                                <td id="table-dowel1_grilyato">{{$calc->dowel1_grilyato}}</td>
                                <td id="table-dowel2_grilyato">{{$calc->dowel2_grilyato}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Цена за шт</th>
                                <td id="table-tp2400_priceByOne_grilyato">{{$calc->tp2400_priceByOne_grilyato}}</td>
                                <td id="table-tp1200_priceByOne_grilyato">{{$calc->tp1200_priceByOne_grilyato}}</td>
                                <td id="table-tp600_priceByOne_grilyato">{{$calc->tp600_priceByOne_grilyato}}</td>
                                <td id="table-tp600f_priceByOne_grilyato">{{$calc->tp600f_priceByOne_grilyato}}</td>
                                <td id="table-tp600f_priceByOne_grilyato">{{$calc->tp600f_priceByOne_grilyato}}</td>
                                <td id="table-tp600tc_priceByOne_grilyato">{{$calc->tp600tc_priceByOne_grilyato}}</td>
                                <td id="table-susp_price_priceByOne_grilyato">{{$calc->susp_price_priceByOne_grilyato}}</td>
                                <td id="table-angles_price_priceByOne_grilyato">{{$calc->angles_price_priceByOne_grilyato}}</td>
                                <td id="table-gsuspass_price_priceByOne_grilyato">{{$calc->gsuspass_price_priceByOne_grilyato}}</td>
                                <td id="table-dowel1c_price_priceByOne_grilyato">{{$calc->dowel1c_price_priceByOne_grilyato}}</td>
                                <td id="table-dowel2c_price_priceByOne_grilyato">{{$calc->dowel2c_price_priceByOne_grilyato}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Кол-во упаковок</th>
                                <td id="table-tp2400_package_grilyato">{{$calc->tp2400_package_grilyato}}</td>
                                <td id="table-tp1200_package_grilyato">{{$calc->tp1200_package_grilyato}}</td>
                                <td id="table-tp600_package_grilyato">{{$calc->tp600_package_grilyato}}</td>
                                <td id="table-tp600f_package_grilyato">{{$calc->tp600f_package_grilyato}}</td>
                                <td id="table-tp600f_package_grilyato">{{$calc->tp600f_package_grilyato}}</td>
                                <td id="table-tp600tc_package_grilyato">{{$calc->tp600tc_package_grilyato}}</td>
                                <td id="table-susp_package_grilyato">{{$calc->susp_package_grilyato}}</td>
                                <td id="table-angles_package_grilyato">{{$calc->angles_package_grilyato}}</td>
                                <td id="table-suspass_package_grilyato">{{$calc->suspass_package_grilyato}}</td>
                                <td id="table-dowel1_package_grilyato">{{$calc->dowel1_package_grilyato}}</td>
                                <td id="table-dowel2_package_grilyato">{{$calc->dowel2_package_grilyato}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость</th>
                                <td id="table-tp2400_price_grilyato">{{$calc->tp2400_price_grilyato}}</td>
                                <td id="table-tp1200_price_grilyato">{{$calc->tp1200_price_grilyato}}</td>
                                <td id="table-tp600_price_grilyato">{{$calc->tp600_price_grilyato}}</td>
                                <td id="table-tp600f_price_grilyato">{{$calc->tp600f_price_grilyato}}</td>
                                <td id="table-tp600f_price_grilyato">{{$calc->tp600f_price_grilyato}}</td>
                                <td id="table-tp600tc_price_grilyato">{{$calc->tp600tc_price_grilyato}}</td>
                                <td id="table-susp_price_grilyato">{{$calc->susp_price_grilyato}}</td>
                                <td id="table-angles_price_grilyato">{{$calc->angles_price_grilyato}}</td>
                                <td id="table-suspass_price_grilyato">{{$calc->suspass_price_grilyato}}</td>
                                <td id="table-dowel1_price_grilyato">{{$calc->dowel1_price_grilyato}}</td>
                                <td id="table-dowel2_price_grilyato">{{$calc->dowel2_price_grilyato}}</td>
                                <td id="table-sum_cube"><strong>{{$calc->sum_grilyato}} грн</strong></td>
                            </tr>
                            <tr>
                                <th scope="row"><hr style="border-color:#dddddd"></th>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
                                <td><hr style="border-color:#dddddd"></td>
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
        {{--Cube--}}
        <div class="row">
            <div class="col-md-12" id="table">
                <div class="text-center">
                    <h4>Cube</h4>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Кол-во реек</th>
                        <th scope="col">Стрингер 4000мм</th>
                        <th scope="col">Подвес</th>
                        <th scope="col">Итого</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($calcs as $calc)
                        @if($calc->type === "Cube")
                            <tr>
                                <th scope="row">Кол-во</th>
                                <td id="table-count_cube">{{$calc->count_cube}}</td>
                                <td id="table-stringer_cube">{{$calc->stringer_cube}}</td>
                                <td id="table-podves_cube">{{$calc->podves_cube}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Цена за шт</th>
                                <td id="table-count_price_cube">{{$calc->count_price_cube}}</td>
                                <td id="table-stringer_price_cube">{{$calc->stringer_price_cube}}</td>
                                <td id="table-susp_price_cube">{{$calc->susp_price_cube}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Кол-во упаковок</th>
                                <td id="table-countc_pack_cube">{{$calc->countc_pack_cube}}</td>
                                <td id="table-stringerc_pack_cube">{{$calc->stringerc_pack_cube}}</td>
                                <td id="table-csuspc_pack_cube">{{$calc->csuspc_pack_cube}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Стоимость</th>
                                <td id="table-countc_price_cube">{{$calc->countc_price_cube}}</td>
                                <td id="table-stringerc_price_cube">{{$calc->stringerc_price_cube}}</td>
                                <td id="table-suspc_price_cube">{{$calc->suspc_price_cube}}</td>
                                <td id="table-sum_cube"><strong>{{$calc->sum_cube}} грн</strong></td>
                            </tr>
                            <tr>
                                <th scope="row"><hr style="border-color:#dddddd"></th>
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
        {{--Led--}}
        <div class="row">
            <div class="col-md-12" id="table">
                <div class="text-center">
                    <h4>Led</h4>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Кол-во комплектов светильников</th>
                        <th scope="col">Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($calcs as $calc)
                        @if($calc->type === "Led")
                            <tr>
                                <th scope="row">#</th>
                                <td id="table-count_led">{{$calc->count_led}}</td>
                                <td id="table-sum_led">{{$calc->sum_led}}</td>
                            </tr>
                            <tr>
                                <th scope="row"><hr style="border-color:#dddddd"></th>
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
