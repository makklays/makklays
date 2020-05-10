@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('site.Statistics') }} <?=(!empty($stats) ? '('.count($stats).')' : '')?></h2>
                <span>{{ trans('site.statistics_descr') }}</span>
            </div>

            <div class="col-md-12">
                <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                    <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>{{ trans('site.Lang') }}</th>
                        <th>Strana</th>
                        <th>City</th>
                        <th>Region</th>
                        <th>ZipCode</th>
                        <th>IP</th>
                        <th>Lat</th>
                        <th>Lon</th>
                        <th>{{ trans('site.Date') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($stats as $report): ?>
                    <tr>
                        <td><?=$report->id?></td>
                        <td><?=$report->lang?></td>
                        <td><?=$report->strana?></td>
                        <td><?=$report->city?></td>
                        <td><?=$report->region?></td>
                        <td><?=$report->zip_code?></td>
                        <td><?=$report->ip?></td>
                        <td><?=$report->lat?></td>
                        <td><?=$report->lon?></td>
                        <td><?=date('d.m.Y H:i:s', strtotime($report->created_at))?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
