<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays | Test PHP</title>
    <meta name="description" content="Makklays Test PHP" />
    <meta name="keywords" content="Makklays Test PHP" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Test PHP" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url', 'http://makklays.com.ua') }}" />
    <meta property="og:image" content="{{ config('app.url', 'http://makklays.com.ua') }}/img/PHP-logo.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/tests.css" />

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/js/jquery.countdown.min.js'></script>
    <script src='/js/tests.js'></script>
</head>
<body>

<div class="row" style="margin-left: 0; margin-right:0;">
    <div class="col-md-12">
        <div class="text-center" style="margin:20px; ">
            <a href="/" >
                <img src="/favicon.png" style="" alt="Logo" title="Makklays" />
            </a>
        </div>

        <div class="text-center" style="margin: 40px 0 0 0;">
            <b class="grey">Test PHP</b>

            <h1><?=$title?></h1>

            <div style="margin: 20px 0;">
                <?=$description?>
            </div>

            <div style="margin: 20px 0;">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">

                            <div style="margin:0 0 20px 0;">GList of test:</div>

                            <?php if (isset($answers) && !empty($answers)): ?>
                                <?php for($i = 1; $i <= $count_question; $i++): ?>

                                    <div style="border-bottom: 1px dashed #ced4da; margin: 20px 0;"></div>

                                    <div>
                                        <b><?=$i?>.</b> - <?=$answers['question'.$i]?>
                                    </div>

                                    <?php
                                        (($answers['answer'.$i]) ? $str_answer = 'YES' : $str_answer = 'NO');
                                        (($answers['right'.$i]) ? $str_right = 'YES' : $str_right = 'NO');
                                    ?>

                                    <div style="margin-top:10px;">
                                        <div style="margin-right:30px; float:left; color: grey;">Your answer: <?=($answers['right'.$i] == $answers['answer'.$i] ? '<span style="color:green;">'.$str_answer.'</span>' : '<span style="color:red;">'.$str_answer.'</span>')?></div>
                                        <!--div style="">Right answer: <?=$str_right?></div-->
                                        <div style="clear:both"></div>
                                    </div>

                                <?php endfor; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
    Have questions? <a href="/feedback">Write</a> <br/>
    &copy; 2019 makklays.com.ua
</div>

</body>
</html>
