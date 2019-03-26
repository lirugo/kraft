<div id="calc_rail">
    <div class="row">
        <div class="col-md-4">
            {!! Form::open(['onsubmit' => 'return formRail();']) !!}
            {!! Form::number('rail_width', null, ['class' => 'form-control', 'id' => 'rail_width', 'placeholder' => 'Введите максимальную ширину помещения', 'required','step' => '.01', 'min' => '1.00']) !!}
            {!! Form::number('rail_length', null, ['class' => 'form-control', 'id' => 'rail_length', 'placeholder' => 'Введите максимальную длину помещения', 'required','step' => '.01', 'min' => '1.00']) !!}
            {!! Form::select('rail_face',[
                'no'  => 'Нет',
                'stub'  => 'Заглушка',
                'angle'  => 'Уголок профилированный',
            ], null, ['class' => 'form-control', 'id' => 'rail_face', 'placeholder' => 'Выберите комплектацию потолка', 'required']) !!}
            {!! Form::select('rail_count',[
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                   ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_count', 'placeholder' => 'Выберите кол-во типов рейки', 'required']) !!}
            {!! Form::select('rail_percent',[
                0 => '0 %',
                1 => '1 %',
                2 => '2 %',
                3 => '3 %',
                4 => '4 %',
                5 => '5 %',
                   ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_percent', 'placeholder' => 'Выберите % на порезку', 'required']) !!}
            {!! Form::select('rail_color', [
                'дуб' => 'Дерево Золотий Дуб 018 (темне)',
                'антік' => 'Дерево Антік (стандартне)',
                'сонома' => 'Дерево Сонома (світле)',
               '7024' => 'RAL 7024 (графитовый)',
                '8017' => 'RAL 8017 (коричневый)',
               '9003' => 'RAL 9003 (белый)',
               '9005' => 'RAL 9005 (черный)',
               '9006' => 'RAL 9006 (серый)',
               '0001' => 'WOOD',
               ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_color', 'placeholder' => 'Выберите цвет профиля', 'required']) !!}
            <div id="rail_m_1">
                {!! Form::label('Тип рейки 1') !!}
                {!! Form::select('rail_m_w_1',[
                   35 => '35 мм',
                   88 => '88 мм',
                      ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_w_1', 'placeholder' => 'Выберите ширину рейки', 'required']) !!}
                {!! Form::select('rail_m_h_1',[
                   35 => '35 мм',
                   45 => '45 мм',
                   55 => '55 мм',
                   65 => '65 мм',
                   75 => '75 мм',
                   80 => '80 мм',
                   85 => '85 мм',
                   95 => '95 мм',
                   105 => '105 мм',
                      ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_h_1', 'placeholder' => 'Выберите высоту рейки', 'required']) !!}
                {!! Form::select('rail_m_s_1',[
                    50 => '50 мм',
                    100 => '100 мм',
                    150 => '150 мм',
                    200 => '200 мм',
                    250 => '250 мм',
                    300 => '300 мм',
                       ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_s_1', 'placeholder' => 'Выберите размер модуля', 'required']) !!}
            </div>
            <div id="rail_m_2">
                {!! Form::label('Тип рейки 2') !!}
                {!! Form::select('rail_m_w_2',[
                   35 => '35 мм',
                   88 => '88 мм',
                          ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_w_2', 'placeholder' => 'Выберите ширину рейки', 'required']) !!}
                {!! Form::select('rail_m_h_2',[
                    35 => '35 мм',
                   45 => '45 мм',
                   55 => '55 мм',
                   65 => '65 мм',
                   75 => '75 мм',
                   80 => '80 мм',
                   85 => '85 мм',
                   95 => '95 мм',
                   105 => '105 мм',
                          ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_h_2', 'placeholder' => 'Выберите высоту рейки', 'required']) !!}
                {!! Form::select('rail_m_s_2',[
                    50 => '50 мм',
                    100 => '100 мм',
                    150 => '150 мм',
                    200 => '200 мм',
                    250 => '250 мм',
                    300 => '300 мм',
                           ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_s_2', 'placeholder' => 'Выберите размер модуля', 'required']) !!}
            </div>
            <div id="rail_m_3">
                {!! Form::label('Тип рейки 3') !!}
                {!! Form::select('rail_m_w_3',[
                   35 => '35 мм',
                   88 => '88 мм',
                          ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_w_3', 'placeholder' => 'Выберите ширину рейки', 'required']) !!}
                {!! Form::select('rail_m_h_3',[
                    35 => '35 мм',
                   45 => '45 мм',
                   55 => '55 мм',
                   65 => '65 мм',
                   75 => '75 мм',
                   80 => '80 мм',
                   85 => '85 мм',
                   95 => '95 мм',
                   105 => '105 мм',
                          ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_h_3', 'placeholder' => 'Выберите высоту рейки', 'required']) !!}
                {!! Form::select('rail_m_s_3',[
                    50 => '50 мм',
                    100 => '100 мм',
                    150 => '150 мм',
                    200 => '200 мм',
                    250 => '250 мм',
                    300 => '300 мм',
                           ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_s_3', 'placeholder' => 'Выберите размер модуля', 'required']) !!}
            </div>
            <div id="rail_m_4">
                {!! Form::label('Тип рейки 4') !!}
                {!! Form::select('rail_m_w_4',[
                   35 => '35 мм',
                   88 => '88 мм',
                          ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_w_4', 'placeholder' => 'Выберите ширину рейки', 'required']) !!}
                {!! Form::select('rail_m_h_4',[
                     35 => '35 мм',
                   45 => '45 мм',
                   55 => '55 мм',
                   65 => '65 мм',
                   75 => '75 мм',
                   80 => '80 мм',
                   85 => '85 мм',
                   95 => '95 мм',
                   105 => '105 мм',
                          ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_h_4', 'placeholder' => 'Выберите высоту рейки', 'required']) !!}
                {!! Form::select('rail_m_s_4',[
                    50 => '50 мм',
                    100 => '100 мм',
                    150 => '150 мм',
                    200 => '200 мм',
                    250 => '250 мм',
                    300 => '300 мм',
                           ], null, ['class' => 'form-control m-b-10', 'id' => 'rail_m_s_4', 'placeholder' => 'Выберите размер модуля', 'required']) !!}
            </div>

            <div class="col-md-6 m-t-10">
                <img src="{{url('/img/calc/by_length.png')}}" class="img-responsive img-radio active">
                <button type="button" class="botton btn-block btn-primary btn-radio active" style="margin:0; width: 160px;">По длине</button>
                <input type="checkbox" id="rail_along" class="hidden" checked>
            </div>
            <div class="col-md-6 m-t-10 m-b-10">
                <img src="{{url('/img/calc/by_width.png')}}" class="img-responsive img-radio">
                <button type="button" class="botton btn-block btn-primary btn-radio" style="margin:0; width: 160px;">По ширине</button>
                <input type="checkbox" id="rail_across" class="hidden">
            </div>

            {!! Form::Submit('Сделать расчет', ['class' => 'btn-block btn btn-primary', 'style' => 'border-radius:0']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-4 text-center">
            <img src="/img/icon/calc/cube.png"/>
        </div>
    </div>

    <div class="row" id="calc_rail_table">
        <div class="col-md-12" id="table">
            <hr>
            <table class="table table-striped table-borderless text-center">
                <thead>
                <tr>
                    <th scope="col" style="color: #f78421;">Артикул</th>
                    <th scope="col" style="color: #f78421;">Наименование</th>
                    <th scope="col" style="color: #f78421;">Кол-во</th>
                    <th scope="col" style="color: #f78421;">Ед. изм.</th>
                    <th scope="col" style="color: #f78421;">Цена за шт. грн</th>
                    <th scope="col" style="color: #f78421;">Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <tr id="rail-connector">
                    <td id="table-connector-vendor"></td>
                    <td id="table-connector-description"></td>
                    <td id="table-connector-count"></td>
                    <td>шт</td>
                    <td id="table-connector-price"></td>
                    <td id="table-connector-price-all"></td>
                </tr>
                <tr id="rail-rail-1">
                    <td id="table-rail-1-vendor"></td>
                    <td id="table-rail-1-description"></td>
                    <td id="table-rail-1-count"></td>
                    <td>м. п.</td>
                    <td id="table-rail-1-price"></td>
                    <td id="table-rail-1-price-all"></td>
                </tr>
                <tr id="rail-rail-2">
                    <td id="table-rail-2-vendor"></td>
                    <td id="table-rail-2-description"></td>
                    <td id="table-rail-2-count"></td>
                    <td>м. п.</td>
                    <td id="table-rail-2-price"></td>
                    <td id="table-rail-2-price-all"></td>
                </tr>
                <tr id="rail-rail-3">
                    <td id="table-rail-3-vendor"></td>
                    <td id="table-rail-3-description"></td>
                    <td id="table-rail-3-count"></td>
                    <td>м. п.</td>
                    <td id="table-rail-3-price"></td>
                    <td id="table-rail-3-price-all"></td>
                </tr>
                <tr id="rail-rail-4">
                    <td id="table-rail-4-vendor"></td>
                    <td id="table-rail-4-description"></td>
                    <td id="table-rail-4-count"></td>
                    <td>м. п.</td>
                    <td id="table-rail-4-price"></td>
                    <td id="table-rail-4-price-all"></td>
                </tr>
                <tr id="rail-travers">
                    <td id="table-rail-travers-vendor"></td>
                    <td id="table-rail-travers-description"></td>
                    <td id="table-rail-travers-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-travers-price"></td>
                    <td id="table-rail-travers-price-all"></td>
                </tr>
                <tr id="rail-stub">
                    <td id="table-rail-stub-vendor"></td>
                    <td id="table-rail-stub-description"></td>
                    <td id="table-rail-stub-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-stub-price"></td>
                    <td id="table-rail-stub-price-all"></td>
                </tr>
                <tr id="rail-stub-2">
                    <td id="table-rail-stub-2-vendor"></td>
                    <td id="table-rail-stub-2-description"></td>
                    <td id="table-rail-stub-2-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-stub-2-price"></td>
                    <td id="table-rail-stub-2-price-all"></td>
                </tr>
                <tr id="rail-stub-3">
                    <td id="table-rail-stub-3-vendor"></td>
                    <td id="table-rail-stub-3-description"></td>
                    <td id="table-rail-stub-3-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-stub-3-price"></td>
                    <td id="table-rail-stub-3-price-all"></td>
                </tr>
                <tr id="rail-stub-4">
                    <td id="table-rail-stub-4-vendor"></td>
                    <td id="table-rail-stub-4-description"></td>
                    <td id="table-rail-stub-4-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-stub-4-price"></td>
                    <td id="table-rail-stub-4-price-all"></td>
                </tr>
                <tr id="rail-suspass">
                    <td id="table-rail-suspass-vendor"></td>
                    <td id="table-rail-suspass-description"></td>
                    <td id="table-rail-suspass-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-suspass-price"></td>
                    <td id="table-rail-suspass-price-all"></td>
                </tr>
                <tr id="rail-wireWithEar">
                    <td id="table-rail-wireWithEar-vendor"></td>
                    <td id="table-rail-wireWithEar-description"></td>
                    <td id="table-rail-wireWithEar-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-wireWithEar-price"></td>
                    <td id="table-rail-wireWithEar-price-all"></td>
                </tr>
                <tr id="rail-wireWithHook">
                    <td id="table-rail-wireWithHook-vendor"></td>
                    <td id="table-rail-wireWithHook-description"></td>
                    <td id="table-rail-wireWithHook-count"></td>
                    <td>шт.</td>
                    <td id="table-rail-wireWithHook-price"></td>
                    <td id="table-rail-wireWithHook-price-all"></td>
                </tr>
                <tr id="rail-suspdowel">
                    <td id="table-rail-suspdowel-vendor"></td>
                    <td id="table-rail-suspdowel-description"></td>
                    <td id="table-rail-suspdowel-count"></td>
                    <td>уп.</td>
                    <td id="table-rail-suspdowel-price"></td>
                    <td id="table-rail-suspdowel-price-all"></td>
                </tr>
                <tr id="rail-stubdowel">
                    <td id="table-rail-stubdowel-vendor"></td>
                    <td id="table-rail-stubdowel-description"></td>
                    <td id="table-rail-stubdowel-count"></td>
                    <td>уп.</td>
                    <td id="table-rail-stubdowel-price"></td>
                    <td id="table-rail-stubdowel-price-all"></td>
                </tr>
                <tr id="rail-light">
                    <td id="table-rail-light-vendor"></td>
                    <td id="table-rail-light-description"></td>
                    <td id="table-rail-light-count"></td>
                    <td></td>
                    <td id="table-rail-light-price"></td>
                    <td id="table-rail-light-price-all"></td>
                </tr>
                <tr>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: #eeeeee; color: #f78421;"><strong>ИТОГО</strong></td>
                    <td id="table-rail-total" style="background-color: #eeeeee; color: #f78421;"></td>
                </tr>
                </tbody>
            </table>
            <h3 class="text-center">Вывод данных для производства</h3>
            <table class="table table-striped table-borderless text-center">
                <thead>
                <tr>
                    <th scope="col" style="color: #f78421;">Артикул</th>
                    <th scope="col" style="color: #f78421;">Наименование</th>
                    <th scope="col" style="color: #f78421;">Длина 1 шт</th>
                    <th scope="col" style="color: #f78421;">м.п.</th>
                    <th scope="col" style="color: #f78421;">шт.</th>
                </tr>
                </thead>
                <tbody>
                <tr id="table2-rail-1">
                    <td id="table2-rail-1-vendor"></td>
                    <td id="table2-rail-1-description"></td>
                    <td id="table2-rail-1-length"></td>
                    <td id="table2-rail-1-mp"></td>
                    <td id="table2-rail-1-count"></td>
                </tr>
                <tr id="table2-rail-2">
                    <td id="table2-rail-2-vendor"></td>
                    <td id="table2-rail-2-description"></td>
                    <td id="table2-rail-2-length"></td>
                    <td id="table2-rail-2-mp"></td>
                    <td id="table2-rail-2-count"></td>
                </tr>
                <tr id="table2-rail-3">
                    <td id="table2-rail-3-vendor"></td>
                    <td id="table2-rail-3-description"></td>
                    <td id="table2-rail-3-length"></td>
                    <td id="table2-rail-3-mp"></td>
                    <td id="table2-rail-3-count"></td>
                </tr>
                <tr id="table2-rail-4">
                    <td id="table2-rail-4-vendor"></td>
                    <td id="table2-rail-4-description"></td>
                    <td id="table2-rail-4-length"></td>
                    <td id="table2-rail-4-mp"></td>
                    <td id="table2-rail-4-count"></td>
                </tr>
                </tbody>
            </table>
            {!! Form::button('Добавить в спецификацию', ['onclick' => 'rail_add()', 'class' => 'botton botton-primary pull-right', 'style' => 'margin:0;']) !!}
            <br>
            <br>
            <br>
            <hr>
        </div>
    </div>

</div>