<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >

    <!-- Fonts -->
    <!--link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"-->

    <!--link rel="stylesheet" type="text/css" media="all" href="https://laravel.ru/all.css" -->
    <link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/all.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" >

    <!-- datatables css -->
    <!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/-->

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/bootstrap-4.3.1/js/bootstrap.min.js'></script>

    <!-- datatables js -->
    <!--script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script-->

    <script type="text/javascript" src="/js/myapp.js"></script>


</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                <!--
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                        -->
                @endauth
            </div>
        @endif

        <div class="content">

            @yield('content')

        </div>
    </div>
</body>
</html>

