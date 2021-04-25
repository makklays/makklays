@extends('layouts.main10')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/', app()->getLocale()) }}" class="a-green"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('mysite_whatmake', app()->getLocale()) }}" class="a-green">{{ trans('site.Development') }}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{ trans('site.portal1') }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal1') }}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-left">
            <!--h4 class="text-center">Цены на разработку корпоративного сайта</h4-->
            <p class="text-left">
                {{ trans('price.text_webportal') }} <br/>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.portal_simple_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.wportal_si1') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si2') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si3') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si4') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si5') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si6') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si7') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si8') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si9') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si10') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si11') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si12') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si13') }}</li>
                            <li>&#10004; {{ trans('price.wportal_si14') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.portal_standart_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.wportal_st1') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st2') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st3') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st4') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st5') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st6') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st7') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st8') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st9') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st10') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st11') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st12') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st13') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st14') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st15') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st16') }}</li>
                            <li>&#10004; {{ trans('price.wportal_st17') }}</li>
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
                        <h1 class="card-title pricing-card-title">{{ trans('price.portal_individual_price') }}<small class="text-muted"></small></h1>
                        <ul class="text-left list-unstyled mt-3 mb-4">
                            <li>&#10004; {{ trans('price.wportal_in1') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in2') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in3') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in4') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in5') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in6') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in7') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in8') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in9') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in10') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in11') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in12') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in13') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in14') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in15') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in16') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in17') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in18') }}</li>
                            <li>&#10004; {{ trans('price.wportal_in19') }}</li>
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
            <p class="text-left">
                <?=trans('site.portal4')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal5') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.portal6')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal7') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-left">
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
            <p class="text-left">
                <?=trans('site.portal10')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.portal11')?> <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal12') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.portal13')?>
            </p>
        </div>
    </div>

@endsection
