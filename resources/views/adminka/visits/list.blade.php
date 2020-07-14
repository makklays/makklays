@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>{{ trans('site.Visits') }} (<?=$visits->total()?>)</h2>
                <span>{{ trans('site.visits_descr') }}</span>

                @include('partials.flash')

                <?php if (isset($visits) && !empty($visits) && $visits->total() > 0): ?>

                    <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-left">{{ trans('site.Url') }}</th>
                                <th class="text-left">{{ trans('site.Url_referer') }}</th>
                                <th class="text-center">{{ trans('site.Lang') }}</th>
                                <th class="text-center">{{ trans('site.Is_mobile') }}</th>
                                <th class="text-center">{{ trans('site.IP_address') }}</th>
                                <th class="text-center">{{ trans('site.Date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($visits as $item): ?>
                                <tr>
                                    <td class="text-center"><?=$item->id?></td>
                                    <td class="text-left"><?=(!empty($item->url) ? $item->url : '-')?></td>
                                    <td class="text-left"><?=(!empty($item->url_referer) ? $item->url_referer : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->lang) ? $item->lang : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->is_mobile) ? trans('site.Yes') : trans('site.Not'))?></td>
                                    <td class="text-center"><?=(!empty($item->ip) ? $item->ip : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->created_at) ? date('d.m.Y H:i:s', strtotime($item->created_at)) : 0)?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php echo $visits->render(); ?>

                <?php else: ?>
                    <div style="margin-top:50px;">
                        <i>{{ trans('site.Not_visits') }}</i>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

@endsection
