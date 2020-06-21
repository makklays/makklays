<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>
    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Cats ??? or ??? Dogs" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url', 'https://makklays.com.ua') }}" />
    <meta property="og:image" content="{{ config('app.url', 'https://makklays.com.ua') }}/img/dog.jpg" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="<?=config('app.url')?>/makklays.png" type="image/x-icon" />
    <!--link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" /-->
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/main.css?<?=time()?>" />

    <script src='<?=config('app.url')?>/js/jquery-3.4.0.min.js'></script>
    <script src='<?=config('app.url')?>/js/jquery.countdown.min.js'></script>
    <script src='<?=config('app.url')?>/js/tests.js'></script>
</head>
<body>

    <div id="id-loader-test" style="position: absolute; z-index: 5; margin:-21px auto; width:100%; height:100%; background-color: grey; /*#0c5460;*/ opacity: 0.7;">
        <div style="width:64px; padding:0px; margin-left:auto; margin-right:auto;" class="test-loader">
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>

    <div class="test-block">
        <div class="thead">
            <h1>???</h1>
        </div>
        <div class="flex-block">
            <div class="ch-block" choo="cat" style="background-image: url('/img/cats.png'); background-size: cover;">
                <div style="color:#FFF; margin-left:7px;">{{ trans('site.cats') }}</div>
            </div>
            <div class="or">
                {{ trans('site.OR') }}
            </div>
            <div class="ch-block" choo="dog" style="background-image: url(/img/dog.jpg); background-size: cover;" >
                <div style="color:#000; margin-left:7px;">{{ trans('site.dogs') }}</div>
            </div>
        </div>
    </div>

    <div style="text-align:center; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <div style="padding-bottom: 20px;"></div>

        <div>
            <a href="{{ route('test-php', app()->getLocale()) }}" target="_blank">{{ trans('site.test_php') }}</a>
        </div>
        <div>
            <a href="{{ route('wait', app()->getLocale()) }}" target="_blank">{{ trans('wait.i_wait_you') }}</a>
        </div>
        <div>
            <a href="{{ route('wait2', app()->getLocale()) }}" target="_blank">{{ trans('wait.wait_for_a_date') }}</a>
        </div>

        <div style="margin: 30px 0 10px 0;">
            <a href="{{ route('/', 'es') }}">ES</a> |
            <a href="{{ route('/', 'en') }}">EN</a> |
            <a href="{{ route('/', 'ru') }}">RU</a> |
            <a href="{{ route('/', 'ch') }}">CH</a>
        </div>

        {{ trans('site.have_questions') }} <a href="{{ route('mysite_contacts', app()->getLocale()) }}">{{ trans('site.feedback') }}</a> <br/>
        &copy; makklays.com.ua 2007-<?=date('Y')?>
    </div>
</body>
</html>
