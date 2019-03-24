<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>TheraPeace | Welcome</title>
    
    <!-- GLOBAL MAINLY STYLES-->
    <link href="dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dist/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="dist/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link rel="stylesheet" type="text/css" href="public/css/admin.css">

    <!-- Data Tables -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
</head>
<body class="fixed-navbar" style="overflow: hidden">
    @include('partials.aheader')
    @yield('dashboard')

    <!-- CORE PLUGINS-->
    <script src="dist/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="dist/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="dist/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="dist/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>

    <!-- Data Tables -->
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-3.3.1.js"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- App scripts -->
<!--     @stack('scripts') -->

    <!-- View Modal Script and Ajax -->
    <script type="text/javascript">
        $(document).ready(function(){

            $('#viewModalc').on('show.bs.modal', fucntion(e){
                var view = $(e.relatedTarget).data('id');            // })

            $('#viewModalt').on('show.bs.modal', fucntion(e){
                var view = $(e.relatedTarget).data('id');
                
            // $(function () {
            //         $("#viewModalc").click(function () {
            //             var my_id_value = $(this).data('id');
            //             $(".modal-body #hiddenValue").val(my_id_value);
            //         })
            //     });

            $('#emailModal').on('show.bs.modal', function (e) {
                var btn = $(e.relatedTarget)
                $('#sendWelcomeBtn').attr('href', function () {
                    return $(this).data('href').replace('__ID__', btn.data('id'))
                })

                // $('#sendNoticeBtn').attr('href', function () {
                //     return $(this).data('href').replace('__ID__', btn.data('id'))
                // })
            })


        });
    </script>
    
</body>
</html>

