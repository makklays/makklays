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

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" >

</head>
<body>

    <div style="width: 310px; margin-left:auto; margin-right:auto;" >
        <div style="text-align:center; border-bottom:1px solid lightgrey; width:300px; padding:10px 0;">
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

        <div style="border-top:1px solid lightgrey; width:300px; padding-top:10px; margin-top:20px;">
            <a href="/"><< Cancel</a>
        </div>

        <div>
            <div ><h1>Собаки или кошки: а кого любите вы?</h1></div>
            <div>Существует множество мнений относительно особенностей характера любителей кошек и собак. Говорят, что собачники – экстраверты, а кошатники, наоборот, интроверты. Ученые подтверждают, что различия существуют, но не отрицают и сходства.</div>
            <div>В новом исследовании, проведенном Калифорнийским университетом в Беркли (США) и Университетом штата Калифорния в Ист Бэй (США), были проанализированы личностные особенности и стили поведения четырех групп людей: <br/><br/>
                1. Собачников <br/>
                2. Кошатников <br/>
                3. Тех, кто одинаково хорошо относится и к тем и к другим животным <br/>
                4. Тех, кто к ним одинаково равнодушен. <br/><br/>
                В результате онлайн-опроса, в котором приняли участие более 1000 владельцев домашних животных – мужчин и женщин разных возрастов, – эти группы распределись неравномерно: почти 40% опрошенных заявили, что одинаково любят кошек и собак, 38% посчитали себя «собачниками», 19% «кошатниками», и только 3% сказали, что не любят ни тех, ни других. <br/>
            </div>
            <div>
                Исследователи оценивали привязанность участников не только к животным, но и к людям, кроме того, они изучали «большую пятерку» черт личности: открытость новому опыту, добросовестность, экстраверсию, доброжелательность и невротичность. Удивительно, но те, кто продемонстрировал самую сильную заботу и привязанность к своим животным, также имели самые высокие показатели в категории добросовестность и невротичность. Что больше свойственно людям с тревожным типом привязанности, склонным к гиперопеке, отмечают исследователи. Резонный вопрос: хорошо это или плохо? Сверхзабота – не самая лучшая стратегия, например, при воспитании детей, поскольку мешает им расти независимыми. Зато в случае с животными, которые действительно нуждаются в пожизненной опеке, это только в плюс. Кстати, больше всего баллов по этим показателям набрали молодые участники, назвавшие своими любимыми животными кошек. <br/><br/>
                В этом смысле полученные результаты отчасти перекликаются с данными, полученными в 2010 году в исследовании психолога Сэма Гозлинга (Sam Gosling) из Техасского университета (США). Он выяснил, что хозяева собак больше склонны к экстраверсии, но менее открыты для нового опыта, а хозяева кошек более невротичны, но в то же время креативны и тянутся к приключениям. <br/>
            </div>
        </div>

        <div style="text-align:center; width:300px; margin-top:40px; margin-left:auto; margin-right:auto; ">
            &copy; 2019 makklays.com.ua
        </div>
    </div>

</body>
</html>
