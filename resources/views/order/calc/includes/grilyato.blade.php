{{--Grilyato--}}
<div id="calc_grilyato">
    <div class="row">
        <div class="col-md-4">
            {!! Form::open(['onsubmit' => 'return formGrilyato();']) !!}
            {!! Form::number('grilyato_areaceiling', null, ['class' => 'form-control', 'id' => 'grilyato_areaceiling', 'required', 'placeholder' => 'Введите площадь потолка','step' => '1', 'min' => '1']) !!}
            {!! Form::number('grilyato_pceiling', null, ['class' => 'form-control', 'id' => 'grilyato_pceiling', 'required', 'placeholder' => 'Введите периметр потолка','step' => '1', 'min' => '1']) !!}
            {!! Form::select('grilyato_difficult', [
                $data['constants']->easy =>'Простая',
                $data['constants']->hard =>'Сложная'
                ], null, ['class' => 'form-control', 'id' => 'grilyato_difficult', 'placeholder' => 'Выберите конфигурацию помещения', 'required']) !!}
            {!! Form::select('grilyato_model', [
               'classical' => 'Классический',
               'pyramidal' => 'Пирамидальный',
               'glk' => 'GLK модульный'
                ], null, ['class' => 'form-control', 'id' => 'grilyato_model', 'placeholder' => 'Выберите модель профиля', 'required']) !!}
            {!! Form::select('grilyato_color', [
                'other' => 'Другой',
                '9003' => 'RAL 9003 (белый)',
                '9005' => 'RAL 9005 (черный)',
                '9006' => 'RAL 9006 (серый)'
                ], null, ['class' => 'form-control', 'id' => 'grilyato_color', 'placeholder' => 'Выберите модель профиля', 'required', 'id' => 'grilyato_color']) !!}
            {!! Form::number('grilyato_othercolor',null, ['class' => 'form-control', 'id' => 'grilyato_othercolor', 'required', 'placeholder' => 'Введите цвет RAL - 4 цифры','step' => '1', 'min' => '1000', 'max' => '9999']) !!}
            {!! Form::select('grilyato_sizecells', [
                '50' => '50х50 мм',
                '60' => '60х60 мм',
                '75' => '75х75 мм',
                '86' => '86х86 мм',
                '100' => '100х100 мм',
                '120' => '120х120 мм',
                '150' => '150х150 мм',
                '200' => '200х200 мм',
                ], null, ['class' => 'form-control', 'id' => 'grilyato_sizecells', 'placeholder' => 'Выберите размер ячейки', 'required']) !!}
            {!! Form::Submit('Сделать расчет', ['class' => 'btn-block btn btn-primary m-t-10', 'style' => 'border-radius:0']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-4 text-center">
            <img src="/img/icon/calc/grilyato.png"/>
        </div>
        <div class="col-md-4 text-center">
            <h4>Подксказки для расчетов</h4>
        </div>
    </div>

    <div class="row" id="calc_grilyato_table">
        <div class="col-md-12" id="table">
            <hr>
            <table class="table table-striped table-borderless text-center">
                <thead>
                <tr>
                    <th scope="col" style="color: #f78421;">Артикул</th>
                    <th scope="col" style="color: #f78421;">Модель профиля</th>
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
                    <td id="table-grilyato-3600-vendor"></td>
                    <td id="table-grilyato-3600-model"></td>
                    <td id="table-grilyato-3600-desciption"></td>
                    <td id="table-grilyato-3600-width"></td>
                    <td id="table-grilyato-3600-length"></td>
                    <td id="table-grilyato-3600-color"></td>
                    <td id="table-grilyato-3600-count"></td>
                    <td id="table-grilyato-3600-price"></td>
                    <td id="table-grilyato-3600-pack"></td>
                    <td id="table-grilyato-3600-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-2400-vendor"></td>
                    <td id="table-grilyato-2400-model"></td>
                    <td id="table-grilyato-2400-desciption"></td>
                    <td id="table-grilyato-2400-width"></td>
                    <td id="table-grilyato-2400-length"></td>
                    <td id="table-grilyato-2400-color"></td>
                    <td id="table-grilyato-2400-count"></td>
                    <td id="table-grilyato-2400-price"></td>
                    <td id="table-grilyato-2400-pack"></td>
                    <td id="table-grilyato-2400-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-1200-vendor"></td>
                    <td id="table-grilyato-1200-model"></td>
                    <td id="table-grilyato-1200-desciption"></td>
                    <td id="table-grilyato-1200-width"></td>
                    <td id="table-grilyato-1200-length"></td>
                    <td id="table-grilyato-1200-color"></td>
                    <td id="table-grilyato-1200-count"></td>
                    <td id="table-grilyato-1200-price"></td>
                    <td id="table-grilyato-1200-pack"></td>
                    <td id="table-grilyato-1200-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-600-vendor"></td>
                    <td id="table-grilyato-600-model"></td>
                    <td id="table-grilyato-600-desciption"></td>
                    <td id="table-grilyato-600-width"></td>
                    <td id="table-grilyato-600-length"></td>
                    <td id="table-grilyato-600-color"></td>
                    <td id="table-grilyato-600-count"></td>
                    <td id="table-grilyato-600-price"></td>
                    <td id="table-grilyato-600-pack"></td>
                    <td id="table-grilyato-600-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-600mf-vendor"></td>
                    <td id="table-grilyato-600mf-model"></td>
                    <td id="table-grilyato-600mf-desciption"></td>
                    <td id="table-grilyato-600mf-width"></td>
                    <td id="table-grilyato-600mf-length"></td>
                    <td id="table-grilyato-600mf-color"></td>
                    <td id="table-grilyato-600mf-count"></td>
                    <td id="table-grilyato-600mf-price"></td>
                    <td id="table-grilyato-600mf-pack"></td>
                    <td id="table-grilyato-600mf-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-susp-vendor"></td>
                    <td id="table-grilyato-susp-model"></td>
                    <td id="table-grilyato-susp-desciption"></td>
                    <td id="table-grilyato-susp-width"></td>
                    <td id="table-grilyato-susp-length"></td>
                    <td id="table-grilyato-susp-color"></td>
                    <td id="table-grilyato-susp-count"></td>
                    <td id="table-grilyato-susp-price"></td>
                    <td id="table-grilyato-susp-pack"></td>
                    <td id="table-grilyato-susp-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-angle-vendor"></td>
                    <td id="table-grilyato-angle-model"></td>
                    <td id="table-grilyato-angle-desciption"></td>
                    <td id="table-grilyato-angle-width"></td>
                    <td id="table-grilyato-angle-length"></td>
                    <td id="table-grilyato-angle-color"></td>
                    <td id="table-grilyato-angle-count"></td>
                    <td id="table-grilyato-angle-price"></td>
                    <td id="table-grilyato-angle-pack"></td>
                    <td id="table-grilyato-angle-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-suspass-vendor"></td>
                    <td id="table-grilyato-suspass-model"></td>
                    <td id="table-grilyato-suspass-desciption"></td>
                    <td id="table-grilyato-suspass-width"></td>
                    <td id="table-grilyato-suspass-length"></td>
                    <td id="table-grilyato-suspass-color"></td>
                    <td id="table-grilyato-suspass-count"></td>
                    <td id="table-grilyato-suspass-price"></td>
                    <td id="table-grilyato-suspass-pack"></td>
                    <td id="table-grilyato-suspass-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-dowel1-vendor"></td>
                    <td id="table-grilyato-dowel1-model"></td>
                    <td id="table-grilyato-dowel1-desciption"></td>
                    <td id="table-grilyato-dowel1-width"></td>
                    <td id="table-grilyato-dowel1-length"></td>
                    <td id="table-grilyato-dowel1-color"></td>
                    <td id="table-grilyato-dowel1-count"></td>
                    <td id="table-grilyato-dowel1-price"></td>
                    <td id="table-grilyato-dowel1-pack"></td>
                    <td id="table-grilyato-dowel1-price-all"></td>
                </tr>
                <tr>
                    <td id="table-grilyato-dowel2-vendor"></td>
                    <td id="table-grilyato-dowel2-model"></td>
                    <td id="table-grilyato-dowel2-desciption"></td>
                    <td id="table-grilyato-dowel2-width"></td>
                    <td id="table-grilyato-dowel2-length"></td>
                    <td id="table-grilyato-dowel2-color"></td>
                    <td id="table-grilyato-dowel2-count"></td>
                    <td id="table-grilyato-dowel2-price"></td>
                    <td id="table-grilyato-dowel2-pack"></td>
                    <td id="table-grilyato-dowel2-price-all"></td>
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
                    <td style="background-color: #eeeeee; color: #f78421;"><strong>ИТОГО</strong></td>
                    <td id="table-grilyato-total" style="background-color: #eeeeee; color: #f78421;"></td>
                </tr>              </tbody>
            </table>
            {!! Form::button('Добавить в спецификацию', ['onclick' => 'grilyato_add()', 'class' => 'botton botton-primary pull-right', 'style' => 'margin:0;']) !!}
            <br>
            <br>
            <br>
            <hr>
        </div>
    </div>

</div>