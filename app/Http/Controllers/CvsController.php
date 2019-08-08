<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class CvsController extends Controller
{
    public function lista()
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // get list of cvs
        $cvs = DB::select('SELECT * FROM cvs as cv WHERE cv.is_visible=1 AND cv.is_delete=0 ORDER BY cv.modified_at DESC');

        // add last place of work
        if (isset($cvs) && !empty($cvs)) {
            foreach($cvs as &$cv) {
                $sql = 'SELECT * FROM placework WHERE cv_id=? AND is_delete=0 ORDER BY y_to DESC, m_to DESC';
                $place = DB::selectOne($sql, [$cv->id]);

                if (isset($place) && !empty($place)) {
                    $cv->last_place = $place;
                }
            }
        }

        return view('cvs.list', [
            'cvs' => $cvs,
        ]);
    }

    public function add()
    {
        $cities = DB::select('SELECT * FROM cities WHERE is_visible=1 ORDER BY sort ');

        $sds = DB::select('SELECT * FROM sferadeyatel WHERE is_visible=1 ORDER BY sort ');

        $langs = DB::select('SELECT * FROM languages WHERE is_delete=0 ');

        $levels = DB::select('SELECT * FROM lang_level ');

        return view('cvs.add', [
            'cities' => $cities,
            'sds' => $sds,
            'langs' => $langs,
            'levels' => $levels
        ]);
    }

    public function addPost(Request $request)
    {
        if ($request->isMethod('post')) {
            $email = $request->email;
            $phone = $request->phone;
            $site = $request->site;
            $title = $request->post;
            $typejob = $request->typejob;
            $salary = $request->salary;
            $currency = $request->currency;
            $about = $request->about;

            $has_car = $request->has_car;
            $has_a = $request->has_a;
            $has_b = $request->has_b;
            $has_c = $request->has_c;
            $has_d = $request->has_d;
            $has_e = $request->has_e;
            $has_be = $request->has_be;
            $has_ce = $request->has_ce;
            $has_de = $request->has_de;
            $has_tm = $request->has_tm;
            $has_tb = $request->has_tb;

            $user_id = 1;

            $insert = DB::insert('INSERT INTO cvs SET user_id=?, title=?,
                email=?, phone=?, site=?, typejob=?, salary=?, currency=?, about=?, 
                has_car=?, has_a=?, has_b=?, has_c=?, has_d=?, has_e=?, has_be=?, has_ce=?, has_de=?, has_tm=?, has_tb=?,  
                is_visible=?, is_delete=?, created_at=?, modified_at=? ', [
                $user_id, $title,
                $email, $phone, $site, $typejob, $salary, $currency, $about,
                $has_car, $has_a, $has_b, $has_c, $has_d, $has_e, $has_be, $has_ce, $has_de, $has_tm, $has_tb,
                1, 0, time(), time()
            ]);

            /*echo '<pre>';
            print_r($request->all());
            echo '</pre>';*/

            return redirect('cvs');
        }

        $aa = 'hernya';
        return view('cvs.add', [
            'aa' => $aa,
        ]);
    }

    public function favorites()
    {
        //
        $cities = DB::select('SELECT * FROM cities WHERE is_visible=1 ORDER BY sort ');

        $favorites = DB::select('SELECT * FROM favorites f JOIN vacancies v ON (f.vac_id=v.id)  ORDER BY v.is_hot DESC, f.created_at ');

        $aa = 'hernya';
        return view('cvs.favorites', [
            'aa' => $aa,
            'cities' => $cities,
            'favorites' => $favorites,
        ]);
    }

    // add and delete
    public function changeFavorite(Request $request)
    {
        // only authorization
        // add (!)


        $user = Auth::user();

        $vac_id = trim($request->vacancia_id);
        $user_id = $user->id; // $user = Auth::user();

        $select = DB::selectOne('SELECT * FROM favorites WHERE vac_id=? AND user_id=?', [$vac_id, $user_id]);

        //dd($select);

        if (isset($select->id) && !empty($select->id)) {
            $delete = DB::delete('DELETE FROM favorites WHERE vac_id=? AND user_id=?', [$vac_id, $user_id]);
            if ($delete) {
                $res = ['is_success' => 1, 'is_del' => 1];
            } else {
                $res = ['is_success' => 0, 'is_del' => 1];
            }
        } else {
            $insert = DB::insert('INSERT INTO favorites SET vac_id=?, user_id=?, created_at=?', [$vac_id, $user_id, date('Y-m-d H:I:s')]);
            if ($insert) {
                $res = ['is_success' => 1, 'is_del' => 0];
            } else {
                $res = ['is_success' => 0, 'is_del' => 0];
            }
        }

        return json_encode($res);
    }

    public function recommend()
    {
        //
        //$cities = DB::select('SELECT * FROM cities WHERE is_visible=1 ORDER BY sort ');

        // add WHERE
        $word = 'php';
        $recommends = DB::select('SELECT * FROM vacancies WHERE is_visible=1 AND is_delete=0 AND title LIKE ? ORDER BY is_hot DESC, created_at', ['%'.$word.'%']);

        //$aa = 'hernya';
        return view('cvs.recommend', [
            //'aa' => $aa,
            //'cities' => $cities,
            'recommends' => $recommends,
        ]);
    }
}