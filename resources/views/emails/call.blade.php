
<body>

<a href="http://makklays.com" target="_blank" >
    <img src="{{ $message->embed($pathToFile) }}" alt="Makklays logo" style="width:90px;" />
</a>
<br/>
<br/>
<br/>

<?php if (isset($fio) && !empty($fio)): ?>
    <b>Ф.И.О.:</b> <br/>
    {{ $fio }}  <br/><br/>
<?php endif; ?>

<b>Телефон:</b> <br/>
{{ $phone }}  <br/><br/>

<?php if (isset($lang) && !empty($lang)): ?>
    <b>Язык:</b> <br/>
    {{ $lang }}  <br/><br/>
<?php endif; ?>

<?php if (isset($messenger) && !empty($messenger)): ?>
    <b>Messenger:</b> <br/>
    {{ $messenger }} <br/><br/>
<?php endif; ?>

<?php if (isset($want_development) && !empty($want_development)): ?>
    <b>Хочет разработку:</b> <br/>
    {{ $want_development }} <br/><br/>
<?php endif; ?>

Дата: {{ date('d.m.Y H:i:s', time()) }}  <br/><br/><br/>

<span style="color: grey;">Письмо с сайта <a href="http://makklays.com" target="_blank" style="color:#267f00;" >makklays.com</a> </span>
<br/>
<br/>
<br/>

</body>

