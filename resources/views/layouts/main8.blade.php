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
            <!--div class="col-md-12">
                <h2>Кто мы?</h2> <br/>
            </div-->
            <div class="col-md-7">
                <h2>Кто мы?</h2> <br/>
                <p>
                    Makklays - команда, которая профессионально занимается компьютерным программированием сайтов с 2007 года. <br/>
                    Успешно разработали и запрограммировали много корпоративных сайтов, интернет-магазинов для среднего бизнеса, и сложных порталов для банков. <br/><br/>
                    Разработка сайта не является конечной целью. Это лишь инструмент, который должен помогать развитию бизнеса заказчика. <br/>
                    Каждый наш специалист имеет более 10 лет опыта в своей сфере. <br/>
                    Мы любим жить и любим жизнь. <br/><br/>
                    Makklays любит новые знания, большие, и нестандартные, и тем интеренсые для нас проекты.
                </p>
            </div>
            <div class="col-md-5">
                <img src="/img/team.png" class="img-fluid" alt="." title="команда разработки сайтов makklays" />
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <h2>Что мы делаем?</h2> <br/>
            </div>
        </div>

        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm">
                <div>
                    <img src="/img/icon-lpage.png" alt="." title="" style="width:100px; height:100px;" />
                </div>
                <h5><a href="">Лендинг пейдж</a></h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm">
                <div>
                    <img src="/img/icon-lpage.png" alt="." title="" style="width:100px; height:100px;" />
                </div>
                <h5><a href="">Корпоративный сайт</a></h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm">
                <div>
                    <img src="/img/icon-lpage.png" alt="." title="" style="width:100px; height:100px;" />
                </div>
                <h5>Веб сервис и API для моб.</h5>
            </div>
        </div>
        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm">
                <div>
                    <img src="/img/icon-lpage.png" alt="." title="" style="width:100px; height:100px;" />
                </div>
                <h5>Веб-портал</h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm">
                <div>
                    <img src="/img/icon-lpage.png" alt="." title="" style="width:100px; height:100px;" />
                </div>
                <h5>Сайт-система</h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm">
                <div>
                    <img src="/img/icon-lpage.png" alt="." title="" style="width:100px; height:100px;" />
                </div>
                <h5>Интернет-магазин</h5>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-5">
                <img src="/img/making.png" class="img-fluid" alt="." title="команда разработки сайтов makklays" />
            </div>
            <div class="col-md-7">
                <h2>Как мы работаем?</h2> <br/>
                <p class="text-justify">
                    Используем передовые технологии. Facebook, Amazon - все эти платформы написаны на языке программирования
                    PHP с самыми прочными стандартами безопастности и стабильностью кода. <br/>
                    Мы выбрали этот язык и его фреймворки Yii2, Laravel, когда они ещё не ворвались в ТОП самых используемых на планете.<br/>
                    Это позволяет нам разрабатывать в Makklays уникальное предложение для Вас и быть гибким в реализации Ваших необычных пожеланий.
                </p>
                <p>
                    <strong>Разработка состоит из нескольких этапов:</strong><br/>
                    - постановка задачи; <br/>
                    - подготовка технического задания и заключение договора с клиентом; <br/>
                    - разработка макета, согласование с заказчиком; <br/>
                    - верстка шаблона, установка системы управления сайтом, настройка хостинга, демо сайта; <br/>
                    - разработка необходимого функционала, тестирование; <br/>
                    - наполнение контентом; <br/>
                    - закрытие заказа после принятия клиентом;
                </p>
            </div>
        </div>

        <hr/>

        <div class="card-deck mb-3 text-center">
            <div class="col-md-12 text-left">
                <h2>Наши цены</h2> <br/>
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

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <h2>Статьи</h2> <br/>
            </div>
            <div class="col-md-4">
                <h4>A что такое сайт? Какие бывают?</h4>
                <p>Сайт – это ресурс, состоящий из веб-страниц (документов), объединенных общей темой и взаимосвязанных между собой с помощью ссылок. Сайт регистрируется на одно физическое, либо юридическое лицо и обязательно привязывается к домену.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h4>Программисты - строили дома :)</h4>
                <p>1.03. Ура! Нам предложили крупный контракт на постройку 12-этажного жилого дома. У всех бурный энтузиазм. Выпили на радостях 2 ящика пива. <br/>2.03. Заказчику не нравится выражение "как только, так сразу". Требует назвать конкретные сроки.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h4>Как выбрать разработчика?</h4>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
        </div>

        <hr>

        <!-- @yield('content') -->

    </div> <!-- /container -->

</main>

<footer class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>Команда</h4>
            <div><a href="{{ route('mysite_about', app()->getLocale()) }}" class="a-green">О нас</a></div>
            <div><a href="{{ route('mysite_howmake', app()->getLocale()) }}" class="a-green">Как мы работаем?</a></div>
            <div><a href="{{ route('mysite_howmake', app()->getLocale()) }}" class="a-green">Что мы делаем?</a></div>
            <div><a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="a-green">Контакты</a></div>
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
            <div><a href="{{ route('mysite_brief', app()->getLocale()) }}" class="a-green">Скачать бриф на разработку</a></div>
            <div><a href="{{ route('mysite_brief', app()->getLocale()) }}" class="a-green">Заполнить бриф онлайн</a></div>
            <div><a href="{{ route('feedback', app()->getLocale()) }}" class="a-green">Заказать консультацию</a></div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <p>&copy; makklays.com.ua 2019-<?=date('Y')?></p>
</footer>

</body>
</html>

