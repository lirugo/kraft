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
        @foreach($news as $new)
        <div class="row">
            <div class="col-md-6">
                <h4 class="">
                    {{$new->title}}
                    <hr style="margin:0;margin-top:10px; ">
                </h4>
                <p class="teaser">{!! strlen($new->body) > 970 ? substr($new->body, 0 ,970)."... " : $new->body  !!}</p>
                <p class="complete">{{ $new->body }}</p>
                {!! strlen($new->body) > 970 ? '<a class="more pull-right">Развернуть</a>' : ''  !!}
                <br>
                <br>
            </div>
        </div>
        @endforeach
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
