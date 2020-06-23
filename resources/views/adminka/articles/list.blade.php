@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>{{ trans('site.Articles') }} (<?=$articles->total()?>)</h2>
                <span>{{ trans('site.List_articles_descr') }}</span> <br/><br/>

                <div class="text-left">
                    <a href="{{ route('adm-article-add', app()->getLocale()) }}" class="btn btn-success">{{ trans('site.Add_article') }}</a>
                </div>

                @include('partials.flash')

                <?php if (isset($articles) && !empty($articles) && $articles->total()): ?>
                <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                    <thead class="">
                        <tr>
                            <th>ID</th>
                            <th>{{ trans('site.Title') }}</th>
                            <th class="text-center">{{ trans('site.Lang') }}</th>
                            <th class="text-center">{{ trans('site.Views') }}</th>
                            <th class="text-center">{{ trans('site.Photo') }}</th>
                            <th class="text-center">{{ trans('site.Date') }}</th>
                            <th class="text-center">{{ trans('site.Is_visible') }}</th>
                            <th class="text-center" colspan="2">{{ trans('site.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($articles as $item): ?>
                    <tr>
                        <td><?=$item->id?></td>
                        <td style="width:300px;"><a href="{{ url($item->lang.'/develop-article/'.$item->slag) }}"><?=$item->title?></a></td>
                        <td class="text-center"><?=$item->lang?></td>
                        <td class="text-center"><?=(!empty($item->views) ? $item->views : 0)?></td>
                        <td class="text-center"><?=(!empty($item->photo) ? trans('site.Yes') : trans('site.No'))?></td>
                        <td class="text-center"><?=(!empty($item->created_at) ? date('d.m.Y H:i:s', strtotime($item->created_at)) : 0)?></td>
                        <td class="text-center"><?=(!empty($item->is_visible) ? trans('site.Yes') : trans('site.No'))?></td>
                        <td class="text-center"><a href="{{ route('adm-article-edit', ['lang' => app()->getLocale(), 'article_id' => $item->id]) }}">{{ trans('site.Edit') }}</a></td>
                        <td class="text-center"><a href="{{ route('adm-article-delete', ['lang' => app()->getLocale(), 'article_id' => $item->id]) }}" onclick="return confirm('Удалить эту статью?');">{{ trans('site.Delete') }}</a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

                <?php echo $articles->render(); ?>

                <?php else: ?>
                <div style="margin-top:50px;">
                    <i>{{ trans('site.Not_atricles') }}</i>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

@endsection
