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
        if (!Auth::check()) return redirect('/admin/login/');

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

    function getRealUserIp(){
        switch(true){
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default : return $_SERVER['REMOTE_ADDR'];
        }
    }

    // страница - добавления заказа
    public function add(Request $request){

        // Only loggined
        if (!Auth::check()) return redirect('/admin/login/');

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'lang' => 'required|max:2',
                'price' => 'required|max:25',
                'type_site' => 'required|max:191',
                'status' => 'required|max:25',
                'title' => 'required|max:191',
                'short_text' => 'required|max:1000',
                'description' => 'required|max:3000',
                'from_date' => 'required|date',
                'to_date' => 'required|date',
            ]);

            if ($validator->fails()) {
                $messages = $validator->messages();
                return redirect(route('admin/adm-order-add', app()->getLocale()))
                    ->with([
                        'flash_message' => 'Ошибка! <br/>При заполнении данных произошла ошибка <br/> Проверьте и попробуйте еще раз',
                        'flash_type' => 'danger'
                    ])
                    ->withErrors($validator)
                    ->withInput();
            }

            $insert = DB::insert('INSERT INTO orders SET lang=?, price_uah=?, type_site=?, status=?, title=?, 
            short_text=?, description=?, from_date=?, to_date=?, created_at=?',
                [
                    $request->lang, $request->price, $request->type_site, $request->status, $request->title,
                    $request->short_text, $request->description, $request->from_date, $request->to_date,
                    date('Y-m-d H:i:s')
                ]);

            return redirect(app()->getLocale().'/admin/adm-orders')->with([
                'flash_message' => 'Ваш заказ, "'.$request->title.'" был успешно добавлен!',
                'flash_type' => 'success'
            ]);
        }

        return view('adminka.orders.add', [
            //'orders' => $orders,
        ]);
    }

    public function edit(Request $request, $lang, $id)
    {
        // Only loggined
        if (!Auth::check()) return redirect(app()->getLocale() . '/login');

        if (!isset($id) || !empty($id)) redirect('/admin/adm-articles');

        // simple upload image
        $file = (isset($request->file()['photo']) && !empty($request->file()['photo']) ? $request->file()['photo'] : '');
        $filename = '';
        if (isset($file) && !empty($file)) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('articles/imgs'), $filename);
        }

        // update data of company
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'lang' => 'required|max:2',
                'price' => 'required|max:25',
                'type_site' => 'required|max:191',
                'status' => 'required|max:25',
                'title' => 'required|max:191',
                'short_text' => 'required|max:1000',
                'description' => 'required|max:3000',
                'from_date' => 'required|date',
                'to_date' => 'required|date',
            ]);

            if ($validator->fails()) {
                $messages = $validator->messages();
                return redirect(app()->getLocale() . '/admin/adm-order-edit/' . $id)
                    ->with([
                        'flash_message' => 'Ошибка! <br/>Ваш заказ, "'.$request->title.'" не был отредактирован!',
                        'flash_type' => 'danger'
                    ])
                    ->withErrors($validator)
                    ->withInput();
            }

            if (isset($filename) && !empty($filename)) {
                DB::update('UPDATE `orders` SET lang=?, price_uah=?, type_site=?, status=?, title=?, 
                                        short_text=?, description=?, from_date=?, to_date=?, tzfile=?, updated_at=? 
                                   WHERE id=?', [
                    $request->lang,
                    $request->price,
                    $request->type_site,
                    $request->status,
                    $request->title,
                    $request->short_text,
                    $request->description,
                    $request->from_date,
                    $request->to_date,
                    (isset($filename) && !empty($filename) ? $filename : null),
                    date('Y-m-d H:i:s'),
                    $id
                ]);
            } else {
                DB::update('UPDATE `orders` SET lang=?, price_uah=?, type_site=?, status=?, title=?, 
                                        short_text=?, description=?, from_date=?, to_date=?, updated_at=? 
                                   WHERE id=?', [
                    $request->lang,
                    $request->price,
                    $request->type_site,
                    $request->status,
                    $request->title,
                    $request->short_text,
                    $request->description,
                    $request->from_date,
                    $request->to_date,
                    date('Y-m-d H:i:s'),
                    $id
                ]);
            }

            return redirect(app()->getLocale().'/admin/adm-orders')->with([
                'flash_message' => 'Ваш заказ, "'.$request->title.'" был успешно отредактирован!',
                'flash_type' => 'success'
            ]);
        }

        // get article
        $order = DB::selectOne('SELECT * FROM orders WHERE id=?', [$id]);

        return view('adminka.orders.edit', [
            'order' => $order
        ]);
    }

    public function delete(Request $request, $lang, $id)
    {
        // Only loggined
        if (!Auth::check()) return redirect(app()->getLocale() . '/admin/login');

        if (!isset($id) || !empty($id)) redirect('/admin/adm-orders');

        // get order - получить заказ
        $order = DB::selectOne('SELECT * FROM orders WHERE id=?', [$id]);

        // delete article - удалить заказ
        $delete = DB::delete('DELETE FROM orders WHERE id=?', [$id]);

        return redirect(app()->getLocale().'/admin/adm-orders')->with([
            'flash_message' => 'Ваш заказ, "'.$order->title.'" был успешно удалён!',
            'flash_type' => 'success'
        ]);
    }

    public function view(Request $request, $lang, $id)
    {
        // Only loggined
        if (!Auth::check()) return redirect(app()->getLocale() . '/admin/login');

        if (!isset($id) || !empty($id)) redirect('/admin/adm-orders');

        // get order - получить заказ
        $order = DB::selectOne('SELECT * FROM orders WHERE id=?', [$id]);

        return view('adminka.orders.view', [
            'order' => $order
        ]);
    }
}
