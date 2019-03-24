<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | Therapist</title>       
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('path/dist/css/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
<<<<<<< HEAD
        <link href="dist/assetsvendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- javascript -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.print.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/fullcalendar.print.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fullcalendar/stylesheets/daterangepicker.css') }}"/>

=======
>>>>>>> 76ccb4a5c490736836afe62e25bf10d9bf9f51a2
        <!-- font awesome -->

        <!-- THEME STYLES-->
        <link href="dist/assets/css/main.min.css" rel="stylesheet"/> 
        <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/css/main.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/vendors/themify-icons/css/themify-icons.css') }}" />
        <!-- JAVASCRIPT -->
        
        <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        @stack('styles')

    </head>

    <body id="userBg">
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
        </main>
        @stack('modals')
        <script type="text/javascript" src="{{ asset('path/dist/js/select2.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.select2').select2({
                    tags: true,
                    createTag: function (params) {
                        var term = $.trim(params.term);

                        if (term === '') {
                            return null;
                        }

                        return {
                            id: term,
                            text: term,
                            newTag: true // add additional parameters
                        }
                    }
                })
            })
        </script>
        @stack('scripts')

    </body>

    
</html>