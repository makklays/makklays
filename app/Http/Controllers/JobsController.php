<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class JobsController extends Controller
{
    public function index()
    {

    }

    public function lista(Request $request)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        $user = Auth::user();

        // get list of packages
        if ($request->isMethod('get') && !empty($request->kw)) {
            //$vacancies = DB::select('SELECT * FROM vacancies WHERE title LIKE ? AND is_visible=1 AND is_delete=0 ORDER BY public_date', ['%'.$request->kw.'%']);
            $vacancies = DB::table('vacancies')
                ->leftJoin('favorites', 'vacancies.id', '=', 'favorites.vac_id')
                ->leftJoin('companies', 'vacancies.company_id', '=', 'companies.id')
                ->leftJoin('cities', 'vacancies.city_id', '=', 'cities.id')
                ->where('vacancies.is_visible', '=', 1)
                ->where('vacancies.is_delete', '=', 0)
                ->where('vacancies.title', 'LIKE', '%' . $request->kw . '%')
                ->orderByDesc('vacancies.is_hot')
                ->orderBy('vacancies.public_date')
                ->select('vacancies.*', 'favorites.user_id as in_fav_user_id', 'companies.name as company_name', 'cities.name as city_name')
                ->paginate(3);

            $kw = $request->kw;
        } else {
            //$vacancies = DB::select('SELECT * FROM vacancies WHERE is_visible=1 AND is_delete=0 ORDER BY public_date ');
            $vacancies = DB::table('vacancies')
                ->leftJoin('favorites', 'vacancies.id', '=', 'favorites.vac_id')
                ->leftJoin('companies', 'vacancies.company_id', '=', 'companies.id')
                ->leftJoin('cities', 'vacancies.city_id', '=', 'cities.id')
                /*->leftJoin('favorites as f', function($join){
                    $join->on('vacancies.id', '=', 'favorites.vac_id');
                })*/
                ->where('vacancies.is_visible', '=', 1)
                ->where('vacancies.is_delete', '=', 0)
                ->where('vacancies.title', 'LIKE', '%' . $request->kw . '%')
               // ->where('favorites.user_id', '=', $user->id)
               // ->orWhere('favorites.user_id', 'IS', 'NULL')
                ->orderByDesc('vacancies.is_hot')
                ->orderBy('vacancies.public_date')
               // ->having( DB::raw('favorites.user_id = '.$user->id.' OR favorites.user_id IS NULL'))
                ->select('vacancies.*', 'favorites.user_id as in_fav_user_id', 'companies.name as company_name', 'cities.name as city_name')
                ->paginate(3);

            $kw = '';
        }


        /*foreach($vacancies as $ff) {
            if (isset($ff->in_fav) && !empty($ff->in_fav)) {
                echo '<pre>';
                print_r($ff);
                echo '</pre>';
            }
        }
        exit;*/
        //$cities = DB::select('SELECT r.*, r.name as r_name, c.*, c.id as city_id FROM cities c LEFT JOIN regions r ON (c.region_id=r.id) WHERE r.is_visible=1 AND c.is_visible=1 ORDER BY r.sort, c.sort ');


        // get regions and cities
        $regcities = [];
        $regions = DB::select('SELECT * FROM regions WHERE is_visible=1 ORDER BY sort');
        if ($regions) {
            foreach ($regions as $region) {
                // ger cities in region
                $cities = DB::select('SELECT * FROM cities WHERE is_visible=1 AND region_id=? ORDER BY sort', [$region->id]);
                if ($cities) {
                    $regcities[$region->id] = $region;
                    foreach ($cities as $city) {
                        $regcities[$region->id]->cities[] = $city;
                    }
                }
            }
        }

        /*echo '<pre>';
        print_r($regcities);
        echo '</pre>';
        exit;*/

        return view('jobs.list', [
            'vacancies' => $vacancies,
            'cities' => $cities,
            'kw' => $kw,
            'user_id' => $user->id,
            'regcities' => $regcities,
        ]);
    }
}