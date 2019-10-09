
@extends('layouts.app')

@section('content')

    <div class="" style="margin:0 100px;">

        <h2>Feedback (<?=$items->total()?>)</h2>

        @include('partials.flash')

        <?php if (isset($items) && !empty($items) && $items->total()): ?>
        <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
            <thead class="thead-light">
            <tr>
                <th class="text-center">ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($items as $item): ?>
                <tr>
                    <td class="text-center"><?=$item->id?></td>
                    <td style="width:300px;"><a href="{{ route('feedback_show', [app()->getLocale(), $item->id]) }}"><?=$item->name?></a></td>
                    <td> <?=(!empty($item->email) ? '<a href="mailto:'.$item->email.'">'.$item->email.'</a>' : '-')?> </td>
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

@endsection
