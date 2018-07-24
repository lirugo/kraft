<div id="calc_rail">
    <div class="row">
        <div class="col-md-4">
            {!! Form::open(['onsubmit' => 'return formTProfile();']) !!}
            {!! Form::number('rail_width', 5, ['class' => 'form-control', 'id' => 'rail_width', 'placeholder' => 'Введите максимальную ширину помещения', 'required','step' => '1', 'min' => '1']) !!}
            {!! Form::number('rail_length', 5, ['class' => 'form-control', 'id' => 'rail_length', 'placeholder' => 'Введите максимальную длину помещения', 'required','step' => '1', 'min' => '1']) !!}
            {!! Form::select('rail_face',[
                'no'  => 'Нет',
                'stub'  => 'Заглушка',
                'angle'  => 'Уголок профилированный',
            ], 'no', ['class' => 'form-control', 'id' => 'difficult', 'placeholder' => 'Выберите конфигурацию помещения', 'required']) !!}
            <div class="col-md-6 m-t-10">
                <img src="http://placehold.it/160x100" class="img-responsive img-radio active">
                <button type="button" class="botton btn-block btn-primary btn-radio active" style="margin:0; width: 160px;">Вдоль</button>
                <input type="checkbox" id="rail_along" class="hidden" checked>
            </div>
            <div class="col-md-6 m-t-10">
                <img src="http://placehold.it/160x100" class="img-responsive img-radio">
                <button type="button" class="botton btn-block btn-primary btn-radio" style="margin:0; width: 160px;">Поперек</button>
                <input type="checkbox" id="rail_across" class="hidden">
            </div>
        </div>
    </div>
</div>