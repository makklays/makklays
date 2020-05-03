
@extends('layouts.main8')

@section('content')

    <!--br/>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/', app()->getLocale()) }}" class="a-green">{{ trans('site.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ trans('site.mysite_contacts') }}</li>
        </ol>
    </nav-->

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">{{ trans('site.mysite_contacts') }}</h1> <br/>
        </div>
        <div class="col-md-6">
            <img src="/img/contacts_.jpg" alt="." title="" class="img-fluid kromka" />
        </div>
        <div class="col-md-6">

            {{ trans('site.contacts1') }} <br/><br/>

            <address>
                <strong>{{ trans('site.Address') }}</strong><br/>
                {{ trans('site.contacts2') }} <br/>
            </address>
            <address>
                <strong>{{ trans('site.mysite_contacts') }}</strong><br/>
                <abbr title="{{ trans('site.contacts_skype') }}">{{ trans('site.contacts_skype') }}:</abbr> makklays <br/>
                <abbr title="{{ trans('site.contacts_mob') }}">{{ trans('site.contacts_mob') }}:</abbr> +38 (098) 870 5397 <br/>
                <a href="mailto:office@makklays.com.ua" class="a-green">office@makklays.com.ua</a> <br/>
            </address>
            <address>
                <strong>{{ trans('site.Times_working') }}</strong> <br/>
                <span>{{ trans('site.mon_fri') }}</span> <br/>
                <span>{{ trans('site.sur_sun') }}</span>
            </address>

            <br/><br/>
        </div>

        <div class="col-md-12" style="margin:30px 0 30px 0;">
            <div class="form-group text-center">
                <a href="{{ route('mysite_brief', app()->getLocale()) }}" target="_blank" class="a-green link-big2">
                    {{ trans('site.mysite_brief') }}
                </a> <br/><br/>

                <a href="{{ route('mysite_online_brief', app()->getLocale()) }}" class="a-green link-big2">
                    {{ trans('site.m_brief_online') }}
                </a> <br/><br/>

                <button type="button" id="id_order_development" class="btn btn-success" data-toggle="modal">
                    {{ trans('site.order_development') }}
                </button>
            </div>
        </div>
    </div>

@endsection
