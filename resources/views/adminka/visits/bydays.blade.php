@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>{{ trans('site.Visits_by_days') }} (<?=$visits->total()?>)</h2>
                <span>{{ trans('site.Visits_by_day_descr') }}</span> <br/>

                <a href="{{ route('visits', app()->getLocale()) }}" class="a-green" ><< {{ trans('site.Visits') }}</a> <br/>

                @include('partials.flash')

                <?php if (isset($visits) && !empty($visits) && $visits->total() > 0): ?>

                    <table id="id-companies" class="table table-bordered display" style="margin:20px 0;">
                        <thead class="">
                        <tr>
                            <th class="text-center">{{ trans('site.Date') }}</th>
                            <th class="text-center">{{ trans('site.Count_views') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($visits as $item): ?>
                        <tr>
                            <td class="text-center"><?=(!empty($item->ddate) ? date('d.m.Y', strtotime($item->ddate)) : 0)?></td>
                            <td class="text-center"><?=$item->count_views?></td>
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
