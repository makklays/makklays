@extends('layouts.main8')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('mysite_articles', app()->getLocale()) }}" class="a-green">{{ trans('site.Articles') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-design2">{{ $article->title }}</h1>
        </div>

        <div class="col-md-12 text-center">
            <br/>
            <?php if (isset($article->photo) && !empty($article->photo)): ?>
                <img src="<?=config('app.url')?>/articles/imgs/<?=$article->photo?>" alt="Makklays - {{ trans('site.Articles') }} image" title="<?=$article->title?>" class="img-fluid kromka" />
            <?php else: ?>
                <img src="<?=config('app.url')?>/img/empty_img2.png" alt="Makklays - {{ trans('site.Articles') }} image" title="<?=$article->title?>" class="img-fluid kromka" />
            <?php endif; ?>
            <br/><br/>
        </div>

        <div class="col-md-12 text-center" style="font-size:14px;">
            <span class=""><img src="<?=config('app.url')?>/img/eye.jpg" alt="eye" title="Makklays - {{ trans('site.views') }} image" style="width:18px;" /> {{ $article->views }} </span>
        </div>

        <div class="col-md-12">
            <br/>
        </div>

        <div class="col-md-12">
            <p class="text-justify">
                <?=nl2br($article->full_text)?>
            </p>
        </div>
    </div>

@endsection
