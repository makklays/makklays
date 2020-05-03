<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays - Error 404</title>

    <meta name="description" content="Makklays - Error 404" />
    <meta name="keywords" content="Makklays - Error 404" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays - Error 404" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/img/favicon_t.png" />

    <link rel="shortcut icon" href="/favicon_t.png" type="image/x-icon" >

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-164972795-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-164972795-1');
    </script-->

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css?<?=time()?>" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/main8.css?<?=time()?>" />

    <!-- datatables css -->
    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/css/bootstrap4/js/bootstrap.min.js'></script>

    <!-- datatables js -->
    <script type="text/javascript" src="/js/myapp.js"></script>

</head>
<body>
<main role="main">

    <nav class="navbar navbar-expand-lg navbar-light bg-white hexlet-navbar border-bottom">
        <a class="navbar-brand" href="{{ route('/', app()->getLocale()) }}">
            <img src="/favicon_t.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Makklays
        </a>
        <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('mysite_about', app()->getLocale()) }}">
                        {{ trans('site.mysite_about') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('mysite_howmake', app()->getLocale()) }}">
                        {{ trans('site.mysite_howmake') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ route('mysite_whatmake', app()->getLocale()) }}">
                        {{ trans('site.mysite_whatmake') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ trans('site.Development') }}
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="dropdown-item a-green green-bk">{{ trans('site.m_lpage') }}</a>
                        <a href="{{ route('mysite_store', app()->getLocale()) }}" class="dropdown-item a-green green-bk">{{ trans('site.m_store') }}</a>
                        <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="dropdown-item a-green green-bk">{{ trans('site.m_corporate') }}</a>
                        <a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="dropdown-item a-green green-bk">{{ trans('site.m_webapi') }}</a>
                        <a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="dropdown-item a-green green-bk">{{ trans('site.m_webportal') }}</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="dropdown-item a-green green-bk">{{ trans('site.m_sitesystem') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('mysite_contacts', app()->getLocale()) }}">
                        {{ trans('site.contacts') }}
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid img-container">
        <div class="container">
            <h1 class="font-development">Разработка сайтов</h1>
            <div class="lead bg-green"><span>Мы Makklays. Мы помогаем идеям изменить мир.</span></div>
        </div>
    </div>

    <div class="container">

    <div class="row">
        <div class="col-md-12">
            <div style="margin: 100px 0;">
                <h1 class="text-design2">Ooooops!</h1>
                <p>
                    101 1 110 00111 1010 11 000 101 <br/>
                    000 0 101 10101 1100 01 010 111 <br/>
                    001 1 010 01111 1110 10 001 100 <br/>
                    101 0 101 00101 0000 10 010 001 <br/>
                    100 0 110 00110 1110 00 100 101 <br/>
                </p>
                <!--img src="/img/404.png" class="img-fluid" alt="Error 404" title="Error 404" /-->
                <h2 class="text-design4">Error 404 | Page not found</h2>
            </div>
        </div>
    </div>

    </div> <!-- /container -->

</main>

<footer style="background-color:#e7e7e7;">
    <hr/>
    <div class="container">
        <div class="row" style="padding:20px 0 0 0;">
            <div class="col-md-4">
                <h4>{{ trans('site.Team') }}</h4>
                <div><a href="{{ route('mysite_about', app()->getLocale()) }}" class="a-green">{{ trans('site.mysite_about') }}</a></div>
                <div><a href="{{ route('mysite_howmake', app()->getLocale()) }}" class="a-green">{{ trans('site.mysite_howmake') }}</a></div>
                <div><a href="{{ route('mysite_whatmake', app()->getLocale()) }}" class="a-green">{{ trans('site.mysite_whatmake') }}</a></div>
                <div><a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="a-green">{{ trans('site.contacts') }}</a></div>
                <div style="padding:20px 0 0 0;">
                    <h4>{{ trans('site.Lang') }}</h4>
                    <a href="{{ route('mysite_about', 'es') }}"><img src="/img/flags/Spain-flag-48.png" style="width:28px;" alt="ES" title="ES" /></a> &nbsp;
                    <a href="{{ route('mysite_about', 'en') }}"><img src="/img/flags/United-kingdom-flag-48.png" style="width:28px;" alt="EN" title="EN" /></a> &nbsp;
                    <a href="{{ route('mysite_about', 'ru') }}"><img src="/img/flags/Russia-flag-48.png" style="width:28px;" alt="RU" title="RU" /></a> &nbsp;
                    <a href="{{ route('mysite_about', 'ch') }}"><img src="/img/flags/China-flag-48.png" style="width:28px;" alt="CH" title="CH" /></a>
                </div>
                <br/>
            </div>
            <div class="col-md-4">
                <h4>{{ trans('site.Development') }}</h4>
                <div><a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="a-green">{{ trans('site.m_lpage') }}</a></div>
                <div><a href="{{ route('mysite_store', app()->getLocale()) }}" class="a-green">{{ trans('site.m_store') }}</a></div>
                <div><a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="a-green">{{ trans('site.m_corporate') }}</a></div>
                <div><a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="a-green">{{ trans('site.m_webapi') }}</a></div>
                <div><a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="a-green">{{ trans('site.m_webportal') }}</a></div>
                <div><a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="a-green">{{ trans('site.m_sitesystem') }}</a></div>
                <br/>
            </div>
            <div class="col-md-4">
                <h4>{{ trans('site.Care') }}</h4>
                <div><a href="{{ route('mysite_brief', app()->getLocale()) }}" class="a-green">{{ trans('site.m_download_brief_develop') }}</a></div>
                <div><a href="{{ route('mysite_online_brief', app()->getLocale()) }}" class="a-green">{{ trans('site.m_brief_online') }}</a></div>
                <div><a href="{{ route('mysite_request', app()->getLocale()) }}" class="a-green">{{ trans('site.order_consultation') }}</a></div>
                <br/>
                <div><a href="{{ route('test-php', app()->getLocale()) }}" class="a-green">{{ trans('site.test_php') }}</a></div>
                <div><a href="{{ route('wait', app()->getLocale()) }}" class="a-green">{{ trans('wait.i_wait_you') }}</a></div>
                <div><a href="{{ route('wait2', app()->getLocale()) }}" class="a-green">{{ trans('wait.wait_for_a_date') }}</a></div>
                <div><a href="{{ route('seo_words', app()->getLocale()) }}" class="a-green">{{ trans('site.count_seo_words') }}</a></div>
                <br/>
            </div>
            <div class="col-md-12">
                <p>&copy; makklays.com.ua 2019-<?=date('Y')?></p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
