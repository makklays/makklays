<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Session;

class MysiteController extends Controller
{
    public function index()
    {
        $lang = Session::get('lang');
        if (isset($lang) && !empty($lang)) {
            App::setLocale($lang);
        }
        /*echo '<pre>';
        print_r(Session::get('lang'), 0);
        echo '</pre>';*/

        // что я делаю - страничка презентация
        return view('mysite.mysite', [
            //'packages' => $packages,
        ]);
    }

    public function links()
    {
        // страница с полезными линками ))
        return view('links');
    }

    public function myProfile()
    {
        $user = User::where(['id' => auth()->id()])->first();
        return view('mysite.my-profile', [
            'user' => $user,
        ]);
    }

    public function settings()
    {
        //
        return view('mysite.settings');
    }

    public function report()
    {
        $reports = DB::select('SELECT * FROM tests ORDER BY created_at DESC');

        // кто кликал на изображения - отчет
        return view('mysite.report', [
            'reports' => $reports
        ]);
    }

    public function feedbacks()
    {
        //
        return view('mysite.feedbacks');
    }

    // детальнее - заказ сайта
    public function site()
    {
        // add price.xls for download
        return view('mysite.site');
    }

    // детальнее - заказ shop
    public function shop()
    {
        // add price.xls for download
        return view('mysite.shop');
    }

    // детальнее - заказ crm
    public function crm()
    {
        // add price.xls for download
        return view('mysite.crm');
    }
}
