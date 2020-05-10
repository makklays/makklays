@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal1') }}</h2>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.portal2')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/webportal.png" class="img-fluid" alt="Makklays - Web-portal image1" title="Web-portal" />
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal3') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal4')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal5') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal6')?>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal7') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal8')?> <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal9') }}</h2>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/webportal4.jpg" class="img-fluid" alt="Makklays - Web-portal image2" title="Web-portal" />
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.portal10')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal11')?> <br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.portal12') }}</h2>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.portal13')?>
            </p>
        </div>
    </div>

@endsection
