@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.m_corporate') }}</h2> <br/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-left">
            <!--h4 class="text-center">Цены на разработку корпоративного сайта</h4-->
            <p class="text-left">
                {{ trans('price.text_corp') }} <br/>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.corp_simple_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.corp_si1') }}</li>
                            <li>&#10004; {{ trans('price.corp_si2') }}</li>
                            <li>&#10004; {{ trans('price.corp_si3') }}</li>
                            <li>&#10004; {{ trans('price.corp_si4') }}</li>
                            <li>&#10004; {{ trans('price.corp_si5') }}</li>
                            <li>&#10004; {{ trans('price.corp_si6') }}</li>
                            <li>&#10004; {{ trans('price.corp_si7') }}</li>
                            <li>&#10004; {{ trans('price.corp_si8') }}</li>
                            <li>&#10004; {{ trans('price.corp_si9') }}</li>
                            <li>&#10004; {{ trans('price.corp_si10') }}</li>
                            <li>&#10004; {{ trans('price.corp_si11') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.corp_standart_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.corp_st1') }}</li>
                            <li>&#10004; {{ trans('price.corp_st2') }}</li>
                            <li>&#10004; {{ trans('price.corp_st3') }}</li>
                            <li>&#10004; {{ trans('price.corp_st4') }}</li>
                            <li>&#10004; {{ trans('price.corp_st5') }}</li>
                            <li>&#10004; {{ trans('price.corp_st6') }}</li>
                            <li>&#10004; {{ trans('price.corp_st7') }}</li>
                            <li>&#10004; {{ trans('price.corp_st8') }}</li>
                            <li>&#10004; {{ trans('price.corp_st9') }}</li>
                            <li>&#10004; {{ trans('price.corp_st10') }}</li>
                            <li>&#10004; {{ trans('price.corp_st11') }}</li>
                            <li>&#10004; {{ trans('price.corp_st12') }}</li>
                            <li>&#10004; {{ trans('price.corp_st13') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.corp_individual_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.corp_in1') }}</li>
                            <li>&#10004; {{ trans('price.corp_in2') }}</li>
                            <li>&#10004; {{ trans('price.corp_in3') }}</li>
                            <li>&#10004; {{ trans('price.corp_in4') }}</li>
                            <li>&#10004; {{ trans('price.corp_in5') }}</li>
                            <li>&#10004; {{ trans('price.corp_in6') }}</li>
                            <li>&#10004; {{ trans('price.corp_in7') }}</li>
                            <li>&#10004; {{ trans('price.corp_in8') }}</li>
                            <li>&#10004; {{ trans('price.corp_in9') }}</li>
                            <li>&#10004; {{ trans('price.corp_in10') }}</li>
                            <li>&#10004; {{ trans('price.corp_in11') }}</li>
                            <li>&#10004; {{ trans('price.corp_in12') }}</li>
                            <li>&#10004; {{ trans('price.corp_in13') }}</li>
                            <li>&#10004; {{ trans('price.corp_in14') }}</li>
                            <li>&#10004; {{ trans('price.corp_in15') }}</li>
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
                <?=trans('site.corp1', ['url_shop' => route('mysite_store', app()->getLocale())])?>
                <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/corp.jpg" alt="Makklays - Corporate site image1" title="Corporate site" class="img-fluid" />
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.corp2')?>
                <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp3')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.corp4')?>
                <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp5')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <h4><?=trans('site.corp6')?></h4> <br/>
            <p class="text-left">
                <?=trans('site.corp7')?> <br/><br/>
            </p>
            <h4><?=trans('site.corp8')?></h4> <br/>
            <p class="text-left">
                <?=trans('site.corp9')?> <br/><br/>
            </p>
            <h4><?=trans('site.corp10')?></h4> <br/>
            <p class="text-left">
                <?=trans('site.corp11')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp12')?></h2> <br/>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/corp2.jpg" alt="Makklays - Corporate site image2" title="Corporate site" class="img-fluid" />
        </div>
        <div class="col-md-7">
            <p class="text-left">
                <?=trans('site.corp13')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp14')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.corp15')?>
            </p>
            <p class="text-left">
                <?=trans('site.corp16')?>
            </p>
        </div>
    </div>

@endsection
