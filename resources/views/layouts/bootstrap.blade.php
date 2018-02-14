<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token () }}">
        <link rel="icon" href="{{ 'favicon.png' }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap_4.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/parsley/css/parsley.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <script src="{{ asset('assets/jQuery/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('assets/parsley/js/parsley.min.js') }}"></script>
        <!-- [IF lt IE 9]>
            <script src="{{ asset('assets/bootstrap_4.0/js/html5shiv.min.js') }}"></script>
            <script src="{{ asset('assets/bootstrap_4.0/js/respond.min.js') }}"></script>
        <![endIF] -->
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('assets/bootstrap_4.0/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap_4.0/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/jQuery/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/date/date.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>