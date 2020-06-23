@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>{{ trans('site.Orders') }} (<?=$orders->total()?>)</h2>
                <span>{{ trans('site.orders_descr') }}</span> <br/><br/>

                <div class="text-left">
                    <a href="{{ route('adm-order-add', app()->getLocale()) }}" class="btn btn-success">{{ trans('site.Add_order') }}</a>
                </div>

                @include('partials.flash')

                <?php if (isset($orders) && !empty($orders) && $orders->total()): ?>
                <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                    <thead class="">
                        <tr>
                            <th class="text-center">ID</th>
                            <th>{{ trans('site.Title') }}</th>
                            <th class="text-center">{{ trans('site.Lang') }}</th>
                            <th class="text-center">{{ trans('site.Price') }}</th>
                            <th class="text-center">{{ trans('site.File') }}</th>
                            <th class="text-center">{{ trans('site.Date_From') }}</th>
                            <th class="text-center">{{ trans('site.Date_To') }}</th>
                            <th class="text-center">{{ trans('site.Status') }}</th>
                            <th class="text-center" colspan="2">{{ trans('site.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($orders as $item): ?>
                        <tr>
                            <td class="text-center"><?=$item->id?></td>
                            <td style="width:300px;"><a href="{{ route('adm-order-view', ['lang' => app()->getLocale(), 'order_id' => $item->id]) }}"><?=$item->title?></a></td>
                            <td class="text-center"><?=(!empty($item->lang) ? $item->lang : '-')?></td>
                            <td class="text-center"><?=(!empty($item->price_uah) ? $item->price_uah : 0)?></td>
                            <td class="text-center"><?=(!empty($item->tzfile) ? trans('site.Yes') : trans('site.No'))?></td>
                            <td class="text-center"><?=(!empty($item->from_date) ? date('d.m.Y', strtotime($item->from_date)) : 0)?></td>
                            <td class="text-center"><?=(!empty($item->to_date) ? date('d.m.Y', strtotime($item->to_date)) : 0)?></td>
                            <td class="text-center"><?=$item->status?></td>
                            <td class="text-center"><a href="{{ route('adm-order-edit', ['lang' => app()->getLocale(), 'order_id' => $item->id]) }}">{{ trans('site.Edit') }}</a></td>
                            <td class="text-center"><a href="{{ route('adm-order-delete', ['lang' => app()->getLocale(), 'order_id' => $item->id]) }}" onclick="return confirm('Удалить этот заказ?');">{{ trans('site.Delete') }}</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

                <?php echo $orders->render(); ?>

                <?php else: ?>
                <div style="margin-top:50px;">
                    <i>{{ trans('site.Not_orders') }}</i>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

@endsection
