{{--TProfile--}}
<div id="calc_t_profile">
    <div class="row">
        <div class="col-md-4">
            {!! Form::open(['onsubmit' => 'return formTProfile();']) !!}
                {!! Form::number('areaceiling', null, ['class' => 'form-control', 'id' => 'areaceiling', 'placeholder' => 'Введите площадь помещения', 'required','step' => '1', 'min' => '1']) !!}
                {!! Form::number('pceiling', null, ['class' => 'form-control', 'id' => 'pceiling', 'placeholder' => 'Введите периметр помещения', 'required','step' => '1', 'min' => '1']) !!}
                {!! Form::select('model',[
                   'NOVA' => 'NOVA',
                   'FORTIS' => 'FORTIS',
                   ], null, ['class' => 'form-control', 'placeholder' => 'Выберите модель профиля', 'id' => 'model', 'required']) !!}
                {!! Form::select('difficult',[
                $data['constants']->easy => 'Простая',
                $data['constants']->hard => 'Сложная'
                ], null, ['class' => 'form-control', 'id' => 'difficult', 'placeholder' => 'Выберите конфигурацию помещения', 'required']) !!}
               {!! Form::select('thickness',[
                    '15' => '15 мм',
                    '24' => '24 мм'
                    ], null, ['class' => 'form-control', 'id' => 'thickness', 'placeholder' => 'Выберите толщину профиля', 'required']) !!}
                {!! Form::select('wall_profile',[
                'L' => 'L',
                'W' => 'W'
                ], null, ['class' => 'form-control', 'id' => 'wall_profile', 'placeholder' => 'Выберите тип пристенного профиля', 'required']) !!}
                {!! Form::select('wire_with_ear',[
                '250' => '250 мм',
                '500' => '500 мм',
                '750' => '750 мм',
                '1000' => '1000 мм',
                '1500' => '1500 мм',
                '2000' => '2000 мм'
                ], null, ['class' => 'form-control', 'id' => 'wire_with_ear', 'placeholder' => 'Выберите длину проволки с ушком', 'required']) !!}
                {!! Form::select('wire_with_hook',[
                '250' => '250 мм',
                '500' => '500 мм',
                '1000' => '1000 мм',
                '1500' => '1500 мм',
                '2000' => '2000 мм'
                ], null, ['class' => 'form-control', 'id' => 'wire_with_hook', 'placeholder' => 'Выберите длину проволки с крючком', 'required']) !!}
                {!! Form::select('colors',['9003' => '9003'], '9003', ['class' => 'form-control', 'placeholder' => 'Выберите цвет профиля', 'id' => 'colors', 'required']) !!}
                <div class="checkbox">
                    <label><input type="checkbox" id="light">Добавить освещение</label>
                </div>
                {!! Form::select('h',[
                   '1' => 'Менее 3.5м',
                   '2' => 'Более 3.5м',
                ], null, ['class' => 'form-control m-b-10', 'id' => 'h', 'placeholder' => 'Укажите высоту потолка', 'required']) !!}
                {!! Form::Submit('Сделать расчет', ['class' => 'btn-block btn btn-primary m-t-10', 'style' => 'border-radius:0']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-4 text-center">
            <img src="/img/icon/calc/tprofile.png"/>
        </div>
        <div class="col-md-4 text-center">
            <h4>Подксказки для расчетов</h4>
        </div>
    </div>

    <div class="row" id="calc_t_profile_table">
        <div class="col-md-12" id="table">
            <hr>
            <table class="table table-striped table-borderless text-center">
                <thead>
                <tr>
                    <th scope="col" style="color: #f78421;">Артикул</th>
                    <th scope="col" style="color: #f78421;">Наименование</th>
                    <th scope="col" style="color: #f78421;">Кол-во шт.</th>
                    <th scope="col" style="color: #f78421;">Цена за шт. грн</th>
                    <th scope="col" style="color: #f78421;">Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td id="table-3600-vendor"></td>
                    <td id="table-3600-description"></td>
                    <td id="table-3600-count"></td>
                    <td id="table-3600-price"></td>
                    <td id="table-3600-price-all"></td>
                </tr>
                <tr>
                    <td id="table-1200-vendor"></td>
                    <td id="table-1200-description"></td>
                    <td id="table-1200-count"></td>
                    <td id="table-1200-price"></td>
                    <td id="table-1200-price-all"></td>
                </tr>
                <tr>
                    <td id="table-600-vendor"></td>
                    <td id="table-600-description"></td>
                    <td id="table-600-count"></td>
                    <td id="table-600-price"></td>
                    <td id="table-600-price-all"></td>
                </tr>
                <tr>
                    <td id="table-wall-profile-vendor"></td>
                    <td id="table-wall-profile-description"></td>
                    <td id="table-wall-profile-count"></td>
                    <td id="table-wall-profile-price"></td>
                    <td id="table-wall-profile-price-all"></td>
                </tr>
                <tr>
                    <td id="table-wireWithEar-vendor"></td>
                    <td id="table-wireWithEar-description"></td>
                    <td id="table-wireWithEar-count"></td>
                    <td id="table-wireWithEar-price"></td>
                    <td id="table-wireWithEar-price-all"></td>
                </tr>
                <tr>
                    <td id="table-wireWithHook-vendor"></td>
                    <td id="table-wireWithHook-description"></td>
                    <td id="table-wireWithHook-count"></td>
                    <td id="table-wireWithHook-price"></td>
                    <td id="table-wireWithHook-price-all"></td>
                </tr>
                <tr>
                    <td id="table-springSusp-vendor"></td>
                    <td id="table-springSusp-description"></td>
                    <td id="table-springSusp-count"></td>
                    <td id="table-springSusp-price"></td>
                    <td id="table-springSusp-price-all"></td>
                </tr>
                <tr id="tprofile-light">
                    <td id="table-light-vendor"></td>
                    <td id="table-light-description"></td>
                    <td id="table-light-count"></td>
                    <td id="table-light-price"></td>
                    <td id="table-light-price-all"></td>
                </tr>
                {{--<tr>--}}
                    {{--<td id="table-susp-vendor"></td>--}}
                    {{--<td id="table-susp-name"></td>--}}
                    {{--<td id="table-susp-count"></td>--}}
                    {{--<td id="table-susp-price"></td>--}}
                    {{--<td id="table-susp-price-all"></td>--}}
                {{--</tr>--}}
                {{--BottomRightSide--}}
                <tr>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: #eeeeee; color: #f78421;"><strong>ИТОГО</strong></td>
                    <td id="table-total" style="background-color: #eeeeee; color: #f78421;"></td>
                </tr>
                </tbody>
            </table>
            {!! Form::button('Добавить в спецификацию', ['onclick' => 'tprofile_add()', 'class' => 'botton botton-primary pull-right', 'style' => 'margin:0;']) !!}
            <br>
            <br>
            <br>
            <hr>
        </div>
    </div>

</div>