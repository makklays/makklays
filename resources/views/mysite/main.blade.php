
@extends('layouts.main8')

@section('content')

        <div class="row">
            <!--div class="col-md-12">
                <br/><h1 class="text-center text-design2">{{ trans('site.mysite_about') }}</h1> <br/>
            </div-->
            <div class="col-md-7">
                <p class="text-justify">
                    {{ trans('site.about_1') }} <br/><br/>
                    {{ trans('site.about_1_1') }} <br/><br/>
                    {{ trans('site.about_2') }} <br/><br/>
                    {{ trans('site.about_3') }}
                </p>
            </div>
            <div class="col-md-5">
                <img src="/img/team2.png" class="img-fluid kromka" alt="." title="команда разработки сайтов makklays" />
            </div>
        </div>

        <br/><br/>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.Development') }}</h1> <br/>
                <p class="text-justify">
                    {{ trans('site.main_whatmake_descr') }}
                </p>
                <br/><br/>
            </div>
        </div>
        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <div>
                    <img src="/img/icons/lpage.png" alt="." title="" style="width:100px; height:100px; margin:0 0 30px 0;" />
                </div>
                <h5><a href="{{ route('mysite_lpage', app()->getLocale()) }}" class="a-green">{{ trans('site.m_lpage') }}</a></h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <div>
                    <img src="/img/icons/notebook.png" alt="." title="" style="width:100px; height:100px; margin:0 0 30px 0;" />
                </div>
                <h5><a href="{{ route('mysite_corporate', app()->getLocale()) }}" class="a-green">{{ trans('site.m_corporate') }}</a></h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <div>
                    <img src="/img/icons/mob_api.png" alt="." title="" style="width:100px; height:100px; margin:0 0 30px 0;" />
                </div>
                <h5><a href="{{ route('mysite_webservice', app()->getLocale()) }}" class="a-green">{{ trans('site.m_webapi') }}</a></h5>
            </div>
        </div>
        <div class="card-deck mb-3">
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <div>
                    <img src="/img/icons/web_portal.png" alt="." title="" style="width:100px; height:100px; margin:0 0 30px 0;" />
                </div>
                <h5><a href="{{ route('mysite_webportal', app()->getLocale()) }}" class="a-green">{{ trans('site.m_webportal') }}</a></h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm">
                <div>
                    <img src="/img/icons/sitesystem.png" alt="." title="" style="width:100px; height:100px; margin:0 0 30px 0;" />
                </div>
                <h5><a href="{{ route('mysite_sitesytem', app()->getLocale()) }}" class="a-green">{{ trans('site.m_sitesystem') }}</a></h5>
            </div>
            <div class="col-md-4 text-center card mb-4 shadow-sm effect-shadow-fade-in">
                <div>
                    <img src="/img/icons/store.png" alt="." title="" style="width:100px; height:100px; margin:0 0 30px 0;" />
                </div>
                <h5><a href="{{ route('mysite_store', app()->getLocale()) }}" class="a-green">{{ trans('site.m_store') }}</a></h5>
            </div>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.mysite_howmake') }}</h1> <br/>
            </div>
            <div class="col-md-5">
                <img src="/img/planshet2.png" class="img-fluid kromka" alt="." title="команда разработки сайтов makklays" />
                <br/><br/>
            </div>
            <div class="col-md-7">
                <h4>{{ trans('site.development_steps') }}:</h4><br/>
                <p class="text-justify">
                - {{ trans('site.dev1') }}; <br/>
                - {{ trans('site.dev2') }}; <br/>
                - {{ trans('site.dev3') }}; <br/>
                - {{ trans('site.dev4') }}; <br/>
                - {{ trans('site.dev5') }}; <br/>
                - {{ trans('site.dev6') }}; <br/>
                - {{ trans('site.dev7') }};
                </p>
            </div>
            <div class="col-md-12">
                <p class="text-justify">
                    {{ trans('site.how_make1') }} <br/><br/>
                    {{ trans('site.how_make2') }} <br/><br/>
                </p>
            </div>
        </div>

        <!--div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">{{ trans('site.technologies') }}</h2>
                <p class="text-center">{{ trans('site.use_technologies') }}</p>
            </div>
        </div>
        <br/><br/ -->

        <div class="card-deck mb-3 text-center">
            <div class="col-md-12 text-left">
                <h1 class="text-center text-design2">{{ trans('site.Our_price') }}</h1> <br/>
            </div>
            <div class="col-md-12 text-left">
                <p class="text-justify">
                    - {{ trans('site.price_text1') }} <br/>
                    - {{ trans('site.price_text2') }} <br/>
                    - {{ trans('site.price_text3') }} <br/>
                    - {{ trans('site.price_text4') }} <br/>
                    - {{ trans('site.price_text5') }} <br/><br/>
                </p>
                <p class="text-center">
                    <h4 class="text-center">{{ trans('site.Make_dorogo') }}</h4>
                </p>
                <p class="text-justify">
                    {{ trans('site.make_dorogo') }} <a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="a-green">{{ trans('site.go_link') }}</a>.
                </p> <br/><br/>

            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{ trans('site.m_corporate') }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{ trans('site.m_corporate_price') }}<small class="text-muted"></small></h1>
                    <ul class="text-left list-unstyled mt-3 mb-4">
                        <li>- {{ trans('site.m_corporate1') }}</li>
                        <li>- {{ trans('site.m_corporate2') }}</li>
                        <li>- {{ trans('site.m_corporate3') }}</li>
                        <li>- {{ trans('site.m_corporate4') }}</li>
                        <li>- {{ trans('site.m_corporate5') }}</li>
                        <li>- {{ trans('site.m_corporate6') }}</li>
                        <li>- {{ trans('site.m_corporate7') }}</li>
                        <li>- {{ trans('site.m_corporate8') }}</li>
                        <li>- {{ trans('site.m_corporate9') }}</li>
                    </ul>
                    <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{ trans('site.m_store') }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{ trans('site.m_store_price') }}<small class="text-muted"></small></h1>
                    <ul class="text-left list-unstyled mt-3 mb-4">
                        <li>- {{ trans('site.m_store1') }}</li>
                        <li>- {{ trans('site.m_store2') }}</li>
                        <li>- {{ trans('site.m_store3') }}</li>
                        <li>- {{ trans('site.m_store4') }}</li>
                        <li>- {{ trans('site.m_store5') }}</li>
                        <li>- {{ trans('site.m_store6') }}</li>
                        <li>- {{ trans('site.m_store7') }}</li>
                        <li>- {{ trans('site.m_store8') }}</li>
                        <li>- {{ trans('site.m_store9') }}</li>
                        <li>- {{ trans('site.m_store10') }}</li>
                        <li>- {{ trans('site.m_store11') }}</li>
                        <li>- {{ trans('site.m_store12') }}</li>
                    </ul>
                    <a type="button" href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{ trans('site.m_sitesystem') }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{ trans('site.m_sitesystem_price') }}<small class="text-muted"></small></h1>
                    <ul class="text-left list-unstyled mt-3 mb-4">
                        <li>- {{ trans('site.m_sitesystem1') }}</li>
                        <li>- {{ trans('site.m_sitesystem2') }}</li>
                        <li>- {{ trans('site.m_sitesystem3') }}</li>
                        <li>- {{ trans('site.m_sitesystem4') }}</li>
                        <li>- {{ trans('site.m_sitesystem5') }}</li>
                        <li>- {{ trans('site.m_sitesystem6') }}</li>
                        <li>- {{ trans('site.m_sitesystem7') }}</li>
                        <li>- {{ trans('site.m_sitesystem8') }}</li>
                        <li>- {{ trans('site.m_sitesystem9') }}</li>
                        <li>- {{ trans('site.m_sitesystem10') }}</li>
                        <li>- {{ trans('site.m_sitesystem11') }}</li>
                        <li>- {{ trans('site.m_sitesystem12') }}</li>
                        <li>- {{ trans('site.m_sitesystem13') }}</li>
                        <li>- {{ trans('site.m_sitesystem14') }}</li>
                    </ul>
                    <a href="{{ route('mysite_contacts', app()->getLocale()) }}" class="btn btn-lg btn-block btn-success">{{ trans('site.order_development') }}</a>
                </div>
            </div>
        </div>

        <!--br/><hr/><br/-->

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
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя Кирилл Закимов" src="/img/foto3.jpg">
                            </div>
                            <div class="ml-4 ml-lg-0">
                                <div class="h3 font-weight-bold">Кирилл Закимов</div>
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
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя Valeriy Zadavysvichka" src="/img/foto.jpg">
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
                                <img class="img-fluid rounded-circle kromka" width="105" height="105" alt="Аватар пользователя Katy Antonenko" src="/img/foto2.jpg">
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
        <!--br/><hr/><br/>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-design2">Статьи</h2> <br/>
            </div>
            <div class="col-md-4">
                <h4>A что такое сайт? Какие бывают?</h4>
                <p class="text-justify">Сайт – это ресурс, состоящий из веб-страниц (документов), объединенных общей темой и взаимосвязанных между собой с помощью ссылок. Сайт регистрируется на одно физическое, либо юридическое лицо и обязательно привязывается к домену.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h4>Программисты - строили дома :)</h4>
                <p class="text-justify">1.03. Ура! Нам предложили крупный контракт на постройку 12-этажного жилого дома. У всех бурный энтузиазм. Выпили на радостях 2 ящика пива. <br/>2.03. Заказчику не нравится выражение "как только, так сразу". Требует назвать конкретные сроки.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h4>Как выбрать разработчика?</h4>
                <p class="text-justify">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Читать &raquo;</a></p>
            </div>
        </div>
        <br/><br/ -->

@endsection