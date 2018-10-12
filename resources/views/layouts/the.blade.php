<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | Therapist</title>       
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link href="dist/assetsvendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="{{asset('fontawesome-free-5.1.0-web/css/all.css')}}">
        <!-- Card and Nav padding -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Font and Button border -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- Rating (stars) -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <!-- THEME STYLES-->
        <link href="dist/assets/css/main.min.css" rel="stylesheet"/> 
        <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet"/>

    </head>

    <body id="therapistBg">
        <main class="container">

            @include('therapist.nav')
            @yield('page-section')

    
        </main>
    </body>
</html>