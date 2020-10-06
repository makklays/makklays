@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.m_store') }}</h2> <br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-left">
            <!--h4 class="text-center">Цены на разработку корпоративного сайта</h4-->
            <p class="text-justify">
                Цена интернет-магазина и его разработка в Makklays
            </p> <br/><br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Простой</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">50000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 15-25 дней</li>
                            <li>&#10004; Дизайн в корпоративных цветах</li>
                            <li>&#10004; Наполнение 100 позиций</li>
                            <li>&#10004; Возможность онлайн-оплаты</li>
                            <!--li>&#10004; 5 функциональных разделов</li>
                            <li>&#10004; Определение и наполнение основных разделов</li-->
                            <li>&#10004; Адаптивность под все устройства</li>
                            <!--li>&#10004; 10000 знаков уникального текста</li-->
                            <li>&#10004; Базовая SEO-оптимизация</li>
                            <li>&#10004; PHP7, HTML5, CSS3, jQuery</li>
                            <li>&#10004; Подключение внешних сервисов</li>
                            <li>&#10004; Система управления сайтом</li>
                            <li>&#10004; Обучение работы с сайтом</li>
                            <li>&#10004; Установка https</li>
                            <li>&#10004; Доменное имя в подарок (.com.ua)</li>
                        </ul>
                        <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Стандартный</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">60000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 30-50 дней</li>
                            <li>&#10004; Дизайн в корпоративных цветах</li>
                            <li>&#10004; Наполнение 200 позиций</li>
                            <li>&#10004; Возможность онлайн-оплаты</li>
                            <!--li>&#10004; 7 функциональных разделов</li>
                            <li>&#10004; Определение и наполнение основных разделов</li-->
                            <li>&#10004; Перевод сайта на несколько языков (2-3 шт.)</li>
                            <li>&#10004; Адаптивность под все устройства</li>
                            <!--li>&#10004; 10000 знаков уникального текста</li-->
                            <li>&#10004; Базовая SEO-оптимизация</li>
                            <li>&#10004; PHP7, Laravel, HTML5, CSS3, jQuery</li>
                            <li>&#10004; Система управления сайтом</li>
                            <li>&#10004; Статистика по источникам переходов (из FB, Google, интернет)</li>
                            <li>&#10004; Обучение работы с сайтом</li>
                            <li>&#10004; Установка https</li>
                            <li>&#10004; Доменное имя в подарок (.com.ua)</li>
                        </ul>
                        <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Индивидуальный</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">от 70000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 40-60 дней</li>
                            <li>&#10004; Уникальный дизайн</li>
                            <li>&#10004; Наполнение 300 позиций</li>
                            <li>&#10004; Возможность онлайн-оплаты</li>
                            <!--li>&#10004; Определение и наполнение основных разделов</li-->
                            <li>&#10004; Перевод сайта на несколько языков (3-5 шт.)</li>
                            <li>&#10004; Адаптивность под все устройства</li>
                            <!--li>&#10004; 10000 знаков уникального текста</li-->
                            <li>&#10004; Базовая SEO-оптимизация</li>
                            <li>&#10004; PHP7, Laravel, HTML5, CSS3, jQuery, Vue.js</li>
                            <li>&#10004; Система управления сайтом</li>
                            <li>&#10004; Интеграция с внешними сервисами (Bitrix и т.д.)</li>
                            <li>&#10004; Статистика по источникам переходов (из FB, Google, интернет)</li>
                            <li>&#10004; Бот для Telegram с выводом данных (3-5 комманд)</li>
                            <li>&#10004; Обучение работы с сайтом</li>
                            <li>&#10004; Установка https</li>
                            <li>&#10004; Доменное имя в подарок (.com.ua)</li>
                        </ul>
                        <a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <p class="text-justify">
                <b>{{ trans('site.shop1') }}</b> <?=trans('site.shop2')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/internet_shop.jpg" alt="Makklays - Online store - e-commerce website - image1" title="Online store - e-commerce website" class="img-fluid" />
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.shop3')?>
                <br/><br/>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.shop4') }}</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.shop5')?>
                <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="a-green">{{ trans('site.shop6') }}</a><?=trans('site.shop7')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.shop8')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.shop9')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.shop10')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.shop11')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.shop12') }}</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.shop13')?>
                <a href="{{ route('mysite_online_brief', app()->getLocale()) }}" class="a-green"><?=trans('site.shop14')?></a>
                <?=trans('site.shop15')?>
            </p>
        </div>
    </div>

@endsection
