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
                @foreach($calcs as $calc)
                <table class="table table-striped table-borderless text-center">
                    <thead>
                    <tr>
                        <th scope="col" style="color: #f78421;">Артикул</th>
                        <th scope="col" style="color: #f78421;">Модель</th>
                        <th scope="col" style="color: #f78421;">Наименование</th>
                        <th scope="col" style="color: #f78421;">Ширина, мм.</th>
                        <th scope="col" style="color: #f78421;">Длина, мм.</th>
                        <th scope="col" style="color: #f78421;">Цвет RAL</th>
                        <th scope="col" style="color: #f78421;">Кол-во шт.</th>
                        <th scope="col" style="color: #f78421;">Цена за шт. грн</th>
                        <th scope="col" style="color: #f78421;">Кол-во упаковок</th>
                        <th scope="col" style="color: #f78421;">Стоимость</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td id="table-3600-vendor">{{$calc->tprofile_3600_vendor}}</td>
                        <td id="table-3600-model">{{$calc->tprofile_3600_model}}</td>
                        <td id="table-3600-name">{{$calc->tprofile_3600_name}}</td>
                        <td id="table-3600-width">{{$calc->tprofile_3600_width}}</td>
                        <td id="table-3600-lenght">{{$calc->tprofile_3600_lenght}}</td>
                        <td id="table-3600-color">{{$calc->tprofile_3600_color}}</td>
                        <td id="table-3600-count">{{$calc->tprofile_3600_count}}</td>
                        <td id="table-3600-price">{{$calc->tprofile_3600_price}}</td>
                        <td id="table-3600-pack">{{$calc->tprofile_3600_pack}}</td>
                        <td id="table-3600-price-all">{{$calc->tprofile_3600_price_all}}</td>
                    </tr>
                    <tr>
                        <td id="table-1200-vendor">{{$calc->tprofile_1200_vendor}}</td>
                        <td id="table-1200-model">{{$calc->tprofile_1200_model}}</td>
                        <td id="table-1200-name">{{$calc->tprofile_1200_name}}</td>
                        <td id="table-1200-width">{{$calc->tprofile_1200_width}}</td>
                        <td id="table-1200-lenght">{{$calc->tprofile_1200_lenght}}</td>
                        <td id="table-1200-color">{{$calc->tprofile_1200_color}}</td>
                        <td id="table-1200-count">{{$calc->tprofile_1200_count}}</td>
                        <td id="table-1200-price">{{$calc->tprofile_1200_price}}</td>
                        <td id="table-1200-pack">{{$calc->tprofile_1200_pack}}</td>
                        <td id="table-1200-price-all">{{$calc->tprofile_1200_price_all}}</td>
                    </tr>
                    <tr>
                        <td id="table-600-vendor">{{$calc->tprofile_600_vendor}}</td>
                        <td id="table-600-model">{{$calc->tprofile_600_model}}</td>
                        <td id="table-600-name">{{$calc->tprofile_600_name}}</td>
                        <td id="table-600-width">{{$calc->tprofile_600_width}}</td>
                        <td id="table-600-lenght">{{$calc->tprofile_600_lenght}}</td>
                        <td id="table-600-color">{{$calc->tprofile_600_color}}</td>
                        <td id="table-600-count">{{$calc->tprofile_600_count}}</td>
                        <td id="table-600-price">{{$calc->tprofile_600_price}}</td>
                        <td id="table-600-pack">{{$calc->tprofile_600_pack}}</td>
                        <td id="table-600-price-all">{{$calc->tprofile_600_price_all}}</td>
                    </tr>
                    <tr>
                        <td id="table-susp-vendor">{{$calc->tprofile_susp_vendor}}</td>
                        <td id="table-susp-model">{{$calc->tprofile_susp_model}}</td>
                        <td id="table-susp-name">{{$calc->tprofile_susp_name}}</td>
                        <td id="table-susp-width">{{$calc->tprofile_susp_width}}</td>
                        <td id="table-susp-lenght">{{$calc->tprofile_susp_lenght}}</td>
                        <td id="table-susp-color">{{$calc->tprofile_susp_color}}</td>
                        <td id="table-susp-count">{{$calc->tprofile_susp_count}}</td>
                        <td id="table-susp-price">{{$calc->tprofile_susp_price}}</td>
                        <td id="table-susp-pack">{{$calc->tprofile_susp_pack}}</td>
                        <td id="table-susp-price-all">{{$calc->tprofile_susp_price_all}}</td>
                    </tr>
                    {{--BottomRightSide--}}
                    <tr>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: #f9f9f9; color: #f78421;">Стоимость</td>
                        <td id="table-summ-all" style="background-color: #f9f9f9; color: #f78421;">{{$calc->tprofile_sum_total}}</td>
                    </tr>
                    <tr>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: #f9f9f9; color: #f78421;">Скидка</td>
                        <td id="table-summ" style="background-color: #f9f9f9; color: #f78421;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: #f9f9f9; color: #f78421;">НДС</td>
                        <td id="table-summ" style="background-color: #f9f9f9; color: #f78421;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white; color: #f78421;"><strong>ИТОГО</strong></td>
                        <td id="table-total" style="background-color: white; color: #f78421;"><strong>{{$calc->tprofile_sum_total}}</strong></td>
                    </tr>
                    </tbody>
                </table>
                    <hr>
                @endforeach
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
