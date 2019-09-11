<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Cats ??? or ??? Dogs" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
</head>
<body>

    <div class="row" style="margin-left: 0; margin-right:0;">
        <div class="col-md-12 text-center">

            <div class="text-center" style="margin:20px; ">
                <a href="/" >
                    <img src="/favicon.png" style="" alt="Logo" title="Makklays" />
                </a>
            </div>

            <div style="width:700px; margin-left:auto; margin-right:auto;">

                <div><b class="grey">Собаки или кошки: а кого любите вы?</b></div>

                <div style="border-bottom:1px solid lightgrey; padding:10px 0;">
                    <h2>Result of test</h2>
                </div>

                <?php if (isset($count_choices) && !empty($count_choices)): ?>
                    <?php foreach($count_choices as $choice): ?>
                        <div style="width:300px; margin:10px 0;">
                            <div><?=$choice->choice?> (<?=$choice->count?> - <?=$choice->percent?> %)</div>
                            <div style="border: 5px solid grey; width:<?=$choice->percent*3?>px;"></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div style="border-top:1px solid lightgrey; padding-top:10px; margin-top:20px;">
                    <!--
                    <a href="/"><< Cancel</a>
                    -->
                </div>

                <div><h2>Результат Вашего выбора:</h2></div>

                <?php $res = 'dog'; ?>
                <?php if(isset($res) && $res == 'dog'): ?>
                    <div style="margin: 0 0 20px 0;"><img src="/img/dog.jpg" title="Makklays | image cats" alt="cats" style="width:300px;" /></div>
                    <div class="text-justify" style="background-color: #ededed; border: 2px solid red; padding:10px 20px;">
                        <p>
                        Вы больше склонны к экстраверсии, но менее открыты для нового опыта.
                        Вы открыты, обходительны, приветливы, общительны, имеете много друзей, склонны к вербальному общению.
                        Вы уже поделились линком со своим собеседником? :)
                        </p>
                        <p>
                        Вы коммуникабельны, разговорчивы, честолюбивы, напористы и активны. Даже если Вы спорите, Вы допускаете влияние на себя.
                        Вы подчиняетесь внешним требованиям не без борьбы, но верх всегда берут внешние условия.
                        Ваше сознание обращено вовне, поскольку оттуда и черпается всегда главное и решающее определение. Вас интересуют лица и вещи. Соответственно и Ваши поступки обусловлены и объясняются влиянием последних.
                        Вы импульсивны, склонны к риску.
                        </p>
                        <p>
                        Более успешны в качестве продавца и менеджера. Причем чем больше Вам предоставляется свободы, тем больших успехов Вы добиваетесь. Вы удачливее в поиске работы, так как Вас охотнее принимают на работу после тестирования.
                        У Вас высокая скорость работы, но зато и ошибок больше.
                        </p>
                        <p>
                        Те люди, кто демонстрируют самую сильную заботу и привязанность к своим животным, также имеют самые высокие показатели в категории добросовестность и невротичность. Что больше свойственно людям с тревожным типом привязанности, склонным к гиперопеке.
                        </p>
                    </div>
                <?php elseif (isset($res) && $res == 'cat'): ?>
                    <div style="margin: 0 0 20px 0;"><img src="/img/cat.png" title="Makklays | image cats" alt="cats" style="width:300px;" /></div>
                    <div class="text-justify" style="background-color: #ededed; border: 2px solid red; padding:10px 20px;">
                        <p>
                        Вы более невротичны, но в то же время креативны и тянитесь к приключениям. <br/>
                        Вы скромны, застенчивы, склонны к уединению, предпочитаете книги общение с людьми. Вы сдержанны, сближаетесь только с немногими, поэтому имеете мало друзей, но преданы им. Не пора ли рассказать им о Ваших результатах теста? :)
                        </p>
                        <p>
                        Вы не можете поступить вразрез со своими убеждениями, и если Вы все-таки вынуждены пойти на это или случайно нарушаете внутренние нормы, чувствуете себя плохо и сильно переживаете. Вы не часто ссылаетесь на жесткие этические принципы, но Вы редко нарушаете общеустановленные правила общественной жизни. <br/>
                        Вы неимпульсивны, свои действия планируете заранее, придаете большое значение моральным и этическим нормам.
                        </p>
                        <p>
                        Более пригодны к тем профессиям (и чаще их выбираете), где выражена монотонность и где требуется пунктуальность. Вы придаете большее значение точности и безошибочности работы, что приводит к снижению ее скорости.
                        </p>
                        <p>
                        Те, кто демонстрируют самую сильную заботу и привязанность к своим животным, также имеют самые высокие показатели в категории добросовестность и невротичность. Что больше свойственно людям с тревожным типом привязанности, склонным к гиперопеке.
                        </p>
                    </div>
                <?php endif; ?>

                <br/><br/>

                <div><h2>Мнения и факты:</h2></div>

                <div class="text-justify">
                    Существует множество мнений относительно особенностей характера любителей кошек и собак. Говорят, что собачники – веселые, а кошатники, наоборот, грустные. Ученые подтверждают, что различия существуют, но не отрицают и сходства.
                </div>
                <div class="text-justify">
                    В новом исследовании, проведенном Калифорнийским университетом в Беркли (США) и Университетом штата Калифорния в Ист Бэй (США), были проанализированы личностные особенности и стили поведения двух групп людей (вот результаты):
                </div>
                <div class="text-center" style="margin: 20px 0;">
                    Собачников - 67%<br/>
                    Кошатников - 33%
                </div>
                <div class="text-justify">
                    Сверхзабота – не самая лучшая стратегия, например, при воспитании детей, поскольку мешает им расти независимыми. Зато в случае с животными, которые действительно нуждаются в пожизненной опеке, это только в плюс. Кстати, больше всего баллов по этим показателям набрали молодые участники, назвавшие своими любимыми животными кошек. <br/><br/>
                </div>
            </div>

            <div style="margin: 20px 0 0 0;">
                <a href="/?lang=es">ES</a> |
                <a href="/?lang=en">EN</a> |
                <a href="/?lang=ru">RU</a> |
                <a href="/?lang=ch">CH</a>
            </div>

            <!-- div>
                <a href="/cv_alexander_kuziv_es.html" target="_blank">CV ES</a> |
                <a href="/cv_alexander_kuziv.html" target="_blank">CV EN</a> |
                <a href="/cv_alexander_kuziv_ru.html" target="_blank">CV RU</a> |
                <a href="/cv_alexander_kuziv_ch.html" target="_blank">CV CH</a>
            </div-->

            {{ trans('site.have_questions') }} <a href="{{ route('feedback') }}">{{ trans('site.feedback') }}</a> <br/>
            &copy; 2019 makklays.com.ua

        </div>
    </div>

</body>
</html>
