{{--TProfile--}}
<div id="calc_t_profile">
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
            {{ Form::radio('difficult', 3, false,  ['id' => 'easy']) }} Простая
            {{ Form::radio('difficult', 7, false,  ['id' => 'hard']) }} Сложная
            <br>
            <br>
            {!! Form::label('label', "Толщина профиля:") !!}
            {{ Form::radio('thickness', '15', false,  ['id' => '15mm']) }}
            {!! Form::label('15mmlbl', "15 мм") !!}
            {{ Form::radio('thickness', '24', false,  ['id' => '24mm']) }}
            {!! Form::label('24mmlbl', "24 мм") !!}
            <br>
            <br>
            {!! Form::label('label', "Выбор пристенного профиля:") !!}
            {{ Form::radio('wall_profile', 'L', false,  ['id' => 'wall_profile_L']) }}
            {!! Form::label('label', "L") !!}
            {{ Form::radio('wall_profile', 'W', false,  ['id' => 'wall_profile_W']) }}
            {!! Form::label('label', "W") !!}
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
    <div class="row">
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
</div>


<div class="row">
    <div class="col-md-12" id="table">
        <hr>
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
                <td id="table-wall-profile-vendor"></td>
                <td id="table-wall-profile-model"></td>
                <td id="table-wall-profile-description"></td>
                <td></td>
                <td></td>
                <td id="table-wall-profile-color"></td>
                <td id="table-wall-profile-count"></td>
                <td id="table-wall-profile-price"></td>
                <td id="table-wall-profile-pack"></td>
                <td id="table-wall-profile-price-all"></td>
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
                <td style="background-color: white; color: #f78421;"><strong>ИТОГО</strong></td>
                <td id="table-total" style="background-color: white; color: #f78421;"></td>
            </tr>
            </tbody>
        </table>
        <hr>
    </div>
</div>