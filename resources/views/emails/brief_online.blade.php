
<body>

<a href="http://makklays.com.ua" target="_blank" >
    <img src="{{ $message->embed($pathToFile) }}" alt="Makklays logo" />
</a>
<br/>
<br/>

<h1>Бриф на разработку сайта</h1>

<h2>Общая информация</h2>

<b>Имя:</b> <br/>
{{ $brief->name }}  <br/><br/>

<b>E-mail:</b> <br/>
{{ $brief->email }}  <br/><br/>

<b>Телефон:</b> <br/>
{{ $brief->phone }}  <br/><br/>

<b>Сайт вашей компании, если есть:</b> <br/>
{{ $brief->site }}  <br/><br/>

<b>Название компании:</b> <br/>
{{ $brief->company }}  <br/><br/>

<b>Область деятельности, направление бизнеса:</b> <br/>
{{ $brief->business }}  <br/><br/>

<b>Адреса сайтов или названия компаний конкурентов:</b> <br/>
{{ $brief->concurents }}  <br/><br/>

<b>География работы:</b> <br/>
{{ $brief->geografy }}  <br/><br/>

<b>Сроки разработки:</b> <br/>
{{ $brief->sroki }}  <br/><br/>

<b>Бюджет:</b> <br/>
{{ $brief->budget }}  <br/><br/>

<b>Ответственное лицо:</b> <br/>
{{ $brief->lico }}  <br/><br/>


<h2>Цели и функции сайта</h2>

<b>Цели сайта:</b> <br/>
<?php if(isset($brief->goal) && !empty($brief->goal)): ?>
    <?php foreach($brief->goal as $v): ?>
        <?=$v?>  <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Тип сайта:</b> <br/>
{{ $brief->sitetype }}  <br/><br/>

<b>Сервисы для связи с посетителями сайта:</b> <br/>
<?php if(isset($brief->connect) && !empty($brief->connect)): ?>
    <?php foreach($brief->connect as $v): ?>
        <?=$v?>  <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Сервисы по продаже через интернет:</b> <br/>
<?php if(isset($brief->pdodaga) && !empty($brief->pdodaga)): ?>
    <?php foreach($brief->pdodaga as $v): ?>
        <?=$v?>  <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Интеграция со сторонними сервисами и программами:</b> <br/>
<?php if(isset($brief->itegr) && !empty($brief->itegr)): ?>
    <?php foreach($brief->itegr as $v): ?>
        <?=$v?>  <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Языковые версии сайта:</b> <br/>
{{ $brief->language }} <br/><br/>

<b>Система управления сайтом:</b> <br/>
{{ $brief->manage_site }} <br/><br/>

<b>Нужна ли мобильная версия сайта или адаптивный дизайн:</b> <br/>
{{ $brief->language }}  <br/><br/>

<b>Другие цели, сервисы, функции и СМS:</b> <br/>
{{ $brief->other_goal }}  <br/><br/>


<h2>Структура сайта</h2>

<b>Разделы сайта:</b> <br/>
{{ $brief->manage_site }}  <br/><br/>

<b>Навигация по сайту:</b> <br/>
{{ $brief->adaptive }} <br/><br/>

<b>Информационные блоки:</b> <br/>
{{ $brief->blocks }}  <br/><br/>


<h2>Дизайн сайта</h2>

<b>Примеры сайтов, дизайн которых вам нравится:</b> <br/>
{{ $brief->design_like }}  <br/><br/>

<b>Примеры сайтов, дизайн которых вам не нравится:</b> <br/>
{{ $brief->design_nolike }}  <br/><br/>

<b>Какие элементы фирменного стиля существуют и могут быть использованы при разработке дизайна:</b> <br/>
<?php if(isset($brief->style) && !empty($brief->style)): ?>
    <?php foreach($brief->style as $k => $v): ?>
        <?=$v?>  <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Настроение и асоциации, которые должен вызвать дизайн сайта:</b> <br/>
<?php if(isset($brief->design) && !empty($brief->design)): ?>
    <?php foreach($brief->design as $k => $v): ?>
        <?=$v?>  <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Наличие фотографий и картинок для разработки дизайна:</b> <br/>
<?php if(isset($brief->fotos) && !empty($brief->fotos)): ?>
    <?php foreach($brief->fotos as $k => $v): ?>
        <?=$v?> <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Основные требования и пожелания по дизайну сайта:</b> <br/>
{{ $brief->design_other }}  <br/><br/>


<h2>Контент и дополнительные услуги</h2>

<b>Контент для сайта: тексты, переводы, фотографии:</b> <br/>
<?php if(isset($brief->zacontent) && !empty($brief->zacontent)): ?>
    <?php foreach($brief->zacontent as $k => $v): ?>
        <?=$v?> <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Дополнительные услуги и сервисы:</b> <br/>
<?php if(isset($brief->dop) && !empty($brief->dop)): ?>
    <?php foreach($brief->dop as $k => $v): ?>
        <?=$v?> <br/><br/>
    <?php endforeach; ?>
<?php else: ?>
    нет <br/><br/>
<?php endif; ?>

<b>Дополнительные файлы:</b> <br/>
<?php if(isset($brief->tzfile_name) && !empty($brief->tzfile_name)): ?>
    <a href="{{ $pathToBrief }}">{{ $brief->tzfile_name }}</a>
<?php else: ?>
    нет
<?php endif; ?>
<br/><br/>


Дата: {{ date('d.m.Y H:i:s', time()) }}  <br/><br/><br/>

<span style="color: grey;">Письмо с сайта <a href="http://makklays.com.ua" target="_blank" style="color:#267f00;" >makklays.com.ua</a> </span>
<br/>
<br/>
<br/>

</body>

