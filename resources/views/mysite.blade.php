<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/favicon.png" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" >

    <link href="/css/site.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/bootstrap4/bootstrap.css" rel="stylesheet">
    <!--link href="/ckeditor/plugins/codesnippet/lib/highlight/styles/rainbow.css" rel="stylesheet"-->
    <!-- add some meta-tags -->
</head>
<body>

<div class="wrap">

    <style>
        .section1 {
            height: 800px;
            padding: 2rem;
            position: relative;
            background: url(/img/site/office.jpg);
            background-origin: border-box;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            text-align: center;
        }
        .section1 h1 {
            margin-top: 300px;
            margin-bottom: 30px;
            text-align: center;
            font-size: 47px;
            color: #fff;
        }
        .section1 button {
            text-align: center;
        }

        #id_consultation {
            letter-spacing: 5px;
        }

        /*.row {
            clear: both;
            display: table;
            content: " ";
        }*/

        .section2 .row {
            margin-right: 0;
            text-align: center;
            /*padding: 2rem;*/
            background: #EFEFEF; /*#e0eeff;*/
            height: auto;
        }
        .section8 .row {
            margin-right: 0;
            text-align: center;
            /*padding: 2rem;*/
            background: #EFEFEF; /*#e0eeff;*/
            height: auto;
        }
        .divef_left_1, .divef_right_1, .divef_right_5, .divef_left_5 {
            margin: 50px 0;
            opacity: 0;
            display: block;
        }
        .divef_left_2, .divef_right_2, .divef_left_5 {
            margin: 50px 0;
            opacity: 0;
            display: block;
        }

        .section3 .row {
            margin-right: 0;
            text-align: center;
            /*padding: 2rem;*/
            background: #FFF;
            height: auto;
        }

        .section4 .row {
            margin-right: 0;
            text-align: center;
            /*padding: 2rem;*/
            background: #CCC;
            height: auto;
            padding: 70px 20px;
        }
        /*.divef_left_3, .divef_right_3 {
            margin: 50px 0;
            opacity: 0;
        }*/

        .section5 .row {
            margin-right: 0;
            text-align: center;
            /*padding: 2rem;*/
            /*background: #CCC;*/
            height: auto;
        }

        .section6 .row {
            margin-right: 0;
            text-align: center;
            height: auto;
        }

        .section10 .row {
            margin-right: 0;
            text-align: center;
            /*height: auto;*/
        }

        .section7 .row {
            margin-right: 0;
            text-align: center;
            height: auto;
        }


        .section22 {
            text-align: center;
            padding: 2rem;
            background: #e0eeff;
            height: auto;
        }



        img {
            height: auto;
            max-width: 100%;
        }
        body {
            font-family: sans-serif;
        }
        .label {
            box-sizing: border-box;
            color: #111;
            font-size: 150%;
            height: 2rem;
            margin-bottom: 40px;
            padding: 0.375rem;
            text-align: center;
            display: block;
        }
        .section222 {
            text-align: center;
            padding: 2rem;
            background: #e0eeff;
            height: auto;
        }
        /*.revealator-slideup.revealator-within, .revealator-slideup.revealator-partially-above, .revealator-slideup.revealator-above {
            transform: translate(0, 0);
            opacity: 1;
        }
        .revealator-fade, .revealator-slideup, .revealator-slideleft, .revealator-slideright, .revealator-slidedown, .revealator-zoomin, .revealator-zoomout, .revealator-rotateleft, .revealator-rotateright {
            transition: all 600ms;
        }*/
        [class^="revealator"] {
            display: inline-block;
            height: auto;
            margin: 0 auto 15px;
            width: 26%;
        }

        .reve {
            /*transform: translate(0, 100);
            */
            opacity: 0;
            /*transition: all 600ms;
            */
            /*animation: up .5s ease-in-out .8s forwards;*/
            /*opacity: 0;*/
            z-index: 2;
        }

        @keyframes big {
            0%{
                opacity: 0;
                transform: scale(.3);
            }
            50%{
                opacity: 1;
                transform: scale(1.0);
            }
            70%{
                transform: scale(0.9);
            }
            100%{
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes down {
            0%{
                opacity: 0;
                /*transform: scale(.3);*/
                transform: translateY(-100px);
            }
            100%{
                /*transform: scale(1);*/
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes left {
            0%{
                opacity: 0;
                /*transform: scale(.3);*/
                transform: translateX(-600px);
            }
            100%{
                /*transform: scale(1);*/
                transform: translateX(0);
                opacity: 1;
            }
        }


        @keyframes slidein {
            from {
                margin-left: 100%;
                width: 300%;
                opacity: 1;
            }
            to {
                margin-left: 0%;
                width: 100%;
                opacity: 1;
            }
        }


        .recen_l, .recen_r, .peren_ll, .peren_rr {
            position: relative;
            display: block;
            height: auto;
            margin: 0 auto 15px;
            width: 26%;
            opacity: 0;
        }
        /*.efffect_l:hover, .efffect_r:hover {
            transform: scale(1.1);
            cursor: pointer;
        }*/
        .efffect_l {
            animation-duration: 1s;
            animation-name: efffect_left;
            opacity: 1;
        }
        .efffect_r {
            animation-duration: 1s;
            animation-name: efffect_right;
            opacity: 1;
        }
        .efffect_scale {
            animation-duration: 1s;
            animation-name: efffect_scale;
            opacity: 1;
        }
        .efffect_up {
            animation-duration: 0.8s;
            animation-name: efffect_up;
            opacity: 1;
        }

        @keyframes efffect_left {
            0%{
                opacity: 0;
                transform: translateX(-300px);
            }
            100%{
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes efffect_right {
            0%{
                opacity: 0;
                transform: translateX(300px);
            }
            100%{
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes efffect_up {
            0%{
                opacity: 0;
                transform: translateY(200px);
            }
            100%{
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes efffect_scale {
            0%{
                opacity: 1;
                transform: scale(.3);
            }
            50%{
                opacity: 1;
                transform: scale(1.0);
            }
            70%{
                transform: scale(0.9);
            }
            100%{
                transform: scale(1);
                opacity: 1;
            }
        }
        @keyframes efffect_bigger {
            0%{
                /*opacity: 1;*/
                transform: scale(.3);
            }
            50%{
                /*opacity: 1;*/
                transform: scale(1.0);
            }
            70%{
                transform: scale(0.9);
            }
            100%{
                transform: scale(1);
                /*opacity: 1;*/
            }
        }

        .parallax {
            /* The image used */
            background-image: url("/img/site/keyboard.jpg");

            /* Set a specific height */
            height: 300px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .parallax2 {
            /* The image used */
            background-image: url("/img/site/tech-city.jpg");




            /* Set a specific height */
            height: 300px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin-right: 0;
        }

        .colimg {
            padding-bottom: 20px;
        }

        .divef_right_1 .h3, .divef_right_5 .h3, .divef_left_2 .h3 {
            text-align: center;
            font-size: 44px;
            margin-top: 140px;
        }
        .section .h3 {
            text-align: center;
            font-size: 44px;
            margin-top: 140px;
        }
        .divef_right_2 img {
            height: 310px;
        }
        .section4 .h2 {
            font-size: 40px;
            margin-bottom: 100px;
        }
        .section5 .h2 {
            font-size: 40px;
        }
        .section5 .row {
            margin: 50px 0 100px 0;
        }
        .section5 .otstup {
            margin-bottom: 120px;
        }
        .section7 .row {
            /*color: #000;*/
            background-color: #dddddd;
            font-size: 1rem;
            padding: 70px 20px;
        }
        .section7 .row .right-section7 {
            text-align: left;
        }
        .section7 .h2 {
            font-size: 40px;
            margin-bottom: 100px;
        }
        .divef_right_3 {
            text-align: left;
            /*padding-left: 30px;*/
        }
        .divef_right_3 p {
            padding-top: 40px;
            text-align: left;
        }
        /*.section4 .divef_left_4, .section4 .divef_right_4 {
            opacity: 0;
        }*/
        .divef_left_4 img {
            height: 300px;
        }
        .divef_right_4 {
            text-align: left;
        }
        footer.footer {
            height: 110px;
        }

        @media screen and (max-width:320px) {
            .section1 {
                height: 667px;
            }
            .section1 h1 {
                margin-top: 180px;
            }
            #id_consultation {
                letter-spacing: 5px;
            }
            .divef_left_1, .divef_left_2, .divef_left_3, .divef_left_4, .divef_left_5 {
                margin-top: 20px;
                margin-bottom: 10px;
            }
            .divef_right_1, .divef_right_2, .divef_right_3, .divef_right_5 {
                margin-top: 0;
                margin-bottom: 20px;
            }
            .divef_right_1 .h3, .divef_right_3 .h3, .divef_right_5 .h3, .divef_left_2 .h3 {
                text-align: center;
                font-size: 28px;
                margin-top: 10px;
            }
            .divef_left_1 img {

            }
            .divef_right_2 img {
                height: 210px;
            }
            .divef_left_3 .h3, .divef_left_4 .h3, .divef_left_5 .h3, {
                text-align: center;
                font-size: 28px;
                margin-top: 10px;
            }
            .section5 .h2 {
                font-size: 28px;
            }
            .section5 .row {
                margin: 20px 0 30px 0;
            }
            .section5 .otstup {
                margin-bottom: 50px;
            }
            footer.footer {
                height: 125px;
            }
            /*.div1-parallax2 {
                color: #FFF;
                text-align: left;
                margin-left: 10px;
            }*/

            .section7 .row h4 {
                /*color: #28A745; /* #446891; */
            }
            .section7 .row {
                /*color: #000;*/
                background-color: #dddddd;
                /*font-size: 12px;*/
                padding: 30px 10px;
                margin-right: 0;
            }
            #left-section7 {
                text-align: center;
            }

            .divef_left_4 img {
                height: 200px;
            }

            .section7 .row {
                padding: 20px 0;
            }
            .section7 .h2 {
                font-size: 28px;
                margin-bottom: 0;
            }
            .right-section7 {
                padding-left: 34px;
            }
            #left-section7 {
                margin-bottom: 10px;
            }

            .section4 .row {
                padding: 20px 0;
            }
            .divef_right_4 {
                padding-left: 20px;
            }
            .section4 .h2 {
                font-size: 28px;
                margin-bottom: 0;
            }
        }
    </style>



    <div class="section1">
        <h1>
            Разработка и создание сайтов
        </h1>
        <button id="id_consultation" class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal">Получить бесплатно <br/> консультацию</button>
    </div>
    <div class="section2">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-5">
                <div class="divef_left_1">
                    <img src="/img/site/kisspng.png" alt="img" title="img"  />
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-7">
                <div class="divef_right_1">
                    <h3 class="h3">Разработка сайтов и поддержка</h3>
                    <button class="btn btn-success">Подробнее</button>
                </div>
            </div>

        </div>
    </div>
    <div class="section3">
        <div class="row">
            <div class="col-12 col-sm-7 col-md-7">
                <div class="divef_left_2">
                    <h3 id="id-section3-h3" class="h3">Разработка <br/> интернет-магазинов и порталов</h3>
                    <button class="btn btn-success">Подробнее</button>
                </div>
            </div>
            <div class="col-12 col-sm-5 col-md-5">
                <div class="divef_right_2">
                    <img src="/img/site/shops.png" alt="img" title="img" />
                </div>
            </div>
        </div>
    </div>
    <div class="section8">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_left_5">
                    <img src="/img/site/crm.png" alt="img" title="img"  />
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_right_5">
                    <h3 class="h3">Разработка CRM систем</h3>
                    <button class="btn btn-success">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
    <div class="section6">
        <div class="row parallax">
            <div class="col-6 col-sm-6 col-md-6" style="height: 300px;">
                <p>Text text</p>
            </div>
            <div class="col-6 col-sm-6 col-md-6">
                <p>Text text</p>
            </div>
        </div>
    </div>
    <div class="section5">
        <div class="row" >
            <div class="col-12 col-sm-12 col-md-12">
                <h2 class="h2">Используем технологии</h2>
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
                <img src="/img/site/postgresql.png" alt="img" title="PostgreSQL" />
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
                <img src="/img/site/wordpress.png" alt="img" title="WordPress" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/html5.png" alt="img" title="HTML5" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/css3.png" alt="img" title="CCS3" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 colimg">
                <img src="/img/site/zend.png" alt="img" title="Zend" style="margin-top:8px;" />
            </div>
            <div class="col-4 col-sm-4 col-md-2 cilomg">
                <img src="/img/site/microsoft__.png" alt="img" title="Microsoft" />
            </div>
        </div>
    </div>
    <div class="section7">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h2 class="h2">Гарантия</h2>
            </div>
            <div id="left-section7" class="col-12 col-sm-6 col-md-6">
                <img src="/img/site/garantiya.png" alt="img" title="Гарантия" />
            </div>
            <div class="col-12 col-sm-6 col-md-6 right-section7">
                <h4>Запуск итерациями</h4>
                <p>Итерации позволяют выделить часть работы для успешной реализации.</p>
                <h4>Без "воды"</h4>
                <p>Только факты и действия ведущие к результату.</p>
                <h4>Гарантия результата</h4>
                <p>На все наши разработки мы даем годовую гарантию и бесплатно устраняем выявленные ошибки.</p>
            </div>
        </div>
    </div>
    <div class="section10">
        <div class="row parallax2">
            <div class="col-12 col-sm-6 col-md-6 div1-parallax2">
                <h3>text</h3>
                <p>text text text .</p>
            </div>
            <div class="col-12 col-sm-6 col-md-6 div2-parallax2">
                <p>Text text</p>
            </div>
        </div>
    </div>
    <div class="section4">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h2 class="h2">Support Ваш надежный партнер</h2>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_left_4">
                    <img src="/img/site/support.png" alt="img" title="img" />
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="divef_right_4">
                    <p>
                        - Создание новых разделов сайта<br/>
                        - Создание баннеров, акций, промо-страниц<br/>
                        - Аккуратное внесение SEO рекомендаций<br/>
                        - Анализ эфективности сайта<br/>
                        - Доработка текущего функционала<br/>
                        - Разработка нового функционала<br/>
                        - Увеличение конверсии сайта<br/>
                        - Оформление контента внутренних страниц сайта<br/>
                        - Улучшение usability сайта
                    </p>

                    <!--h3 class="h3">Поддержка и доработка сайтов</h3>
                    <p>Оказание професиональной помощи по улучшению и развитию интернет-сайтов</p>
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

<footer class="footer" style="background-color: #283645; color: #dddddd;">
    <div class="container">
        <p class="pull-left">
            &copy; IT Blog | Makklays 2017 - 2019.
            All Rights Reserved.                    </p>
        <p class="pull-right">Powered by <a href="http://makklays.com.ua/" rel="external">Makklays</a></p>
    </div>
</footer>

<script src="/assets/7f6e6070/jquery.js"></script>
<script src="/assets/e878f75b/yii.js"></script>
<script src="/js/comment.js"></script>
<script src="/js/calendar.js"></script>
<script src="/js/bootstrap4/bootstrap.js"></script>
<script>jQuery(function ($) {

        $(window).scroll(function () {
            if ( $(window).scrollTop() >= 357) { // 610
                $('.divef_left_1').addClass('efffect_l');
                $('.divef_right_1').addClass('efffect_r');
            }

            if ( $(window).scrollTop() >= 870) { // 1000
                $('.divef_left_2').addClass('efffect_scale');
                $('.divef_right_2').addClass('efffect_scale');
            }

            if ( $(window).scrollTop() >= 2260) { // 1100
                $('.divef_left_3').addClass('efffect_up');
                $('.divef_right_3').addClass('efffect_up');
            }

            if ( $(window).scrollTop() >= 1000) { // 1100
                $('.divef_left_5').addClass('efffect_up');
                $('.divef_right_5').addClass('efffect_up');
            }

            if ( $(window).scrollTop() >= 3870) { // 1100
                $('.divef_left_4').addClass('efffect_up');
                $('.divef_right_4').addClass('efffect_up');
            }

            /*if ( $(window).scrollTop() >= 800) {
                $('.recen_l').addClass('efffect_l');
                $('.recen_r').addClass('efffect_r');
            }*/

            if ( $(window).scrollTop() >= 1700) {
                //$('.recen_l').addClass('efffect_l');
                //$('.recen_r').addClass('efffect_r');
                /*$('.reve').each(function(){

                });*/
            }

            if ( $(window).scrollTop() >= 2760) { // 2800
                $('.peren_ll').addClass('efffect_l');
                $('.peren_rr').addClass('efffect_r');
                /*$('.reve').each(function(){

                });*/
            }
            console.log( $(window).scrollTop() );
        });

        //console.log( $(window).scrollTop() );

    });</script>
</body>
</html>