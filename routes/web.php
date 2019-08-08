<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('test'); // 'main'
});

/* mysite page */
Route::get('mysite', ['as' => 'mysite', 'uses' => 'MysiteController@indexPage']);

/* about me */
Route::get('about', ['as' => 'about', 'uses' => 'TodoController@about']);

/* cvs */
Route::get('cvs', ['as' => 'cvs', 'uses' => 'CvsController@lista']);

/* jobs - vacancies */
Route::get('jobs', ['as' => 'jobs', 'uses' => 'JobsController@lista']);

/* cvs add */
Route::get('/cvs/add', ['as' => 'cvs_add', 'uses' => 'CvsController@add']);
Route::post('/cvs/add', ['as' => 'cvs_add_post', 'uses' => 'CvsController@addPost'])->middleware('mobile.redirect');

/* cvs favorites */
Route::get('/cvs/favorites', ['as' => 'cvs_favorites', 'uses' => 'CvsController@favorites']);
Route::post('/cvs/change-favorite/{vacancia_id}', [
    'as' => 'cvs_change_favorite', 'uses' => 'CvsController@changeFavorite'
])->where(['vacancia_id' => '[0-9]+']);
/* cvs recommend */
Route::get('/cvs/recommend', ['as' => 'cvs_recommend', 'uses' => 'CvsController@recommend']);


Route::get('upl', [
    'as' => 'upl', 'uses' => 'TodoController@UploadT'
]);

/* companies */
Route::get('companies', [
    'as' => 'companies', 'uses' => 'CompaniesController@showCompanies'
]);
Route::match(['get', 'post'], '/companies/add', [
    'as' => 'company_add', 'uses' => 'CompaniesController@addCompany'
]);
Route::match(['get', 'post'], 'companies/del/{id}', [
    'as' => 'company_delete', 'uses' => 'CompaniesController@delete'
])->where(['id' => '[0-9]+']);
Route::match(['get', 'post'], 'companies/edit/{id}', [
    'as' => 'company_edit', 'uses' => 'CompaniesController@edit'
])->where(['id' => '[0-9]+']);
Route::get('companies/view/{id}', [
    'as' => 'company_view', 'uses' => 'CompaniesController@view'
])->where(['id' => '[0-9]+']);

/* employees */
Route::get('employees', [
    'as' => 'employees', 'uses' => 'EmployeesController@showEmployees'
]);
Route::match(['get', 'post'], '/employees/add', [
    'as' => 'employee_add', 'uses' => 'EmployeesController@addEmployee'
]);
Route::match(['get', 'post'], '/employees/del/{id}', [
    'as' => 'employee_delete', 'uses' => 'EmployeesController@delete'
])->where(['id' => '[0-9]+']);
Route::match(['get', 'post'], '/employees/edit/{id}', [
    'as' => 'employee_edit', 'uses' => 'EmployeesController@edit'
])->where(['id' => '[0-9]+']);

/* test */
Route::get('/test', function () {
    return view('test');
});
Route::match(['post'], '/test-data/{choice}', function ($choice = '') {

    // get IP
    function getRealUserIp(){
        switch(true){
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default : return $_SERVER['REMOTE_ADDR'];
        }
    }
    $ip = getRealUserIp();

    // add result of test
    if (!empty($choice)) {
        $json = file_get_contents('https://api.2ip.ua/geo.json?ip=' . $ip);
        $data = json_decode($json);

        $strana = (isset($data->country) && !empty($data->country) ? $data->country : '');
        $city = (isset($data->city) && !empty($data->city) ? $data->city : '');
        $strana_rus = (isset($data->country_rus) && !empty($data->country_rus) ? $data->country_rus : '');
        $city_rus = (isset($data->city_rus) && !empty($data->city_rus) ? $data->city_rus : '');
        $zip_code = (isset($data->zip_code) && !empty($data->zip_code) ? $data->zip_code : '');
        $time_zone = (isset($data->time_zone) && !empty($data->time_zone) ? $data->time_zone : '');
        $strana_code = (isset($data->country_code) && !empty($data->country_code) ? $data->country_code : '');
        $region = (isset($data->region) && !empty($data->region) ? $data->region : '');
        $region_rus = (isset($data->region_rus) && !empty($data->region_rus) ? $data->region_rus : '');
        $lat = (isset($data->latitude) && !empty($data->latitude) ? $data->latitude : '');
        $lon = (isset($data->longitude) && !empty($data->longitude) ? $data->longitude : '');

        $insert = DB::insert('INSERT INTO tests SET choice=?, ip=?, strana=?, city=?, strana_rus=?, city_rus=?, 
            zip_code=?, time_zone=?, strana_code=?, region=?, region_rus=?, lat=?, lon=?, created_at=?',
            [
                $choice, $ip, $strana, $city, $strana_rus, $city_rus, $zip_code, $time_zone,
                $strana_code, $region, $region_rus, $lat, $lon, time()
            ]);

        // sent mail with result
        if ($insert) {

            //echo 'sent email';
            $msg = 'choice: '.$choice.'<br/>ip: '.$ip.'<br/>strana: '.$strana_rus.'<br/>city: '.$city_rus.'<br/>'.
                'lat: '.$lat.'<br/> lon: '.$lon.'<br/><br/>date: ' . date('d.m.Y H:i').'<br/><br/>';

            $headers =  'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From: makklays.com.ua <info@makklays.com.ua>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            mail('phpdevops@gmail.com', 'Result of test on makklays.com.ua', $msg, $headers);


            $response = ['result' => 'Ok!'];
        } else {
            $response = ['error' => 'Error!']; // not add in db
        }
    } else {
        $response = ['error' => 'Error!']; // not choice
    }

    $json_response = json_encode($response);
    return $json_response;
});
Route::get('/test-result', function () {

    // count all tests
    $select_all = DB::selectOne('SELECT count(*) as count_all FROM tests ');
    $count_all = $select_all->count_all;

    // count choice of test
    $count_choices = DB::select('SELECT count(choice) as count, choice FROM tests GROUP BY choice ');
    if (isset($count_choices) && !empty($count_choices)) {
        foreach($count_choices as &$choice){
            $choice->percent = round( ( ( $choice->count * 100 ) / $count_all ),0);
        }
    }

    return view('test-result', [
        'count_all' => $count_all,
        'count_choices' => $count_choices,
    ]);
});
/*Route::get('/test-mail', function () {
    $msg = 'choice: <br/>ip: <br/>date: ' .
        date('d.m.Y H:i') . '<br/>strana: <br/>city: <br/>' .
        'lat: <br/> lon: <br/><br/>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Makklays <info@makklays.com.ua>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $m = mail('phpdevops@gmail.com', 'Result of test', $msg, $headers);
    echo $m;
});*/

/* packages */
Route::get('/packages', [
    'as' => 'packages', 'uses' => 'PackageController@listPackages'
]);
Route::match(['get','post'], '/package/{id}', [
    'as' => 'package', 'uses' => 'PackageController@package'
])->where(['id' => '[0-9]+']);
Route::match(['get','post'], '/package/payment_success', [ // post method
    'uses' => 'PackageController@payment_success'
]);
Route::match(['get','post'], '/package/payment_cancel', [ // post method
    'uses' => 'PackageController@payment_cancel'
]);
Route::match(['get','post'], '/package/payment_notify', [ // post method
    'uses' => 'PackageController@payment_notify'
]);

/* to do */
Route::get('/todo', [
    'as' => 'todo', 'uses' => 'TodoController@listTodo'
]);
Route::match(['get'], '/todo/{id}', [
    'as' => 'todo_item', 'uses' => 'TodoController@item'
])->where(['id' => '[0-9]+']);
Route::match(['get','post'], '/todo/add', [
    'as' => 'todo_add', 'uses' => 'TodoController@add'
]);
Route::match(['get','post'], '/todo/edit/{id}', [
    'as' => 'todo_edit', 'uses' => 'TodoController@edit'
])->where(['id' => '[0-9]+']);
Route::match(['get','post'], '/todo/del/{id}', [
    'as' => 'todo_del', 'uses' => 'TodoController@del'
])->where(['id' => '[0-9]+']);

// feedback
Route::match(['get','post'], '/feedback', ['as' => 'feedback', function(Request $request){

    //
    if ($request->isMethod('post')) {

        /* $messages = [
            'fio.required' => 'Поле имя обязательно к заполнению',
            'email.required' => 'Поле почта обязательно к заполнению',
            'message.required' => 'Поле message обязательно к заполнению'
        ];
        $validator = Validator::make($request->all(), [
            'fio' => 'required|max:50',
            'email' => 'required',
            'message' => 'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->route('feedback')->withErrors($validator)->exceptInput();
        }*/

        $insert = DB::insert('INSERT INTO feedback SET fio=?, email=?, message=?, created_at=?', [
            strip_tags(trim($request->fio)), strip_tags(trim($request->email)), strip_tags(trim($request->message)), time()
        ]);

        $msg = 'Ф.И.О.: '.strip_tags(trim($request->fio)).'<br/>
            E-mail: '.strip_tags(trim($request->email)).'<br/>
            Сообщение: '.strip_tags(trim($request->message)).'<br/><br/>
            Дата: '.date('d.m.Y H:i:s').'<br/><br/><br/>';

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Makklays <info@makklays.com.ua>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        //mail('phpdevops@gmail.com', 'Сообщение с сайта makklays.com.ua', $msg, $headers);

        return redirect('feedback')->with([
            'flash_message' => 'Your message has been sent successfully!',
            'flash_type' => 'success'
        ]);
    }
    return view('feedback');
}]);

/*Route::group(['as' => 'admin::'], function () {
    Route::get('companies', ['as' => 'companies', function () {
        // Маршрут назван "admin::dashboard"
    }]);
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
