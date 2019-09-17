<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays | Developing</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays Developing" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/img/PHP-logo.png" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link href="/css/bootstrap4/css/bootstrap.css" rel="stylesheet" />
    <link href="/css/mysite.css" rel="stylesheet" />

    <script src="/js/jquery-3.4.0.min.js"></script>
    <!-- script src="/js/myapp.js"></script -->
</head>
<body>

<div class="wrap">
    <div class="section1">
        <div>
            <a href="/"><img src="/img/makklays.png" /></a>
        </div>
        <h1>{{ trans('site.header_mysite') }}</h1>
        <form action="{{ route('feedback') }}">
            <button class="btn btn-success btn-lg" >{{ trans('site.free_consultation') }}</button>
        </form>
    </div>

    <div class="section3">
        <div class="row">
            <div class="col-12 col-sm-7 col-md-6">
                <div style="padding:180px 0;">
                    <h1>{{ trans('site.what_am_i_do') }}</h1>
                </div>
            </div>
            <div class="col-12 col-sm-7 col-md-6">
                <div class="text-left" style="font-size:20px; margin: 80px 20px 80px 0px;">
                    <div style="padding:0 0 20px 0; font-size:26px;">{{ trans('site.uslugi') }}:</div>
                    <div>1. {{ trans('site.1_service') }}</div>
                    <div>2. {{ trans('site.2_service') }}</div>
                    <div>3. {{ trans('site.3_service') }}</div>
                    <div>4. {{ trans('site.4_service') }}</div>
                    <div>5. {{ trans('site.5_service') }}</div>
                    <div>6. {{ trans('site.6_service') }}</div>
                    <div>7. {{ trans('site.7_service') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="section2">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_left_1">
                    <img src="/img/site/devices.png" alt="img" title="img" />
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_right_1">
                    <h3 class="h3">{{ trans('site.serv_prog') }}</h3>
                    <form action="/order/site" >
                        <button class="btn btn-success btn-lg" style="margin:20px 0 0 0;" >{{ trans('site.details') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="row">
            <div class="col-12 col-sm-7 col-md-6">
                <div class="divef_left_2">
                    <h3 id="id-section3-h3" class="h3">{{ trans('site.serv_shop') }}</h3>
                    <form action="/order/shop" >
                        <button class="btn btn-success btn-lg" style="margin:20px 0 0 0;" >{{ trans('site.details') }}</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-5 col-md-6">
                <div class="divef_right_2">
                    <img src="/img/site/present.png" alt="img" title="img" />
                </div>
            </div>
        </div>
    </div>

    <div class="section8">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_left_5">
                    <img src="/img/site/crm2.png" alt="img" title="img" />
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_right_5">
                    <h3 class="h3">{{ trans('site.serv_crms') }}</h3>
                    <form action="/order/crm" >
                        <button class="btn btn-success btn-lg" style="margin:20px 0 0 0;" >{{ trans('site.details') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section6">
        <div class="row parallax">
            <div class="col-6 col-sm-6 col-md-6" style="height: 300px;">
                <!--
                <div style="margin:40px 0 40px 20px; padding:20px 0 20px 0; border-radius:0px; background-color: #FFFFFF;">
                    <h3>Есть вопросы?</h3>
                    <div class="text-left" style="margin:0 0 0 120px;">
                        <div style="color: grey;">- Вас интересует цена, стоимость услуги;</div>
                        <div style="color: grey;">- Сроки выполнение;</div>
                    </div>
                    <button class="btn btn-success btn-lg" style="margin:20px;">Спросить</button>
                </div>
                -->
            </div>
            <div class="col-12 col-sm-6 col-md-6">

                <div style="margin:40px 20px 40px 0; padding:20px 0 20px 0;  border-radius:0px; background-color: #FFFFFF;">
                    <h3>{{ trans('site.keywords') }}:</h3>
                    <div class="text-justify" style="margin:0 40px 0 40px;">
                        <div class="keyword">Apache</div> <div class="keyword">API</div>
                        <div class="keyword">Bootstrap</div> <span class="keyword">CSS3</span>
                        <span class="keyword">ElasticSearch</span> <span class="keyword">GitHub</span>
                        <span class="keyword">HTML5</span> <span class="keyword">Javascript</span>
                        <span class="keyword">Jira</span> <span class="keyword">jQuery</span>
                        <span class="keyword">JSON</span> <span class="keyword">Laravel</span>
                        <span class="keyword">Moodle</span> <span class="keyword">MVC</span>
                        <span class="keyword">MySQL</span> <span class="keyword">OOP</span>
                        <span class="keyword">PHP</span> <span class="keyword">ProZorro API</span>
                        <span class="keyword">REST API</span> <span class="keyword">Scrum</span>
                        <span class="keyword">S.O.L.I.D.</span> <span class="keyword">YAGNI</span>
                        <span class="keyword">Yii2</span> <span class="keyword">Docker</span>
                        <span class="keyword">Git</span> <span class="keyword">GitLab</span>
                        <span class="keyword">Jenkins</span> <span class="keyword">LDAP</span>
                        <span class="keyword">MailChimp</span> <span class="keyword">MariaDB</span>
                        <span class="keyword">Nginx</span> <span class="keyword">ORM</span>
                        <span class="keyword">PHPUnit</span> <span class="keyword">PostgreSQL</span>
                        <span class="keyword">Ubuntu</span> <span class="keyword">C#</span>
                        <span class="keyword">GoogleMap API</span> <span class="keyword">Entity Framework 6</span>
                        <span class="keyword">LINQ</span> <span class="keyword">UWP</span>
                        <span class="keyword">Vue.js</span> <div style="clear:both;"></div>
                    </div>
                    <!--
                    <div class="text-left" style="margin:0 40px 0 40px;">
                        <div class="text-justify">
                            Да, сделать можно всё, что Вы хотите. Называйте сроки и суммы, я их скорректирую. <br/><br/>
                            Имею больше 12 лет опыта разработки на PHP и смежных технологиях для ВЕБа. <br/>
                            За этот период были запрограммированы и разработамы десятки сайтов. <br/>
                        </div>
                    </div-->
                </div>

            </div>
        </div>
    </div>

    <div class="section5">
        <div class="row" >
            <div class="col-12 col-sm-12 col-md-12">
                <h2 class="h2">{{ trans('site.uses') }}</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 colimg" >
                <img src="/img/site/php.png" alt="img" title="php" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 colimg" >
                <img src="/img/site/mysql.png" alt="img" title="MySQL" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 colimg">
                <img src="/img/site/mariadb-logo.png" alt="img" title="PostgreSQL" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 colimg">
                <img src="/img/site/yii2_.png" alt="img" title="Yii2" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 colimg">
                <img src="/img/site/laravel.png" alt="img" title="Laravel" />
            </div>
            <!--<div class="col-md-2">
                <img src="/img/site/pascal.png" alt="img" title="img" style="" />
            </div>-->
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 colimg">
                <img src="/img/site/git.png" alt="img" title="Git" style="margin-top:18px;" />
            </div>
        </div>
        <div class="row otstup">
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/jquery.png" alt="img" title="jQuery" style="margin-top:30px;" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/vuejs.png" alt="img" title="Vue.js" style="margin-top:12px;" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/html5.png" alt="img" title="HTML5" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/css3.png" alt="img" title="CCS3" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/ubuntu.png" alt="img" title="Ubuntu" style="width:100px;" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 cilomg">
                <img src="/img/site/microsoft__.png" alt="img" title="Microsoft" />
            </div>
        </div>
    </div>
    <div class="section7">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h2 class="h2">{{ trans('site.garantiya') }}</h2>
            </div>
            <div id="left-section7" class="col-12 col-sm-6 col-md-6">
                <img src="/img/site/garantiya.png" alt="img" title="Гарантия" />
            </div>
            <div class="col-12 col-sm-6 col-md-6 right-section7">
                <h4>- {{ trans('site.zapusk') }}</h4>
                <p style="font-size:20px;"> {{ trans('site.zapusk_det') }}</p>
                <h4>- {{ trans('site.podelu') }}</h4>
                <p style="font-size:20px;"> {{ trans('site.podelu_det') }}</p>
                <h4>- {{ trans('site.garant') }}</h4>
                <p style="font-size:20px;"> {{ trans('site.garant_det') }}</p>
            </div>
        </div>
    </div>

    <div class="section4">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h2 class="h2">{{ trans('site.support') }}</h2>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_left_4">
                    <img src="/img/site/support2.png" alt="img" title="img" />
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_right_4">
                    <div style="font-size:20px; margin: 0;" >
                        - {{ trans('site.sup1') }}<br/>
                        - {{ trans('site.sup2') }}<br/>
                        - {{ trans('site.sup3') }}<br/>
                        - {{ trans('site.sup4') }}<br/>
                        - {{ trans('site.sup5') }}<br/>
                        - {{ trans('site.sup6') }}<br/>
                        - {{ trans('site.sup7') }}<br/>
                        - {{ trans('site.sup8') }}<br/>
                        - {{ trans('site.sup9') }}
                    </div>

                    <!--h3 class="h3">Поддержка и доработка сайтов</h3>
                    <p>Оказание професиональной помощи по улучшению и развитию интернет-сайтов</p>
                    -->
                </div>
            </div>
        </div>
    </div>

    <div class="section10">
        <div class="row parallax2">
            <div class="col-12 col-sm-6 col-md-6 div1-parallax2">
                <!--
                <div style="margin:40px 0 40px 20px; padding:20px 0 20px 0; border-radius:0px; background-color: #FFFFFF;">
                    <h3>Есть вопросы?</h3>
                    <div class="text-left" style="margin:0 0 0 120px;">
                        <div style="color: grey;">- Вас интересует цена, стоимость услуги;</div>
                        <div style="color: grey;">- Сроки выполнение;</div>
                    </div>
                    <button class="btn btn-success btn-lg" style="margin:20px;">Спросить</button>
                </div>
                -->
            </div>
            <div class="col-12 col-sm-6 col-md-6 div2-parallax2">
                <div style="margin:40px 20px 40px 0; padding:20px 0 20px 0;  border-radius:0px; background-color: #FFFFFF;">
                    <h3>{{ trans('site.contacts') }}:</h3>
                    <div class="text-left" style="margin:0 0 30px 120px;">
                        <div style="margin:0 0 10px 0;">{{ trans('site.adres') }}</div>
                        <div>E-mail: <strong>makklays@gmail.com</strong></div>
                        <div style="margin:0 0 10px 0;">Mob.: <strong>+38 098 870 5397</strong></div>
                        <div>{{ trans('site.or') }} <a href="/feedback">{{ trans('site.pishite') }}</a> </div>
                    </div>
                    <!--div>или</div>
                    <h3>Оформить заказ</h3 -->
                    <!--div class="text-left" style="margin:0 0 0 120px;">
                        <div style="color: grey;">- Вас интересует цена, стоимость услуги;</div>
                        <div style="color: grey;">- Сроки выполнение;</div>
                    </div>
                    <button class="btn btn-success btn-lg" style="margin:20px;">Задать</button>
                    -->
                </div>
            </div>
        </div>
    </div>

    <!-- модальное окно -->
    <div id="myModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заголовок модального окна</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Содержимое модального окна
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Любая кнопка</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div id="myModal" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    -->

    <!--
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/site/1.jpg" alt="img" title="img" />
                </div>
                <div class="col-md-6">
                    <h3>Разработка сайтов и поддержка</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="section3">
        <div class="label">
            Zagolovok
        </div>
        <div class="recen_l ">
            <img src="/img/site/portfolio-1.jpg">
            Text text text
        </div>
        <div class="recen_r ">
            <img src="/img/site/portfolio-2.jpg">
            Text text text text text
        </div>
    </div>
    <div class="section22">
        <div class="label">
            Zagolovok
        </div>
        <div class="reve ">
            <img src="/img/site/portfolio-5.jpg">
            Text text text text text
        </div>
        <div class="reve ">
            <img src="/img/site/portfolio-5.jpg">
            Text text text text text
        </div>
        <div class="reve ">
            <img src="/img/site/portfolio-5.jpg">
            Text text text text text
        </div>
        <div class="reve ">
            <img src="/img/site/portfolio-5.jpg">
            Text text text text text
        </div>
    </div>
    <div class="section10">
        <div class="label">
            Zagolovok
        </div>
        <div id="block_11" class="peren_ll ">
            <img src="/img/site/portfolio-1.jpg">
            Text text text
        </div>
        <div id="block_111" class="peren_rr ">
            <img src="/img/site/portfolio-2.jpg">
            Text text text text
        </div>
        <br/><br/><br/><br/>
    </div>
    -->

</div>

<div class="row" style="margin:40px 0 20px 0;">
    <div class="col-md-12">
        <div>
            <a href="/">
            <img src="/img/makklays.png" alt="&copy; Makklays" title="Makklays" />
            </a>
        </div>
        <div>&copy; Makklays.com 2007 - 2019</div>
        <div>All Rights Reserved.</div>
    </div>
</div>

<script>
    jQuery(function ($) {
        $(window).scroll(function () {
            if ( $(window).scrollTop() >= 700) { // 610
                $('.divef_left_1').addClass('efffect_l');
                $('.divef_right_1').addClass('efffect_r');
            }

            if ( $(window).scrollTop() >= 1000) { // 1000
                $('.divef_left_2').addClass('efffect_up');
                $('.divef_right_2').addClass('efffect_up');
            }

            /*if ( $(window).scrollTop() >= 1300) { // 1100
                $('.divef_left_3').addClass('efffect_up');
                $('.divef_right_3').addClass('efffect_up');
            }*/

            if ( $(window).scrollTop() >= 1400) { // 1100
                $('.divef_left_5').addClass('efffect_scale');
                $('.divef_right_5').addClass('efffect_scale');
            }

            /*if ( $(window).scrollTop() >= 3000) { // 1000
                $('.divef_left_7').addClass('efffect_scale');
                $('.divef_right_7').addClass('efffect_scale');
            }*/

            if ( $(window).scrollTop() >= 5500) { // 1100
                $('.divef_left_4').addClass('efffect_scale');
                $('.divef_right_4').addClass('efffect_scale');
            }

            /*if ( $(window).scrollTop() >= 800) {
                $('.recen_l').addClass('efffect_l');
                $('.recen_r').addClass('efffect_r');
            }*/

            /*if ( $(window).scrollTop() >= 2760) { // 2800
                $('.peren_ll').addClass('efffect_l');
                $('.peren_rr').addClass('efffect_r');
            }*/
            console.log( $(window).scrollTop() );
        });
    });
</script>
</body>
</html>
