@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.m_store') }}</h2> <br/>
        </div>
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
