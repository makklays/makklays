@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">{{ trans('site.mysite_about') }}</h1> <br/>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.about_text1')?>
                <?=trans('site.about_text1.1')?> <br/><br/>
                <?=trans('site.about_text2')?> <br/><br/>
                <?=trans('site.about_text3')?> <br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/planshet2.png" alt="About makklays" title="About makklays" class="img-fluid kromka" />
        </div>

        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.about_text4')?> <br/><br/>
                <?=trans('site.about_text4.1')?> <br/>
            </p>
        </div>

        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/team.png" alt="." title="" class="img-fluid kromka" />
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

        <div class="col-md-12">
            <br/><br/>
            <div class="form-group text-center">
                <button type="button" id="id_order_development" class="btn btn-success" data-toggle="modal">
                    {{ trans('site.order_development') }}
                </button>
            </div>
            <br/>
        </div>
    </div>

@endsection
