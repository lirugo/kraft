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
    {{--Notification--}}
    <link href="/css/bootstrap-notifications.min.css" rel="stylesheet">
    {{--ContactForm--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    @yield('stylesheets')

    <!-- Scripts -->
    <script>
        window.Laravel =
        <?php echo json_encode([
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

        @if(!(substr(Request::path(), 0, 4) == 'shop'))
            @if(Auth::user())
                <div id="dialog-form" title="Связь с KRAFT">
                    <p class="validateTips">Эта форма предназначена для связи с руководством компании-производителя.
                        Если у вас есть какие-либо предложения, пожелания или возникли проблемы при работе с нами - напишите нам, и мы рассмотрим Ваше обращение в ближайшее время.</p>
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
                    <p>Ваше мнение важно для нас</p>
                </div>
            @endif
        @endif
        {{--EndContactForm--}}
    </div>
    <!--Footer-->
    @include('_includes.footer')
    <!-- Scripts -->
    @if(!(substr(Request::path(), 0, 4) == 'shop'))
        <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{--Set id user for js --}}
    <script>
        {{--@if(!Auth::guest())--}}
        var authUserId = <?php if(Auth::user()) echo Auth::user()->id; ?>;
        {{--@endif--}}
    </script>
    {{--ContactForm--}}
    <script src="/js/contact.js"></script>
    <script src="/js/notifications.js"></script>
    @endif
    @include('_includes.scripts')

</body>
</html>
