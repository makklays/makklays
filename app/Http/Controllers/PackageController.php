<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class PackageController extends Controller
{
    public function listPackages()
    {
        // get list of packages
        $packages = DB::select('SELECT * FROM packages WHERE is_visible=1 AND is_delete=0 ');

        return view('packages.list', [
            'packages' => $packages,
        ]);
    }

    public function package($id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // get detail of package
        $package = DB::selectOne('SELECT * FROM packages WHERE is_visible=1 AND is_delete=0 AND id=? ', [$id]);

        return view('packages.package', [
            'package' => $package,
        ]);
    }

    public function payment_success(Request $request)
    {
        $paypalemail = "phpdevops@gmail.com";  // e-mail продавца
        $adminemail  = "phpdevops@gmail.com";  // e-mail  администратора
        $currency    = "USD";                  // валюта

        if ($request->isMethod('post')) {
            $custom = $request->custom;

            $id = $request->id;
            $package = DB::selectOne('SELECT * FROM packages WHERE is_visible=1 AND is_delete=0 AND id=? ', [$id]);
        }

        // payment_success.php
        /*
        // запрашиваем подтверждение транзакции
        $postdata="";
        foreach ($_POST as $key=>$value) $postdata.=$key."=".urlencode($value)."&";
        $postdata .= "cmd=_notify-validate";
        $curl = curl_init("https://www.paypal.com/cgi-bin/webscr");
        curl_setopt ($curl, CURLOPT_HEADER, 0);
        curl_setopt ($curl, CURLOPT_POST, 1);
        curl_setopt ($curl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, 1); // для сайта с ssl - https
        $response = curl_exec ($curl);
        curl_close ($curl);
        if ($response != "VERIFIED") die("You should not do that ...");

        // проверяем получателя платежа и тип транзакции, и выходим, если не наш аккаунт
        // в $paypalemail - наш  primary e-mail, поэтому проверяем receiver_email
        if ($_POST['receiver_email'] != $paypalemail || $_POST["txn_type"] != "web_accept")
            die("You should not be here ...");
        */


        // ПЕРЕДЕЛАТЬ (!)

        // здесь код, подключающийся к базе данных
        /*
        // убедимся в том, что эта транзакция не
        // была обработана ранее
        $r = mysql_query("SELECT order_id FROM orders WHERE txn_id='".$_POST["txn_id"]."'");
        list($duplicate) = mysql_fetch_row($r);
        mysql_free_result($r);
        if ($duplicate) die ("I feel like I met you before ...");
        // проверяем сумму платежа
        $cart_id = intval($_POST['item_number']);
        $r = mysql_query( "SELECT sum(price*quantity), COUNT(cart_id) FROM cart
                      WHERE cart_id=".$cart_id);
        list ($total,$nitems) = mysql_fetch_row($r);
        mysql_free_result($r);
        if (!$nitems) // не удалось восстановить содержимое корзины
        {
            mail($adminemail, "IPN error", "Unable to restore cart contents\r\nCart ID: ".
                $cart_id."\r\nTransaction ID: ".$_POST["txn_id"]);
            die("I cannot recall what you paid for ... Please contact ".$adminemail);
        }
        if ($total != $_POST["mc_gross"] || $_POST["mc_currency"] != $currency)
        {
            mail($adminemail, "IPN error", "Payment amount mismatch\r\nCart ID: "
                . $cart_id."\r\nTransaction ID: ".$_POST["txn_id"]);
            die("Out of money? Please contact ".$adminemail);
        }
        // проверки завершены. формируем заказ
        $order_date = date("Y-m-d H:i:s",strtotime ($_POST["payment_date"]));
        mysql_query("INSERT INTO orders SET
            txn_id      = '".$_POST["txn_id"]."',
            order_date  = '$order_date',
            order_total = $total,
            email       = '".$_POST["payer_email"]."',
            first_name  = '".mysql_escape_string($_POST["first_name"])."',
            last_name   = '".mysql_escape_string($_POST["last_name"])."',
            street      = '".mysql_escape_string($_POST["address_street"])."',
            city        = '".mysql_escape_string($_POST["address_city"])."',
            state       = '".mysql_escape_string($_POST["address_state"])."',
            zip         = '".mysql_escape_string($_POST["address_zip"])."',
            country     = '".mysql_escape_string($_POST["address_country"])."'" );
        $order_id = mysql_insert_id();
        $r = mysql_query("SELECT * FROM cart WHERE cart_id=".$cart_id);
        while ($row = mysql_fetch_assoc($r))
        {
            mysql_query("INSERT INTO order_details SET
            order_id = $order_id,
            item_id = ".$row['item_id'].",
            price = ".$row['price'].",
            quantity = ".$row['quantity']);
        }
        mysql_free_result($r);
        mysql_query("DELETE FROM cart WHERE cart_id=".$cart_id);
        mail($adminemail, "New order", "New order\r\nOrder ID: ". $order_id."\r\nTransaction ID: "
            .$_POST["txn_id"]);
        // сообщаем, что заказ принят, благодарим за покупку и
        // предлагаем купить еще что-нибудь
        */


        return view('packages.payment_success', [
            // 'package' => $package,
        ]);
    }

    public function payment_notify(Request $request)
    {
        //
    }

    public function payment_cancel(Request $request)
    {
        //



        return view('packages.payment_cancel', [
            // 'package' => $package,
        ]);
    }
}