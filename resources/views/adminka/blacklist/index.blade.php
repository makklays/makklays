@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Blacklist</h2>
                <span>{{ trans('site.blacklist_descrs') }}</span> <br/><br/>
            </div>
            <div class="col-md-8">
                @include('partials.flash')

                <?php if (isset($blacklists) && !empty($blacklists) && $blacklists->total()): ?>
                <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                    <thead class="">
                    <tr>
                        <th>ID</th>
                        <th class="text-center">{{ trans('site.IP_address') }}</th>
                        <th class="text-center">{{ trans('site.Date') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($blacklists as $item): ?>
                    <tr>
                        <td><?=$item->id?></td>
                        <td class="text-center"><?=(!empty($item->ip) ? $item->ip : '-')?></td>
                        <td class="text-center"><?=(!empty($item->created_at) ? date('d.m.Y H:i:s', $item->created_at) : 0)?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

                <?php echo $blacklists->render(); ?>

                <?php else: ?>
                <div style="margin-top:50px;">
                    <i>{{ trans('site.Not_blacklist') }}</i>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

@endsection
