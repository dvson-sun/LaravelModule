<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/Font-Awesome/css/all.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    @include('layouts.header')
    <div class="wrapper">

        @include('layouts.slidebar')

        @yield('content')

    </div>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('bower_components/assets/js/light-bootstrap-dashboard.js') }}"></script>
    <!-- <script src="{{ asset('bower_components/template_package/assets/js/demo.js') }}"></script> -->

</body>

</html>