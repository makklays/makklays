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

    <title>{{ $seo->title }}</title>

    <meta name="description" content="{{ $seo->description }}" />
    <meta name="keywords" content="{{ $seo->keywords }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="author" content="Makklays" />

    <meta property="og:title"       content="{{ $seo->title }}" />
    <meta property="og:description" content="{{ $seo->description }}" />
    <meta property="og:type"        content="website" />
    <meta property="og:url"         content="{{ url()->current() }}" />
    <meta property="og:image"       content="<?= isset($seo->img) && !empty($seo->img) ? $seo->img : config('app.url').'/img/programmer.png' ?>" />

    <?php if (isset($seo->show_urls) && $seo->show_urls == 1): ?>
    <link rel="alternate" hreflang="ua" href="<?=$seo->request_scheme?>://<?=$seo->server_name?>/ua/<?=$seo->short_url?>" />
    <link rel="alternate" hreflang="ru" href="<?=$seo->request_scheme?>://<?=$seo->server_name?>/ru/<?=$seo->short_url?>" />
    <link rel="alternate" hreflang="es" href="<?=$seo->request_scheme?>://<?=$seo->server_name?>/es/<?=$seo->short_url?>" />
    <link rel="alternate" hreflang="zh" href="<?=$seo->request_scheme?>://<?=$seo->server_name?>/ch/<?=$seo->short_url?>" />
    <link rel="alternate" hreflang="en" href="<?=$seo->request_scheme?>://<?=$seo->server_name?>/en/<?=$seo->short_url?>" />
    <?php endif; ?>

    <link rel="shortcut icon" href="<?=config('app.url')?>/makklays.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/prism.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/bootstrap4/css/bootstrap.min.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/fontawesome5/css/all.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/jquery.fancybox.min.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/jquery-ui.css?'.time()) }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('/css/main10.css?'.time()) }}" />

    <script type="text/javascript" src='<?=config('app.url')?>/js/jquery-3.4.0.min.js'></script>
    <script type="text/javascript" src='<?=config('app.url')?>/css/bootstrap4/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='<?=config('app.url')?>/js/jquery.fancybox.min.js'></script>
    <script type="text/javascript" src="<?=config('app.url')?>/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?=config('app.url')?>/js/myapp.js"></script>
    <script type="text/javascript" src="<?=config('app.url')?>/js/prism.js" ></script>
</head>
<body>
<main role="main">

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="{{ route('mysite_about', app()->getLocale()) }}" class="block">{{ trans('site.mysite_about') }}</a>
            <a href="{{ route('mysite_howmake',  app()->getLocale()) }}" class="block">{{ trans('site.mysite_howmake') }}</a>
            <a href="{{ route('mysite_whatmake', app()->getLocale()) }}" class="block">{{ trans('site.mysite_whatmake') }}</a>
            <a href="{{ route('mysite_whatmake', app()->getLocale()) }}" onclick="javascript:show_mmovil(); return false;" class="block dropdown-toggle">{{ trans('site.Development') }}</a>
            <div id="id_mmovil" style="display: none;">
                <a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="block">{{ trans('site.m_lpage') }}</a>
                <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="block">{{ trans('site.m_corporate') }}</a>
                <a href="{{ route('mysite_store', app()->getLocale()) }}" class="block">{{ trans('site.m_store') }}</a>
                <a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="block">{{ trans('site.m_webapi') }}</a>
                <a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="block">{{ trans('site.m_sitesystem') }}</a>
                <a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="block">{{ trans('site.m_webportal') }}</a>
            </div>
            <a href="{{ route('articles', app()->getLocale()) }}" class="block">{{ trans('site.Articles') }}</a>
            <a href="{{ route('mysite_contacts',  app()->getLocale()) }}" class="block">{{ trans('site.contacts') }}</a>
            <div style="padding-bottom: 60px;">
                <?php if (\Route::current()->getName() == 'article' && $slug = request()->segment(3)): ?>
                    <a href="{{ route( \Route::current()->getName(), ['ua',$slug]) }}" class=""><img src="<?=config('app.url')?>/img/flags/ua.png" class="mlimg" alt="UA" title="UA" /></a>
                    <a href="{{ route( \Route::current()->getName(), ['es',$slug]) }}" class=""><img src="<?=config('app.url')?>/img/flags/es.png" class="mlimg" alt="ES" title="ES" /></a>
                    <a href="{{ route( \Route::current()->getName(), ['en',$slug]) }}" class=""><img src="<?=config('app.url')?>/img/flags/en.png" class="mlimg" alt="EN" title="EN" /></a>
                    <a href="{{ route( \Route::current()->getName(), ['ru',$slug]) }}" class=""><img src="<?=config('app.url')?>/img/flags/ru.png" class="mlimg" alt="RU" title="RU" /></a>
                    <a href="{{ route( \Route::current()->getName(), ['ch',$slug]) }}" class=""><img src="<?=config('app.url')?>/img/flags/ch.png" class="mlimg" alt="CH" title="CH" /></a>
                <?php else: ?>
                    <a href="{{ route( \Route::current()->getName(), 'ua') }}" class=""><img src="<?=config('app.url')?>/img/flags/ua.png" class="mlimg" alt="UA" title="UA" /></a>
                    <a href="{{ route( \Route::current()->getName(), 'es') }}" class=""><img src="<?=config('app.url')?>/img/flags/es.png" class="mlimg" alt="ES" title="ES" /></a>
                    <a href="{{ route( \Route::current()->getName(), 'en') }}" class=""><img src="<?=config('app.url')?>/img/flags/en.png" class="mlimg" alt="EN" title="EN" /></a>
                    <a href="{{ route( \Route::current()->getName(), 'ru') }}" class=""><img src="<?=config('app.url')?>/img/flags/ru.png" class="mlimg" alt="RU" title="RU" /></a>
                    <a href="{{ route( \Route::current()->getName(), 'ch') }}" class=""><img src="<?=config('app.url')?>/img/flags/ch.png" class="mlimg" alt="CH" title="CH" /></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand fixed-top">
        <a class="navbar-brand" href="{{ route('/', app()->getLocale()) }}" style="font-size:21px;">
            <img src="<?=config('app.url')?>/makklays.png" height="30" class="d-inline-block align-top" alt="">
            Makklays
        </a>
        <span class="mob_menu_text" style="color:#FFF;">
            <a href="tel:+380988705397" style="color:#FFF; padding-right:20px; text-decoration:none;">+380 98 8705397</a>
            <a href="mailto:office@makklays.com" style="color:#FFF; text-decoration:none;">office@makklays.com</a>
        </span>
        <div class="mob_menu" onclick="openNav();">
            <div></div>
            <div></div>
            <div></div>
        </div>

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
                        <a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="dropdown-item green-bk">{{ trans('site.m_lpage') }}</a>
                        <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="dropdown-item green-bk">{{ trans('site.m_corporate') }}</a>
                        <a href="{{ route('mysite_store', app()->getLocale()) }}" class="dropdown-item green-bk">{{ trans('site.m_store') }}</a>
                        <a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="dropdown-item green-bk">{{ trans('site.m_webapi') }}</a>
                        <a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="dropdown-item green-bk">{{ trans('site.m_sitesystem') }}</a>
                        <a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="dropdown-item green-bk">{{ trans('site.m_webportal') }}</a>
                    </div>
                </li>
                <li class="nav-item {{ in_array(\Route::current()->getName(), ['articles','article']) ? 'active' : '' }}">
                    <a class="nav-link dev-navbar-link px-3" href="{{ route('articles', app()->getLocale()) }}">
                        {{ trans('site.Articles') }}
                    </a>
                </li>
                <li class="nav-item {{ \Route::current()->getName() == 'mysite_contacts' ? 'active' : '' }}">
                    <a class="nav-link dev-navbar-link px-3" href="{{ route('mysite_contacts', app()->getLocale()) }}">
                        {{ trans('site.contacts') }}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?=config('app.url')?>/img/flags/{{ app()->getLocale() }}.png" style="width:21px;" alt="UA" title="UA" />
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width:70px !important; min-width:10px;">
                        <?php if (\Route::current()->getName() == 'article' && $slug = request()->segment(3)): ?>
                            <a href="{{ route( \Route::current()->getName(), ['ua',$slug]) }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/ua.png" class="mlimg" alt="UA" title="UA" /></a>
                            <a href="{{ route( \Route::current()->getName(), ['es',$slug]) }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/es.png" class="mlimg" alt="ES" title="ES" /></a>
                            <a href="{{ route( \Route::current()->getName(), ['en',$slug]) }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/en.png" class="mlimg" alt="EN" title="EN" /></a>
                            <a href="{{ route( \Route::current()->getName(), ['ru',$slug]) }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/ru.png" class="mlimg" alt="RU" title="RU" /></a>
                            <a href="{{ route( \Route::current()->getName(), ['ch',$slug]) }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/ch.png" class="mlimg" alt="CH" title="CH" /></a>
                        <?php else: ?>
                            <a href="{{ route( \Route::current()->getName(), 'ua') }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/ua.png" class="mlimg" alt="UA" title="UA" /></a>
                            <a href="{{ route( \Route::current()->getName(), 'es') }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/es.png" class="mlimg" alt="ES" title="ES" /></a>
                            <a href="{{ route( \Route::current()->getName(), 'en') }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/en.png" class="mlimg" alt="EN" title="EN" /></a>
                            <a href="{{ route( \Route::current()->getName(), 'ru') }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/ru.png" class="mlimg" alt="RU" title="RU" /></a>
                            <a href="{{ route( \Route::current()->getName(), 'ch') }}" class="dropdown-item green-bk"><img src="<?=config('app.url')?>/img/flags/ch.png" class="mlimg" alt="CH" title="CH" /></a>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
            <span class="navbar-text" style="color:#FFF; margin-left: 20px;">
                <a href="tel:+380988705397" style="color:#FFF; padding-right:20px; text-decoration:none;">+380 98 8705397</a>
                <a href="mailto:office@makklays.com" style="color:#FFF; text-decoration:none;">office@makklays.com</a>
            </span>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid img-container" style="margin-top:56px;">
        <div class="container">
            <h1 class="font-development">{{ trans('site.slogan') }}</h1>
            <div class="lead bg-green"><span>{{ trans('site.slogan_descr') }}</span></div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 90px;">
        @include('partials.flash')
        @yield('content')
    </div>
</main>

<footer style="background-color:#e7e7e7; margin-top:90px;">
    <div class="container">
        <div class="row" style="padding:40px 0 0 0;">
            <div class="col-md-4 col-sm-6 col-12">
                <h4>{{ trans('site.Team') }}</h4>
                <div><a href="{{ route('mysite_about', app()->getLocale()) }}" class="a-green">{{ trans('site.mysite_about') }}</a></div>
                <div><a href="{{ route('mysite_howmake', app()->getLocale()) }}" class="a-green">{{ trans('site.mysite_howmake') }}</a></div>
                <div><a href="{{ route('mysite_whatmake', app()->getLocale()) }}" class="a-green">{{ trans('site.mysite_whatmake') }}</a></div>
                <div><a href="{{ route('articles', app()->getLocale()) }}" class="a-green">{{ trans('site.Articles') }}</a></div>
                <div><a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="a-green">{{ trans('site.contacts') }}</a></div>
                <div style="padding:20px 0 0 0;">
                    <h4>{{ trans('site.Lang') }}</h4>
                    <a href="{{ route('/', 'ua') }}"><img src="<?=config('app.url')?>/img/flags/ukraine-flag.png" style="width:28px;" alt="UA" title="UA" /></a>  &nbsp;
                    <a href="{{ route('/', 'es') }}"><img src="<?=config('app.url')?>/img/flags/Spain-flag-48.png" style="width:28px;" alt="ES" title="ES" /></a> &nbsp;
                    <a href="{{ route('/', 'en') }}"><img src="<?=config('app.url')?>/img/flags/United-kingdom-flag-48.png" style="width:28px;" alt="EN" title="EN" /></a> &nbsp;
                    <a href="{{ route('/', 'ru') }}"><img src="<?=config('app.url')?>/img/flags/Russia-flag-48.png" style="width:28px;" alt="RU" title="RU" /></a> &nbsp;
                    <a href="{{ route('/', 'ch') }}"><img src="<?=config('app.url')?>/img/flags/China-flag-48.png" style="width:28px;" alt="CH" title="CH" /></a>
                </div>
                <br/>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <h4>{{ trans('site.Development') }}</h4>
                <div><a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="a-green">{{ trans('site.m_lpage') }}</a></div>
                <div><a href="{{ route('mysite_store', app()->getLocale()) }}" class="a-green">{{ trans('site.m_store') }}</a></div>
                <div><a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="a-green">{{ trans('site.m_corporate') }}</a></div>
                <div><a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="a-green">{{ trans('site.m_webapi') }}</a></div>
                <div><a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="a-green">{{ trans('site.m_webportal') }}</a></div>
                <div><a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="a-green">{{ trans('site.m_sitesystem') }}</a></div>
                <div style="padding:20px 0 0 0;">
                    <a href="https://www.youtube.com/channel/UCTnzcnfJ9LWjibVcq2wigtw" style="color:#FFFFFF; text-decoration:none;" target="_blank" >
                        <img src="<?=config('app.url')?>/img/youtube-icon.png" style="width:25px;" alt="Youtube" />
                    </a> &nbsp;
                    <a href="https://www.facebook.com/makklays/" style="color:#FFFFFF; text-decoration:none;" target="_blank" >
                        <img src="<?=config('app.url')?>/img/fb-icon.png" style="width:25px;" alt="Facebook" />
                    </a> &nbsp;
                    <a href="https://www.linkedin.com/company/makklays/" style="color:#FFFFFF; text-decoration:none;" target="_blank" >
                        <img src="<?=config('app.url')?>/img/linkedin-icon.png" style="width:25px;" alt="Linkedin" />
                    </a>
                </div>
                <br/>
            </div>
            <div class="col-md-4">
                <h4>{{ trans('site.Pricee') }}</h4>
                <div><a href="{{ route('mysite_download_price', app()->getLocale()) }}" class="a-green">{{ trans('site.mysite_download_price') }}</a></div>
                <div><a href="{{ route('mysite_online_brief', app()->getLocale()) }}" class="a-green">{{ trans('site.m_brief_online') }}</a></div>
                <div><a href="{{ route('mysite_brief', app()->getLocale()) }}" class="a-green">{{ trans('site.m_download_brief_develop') }}</a></div>
                <br/>
                <div><a href="{{ route('test-php', app()->getLocale()) }}" class="a-green">{{ trans('site.test_php') }}</a></div>
                <div><a href="{{ route('wait', app()->getLocale()) }}" class="a-green">{{ trans('wait.i_wait_you') }}</a></div>
                <div><a href="{{ route('wait2', app()->getLocale()) }}" class="a-green">{{ trans('wait.wait_for_a_date') }}</a></div>
                <div><a href="{{ route('seo_words', app()->getLocale()) }}" class="a-green">{{ trans('site.count_seo_words') }}</a></div>
                <div><a href="<?=config('app.url')?>/sitemap.xml" class="a-green">Sitemap</a></div>
                <br/>
            </div>
            <div class="col-md-12">
                <p>&copy; makklays.com 2007-<?=date('Y')?></p>
            </div>
        </div>
    </div>
</footer>

<div style="margin: auto; overflow: hidden;">
    <a id="toTop" href="javascript:;" style="display: inline;">
        <span id="toTopHover"></span>
        <img alt="To Top" src="/img/to-top.png" width="50" height="50">
    </a>
</div>


<!-- modal window -->
<div class="modal fade bd-example-modal-sm" id="myInput">
    <div class="modal-dialog modal-dialog-centered modal-sm" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-phone"></i> {{ trans('site.we_call_you') }}</h5>
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

</body>
</html>
