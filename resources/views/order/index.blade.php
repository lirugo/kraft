@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Главная</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <button id="select_calc" class="btn btn-primary" style="border-radius:0; margin:0;">Добавить продукт</button>
                <button id="save_order" class="btn btn-primary" onclick="common_save()" style="border-radius:0; margin:0;">Сохранить заказ</button>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 text-right">
                <label>Заказ №</label> <label id="order_code">{{$data['objectId'].\Carbon\Carbon::now()->format('Y'.'m'.'d'.'H'.'i'.'s')}}</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr style="margin:10px 0 10px 0;">
            </div>
        </div>
        @include('order.calc.includes.tprofile')

        @include('order.calc.includes.grilyato')

        @include('order.calc.includes.common')

        <div id="loader-message" title="Получение данных">
            <div id="progressbar"class="m-t-20"></div>
        </div>


    </div>
    {{--JQuery--}}
    <div id="dialog_select_cal" title="Выберите калькулятор" class="text-center">
            <div class="col-md-3">
                <img src="/img/icon/calc/tprofile.png" onclick="showTProfile()" width="150px"/>
                <h4 onclick="showTProfile()">T-Profile</h4>
            </div>
            <div class="col-md-3">
                <img src="/img/icon/calc/grilyato.png"  onclick="showGrilyato()" width="150px"/>
                <h4 onclick="showGrilyato()">Grilyato</h4>
            </div>
            <div class="col-md-3">
                <img src="/img/icon/calc/cube.png" width="150px"/>
                <h4>Cube</h4>
            </div>
            <div class="col-md-3">
                <img src="/img/icon/calc/led.png" width="150px"/>
                <h4>Led</h4>
            </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/order/calc/tprofile.js"></script>
    <script src="/js/order/calc/grilyato.js"></script>
    <script src="/js/order/calc/common.js"></script>
    <script>
        $("#calc_t_profile").hide();
        $("#calc_grilyato").hide();
        $("#common_div").hide();
        $("#save_order").hide();
        //Dialog select Calc
        $( function() {
            $( "#dialog_select_cal" ).dialog({
                autoOpen: true,
                width:800,
                dialogClass: 'arbeitsauftrag_hilfe',
                show: {
                    effect: "drop",
                    duration: 1000
                },
                hide: {
                    effect: "drop",
                    duration: 1000
                }
            });

            $( "#select_calc" ).on( "click", function() {
                $("#dialog_select_cal").dialog( "open" );
            });
        });


        //Show calc
        function showTProfile() {
            //Hide  Dialog Window
            $("#dialog_select_cal").dialog( "close" );
            $("#calc_grilyato").hide();
            //Show or Hide Calc TProfile
            if($( "#calc_t_profile" ).is( ":visible" ))
            {
                $("#calc_t_profile").hide();
            }
            else $("#calc_t_profile").show();
        }
        function showGrilyato() {
            //Hide  Dialog Window
            $("#dialog_select_cal").dialog( "close" );
            $("#calc_t_profile").hide();
            //Show or Hide Calc TProfile
            if($( "#calc_grilyato" ).is( ":visible" ))
            {
                $("#calc_grilyato").hide();
            }
            else $("#calc_grilyato").show();
        }
    </script>
@endsection
