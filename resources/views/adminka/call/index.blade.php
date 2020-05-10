@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>{{ trans('site.Calls') }} (<?=$calls->total()?>)</h2>
                <span>{{ trans('site.calls_descr') }}</span>

                <!--div class="text-left">
                    <a href="{{ route('adm-article-add', app()->getLocale()) }}" class="btn btn-success">{{ trans('site.Add_article') }}</a>
                </div-->

                @include('partials.flash')

                <?php if (isset($calls) && !empty($calls) && $calls->total()): ?>
                <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                    <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>{{ trans('site.Fio') }}</th>
                        <th class="text-left">{{ trans('site.Phone') }}</th>
                        <th>{{ trans('site.Lang') }}</th>
                        <th class="text-left">{{ trans('site.Messenger') }}</th>
                        <th class="text-left">{{ trans('site.want_development') }}</th>
                        <th class="text-center">{{ trans('site.IP_address') }}</th>
                        <th class="text-center">{{ trans('site.Date') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($calls as $item): ?>
                        <tr>
                            <td><?=$item->id?></td>
                            <td class="text-left"><?=(!empty($item->fio) ? $item->fio : '-')?></td>
                            <td class="text-left"><?=(!empty($item->phone) ? $item->phone : '-')?></td>
                            <td class="text-left"><?=(!empty($item->lang) ? $item->lang : '-')?></td>
                            <td class="text-left"><?=(!empty($item->messenger) ? $item->messenger : '-')?></td>
                            <td class="text-left"><?=(!empty($item->want_development) ? $item->want_development : '-')?></td>
                            <td class="text-center"><?=(!empty($item->ip_address) ? $item->ip_address : '-')?></td>
                            <td class="text-center"><?=(!empty($item->created_at) ? date('d.m.Y H:i:s', $item->created_at) : 0)?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

                <?php echo $calls->render(); ?>

                <?php else: ?>
                <div style="margin-top:50px;">
                    <i>{{ trans('site.Not_atricles') }}</i>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

@endsection
