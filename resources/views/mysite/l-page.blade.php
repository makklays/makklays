@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.m_lpage') }}</h2> <br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-left">
            <!--h4 class="text-center">Цены на разработку лендинг пейдж</h4-->
            <p class="text-justify">
                Цены Landing Page (Лендинг пейдж) и разработка в Makklays
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
                        <h1 class="card-title pricing-card-title">7000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 5-7 дней</li>
                            <li>&#10004; {{ trans('site.m_corporate3') }}</li>
                            <li>&#10004; {{ trans('site.m_corporate5') }}</li>
                            <li>&#10004; {{ trans('site.m_corporate6') }}</li>
                            <li>&#10004; PHP7, HTML5, CSS3, jQuery</li>
                            <li>&#10004; Отправка и сбор лидов на email</li>
                            <li>&#10004; {{ trans('site.m_corporate9') }}</li>
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
                        <h1 class="card-title pricing-card-title">8000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 5-7 дней</li>
                            <li>&#10004; Дизайн в корпоративных цветах</li>
                            <li>&#10004; Перевод страницы на несколько языков (2-3 шт.)</li>
                            <li>&#10004; Адаптивность под все устройства</li>
                            <li>&#10004; Базовая SEO-оптимизация</li>
                            <li>&#10004; PHP7, Laravel, HTML5, CSS3, jQuery</li>
                            <li>&#10004; Отправка и сбор лидов на email</li>
                            <li>&#10004; Интеграция с внешними сервисами (Bitrix и т.д.)</li>
                            <li>&#10004; Административная панель со списком лидов (из базы данных)</li>
                            <li>&#10004; {{ trans('site.m_store9') }}</li>
                            <li>&#10004; {{ trans('site.m_store11') }}</li>
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
                        <h1 class="card-title pricing-card-title">от 10000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 5-7 дней</li>
                            <li>&#10004; Уникальный дизайн</li>
                            <li>&#10004; Перевод страницы на несколько языков (3-5 шт.)</li>
                            <li>&#10004; {{ trans('site.m_sitesystem6') }}</li>
                            <li>&#10004; {{ trans('site.m_sitesystem7') }}</li>
                            <li>&#10004; PHP7, Laravel, HTML5, CSS3, jQuery, Vue.js</li>
                            <li>&#10004; Отправка и сбор лидов на email</li>
                            <li>&#10004; Интеграция с внешними сервисами (Bitrix и т.д.)</li>
                            <li>&#10004; Административная панель со списком лидов (из базы данных)</li>
                            <li>&#10004; Статистика по источникам переходов (из FB, Google)</li>
                            <li>&#10004; Бот для Telegram с выводом данных (3-5 комманд)</li>
                            <li>&#10004; {{ trans('site.m_sitesystem12') }}</li>
                            <li>&#10004; {{ trans('site.m_sitesystem13') }}</li>
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
                <b>{{ trans('site.lpage1') }}</b> <?=trans('site.lpage2')?>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/lpage2.jpg" alt="Makklays - Landing page - image1" title="Landing page" class="img-fluid" />
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.lpage3') }}</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                {{ trans('site.lpage4') }} <br/><br/>
                <b>1. {{ trans('site.lpage5') }}</b> <?=trans('site.lpage6')?> <br/><br/>

                <b>2. {{ trans('site.lpage7') }}</b> <?=trans('site.lpage8')?> <br/><br/>

                <b>3. {{ trans('site.lpage9') }}</b> <?=trans('site.lpage10')?> <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.lpage11') }}</h2> <br/>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/lpage3.png" alt="Makklays - Landing page - image2" title="Landing page" class="img-fluid" />
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.lpage12')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.lpage13') }}</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.lpage14')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.lpage15') }}</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.lpage16')?>
                <a href="{{ route('mysite_store', app()->getLocale()) }}" class="a-green">{{ trans('site.lpage17') }}</a>
                <?=trans('site.lpage18')?>
            </p>
            <br/><br/>
        </div>
    </div>

@endsection
