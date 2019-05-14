
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <h1>Package - <?=$package->title?></h1>
        </div>

        <!--div class="row" style="margin: 0;">
            <span>days <?=$package->days?></span>
        </div-->

        <div class="row" style="margin: 50px 0 20px 0;">
            <p><?=$package->full_description?></p>
        </div>

        <div class="row" style="margin: 0;">
            <h3>Price: <?=$package->price?> <?=$package->currency?></h3>
        </div>

        <div class="row" style="margin: 0;">
            <!--form action="/" method="get">
                <button type="submit" class="btn btn-secondary" id-package="<?=$package->id?>" style="margin-right:20px;" >Buy</button>
            </form-->

            <!--form action="https://www.paypal.com/cgi-bin/webscr" method="post">

                <input name="business" type="hidden" value="phpdevops@gmail.com" />

                <input name="cmd" type="hidden" value="_xclick" />

                <input name="item_name" type="hidden" value="Hot Sauce-12oz. Bottle" />
                <input name="amount" type="hidden" value="5.95" />
                <input name="currency_code" type="hidden" value="USD" />

                <input alt="Buy Now" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" type="image" />
                <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" />
            </form-->

            <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="business" value="phpdevops@gmail.com" />
                <input type="hidden" name="item_name" value="<?=$package->title?>" />
                <input type="hidden" name="item_number" value="<?=$package->id?>" />
                <!-- 1-не запрашивать адрес доставки -->
                <input type="hidden" name="no_shipping" value="1" />
                <!-- URL, куда покупатель будет перенаправлен после успешной оплаты -->
                <input type="hidden" name="return" value="http://makklays.com.ua/buy/success" />
                <!-- 2-method post для http://makklays.com.ua/buy/success -->
                <input type="hidden" name="rm" value="2" />
                <input type="hidden" name="cancel_return" value="http://makklays.com.ua/buy/cancel" />
                <!-- URL, на который PayPal будет предавать информацию о транзакции (IPN) -->
                <input type="hidden" name="notify_url" value="http://makklays.com.ua/buy/notify" />
                <!-- оно будет передано вашему скрипту при подверждении транзакции -->
                <input type="hidden" name="custom" value="it_buy_it" />
                <!-- Используется для передачи номера счета - уникальный -->
                <input type="hidden" name="invoice" value="invoice-package-<?=$package->id?>-<?=time()?>" />

                <input type="hidden" name="amount" value="<?=$package->price?>" />
                <input name="currency_code" type="hidden" value="<?=$package->currency?>" />

                <input type="submit" class="btn btn-paypal" name="submit" value="" alt="Buy Now" />
            </form>

            <!-- script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
            <script>paypal.Buttons().render('body');</script -->

        </div>
    </div>

@endsection