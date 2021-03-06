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
        <!-- Top nav -->
    @include('_includes.nav.adminmain')
    @yield('breadcrumbs')
    <!-- Breads -->
    @yield('breads')
    @include('_includes.messages')
        <!--Content-->
    @yield('content')
    </div>
        <!--Footer-->
    @include('_includes.footer')
        <!-- Scripts -->
    @yield('scripts')
</body>
</html>
