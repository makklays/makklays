@extends('layouts.app')

@section('content')

    <div class="form-group row" style="margin:5px 0 10px 0;">
        <div class="col-md-4"></div>
        <div class="col-md-6">
            <h2>Feedback</h2>
        </div>
    </div>

    <div class="form-group row" style="margin:5px 0 10px 0;">
        <div class="col-md-4 text-md-right"><b>Name:</b> </div>
        <div class="col-md-6">
            <?=(isset($item->name) && !empty($item->name) ? $item->name : '-')?>
        </div>
    </div>

    <div class="form-group row" style="margin:5px 0 10px 0;">
        <div class="col-md-4 text-md-right"><b>E-mail:</b> </div>
        <div class="col-md-6">
            <?=(!empty($item->email) ? '<a href="mailto:'.$item->email.'">'.$item->email.'</a>' : '')?>
        </div>
    </div>

    <div class="input-group row " style="margin:5px 0 10px 0;">
        <div class="col-md-4 text-md-right"><b>Date:</b> </div>
        <div class="col-md-6 text-left">
            <?php if(isset($item->created_at) && !empty($item->created_at)): ?>
                <?=date('d/m/Y H:i:s', $item->created_at)?>
            <?php endif; ?>
        </div>
    </div>

    <div class="input-group row " style="margin:5px 0 10px 0;">
        <div class="col-md-4 text-md-right"><b>Message:</b> </div>
        <div class="col-md-6 text-left">
            <?=(isset($item->message) && !empty($item->message) ? $item->message : '-')?>
        </div>
    </div>

@endsection
