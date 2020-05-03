
<body>

<a href="http://makklays.com.ua" target="_blank" >
    <img src="{{ $message->embed($pathToFile) }}" alt="Makklays logo" />
</a>
<br/>
<br/>
<br/>

<b>Ф.И.О.:</b> <br/>
{{ $fio }}  <br/><br/>

<b>Phone:</b> <br/>
{{ $phone }}  <br/><br/>

<?php if (isset($messenger) && !empty($messenger)): ?>
    <b>Messenger:</b>    <br/>
    {{ $messenger }} <br/> <br/>
<?php endif; ?>

<?php if (isset($want_development) && !empty($want_development)): ?>
    <b>Want development:</b>    <br/>
    {{ $want_development }} <br/> <br/>
<?php endif; ?>

Дата: {{ date('d.m.Y H:i:s', time()) }}  <br/><br/><br/>

<span style="color: grey;">Письмо с сайта <a href="http://makklays.com.ua" target="_blank" style="color:#267f00;" >makklays.com.ua</a> </span>
<br/>
<br/>
<br/>

</body>

