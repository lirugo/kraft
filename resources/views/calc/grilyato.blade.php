
@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/calc/">Калкьулятор</a>
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
                {{ Form::radio('difficult', '3', false,  ['id' => 'easy']) }} Простая
                {{ Form::radio('difficult', '7', false,  ['id' => 'hard']) }} Сложная
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
                        <th scope="col">Соединитель</th>
                        <th scope="col">Уголок L 3000 мм</th>
                        <th scope="col">Подвес в сборе шт</th>
                        <th scope="col">Дюбель для подвесов</th>
                        <th scope="col">Дюбель для L-прифиля</th>
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
                        <td id="table-susp"></td>
                        <td id="table-angles"></td>
                        <td id="table-suspass"></td>
                        <td id="table-dowel1"></td>
                        <td id="table-dowel2"></td>
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
            if(!document.getElementById('model').validity.valid)
            {
                document.getElementById("model").focus();
                alert('Model is empty');
                return;
            }
            if(document.getElementById('color').value === "default")
            {
                document.getElementById("color").focus();
                alert('Color is empty');
                return;
            }
            if(document.getElementById('color').value === "other" && document.getElementById('othercolorinput').value === "")
            {
                document.getElementById("othercolorinput").focus();
                alert('Введите 4 цифры цвета RAL');
                return;
            }
            if(!document.getElementById('sizecells').validity.valid)
            {
                document.getElementById("sizecells").focus();
                alert('Select size cells.');
                return;
            }
            //EndValidate

            //InitialData
            var s = document.getElementById("areaceiling").value;
            var p = document.getElementById("pceiling").value;
            var difficult = $('input[name=difficult]:checked').val();
            //EndInitialData

            //DataProcessing
            var k2400;
            if(document.getElementById("model").value === 'classical' || document.getElementById("model").value === 'pyramidal')
            {
                if(document.getElementById("sizecells").value <= 100)
                    k2400 = 0.696;
                else
                    k2400 = 0.348;
            }
            var tp2400 = k2400*s+((k2400*s)/100)*difficult;
            var sizecells = document.getElementById("sizecells").value;
            var tp1200;
            var tp600, tp600f, tp600m;
            if(document.getElementById("sizecells").value <= 100)
                tp1200 = 0;
            else
                tp1200 = 1.392*s+((1.392*s)/100)*difficult;

            if(document.getElementById("sizecells").value <= 100)
                tp600 = 2.783*s+((2.783*s)/100)*difficult;
            else
                tp600 = 1.392*s+((1.392*s)/100)*difficult;

            tp600f = (600/sizecells-1)*2.78*p+(((600/sizecells-1)*2.78*p)/100)*difficult;
            tp600m = tp600f;

            var susp = 2400*0.9;
            var angles = p/3+((p/100)*difficult)*2;
            var suspass = susp*3;
            var dowel1,dowel2;

            dowel1 = suspass/100;
            dowel2 = p*2;

            //EndDataProcessing

            //SetDataInTable
            //CountTable
            document.getElementById("table-tp2400").innerHTML = Math.ceil(tp2400)+" ("+Math.ceil(tp2400*100)/100+"), шт";
            document.getElementById("table-tp1200").innerHTML = Math.ceil(tp1200)+" ("+Math.ceil(tp1200*100)/100+"), шт";
            document.getElementById("table-tp600").innerHTML = Math.ceil(tp600)+" ("+Math.ceil(tp600*100)/100+"), шт";
            document.getElementById("table-tp600f").innerHTML = Math.ceil(tp600f)+" ("+Math.ceil(tp600f*100)/100+"), шт";
            document.getElementById("table-tp600m").innerHTML = Math.ceil(tp600m)+" ("+Math.ceil(tp600m*100)/100+"), шт";
            document.getElementById("table-susp").innerHTML = Math.ceil(susp)+" ("+Math.ceil(susp*100)/100+"), шт";
            document.getElementById("table-angles").innerHTML = Math.ceil(angles)+" ("+Math.ceil(angles*100)/100+"), шт";
            document.getElementById("table-suspass").innerHTML = Math.ceil(suspass)+" ("+Math.ceil(suspass*100)/100+"), шт";
            document.getElementById("table-dowel1").innerHTML = Math.ceil(dowel1)+" ("+Math.ceil(dowel1*100)/100+"), шт";
            document.getElementById("table-dowel2").innerHTML = Math.ceil(dowel2)+" ("+Math.ceil(dowel2*100)/100+"), шт";
            //PriceTable
            // var price;
            // if(document.getElementById('colors').value === "other") price = 45;
            // else price = 30;
            // document.getElementById("table-price-tp3600").innerHTML = price+" грн";
            // document.getElementById("table-price-tp1200").innerHTML = price+" грн";
            // document.getElementById("table-price-tp600").innerHTML = price+" грн";
            // document.getElementById("table-price-angles").innerHTML = price+" грн";
            // document.getElementById("table-price-susp").innerHTML = price+" грн";
            // //PackTable
            // document.getElementById("table-pack-tp3600").innerHTML = Math.ceil(tp3600/25)+" уп";
            // document.getElementById("table-pack-tp1200").innerHTML = Math.ceil(tp1200/50)+" уп";
            // document.getElementById("table-pack-tp600").innerHTML = Math.ceil(tp600/75)+" уп";
            // document.getElementById("table-pack-angles").innerHTML = Math.ceil(angles/50)+" уп";
            // document.getElementById("table-pack-susp").innerHTML = Math.ceil(susp/100)+" уп";
            // //SummTable
            // document.getElementById("table-summ-tp3600").innerHTML = Math.ceil(tp3600/25)*price*25+" грн";
            // document.getElementById("table-summ-tp1200").innerHTML = Math.ceil(tp1200/50)*price*50+" грн";
            // document.getElementById("table-summ-tp600").innerHTML = Math.ceil(tp600/75)*price*75+" грн";
            // document.getElementById("table-summ-angles").innerHTML = Math.ceil(angles/50)*price*50+" грн";
            // document.getElementById("table-summ-susp").innerHTML = Math.ceil(susp/100)*price*100+" грн";
            // document.getElementById("table-summ").innerHTML = Math.ceil(tp3600/25)*price*25+Math.ceil(tp1200/50)*price*50+Math.ceil(tp600/75)*price*75+Math.ceil(angles/50)*price*50+Math.ceil(susp/100)*price*100+" грн";
            // //ShowTable
            $("#table").show();
            //EndSetDataInTable

        }
    </script>
@endsection
