<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | @yield('title')</title>       
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
        <!-- THEME STYLES-->
         <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/vendors/themify-icons/css/themify-icons.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('fullcalendar/fullcalendar.min.css') }}">
        <script src="{{ asset('fullcalendar/fullcalendar.min.js') }}"></script>

        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('select2/dist/css/select2.min.css')}}">

        @stack('js')
    </head>
    
    <body id="userBg">
        <main class="container">

        @include('partials.client.header')

        @yield('page-section')

        @include('partials.client.footer')

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

        </main>
    </body>
</html>