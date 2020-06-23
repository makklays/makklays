@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @include('partials.flash')

                <h2>Заказ #<?=$order->id?></h2>

                <h3>{{ $order->title }}</h3> <br/>

                <p>Язык: <?=$order->lang?></p>
                <p>Тип сайта: <?=$order->type_site?></p>
                <p>Статус: <?=$order->status?></p>
                <p>Цена: <?=$order->price_uah?> грн</p>

                <p>
                    Период разработки: c <?=date('d.m.Y', strtotime($order->from_date))?>
                    по <?=date('d.m.Y', strtotime($order->to_date))?>
                     -  <?=round( ( strtotime($order->to_date) - strtotime($order->from_date) ) / (60*60*24) )?> дней
                </p>

                <p>Файл: <a href="/" target="_blank"><?=$order->tzfile?></a></p>

                <br/>
                <p>
                    <b>Описание:</b> <br/>
                    <?=nl2br($order->description)?>
                </p>

            </div>
        </div>
    </div>

@endsection
