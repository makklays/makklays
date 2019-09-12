
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <h1>Report <?=(!empty($reports) ? '('.count($reports).')' : '')?></h1>
        </div>

        <div class="col-md-6">

            <table id="id-companies" class="table table-bordered display" style="width:100%; margin:20px 0;">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Choice</th>
                    <th>Strana</th>
                    <th>City</th>
                    <th>Region</th>
                    <th>ZipCode</th>
                    <th>Lat</th>
                    <th>Lon</th>
                    <th style="width:200px;">Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($reports as $report): ?>
                <tr>
                    <td><?=$report->id?></td>
                    <td><?=$report->choice?></td>
                    <td><?=$report->strana?></td>
                    <td><?=$report->city?></td>
                    <td><?=$report->region?></td>
                    <td><?=$report->zip_code?></td>
                    <td><?=$report->lat?></td>
                    <td><?=$report->lon?></td>
                    <td><?=date('d/m/Y H:i', $report->created_at)?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

@endsection
