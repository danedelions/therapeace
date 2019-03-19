<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | Therapist</title>       
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('path/dist/css/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('select2/dist/css/select2.min.css')}}">
        <link href="dist/assetsvendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-5.1.0-web/css/all.css')}}">
        <!-- THEME STYLES-->

        <link href="dist/assets/css/main.min.css" rel="stylesheet"/> 
        <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet"/>



        <link href="dist/assets/css/main.min.css" rel="stylesheet"/> 
        <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet"/>

        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/css/main.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/vendors/themify-icons/css/themify-icons.css') }}" />
        <!-- JAVASCRIPT -->
        
        <script type="text/javascript" src="{{asset('fullcalendar-3.9.0/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    </head>

    <body id="therapistBg">
        <main class="container">




            @include('partials.therapist.header')

            @yield('page-section')

            @include('partials.therapist.footer')


        </main>
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


        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        </main>

                        return {
                            id: term,
                            text: term,
                            newTag: true // add additional parameters
                        }
                    }
                })
            })
        </script>

    </body>

    
</html>