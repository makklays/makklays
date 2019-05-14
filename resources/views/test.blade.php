<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >
    <link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" media="all" href="/css/tests.css" >

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/js/tests.js'></script>
</head>
<body>

    <div id="id-loader-test" style="position-top:0; position: absolute; z-index: 5; width:100%; height:100%; background-color: grey; /*#0c5460;*/ opacity: 0.7;">
        <div style="width:64px; padding:0px; margin-left:auto; margin-right:auto;" class="test-loader">
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>

    <div class="test-block">
        <div class="thead">
            <h2 style="margin:0 0 30px 0; padding-top:20px;">???</h2>
        </div>
        <div class="flex-block">
            <div class="ch-block" choo="kot" style="background-image: url('/img/kotik.jpg'); background-size: cover;">
                <div style="color:#FFF; margin-left:7px;">cats</div>
            </div>
            <div class="or">

            </div>
            <div class="ch-block" choo="dog" style="background-image: url(/img/dog.jpg); background-size: cover;" >
                <div style="color:#000; margin-left:7px;">dogs</div>
            </div>
        </div>
    </div>

</body>
</html>