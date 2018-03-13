
@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/calc/{{$data['object']->id}}">Калькулятор</a>
                <a class="link-bread" href="#">Грильято</a>
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
                {!! Form::label('label', "Модель профиля:") !!}
                <select id="model" name="model" class="form-control" required>
                    <option value="" selected disabled>Выберите модель профиля</option>
                    <option id="classical" value="classical">Классический</option>
                    <option id="pyramidal" value="pyramidal">Пирамидальный</option>
                    <option id="glk" value="glk">GLK модульный</option>
                </select>
                <br>
                <br>
                <select id="color" name="color" class="form-control" required>
                    <option value="default" selected disabled>Выберите цвет</option>
                    <option value="other" id="other">Другой</option>
                    <option value="9003" name="9003">RAL 9003 (белый)</option>
                    <option value="9005" name="9005">RAL 9005 (черный)</option>
                    <option value="9007" name="9007">RAL 9007 (серый)</option>
                </select>
                    <input class="form-control" placeholder="4 цифры RAL" required id="othercolorinput">
                <br>
                <br>
                {!! Form::label('label', "Размер ячейки, мм:") !!}
                <select id="sizecells" name="sizecells" class="form-control" required>
                    <option value="" selected disabled>Выберите размер ячейки</option>
                    <option id="50х50" value="50">50х50 мм</option>
                    <option id="60х60" value="60">60х60 мм</option>
                    <option id="75х75" value="75">75х75 мм</option>
                    <option id="86х86" value="86">86х86 мм</option>
                    <option id="100х100" value="100">100х100 мм</option>
                    <option id="120х120" value="120">120х120 мм</option>
                    <option id="150х150" value="150">150х150 мм</option>
                    <option id="200х200" value="200">200х200 мм</option>
                </select>
            </div>
        </div>

        <!--Hidden objects-->
        <div class="row m-t-20">
            <!--Select color-->
            <div id="color" class="col-md-4">

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
                    <tr>
                        <th scope="row">Кол-во</th>
                        <td id="table-tp2400"></td>
                        <td id="table-tp1200"></td>
                        <td id="table-tp600"></td>
                        <td id="table-tp600f"></td>
                        <td id="table-tp600m"></td>
                        <td id="table-tp600tc"></td>
                        <td id="table-susp"></td>
                        <td id="table-angles"></td>
                        <td id="table-suspass"></td>
                        <td id="table-dowel1"></td>
                        <td id="table-dowel2"></td>
                    </tr>
                    <tr>
                        <th scope="row">Цена за шт</th>
                        <td id="table-price-tp2400"></td>
                        <td id="table-price-tp1200"></td>
                        <td id="table-price-tp600"></td>
                        <td id="table-price-tp600f"></td>
                        <td id="table-price-tp600m"></td>
                        <td id="table-price-tp600tc"></td>
                        <td id="table-price-susp"></td>
                        <td id="table-price-angles"></td>
                        <td id="table-price-suspass"></td>
                        <td id="table-price-dowel1"></td>
                        <td id="table-price-dowel2"></td>
                    </tr>
                    <tr>
                        <th scope="row">Кол-во упаковок</th>
                        <td id="table-pack-tp2400"></td>
                        <td id="table-pack-tp1200"></td>
                        <td id="table-pack-tp600"></td>
                        <td id="table-pack-tp600f"></td>
                        <td id="table-pack-tp600m"></td>
                        <td id="table-pack-tp600tc"></td>
                        <td id="table-pack-susp"></td>
                        <td id="table-pack-angles"></td>
                        <td id="table-pack-suspass"></td>
                        <td id="table-pack-dowel1"></td>
                        <td id="table-pack-dowel2"></td>
                    </tr>
                    <tr>
                        <th scope="row">Стоимость</th>
                        <td id="table-summ-tp2400"></td>
                        <td id="table-summ-tp1200"></td>
                        <td id="table-summ-tp600"></td>
                        <td id="table-summ-tp600f"></td>
                        <td id="table-summ-tp600m"></td>
                        <td id="table-summ-tp600tc"></td>
                        <td id="table-summ-susp"></td>
                        <td id="table-summ-angles"></td>
                        <td id="table-summ-suspass"></td>
                        <td id="table-summ-dowel1"></td>
                        <td id="table-summ-dowel2"></td>
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

            $("#color").change(function() {
                if ($("#other").is(":selected")) {
                    $("#othercolorinput").show();
                } else {
                    $("#othercolorinput").hide();
                }
            }).trigger('change');
        });

        //Submit BTN
        document.getElementById("calc").addEventListener("click", calcFunction);

        function calcFunction() {
            //Validate
            var numbers = /^[0-9]+$/;
            if (!document.getElementById('areaceiling').validity.valid || !document.getElementById('areaceiling').value.match(numbers)) {
                document.getElementById("areaceiling").focus();
                alert('S is empty or not digit');
                return;
            }
            if (!document.getElementById('pceiling').validity.valid || !document.getElementById('pceiling').value.match(numbers)) {
                document.getElementById("pceiling").focus();
                alert('P is empty or not digit');
                return;
            }
            if (!document.getElementById('easy').checked && !document.getElementById('hard').checked) {
                document.getElementById("easy").focus();
                alert('Выберите конфигурацию помещения.');
                return;
            }
            if (!document.getElementById('model').validity.valid) {
                document.getElementById("model").focus();
                alert('Model is empty');
                return;
            }
            if (document.getElementById('color').value === "default") {
                document.getElementById("color").focus();
                alert('Color is empty');
                return;
            }
            if (document.getElementById('color').value === "other" && document.getElementById('othercolorinput').value === "") {
                document.getElementById("othercolorinput").focus();
                alert('Введите 4 цифры цвета RAL');
                return;
            }
            if (!document.getElementById('sizecells').validity.valid) {
                document.getElementById("sizecells").focus();
                alert('Select size cells.');
                return;
            }
            //EndValidate

            //InitialData
            var s = document.getElementById("areaceiling").value;
            var p = document.getElementById("pceiling").value;
            var difficult = $('input[name=difficult]:checked').val();
            var sizecells = document.getElementById("sizecells").value;
            //EndInitialData

            //DataProcessing
            if(document.getElementById("model").value === 'classical' || document.getElementById("model").value === 'pyramidal'){
                var k2400;
                if (document.getElementById("model").value === 'classical' || document.getElementById("model").value === 'pyramidal') {
                    if (document.getElementById("sizecells").value <= 100)
                        k2400 = g2400c_a;
                    else
                        k2400 = g2400c_b;
                }
                var tp2400 = k2400 * s + ((k2400 * s) / 100) * difficult;
                var tp3600 = 0;
                var tp600tc = 0;
                var tp1200;
                var tp600, tp600f, tp600m;
                if (document.getElementById("sizecells").value <= 100)
                    tp1200 = 0;
                else
                    tp1200 = g1200c_b * s + ((g1200c_b * s) / 100) * difficult;

                if (document.getElementById("sizecells").value <= 100)
                    tp600 = g600c_a * s + ((g600c_a * s) / 100) * difficult;
                else
                    tp600 = g600c_b * s + ((g600c_b * s) / 100) * difficult;

                tp600f = (600 / (sizecells - 1)) * g600fc_a * p;
                tp600f = tp600f + (tp600f / 100) * (difficult / 10);
                tp600m = tp600f;

                var susp = tp2400 * suspc_a;
                var angles = p / L3000c_a;
                angles = angles + ((angles / 100) * difficult) * 2;
                var suspass = tp2400 * suspass_a;
                var dowel1, dowel2;

                dowel1 = suspass;
                dowel2 = p * 2;
            }
            else {
                var susp = 0;
                var angles =0;
                var suspass = 0;
                var tp2400 = 0;
                var dowel1 = 0, dowel2 = 0;
                var tp3600 = tp3600c*s+((tp3600c*s)/100)*difficult;
                tp1200 = tp1200c*s+((tp1200c*s)/100)*difficult;
                tp600 = tp600c*s+((tp600c*s)/100)*difficult;
                tp600f = (600 / (sizecells - 1)) * g600fc_a * p;
                tp600f = tp600f + (tp600f / 100) * (difficult / 10);
                tp600m = tp600f;
                var tp600tc = g600tc*s+((g600tc*s)/100)*difficult;
            }
            //EndDataProcessing

            //SetDataInTable
            //CountTable
            document.getElementById("table-tp2400").innerHTML = Math.ceil(tp2400)+" ("+Math.ceil(tp2400*100)/100+"), шт";
            document.getElementById("table-tp1200").innerHTML = Math.ceil(tp1200)+" ("+Math.ceil(tp1200*100)/100+"), шт";
            document.getElementById("table-tp600").innerHTML = Math.ceil(tp600)+" ("+Math.ceil(tp600*100)/100+"), шт";
            document.getElementById("table-tp600f").innerHTML = Math.ceil(tp600f)+" ("+Math.ceil(tp600f*100)/100+"), шт";
            document.getElementById("table-tp600m").innerHTML = Math.ceil(tp600m)+" ("+Math.ceil(tp600m*100)/100+"), шт";
            document.getElementById("table-tp600tc").innerHTML = Math.ceil(tp600tc)+" ("+Math.ceil(tp600tc*100)/100+"), шт";
            document.getElementById("table-susp").innerHTML = Math.ceil(susp)+" ("+Math.ceil(susp*100)/100+"), шт";
            document.getElementById("table-angles").innerHTML = Math.ceil(angles)+" ("+Math.ceil(angles*100)/100+"), шт";
            document.getElementById("table-suspass").innerHTML = Math.ceil(suspass)+" ("+Math.ceil(suspass*100)/100+"), шт";
            document.getElementById("table-dowel1").innerHTML = Math.ceil(dowel1)+" ("+Math.ceil(dowel1*100)/100+"), шт";
            document.getElementById("table-dowel2").innerHTML = Math.ceil(dowel2)+" ("+Math.ceil(dowel2*100)/100+"), шт";
            // PriceTable
            var price;
            if(document.getElementById('color').value === "other") price = 1.5;
            else price = 1;
            var tp3600_price = 0;
            var tp2400_price = g2400c_price*price;
            var tp1200_price = g1200c_price*price;
            var tp600_price = g600c_price*price;
            var tp600f_price = g600fc_price*price;
            var tp600tc_price = g600tc_price*price;
            var L3000_price = L3000c_price*price;
            var susp_price = gsusp_price*price;
            var dowel1c_price = dowel1_price*price;
            var dowel2c_price = dowel2_price*price;
            document.getElementById("table-price-tp2400").innerHTML = tp2400_price+" грн";
            document.getElementById("table-price-tp1200").innerHTML = tp1200_price+" грн";
            document.getElementById("table-price-tp600").innerHTML = tp600_price+" грн";
            document.getElementById("table-price-tp600f").innerHTML = tp600f_price+" грн";
            document.getElementById("table-price-tp600m").innerHTML = tp600f_price+" грн";
            document.getElementById("table-price-tp600tc").innerHTML = tp600tc_price+" грн";
            document.getElementById("table-price-susp").innerHTML = susp_price+" грн";
            document.getElementById("table-price-angles").innerHTML = L3000_price+" грн";
            document.getElementById("table-price-suspass").innerHTML = gsuspass_price+" грн";
            document.getElementById("table-price-dowel1").innerHTML = dowel1c_price+" грн";
            document.getElementById("table-price-dowel2").innerHTML = dowel2c_price+" грн";
            //PackTable
            document.getElementById("table-pack-tp2400").innerHTML = Math.ceil(tp2400/g2400_pack)+" уп";
            document.getElementById("table-pack-tp1200").innerHTML = Math.ceil(tp1200/g1200_pack)+" уп";
            document.getElementById("table-pack-tp600").innerHTML = Math.ceil(tp600/g600_pack)+" уп";
            document.getElementById("table-pack-tp600f").innerHTML = Math.ceil(tp600f/g600f_pack)+" уп";
            document.getElementById("table-pack-tp600m").innerHTML = Math.ceil(tp600m/g600f_pack)+" уп";
            document.getElementById("table-pack-tp600tc").innerHTML = Math.ceil(tp600tc/g600tc_pack)+" уп";
            document.getElementById("table-pack-susp").innerHTML = Math.ceil(susp/gsusp_pack)+" уп";
            document.getElementById("table-pack-angles").innerHTML = Math.ceil(angles/gL3000_pack)+" уп";
            document.getElementById("table-pack-suspass").innerHTML = Math.ceil(suspass/gsuspass_pack)+" уп";
            document.getElementById("table-pack-dowel1").innerHTML = Math.ceil(dowel1/dowel1_pack)+" уп";
            document.getElementById("table-pack-dowel2").innerHTML = Math.ceil(dowel2/dowel2_pack)+" уп";
            //SummTable
            document.getElementById("table-summ-tp2400").innerHTML = Math.ceil(tp2400/g2400_pack)*tp2400_price*g2400_pack+" грн";
            document.getElementById("table-summ-tp1200").innerHTML = Math.ceil(tp1200/g1200_pack)*tp1200_price*g1200_pack+" грн";
            document.getElementById("table-summ-tp600").innerHTML = Math.ceil(tp600/g600_pack)*tp600_price*g600_pack+" грн";
            document.getElementById("table-summ-tp600f").innerHTML = Math.ceil(tp600f/g600f_pack)*tp600f_price*g600f_pack+" грн";
            document.getElementById("table-summ-tp600m").innerHTML = Math.ceil(tp600m/g600f_pack)*tp600f_price*g600f_pack+" грн";
            document.getElementById("table-summ-tp600tc").innerHTML = Math.ceil(tp600tc/g600tc_pack)*tp600tc_price*g600tc_pack+" грн";
            document.getElementById("table-summ-susp").innerHTML = Math.ceil(susp/gsusp_pack)*susp_price*gsusp_pack+" грн";
            document.getElementById("table-summ-angles").innerHTML = Math.ceil(angles/gL3000_pack)*L3000_price*gL3000_pack+" грн";
            document.getElementById("table-summ-suspass").innerHTML = Math.ceil(suspass/gsuspass_pack)*gsuspass_price*gsuspass_pack+" грн";
            document.getElementById("table-summ-dowel1").innerHTML = Math.ceil(dowel1/dowel1_pack)*dowel1c_price*dowel1_pack+" грн";
            document.getElementById("table-summ-dowel2").innerHTML = Math.ceil(dowel2/dowel2_pack)*dowel2c_price*dowel2_pack+" грн";
            var summ_grilyato =
                Math.ceil(tp3600/25)*tp3600_price*25+
                Math.ceil(tp2400/g2400_pack)*tp2400_price*g2400_pack+
                Math.ceil(tp1200/g1200_pack)*tp1200_price*g1200_pack+
                Math.ceil(tp600/g600_pack)*tp600_price*g600_pack+
                Math.ceil(tp600f/g600f_pack)*tp600f_price*g600f_pack+
                Math.ceil(tp600f/g600f_pack)*tp600f_price*g600f_pack+
                Math.ceil(tp600tc/g600tc_pack)*tp600tc_price*g600tc_pack+
                Math.ceil(susp/gsusp_pack)*susp_price*gsusp_pack+
                Math.ceil(angles/gL3000_pack)*L3000_price*gL3000_pack+
                Math.ceil(suspass/gsuspass_pack)*gsuspass_price*gsuspass_pack+
                Math.ceil(dowel1/dowel1_pack)*dowel1c_price*dowel1_pack+
                Math.ceil(dowel2/dowel2_pack)*dowel2c_price*dowel2_pack;
            document.getElementById("table-summ").innerHTML = summ_grilyato+" грн";
            //ShowTable
            $("#table").show();
            //EndSetDataInTable

            //Send Ajax Post to Controller save in database
            // make an ajax request to a PHP file
            // on our site that will update the database
            // pass in our lat/lng as parameters
            $.post('/calc/grilyato/history/'+id, {
                _token: $('meta[name=csrf-token]').attr('content'),
                id: id,
                type: "Grilyato",
                difficult: difficult,
                tp2400_grilyato: tp2400,
                tp1200_grilyato: tp1200,
                tp600_grilyato: tp600,
                tp600f_grilyato: tp600f,
                tp600tc_grilyato: tp600tc,
                susp_grilyato: susp,
                angles_grilyato: angles,
                suspass_grilyato: suspass,
                dowel1_grilyato: dowel1,
                dowel2_grilyato: dowel2,

                //PriceByOne
                tp2400_priceByOne_grilyato: tp2400_price,
                tp1200_priceByOne_grilyato: tp1200_price,
                tp600_priceByOne_grilyato: tp600_price,
                tp600f_priceByOne_grilyato: tp600f_price,
                tp600tc_priceByOne_grilyato: tp600tc_price,
                susp_price_priceByOne_grilyato: susp_price,
                angles_price_priceByOne_grilyato: L3000_price,
                gsuspass_price_priceByOne_grilyato: gsuspass_price,
                dowel1c_price_priceByOne_grilyato: dowel1c_price,
                dowel2c_price_priceByOne_grilyato: dowel2c_price,

                //CountPackage
                tp2400_package_grilyato:Math.ceil(tp2400/g2400_pack),
                tp1200_package_grilyato:Math.ceil(tp1200/g1200_pack),
                tp600_package_grilyato:Math.ceil(tp600/g600_pack),
                tp600f_package_grilyato:Math.ceil(tp600f/g600f_pack),
                tp600tc_package_grilyato:Math.ceil(tp600tc/g600tc_pack),
                susp_package_grilyato:Math.ceil(susp/gsusp_pack),
                angles_package_grilyato:Math.ceil(angles/gL3000_pack),
                suspass_package_grilyato:Math.ceil(suspass/gsuspass_pack),
                dowel1_package_grilyato:Math.ceil(dowel1/dowel1_pack),
                dowel2_package_grilyato:Math.ceil(dowel2/dowel2_pack),

                //CommonPrice
                tp2400_price_grilyato: Math.ceil(tp2400/g2400_pack)*tp2400_price*g2400_pack,
                tp1200_price_grilyato: Math.ceil(tp1200/g1200_pack)*tp1200_price*g1200_pack,
                tp600_price_grilyato: Math.ceil(tp600/g600_pack)*tp600_price*g600_pack,
                tp600f_price_grilyato: Math.ceil(tp600f/g600f_pack)*tp600f_price*g600f_pack,
                tp600tc_price_grilyato: Math.ceil(tp600tc/g600tc_pack)*tp600tc_price*g600tc_pack,
                susp_price_grilyato: Math.ceil(susp/gsusp_pack)*susp_price*gsusp_pack,
                angles_price_grilyato: Math.ceil(angles/gL3000_pack)*L3000_price*gL3000_pack,
                suspass_price_grilyato: Math.ceil(suspass/gsuspass_pack)*gsuspass_price*gsuspass_pack,
                dowel1_price_grilyato: Math.ceil(dowel1/dowel1_pack)*dowel1c_price*dowel1_pack,
                dowel2_price_grilyato: Math.ceil(dowel2/dowel2_pack)*dowel2c_price*dowel2_pack,
                sum_grilyato:summ_grilyato

                }
            )
                .done(function(data) {
                    //alert(data);
                })
                .fail(function() {
                    alert( "error" );
                });
        }
    </script>
@endsection
