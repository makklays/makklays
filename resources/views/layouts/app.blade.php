<!DOCTYPE html>
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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="Makklays - adminka" />
    <meta name="keywords" content="Makklays - adminka" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays - adminka" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="<?=config('app.url')?>/img/development.jpeg" />

    <link rel="shortcut icon" href="<?=config('app.url')?>/makklays.png" type="image/x-icon" >

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/myapp.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('js/package.js') }}" type="text/javascript" ></script>

    <!-- datatables js -->
    <!--script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script-->

    <!-- Fonts -->
    <!--link rel="dns-prefetch" href="//fonts.gstatic.com"-->
    <!--link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"-->

    <!-- Styles -->
    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/package.css') }}" rel="stylesheet"-->
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/bootstrap4/css/bootstrap.min.css?<?=time()?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/admin-main8.css?<?=time()?>" />

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/jquery-ui.theme.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/jquery-ui.css?'.time()) }}" />
    <script type="text/javascript" src="<?=config('app.url')?>/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?=config('app.url')?>/js/ui/i18n/datepicker-ru.js"></script>

    <!-- datatables css -->
    <!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/ -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}" style="padding-top:0; padding-bottom:0;">
                    <img id="logo" class="d-inline-block mr-1" alt="Logo" src="/makklays.png" style="width:39px;" />
                    Makklays
                    <!-- div class="d-inline-block mr-1">Makklays<span>text</span></div -->
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login', app()->getLocale() ) }}">{{ trans('site.Login') }}</a>
                            </li>
                            <!-- without registration
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register', app()->getLocale()) }}">{{ trans('site.Register') }}</a>
                                </li>
                            @endif
                            -->
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('packages', app()->getLocale()) }}">{{ trans('site.Packages') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('adm-call', app()->getLocale()) }}">{{ trans('site.Calls') }}</a>
                            </li>
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ route('feedbacks', app()->getLocale()) }}">{{ trans('site.Soobsheniya') }}</a>
                            </li-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('statistics', app()->getLocale()) }}">{{ trans('site.Statistics') }}</a>
                            </li>
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ route('companies', app()->getLocale()) }}">{{ trans('site.Companies') }}</a>
                            </li-->
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ route('company_add', app()->getLocale()) }}">{{ trans('site.Companies add') }}</a>
                            </li-->
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ route('employees', app()->getLocale()) }}">{{ trans('site.Employees') }}</a>
                            </li-->
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ route('employee_add', app()->getLocale()) }}">{{ trans('site.Employee add') }}</a>
                            </li-->

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!--a class="dropdown-item" href="/jobs">Jobs</a>
                                    <a class="dropdown-item" href="/cvs">CVs</a-->
                                    <a class="dropdown-item" href="{{ route('adm-call', app()->getLocale()) }}">{{ trans('site.Calls') }}</a>
                                    <a class="dropdown-item" href="{{ route('adm-orders', app()->getLocale()) }}">{{ trans('site.Orders') }}</a>
                                    <!--<a class="dropdown-item" href="{{ route('todo', app()->getLocale()) }}">{{ trans('site.ToDo') }}</a>-->
                                    <a class="dropdown-item" href="{{ route('report', app()->getLocale()) }}">{{ trans('site.Reports') }}</a>
                                    <a class="dropdown-item" href="{{ route('documents', app()->getLocale()) }}">{{ trans('site.Documents') }}</a>
                                    <a class="dropdown-item" href="{{ route('adm-blacklist', app()->getLocale()) }}">Blacklist</a>
                                    <a class="dropdown-item" href="{{ route('adm-articles', app()->getLocale()) }}">{{ trans('site.Articles') }}</a>
                                    <a class="dropdown-item" href="{{ route('report-cat-dog', app()->getLocale()) }}">{{ trans('site.Cat_or_Dog') }}</a>
                                    <!--a class="dropdown-item" href="{{ route('settings', app()->getLocale()) }}">Settings</a-->
                                    <a class="dropdown-item" href="{{ route('profile', app()->getLocale()) }}">{{ trans('site.Profile') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ trans('site.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout', app()->getLocale() ) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="" style="padding-top:25px; padding-bottom:25px;">
            @yield('content')
        </main>

        <script type="text/javascript" src="/js/vue.js"></script>
        <script type="text/javascript" src="/js/MyVue.js"></script>

    </div>
</body>
</html>
