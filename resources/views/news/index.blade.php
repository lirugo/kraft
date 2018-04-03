@extends('layouts.app')

@section('stylesheets')
    <style>
        .complete {
            display: none;
        }
    </style>
@endsection
@section('breads')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-20">
                <a class="link-bread" href="#">Новости</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        {{--@foreach($news as $new)--}}
        <div class="row">
            <div class="col-md-6">
                <h4 class="">
                    Внимание! Акция для Дистрибьюторов.
                    <hr style="margin:0;margin-top:10px; ">
                </h4>
                <span class="teaser">
                    <p>Не требуют отдельных подвесов.
                    Как правило, при массе светильника более 250 г, для него требуется отдельный подвес.
                    Светодиодный профиль KRAFT LED устанавливается на подвесной потолок без использования
                    дополнительных комплектующих...</p>
                </span>
                <span class="complete" id="complete">
                    <p>Не требуют отдельных подвесов.
                    Как правило, при массе светильника более 250 г, для него требуется отдельный подвес.
                    Светодиодный профиль KRAFT LED устанавливается на подвесной потолок без использования
                    дополнительных комплектующих.</p>
                    <p>Возможность установки светильника в любом месте потолка.
                    Простота монтажа. Светодиодный профиль KRAFT LED устанавливается точно так же,
                    как и стандартный Т-профиль.
                    Не требуют обслуживания. Срок службы до 50 000 часов.
                    Параметры светильников рассчитаны таким образом, чтобы LED-элементы не перегревались.
                    При этом Т-профиль выступает в качестве радиатора, рассеивая тепло в запотолочное пространство.</p>
                    <p>
                    Не нарушают акустику потолочных систем.
                    Зачастую в классических подвесных потолках применяются акустические минеральные плиты
                    (к примеру OWA), которые предназначены для погашения шумов.
                    Установка растровых светильников в такие потолки нарушает акустический эффект от применения плит.
                    Светодиодный профиль KRAFT LED устанавливается на профиль и не нарушает акустику потолка.
                    Безопасность. Профили KRAFT LED не содержат ртуть и не излучают ультрафиолет.
                    </p>
                </span>
                <a class="more pull-right" href="#">Развернуть</a>
                <br>
                <br>
            </div>
        </div>
        {{--@endforeach--}}
    </div>
@endsection

@section('scripts')
<script>
    $.fn.clicktoggle = function(a, b) {
        return this.each(function() {
            var clicked = false;
            $(this).click(function() {
                if (clicked) {
                    clicked = false;
                    return b.apply(this, arguments);
                }
                clicked = true;
                return a.apply(this, arguments);
            });
        });
    };
    $(".more").clicktoggle(function() {
        $(this).text("Развернуть").siblings(".teaser").hide();
        $(this).text("Свернуть").siblings(".complete").show();
    }, function() {
        $(this).text("Свернуть").siblings(".complete").hide();
        $(this).text("Развернуть").siblings(".teaser").show();
    });
</script>
@endsection
