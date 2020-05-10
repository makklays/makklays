@extends('layouts.main8')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-design2">{{ trans('site.Articles') }}</h1> <br/>
        </div>
        <?php foreach($articles as $item): ?>
            <div class="col-md-4">
                <p class="text-justify">
                    <?php if (isset($item->photo) && !empty($item->photo)): ?>
                        <img src="<?=config('app.url')?>/articles/imgs/<?=$item->photo?>" alt="Makklays - {{ trans('site.Articles') }} image" title="<?=$item->title?>" class="img-fluid kromka" />
                    <?php else: ?>
                        <img src="<?=config('app.url')?>/img/empty_img2.png" alt="Makklays - {{ trans('site.Articles') }} image" title="<?=$item->title?>" class="img-fluid kromka" />
                    <?php endif; ?>
                </p>
                <h4 class=""><?=$item->title?></h4>
                <p class="text-justify"><?=$item->short_text?></p>
                <p><a class="btn btn-secondary" href="{{ route('mysite_article', [app()->getLocale(), $item->slag]) }}" role="button"><?=trans('site.Read')?> &raquo;</a></p>
            </div>
        <?php endforeach; ?>
    </div>

@endsection
