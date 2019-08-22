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
}