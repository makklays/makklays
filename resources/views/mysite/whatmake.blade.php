@extends('layouts.main8')

@section('content')

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br/><h1 class="text-center text-design2">{{ trans('site.mysite_whatmake') }}</h1> <br/>
            </div>

            <div class="col-md-12">
                <p class="text-left">
                    {{ trans('site.whatmake1') }} <br/>
                    <!--{{ trans('site.whatmake2') }} <br/>--><br/>
                </p>
            </div>

            <!--div class="col-md-3">
                <img src="<?=config('app.url')?>/img/makklays.png" alt="." title="" class="img-fluid kromka" /> <br/><br/>
            </div-->

            <!--div class="rounded my-2 py-3 py-md-4 px-3 pr-xl-4 shadow-sm x-shadow-fade-in position-relative overflow-hidden">
                <div class="row align-items-lg-center">
                    <div class="col-6 col-sm-2 mb-3 mb-sm-0">
                        <div class="display-3 font-weight-bold text-sm-center text-black-50">1</div>
                    </div>
                    <div class="col-sm-7 col-lg-8 col-xl-7 pt-md-2 pt-lg-0 order-1 order-sm-0">
                        <div class="mb-3">
                            <h3 class="d-inline align-middle mr-2">PHP: Основы</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 lead">12 уроков</div>
                            <div class="col-lg-3 lead">25 вопросов</div>
                            <div class="col-lg-4 lead">14 упражнений</div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-2 col-xl-3"></div>
                </div>
            </div-->

        </div>

        <div class="row">
            <div class="col-md-12">
                <br/><h1 class="text-center text-design2">{{ trans('site.Development') }}</h1> <br/>
            </div>
        </div>

        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/lpage_.png" alt="Makklays - {{ trans('site.m_lpage') }} image 1" title="{{ trans('site.m_lpage') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_lpage') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/corporate_.png" alt="Makklays - {{ trans('site.m_corporate') }} image 2" title="{{ trans('site.m_corporate') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_corporate') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/api_.png" alt="Makklays - {{ trans('site.m_webapi') }} image 3" title="{{ trans('site.m_webapi') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_webapi') }}</h2>
                </a>
            </div>
        </div>
        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in" >
                <a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/web_portal2.png" alt="Makklays - {{ trans('site.m_webportal') }} image 4" title="{{ trans('site.m_webportal') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_webportal') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm" >
                <a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/sysite.png" alt="Makklays - {{ trans('site.m_sitesystem') }} image 5" title="{{ trans('site.m_sitesystem') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_sitesystem') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in" >
                <a href="{{ route('mysite_store', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/store2.png" alt="Makklays - {{ trans('site.m_store') }} image 6" title="{{ trans('site.m_store') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_store') }}</h2>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.technologies') }}</h1>
                <p class="text-center">{{ trans('site.use_technologies') }}</p>
            </div>
        </div>
        <!-- листалка технологий -->
        <div class="d-flex justify-content-center flex-wrap mt-5">
            <div class="carousel slide py-4 col-12 col-md-9 col-lg-7" data-interval="false" data-ride="carousel" id="our_technologies">
                <div class="carousel-inner px-lg-3">
                    <div class="carousel-item active">
                        <div class="row slide justify-content-center">
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Composer" src="<?=config('app.url')?>/img/composer.png">
                                    <p class="text-muted mt-3">Composer</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="PHP" src="<?=config('app.url')?>/img/php.png">
                                    <p class="text-muted mt-3">PHP</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="MySQL" src="<?=config('app.url')?>/img/mysql.png">
                                    <p class="text-muted mt-3">MySQL</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="PostgreSQL" src="<?=config('app.url')?>/img/postgre_sql.png">
                                    <p class="text-muted mt-3">PostgreSQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slide justify-content-center">
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="HTML5" src="<?=config('app.url')?>/img/site/html5.png">
                                    <p class="text-muted mt-3">HTML5</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="CSS3" src="<?=config('app.url')?>/img/site/css3.png">
                                    <p class="text-muted mt-3">CSS3</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="jQuery" src="<?=config('app.url')?>/img/jquery.png">
                                    <p class="text-muted mt-3">jQuery</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Vue.js" src="<?=config('app.url')?>/img/vue_js.png">
                                    <p class="text-muted mt-3">Vue.js</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slide justify-content-center">
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Slim" src="<?=config('app.url')?>/img/slim.png">
                                    <p class="text-muted mt-3">Slim</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Laravel" src="<?=config('app.url')?>/img/laravel_.png">
                                    <p class="text-muted mt-3">Laravel</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Yii2" src="<?=config('app.url')?>/img/site/Yii2.png">
                                    <p class="text-muted mt-3">Yii2</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Lumen" src="<?=config('app.url')?>/img/lumen.png">
                                    <p class="text-muted mt-3">Lumen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slide justify-content-center">
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Jira" src="<?=config('app.url')?>/img/jira.png">
                                    <p class="text-muted mt-3">Jira</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Github" src="<?=config('app.url')?>/img/github.png">
                                    <p class="text-muted mt-3">GitHub</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Git" src="<?=config('app.url')?>/img/git.png">
                                    <p class="text-muted mt-3">Git</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slide justify-content-center">
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Linux" src="<?=config('app.url')?>/img/linux.png">
                                    <p class="text-muted mt-3">Linux</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Ubuntu" src="<?=config('app.url')?>/img/site/ubuntu.png">
                                    <p class="text-muted mt-3">Ubuntu</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Microsoft" src="<?=config('app.url')?>/img/microsoft.png">
                                    <p class="text-muted mt-3">Microsoft</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="my-3 text-center">
                                    <img height="65" alt="Bash" src="<?=config('app.url')?>/img/bash.png">
                                    <p class="text-muted mt-3">Bash</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#our_technologies" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" data-slide="next" href="#our_technologies" role="button">
                    <span aria-hidden="true" class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.feedbacks') }}</h1>
                <p class="text-center">{{ trans('site.our_clients_speak') }}</p>
            </div>
        </div>

        <!-- листалка -->
        <!--div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/111.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/222.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/333.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div-->
        <div class="carousel slide py-4" data-interval="false" data-ride="carousel" id="successStories">
            <ol class="carousel-indicators">
                <li class="" data-slide-to="0" data-target="#successStories"></li>
                <li data-slide-to="1" data-target="#successStories" class="active"></li>
                <li data-slide-to="2" data-target="#successStories"></li>
            </ol>
            <div class="carousel-inner pb-4">
                <span class="x-link-without-decoration carousel-item" href="/blog/posts/moy-put-i-rol-hexlet-v-moyom-razvitii">
                    <div class="row slide justify-content-center">
                        <div class="col-12 col-md-10 col-lg-2 d-flex align-items-center d-lg-block mb-5">
                            <div class="mb-lg-4">
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя" src="<?=config('app.url')?>/img/foto3.jpg">
                            </div>
                            <div class="ml-4 ml-lg-0">
                                <div class="h3 font-weight-bold">Kirill Zakimov</div>
                                <div class="h5 mb-0 font-italic">{{ trans('site.review1_city') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <p class="lead text-justify">«{{ trans('site.review3') }}»</p>
                        </div>
                    </div>
                </span>
                <span class="x-link-without-decoration carousel-item active" href="/blog/posts/kak-ya-stal-programmistom-v-33-goda">
                    <div class="row slide justify-content-center">
                        <div class="col-12 col-md-10 col-lg-2 d-flex align-items-center d-lg-block mb-5">
                            <div class="mb-lg-4">
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя" src="<?=config('app.url')?>/img/foto.jpg">
                            </div>
                            <div class="ml-4 ml-lg-0">
                                <div class="h3 font-weight-bold">Valeriy Zadavysvichka</div>
                                <div class="h5 mb-0 font-italic">{{ trans('site.review1_city') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <p class="lead text-justify">«{{ trans('site.review1') }}»</p>
                        </div>
                    </div>
                </span>
                <span class="x-link-without-decoration carousel-item" href="/blog/posts/feycot-success-story">
                    <div class="row slide justify-content-center">
                        <div class="col-12 col-md-10 col-lg-2 d-flex align-items-center d-lg-block mb-5">
                            <div class="mb-lg-4">
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя" src="<?=config('app.url')?>/img/foto2.jpg">
                            </div>
                            <div class="ml-4 ml-lg-0">
                                <div class="h3 font-weight-bold">Katy Antonenko</div>
                                <div class="h5 mb-0 font-italic">{{ trans('site.review2_city') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <p class="lead text-justify">«{{ trans('site.review2') }}»</p>
                        </div>
                    </div>
                </span>
            </div>
            <a class="carousel-control-prev x-link-without-decoration d-none d-md-flex" data-slide="prev" href="#successStories" role="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next x-link-without-decoration d-none d-md-flex" data-slide="next" href="#successStories" role="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Вопросы и ответы -->
        <!--
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.questions_answers') }}</h2> <br/>
            </div>
        </div>
        <div class="row pt-md-4 px-xl-5">
            <div class="col-12 col-md-6 col-lg-5 mx-lg-auto">
                <div class="mb-5">
                    <h3 class="h4 mb-3 font-weight-bold">Сколько стоит обучение?</h3>
                    <p>
                        Обучение на Хекслете стоит $39 в месяц или $390 в год. Длительность обучения зависит от вас — вы можете пройти все курсы за месяц, а можете проходить их в течение года.
                        <a href="/pricing">Узнать подробнее о ценах и условиях</a>.
                    </p>
                </div>
                <div class="mb-5">
                    <h3 class="h4 mb-3 font-weight-bold">Можно ли подарить доступ к Хекслету другу?</h3>
                    <p>
                        Да! Вы можете
                        <a href="/gift">купить доступ в подарок</a>,
                        и ваш друг получит его по почте.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 mx-lg-auto">
                <div class="mb-5">
                    <h3 class="h4 mb-3 font-weight-bold">Какое расписание у занятий?</h3>
                    <p>
                        У курсов нет расписаний, все уроки доступны 24 часа в сутки, и вы можете заниматься в удобное для вас время.
                    </p>
                </div>
                <div class="mb-5">
                    <h3 class="h4 mb-3 font-weight-bold">Есть ли тарифы для компаний?</h3>
                    <p>
                        Да! С отчётами, статистикой и простым биллингом.
                        <a href="/teams">Узнать подробнее о корпоративном доступе</a>.
                    </p>
                </div>
                <div class="mb-5">
                    <h3 class="h4 mb-3 font-weight-bold">У меня есть другой вопрос</h3>
                    <p>
                        Пишите нам на
                        <a rel="nofollow" href="mailto:support@hexlet.io">support@hexlet.io</a>,
                        вам ответит живой человек из команды Хекслета.
                        Или нажмите на иконку со знаком вопроса в правом нижнем углу экрана. Там есть ответы и на другие вопросы и удобная форма для отправки сообщения нам.
                    </p>
                </div>
            </div>
        </div>
        -->

    </div>

    <div class="container">

@endsection
