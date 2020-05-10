@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.webapi') }}</h2> <br/>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.wepapi1')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="/img/api.jpg" alt="Makklays - Web service - image1" title="Web service" class="img-fluid" />
        </div>

        <div class="col-md-5">
            <img src="/img/api2.png" alt="Makklays - Web service - image2" title="Web service" class="img-fluid" />
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.wepapi2')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-7">
            <p class="text-justify">
                <?=trans('site.webapi3')?> <br/><br/>
            </p>
        </div>
        <div class="col-md-5">
            <img src="/img/api3.png" alt="Makklays - Web service - image3" title="Web service" class="img-fluid" />
        </div>

        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.webapi4')?> <br/><br/>
            </p>
        </div>

        <div class="col-md-12">
            <h2 class="text-center text-design2"><?=trans('site.wepapi5')?></h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-justify">
                <?=trans('site.wepapi6')?>
            </p>
        </div>
    </div>

@endsection
