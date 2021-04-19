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
            <p class="text-left">
                {{ trans('price.text_service') }} <br/>
                {{ trans('price.descr_packet') }}
            </p> <br/><br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{ trans('price.simple') }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ trans('price.service_simple_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.service_si1') }}</li>
                            <li>&#10004; {{ trans('price.service_si2') }}</li>
                            <li>&#10004; {{ trans('price.service_si3') }}</li>
                            <li>&#10004; {{ trans('price.service_si4') }}</li>
                            <li>&#10004; {{ trans('price.service_si5') }}</li>
                            <li>&#10004; {{ trans('price.service_si6') }}</li>
                            <li>&#10004; {{ trans('price.service_si7') }}</li>
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
                        <h4 class="my-0 font-weight-normal">{{ trans('price.standart') }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ trans('price.service_standart_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.service_st1') }}</li>
                            <li>&#10004; {{ trans('price.service_st2') }}</li>
                            <li>&#10004; {{ trans('price.service_st3') }}</li>
                            <li>&#10004; {{ trans('price.service_st4') }}</li>
                            <li>&#10004; {{ trans('price.service_st5') }}</li>
                            <li>&#10004; {{ trans('price.service_st6') }}</li>
                            <li>&#10004; {{ trans('price.service_st7') }}</li>
                            <li>&#10004; {{ trans('price.service_st8') }}</li>
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
                        <h4 class="my-0 font-weight-normal">{{ trans('price.individual') }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ trans('price.service_individual_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.service_in1') }}</li>
                            <li>&#10004; {{ trans('price.service_in2') }}</li>
                            <li>&#10004; {{ trans('price.service_in3') }}</li>
                            <li>&#10004; {{ trans('price.service_in4') }}</li>
                            <li>&#10004; {{ trans('price.service_in5') }}</li>
                            <li>&#10004; {{ trans('price.service_in6') }}</li>
                            <li>&#10004; {{ trans('price.service_in7') }}</li>
                            <li>&#10004; {{ trans('price.service_in8') }}</li>
                            <li>&#10004; {{ trans('price.service_in9') }}</li>
                        </ul>
                        <a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <p class="text-left">
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
            <p class="text-left">
                <?=trans('site.wepapi2')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-7">
            <p class="text-left">
                <?=trans('site.wepapi3')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/api3.png" alt="Makklays - Web service - image3" title="Web service" class="img-fluid" />
        </div>

        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.webapi4')?> <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.wepapi5')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.wepapi6')?>
            </p>
        </div>
    </div>

@endsection
