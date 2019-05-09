<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace</title>
        <link rel="icon" href="img/logo.png" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/full-slider.css') }}" >
     <!--    <link rel="stylesheet" type="text/css" href="{{ asset('css/client.css') }}"> -->
        <link rel="stylesheet" type="text/css" href="css/client.css">
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
        @yield('page-welcome')
</body>
</html>