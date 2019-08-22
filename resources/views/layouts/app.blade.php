<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/img/dog.jpg" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" >

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/myapp.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('js/package.js') }}" type="text/javascript" ></script>

    <!-- datatables js -->
    <!--script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/package.css') }}" rel="stylesheet">

    <!-- datatables css -->
    <!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/ -->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="padding-top:0; padding-bottom:0;">
                    <img id="logo" class="d-inline-block mr-1" alt="Logo" src="/favicon.png" style="width:39px;" />
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- without registration
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            -->
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/packages') }}">{{ __('Packages') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/companies') }}">{{ __('Companies') }}</a>
                            </li>
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ url('/companies/add') }}">{{ __('Companies add') }}</a>
                            </li-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/employees') }}">{{ __('Employees') }}</a>
                            </li>
                            <!--li class="nav-item">
                                <a class="nav-link" href="{{ url('/employees/add') }}">{{ __('Employee add') }}</a>
                            </li-->

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!--a class="dropdown-item" href="/jobs">Jobs</a>
                                    <a class="dropdown-item" href="/cvs">CVs</a-->
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="{{ route('todo') }}">Todo</a>
                                    <a class="dropdown-item" href="/settings">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    </div>
</body>
</html>
