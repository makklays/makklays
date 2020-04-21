
@extends('layouts.simple')

@section('content')

    <div style="margin-left:auto; margin-right:auto; " class="rezina-width text-center">
        <div style="margin-bottom:40px;"><b class="grey">{{ trans('site.mysite_about') }}</b></div>

        <div style="margin-bottom:40px;"><span id="wait"></span></div>

        <div style="" class="rezina-width rezina-border">
            <div class="text-center">
                <h2>{{ trans('site.mysite_about') }}</h2> <br/>
                <img src="/img/site/crm2.png" alt="." title="" class="rezina-img" />
                <br/><br/>
            </div>

            <br/>
            {{ trans('site.about_text1') }} <br/>
            {{ trans('site.about_text2') }} <br/>
            {{ trans('site.about_text3') }} <br/>
            {{ trans('site.about_text4') }} <br/>
            <br/><br/>

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

            {{ trans('site.about_text16') }} <br/>
            - {{ trans('site.about_text17') }} <br/>
            - {{ trans('site.about_text18') }} <br/>
            - {{ trans('site.about_text19') }} <br/>
            - {{ trans('site.about_text20') }} <br/>
            - {{ trans('site.about_text21') }} <br/>
            - {{ trans('site.about_text22') }} <br/>
            - {{ trans('site.about_text23') }} <br/>
            - {{ trans('site.about_text24') }} <br/><br/>
            <br/>

            <div class="form-group text-center">
                <form action="{{ route('feedback', app()->getLocale()) }}" method="get">
                    <input type="submit" class="btn btn-success text-center btn-lg" value="{{ trans('site.сheckout') }}" />
                </form>
            </div>
            <br/>
        </div>
    </div>

    <div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <div style="margin: 20px 0 10px 0;">
            <a href="{{ route('mysite_about', 'es') }}">ES</a> |
            <a href="{{ route('mysite_about', 'en') }}">EN</a> |
            <a href="{{ route('mysite_about', 'ru') }}">RU</a> |
            <a href="{{ route('mysite_about', 'ch') }}">CH</a>
        </div>
    </div>

@endsection
