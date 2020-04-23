
@extends('layouts.simple')

@section('content')

    <div style="margin-left:auto; margin-right:auto; " class="rezina-width text-center">
        <div style="margin-bottom:40px;"><b class="grey">{{ trans('site.mysite_howmake') }}</b></div>

        <div style="margin-bottom:40px;"><span id="wait"></span></div>

        <div class="rezina-width rezina-border">
            <div class="text-center">
                <h2>{{ trans('site.mysite_howmake') }}</h2> <br/>
                <img src="/img/site/crm2.png" alt="." title="" class="rezina-img" />
                <br/><br/>
            </div>

            <br/>
            {{ trans('site.howmake1') }} <br/><br/>

            <b>{{ trans('site.howmake2') }}</b> <br/><br/>
            - {{ trans('site.howmake3') }} <br/>
            - {{ trans('site.howmake4') }} <br/>
            - {{ trans('site.howmake5') }} <br/>
            - {{ trans('site.howmake6') }} <br/>
            - {{ trans('site.howmake7') }} <br/>
            - {{ trans('site.howmake8') }} <br/>
            - {{ trans('site.howmake9') }} <br/><br/>

            {{ trans('site.howmake10') }} <br/>
            {{ trans('site.howmake11') }} <br/>
            {{ trans('site.howmake12') }} <br/><br/>

            <b>{{ trans('site.howmake13') }}</b> <br/>
            - {{ trans('site.howmake14') }} <br/>
            - {{ trans('site.howmake15') }} <br/>
            - {{ trans('site.howmake16') }} <br/><br/>

            <div class="text-center">
                <form action="{{ route('mysite_contacts', app()->getLocale()) }}" method="get">
                    <input type="submit" class="btn btn-success text-center btn-lg" value="{{ trans('site.order_consultation') }}" />
                </form>
            </div>
            <br/><br/>

            <div class="text-center">
                <h2>{{ trans('site.our_advantages') }}</h2>
            </div>
            <br/>
            - <b>{{ trans('site.adv1') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.adv1_det') }} </span><br/><br/>
            - <b>{{ trans('site.adv2') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.adv2_det') }} </span><br/><br/>
            - <b>{{ trans('site.adv3') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.adv3_det') }} </span><br/><br/>
            - <b>{{ trans('site.adv4') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.adv4_det') }} </span><br/><br/>
            - <b>{{ trans('site.adv5') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.adv5_det') }} </span><br/><br/>
            - <b>{{ trans('site.adv6') }}</b> <br/>
            <span style="font-size:14px;">{{ trans('site.adv6_det') }} </span><br/>
            <br/><br/>

            <div class="text-center">
                <h2>{{ trans('site.garantiya') }}!</h2>
                <img src="/img/site/garantiya.png" alt="." title="{{ trans('site.garantiya') }}!" class="rezina-img" />
            </div>

            <br/>
            - <b>{{ trans('site.zapusk') }}</b> <br/>
                {{ trans('site.zapusk_det') }} <br/><br/>
            - <b>{{ trans('site.podelu') }}</b> <br/>
                {{ trans('site.podelu_det') }} <br/><br/>
            - <b>{{ trans('site.garant') }}</b> <br/>
                {{ trans('site.garant_det') }} <br/><br/><br/>

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
            <a href="{{ route('mysite_howmake', 'es') }}">ES</a> |
            <a href="{{ route('mysite_howmake', 'en') }}">EN</a> |
            <a href="{{ route('mysite_howmake', 'ru') }}">RU</a> |
            <a href="{{ route('mysite_howmake', 'ch') }}">CH</a>
        </div>
    </div>

@endsection
