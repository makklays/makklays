@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('site.Soobshenie') }}</h2> <br/>
            </div>

            <div class="col-md-12 text-md-left"><b>{{ trans('site.Name') }}:</b></div>
            <div class="col-md-12">
                <?=(isset($item->name) && !empty($item->name) ? $item->name : '-')?>
                <br/><br/>
            </div>

            <div class="col-md-12 text-md-left"><b>E-mail:</b> </div>
            <div class="col-md-12">
                <?=(!empty($item->email) ? '<a href="mailto:'.$item->email.'" class="a-green">'.$item->email.'</a>' : '')?>
                    <br/><br/>
            </div>

            <div class="col-md-12 text-md-left"><b>{{ trans('site.Date') }}:</b> </div>
            <div class="col-md-12 text-left">
                <?php if(isset($item->created_at) && !empty($item->created_at)): ?>
                    <?=date('d.m.Y H:i:s', $item->created_at)?>
                <?php endif; ?>
                    <br/><br/>
            </div>

            <div class="col-md-12 text-md-left"><b>{{ trans('site.Message') }}:</b> </div>
            <div class="col-md-12 text-left">
                <?=(isset($item->message) && !empty($item->message) ? $item->message : '-')?>
                    <br/><br/>
            </div>
        </div>
    </div>

@endsection
