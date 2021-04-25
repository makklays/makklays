@extends('layouts.main10')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/', app()->getLocale()) }}" class="a-green"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item" aria-current="page">{{ trans('site.mysite_howmake') }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <br/><h1 class="text-center text-design2">{{ trans('site.mysite_howmake') }}</h1> <br/>
        </div>

        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/333.jpg" alt="Makklays - {{ trans('site.mysite_howmake') }} image1" title="{{ trans('site.mysite_howmake') }}" class="img-fluid kromka" /> <br/><br/>
        </div>
        <div class="col-md-7">
            <h4>{{ trans('site.howmake2') }}</h4> <br/>
            1. {{ trans('site.howmake3') }} <br/>
            2. {{ trans('site.howmake4') }} <br/>
            3. {{ trans('site.howmake5') }} <br/>
            4. {{ trans('site.howmake6') }} <br/>
            5. {{ trans('site.howmake7') }} <br/>
            6. {{ trans('site.howmake8') }} <br/>
            7. {{ trans('site.howmake9') }} <br/><br/>
        </div>
        <div class="col-md-12 ">
            {{ trans('site.howmake1') }} <br/><br/>

            {{ trans('site.howmake10') }} <br/>
            <?=trans('site.howmake11')?> <br/>
            {{ trans('site.howmake12') }} <br/><br/>

            <h4>{{ trans('site.howmake13') }}</h4> <br/>
            - {{ trans('site.howmake14') }} <br/>
            - {{ trans('site.howmake15') }} <br/>
            - {{ trans('site.howmake16') }} <br/><br/>
        </div>

        <div class="col-md-12 text-center">
            <button type="button" id="id_order_development" class="btn btn-success btn-lg" data-toggle="modal">
                {{ trans('site.order_consultation') }}
            </button>
            <br/><br/><br/><br/>
        </div>

    </div>
    </div> <!-- close container -->

        <div class="section6">
            <div class="row parallax3">
                <div class="col-6 col-sm-6 col-md-6"></div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div style="margin:40px 20px 40px 0; padding:20px 0 20px 0;  border-radius:0px; background-color: #FFFFFF;">
                        <h4 class="text-center">{{ trans('site.work_and_felic') }} <span style="color:red;">❤</span></h4> <br/>
                        <div class="text-justify" style="margin:0 40px 0 40px;">
                            <blockquote>
                                <p>«{{ trans('site.happy_citata') }}»</p>
                            </blockquote>
                            <!--div class="keyword">Apache</div> <div class="keyword">API</div>
                            <div class="keyword">Bootstrap</div> <span class="keyword">CSS3</span>
                            <span class="keyword">ElasticSearch</span> <span class="keyword">GitHub</span>
                            <span class="keyword">HTML5</span> <span class="keyword">Javascript</span>
                            <span class="keyword">Jira</span> <span class="keyword">jQuery</span>
                            <span class="keyword">JSON</span> <span class="keyword">Laravel</span>
                            <span class="keyword">Moodle</span> <span class="keyword">MVC</span>
                            <span class="keyword">MySQL</span> <span class="keyword">OOP</span>
                            <span class="keyword">PHP</span> <span class="keyword">ProZorro API</span>
                            <span class="keyword">REST API</span> <span class="keyword">Scrum</span>
                            <span class="keyword">S.O.L.I.D.</span> <span class="keyword">YAGNI</span>
                            <span class="keyword">Yii2</span> <span class="keyword">Docker</span>
                            <span class="keyword">Git</span> <span class="keyword">GitLab</span>
                            <span class="keyword">Jenkins</span> <span class="keyword">LDAP</span>
                            <span class="keyword">MailChimp</span> <span class="keyword">MariaDB</span>
                            <span class="keyword">Nginx</span> <span class="keyword">ORM</span>
                            <span class="keyword">PHPUnit</span> <span class="keyword">PostgreSQL</span>
                            <span class="keyword">Ubuntu</span> <span class="keyword">C#</span>
                            <span class="keyword">GoogleMap API</span> <span class="keyword">Entity Framework 6</span>
                            <span class="keyword">LINQ</span> <span class="keyword">UWP</span>
                            <span class="keyword">Vue.js</span> <div style="clear:both;"></div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container"> <!-- container -->

    <div class="row">
        <div class="col-md-12 text-justify">
            <br/><br/>
            <h1 class="text-center text-design2">{{ trans('site.our_advantages') }}</h1> <br/>
        </div>

        <div class="col-md-7">
            &#10004; <b>{{ trans('site.adv1') }}</b> <br/>
            <span>{{ trans('site.adv1_det') }} </span><br/><br/>
            &#10004; <b>{{ trans('site.adv2') }}</b> <br/>
            <span>{{ trans('site.adv2_det') }} </span><br/><br/>
            &#10004; <b>{{ trans('site.adv3') }}</b> <br/>
            <span>{{ trans('site.adv3_det') }} </span><br/><br/>
            &#10004; <b>{{ trans('site.adv4') }}</b> <br/>
            <span>{{ trans('site.adv4_det') }} </span><br/><br/>
            &#10004; <b>{{ trans('site.adv5') }}</b> <br/>
            <span>{{ trans('site.adv5_det') }} </span><br/><br/>
            &#10004; <b>{{ trans('site.adv6') }}</b> <br/>
            <span>{{ trans('site.adv6_det') }} </span><br/>
            <br/><br/>
        </div>
        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/advantages.jpg" alt="Makklays - {{ trans('site.mysite_howmake') }} image2" title="{{ trans('site.circle_project') }}" class="img-fluid kromka" />
        </div>

        <div class="col-md-12">
            <h1 class="text-center text-design2">{{ trans('site.garantiya') }}!</h1> <br/>
        </div>

        <div class="col-md-5">
            <img src="<?=config('app.url')?>/img/100-percent.jpg" alt="Makklays - {{ trans('site.mysite_howmake') }} image3" title="{{ trans('site.garantiya') }}!" class="img-fluid kromka" />
        </div>
        <div class="col-md-7">
            &#10004; <b>{{ trans('site.zapusk') }}</b> <br/>
                {{ trans('site.zapusk_det') }} <br/><br/>
            &#10004; <b>{{ trans('site.podelu') }}</b> <br/>
                {{ trans('site.podelu_det') }} <br/><br/>
            &#10004; <b>{{ trans('site.garant') }}</b> <br/>
                {{ trans('site.garant_det') }}
        </div>

    </div>

@endsection
