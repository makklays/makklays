
<body>

<a href="http://makklays.com.ua" target="_blank" >
    <img src="{{ $message->embed($pathToFile) }}" alt="Makklays logo" />
</a>
<br/>
<br/>
<br/>

<b>Ф.И.О.:</b> <br/>
{{ $name }}  <br/><br/>

<b>E-mail:</b> <br/>
{{ $email }}  <br/><br/>

<b>Сообщение:</b>    <br/>
{{ $message2 }} <br/> <br/>

Дата: {{ date('d.m.Y H:i:s', time()) }}  <br/><br/><br/>

<span style="color: grey;">Письмо с сайта <a href="http://makklays.com.ua" target="_blank" style="color:#267f00;" >makklays.com.ua</a> </span>
<br/>
<br/>
<br/>

</body>

