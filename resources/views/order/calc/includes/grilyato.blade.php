{{--Grilyato--}}
<div id="calc_grilyato">
    <div class="row">
        <div class="col-md-4">
            {!! Form::open(['onsubmit' => 'return formGrilyato();']) !!}
            {!! Form::number('grilyato_areaceiling', null, ['class' => 'form-control', 'id' => 'grilyato_areaceiling', 'required', 'placeholder' => trans('app.Enter the ceiling area'),'step' => '1', 'min' => '1']) !!}
            {!! Form::number('grilyato_pceiling', null, ['class' => 'form-control', 'id' => 'grilyato_pceiling', 'required', 'placeholder' => trans('app.Enter the perimeter of the ceiling'),'step' => '1', 'min' => '1']) !!}
            {!! Form::select('grilyato_difficult', [
                $data['constants']->easy =>'Простая',
                $data['constants']->hard =>'Сложная'
                ], null, ['class' => 'form-control', 'id' => 'grilyato_difficult', 'placeholder' =>  trans('app.Choose a ceiling kit'), 'required']) !!}
            {!! Form::select('grilyato_model', [
               'classical' => 'Классический',
               'pyramidal' => 'Пирамидальный',
               'Glk-15' => 'GLK модульный'
                ], null, ['class' => 'form-control', 'id' => 'grilyato_model', 'placeholder' => trans('app.Select a profile model'), 'required']) !!}
            {!! Form::select('grilyato_color', [
                'other' => 'Другой',
                'антік' => 'Дерево Антік (стандартне)',
                'сонома' => 'Дерево Сонома (світле)',
                '7024' => 'RAL 7024 (графитовый)',
                '8017' => 'RAL 8017 (коричневый)',
                '9003' => 'RAL 9003 (белый)',
                '9005' => 'RAL 9005 (черный)',
                '9006' => 'RAL 9006 (серый)'
                ], null, ['class' => 'form-control', 'id' => 'grilyato_color', 'placeholder' => trans('app.Select a color'), 'required']) !!}
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
                ], null, ['class' => 'form-control', 'id' => 'grilyato_sizecells', 'placeholder' => trans('app.Select a size cells'), 'required']) !!}
            {!! Form::select('grilyato_wire_with_ear',[
               '250' => '250 мм',
               '500' => '500 мм',
               '750' => '750 мм',
               '1000' => '1000 мм',
               '1500' => '1500 мм',
               '2000' => '2000 мм',
               '3000' => '3000 мм'
               ], null, ['class' => 'form-control', 'id' => 'grilyato_wire_with_ear', 'placeholder' => trans('app.Select susp length'), 'required']) !!}
            {!! Form::select('grilyato_wire_with_hook',[
               '125' => '125 мм',
               '250' => '250 мм',
               '500' => '500 мм',
               '1000' => '1000 мм',
               '1500' => '1500 мм',
               '2000' => '2000 мм'
               ], null, ['class' => 'form-control m-b-10', 'id' => 'grilyato_wire_with_hook', 'placeholder' => trans('app.Select the length of the wire with a hook'), 'required']) !!}
            <div class="checkbox">
                <label><input type="checkbox" id="grilyato_light">{{trans('app.Add light')}}</label>
            </div>
            {!! Form::select('grilyato_h',[
               '1' => trans('app.less').' 3.5м',
               '2' => trans('app.more').' 3.5м',
               ], null, ['class' => 'form-control m-b-10', 'id' => 'grilyato_h', 'placeholder' => trans('app.Indicate the height of the ceiling'), 'required']) !!}
            {!! Form::Submit(trans('app.Make a calculation'), ['class' => 'btn-block btn btn-primary m-t-10', 'style' => 'border-radius:0']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-4 text-center">
            <img src="/img/icon/calc/grilyato.png"/>
        </div>
    </div>

    <div class="row" id="calc_grilyato_table">
        <div class="col-md-12" id="table">
            <hr>
            <table class="table table-striped table-borderless text-center" id="grilyato-table">
                <thead>
                <tr>
                    <th scope="col" style="color: #f78421;">{{trans('app.Vendor Code')}}</th>
                    <th scope="col" style="color: #f78421;">Код товара</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Name')}}</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Count')}}</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Price for')}} шт. грн</th>
                    <th scope="col" style="color: #f78421;">{{trans('app.Cost')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr id="grilyato-3600">
                    <td id="table-grilyato-3600-vendor"></td>
                    <td id="table-grilyato-3600-product_code"></td>
                    <td id="table-grilyato-3600-description"></td>
                    <td id="table-grilyato-3600-count"></td>
                    <td id="table-grilyato-3600-price"></td>
                    <td id="table-grilyato-3600-price-all"></td>
                </tr>
                <tr id="grilyato-2400">
                    <td id="table-grilyato-2400-vendor"></td>
                    <td id="table-grilyato-2400-product_code"></td>
                    <td id="table-grilyato-2400-description"></td>
                    <td id="table-grilyato-2400-count"></td>
                    <td id="table-grilyato-2400-price"></td>
                    <td id="table-grilyato-2400-price-all"></td>
                </tr>
                <tr id="grilyato-1200">
                    <td id="table-grilyato-1200-vendor"></td>
                    <td id="table-grilyato-1200-product_code"></td>
                    <td id="table-grilyato-1200-description"></td>
                    <td id="table-grilyato-1200-count"></td>
                    <td id="table-grilyato-1200-price"></td>
                    <td id="table-grilyato-1200-price-all"></td>
                </tr>
                <tr id="grilyato-600-1">
                    <td id="table-grilyato-600-1-vendor"></td>
                    <td id="table-grilyato-600-1-product_code"></td>
                    <td id="table-grilyato-600-1-description"></td>
                    <td id="table-grilyato-600-1-count"></td>
                    <td id="table-grilyato-600-1-price"></td>
                    <td id="table-grilyato-600-1-price-all"></td>
                </tr>
                <tr id="grilyato-600">
                    <td id="table-grilyato-600-vendor"></td>
                    <td id="table-grilyato-600-product_code"></td>
                    <td id="table-grilyato-600-description"></td>
                    <td id="table-grilyato-600-count"></td>
                    <td id="table-grilyato-600-price"></td>
                    <td id="table-grilyato-600-price-all"></td>
                </tr>
                <tr id="grilyato-600m">
                    <td id="table-grilyato-600m-vendor"></td>
                    <td id="table-grilyato-600m-product_code"></td>
                    <td id="table-grilyato-600m-description"></td>
                    <td id="table-grilyato-600m-count"></td>
                    <td id="table-grilyato-600m-price"></td>
                    <td id="table-grilyato-600m-price-all"></td>
                </tr>
                <tr id="grilyato-600f">
                    <td id="table-grilyato-600f-vendor"></td>
                    <td id="table-grilyato-600f-product_code"></td>
                    <td id="table-grilyato-600f-description"></td>
                    <td id="table-grilyato-600f-count"></td>
                    <td id="table-grilyato-600f-price"></td>
                    <td id="table-grilyato-600f-price-all"></td>
                </tr>
                <tr id="grilyato-susp">
                    <td id="table-grilyato-susp-vendor"></td>
                    <td id="table-grilyato-susp-product_code"></td>
                    <td id="table-grilyato-susp-description"></td>
                    <td id="table-grilyato-susp-count"></td>
                    <td id="table-grilyato-susp-price"></td>
                    <td id="table-grilyato-susp-price-all"></td>
                </tr>
                <tr id="grilyato-ear">
                    <td id="table-grilyato-ear-vendor"></td>
                    <td id="table-grilyato-ear-product_code"></td>
                    <td id="table-grilyato-ear-description"></td>
                    <td id="table-grilyato-ear-count"></td>
                    <td id="table-grilyato-ear-price"></td>
                    <td id="table-grilyato-ear-price-all"></td>
                </tr>
                <tr id="grilyato-hook">
                    <td id="table-grilyato-hook-vendor"></td>
                    <td id="table-grilyato-hook-product_code"></td>
                    <td id="table-grilyato-hook-description"></td>
                    <td id="table-grilyato-hook-count"></td>
                    <td id="table-grilyato-hook-price"></td>
                    <td id="table-grilyato-hook-price-all"></td>
                </tr>
                <tr id="grilyato-angle">
                    <td id="table-grilyato-angle-vendor"></td>
                    <td id="table-grilyato-angle-product_code"></td>
                    <td id="table-grilyato-angle-description"></td>
                    <td id="table-grilyato-angle-count"></td>
                    <td id="table-grilyato-angle-price"></td>
                    <td id="table-grilyato-angle-price-all"></td>
                </tr>
                <tr id="grilyato-dowel1">
                    <td id="table-grilyato-dowel1-vendor"></td>
                    <td id="table-grilyato-dowel1-product_code"></td>
                    <td id="table-grilyato-dowel1-description"></td>
                    <td id="table-grilyato-dowel1-count"></td>
                    <td id="table-grilyato-dowel1-price"></td>
                    <td id="table-grilyato-dowel1-price-all"></td>
                </tr>
                <tr id="grilyato-dowel2">
                    <td id="table-grilyato-dowel2-vendor"></td>
                    <td id="table-grilyato-dowel2-product_code"></td>
                    <td id="table-grilyato-dowel2-description"></td>
                    <td id="table-grilyato-dowel2-count"></td>
                    <td id="table-grilyato-dowel2-price"></td>
                    <td id="table-grilyato-dowel2-price-all"></td>
                </tr>
                <tr id="grilyato-light">
                    <td id="table-grilyato-light-vendor"></td>
                    <td id="table-grilyato-light-product_code"></td>
                    <td id="table-grilyato-light-description"></td>
                    <td id="table-grilyato-light-count"></td>
                    <td id="table-grilyato-light-price"></td>
                    <td id="table-grilyato-light-price-all"></td>
                </tr>
                <tr>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: #eeeeee; color: #f78421;"><strong>{{trans('app.TOTAL')}}</strong></td>
                    <td id="table-grilyato-total" style="background-color: #eeeeee; color: #f78421;"></td>
                </tr>              </tbody>
            </table>
            {!! Form::button(trans('app.Add to cart'), ['onclick' => 'grilyato_add()', 'class' => 'botton botton-primary pull-right', 'style' => 'margin:0;']) !!}
            <br>
            <br>
            <br>
            <hr>
        </div>
    </div>

</div>