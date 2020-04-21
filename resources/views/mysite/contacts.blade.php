
@extends('layouts.simple')

@section('content')

    <div style="text-align:center; margin-left:auto; margin-right:auto;" class="rezina-width">
        <div style="margin-bottom:40px;"><b class="grey">{{ trans('site.mysite_contacts') }}</b></div>

        <div style="margin-bottom:40px;"><span id="wait"></span></div>

        <!--div style="margin-bottom:40px; text-align:center; width:700px; font-size:18px; padding:10px;">
            <a href="{{ route('mysite_about', app()->getLocale()) }}">О нас</a> |
            <a href="{{ route('mysite_howmake', app()->getLocale()) }}">Как мы работаем?</a> |
            <a href="{{ route('mysite_contacts', app()->getLocale()) }}">Контакты</a>
        </div-->

        <div style="" class="rezina-width rezina-border">
            <div class="text-center">
                <h2>{{ trans('site.mysite_contacts') }}</h2>
            </div>

            <br/>
            {{ trans('site.contacts1') }} <br/><br/>

            {{ trans('site.contacts2') }} <br/><br/>
            {{ trans('site.contacts_mob') }}: +38 (098) 870 5397 <br/>
            {{ trans('site.contacts_skype') }}: makklays <br/>
            {{ trans('site.contacts_email') }}: alexander@makklays.com.ua <br/><br/>

            <div class="form-group text-center">
                <a href="{{ route('mysite_brief', app()->getLocale()) }}" target="_blank">{{ trans('site.mysite_brief') }}</a> <br/><br/>

                <form action="{{ route('feedback', app()->getLocale()) }}" method="get">
                    <input type="submit" class="btn btn-success text-center btn-lg" value="{{ trans('site.сheckout') }}" />
                </form>
            </div>
            <br/>
        </div>
    </div>

    <div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <div style="margin: 20px 0 10px 0;">
            <a href="{{ route('mysite_contacts', 'es') }}">ES</a> |
            <a href="{{ route('mysite_contacts', 'en') }}">EN</a> |
            <a href="{{ route('mysite_contacts', 'ru') }}">RU</a> |
            <a href="{{ route('mysite_contacts', 'ch') }}">CH</a>
        </div>
    </div>

@endsection
