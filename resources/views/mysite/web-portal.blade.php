@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal1') }}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-left">
            <!--h4 class="text-center">Цены на разработку корпоративного сайта</h4-->
            <p class="text-justify">
                Цена веб-портала и разработка в Makklays
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
                        <h1 class="card-title pricing-card-title">85000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 60-70 дней</li>
                            <li>&#10004; Дизайн в корпоративных цветах</li>
                            <li>&#10004; Определение и наполнение основных разделов</li>
                            <li>&#10004; 7 уникальных функциональных разделов</li>
                            <li>&#10004; Разработка логических частей</li>
                            <li>&#10004; Внутрення отправка email</li>
                            <li>&#10004; Адаптивность под все устройства</li>
                            <li>&#10004; Базовая SEO-оптимизация</li>
                            <li>&#10004; PHP7, HTML5, CSS3, jQuery</li>
                            <li>&#10004; Система управления сайтом</li>
                            <li>&#10004; Бот для Telegram с выводом данных (3-5 комманд)</li>
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
                        <h1 class="card-title pricing-card-title">95000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 60-80 дней</li>
                            <li>&#10004; Дизайн в корпоративных цветах</li>
                            <li>&#10004; Определение и наполнение основных разделов</li>
                            <li>&#10004; 12 уникальных функциональных разделов</li>
                            <li>&#10004; Разработка логических частей</li>
                            <li>&#10004; Перевод сайта на несколько языков (2-3 шт.)</li>
                            <li>&#10004; Внутрення отправка email</li>
                            <li>&#10004; Возможность онлайн-оплаты</li>
                            <li>&#10004; Адаптивность под все устройства</li>
                            <li>&#10004; Базовая SEO-оптимизация</li>
                            <li>&#10004; PHP7, Laravel, HTML5, CSS3, jQuery</li>
                            <li>&#10004; Система управления сайтом</li>
                            <li>&#10004; Статистика по источникам переходов (из FB, Google, интернет)</li>
                            <li>&#10004; Бот для Telegram с выводом данных (5-7 комманд)</li>
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
                        <h1 class="card-title pricing-card-title">от 100000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 60-90 дней</li>
                            <li>&#10004; Уникальный дизайн</li>
                            <li>&#10004; Определение и наполнение основных разделов</li>
                            <li>&#10004; >15 уникальных функциональных разделов</li>
                            <li>&#10004; Разработка логических частей</li>
                            <li>&#10004; Перевод сайта на несколько языков (3-5 шт.)</li>
                            <li>&#10004; Внутрення отправка email</li>
                            <li>&#10004; Возможность онлайн-оплаты</li>
                            <li>&#10004; Адаптивность под все устройства</li>
                            <li>&#10004; Базовая SEO-оптимизация</li>
                            <li>&#10004; PHP7, Laravel, HTML5, CSS3, jQuery, Vue.js</li>
                            <li>&#10004; Система управления сайтом</li>
                            <li>&#10004; Интеграция с внешними сервисами (Bitrix и т.д.)</li>
                            <li>&#10004; Подключение внешних сервисов</li>
                            <li>&#10004; Статистика по источникам переходов (из FB, Google, интернет)</li>
                            <li>&#10004; Бот для Telegram с выводом данных (7-10 комманд)</li>
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
                <?=trans('site.portal2')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/webportal.png" class="img-fluid" alt="Makklays - Web-portal image1" title="Web-portal" />
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal3') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal4')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal5') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal6')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal7') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal8')?> <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal9') }}</h2>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/webportal4.jpg" class="img-fluid" alt="Makklays - Web-portal image2" title="Web-portal" />
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.portal10')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal11')?> <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal12') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal13')?>
            </p>
        </div>
    </div>

@endsection
