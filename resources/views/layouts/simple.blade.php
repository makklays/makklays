<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164972795-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-164972795-1');
    </script>

    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="<?=(isset($og['title']) && !empty($og['title']) ? $og['title'] : 'Makklays')?>" />
    <meta property="og:type" content="<?=(isset($og['type']) && !empty($og['type']) ? $og['type'] : 'website')?>" />
    <meta property="og:url" content="<?=(isset($og['url']) && !empty($og['url']) ? $og['url'] : 'http://makklays.com.ua/en')?>" />
    <meta property="og:image" content="<?=(isset($og['image']) && !empty($og['image']) ? $og['image'] : 'http://makklays.com.ua/makklays.png')?>" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="<?=config('app.url')?>/makklays.png" type="image/x-icon" >

    <!-- base css -->
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/bootstrap4/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/all.css" >
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/main.css?qwe" />

    <!-- my css -->
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/style.css" >

    <!-- base js -->
    <script src='<?=config('app.url')?>/js/jquery-3.4.0.min.js'></script>
    <script src='<?=config('app.url')?>/js/jquery.countdown.js'></script>
    <script src='<?=config('app.url')?>/js/jquery.count-days.js'></script>
    <script src='<?=config('app.url')?>/css/bootstrap4/js/bootstrap.min.js'></script>

    <!-- my js -->
    <script type="text/javascript" src="<?=config('app.url')?>/js/myapp.js"></script>
</head>
<body>

<div class="wrap">
    <div style="text-align:center; margin-left:auto; margin-right:auto;">
        <div class="text-center" style="margin:20px; ">
            <a href="{{ route('/', app()->getLocale()) }}">
                <img src="<?=config('app.url')?>/makklays.png" style="width: 78px;" alt="Logo" title="Makklays">
            </a>
        </div>
    </div>
    <div class="content">

        @yield('content')

    </div>
    <div style="text-align:center; width:322px; margin-top:0px; margin-left:auto; margin-right:auto; ">

        <!--a href="{{ route('test-php', app()->getLocale()) }}" >{{ trans('site.test_php') }}</a> <br/-->
        <!--a href="/cv_alexander_kuziv.html" target="_blank">CV</a> <br/-->

        <!--div style="margin: 20px 0 0 0;">
            <a href="{{ route('wait', 'es') }}">ES</a> |
            <a href="{{ route('wait', 'en') }}">EN</a> |
            <a href="{{ route('wait', 'ru') }}">RU</a> |
            <a href="{{ route('wait', 'ch') }}">CH</a>
        </div-->

        &copy; makklays.com.ua 2019-<?=date('Y')?>
    </div>
</div>
</body>
</html>
