<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>
    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Cats ??? or ??? Dogs" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url', 'http://makklays.com.ua') }}" />
    <meta property="og:image" content="{{ config('app.url', 'http://makklays.com.ua') }}/img/dog.jpg" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/tests.css" />

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/js/jquery.countdown.min.js'></script>
    <script src='/js/tests.js'></script>
</head>
<body>

    <div id="id-loader-test" style="position-top:0; position: absolute; z-index: 5; width:100%; height:100%; background-color: grey; /*#0c5460;*/ opacity: 0.7;">
        <div style="width:64px; padding:0px; margin-left:auto; margin-right:auto;" class="test-loader">
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>

    <div class="test-block">
        <div class="thead">
            <h2 style="margin:0 0 30px 0; padding-top:20px;">???</h2>
        </div>
        <div class="flex-block">
            <div class="ch-block" choo="kot" style="background-image: url('/img/kotik.jpg'); background-size: cover;">
                <div style="color:#FFF; margin-left:7px;">{{ __('cats') }}</div>
            </div>
            <div class="or">
                OR
            </div>
            <div class="ch-block" choo="dog" style="background-image: url(/img/dog.jpg); background-size: cover;" >
                <div style="color:#000; margin-left:7px;">{{ __('dogs') }}</div>
            </div>
        </div>
    </div>

    <div style="text-align:center; width:230px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <!-- Есть вопросы? <a href="/feedback">Пишите</a> <br/> -->

        <div>
            <a href="{{ route('test-php') }}" target="_blank">Test PHP</a>
        </div>

        <!--div>
            <a href="/cv_alexander_kuziv_es.html" target="_blank">CV ES</a> |
            <a href="/cv_alexander_kuziv.html" target="_blank">CV EN</a> |
            <a href="/cv_alexander_kuziv_ru.html" target="_blank">CV RU</a> |
            <a href="/cv_alexander_kuziv_ch.html" target="_blank">CV CH</a>
        </div-->

        Have questions? <a href="/feedback">Write</a> <br/>
        &copy; 2019 makklays.com.ua
    </div>

    <!--
    <div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        To level A2 <br/>
        <span id="clock"></span>
    </div>
    <script>
        $('#clock').countdown('2019/07/20', function(event) {
            $(this).html(event.strftime('%D days %H:%M:%S'));
        });
    </script>
    -->

</body>
</html>