@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="/calc/{{$data['object']->id}}">Калькулятор</a>
                <a class="link-bread" href="#">Рейка</a>
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
                {!! Form::label('label', "Ширина рейки:") !!}
                {{ Form::radio('thickness', '35', false,  ['id' => '35mm']) }} 35 мм
                {{ Form::radio('thickness', '88', false,  ['id' => '88mm']) }} 88 мм
                <br>
                <br>
                {!! Form::label('label', "Размер модуля, мм:") !!}
                <select id="sizecells" name="sizecells" class="form-control" required>
                    <option value="" selected disabled>Выберите размер модуля</option>
                    <option id="50mm" value="50">50 мм</option>
                    <option id="100mm" value="100">100 мм</option>
                    <option id="150mm" value="150">150 мм</option>
                    <option id="200mm" value="200">200 мм</option>
                    <option id="250mm" value="250">250 мм</option>
                    <option id="300mm" value="300">300 мм</option>
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
                    <option value="9003" id="ral9003">RAL 9003 (белый)</option>
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
                        <th scope="col">Кол-во реек</th>
                        <th scope="col">Стрингер 4000мм</th>
                        <th scope="col">Подвес</th>
                        <th scope="col">Итого</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Кол-во</th>
                        <td id="table-count"></td>
                        <td id="table-stringer"></td>
                        <td id="table-podves"></td>
                    </tr>
                    <tr>
                        <th scope="row">Цена за шт</th>
                        <td id="table-price-count"></td>
                        <td id="table-price-stringer"></td>
                        <td id="table-price-podves"></td>
                    </tr>
                    <tr>
                        <th scope="row">Кол-во упаковок</th>
                        <td id="table-pack-count"></td>
                        <td id="table-pack-stringer"></td>
                        <td id="table-pack-podves"></td>
                    </tr>
                    <tr>
                        <th scope="row">Стоимость</th>
                        <td id="table-summ-count"></td>
                        <td id="table-summ-stringer"></td>
                        <td id="table-summ-podves"></td>
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
            if(!document.getElementById('35mm').checked && !document.getElementById('88mm').checked)
            {
                document.getElementById("35mm").focus();
                alert('Выберите размер рейки.');
                return;
            }
            if(!document.getElementById('sizecells').validity.valid)
            {
                document.getElementById("sizecells").focus();
                alert('Model size is empty');
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
            var sizecells = document.getElementById("sizecells").value;
            //EndInitialData

            //DataProcessing
            var count = s * (countc/sizecells);
            count = count + (count/100)*difficult;
            var stringer = s * stringerc;
            stringer = stringer + (stringer/100)*difficult;
            var podves = 0;
            //EndDataProcessing

            // SetDataInTable
            // CountTable
            document.getElementById("table-count").innerHTML = Math.ceil(count)+" ("+Math.ceil(count*100)/100+"), шт";
            document.getElementById("table-stringer").innerHTML = Math.ceil(stringer)+" ("+Math.ceil(stringer*100)/100+"), шт";
            document.getElementById("table-podves").innerHTML = Math.ceil(podves)+" ("+Math.ceil(podves*100)/100+"), шт";
            // PriceTable
            var price;
            if(document.getElementById('colors').value === "other") price = 1.5;
            else price = 1;
            var count_price = countc_price * price;
            var stringer_price = stringerc_price * price;
            var susp_price = suspc_price * price;
            document.getElementById("table-price-count").innerHTML = count_price+" грн";
            document.getElementById("table-price-stringer").innerHTML = stringer_price+" грн";
            document.getElementById("table-price-podves").innerHTML = susp_price+" грн";
            // PackTable
            document.getElementById("table-pack-count").innerHTML = Math.ceil(count/countc_pack)+" уп";
            document.getElementById("table-pack-stringer").innerHTML = Math.ceil(stringer/stringerc_pack)+" уп";
            document.getElementById("table-pack-podves").innerHTML = Math.ceil(podves/csuspc_pack)+" уп";
            // SummTable
            document.getElementById("table-summ-count").innerHTML = Math.ceil(count/countc_pack)*count_price*countc_pack+" грн";
            document.getElementById("table-summ-stringer").innerHTML = Math.ceil(stringer/stringerc_pack)*stringer_price*stringerc_pack+" грн";
            document.getElementById("table-summ-podves").innerHTML = Math.ceil(podves/csuspc_pack)*susp_price*csuspc_pack+" грн";
            document.getElementById("table-summ").innerHTML =  Math.ceil(count/countc_pack)*count_price*countc_pack+
                Math.ceil(stringer/stringerc_pack)*stringer_price*stringerc_pack+
                Math.ceil(podves/csuspc_pack)*susp_price*csuspc_pack+" грн";
            //ShowTable
            $("#table").show();
            // EndSetDataInTable

            //Send Ajax Post to Controller save in database
            // make an ajax request to a PHP file
            // on our site that will update the database
            // pass in our lat/lng as parameters
            $.post('/calc/cube/history/'+id, {
                _token: $('meta[name=csrf-token]').attr('content'),
                id: id,
                type: "Cube",
                difficult: difficult,
                count: count,
                stringer: stringer,
                podves: podves,

                //PriceByOne
                count_price: count_price,
                stringer_price: stringer_price,
                susp_price: susp_price,

                //CountPackage
                countc_pack:Math.ceil(count/countc_pack),
                stringerc_pack:Math.ceil(stringer/stringerc_pack),
                csuspc_pack:Math.ceil(podves/csuspc_pack),

                //CommonPrice
                countc_price:Math.ceil(count/countc_pack)*count_price*countc_pack,
                stringerc_price:Math.ceil(stringer/stringerc_pack)*stringer_price*stringerc_pack,
                suspc_price:Math.ceil(podves/csuspc_pack)*susp_price*csuspc_pack,
                sum:Math.ceil(count/countc_pack)*count_price*countc_pack+
                    Math.ceil(stringer/stringerc_pack)*stringer_price*stringerc_pack+
                    Math.ceil(podves/csuspc_pack)*susp_price*csuspc_pack
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
