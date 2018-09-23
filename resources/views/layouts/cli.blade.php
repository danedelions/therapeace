<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | Client</title>       
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="{{asset('fontawesome-free-5.1.0-web/all.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <!-- <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">  --> 
        <!-- Card and Nav padding -->
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Font and Button border -->
       <!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Rating (stars) -->
        <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> --> 
        <!-- THEME STYLES-->
        <link href="dist/assets/css/main.min.css" rel="stylesheet" />
        <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />

        <script src="{{ asset('jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/client.css') }}">

        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
        <!-- dropdown -->
        <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

        @stack('js')
    </head>
    
    <body id="clientBg">
        <main class="container">
        @include('client.nav')
        @yield('page-section')
 <!--        @include('partials.footer') -->
        </main>
    </body>
</html>
