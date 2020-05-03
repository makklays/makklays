
@extends('layouts.main8')

@section('content')

    <!--br/>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/', app()->getLocale()) }}" class="a-green">{{ trans('site.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ trans('site.mysite_about') }}</li>
        </ol>
    </nav-->

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">{{ trans('site.mysite_about') }}</h1> <br/>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                {{ trans('site.about_text1') }} <br/>
                {{ trans('site.about_text2') }} <br/><br/>
                {{ trans('site.about_text3') }} <br/><br/>
                {{ trans('site.about_text4') }} <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="/img/planshet2.png" alt="." title="About makklays" class="img-fluid kromka" />
        </div>

        <!--div class="col-md-12">
            <br/><hr/><br/>
        </div-->

        <div class="col-md-5">
            <img src="/img/team.png" alt="." title="" class="img-fluid kromka" />
        </div>
        <div class="col-md-7">
            {{ trans('site.about_text5') }} <br/><br/>
            1. <b>{{ trans('site.about_text6') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.about_text7') }}</span><br/><br/>
            2. <b>{{ trans('site.about_text8') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.about_text9') }}</span><br/><br/>
            3. <b>{{ trans('site.about_text10') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.about_text11') }}</span><br/><br/>
            4. <b>{{ trans('site.about_text12') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.about_text13') }}</span><br/><br/>
            5. <b>{{ trans('site.about_text14') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.about_text15') }}</span><br/><br/>
        </div>

        <!--div class="col-md-12">
            <hr/>
        </div-->

        <div class="col-md-12">
            <br/><br/>
            <!--
            {{ trans('site.about_text16') }} <br/>
            - {{ trans('site.about_text17') }} <br/>
            - {{ trans('site.about_text18') }} <br/>
            - {{ trans('site.about_text19') }} <br/>
            - {{ trans('site.about_text20') }} <br/>
            - {{ trans('site.about_text21') }} <br/>
            - {{ trans('site.about_text22') }} <br/>
            - {{ trans('site.about_text23') }} <br/>
            - {{ trans('site.about_text24') }} <br/><br/><br/>
            -->
            <div class="form-group text-center">
                <button type="button" id="id_order_development" class="btn btn-success" data-toggle="modal">
                    {{ trans('site.order_development') }}
                </button>
            </div>
            <br/>
        </div>
    </div>

@endsection
