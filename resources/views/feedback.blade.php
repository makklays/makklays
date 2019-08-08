<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>
    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <!--
    <meta property="og:title" content="Cats ??? Dogs" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url', 'http://makklays.com.ua') }}" />
    <meta property="og:image" content="{{ config('app.url', 'http://makklays.com.ua') }}/img/cats.png" />
    -->

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/tests.css" />

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/bootstrap-4.3.1/js/bootstrap.min.js'></script>
    <script src='/js/tests.js'></script>
</head>
<body>

    <style>
        .alert-error {
            text-align: left;
            color: red;
            font-size: 12px;
            display: none;
        }
    </style>

    <div style="width:300px; margin-left:auto; margin-right:auto; text-align:center;">
        <div class="text-center" style="margin:20px; ">
            <img src="/favicon.png" style="" alt="Logo" title="" />
        </div>

        @include('partials.flash')

        <form action="/feedback" method="post" >

            {{ csrf_field() }}

            @if ($errors->any())
                <div class="alert alert-danger text-left">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <input name="fio" type="text" value="" class="form-control" placeholder="Name" />
                <div class="alert-error">Required</div>
            </div>

            <div class="form-group" >
                <input name="email" type="email" value="" class="form-control" placeholder="E-mail" />
                <div class="alert-error">Required</div>
            </div>

            <div class="form-group">
                <textarea name="message" rows="10" class="form-control" placeholder="Your message.."></textarea>
                <div class="alert-error">Required</div>
                <div class="alert-error">Not more than 2000 characters</div>
            </div>

            <input id="id-submit-feedback" type="submit" class="btn btn-secondary text-center" value="Sent" />
        </form>
    </div>

    <div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        &copy; 2019 makklays.com.ua
    </div>

    <script>
        $(document).ready(function() {
            $('#id-submit-feedback').on('click', function(){

                //
                var fio = true;
                if($('input[name=fio]').val().length < 4) {
                    $('input[name=fio]').css('border', '1px solid red');
                    $('input[name=fio]').next().css('display', 'block');
                    fio = false;
                } else {
                    $('input[name=fio]').css('border', '1px solid #ced4da');
                    $('input[name=fio]').next().css('display', 'none');
                }

                //
                var email = true;
                if($('input[name=email]').val().length < 11) {
                    $('input[name=email]').css('border', '1px solid red');
                    $('input[name=email]').next().css('display', 'block');
                    email = false;
                } else {
                    $('input[name=email]').css('border', '1px solid #ced4da');
                    $('input[name=email]').next().css('display', 'none');
                }

                //
                var msg = true;
                if($('textarea[name=message]').val().length < 11 ) {
                    $('textarea[name=message]').css('border', '1px solid red');
                    $('textarea[name=message]').next().css('display', 'block');
                    $('textarea[name=message]').next().next().css('display', 'none');
                    msg = false;
                } else if ($('textarea[name=message]').val().length >= 2000) {
                    $('textarea[name=message]').css('border', '1px solid red');
                    $('textarea[name=message]').next().css('display', 'none');
                    $('textarea[name=message]').next().next().css('display', 'block');
                    msg = false;
                } else {
                    $('textarea[name=message]').css('border', '1px solid #ced4da');
                    $('textarea[name=message]').next().css('display', 'none');
                    $('textarea[name=message]').next().next().css('display', 'none');
                }

                if (fio && email && msg) return true;
                else return false;
            });
        });
    </script>

</body>
</html>