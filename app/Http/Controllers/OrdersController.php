<?php

namespace App\Http\Controllers;

use App\Call;
use App\Mail\CallMail;
use App\Mail\FeedbackMail;
use App\Mail\BriefOnlineMail;
use App\User;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function index()
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // list of companies
        //$companies = DB::select('SELECT * FROM companies ');
        $orders = DB::table('orders')->orderBy('created_at', 'DESC')->paginate(20);

        /*if (isset($companies) && !empty($companies)) {
            foreach($companies as &$company) {
                $employees = DB::selectOne('SELECT count(id) as count FROM employees WHERE company_id=?', [$company->id]);
                $company->count_employees = $employees->count;
            }
        }*/

        return view('adminka.orders.index', [
            'orders' => $orders,
        ]);
    }

    // страница - добавления заказа
    public function add(Request $request){

        if ($request->isMethod('post')) {
            //dd($request);

            $insert = DB::insert('INSERT INTO orders SET lang=?, price=?, type_site=?, status=?, title=?, 
            short_text=?, description=?, from_date=?, to_date=?, created_at=?',
                [
                    $ip, $strana, $city, $strana_rus, $city_rus, $zip_code, $time_zone,
                    $strana_code, $region, $region_rus, $lat, $lon, date('Y-m-d H:i:s')
                ]);
        }

        return view('adminka.orders.add', [
            //'orders' => $orders,
        ]);
    }
}
