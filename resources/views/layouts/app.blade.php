<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>لوحة التحكم</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/dist/font-awesome/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/adminlte/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{ asset('assets/dist/adminlte/css/bootstrap-rtl.min.css') }}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{ asset('assets/dist/adminlte/css/custom-style.css') }}">
    @stack('css')
    @livewireStyles
</head>

<body class="hold-transition login-page" style="background-color: #d2d6de;">
    @yield('content')
    <!-- REQUIRED SCRIPTS -->
    @livewireScripts
    <!-- jQuery -->
    <script src="{{ asset('assets/dist/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/dist/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/adminlte/js/adminlte.min.js') }}"></script>
    @stack('js')
</body>

</html>
