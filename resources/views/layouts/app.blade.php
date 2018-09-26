<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace</title>
        <link rel="icon" href="img/logo.png" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-5.1.0-web/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/full-slider.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/client.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
        @include('partials.header')
        @yield('page-body')
</body>
</html>