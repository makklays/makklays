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
            <p class="text-left">
                {{ trans('price.text_store') }} <br/>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.store_simple_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.store_si1') }}</li>
                            <li>&#10004; {{ trans('price.store_si2') }}</li>
                            <li>&#10004; {{ trans('price.store_si3') }}</li>
                            <li>&#10004; {{ trans('price.store_si4') }}</li>
                            <li>&#10004; {{ trans('price.store_si5') }}</li>
                            <li>&#10004; {{ trans('price.store_si6') }}</li>
                            <li>&#10004; {{ trans('price.store_si7') }}</li>
                            <li>&#10004; {{ trans('price.store_si8') }}</li>
                            <li>&#10004; {{ trans('price.store_si9') }}</li>
                            <li>&#10004; {{ trans('price.store_si10') }}</li>
                            <li>&#10004; {{ trans('price.store_si11') }}</li>
                            <li>&#10004; {{ trans('price.store_si12') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.store_standart_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.store_st1') }}</li>
                            <li>&#10004; {{ trans('price.store_st2') }}</li>
                            <li>&#10004; {{ trans('price.store_st3') }}</li>
                            <li>&#10004; {{ trans('price.store_st4') }}</li>
                            <li>&#10004; {{ trans('price.store_st5') }}</li>
                            <li>&#10004; {{ trans('price.store_st6') }}</li>
                            <li>&#10004; {{ trans('price.store_st7') }}</li>
                            <li>&#10004; {{ trans('price.store_st8') }}</li>
                            <li>&#10004; {{ trans('price.store_st9') }}</li>
                            <li>&#10004; {{ trans('price.store_st10') }}</li>
                            <li>&#10004; {{ trans('price.store_st11') }}</li>
                            <li>&#10004; {{ trans('price.store_st12') }}</li>
                            <li>&#10004; {{ trans('price.store_st13') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.store_individual_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.store_in1') }}</li>
                            <li>&#10004; {{ trans('price.store_in2') }}</li>
                            <li>&#10004; {{ trans('price.store_in3') }}</li>
                            <li>&#10004; {{ trans('price.store_in4') }}</li>
                            <li>&#10004; {{ trans('price.store_in5') }}</li>
                            <li>&#10004; {{ trans('price.store_in6') }}</li>
                            <li>&#10004; {{ trans('price.store_in7') }}</li>
                            <li>&#10004; {{ trans('price.store_in8') }}</li>
                            <li>&#10004; {{ trans('price.store_in9') }}</li>
                            <li>&#10004; {{ trans('price.store_in10') }}</li>
                            <li>&#10004; {{ trans('price.store_in11') }}</li>
                            <li>&#10004; {{ trans('price.store_in12') }}</li>
                            <li>&#10004; {{ trans('price.store_in13') }}</li>
                            <li>&#10004; {{ trans('price.store_in14') }}</li>
                            <li>&#10004; {{ trans('price.store_in15') }}</li>
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
                <b>{{ trans('site.shop1') }}</b> <?=trans('site.shop2')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/internet_shop.jpg" alt="Makklays - Online store - e-commerce website - image1" title="Online store - e-commerce website" class="img-fluid" />
        </div>
        <div class="col-md-12">
            <p class="text-left">
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
            <p class="text-left">
                <?=trans('site.shop5')?>
                <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="a-green">{{ trans('site.shop6') }}</a><?=trans('site.shop7')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.shop8')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.shop9')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.shop10')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.shop11')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.shop12') }}</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.shop13')?>
                <a href="{{ route('mysite_online_brief', app()->getLocale()) }}" class="a-green"><?=trans('site.shop14')?></a>
                <?=trans('site.shop15')?>
            </p>
        </div>
    </div>

@endsection
