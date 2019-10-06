<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays | Feedback</title>

    <meta name="description" content="Makklays Feedback" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays | Feedback" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap4/css/bootstrap.min.css" />
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
            <a href="{{ route('/', app()->getLocale()) }}" >
                <img src="/favicon.png" style="" alt="Logo" title="Makklays" />
            </a>
        </div>

        @include('partials.flash')

        <form action="{{ route('feedback_post', app()->getLocale()) }}" method="post" >

            {{ csrf_field() }}

            <!--
            @if ($errors->any())
                <div class="alert alert-danger text-left">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            -->

            <div class="form-group">
                <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="{{ trans('site.Name') }}" />

                <?php if ($errors->has('name')): ?>
                    <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('name')?></div>
                <?php endif; ?>
            </div>

            <div class="form-group" >
                <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="{{ trans('site.Email') }}" />

                <?php if ($errors->has('email')): ?>
                    <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('email')?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <textarea name="message" rows="10" class="form-control" placeholder="{{ trans('site.your_message') }}">{{ old('message') }}</textarea>

                <?php if ($errors->has('message')): ?>
                    <div class="text-left invalid-price_min" role="alert" style="font-size:12px; color:#88251d;"><?=$errors->first('message')?></div>
                <?php endif; ?>
            </div>

            <input id="id-submit-feedback" type="submit" class="btn btn-secondary text-center btn-lg" value="{{ trans('site.Sent') }}" />
        </form>
    </div>

    <div style="text-align:center; width:200px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <a href="{{ route('test-php', app()->getLocale()) }}" >{{ trans('site.test_php') }}</a> <br/>

        <!--a href="/cv_alexander_kuziv.html" target="_blank">CV</a> <br/-->

        <div style="margin: 20px 0 0 0;">
            <a href="{{ route('feedback', 'es') }}">ES</a> |
            <a href="{{ route('feedback', 'en') }}">EN</a> |
            <a href="{{ route('feedback', 'ru') }}">RU</a> |
            <a href="{{ route('feedback', 'ch') }}">CH</a>
        </div>

        &copy; 2019 makklays.com.ua
    </div>

    <script>
        /*
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
        });*/
    </script>

</body>
</html>
