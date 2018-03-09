<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token () }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ 'favicon.png' }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap_4.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/web/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/parsley/css/parsley.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <script src="{{ asset('assets/jQuery/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('assets/parsley/js/parsley.min.js') }}"></script>
        @yield('addToHead')

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
        <script type="text/javascript">
            $(document).ready(function(){
                var timeout = {{config('session.lifetime')}};
                var expire  = timeout.minutes ( ).fromNow ( );
                var upto    = expire.toString ('yyyy/MM/dd HH:mm:ss');
                $('#countdown').countdown ( upto, function ( event ) {
                    $(this).html ( event.strftime ('%H :%M :%S') );
                }).on ('finish.countdown', function ( ) {
                    window.location.replace ( "{{route('logout')}}" );
                });
            });
        </script>
        @yield('addToFoot')
    </body>
</html>