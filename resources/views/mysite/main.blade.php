@extends('layouts.main8')

@section('content')

        <div class="row">
            <div class="col-md-7">
                <p class="text-left">
                    <?=trans('site.about_1')?> <br/><br/>
                    <?=trans('site.about_1_1')?> <br/><br/>
                    <?=trans('site.about_2')?>
                    <?=trans('site.about_3')?>
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?=config('app.url')?>/img/team2.png" class="img-fluid kromka" alt="." title="команда разработки сайтов makklays" />
            </div>
        </div>

        <br/><br/>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2"><?=trans('site.Who_we')?></h1>
            </div>
            <div class="col-md-12">
                <p class="text-left">
                    <?=trans('site.text_sobre_we')?>
                </p>
            </div>
        </div>

        <br/><br/>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2"><?=trans('site.Why_we')?></h1>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/years2.png" alt="Makklays - {{ trans('site.many_years') }} image 1" title="{{ trans('site.many_years') }}" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.many_years')?> <br/><br/>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/teams3.png" alt="Makklays - {{ trans('site.good_teams') }} image 2" title="{{ trans('site.good_teams') }}" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.good_teams')?> <br/><br/>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/newtecho.png" alt="Makklays - {{ trans('site.new_tech') }} image 3" title="{{ trans('site.new_tech') }}" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.new_tech')?> <br/><br/>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/my_clients2.png" alt="Makklays - {{ trans('site.work_clients') }} image 4" title="{{ trans('site.work_clients') }}" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.work_clients')?>
                </div>
            </div>
        </div>

        <br/><br/>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2"><?=trans('site.And_yet')?></h1>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/years.png" alt="Makklays - {{ trans('site.years_experience') }} image 5" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:44px;">
                    13
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.years_experience')?> <br/><br/>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/wagons_water.png" alt="Makklays - {{ trans('site.wagons') }} image 6" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:44px;">
                    7
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.wagons')?> <br/><br/>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/days2.png" alt="Makklays - {{ trans('site.days_prog') }} image 7" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:44px;">
                    >4680
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.days_prog')?> <br/><br/>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img class="img-development" src="<?=config('app.url')?>/img/icons/93percent_.png" alt="Makklays - {{ trans('site.dovol_clients') }} image 8" />
                </div>
                <div class="text-center" style="color:#46bf00; font-size:44px;">
                    93%
                </div>
                <div class="text-center" style="color:#46bf00; font-size:20px;">
                    <?=trans('site.dovol_clients')?>
                </div>
            </div>
        </div>

        <br/><br/>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.Development') }}</h1> <br/>
                <p class="text-left">
                    {{ trans('site.main_whatmake_descr') }}
                </p>
                <br/><br/>
            </div>
        </div>

        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/lpage_.png" alt="Makklays - {{ trans('site.m_lpage') }} image 9" title="{{ trans('site.m_lpage') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_lpage') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/corporate_.png" alt="Makklays - {{ trans('site.m_corporate') }} image 10" title="{{ trans('site.m_corporate') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_corporate') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/api_.png" alt="Makklays - {{ trans('site.m_webapi') }} image 11" title="{{ trans('site.m_webapi') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_webapi') }}</h2>
                </a>
            </div>
        </div>
        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in" >
                <a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/web_portal2.png" alt="Makklays - {{ trans('site.m_webportal') }} image 12" title="{{ trans('site.m_webportal') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_webportal') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm" >
                <a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/sysite.png" alt="Makklays - {{ trans('site.m_sitesystem') }} image 13" title="{{ trans('site.m_sitesystem') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_sitesystem') }}</h2>
                </a>
            </div>

            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in" >
                <a href="{{ route('mysite_store', app()->getLocale()) }}" class="text-corporate">
                    <div>
                        <img src="<?=config('app.url')?>/img/icons/store2.png" alt="Makklays - {{ trans('site.m_store') }} image 14" title="{{ trans('site.m_store') }}" class="img-development" />
                    </div>
                    <h2 class="site-sitio">{{ trans('site.m_store') }}</h2>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.mysite_howmake') }}</h1> <br/>
            </div>
            <div class="col-md-5">
                <img src="<?=config('app.url')?>/img/planshet2.png" class="img-fluid kromka" alt="." title="команда разработки сайтов makklays" />
                <br/><br/>
            </div>
            <div class="col-md-7">
                <h4>{{ trans('site.development_steps') }}:</h4><br/>
                <p class="text-left">
                1. {{ trans('site.dev1') }}; <br/>
                2. {{ trans('site.dev2') }}; <br/>
                3. {{ trans('site.dev3') }}; <br/>
                4. {{ trans('site.dev4') }}; <br/>
                5. {{ trans('site.dev5') }}; <br/>
                6. {{ trans('site.dev6') }}; <br/>
                7. {{ trans('site.dev7') }};
                </p>
            </div>
            <div class="col-md-12">
                <p class="text-left">
                    {{ trans('site.how_make1') }} <br/><br/>
                    {{ trans('site.how_make2') }} <br/><br/>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-left">
                <h1 class="text-center text-design2">{{ trans('site.Our_price') }}</h1> <br/>
            </div>
            <div class="col-md-12 text-left">
                <p class="text-left">
                    - {{ trans('site.price_text1') }} <br/>
                    - {{ trans('site.price_text2') }} <br/>
                    - {{ trans('site.price_text3') }} <br/>
                    - {{ trans('site.price_text4') }} <br/>
                    - {{ trans('site.price_text5') }} <br/><br/>
                </p>
                <p class="text-center">
                    <h4 class="text-center">{{ trans('site.Make_dorogo') }}</h4>
                </p>
                <p class="text-left">
                    {{ trans('site.make_dorogo') }} <a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="a-green">{{ trans('site.go_link') }}</a>.
                </p> <br/><br/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">{{ trans('site.m_corporate') }}</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">{{ trans('site.m_corporate_price') }}<small class="text-muted"></small></h1>
                            <ul class="text-left list-unstyled mt-3 mb-4">
                                <li>&#10004; {{ trans('site.m_corporate1') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate2') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate3') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate4') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate5') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate6') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate7') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate8') }}</li>
                                <li>&#10004; {{ trans('site.m_corporate9') }}</li>
                            </ul>
                            <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">{{ trans('site.m_store') }}</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">{{ trans('site.m_store_price') }}<small class="text-muted"></small></h1>
                            <ul class="text-left list-unstyled mt-3 mb-4">
                                <li>&#10004; {{ trans('site.m_store1') }}</li>
                                <li>&#10004; {{ trans('site.m_store2') }}</li>
                                <li>&#10004; {{ trans('site.m_store3') }}</li>
                                <li>&#10004; {{ trans('site.m_store4') }}</li>
                                <li>&#10004; {{ trans('site.m_store5') }}</li>
                                <li>&#10004; {{ trans('site.m_store6') }}</li>
                                <li>&#10004; {{ trans('site.m_store7') }}</li>
                                <li>&#10004; {{ trans('site.m_store8') }}</li>
                                <li>&#10004; {{ trans('site.m_store9') }}</li>
                                <li>&#10004; {{ trans('site.m_store10') }}</li>
                                <li>&#10004; {{ trans('site.m_store11') }}</li>
                                <li>&#10004; {{ trans('site.m_store12') }}</li>
                            </ul>
                            <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">{{ trans('site.m_sitesystem') }}</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">{{ trans('site.m_sitesystem_price') }}<small class="text-muted"></small></h1>
                            <ul class="text-left list-unstyled mt-3 mb-4">
                                <li>&#10004; {{ trans('site.m_sitesystem1') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem2') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem3') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem4') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem5') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem6') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem7') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem8') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem9') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem10') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem11') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem12') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem13') }}</li>
                                <li>&#10004; {{ trans('site.m_sitesystem14') }}</li>
                            </ul>
                            <a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.feedbacks') }}</h1>
                <p class="text-center">{{ trans('site.our_clients_speak') }}</p>
            </div>
        </div>
        <div class="carousel slide py-4" data-interval="false" data-ride="carousel" id="successStories">
            <ol class="carousel-indicators">
                <li class="" data-slide-to="0" data-target="#successStories"></li>
                <li data-slide-to="1" data-target="#successStories" class="active"></li>
                <li data-slide-to="2" data-target="#successStories"></li>
            </ol>
            <div class="carousel-inner pb-4">
                <span class="x-link-without-decoration carousel-item" href="/blog/posts/moy-put-i-rol-hexlet-v-moyom-razvitii"><div class="row slide justify-content-center">
                        <div class="col-12 col-md-10 col-lg-2 d-flex align-items-center d-lg-block mb-5">
                            <div class="mb-lg-4">
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя" src="<?=config('app.url')?>/img/foto3.jpg">
                            </div>
                            <div class="ml-4 ml-lg-0">
                                <div class="h3 font-weight-bold">Kirill Zakimov</div>
                                <div class="h5 mb-0 font-italic">{{ trans('site.review1_city') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <p class="lead text-justify">«{{ trans('site.review3') }}»</p>
                        </div>
                    </div>
                </span>
                <span class="x-link-without-decoration carousel-item " href="/blog/posts/kak-ya-stal-programmistom-v-33-goda"><div class="row slide justify-content-center">
                        <div class="col-12 col-md-10 col-lg-2 d-flex align-items-center d-lg-block mb-5">
                            <div class="mb-lg-4">
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя" src="<?=config('app.url')?>/img/foto.jpg">
                            </div>
                            <div class="ml-4 ml-lg-0">
                                <div class="h3 font-weight-bold">Valeriy Zadavysvichka</div>
                                <div class="h5 mb-0 font-italic">{{ trans('site.review1_city') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <p class="lead text-justify">«{{ trans('site.review1') }}»</p>
                        </div>
                    </div>
                </span>
                <span class="x-link-without-decoration carousel-item active" href="/blog/posts/feycot-success-story"><div class="row slide justify-content-center">
                        <div class="col-12 col-md-10 col-lg-2 d-flex align-items-center d-lg-block mb-5">
                            <div class="mb-lg-4">
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя" src="<?=config('app.url')?>/img/foto2.jpg">
                            </div>
                            <div class="ml-4 ml-lg-0">
                                <div class="h3 font-weight-bold">Katy Antonenko</div>
                                <div class="h5 mb-0 font-italic">{{ trans('site.review2_city') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <p class="lead text-justify">«{{ trans('site.review2') }}»</p>
                        </div>
                    </div>
                </span>
            </div>
            <a class="carousel-control-prev x-link-without-decoration d-none d-md-flex" data-slide="prev" href="#successStories" role="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next x-link-without-decoration d-none d-md-flex" data-slide="next" href="#successStories" role="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Статьи -->
        <?php if (isset($articles) && !empty($articles)):?>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-design2">{{ trans('site.Articles') }}</h1> <br/>
                </div>
                <?php foreach($articles as $item): ?>
                    <div class="col-md-4">
                        <p class="text-left">
                            <?php if (isset($item->photo) && !empty($item->photo)): ?>
                                <img src="<?=config('app.url')?>/articles/imgs/<?=$item->photo?>" alt="." title="<?=$item->title?>" class="img-fluid kromka" />
                            <?php else: ?>
                                <img src="<?=config('app.url')?>/img/empty_img2.png" alt="." title="<?=$item->title?>" class="img-fluid kromka" />
                            <?php endif; ?>
                        </p>
                        <h4><?=$item->title?></h4>
                        <p class="text-left"><?=$item->short_text?></p>
                        <p><a class="btn btn-secondary" href="{{ route('mysite_article', [app()->getLocale(), $item->slag]) }}" role="button"><?=trans('site.Read')?> &raquo;</a></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <br/><br/>
        <?php endif; ?>

@endsection
