@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/calc/{{$data['object']->id}}">Калькулятор</a>
                <a class="link-bread" href="#">T-Профиль</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 form-inline">
                {!! Form::label('label', "Площадь потолка:") !!}
                {!! Form::text('areaceiling', null, ['class' => 'form-control', 'id' => 'areaceiling', 'required']) !!} м<sup>2</sup>
                <br>
                <br>
                {!! Form::label('label', "Периметр потолка:") !!}
                {!! Form::text('pceiling', null, ['class' => 'form-control', 'id' => 'pceiling', 'required']) !!} м
                <br>
                <br>
                {!! Form::label('label', "Конфигурация помещения:") !!}
                {{ Form::radio('difficult', $data['constants']->easy, false,  ['id' => 'easy']) }} Простая
                {{ Form::radio('difficult', $data['constants']->hard, false,  ['id' => 'hard']) }} Сложная
                <br>
                <br>
                {!! Form::label('label', "Толщина профиля:") !!}
                {{ Form::radio('thickness', '15', false,  ['id' => '15mm']) }} 15 мм
                {{ Form::radio('thickness', '24', false,  ['id' => '24mm']) }} 24 мм
                <br>
                <br>
                {!! Form::label('label', "Модель профиля:") !!}
                <select id="model" name="model" class="form-control" required>
                    <option value="" selected disabled>Выберите модель профиля</option>
                    <option id="NOVA" value="Nova">NOVA</option>
                    <option id="FORTIS" value="Fortis">FORTIS</option>
                    <option id="HD" value="HD">HD</option>
                    <option id="RH1000" value="RH1000">RH1000</option>
                </select>
            </div>
        </div>

        <!--Hidden objects-->
        <div class="row m-t-20">
            <!--Select color-->
            <div id="color" class="col-md-4">
                {!! Form::label('label', "Цвет:") !!}
                <select id="colors" name="color" class="form-control" required>
                    <option value="default" selected disabled>Выберите цвет</option>
                    <option value="other" id="other">Другой</option>
                </select>
                <div id="othercolor">
                    <input class="form-control" placeholder="4 цифры RAL" required id="othercolorinput">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {!! Form::submit('Расчитать',['class' => 'btn btn-primary m-t-20 pull-left', 'id' => 'calc']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="table">
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
                        <td id="table-3600-vendor"></td>
                        <td id="table-3600-model"></td>
                        <td id="table-3600-name"></td>
                        <td id="table-3600-width"></td>
                        <td id="table-3600-lenght"></td>
                        <td id="table-3600-color"></td>
                        <td id="table-3600-count"></td>
                        <td id="table-3600-price"></td>
                        <td id="table-3600-pack"></td>
                        <td id="table-3600-price-all"></td>
                    </tr>
                    <tr>
                        <td id="table-1200-vendor"></td>
                        <td id="table-1200-model"></td>
                        <td id="table-1200-name"></td>
                        <td id="table-1200-width"></td>
                        <td id="table-1200-lenght"></td>
                        <td id="table-1200-color"></td>
                        <td id="table-1200-count"></td>
                        <td id="table-1200-price"></td>
                        <td id="table-1200-pack"></td>
                        <td id="table-1200-price-all"></td>
                    </tr>
                    <tr>
                        <td id="table-600-vendor"></td>
                        <td id="table-600-model"></td>
                        <td id="table-600-name"></td>
                        <td id="table-600-width"></td>
                        <td id="table-600-lenght"></td>
                        <td id="table-600-color"></td>
                        <td id="table-600-count"></td>
                        <td id="table-600-price"></td>
                        <td id="table-600-pack"></td>
                        <td id="table-600-price-all"></td>
                    </tr>
                    <tr>
                        <td id="table-susp-vendor"></td>
                        <td id="table-susp-model"></td>
                        <td id="table-susp-name"></td>
                        <td id="table-susp-width"></td>
                        <td id="table-susp-lenght"></td>
                        <td id="table-susp-color"></td>
                        <td id="table-susp-count"></td>
                        <td id="table-susp-price"></td>
                        <td id="table-susp-pack"></td>
                        <td id="table-susp-price-all"></td>
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
                        <td id="table-summ-all" style="background-color: #f9f9f9; color: #f78421;"></td>
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
                        <td id="table-total" style="background-color: white; color: #f78421;"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery.validate.js"></script>
    <script>
        $(function() {
            $("#table").hide();
            $("#model").change(function() {
                document.getElementById("colors").selectedIndex = 0;
                $("#othercolor").hide();
                $("#color").hide();
                for (var i=document.getElementById('colors').options.length; i-->2;)
                    document.getElementById('colors').options[i] = null;
                var colors = document.getElementById("colors");
                var option = document.createElement("option");
                var option1 = document.createElement("option");
                var option2 = document.createElement("option");
                var option3 = document.createElement("option");
                var option4 = document.createElement("option");
                if ($("#NOVA").is(":selected"))
                {
                    option.text = "RAL 9003 (белый)";
                    option.value = "9003";
                    colors.add(option);
                    $("#color").show();
                } else  if ($("#FORTIS").is(":selected"))
                {
                    option.text = "RAL 9003 (белый)";
                    option.value = "9003";
                    colors.add(option);
                    option1.text = "RAL 9005 (черынй)";
                    option1.value = "9005";
                    colors.add(option1);
                    option2.text = "RAL 9007 (серый)";
                    option2.value = "9007";
                    colors.add(option2);
                    $("#color").show();
                } else  if ($("#HD").is(":selected") || $("#RH1000").is(":selected"))
                {
                    option.text = "RAL 9003 (белый)";
                    option.value = "9003";
                    colors.add(option);
                    option1.text = "RAL 9005 (черынй)";
                    option1.value = "9005";
                    colors.add(option1);
                    option2.text = "RAL 9007 (серый)";
                    option2.value = "9007";
                    colors.add(option2);
                    $("#color").show();
                } else {
                    document.getElementById("colors").selectedIndex = 0;
                    $("#othercolor").hide();
                    $("#color").hide();
                }
            }).trigger('change');

            $("#color").change(function() {
                if ($("#other").is(":selected")) {
                    $("#othercolor").show();
                } else {
                    $("#othercolor").hide();
                }
            }).trigger('change');
        });

        //Submit BTN
        document.getElementById("calc").addEventListener("click", calcFunction);

        function calcFunction() {
            //Validate
            var numbers = /^[0-9]+$/;
            if(!document.getElementById('areaceiling').validity.valid || !document.getElementById('areaceiling').value.match(numbers))
            {
                document.getElementById("areaceiling").focus();
                alert('S is empty or not digit');
                return;
            }
            if(!document.getElementById('pceiling').validity.valid || !document.getElementById('pceiling').value.match(numbers))
            {
                document.getElementById("pceiling").focus();
                alert('P is empty or not digit');
                return;
            }
            if(!document.getElementById('easy').checked && !document.getElementById('hard').checked)
            {
                document.getElementById("easy").focus();
                alert('Выберите конфигурацию помещения.');
                return;
            }
            if(!document.getElementById('15mm').checked && !document.getElementById('24mm').checked)
            {
                document.getElementById("15mm").focus();
                alert('Выберите толщину профиля.');
                return;
            }
            if(!document.getElementById('model').validity.valid)
            {
                document.getElementById("model").focus();
                alert('Model is empty');
                return;
            }
            if(document.getElementById('colors').value === "default")
            {
                document.getElementById("colors").focus();
                alert('Color is empty');
                return;
            }
            if(document.getElementById('colors').value === "other" && document.getElementById('othercolorinput').value === "")
            {
                document.getElementById("othercolorinput").focus();
                alert('Введите 4 цифры цвета RAL');
                return;
            }
            //EndValidate
            //InitialData
            var s = document.getElementById("areaceiling").value;
            var p = document.getElementById("pceiling").value;
            var model = document.getElementById('model').value;
            var width;
            if(document.getElementById('15mm').checked)
                width = document.getElementById('15mm').value;
            else
                width = document.getElementById('24mm').value;
            var color =null;
            if(document.getElementById('colors').value === "other")
                color = document.getElementById('othercolorinput').value;
                else color = document.getElementById('colors').value;
            var difficult = $('input[name=difficult]:checked').val();
            //EndInitialData

            //DataProcessing
            //GetVenodorCode
            var vendor="";
            //отправляю POST запрос и получаю ответ

            function getNewENumber(cb_func){
                $.ajax
                ({
                    type: "POST",
                    url: "/calc/tprofile/vendor",
                    response:'json',//тип возвращаемого ответа text либо xml
                    data:{
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        'model':model,
                        'profile_thickness':width,
                        'color':color
                    },
                    async:true,
                    success: cb_func,
                    error: function(request,error) {
                        alert('An error occurred attempting to get new e-number');
                        // console.log(request, error);
                    }
                });
            }
            getNewENumber(function( vendor ){
                //SetVariableFromVendorIfExist
                //EndGetVenodreCode
                var tp3600 = tp3600c*s + ((tp3600c*s)/100)*difficult;
                var tp1200 = tp1200c*s + ((tp1200c*s)/100)*difficult;
                var tp600 = tp600c*s + ((tp600c*s)/100)*difficult;
                var angles = p/L3000c;
                var susp = suspc*s + ((suspc*s)/100)*difficult;

                var price;
                if(document.getElementById('colors').value === "other") price = 1.5;
                else price = 1;
                //SetPrice
                var tp3600_price = tp3600c_price * price;
                var tp1200_price = tp1200c_price * price;
                var tp600_price = tp600c_price * price;
                var L3000_price = L3000c_price * price;
                var susp_price = suspc_price;

                //Pack
                var pack3600 = Math.ceil(tp3600/tp3600c_pack);
                var pack1200 = Math.ceil(tp1200/tp1200c_pack);
                var pack600 = Math.ceil(tp600/tp600c_pack);
                var packSusp = Math.ceil(susp/suspc_pack);
                //Summ
                var sum3600 = Math.ceil(tp3600/tp3600c_pack)*tp3600_price*tp3600c_pack;
                var sum1200 = Math.ceil(tp1200/tp1200c_pack)*tp1200_price*tp1200c_pack;
                var sum600 = Math.ceil(tp600/tp600c_pack)*tp600_price*tp600c_pack;
                var sumSusp = Math.ceil(susp/suspc_pack)*susp_price*suspc_pack;

                var sumTotal = sum600+sum1200+sum3600+sumSusp;

                //var
                var v3600_vendor;
                var v3600_model;
                var v3600_name;
                var v3600_width;
                var v3600_lenght;
                var v3600_color;
                var v3600_count;
                var v3600_price;
                var v3600_pack;
                var v3600_price_all;

                var v1200_vendor;
                var v1200_model;
                var v1200_name;
                var v1200_width;
                var v1200_lenght;
                var v1200_color;
                var v1200_count;
                var v1200_price;
                var v1200_pack;
                var v1200_price_all;

                var v600_vendor;
                var v600_model;
                var v600_name;
                var v600_width;
                var v600_lenght;
                var v600_color;
                var v600_count;
                var v600_price;
                var v600_pack;
                var v600_price_all;

                var vSusp_vendor;
                var vSusp_model;
                var vSusp_name;
                var vSusp_width;
                var vSusp_lenght;
                var vSusp_color;
                var vSusp_count;
                var vSusp_price;
                var vSusp_pack;
                var vSusp_price_all;

                var vSumTotal;

                //EndDataProcessing
                //SetDataInTable
                if(vendor !== "")
                {
                    v3600_vendor = vendor[0].vendor_code;
                    v3600_model = vendor[0].model;
                    v3600_name = vendor[0].description;
                    v3600_width = vendor[0].profile_thickness;
                    v3600_lenght = vendor[0].profile;
                    v3600_color = vendor[0].color;
                    v3600_count = Math.ceil(tp3600);
                    v3600_price = tp3600_price;
                    v3600_pack = pack3600;
                    v3600_price_all = sum3600;

                    v1200_vendor = vendor[1].vendor_code;
                    v1200_model = vendor[1].model;
                    v1200_name = vendor[1].description;
                    v1200_width = vendor[1].profile_thickness;
                    v1200_lenght = vendor[1].profile;
                    v1200_color = vendor[1].color;
                    v1200_count = Math.ceil(tp1200);
                    v1200_price = tp1200_price;
                    v1200_pack = pack1200;
                    v1200_price_all = sum1200;

                    v600_vendor = vendor[2].vendor_code;
                    v600_model = vendor[2].model;
                    v600_name = vendor[2].description;
                    v600_width = vendor[2].profile_thickness;
                    v600_lenght = vendor[2].profile;
                    v600_color = vendor[2].color;
                    v600_count = Math.ceil(tp600);
                    v600_price = tp600_price;
                    v600_pack = pack600;
                    v600_price_all = sum600;
                }else
                {
                    v3600_vendor = null;
                    v3600_model = model;
                    v3600_name = null;
                    v3600_width = width;
                    v3600_lenght = "3600";
                    v3600_color = color;
                    v3600_count = Math.ceil(tp3600)+" ("+Math.ceil(tp3600*100)/100+")";
                    v3600_price = tp3600_price;
                    v3600_pack = pack3600;
                    v3600_price_all = sum3600;

                    v1200_vendor = null;
                    v1200_model = model;
                    v1200_name = null;
                    v1200_width = width;
                    v1200_lenght = "1200";
                    v1200_color = color;
                    v1200_count = Math.ceil(tp1200)+" ("+Math.ceil(tp1200*100)/100+")";
                    v1200_price = tp1200_price;
                    v1200_pack = pack1200;
                    v1200_price_all = sum1200;

                    v600_vendor = null;
                    v600_model = model;
                    v600_name = null;
                    v600_width = width;
                    v600_lenght = "600";
                    v600_color = color;
                    v600_count = Math.ceil(tp600)+" ("+Math.ceil(tp600*100)/100+")";
                    v600_price = tp600_price;
                    v600_pack = pack600;
                    v600_price_all = sum600;
                }

                //SetSuspension
                vSusp_vendor = null;
                vSusp_model = model;
                vSusp_name = "Подвес";
                vSusp_width = width;
                vSusp_lenght = null;
                vSusp_color = null;
                vSusp_count = Math.ceil(susp)+" ("+Math.ceil(susp*100)/100+")";
                vSusp_price = susp_price;
                vSusp_pack = packSusp;
                vSusp_price_all = sumSusp;
                //TotalTable
                vSumTotal = sumTotal;

                //Display
                document.getElementById("table-3600-vendor").innerHTML =v3600_vendor;
                document.getElementById("table-3600-model").innerHTML =v3600_model;
                document.getElementById("table-3600-name").innerHTML =v3600_name;
                document.getElementById("table-3600-width").innerHTML =v3600_width;
                document.getElementById("table-3600-lenght").innerHTML =v3600_lenght;
                document.getElementById("table-3600-color").innerHTML = v3600_color;
                document.getElementById("table-3600-count").innerHTML = v3600_count;
                document.getElementById("table-3600-price").innerHTML = v3600_price;
                document.getElementById("table-3600-pack").innerHTML = v3600_pack;
                document.getElementById("table-3600-price-all").innerHTML = v3600_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

                document.getElementById("table-1200-vendor").innerHTML = v1200_vendor;
                document.getElementById("table-1200-model").innerHTML = v1200_model;
                document.getElementById("table-1200-name").innerHTML = v1200_name;
                document.getElementById("table-1200-width").innerHTML = v1200_width;
                document.getElementById("table-1200-lenght").innerHTML = v1200_lenght;
                document.getElementById("table-1200-color").innerHTML = v1200_color;
                document.getElementById("table-1200-count").innerHTML = v1200_count;
                document.getElementById("table-1200-price").innerHTML = v1200_price;
                document.getElementById("table-1200-pack").innerHTML = v1200_pack;
                document.getElementById("table-1200-price-all").innerHTML = v1200_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

                document.getElementById("table-600-vendor").innerHTML = v600_vendor;
                document.getElementById("table-600-model").innerHTML = v600_model;
                document.getElementById("table-600-name").innerHTML = v600_name;
                document.getElementById("table-600-width").innerHTML = v600_width;
                document.getElementById("table-600-lenght").innerHTML = v600_lenght;
                document.getElementById("table-600-color").innerHTML = v600_color;
                document.getElementById("table-600-count").innerHTML = v600_count;
                document.getElementById("table-600-price").innerHTML = v600_price;
                document.getElementById("table-600-pack").innerHTML = v600_pack;
                document.getElementById("table-600-price-all").innerHTML = v600_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

                document.getElementById("table-susp-vendor").innerHTML = vSusp_vendor;
                document.getElementById("table-susp-model").innerHTML = vSusp_model;
                document.getElementById("table-susp-name").innerHTML = vSusp_name;
                document.getElementById("table-susp-width").innerHTML = vSusp_width;
                document.getElementById("table-susp-lenght").innerHTML = vSusp_lenght;
                document.getElementById("table-susp-color").innerHTML = vSusp_color;
                document.getElementById("table-susp-count").innerHTML = vSusp_count;
                document.getElementById("table-susp-price").innerHTML = vSusp_price;
                document.getElementById("table-susp-pack").innerHTML = vSusp_pack;
                document.getElementById("table-susp-price-all").innerHTML = vSusp_price_all.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');;

                document.getElementById("table-summ-all").innerHTML = vSumTotal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
                document.getElementById("table-total").innerHTML = vSumTotal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').bold();

                // Send Ajax Post to Controller save in database
                $.post('/calc/tprofile/history/'+id, {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    id: id,
                    type: "T-Profile",
                    difficult: difficult,

                    s3600_vendor:v3600_vendor,
                    s3600_model:v3600_model,
                    s3600_name:v3600_name,
                    s3600_width:v3600_width,
                    s3600_lenght:v3600_lenght,
                    s3600_color:v3600_color,
                    s3600_count:v3600_count,
                    s3600_price:v3600_price,
                    s3600_pack:v3600_pack,
                    s3600_price_all:v3600_price_all,

                    s1200_vendor:v1200_vendor,
                    s1200_model:v1200_model,
                    s1200_name:v1200_name,
                    s1200_width:v1200_width,
                    s1200_lenght:v1200_lenght,
                    s1200_color:v1200_color,
                    s1200_count:v1200_count,
                    s1200_price:v1200_price,
                    s1200_pack:v1200_pack,
                    s1200_price_all:v1200_price_all,

                    s600_vendor:v600_vendor,
                    s600_model:v600_model,
                    s600_name:v600_name,
                    s600_width:v600_width,
                    s600_lenght:v600_lenght,
                    s600_color:v600_color,
                    s600_count:v600_count,
                    s600_price:v600_price,
                    s600_pack:v600_pack,
                    s600_price_all:v600_price_all,

                    sSusp_vendor:vSusp_vendor,
                    sSusp_model:vSusp_model,
                    sSusp_name:vSusp_name,
                    sSusp_width:vSusp_width,
                    sSusp_lenght:vSusp_lenght,
                    sSusp_color:vSusp_color,
                    sSusp_count:vSusp_count,
                    sSusp_price:vSusp_price,
                    sSusp_pack:vSusp_pack,
                    sSusp_price_all:vSusp_price_all,

                    sSumTotal:vSumTotal

                    }
                )
                    .done(function(data) {
                        //alert(data);
                    })
                    .fail(function() {
                        alert( "error" );
                    });
            });
            // //ShowTable
            $("#table").show();
            //EndSetDataInTable
        }
    </script>
@endsection
