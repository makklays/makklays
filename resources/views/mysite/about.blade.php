@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">{{ trans('site.mysite_about') }}</h1> <br/>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-12 col-12">
            <p class="text-left">
                <?=trans('site.about_text1')?>
                <?=trans('site.about_text1.1')?> <br/><br/>
                <?=trans('site.about_text2')?> <br/><br/>
                <?=trans('site.about_text3')?> <br/>
            </p>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-12">
            <img src="<?=config('app.url')?>/img/planshet2.png" alt="About makklays" title="About makklays" class="img-fluid kromka" />
        </div>

        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.about_text4')?> <br/><br/>
                <?=trans('site.about_text4.1')?> <br/>
            </p>
        </div>

        <div class="col-md-12">
            <p class="text-left">
                <?=trans('site.text_sobre_wee')?>
            </p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="o-item" style="margin-top: 40px;">
                <div class="o-circle" style="padding-bottom: 140px;">
                    <div style="position: relative; z-index: 1;">
                        <div class="o-cir" style="border-width: 2px; border-color: #267f00; background: #267f00;"></div>
                        <div class="o-number" style="color: #FFFFFF;">1</div>
                    </div>
                    <div style="position: absolute; height:100%; left:50%; width:2px; background:#267f00;"></div>
                </div>
                <div class="o-h" style="padding-bottom: 15px;">
                    <div class="o-title" style="color:#000000;">
                        {{ trans('site.about_text6') }} <br/>
                    </div>
                    <div class="o-descr" style="color:#000000; font-size:20px; font-weight:400;">
                        <div style="font-size:18px;">
                            <i>{{ trans('site.about_text7') }}</i>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-item">
                <div class="o-circle" style="padding-bottom: 140px;">
                    <div style="position: relative; z-index: 1;">
                        <div class="o-cir" style="border-width: 2px; border-color: #267f00; background: #267f00;"></div>
                        <div class="o-number" style="color: #FFFFFF;">2</div>
                    </div>
                    <div style="position: absolute; height:100%; left:50%; width:2px; background:#267f00;"></div>
                </div>
                <div class="o-h" style="padding-bottom: 15px;">
                    <div class="o-title" style="color:#000000;">
                        {{ trans('site.about_text8') }} <br/>
                    </div>
                    <div class="o-descr" style="color:#000000; font-size:20px; font-weight:400;">
                        <div style="font-size:18px;">
                            <i>{{ trans('site.about_text9') }}</i>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-item">
                <div class="o-circle" style="padding-bottom: 140px;">
                    <div style="position: relative; z-index: 1;">
                        <div class="o-cir" style="border-width: 2px; border-color: #267f00; background: #267f00;"></div>
                        <div class="o-number" style="color: #FFFFFF;">3</div>
                    </div>
                    <div style="position: absolute; height:100%; left:50%; width:2px; background:#267f00;"></div>
                </div>
                <div class="o-h" style="padding-bottom: 15px;">
                    <div class="o-title" style="color:#000000;">
                        {{ trans('site.about_text10') }} <br/>
                    </div>
                    <div class="o-descr" style="color:#000000; font-size:20px; font-weight:400;">
                        <div style="font-size:18px;">
                            <i>{{ trans('site.about_text11') }}</i>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-item">
                <div class="o-circle" style="padding-bottom: 140px;">
                    <div style="position: relative; z-index: 1;">
                        <div class="o-cir" style="border-width: 2px; border-color: #267f00; background: #267f00;"></div>
                        <div class="o-number" style="color: #FFFFFF;">4</div>
                    </div>
                    <div style="position: absolute; height:100%; left:50%; width:2px; background:#267f00;"></div>
                </div>
                <div class="o-h" style="padding-bottom: 15px;">
                    <div class="o-title" style="color:#000000;">
                        {{ trans('site.about_text12') }} <br/>
                    </div>
                    <div class="o-descr" style="color:#000000; font-size:20px; font-weight:400;">
                        <div style="font-size:18px;">
                            <i>{{ trans('site.about_text13') }}</i>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-item">
                <div class="o-circle" style="padding-bottom: 140px;">
                    <div style="position: relative; z-index: 1;">
                        <div class="o-cir" style="border-width: 2px; border-color: #267f00; background: #267f00;"></div>
                        <div class="o-number" style="color: #FFFFFF;">5</div>
                    </div>
                    <!--div style="position: absolute; height:100%; left:50%; width:2px; background:#267f00;"></div-->
                </div>
                <div class="o-h" style="padding-bottom:40px;">
                    <div class="o-title" style="color:#000000;">
                        {{ trans('site.about_text14') }} <br/>
                    </div>
                    <div class="o-descr" style="color:#000000; font-size:20px; font-weight:400;">
                        <div style="font-size:18px;">
                            <i>{{ trans('site.about_text15') }}</i>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--div class="col-md-5">
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
        </div-->

        <div class="col-md-12">
            <div class="form-group text-center">
                <button type="button" id="id_order_development" class="btn btn-success" data-toggle="modal">
                    {{ trans('site.order_development') }}
                </button>
            </div>
            <br/>
        </div>
    </div>

@endsection
