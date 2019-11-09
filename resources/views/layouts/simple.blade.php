<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" >

    <!-- Fonts -->
    <!--link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"-->
    <!--link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css"-->

    <!-- base css -->
    <!--link rel="stylesheet" type="text/css" media="all" href="https://laravel.ru/all.css" -->
    <link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/all.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/tests.css" />

    <!-- my css -->
    <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" >

    <!-- base js -->
    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/js/jquery.countdown.js'></script>
    <script src='/bootstrap-4.3.1/js/bootstrap.min.js'></script>

    <!-- my js -->
    <script type="text/javascript" src="/js/myapp.js"></script>
</head>
<body>

<div class="wrap">
    <div style="text-align:center; margin-left:auto; margin-right:auto;">
        <div class="text-center" style="margin:20px; ">
            <a href="http://gogol28/ru">
                <img src="/favicon.png" style="" alt="Logo" title="Makklays">
            </a>
        </div>
    </div>
    <div class="content">

        @yield('content')

    </div>
    <div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">

        <!--a href="{{ route('test-php', app()->getLocale()) }}" >{{ trans('site.test_php') }}</a> <br/-->
        <!--a href="/cv_alexander_kuziv.html" target="_blank">CV</a> <br/-->

        <div style="margin: 20px 0 0 0;">
            <a href="{{ route('wait', 'es') }}">ES</a> |
            <a href="{{ route('wait', 'en') }}">EN</a> |
            <a href="{{ route('wait', 'ru') }}">RU</a> |
            <a href="{{ route('wait', 'ch') }}">CH</a>
        </div>

        &copy; 2019 makklays.com.ua
    </div>
</div>
</body>
</html>
