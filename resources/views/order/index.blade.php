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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <button id="select_calc" class="botton botton-primary">Выберите продукт</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr style="margin: 0; margin-bottom: 10px;">
            </div>
        </div>
        @include('order.calc.includes.tprofile')
    </div>
    {{--JQuery--}}
    <div id="dialog_select_cal" title="Выберите калькулятор">
        <div class="row text-center">
            <div class="col-md-3">
                <img src="/img/icon/calc/tprofile.png" onclick="showTProfile()" width="150px"/>
                <h4 onclick="showTProfile()">T-Profile</h4>
            </div>
            <div class="col-md-3">
                <img src="/img/icon/calc/cube.png" width="150px"/>
                <h4>Cube</h4>
            </div>
            <div class="col-md-3">
                <img src="/img/icon/calc/grilyato.png" width="150px"/>
                <h4>Grilyato</h4>
            </div>
            <div class="col-md-3">
                <img src="/img/icon/calc/led.png" width="150px"/>
                <h4>Led</h4>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $("#calc_t_profile").hide();
        $( function() {
            $( "#dialog_select_cal" ).dialog({
                autoOpen: false,
                width:800,
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

        function showTProfile() {
            //Hide  Dialog Window
            $("#dialog_select_cal").dialog( "close" );
            //Show or Hide Calc TProfile
            if($( "#calc_t_profile" ).is( ":visible" ))
            {
                $("#calc_t_profile").hide();
                $("#calc_t_profile_table").hide();
            }
            else $("#calc_t_profile").show();
        }
        $(function() {
            $("#calculator").change(function() {
                if ($("#t_profile").is(":selected")) {
                    $("#calc_t_profile").show();
                } else {
                    $("#calc_t_profile").hide();
                }
            }).trigger('change');
        });
    </script>
    <script src="/js/order/calc/tprofile.js"></script>
@endsection
