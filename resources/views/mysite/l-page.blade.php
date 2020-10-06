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
                {{ trans('price.text_landing') }} <br/>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.pland_simple_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.pland_si1') }}</li>
                            <li>&#10004; {{ trans('price.pland_si2') }}</li>
                            <li>&#10004; {{ trans('price.pland_si3') }}</li>
                            <li>&#10004; {{ trans('price.pland_si4') }}</li>
                            <li>&#10004; {{ trans('price.pland_si5') }}</li>
                            <li>&#10004; {{ trans('price.pland_si6') }}</li>
                            <li>&#10004; {{ trans('price.pland_si7') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.pland_standart_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.pland_st1') }}</li>
                            <li>&#10004; {{ trans('price.pland_st2') }}</li>
                            <li>&#10004; {{ trans('price.pland_st3') }}</li>
                            <li>&#10004; {{ trans('price.pland_st4') }}</li>
                            <li>&#10004; {{ trans('price.pland_st5') }}</li>
                            <li>&#10004; {{ trans('price.pland_st6') }}</li>
                            <li>&#10004; {{ trans('price.pland_st7') }}</li>
                            <li>&#10004; {{ trans('price.pland_st8') }}</li>
                            <li>&#10004; {{ trans('price.pland_st9') }}</li>
                            <li>&#10004; {{ trans('price.pland_st10') }}</li>
                            <li>&#10004; {{ trans('price.pland_st11') }}</li>
                            <li>&#10004; {{ trans('price.pland_st12') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.pland_individual_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.pland_in1') }}</li>
                            <li>&#10004; {{ trans('price.pland_in2') }}</li>
                            <li>&#10004; {{ trans('price.pland_in3') }}</li>
                            <li>&#10004; {{ trans('price.pland_in4') }}</li>
                            <li>&#10004; {{ trans('price.pland_in5') }}</li>
                            <li>&#10004; {{ trans('price.pland_in6') }}</li>
                            <li>&#10004; {{ trans('price.pland_in7') }}</li>
                            <li>&#10004; {{ trans('price.pland_in8') }}</li>
                            <li>&#10004; {{ trans('price.pland_in9') }}</li>
                            <li>&#10004; {{ trans('price.pland_in10') }}</li>
                            <li>&#10004; {{ trans('price.pland_in11') }}</li>
                            <li>&#10004; {{ trans('price.pland_in12') }}</li>
                            <li>&#10004; {{ trans('price.pland_in13') }}</li>
                            <li>&#10004; {{ trans('price.pland_in14') }}</li>
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
