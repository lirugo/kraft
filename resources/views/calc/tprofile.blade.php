@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/calc/tprofile">Калкьулятор</a>
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
                {{ Form::radio('difficult', '3', false,  ['id' => 'easy']) }} Простая
                {{ Form::radio('difficult', '7', false,  ['id' => 'hard']) }} Сложная
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
                    <option id="NOVA" value="NOVA">NOVA</option>
                    <option id="FORTIS" value="FORTIS">FORTIS</option>
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
                    <tr>
                        <th scope="row">Кол-во</th>
                        <td id="table-tp3600"></td>
                        <td id="table-tp1200"></td>
                        <td id="table-tp600"></td>
                        <td id="table-angles"></td>
                        <td id="table-susp"></td>
                    </tr>
                    <tr>
                        <th scope="row">Цена за шт</th>
                        <td id="table-price-tp3600"></td>
                        <td id="table-price-tp1200"></td>
                        <td id="table-price-tp600"></td>
                        <td id="table-price-angles"></td>
                        <td id="table-price-susp"></td>
                    </tr>
                    <tr>
                        <th scope="row">Кол-во упаковок</th>
                        <td id="table-pack-tp3600"></td>
                        <td id="table-pack-tp1200"></td>
                        <td id="table-pack-tp600"></td>
                        <td id="table-pack-angles"></td>
                        <td id="table-pack-susp"></td>
                    </tr>
                    <tr>
                        <th scope="row">Стоимость</th>
                        <td id="table-summ-tp3600"></td>
                        <td id="table-summ-tp1200"></td>
                        <td id="table-summ-tp600"></td>
                        <td id="table-summ-angles"></td>
                        <td id="table-summ-susp"></td>
                        <td id="table-summ"></td>
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
                var difficult = $('input[name=difficult]:checked').val();
                //EndInitialData

                //DataProcessing
                var tp3600 = 0.234*s + ((0.234*s)/100)*difficult;
                var tp1200 = 1.4*s + ((1.4*s)/100)*difficult;
                var tp600 = 1.4*s + ((1.4*s)/100)*difficult;
                var angles = p/difficult;
                var susp = 0.7*s + ((0.7*s)/100)*difficult;
                //EndDataProcessing

                //SetDataInTable
                //CountTable
                document.getElementById("table-tp3600").innerHTML = Math.ceil(tp3600)+" ("+Math.ceil(tp3600*100)/100+"), шт";
                document.getElementById("table-tp1200").innerHTML = Math.ceil(tp1200)+" ("+Math.ceil(tp1200*100)/100+"), шт";
                document.getElementById("table-tp600").innerHTML = Math.ceil(tp600)+" ("+Math.ceil(tp600*100)/100+"), шт";
                document.getElementById("table-angles").innerHTML = Math.ceil(angles)+" ("+Math.ceil(angles*100)/100+"), шт";
                document.getElementById("table-susp").innerHTML = Math.ceil(susp)+" ("+Math.ceil(susp*100)/100+"), шт";
                //PriceTable
                var price;
                if(document.getElementById('colors').value === "other") price = 45;
                else price = 30;
                document.getElementById("table-price-tp3600").innerHTML = price+" грн";
                document.getElementById("table-price-tp1200").innerHTML = price+" грн";
                document.getElementById("table-price-tp600").innerHTML = price+" грн";
                document.getElementById("table-price-angles").innerHTML = price+" грн";
                document.getElementById("table-price-susp").innerHTML = price+" грн";
                //PackTable
                document.getElementById("table-pack-tp3600").innerHTML = Math.ceil(tp3600/25)+" уп";
                document.getElementById("table-pack-tp1200").innerHTML = Math.ceil(tp1200/50)+" уп";
                document.getElementById("table-pack-tp600").innerHTML = Math.ceil(tp600/75)+" уп";
                document.getElementById("table-pack-angles").innerHTML = Math.ceil(angles/50)+" уп";
                document.getElementById("table-pack-susp").innerHTML = Math.ceil(susp/100)+" уп";
                //SummTable
                document.getElementById("table-summ-tp3600").innerHTML = Math.ceil(tp3600/25)*price*25+" грн";
                document.getElementById("table-summ-tp1200").innerHTML = Math.ceil(tp1200/50)*price*50+" грн";
                document.getElementById("table-summ-tp600").innerHTML = Math.ceil(tp600/75)*price*75+" грн";
                document.getElementById("table-summ-angles").innerHTML = Math.ceil(angles/50)*price*50+" грн";
                document.getElementById("table-summ-susp").innerHTML = Math.ceil(susp/100)*price*100+" грн";
                document.getElementById("table-summ").innerHTML = Math.ceil(tp3600/25)*price*25+Math.ceil(tp1200/50)*price*50+Math.ceil(tp600/75)*price*75+Math.ceil(angles/50)*price*50+Math.ceil(susp/100)*price*100+" грн";
                //ShowTable
                $("#table").show();
                //EndSetDataInTable

            }
    </script>
@endsection
