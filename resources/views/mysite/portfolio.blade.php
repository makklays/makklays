@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">{{ trans('site.mysite_last_work') }}</h1> <br/>
        </div>

        <div class="col-md-4 text-center">
            <a href="/img/portfolio/mitsubishi-poltava1.png" data-fancybox>
                <img src="/img/portfolio/mitsubishi-poltava1.png" class="img-fluid kromka" alt="MITSUBISHI-POLTAVA.COM.UA image" title="MITSUBISHI-POLTAVA.COM.UA" />
            </a>
            <a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="a-green"><?=trans('site.m_lpage')?></a> <br/>
            <?=trans('site.Prodaga_tovara')?> <br/>
            MITSUBISHI-POLTAVA.COM.UA
        </div>

        <div class="col-md-4 text-center">
            <a href="/img/portfolio/dog_in_ua.png" data-fancybox>
                <img src="/img/portfolio/dog_in_ua.png" class="img-fluid kromka" alt="DOG.in.UA image" title="DOG.in.UA" />
            </a>
            <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="a-green"><?=trans('site.m_corporate')?></a> <br/>
            <?=trans('site.Social_project')?> <br/>
            DOG.IN.UA
        </div>

        <!--div class="col-md-4 text-center">
            <img src="/img/portfolio/dog_in_ua.png" class="img-fluid kromka" alt="DOG.in.UA image" title="DOG.in.UA" />
            <a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="a-green">Сайт-система</a> <br/>
            LINK
        </div-->

        <!--div class="col-md-4 text-center">
            <img src="/img/portfolio/dog_in_ua.png" class="img-fluid kromka" alt="DOG.in.UA image" title="DOG.in.UA" />
            <a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="a-green">Сайт-система</a> <br/>
            LINK
        </div-->
    </div>

@endsection
