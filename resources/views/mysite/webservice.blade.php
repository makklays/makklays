@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.webapi') }}</h2> <br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-left">
            <!--h4 class="text-center">Цены на разработку корпоративного сайта</h4-->
            <p class="text-justify">
                Цена веб сервиса и REST API для мобильного приложения на разработка в Makklays
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
                        <h1 class="card-title pricing-card-title">12000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 7-12 дней</li>
                            <li>&#10004; Формат передачи данных json</li>
                            <li>&#10004; 5 функциональных разделов (CRUD)</li>
                            <li>&#10004; PHP7, MariaDB (MySQL)</li>
                            <li>&#10004; Мануал со списком функций (url) и параметров</li>
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
                        <h1 class="card-title pricing-card-title">14000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 7-15 дней</li>
                            <li>&#10004; Формат передачи данных json</li>
                            <li>&#10004; 7 функциональных разделов (CRUD)</li>
                            <li>&#10004; Поддержка нескольких языков (2-3 шт.)</li>
                            <li>&#10004; PHP7, MariaDB (MySQL)</li>
                            <li>&#10004; Мануал со списком функций (url) и параметров</li>
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
                        <h1 class="card-title pricing-card-title">от 15000 грн<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; Cрок разработки 7-15 дней</li>
                            <li>&#10004; Формат передачи данных json</li>
                            <li>&#10004; >7 функциональных разделов (CRUD)</li>
                            <li>&#10004; Поддержка нескольких языков (3-5 шт.)</li>
                            <li>&#10004; PHP7, MariaDB (MySQL)</li>
                            <li>&#10004; Мануал со списком функций (url) и параметров</li>
                            <li>&#10004; Бот для Telegram с выводом данных (5-7 комманд)</li>
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
                <?=trans('site.wepapi1')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/api.jpg" alt="Makklays - Web service - image1" title="Web service" class="img-fluid" />
        </div>

        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/api2.png" alt="Makklays - Web service - image2" title="Web service" class="img-fluid" />
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.wepapi2')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.webapi3')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/api3.png" alt="Makklays - Web service - image3" title="Web service" class="img-fluid" />
        </div>

        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.webapi4')?> <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.wepapi5')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.wepapi6')?>
            </p>
        </div>
    </div>

@endsection
