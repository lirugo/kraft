@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 form-inline">
                {!! Form::label('label', "Площадь потолка:") !!}
                {!! Form::text('areaceiling', null, ['class' => 'form-control']) !!} м<sup>2</sup>
            </div>
            <br>
            <br>
            <div class="col-md-4 form-inline">
                {!! Form::label('label', "Периметр потолка:") !!}
                {!! Form::text('pceiling', null, ['class' => 'form-control']) !!} м
            </div>
            <br>
            <br>
            <div class="col-md-3">
                <select id="difficult" name="difficult" class="form-control" required>
                    <option value="" selected disabled>Конфигурация помещения</option>
                    <option id="easy" value="easy">Easy</option>
                    <option id="hard" value="hard">Hard</option>
                </select>
            </div>
            <br>
            <br>
            <div class="col-md-3">
                <select id="product" name="product" class="form-control" required>
                    <option value="" selected disabled>Выберите продукт</option>
                    <option id="T-Pofile" value="T-Pofile">T-Pofile</option>
                    <option id="Grilyato" value="Grilyato">Grilyato</option>
                    <option id="Kraft_Cube" value="Kraft Cube">Kraft Cube</option>
                    <option id="Kraft_LED" value="Kraft LED">Kraft LED</option>
                    <option id="Slabs_OWA" value="Slabs OWA">Slabs OWA</option>
                </select>
            </div>
        </div>
        <!--Hidden objects-->
        <div class="row">

            <!--Select color-->
            <div id="tprofile" class="col-md-3">
                <select id="color" name="color" class="form-control" required>
                    <option value="default" selected disabled>Выберите цвет</option>
                    <option value="ral9003" id="ral9003">RAL 9003 (белый)</option>
                    <option value="ral9005" id="ral9005">RAL 9005 (черный)</option>
                    <option value="ral9007" id="ral9007">RAL 9007 (серый)</option>
                    <option value="wood" id="wood">Дерево</option>
                    <option value="rock" id="rock">Камень</option>
                    <option value="metal" id="metal">Метал</option>
                    <option value="other" id="other">Другой</option>
                </select>
            </div>

            <!--Select other color-->
            <div  id="othercolor" class="col-md-3">
                <input class="form-control" placeholder="4 цифры">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $("#product").change(function() {
                if ($("#T-Pofile").is(":selected")
                    || $("#Grilyato").is(":selected")
                    || $("#Kraft_Cube").is(":selected")) {
                    $("#tprofile").show();
                } else {
                    document.getElementById("color").selectedIndex = "0";
                    $("#othercolor").hide();
                    $("#tprofile").hide();
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
    </script>
@endsection
