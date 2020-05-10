@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.m_corporate') }}</h2> <br/>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.corp1', ['url_shop' => route('mysite_store', app()->getLocale())])?>
                <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="/img/corp.jpg" alt="Makklays - Corporate site image1" title="Corporate site" class="img-fluid" />
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.corp2')?>
                <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp3')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.corp4')?>
                <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp5')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <h4><?=trans('site.corp6')?></h4> <br/>
            <p class="text-justify">
                <?=trans('site.corp7')?> <br/><br/>
            </p>
            <h4><?=trans('site.corp8')?></h4> <br/>
            <p class="text-justify">
                <?=trans('site.corp9')?> <br/><br/>
            </p>
            <h4><?=trans('site.corp10')?></h4> <br/>
            <p class="text-justify">
                <?=trans('site.corp11')?>
                <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp12')?></h2> <br/>
        </div>
        <div class="col-md-5">
            <img src="/img/corp2.jpg" alt="Makklays - Corporate site image2" title="Corporate site" class="img-fluid" />
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.corp13')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.corp14')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.corp15')?>
            </p>
            <p class="text-justify">
                <?=trans('site.corp16')?>
            </p>
        </div>
    </div>

@endsection
