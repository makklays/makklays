@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.m_lpage') }}</h2> <br/>
        </div>
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
