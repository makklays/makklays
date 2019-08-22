<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makklays</title>

    <meta name="description" content="Makklays" />
    <meta name="keywords" content="Makklays" />
    <meta name="author" content="Makklays" />

    <meta property="og:title" content="Makklays" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://makklays.com.ua" />
    <meta property="og:image" content="http://makklays.com.ua/img/dog.jpg" />

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" >

    <!-- Fonts -->
    <!--link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" -->

    <!--link rel="stylesheet" type="text/css" media="all" href="https://laravel.ru/all.css" -->
    <link rel="stylesheet" type="text/css" media="all" href="/bootstrap-4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/all.css" >
    <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" >

    <script src='/js/jquery-3.4.0.min.js'></script>
    <script src='/bootstrap-4.3.1/js/bootstrap.min.js'></script>

</head>
<body>
<div class="flex-center position-ref full-height text-center">


    <form action="/login" method="post" class="form-signin" >
        {{ csrf_field() }}
        <img class="mb-4" src="/img/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <!-- label>
                <input type="checkbox" value="remember-me"> Remember me
            </label -->
        </div>
        <button class="btn btn-lg btn-secondary btn-block" type="submit">Login</button>

        <!--p class="ramka">
            New to SecondJOB? <a href="/signup">Create account</a>
        </p-->

        <!--p class="">
            <a href="/forgot">Forgot password?</a>
        </p-->

        <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>

</div>
</body>
</html>