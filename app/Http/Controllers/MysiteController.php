<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class MysiteController extends Controller
{
    public function indexPage()
    {
        // что я делаю - страничка презентация
        return view('mysite', [
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
        //
        return view('mysite.my-profile');
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
}