<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays | Test results</title>

    <meta name="description" content="Makklays Test Cat Dog" />
    <meta name="keywords" content="Makklays Test Cat Dog" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Cats ??? or ??? Dogs" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/main.css?qwe" />
</head>
<body>

    <div class="row" style="margin-left: 0; margin-right:0;">
        <div class="col-md-12 text-center">

            <div class="text-center" style="margin:20px; ">
                <a href="{{ route('/', app()->getLocale()) }}" >
                    <img src="/favicon.png" style="" alt="Logo" title="Makklays" />
                </a>
            </div>

            <div style="width:700px; margin-left:auto; margin-right:auto;">

                <div><b class="grey">{{ trans('site.dogs_or_cats') }}</b></div>

                <div style="border-bottom:1px solid lightgrey; padding:30px 0 10px 0;">
                    <h2>{{ trans('site.results_of_site') }}:</h2>
                </div>

                <?php if (isset($count_choices) && !empty($count_choices)): ?>
                    <?php foreach($count_choices as $choice): ?>
                        <div style="width:700px; margin:10px 0;">
                            <?php $la = 'site.'.$choice->choice ?>
                            <div><?=trans($la)?> (<?=$choice->count?> - <?=$choice->percent?> %)</div>
                            <div style="border: 5px solid grey; width:<?=$choice->percent*3?>px;"></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div style="border-top:1px solid lightgrey; padding-top:10px; margin-top:20px;">
                    <!--
                    <a href="/"><< Cancel</a>
                    -->
                </div>

                <div style="margin: 20px 0 0 0;"><h2>{{ trans('site.result_your_choice') }}:</h2></div>

                <?php if(isset($choice_cat_dog) && $choice_cat_dog == 'dog'): ?>
                    <div style="margin: 0 0 20px 0;">
                        <img src="/img/dog.jpg" title="Makklays | image dogs" class="ch-block-img" alt="cats" />
                    </div>
                    <div class="text-justify" style="background-color: #ededed; padding:10px 20px;">
                        <p>{{ trans('site.dog_text1') }}</p>
                        <p>{{ trans('site.dog_text2') }}</p>
                        <p>{{ trans('site.dog_text3') }}</p>
                        <p>{{ trans('site.last_text4') }}</p>
                    </div>
                <?php elseif (isset($choice_cat_dog) && $choice_cat_dog == 'cat'): ?>
                    <div style="margin: 0 0 20px 0;">
                        <img src="/img/cat.png" title="Makklays | image cats" class="ch-block-img" alt="cats" />
                    </div>
                    <div class="text-justify" style="background-color: #ededed; padding:10px 20px;">
                        <p>{{ trans('site.cat_text1') }}</p>
                        <p>{{ trans('site.cat_text2') }}</p>
                        <p>{{ trans('site.cat_text3') }}</p>
                        <p>{{ trans('site.last_text4') }}</p>
                    </div>
                <?php endif; ?>

                <br/><br/>

                <div><h2>{{ trans('site.Facts') }}:</h2></div>

                <div class="text-justify">{{ trans('site.fact_text1') }}<br/><br/></div>
                <div class="text-justify">{{ trans('site.fact_text2') }}</div>
                <div class="text-center" style="margin: 20px 0;">
                    {{ trans('site.dog') }} - 67%<br/>
                    {{ trans('site.cat') }} - 33%
                </div>
                <div class="text-justify">{{ trans('site.fact_text3') }}</div>
            </div>

            <div style="margin: 40px 0 10px 0;">
                <a class="green" href="{{ route('test_result', 'es') }}">ES</a> |
                <a class="green" href="{{ route('test_result', 'en') }}">EN</a> |
                <a class="green" href="{{ route('test_result', 'ru') }}">RU</a> |
                <a class="green" href="{{ route('test_result', 'ch') }}">CH</a>
            </div>

            <!-- div>
                <a href="/cv_alexander_kuziv_es.html" target="_blank">CV ES</a> |
                <a href="/cv_alexander_kuziv.html" target="_blank">CV EN</a> |
                <a href="/cv_alexander_kuziv_ru.html" target="_blank">CV RU</a> |
                <a href="/cv_alexander_kuziv_ch.html" target="_blank">CV CH</a>
            </div-->

            {{ trans('site.have_questions') }} <a href="{{ route('feedback', app()->getLocale()) }}">{{ trans('site.feedback') }}</a> <br/>
            &copy; makklays.com.ua, 2019-<?=date('Y')?>

        </div>
    </div>

</body>
</html>
