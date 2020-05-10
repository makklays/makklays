<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $seo->title }}</title>

    <meta name="description" content="{{ $seo->description }}" />
    <meta name="keywords" content="{{ $seo->keywords }}" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="{{ $seo->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="<?=config('app.url')?>/img/development.jpeg" />

    <link rel="shortcut icon" href="<?=config('app.url')?>/makklays.png" type="image/x-icon" >

    <!-- Включить GA -->
    <!-- запуститься в интернете -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-164972795-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-164972795-1');
    </script-->

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/bootstrap4/css/bootstrap.min.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/main8.css?'.time()) }}" />

    <script src='<?=config('app.url')?>/js/jquery-3.4.0.min.js'></script>
    <script src='<?=config('app.url')?>/css/bootstrap4/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="<?=config('app.url')?>/js/myapp.js"></script>
</head>
<body>
<main role="main">

    <nav class="navbar navbar-expand-lg navbar-light bg-white dev-navbar border-bottom">
        <a class="navbar-brand" href="{{ route('/', app()->getLocale()) }}">
            <img src="<?=config('app.url')?>/makklays.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Makklays
        </a>
        <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ \Route::current()->getName() == 'mysite_about' ? 'active' : '' }}">
                    <a class="nav-link dev-navbar-link px-3" href="{{ route('mysite_about', app()->getLocale()) }}">
                        {{ trans('site.mysite_about') }}
                    </a>
                </li>
                <li class="nav-item {{ \Route::current()->getName() == 'mysite_howmake' ? 'active' : '' }}">
                    <a class="nav-link dev-navbar-link px-3" href="{{ route('mysite_howmake', app()->getLocale()) }}">
                        {{ trans('site.mysite_howmake') }}
                    </a>
                </li>
                <li class="nav-item {{ \Route::current()->getName() == 'mysite_whatmake' ? 'active' : '' }}">
                    <a class="nav-link dev-navbar-link px-3" href="{{ route('mysite_whatmake', app()->getLocale()) }}">
                        {{ trans('site.mysite_whatmake') }}
                    </a>
                </li>
                <li class="nav-item {{ in_array(\Route::current()->getName(), ['mysite_lpage', 'mysite_corporate', 'mysite_webservice', 'mysite_webportal', 'mysite_sitesytem', 'mysite_store']) ? 'active' : '' }} dropdown">
                    <a class="nav-link dev-navbar-link px-3 dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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
                <li class="nav-item {{ \Route::current()->getName() == 'mysite_articles' ? 'active' : '' }}">
                    <a class="nav-link dev-navbar-link px-3" href="{{ route('mysite_articles', app()->getLocale()) }}">
                        {{ trans('site.Articles') }}
                    </a>
                </li>
                <li class="nav-item {{ \Route::current()->getName() == 'mysite_contacts' ? 'active' : '' }}">
                    <a class="nav-link dev-navbar-link px-3" href="{{ route('mysite_contacts', app()->getLocale()) }}">
                        {{ trans('site.contacts') }}
                    </a>
                </li>
            </ul>
            <!--ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link hexlet-navbar-link px-3 " href="https://ru.hexlet.io/session/new"><div class="my-2">Вход</div></a></li>
                <li class="nav-item"><a class="nav-link hexlet-navbar-link px-3 " href="/u/new"><div class="my-2">Регистрация</div></a></li>
            </ul-->
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid img-container">
        <div class="container">
            <h1 class="font-development">{{ trans('site.slogan') }}</h1>
            <div class="lead bg-green"><span>{{ trans('site.slogan_descr') }}</span></div>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->

        @include('partials.flash')

        @yield('content')

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
                <div><a href="{{ route('mysite_articles', app()->getLocale()) }}" class="a-green">{{ trans('site.Articles') }}</a></div>
                <div><a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="a-green">{{ trans('site.contacts') }}</a></div>
                <div style="padding:20px 0 0 0;">
                    <h4>{{ trans('site.Lang') }}</h4>
                    <a href="{{ route('mysite_about', 'es') }}"><img src="<?=config('app.url')?>/img/flags/Spain-flag-48.png" style="width:28px;" alt="ES" title="ES" /></a> &nbsp;
                    <a href="{{ route('mysite_about', 'en') }}"><img src="<?=config('app.url')?>/img/flags/United-kingdom-flag-48.png" style="width:28px;" alt="EN" title="EN" /></a> &nbsp;
                    <a href="{{ route('mysite_about', 'ru') }}"><img src="<?=config('app.url')?>/img/flags/Russia-flag-48.png" style="width:28px;" alt="RU" title="RU" /></a> &nbsp;
                    <a href="{{ route('mysite_about', 'ch') }}"><img src="<?=config('app.url')?>/img/flags/China-flag-48.png" style="width:28px;" alt="CH" title="CH" /></a>
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
                <br/>
                <div><a href="{{ route('test-php', app()->getLocale()) }}" class="a-green">{{ trans('site.test_php') }}</a></div>
                <div><a href="{{ route('wait', app()->getLocale()) }}" class="a-green">{{ trans('wait.i_wait_you') }}</a></div>
                <div><a href="{{ route('wait2', app()->getLocale()) }}" class="a-green">{{ trans('wait.wait_for_a_date') }}</a></div>
                <div><a href="{{ route('seo_words', app()->getLocale()) }}" class="a-green">{{ trans('site.count_seo_words') }}</a></div>
                <br/>
            </div>
            <div class="col-md-12">
                <p>&copy; makklays.com.ua 2007-<?=date('Y')?></p>
            </div>
        </div>
    </div>
</footer>

<!-- modal window -->
<div class="modal fade bd-example-modal-sm" id="myInput">
    <div class="modal-dialog modal-dialog-centered modal-sm" >
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">{{ trans('site.we_call_you') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="frmSentOrder" style="display:block;" id="id_frmSentOrder" action="{{ route('call_development_post', app()->getLocale()) }}" method="post">
                    {{ csrf_field() }}
                    <!--div class="form-group">
                        <input type="text" name="fio" class="form-control" placeholder="{{ trans('site.Name') }}">
                    </div-->
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" id="id_frmSentOrder_phone" placeholder="{{ trans('site.contact_number') }}">
                    </div>
                    <div class="form-group">
                        <select name="want_development" class="form-control" id="id_want_development">
                            <option value="">-- {{ trans('site.interesting_development') }} --</option>
                            <option value="landing">{{ trans('site.m_lpage') }}</option>
                            <option value="internet-shop">{{ trans('site.m_store') }}</option>
                            <option value="corporate-site">{{ trans('site.m_corporate') }}</option>
                            <option value="webapi">{{ trans('site.m_webapi') }}</option>
                            <option value="webportal">{{ trans('site.m_webportal') }}</option>
                            <option value="site-system">{{ trans('site.m_sitesystem') }}</option>
                        </select>
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" name="soglasen" checked="checked" class="custom-control-input" id="id_soglasen" />
                        <label class="custom-control-label" for="id_soglasen">{{ trans('site.modal_rules') }}
                            <a href="{{ route('privacy-policy', app()->getLocale()) }}" class="a-green">{{ trans('site.brief_link') }}</a>.
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">{{ trans('site.Sent') }}</button>
                    </div>
                </form>
                <form name="frmResult" id="id_frmResult" style="display:none;">
                    <div class="form-group text-center">
                        <img src="<?=config('app.url')?>/img/call_success.png" alt="Wait call" title="Wait call" class="img-call rounded-circle kromka" />
                        <br/>
                        <span class="text-center">{{ trans('site.Order_successful') }}</span>
                    </div>
                    <div class="text-center">
                        <button type="button" id="id_frmResult_close" class="btn btn-success">{{ trans('site.Close') }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    // открываем модальное окно
    $('#id_order_development').on('click', function () {
        $("#id_frmSentOrder").css('display', 'block');
        $('#id_frmResult').css('display','none');
        $('#myInput').modal('show');
    });

    // закрываем модальное окно
    $('#id_frmResult_close').on('click', function() {
        $('#myInput').modal('hide');
    });

    // при клике на checkbox
    $('#id_soglasen').on('click', function(){
        $('#id_err_soglasen').remove();
    });

    // указываем фокус
    $('#id_frmSentOrder_phone').on('focus', function(){
        $(this).css('border-color', '#ced4da');
        $(this).next().remove();
        return false;
    });

    // отправляем данные из модального окна
    $("#id_frmSentOrder").submit(function() {
        event.preventDefault();
        var form = $(this);
        $.ajax({
            url: 'call-development-post',
            dataType:'json',
            data: form.serialize(),
            type: "POST",
            success: function(response) {
                if(response.success) {
                    form.css('display', 'none');
                    $('#id_frmResult').css('display','block');
                } else if(response.error) {
                    location.href = '/' + response.lang + '/black-list';
                } else if(response.errors) {
                    $.each(response.errors, function( index, value ) {
                        if (index == 'phone') {
                            $("input[name='" + index + "']").next().remove();
                            $("input[name='" + index + "']").css('border-color', 'red');
                            $("input[name='" + index + "']").parent().append('<div style="color:red; font-size:12px;">' + value[0] + '</div>');
                        }
                        if (index == 'soglasen') {
                            $('#id_err_soglasen').remove();
                            $("input[name='" + index + "']").parent().append('<div id="id_err_soglasen" style="color:red; font-size:12px;">' + value[0] + '</div>');
                        }
                    });
                }
            },
            error: function(xhr, textStatus, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
                console.log(textStatus);
            }
        });
        return false;
    });
</script>

</body>
</html>

