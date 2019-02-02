<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | Therapist</title>       

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('path/dist/css/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
        <link href="dist/assetsvendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- javascript -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.print.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.print.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/daterangepicker.css') }}"/>

        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-5.1.0-web/css/all.css')}}">
        <!-- Card and Nav padding -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- THEME STYLES-->
        <link href="dist/assets/css/main.min.css" rel="stylesheet"/> 
        <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet"/>

        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/css/main.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/vendors/themify-icons/css/themify-icons.css') }}" />

    </head>

    <body id="therapistBg">
        <main class="container">

            @include('partials.therapist.header')

            @yield('page-section')

            @include('partials.therapist.footer')

        <script type="text/javascript" src="{{ asset('vendor/fullcalendar/javascripts/daterangepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/fullcalendar/javascripts/moment.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/fullcalendar/javascripts/fullcalendar.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/fullcalendar/javascripts/fullcalendar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/fullcalendar/javascripts/fullcalendar/gcal.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/fullcalendar/javascripts/fullcalendar/gcal.min.js') }}"></script>
       
        <script type="text/javascript" src="{{ asset('path/dist/js/select2.min.js') }}"></script>

        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        </main>
    </body>
</html>