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
                <a class="link-bread" href="#">{{trans('app.News')}}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        {{--@foreach($news as $new)--}}
        <div class="row">
            <div class="col-md-6" style="padding-bottom: 50px;">
                @foreach($news as $new)
                    <h4 class="text-center">{!! $new->title !!}</h4>
                    <hr style="margin-top: 0;">
                    {!! $new->body !!}
                @endforeach
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
