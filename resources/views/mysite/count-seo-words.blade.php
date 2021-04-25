@extends('layouts.main10')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-design2">{{ trans('site.count_seo_words') }}</h2> <br/>
        </div>
        <div class="col-md-12">
            <p class="text-center text-justify">
                {{ trans('site.count_seo_words_desc') }} <br/><br/>
            </p>
        </div>

        <div class="col-md-4">
            <h4 class="d-flex justify-content-between align-items-center">
                <span class="text-muted">{{ trans('site.Result') }}</span>
                <span class="badge badge-secondary badge-pill">
                    <?=(isset($arr_words) && !empty($arr_words) ? (count($arr_words) - 1)  : 0)?>
                </span>
            </h4>
            <ul class="list-group mb-3">
                <?php if (isset($arr_words) && !empty($arr_words)): ?>
                    <?php foreach($arr_words as $word => $count): ?>
                        <?php if($word == 'total') continue; ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?=$word?></h6>
                                <!--small class="text-muted">Brief description</small-->
                            </div>
                            <span class="text-muted"><?=$count?></span>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6>{{ trans('site.Uniq_words') }}</h6>
                        <small class="text-muted">({{ trans('site.Uniq_words_desc') }})</small>
                    </div>
                    <span class="text-muted">
                        <?=(isset($arr_words) && !empty($arr_words) ? (count($arr_words) - 1)  : 0)?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <span>{{ trans('site.Total') }}</span><br/>
                        <small class="text-muted">
                            ({{ trans('site.Total_desc') }} -
                            <?=(isset($length_characters) && !empty($length_characters) ? $length_characters : 0)?>
                            chars)
                        </small>
                    </div>
                    <strong>
                        <?=(isset($arr_words['total']) && !empty($arr_words['total']) ? $arr_words['total'] : 0)?>
                    </strong>
                </li>
            </ul>
        </div>

        <div class="col-md-8">
            <h4 class="">
                <span class="text-muted">{{ trans('site.Text') }}</span>
            </h4>
            <form action="{{ route('seo_words_post', app()->getLocale()) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <!--label for="id_text_count_words">Текст</label-->
                    <textarea name="fulltext" class="form-control" id="id_text_count_words" rows="18"><?=(isset($full_words) && !empty($full_words) ? $full_words : '')?></textarea>
                </div>
                <button type="submit" class="btn btn-success mb-2">{{ trans('site.Uznat') }}</button>
            </form>
        </div>
    </div>

@endsection
