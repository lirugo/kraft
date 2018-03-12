@extends('layouts.app')
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="/manage">Панель управления</a>
                <a class="link-bread" href="#">Объект</a>
                <a class="link-bread" href="/calc/{{$object->id}}">Калькулятор</a>
                <a class="link-bread" href="#">KRAFT LED</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-inline" style="padding-left: 30px;">
                <div class="row">
                    {!! Form::label('label', "Введите длину (A):", ['class' => 'm-t-10']) !!}
                    {!! Form::text('a', null, ['class' => 'form-control pull-right', 'placeholder' => 'м', 'id' => 'a']) !!}
                </div>
                <div class="row">
                    {!! Form::label('label', "Введите длину (B):", ['class' => 'm-t-10']) !!}
                    {!! Form::text('b', null, ['class' => 'form-control pull-right', 'placeholder' => 'м', 'id' => 'b']) !!}
                </div>
                <div class="row">
                    {!! Form::label('label', "Введите высоту (h1):", ['class' => 'm-t-10']) !!}
                    {!! Form::text('h1', null, ['class' => 'form-control pull-right', 'placeholder' => 'м', 'id' => 'h1']) !!}
                </div>
                <div class="row">
                    {!! Form::label('label', "Введите высоту рабочей поверхности (h2):", ['class' => 'm-t-10']) !!}
                    {!! Form::text('h2', null, ['class' => 'form-control pull-right', 'placeholder' => 'м', 'id' => 'h2']) !!}
                </div>
                <div class="row">
                    {!! Form::label('label', "Выберите тип помещения:", ['class' => 'm-t-10']) !!}
                    <select required name="type" id="type" class="form-control pull-right">
                        <option value="" disabled selected>Выберите тип помещения</option>
                        <option value="other" id="other">Вручную ввести уровень освещения</option>
                        <optgroup label="Загальні і житлові приміщення">
                            <option value="100">Передпокої</option>
                            <option value="200">Вітальні</option>
                            <option value="100">Коридори</option>
                            <option value="150">Сходові прольоти, ескалатори</option>
                            <option value="200">Столові</option>
                            <option value="100">Кімнати відпочинку</option>
                            <option value="300">Кімнати для фізичних вправ</option>
                            <option value="200">Гардероби, ванні, туалети</option>
                        </optgroup>
                        <optgroup label="Офіси">
                            <option value="300">Адміністративна частина</option>
                            <option value="500">Діловодство</option>
                            <option value="750">Конструкторські приміщення</option>
                            <option value="500">Проектні приміщення</option>
                            <option value="500">Конференц-зали</option>
                            <option value="300">Прийомні</option>
                            <option value="200">Архіви</option>
                            <option value="500">Перукарні</option>
                        </optgroup>
                        <optgroup label="Роздрібна торгівля">
                            <option value="300">Маленькі площі</option>
                            <option value="500">Великі площі</option>
                            <option value="500">Каса / видача товару</option>
                            <option value="500">Хол</option>
                        </optgroup>
                        <optgroup label="Ресторани і готелі">
                                <option value="300">Вестибюль</option>
                                <option value="500">Кухня</option>
                                <option value="200">Ресторан, зал, спеціальні приміщення</option>
                                <option value="200">Їдальня</option>
                                <option value="300">Буфет</option>
                                <option value="500">Конференц-кімната</option>
                                <option value="100">Коридори</option>
                        </optgroup>
                        <optgroup label="Місця для розваг">
                            <option value="200">Театри та концертні зали</option>
                            <option value="300">Багатофункціональні зали</option>
                            <option value="300">Гримерна</option>
                            <option value="300">Музеї</option>
                        </optgroup>
                        <optgroup label="Бібліотеки">
                            <option value="200">Книжкові полиці</option>
                            <option value="500">Читальний зал</option>
                            <option value="500">Вітрини</option>
                        </optgroup>
                        <optgroup label="Паркування">
                            <option value="75">Вхідні / вихідні рампи</option>
                            <option value="75">Лінії руху</option>
                            <option value="75">Паркувальні майданчики</option>
                            <option value="300">Пропускний пост</option>
                        </optgroup>
                        <optgroup label="Освітні будинку">
                            <option value="300">Класні кімнати</option>
                            <option value="500">Аудиторія</option>
                            <option value="500">Дошка</option>
                            <option value="500">Демонстраційний стіл</option>
                            <option value="500">Кімната для праці</option>
                            <option value="750">Клас для заняття живописом</option>
                            <option value="750">Класи для креслення</option>
                            <option value="500">Лабораторії</option>
                            <option value="500">Майстерні</option>
                            <option value="300">Музичний клас</option>
                            <option value="500">Комп'ютерний клас</option>
                            <option value="300">Лінгвістичний клас</option>
                            <option value="200">Кімнати загального призначення</option>
                            <option value="300">Спортивні зали, басейни</option>
                        </optgroup>
                        <optgroup label="Аеропорти">
                            <option value="200">Зал прильоту і відльоту, багажна</option>
                            <option value="150">Ескалатори, зали зустрічей</option>
                            <option value="500">Інформаційне табло</option>
                            <option value="500">Митниця та стійка контролю</option>
                            <option value="200">Зали очікування</option>
                            <option value="200">Кімнати схову</option>
                            <option value="300">Приміщення охорони</option>
                            <option value="500">Центр управління польотами</option>
                            <option value="500">Диспетчерські</option>
                            <option value="500">Ремонтні ангари</option>
                            <option value="500">Стенди для перевірки двигунів</option>
                            <option value="500">Вимірювальні стенди в ангарах</option>
                            <option value="50">Платформи та ескалатори</option>
                            <option value="200">Касовий зал</option>
                            <option value="300">Квиткові і багажні каси</option>
                            <option value="200">Кімнати очікування</option>
                        </optgroup>
                        <optgroup label="Релігійні приміщення">
                            <option value="100">Приміщення церквиа</option>
                            <option value="300">Лави, вівтар, кафедра</option>
                        </optgroup>
                        <optgroup label="Загальні приміщення промисловості">
                            <option value="200">Виробничі технічні</option>
                            <option value="500">Постові, щитові</option>
                            <option value="300">Пакувальні приміщення</option>
                            <option value="100">Комори, склади</option>
                        </optgroup>
                        <optgroup label="Медичні приміщення *">
                            <option disabled>* Палати</option>
                            <option value="100">Загальне освітлення</option>
                            <option value="300">Освітлення для читання</option>
                            <option value="300">Оглядові</option>
                            <option value="1000">Маніпуляційні</option>
                            <option value="5">Нічне освітлення</option>
                            <option value="200">Ванні, туалети для пацієнтів</option>
                            <option value="500">Приймальний покій</option>
                            <option value="0">Спецосмотри</option>
                            <option value="500">Тест на зір (читання і кольору)</option>
                            <option value="50">Кабінет УЗД</option>
                            <option value="5000">Кімната для діалізу</option>
                            <option value="500">Дерматолог</option>
                            <option value="300">Ендоскопія</option>
                            <option value="500">Перев'язочна</option>
                            <option value="300">Фізіотерапевтичний кабінет</option>
                            <option value="500">Передопераційні</option>

                            <option disabled>* Інтенсивна терапія</option>
                            <option value="100">Загальне освітлення</option>
                            <option value="300">Простий огляд</option>
                            <option value="1000">Огляд та лікування</option>
                            <option value="20">Нічний огляд</option>

                            <option disabled>* Стоматологія</option>
                            <option value="500">Основне освітлення</option>
                            <option value="1000">Персональне освітлення</option>
                            <option value="5000">Операційне поле</option>
                            <option value="5000">Визначення білизни зубів</option>
                            <option value="1000">Кольорове визначення (лабораторії)</option>
                            <option value="300">Стерилізаційне приміщення</option>
                            <option value="300">Приміщення для проведення дез.</option>
                            <option value="500">Морги</option>
                            <option value="5000">Столи для розтинів</option>
                        </optgroup>
                    </select>
                </div>
                <div class="row" id="level">
                    {!! Form::label('label', "Уровень освещенности:", ['class' => 'm-t-10']) !!}
                    {!! Form::text('lk', null, ['class' => 'form-control pull-right', 'placeholder' => 'лк', 'id' => 'lk']) !!}
                </div>
                <div class="row">
                    {!! Form::label('label', "Коэффициент:", ['class' => 'm-t-10']) !!}
                    {!! Form::text('k', 0.5, ['class' => 'form-control', 'readonly', 'id' => 'k']) !!}
                </div>
                <div class="row">
                    {!! Form::submit('Расчитать',['class' => 'botton botton-default pull-right', 'id' => 'calc']) !!}
                </div>
            </div>
        </div>
        {{--Hidden OBJECTS--}}
        <div class="row">
            <div class="col-md-6 text-center">
                <h2>КОЛИЧЕСТВО КОМПЛЕКТОВ СВЕТИЛЬНИКОВ</h2>
            </div>
        </div>
        <div class="col-md-6 form-inline">
            <div class="row">
                {!! Form::label('label', "Кол-во комплектов светильников, шт:", ['class' => 'm-t-10']) !!}
                {!! Form::text('count', null, ['class' => 'form-control','id' => 'count', 'readonly']) !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/jquery.validate.js"></script>
    <script>
        //Show or hide field @lk@
        $(function() {
            $("#level").hide();
            $("#type").change(function() {
                if ($("#other").is(":selected"))
                {
                    $("#level").show();
                }
                else
                    $("#level").hide();
            });
        });
       //Submit BTN
       document.getElementById("calc").addEventListener("click", calcFunction);

       function calcFunction() {
           //Validate
           var numbers = /^[+-]?\d+(\.\d+)?$/;
           if(!document.getElementById('a').validity.valid || !document.getElementById('a').value.match(numbers))
           {
               document.getElementById("a").focus();
               alert('A is empty or not digit');
               return;
           }
           if(!document.getElementById('b').validity.valid || !document.getElementById('b').value.match(numbers))
           {
               document.getElementById("b").focus();
               alert('B is empty or not digit');
               return;
           }
           if(!document.getElementById('h1').validity.valid || !document.getElementById('h1').value.match(numbers))
           {
               document.getElementById("h1").focus();
               alert('h1 is empty or not digit');
               return;
           }
           if(!document.getElementById('h2').validity.valid || !document.getElementById('h2').value.match(numbers))
           {
               document.getElementById("h2").focus();
               alert('h2 is empty or not digit');
               return;
           }
           if(!document.getElementById('type').validity.valid)
           {
               document.getElementById("type").focus();
               alert('Type is empty or not digit');
               return;
           }
           if(document.getElementById('h1').value <= document.getElementById('h2').value)
           {
               document.getElementById("h1").focus();
               alert('h1 не может быть меньше чем h2');
               return;
           }
           if(document.getElementById('type').value === "other" && document.getElementById('lk').value.match(numbers) === null)
           {
               document.getElementById("lk").focus();
               alert('LK is empty or not digit');
               return;
           }
           //EndValidate
           //InitialData
           var a = document.getElementById("a").value;
           var b = document.getElementById("b").value;
           var s = a*b;
           var h1 = document.getElementById("h1").value;
           var h2 = document.getElementById("h2").value;
           var h3 = h1-h2;
           var index = s/((Number(a) + Number(b))*h3);
           var index2 = index/2;
           var k = 0.5;
           var k2 = +index2 + +k;
           var lk;
           if(document.getElementById('type').value === "other")
               lk = document.getElementById("lk").value;
           else
               lk = document.getElementById("type").value;

           var lk2 = k2*(1583/s);
           var count = lk/lk2;
           document.getElementById("count").value = Math.floor(count);
       }
    </script>
@endsection
