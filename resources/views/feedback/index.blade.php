@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('site.Soobsheniya') }} (<?=$items->total()?>)</h2>
            </div>
            <div class="col-md-12">

                @include('partials.flash')

                <?php if (isset($items) && !empty($items) && $items->total()): ?>
                    <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center">ID</th>
                            <th>{{ trans('site.Name') }}</th>
                            <th>{{ trans('site.Email') }}</th>
                            <th>{{ trans('site.Date') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($items as $item): ?>
                            <tr>
                                <td class="text-center"><?=$item->id?></td>
                                <td style="width:300px;"><a href="{{ route('feedback_show', [app()->getLocale(), $item->id]) }}" class="a-green"><?=$item->name?></a></td>
                                <td> <?=(!empty($item->email) ? '<a href="mailto:'.$item->email.'" class="a-green">'.$item->email.'</a>' : '-')?> </td>
                                <td> <?=date('d/m/Y H:i:s', $item->created_at)?> </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php echo $items->render(); ?>

                <?php else: ?>
                    <div style="margin-top:50px;">
                        <i>Not items</i>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

@endsection
