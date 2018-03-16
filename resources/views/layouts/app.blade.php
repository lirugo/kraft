<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kraft</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    {{--ContactForm--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    @yield('stylesheets')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        {{ csrf_field() }}
        <!-- Top nav -->
        @include('_includes.nav.main')
        @yield('breadcrumbs')
        <!-- Breads -->
        @yield('breads')
        <!-- EndBreads -->
        @include('_includes.messages')
        <!--Content-->
        @yield('content')
        {{--ContactForm--}}
        @if(Auth::user())
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
        @endif
        {{--EndContactForm--}}
    </div>

    <!--Footer-->
    @include('_includes.footer')
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{--ContactForm--}}
    <script src="/js/contact.js"></script>
    @include('_includes.scripts')
</body>
</html>
