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

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >
    <link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" >

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

        <div style="text-align:center; width:300px; margin-top:40px; margin-left:auto; margin-right:auto; ">
            &copy; 2019 makklays.com.ua
        </div>
    </div>

</body>
</html>