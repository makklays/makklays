<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays | Feedback</title>

    <meta name="description" content="Makklays Feedback" />
    <meta name="keywords" content="feedback, makklays, development site" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays | Feedback" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://makklays.com.ua" />
    <meta property="og:image" content="https://makklays.com.ua/favicon.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="<?=config('app.url')?>/makklays.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?=config('app.url')?>/css/main.css?qwe" />

    <script src='<?=config('app.url')?>/js/jquery-3.4.0.min.js'></script>
    <script src='<?=config('app.url')?>/css/bootstrap4/js/bootstrap.min.js'></script>
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
                <img src="<?=config('app.url')?>/makklays.png" style="width: 78px;" alt="Logo" title="Makklays" />
            </a>
        </div>

        @include('partials.flash')

        <form action="{{ route('feedback_post', app()->getLocale()) }}" method="post" >

            {{ csrf_field() }}

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

    <div style="text-align:center; width:222px; margin-top:40px; margin-left:auto; margin-right:auto; ">
        <div>
            <a href="{{ route('test-php', app()->getLocale()) }}" target="_blank">{{ trans('site.test_php') }}</a>
        </div>

        <div style="margin: 20px 0 10px 0;">
            <a href="{{ route('feedback', 'es') }}">ES</a> |
            <a href="{{ route('feedback', 'en') }}">EN</a> |
            <a href="{{ route('feedback', 'ru') }}">RU</a> |
            <a href="{{ route('feedback', 'ch') }}">CH</a>
        </div>

        &copy; makklays.com.ua, 2019-<?=date('Y')?>
    </div>
</body>
</html>
