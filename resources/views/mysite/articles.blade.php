@extends('layouts.main10')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/', app()->getLocale()) }}" class="a-green"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item" aria-current="page">{{ trans('site.Articles') }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="text-center text-design2">{{ trans('site.Articles') }}</h1> <br/>
        </div>
        <?php foreach($articles as $item): ?>
            <div class="col-md-4 col-sm-6">
                <p class="text-justify">
                    <a href="{{ route('article', [app()->getLocale(), $item->slag]) }}">
                        <?php if (isset($item->photo) && !empty($item->photo)): ?>
                            <img src="<?=config('app.url')?>/articles/imgs/<?=$item->photo?>" alt="Makklays - {{ trans('site.Articles') }} image" title="<?=$item->title?>" class="img-fluid kromka" />
                        <?php else: ?>
                            <img src="<?=config('app.url')?>/img/empty_img2.png" alt="Makklays - {{ trans('site.Articles') }} image" title="<?=$item->title?>" class="img-fluid kromka" />
                        <?php endif; ?>
                    </a>
                </p>
                <h4 class=""><?=$item->title?> - {{ $item->slag }}</h4>
                <p class="text-justify"><?=$item->short_text?></p>
                <p><a class="btn btn-secondary" href="{{ route('article', [app()->getLocale(), $item->slag]) }}" role="button"><?=trans('site.Read')?> &raquo;</a></p>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if (!empty($articles) && $articles->total() > 0 ): ?>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <br/>
                <?php echo $articles->render(); ?>
            </div>
        </div>
    <?php endif; ?>

@endsection
