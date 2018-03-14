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
                        <td id="table-total" style="background-color: white; color: #f78421;"><strong></strong></td>
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
                    document.getElementById("color").selectedIndex = "0";
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
                async: false,
                success: function(data){
                    vendor = data;
                }
            });
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
            //EndDataProcessing

            // //SetDataInTable
            if(vendor !== "")
            {
                vendor.forEach(function(v){
                    if(v.profile === 3600)
                    {
                        document.getElementById("table-3600-vendor").innerHTML = v.vendor_code;
                        document.getElementById("table-3600-model").innerHTML = v.model;
                        document.getElementById("table-3600-name").innerHTML = v.description;
                        document.getElementById("table-3600-width").innerHTML = v.profile_thickness;
                        document.getElementById("table-3600-lenght").innerHTML = v.profile;
                        document.getElementById("table-3600-color").innerHTML = v.color;
                        document.getElementById("table-3600-count").innerHTML = Math.ceil(tp3600)+" ("+Math.ceil(tp3600*100)/100+")";
                        document.getElementById("table-3600-price").innerHTML = tp3600_price;
                        document.getElementById("table-3600-pack").innerHTML = pack3600;
                        document.getElementById("table-3600-price-all").innerHTML = sum3600;
                    }else if(v.profile === 1200)
                    {
                        document.getElementById("table-1200-vendor").innerHTML = v.vendor_code;
                        document.getElementById("table-1200-model").innerHTML = v.model;
                        document.getElementById("table-1200-name").innerHTML = v.description;
                        document.getElementById("table-1200-width").innerHTML = v.profile_thickness;
                        document.getElementById("table-1200-lenght").innerHTML = v.profile;
                        document.getElementById("table-1200-color").innerHTML = v.color;
                        document.getElementById("table-1200-count").innerHTML = Math.ceil(tp1200)+" ("+Math.ceil(tp1200*100)/100+")";
                        document.getElementById("table-1200-price").innerHTML = tp1200_price;
                        document.getElementById("table-1200-pack").innerHTML = pack1200;
                        document.getElementById("table-1200-price-all").innerHTML = sum1200;
                    }else if(v.profile === 600)
                    {
                        document.getElementById("table-600-vendor").innerHTML = v.vendor_code;
                        document.getElementById("table-600-model").innerHTML = v.model;
                        document.getElementById("table-600-name").innerHTML = v.description;
                        document.getElementById("table-600-width").innerHTML = v.profile_thickness;
                        document.getElementById("table-600-lenght").innerHTML = v.profile;
                        document.getElementById("table-600-color").innerHTML = v.color;
                        document.getElementById("table-600-count").innerHTML = Math.ceil(tp600)+" ("+Math.ceil(tp600*100)/100+")";
                        document.getElementById("table-600-price").innerHTML = tp600_price;
                        document.getElementById("table-600-pack").innerHTML = pack600;
                        document.getElementById("table-600-price-all").innerHTML = sum600;
                    }
                });
            }else
            {
                document.getElementById("table-3600-vendor").innerHTML = null;
                document.getElementById("table-3600-model").innerHTML = model;
                document.getElementById("table-3600-name").innerHTML = null;
                document.getElementById("table-3600-width").innerHTML = width;
                document.getElementById("table-3600-lenght").innerHTML = "3600";
                document.getElementById("table-3600-color").innerHTML = color;
                document.getElementById("table-3600-count").innerHTML = Math.ceil(tp3600)+" ("+Math.ceil(tp3600*100)/100+")";
                document.getElementById("table-3600-price").innerHTML = tp3600_price;
                document.getElementById("table-3600-pack").innerHTML = pack3600;
                document.getElementById("table-3600-price-all").innerHTML = sum3600;

                document.getElementById("table-1200-vendor").innerHTML = null;
                document.getElementById("table-1200-model").innerHTML = model;
                document.getElementById("table-1200-name").innerHTML = null;
                document.getElementById("table-1200-width").innerHTML = width;
                document.getElementById("table-1200-lenght").innerHTML = "1200";
                document.getElementById("table-1200-color").innerHTML = color;
                document.getElementById("table-1200-count").innerHTML = Math.ceil(tp1200)+" ("+Math.ceil(tp1200*100)/100+")";
                document.getElementById("table-1200-price").innerHTML = tp1200_price;
                document.getElementById("table-1200-pack").innerHTML = pack1200;
                document.getElementById("table-1200-price-all").innerHTML = sum1200;

                document.getElementById("table-600-vendor").innerHTML = null;
                document.getElementById("table-600-model").innerHTML = model;
                document.getElementById("table-600-name").innerHTML = null;
                document.getElementById("table-600-width").innerHTML = width;
                document.getElementById("table-600-lenght").innerHTML = "600";
                document.getElementById("table-600-color").innerHTML = color;
                document.getElementById("table-600-count").innerHTML = Math.ceil(tp600)+" ("+Math.ceil(tp600*100)/100+")";
                document.getElementById("table-600-price").innerHTML = tp600_price;
                document.getElementById("table-600-pack").innerHTML = pack600;
                document.getElementById("table-600-price-all").innerHTML = sum600;
            }
            //SetSuspension
            document.getElementById("table-susp-vendor").innerHTML = null;
            document.getElementById("table-susp-model").innerHTML = model;
            document.getElementById("table-susp-name").innerHTML = "Подвес";
            document.getElementById("table-susp-width").innerHTML = width;
            document.getElementById("table-susp-lenght").innerHTML = null;
            document.getElementById("table-susp-color").innerHTML = null;
            document.getElementById("table-susp-count").innerHTML = Math.ceil(susp)+" ("+Math.ceil(susp*100)/100+")";
            document.getElementById("table-susp-price").innerHTML = susp_price;
            document.getElementById("table-susp-pack").innerHTML = packSusp;
            document.getElementById("table-susp-price-all").innerHTML = sumSusp;
            //TotalTable
            document.getElementById("table-summ-all").innerHTML = sum600+sum1200+sum3600+sumSusp;
            document.getElementById("table-total").innerHTML = sum600+sum1200+sum3600+sumSusp;
            // //ShowTable
            $("#table").show();
            //EndSetDataInTable

            //Send Ajax Post to Controller save in database
            // make an ajax request to a PHP file
            // on our site that will update the database
            // pass in our lat/lng as parameters
            // $.post('/calc/tprofile/history/'+id, {
            //     _token: $('meta[name=csrf-token]').attr('content'),
            //     id: id,
            //     type: "T-Profile",
            //     difficult: difficult,
            //     tp3600: tp3600,
            //     tp1200: tp1200,
            //     tp600: tp600,
            //     L3000: angles,
            //     susp: susp,
            //
            //     //PriceByOne
            //     tp3600_priceByOne: tp3600_price,
            //     tp1200_priceByOne: tp1200_price,
            //     tp600_priceByOne: tp600_price,
            //     L3000_priceByOne: L3000_price,
            //     susp_priceByOne: susp_price,
            //
            //     //CountPackage
            //     tp3600_package:Math.ceil(tp3600/25),
            //     tp1200_package:Math.ceil(tp1200/50),
            //     tp600_package:Math.ceil(tp600/75),
            //     L3000_package:Math.ceil(angles/50),
            //     susp_package:Math.ceil(susp/100),
            //
            //     //CommonPrice
            //     tp3600_price:Math.ceil(tp3600/25)*tp3600_price*25,
            //     tp1200_price:Math.ceil(tp1200/50)*tp1200_price*50,
            //     tp600_price:Math.ceil(tp600/75)*tp600_price*75,
            //     L3000_price:Math.ceil(angles/50)*L3000_price*50,
            //     susp_price:Math.ceil(susp/100)*susp_price*100,
            //     sum: Math.ceil(tp3600/25)*tp3600_price*25+Math.ceil(tp1200/50)*tp1200_price*50+Math.ceil(tp600/75)*tp600_price*75+Math.ceil(angles/50)*L3000_price*50+Math.ceil(susp/100)*susp_price*100
            //     }
            // )
            //     .done(function(data) {
            //         //alert(data);
            //     })
            //     .fail(function() {
            //         alert( "error" );
            //     });
        }
    </script>
@endsection
