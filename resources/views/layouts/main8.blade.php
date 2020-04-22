<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/img/dog.jpg" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" >

    <!-- Fonts -->
    <!--link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"-->

    <!--link rel="stylesheet" type="text/css" media="all" href="https://laravel.ru/all.css" -->
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/all.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/main8.css" >

    <!-- datatables css -->
    <!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/-->

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/css/bootstrap4/js/bootstrap.min.js'></script>

    <!-- datatables js -->
    <!--script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script-->

    <script type="text/javascript" src="/js/myapp.js"></script>

</head>
<body>
<main role="main">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="height:150px; padding:25px 0; ">
                <a href="{{ route('/', app()->getLocale()) }}">
                    <img src="/favicon_t.png" alt="" style="width:120px;" title="" />
                </a>
            </div>
        </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Разработка для жизни!</h1>
            <br/><br/><br/>
            <!--p>Разрабатываем сайты, интернет-магазины, корпоративные и сложные системы сайты.</p-->
            <p><a class="btn btn-success btn-lg" href="{{ route('feedback', app()->getLocale()) }}" role="button">Заказать разработку &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-12">
                <h2>makklays команда</h2>
                <p>ведётся поиск)</p>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <h2>makklays разработка</h2>
                <p>ведётся поиск)</p>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-4">
                <h2>A что такое сайт? Какие бывают?</h2>
                <p>Сайт – это ресурс, состоящий из веб-страниц (документов), объединенных общей темой и взаимосвязанных между собой с помощью ссылок. Сайт регистрируется на одно физическое, либо юридическое лицо и обязательно привязывается к домену.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Программисты - строили дома :)</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Как выбрать разработчика?</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
        </div>

        <hr/>

        <div class="card-deck mb-3 text-center">
            <div class="col-md-12 text-left">
                <h2>makklays цены</h2>
                <br/>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Корпоративный сайт</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">от 25 000грн<small class="text-muted"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Интернет-магазин</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">от 50 000грн<small class="text-muted"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Сайт-система</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">от 75 000грн<small class="text-muted"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
            </div>
        </div>

        <!--div class="row">
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div-->

        <hr>

        <!-- @yield('content') -->

    </div> <!-- /container -->

</main>

<footer class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>Команда</h4>
            <div><a href="" class="a-green">О нас</a></div>
            <div><a href="" class="a-green">Как мы работаем?</a></div>
            <div><a href="" class="a-green">Контакты</a></div>
        </div>
        <div class="col-md-4">
            <h4>Разработка</h4>
            <div><a href="" class="a-green">Сайт визитка</a></div>
            <div><a href="" class="a-green">Интернет магазин</a></div>
            <div><a href="" class="a-green">Корпоративный сайт</a></div>
            <div><a href="" class="a-green">Сложный сайт система</a></div>
            <div><a href="" class="a-green">Web-портал</a></div>
            <div><a href="" class="a-green">CRM система</a></div>
        </div>
        <div class="col-md-4">
            <h4>Полезно</h4>
            <div><a href="" class="a-green">Скачать бриф на разработку</a></div>
            <div><a href="" class="a-green">Заполнить бриф онлайн</a></div>
            <div><a href="" class="a-green">Заказать консультацию</a></div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <p>&copy; makklays.com.ua 2019-<?=date('Y')?></p>
</footer>

</body>
</html>

