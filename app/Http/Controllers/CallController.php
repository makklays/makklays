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

class CallController extends Controller
{
    public function index()
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // list of companies
        //$companies = DB::select('SELECT * FROM companies ');
        $calls = DB::table('call')->orderBy('created_at', 'DESC')->paginate(20);

        /*if (isset($companies) && !empty($companies)) {
            foreach($companies as &$company) {
                $employees = DB::selectOne('SELECT count(id) as count FROM employees WHERE company_id=?', [$company->id]);
                $company->count_employees = $employees->count;
            }
        }*/

        return view('adminka.call.index', [
            'calls' => $calls,
        ]);
    }

    //
    public function blacklist()
    {
        // сделать модель
        $blacklists = DB::table('blacklist')->orderBy('created_at', 'DESC')->paginate(20);

        return view('adminka.blacklist.index', [
            'blacklists' => $blacklists,
        ]);
    }
}
