<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Interface | Projet tutore</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href=" {{asset('css/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{asset('css/dataTables.bootstrap.css')}} " rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/icone.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-light-blue">


    <!-- Normalement je fais les inclusions  -->

    @include('layouts.partials._loader')
    @include('layouts.partials._topBar')
    @include('layouts.partials._leftSidebar')
    @include('layouts.partials._rightSidebar')
    

    <!-- Mon partials side nav et mon top nav -->

    @yield('content')

    {{-- S'il y a un footer l'ajouter ici pour afficher à toutes les pages--}}


        <!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="js/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="js/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('js/jquery.dataTables.js') }} "></script>
    <script src="{{ asset('js/dataTables.bootstrap.js') }} "></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('js/demo.js') }}"></script>

    
    <!-- Pour le formulaire -->

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('js/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('js/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/form-validation.js') }}"></script>



</body>



