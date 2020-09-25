@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('site.Reports') }}</h2> <br/>
            </div>

            @include('partials.flash')

            <div class="col-md-12">
                <?php if (isset($reports) && !empty($reports) && $reports->total() > 0): ?>

                    <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-left">{{ trans('site.Title') }}</th>
                                <th class="text-center">{{ trans('site.Status') }}</th>
                                <th class="text-center">{{ trans('site.Lang') }}</th>
                                <th class="text-center">{{ trans('site.From_date') }}</th>
                                <th class="text-center">{{ trans('site.To_date') }}</th>
                                <th class="text-center">{{ trans('site.Price') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($reports as $item): ?>
                                <tr>
                                    <td class="text-center"><?=$item->id?></td>
                                    <td class="text-left"><?=(!empty($item->title) ? $item->title : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->status) ? $item->status : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->lang) ? $item->lang : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->from_date) ? $item->from_date : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->to_date) ? $item->to_date : '-')?></td>
                                    <td class="text-center"><?=(!empty($item->price_uah) ? $item->price_uah : 0)?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php echo $reports->render(); ?>

                <?php else: ?>
                    <div style="margin-top:50px;">
                        <i>{{ trans('site.Not_visits') }}</i>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

@endsection
