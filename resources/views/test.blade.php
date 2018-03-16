@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
    <div id="dialog-form" title="Написать нам">
        <p class="validateTips">Запроните форму связи</p>
        {!! Form::open(['route' =>['contact.send'], 'method' => 'POST', 'id' => 'contact']) !!}
        <fieldset>
        {!! Form::text('theme',null, ['class' => 'form-control', 'id' => 'theme','placeholder' => 'Тема']) !!}
        {!! Form::textarea('body',null, ['class' => 'form-control',  'id' => 'body', 'placeholder' => 'Текст письма', 'style' => 'height:190px;']) !!}
        <!-- Allow form submission with keyboard without duplicating the dialog button -->
            {{--<input type="submit" tabindex="-1" style="position:absolute; top:-1000px">--}}
            {{--{!! Form::submit('Отправить!') !!}--}}
        </fieldset>
        {!! Form::close() !!}
    </div>
    <div id="success" title="Ваш запрос отправлен">
        <p>Ваше мнение важно для нас текс</p>
    </div>
    <button id="contact-form">Отправить</button>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/contact.js"></script>
@endsection