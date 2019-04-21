<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Therapeace | @yield('title')</title>       
        <link rel="icon" href="img/logo.png" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('path/dist/css/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
        <!-- font awesome -->

        <!-- THEME STYLES-->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/assets/vendors/themify-icons/css/themify-icons.css') }}" />
        <!-- JAVASCRIPT -->
        <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        @stack('styles')
    </head>
    <body id="userBg">
        <main class="container">
            <nav class="navbar navbar-expand-md bg-white fixed-top">
                <div class="container">    
                    <a class="navbar-brand" href="#">
                      <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width:130px;">
                    </a>
                    <a href="/" ><i class="far fa-arrow-alt-circle-left"></i>&nbsp;Go Back</a></h4>
                </div>
            </nav>
            @yield('page-section')
            @include('partials.therapist.footer')
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