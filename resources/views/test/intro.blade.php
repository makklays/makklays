<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays | Test PHP</title>
    <meta name="description" content="Makklays Test PHP" />
    <meta name="keywords" content="Makklays Test PHP" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Test PHP" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url', 'http://makklays.com.ua') }}" />
    <meta property="og:image" content="{{ config('app.url', 'http://makklays.com.ua') }}/img/PHP-logo.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/tests.css" />

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/js/jquery.countdown.min.js'></script>
    <script src='/js/tests.js'></script>
</head>
<body>

<div class="row" style="margin-left: 0; margin-right:0;">
    <div class="col-md-12">
        <div class="text-center" style="margin:20px; ">
            <a href="/" >
                <img src="/favicon.png" style="" alt="Logo" title="Makklays" />
            </a>
        </div>

        <div class="text-center" style="margin: 40px 0 0 0;">

            <h2><?=$title?></h2>

            <div style="margin: 20px 0;">
                <img src="/img/PHP-logo.png" style="width:300px;" title="Quiz PHP" alt="Quiz PHP" />
            </div>

            <div style="margin: 20px 0;">
                <?=$description?>
                <br/><br/>
            </div>

            <div style="margin: 20px 0;">
                <form action="{{ route('test_php_q1', app()->getLocale()) }}" method="get">
                    <input type="submit" class="btn btn-success btn-lg" value="START" />
                </form>
            </div>

        </div>
    </div>
</div>

<div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
    Have questions? <a href="{{ route('feedback', app()->getLocale()) }}">Write</a> <br/>
    &copy; 2019 makklays.com.ua
</div>

</body>
</html>
