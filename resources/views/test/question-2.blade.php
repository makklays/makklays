<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays | Test PHP | Question 2</title>
    <meta name="description" content="Makklays Test PHP" />
    <meta name="keywords" content="Makklays Test PHP" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Test PHP | Makklays" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url', 'http://makklays.com.ua') }}" />
    <meta property="og:image" content="{{ config('app.url', 'http://makklays.com.ua') }}/img/PHP-logo.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/main.css" />

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/js/jquery.countdown.min.js'></script>
    <script src='/js/tests.js'></script>
</head>
<body>

<div class="row" style="margin-left: 0; margin-right:0;">
    <div class="col-md-12">
        <div class="text-center" style="margin:20px; ">
            <a href="{{ route('/', app()->getLocale()) }}" >
                <img src="/favicon.png" alt="Logo" title="Makklays" />
            </a>
        </div>

        <div class="text-center" style="margin: 40px 0 0 0;">
            <b class="grey">Test PHP</b>

            <div class="" style="margin: 20px 0;">
                <h2><?=$title?></h2>
            </div>

            <div>
                <img src="/img/test-php-question-2.png" style="width:300px;" title="Quiz PHP" alt="Quiz PHP" />
            </div>

            <div class="" style="margin: 20px 0;">
                <?=$question?>
            </div>

            <div style="margin: 20px 0;">
                <form action="{{ route('test_php_a2', app()->getLocale()) }}" method="post">
                    {{ csrf_field() }}
                    <input type="submit" name="yes" class="btn btn-success btn-lg" value="{{ trans('test_php.yes') }}" style="margin: 0 40px 0 0 ;" />
                    <input type="submit" name="no" class="btn btn-success btn-lg" value="{{ trans('test_php.no') }}" />
                </form>
            </div>
        </div>
    </div>
</div>

<div style="text-align:center; width:222px; margin-top:40px; margin-left:auto; margin-right:auto; ">
    <div style="margin: 40px 0 10px 0;">
        <a class="green" href="{{ route('test_php_q2', 'es') }}">ES</a> |
        <a class="green" href="{{ route('test_php_q2', 'en') }}">EN</a> |
        <a class="green" href="{{ route('test_php_q2', 'ru') }}">RU</a> |
        <a class="green" href="{{ route('test_php_q2', 'ch') }}">CH</a>
    </div>

    {{ trans('site.have_questions') }} <a href="{{ route('feedback', app()->getLocale()) }}">{{ trans('site.feedback') }}</a> <br/>
    &copy; makklays.com.ua, 2019-<?=date('Y')?>
</div>

</body>
</html>
