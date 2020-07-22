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

use App\Feedback;
use App\Http\Requests\FeedbackRequest;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function (Request $request) {

    //dd(  app()->getLocale()  );

    /*Route::get('/', function () {*/
        return redirect( app()->getLocale() );
        exit;
    /*});*/

    // переключения языков: ru | en
    $lang = Session::get('lang');
    if (isset($request->lang) && !empty($request->lang)) {
        Session::put('lang', $request->lang);

        $locale = $request->lang;
        App::setLocale($locale);
    } else if (isset($lang) && !empty($lang)) {
        App::setLocale($lang);
    }
    return view('test'); // 'main'
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'
], function () {

    Route::get('main', ['as' => 'main', function () {
        return view('test'); // 'main'
    }]);

    Route::get('home', 'HomeController@index')->name('home');

    Route::get('wait', 'FeedbackController@wait')->name('wait');
    Route::get('wait2', 'FeedbackController@wait2')->name('wait2');
    /*Route::get('api/user/12', function(){
        $arr = [
            'id' => 12,
            'name' => 'Alex Manson',
            "age" => 25,
            "bio" => "Programmador de Madrid, 12 años de experiencia",
            "ciudad" => "Madrid",
            "comiendo" => "manzanas, naranjas y queso",
            "pais" => "España"
        ];
        echo json_encode($arr);
        exit;
        return view('mysite.design');
    });*/

    // тест на знание PHP
    Route::get('test-php', ['as' => 'test-php', 'uses' => 'TestController@intro']);
    Route::post('test-php-start', ['as' => 'test-php-start', 'uses' => 'TestController@start']);

    Route::get('test-php/question-1', ['as' => 'test_php_q1', 'uses' => 'TestController@question1']);
    Route::post('test-php/answer-1',  ['as' => 'test_php_a1', 'uses' => 'TestController@answer1']);
    Route::get('test-php/question-2', ['as' => 'test_php_q2', 'uses' => 'TestController@question2']);
    Route::post('test-php/answer-2',  ['as' => 'test_php_a2', 'uses' => 'TestController@answer2']);
    Route::get('test-php/question-3', ['as' => 'test_php_q3', 'uses' => 'TestController@question3']);
    Route::post('test-php/answer-3',  ['as' => 'test_php_a3', 'uses' => 'TestController@answer3']);
    Route::get('test-php/question-4', ['as' => 'test_php_q4', 'uses' => 'TestController@question4']);
    Route::post('test-php/answer-4',  ['as' => 'test_php_a4', 'uses' => 'TestController@answer4']);

    Route::get('test-php/report',  ['as' => 'test_php_report_get', 'uses' => 'TestController@report']);
    Route::post('test-php/report', ['as' => 'test_php_report_post', 'uses' => 'TestController@sendEmail']);

    /* mysite page */

    //$lang = app()->getLocale();
    /*$lang = App::getLocale();*/
    //dd($lang);

    Route::get('', ['as' => '/', 'uses' => 'MysiteController@main']);

    Route::get('about-us', ['as' => 'mysite_about', 'uses' => 'MysiteController@about']);
    Route::get('we-making', ['as' => 'mysite_howmake', 'uses' => 'MysiteController@howmake']);
    Route::get('development-site-shop', ['as' => 'mysite_whatmake', 'uses' => 'MysiteController@whatmake']);
    Route::get('request', ['as' => 'mysite_request', 'uses' => 'MysiteController@request']);
    Route::get('contacts', ['as' => 'mysite_contacts', 'uses' => 'MysiteController@contacts']);
    Route::get('brief', ['as' => 'mysite_brief', 'uses' => 'MysiteController@brief']);
    Route::get('download-price', ['as' => 'mysite_download_price', 'uses' => 'MysiteController@downloadPrice']);

    Route::get('portfolio', ['as' => 'mysite_portfolio', 'uses' => 'MysiteController@portfolio']);

    Route::get('online-brief', ['as' => 'mysite_online_brief', 'uses' => 'MysiteController@onlineBrief']);
    Route::post('online-brief', ['as' => 'mysite_online_brief_post', 'uses' => 'MysiteController@onlineBriefPost']);

    /*Route::get('design', ['as' => 'mysite_design', function(){
        $seo = new \stdClass();
        $seo->title = 'Design | Makklays';
        $seo->keywords = 'design, Makklays';
        $seo->description = 'Makklays development';
        return view('mysite.design', [
            'seo' => $seo,
        ]);
    }]);*/
    Route::get('landing-page', ['as' => 'mysite_lpage', 'uses' => 'MysiteController@lpage']);
    Route::get('corporate-site', ['as' => 'mysite_corporate', 'uses' => 'MysiteController@corporate']);
    Route::get('api-service', ['as' => 'mysite_webservice', 'uses' => 'MysiteController@webservice']);
    Route::get('web-portal', ['as' => 'mysite_webportal', 'uses' => 'MysiteController@webportal']);
    Route::get('site-system', ['as' => 'mysite_sitesytem', 'uses' => 'MysiteController@sitesytem']);
    Route::get('online-shop', ['as' => 'mysite_store', 'uses' => 'MysiteController@store']);
    Route::get('privacy-policy', ['as' => 'privacy-policy', 'uses' => 'MysiteController@privacy_policy']);

    Route::get('black-list', ['as' => 'mysite_blacklist', 'uses' => 'MysiteController@blacklist']);
    Route::post('call-development-post', ['as' => 'call_development_post', 'uses' => 'MysiteController@callDevelopmentPost']);

    Route::get('seo-words', ['as' => 'seo_words', 'uses' => 'MysiteController@countSeoWords']);
    Route::post('seo-words', ['as' => 'seo_words_post', 'uses' => 'MysiteController@countSeoWordsPost']);

    //Route::get('order', ['as' => 'mysite', 'uses' => 'MysiteController@index']);

    // site
    Route::get('develop-articles', ['as' => 'mysite_articles', 'uses' => 'MysiteController@listArticles']);
    Route::get('develop-article/{slag}', ['as' => 'mysite_article', 'uses' => 'MysiteController@showArticle']);

    // adminka
    //Route::group(['prefix' => 'admin'], function () {

        Auth::routes();

        Route::get('admin/home', ['as' => 'home', 'uses' => 'HomeController@index'])->name('home');

        Route::get('admin/adm-articles', ['as' => 'adm-articles', 'uses' => 'ArticlesController@list']);
        Route::match(['get', 'post'],'admin/adm-article-add', ['as' => 'adm-article-add', 'uses' => 'ArticlesController@add']);
        Route::match(['get', 'post'],'admin/adm-article-edit/{article_id}', ['as' => 'adm-article-edit', 'uses' => 'ArticlesController@edit'])->where(['article_id' => '[0-9]+']);
        Route::match(['get', 'post'],'admin/adm-article-delete/{article_id}', ['as' => 'adm-article-delete', 'uses' => 'ArticlesController@delete'])->where(['article_id' => '[0-9]+']);

        Route::get('admin/adm-orders', ['as' => 'adm-orders', 'uses' => 'OrdersController@index']);
        Route::match(['get', 'post'],'admin/adm-order-add', ['as' => 'adm-order-add', 'uses' => 'OrdersController@add']);
        Route::match(['get', 'post'],'admin/adm-order-edit/{order_id}', ['as' => 'adm-order-edit', 'uses' => 'OrdersController@edit'])->where(['order_id' => '[0-9]+']);
        Route::match(['get', 'post'],'admin/adm-order-delete/{order_id}', ['as' => 'adm-order-delete', 'uses' => 'OrdersController@delete'])->where(['order_id' => '[0-9]+']);
        Route::get('admin/adm-order-view/{order_id}', ['as' => 'adm-order-view', 'uses' => 'OrdersController@view'])->where(['order_id' => '[0-9]+']);

        Route::get('admin/adm-call', ['as' => 'adm-call', 'uses' => 'CallController@index']);
        Route::get('admin/adm-blacklist', ['as' => 'adm-blacklist', 'uses' => 'CallController@blacklist']);

        Route::get('admin/profile', ['as' => 'profile', 'uses' => 'MysiteController@myProfile']);
        Route::post('admin/profile-post', ['as' => 'profile-post', 'uses' => 'MysiteController@myProfilePost']);
        Route::get('admin/settings', ['as' => 'settings', 'uses' => 'MysiteController@settings']);
        Route::get('admin/statistics', ['as' => 'statistics', 'uses' => 'MysiteController@statistics']);
        Route::get('admin/visits', ['as' => 'visits', 'uses' => 'VisitsController@listAll']);
        Route::get('admin/visits_days', ['as' => 'visits_days', 'uses' => 'VisitsController@listAllbyDays']);

        Route::get('admin/report', ['as' => 'report', 'uses' => 'MysiteController@report']);
        Route::get('admin/report-cat-dog', ['as' => 'report-cat-dog', 'uses' => 'MysiteController@reportCatDog']);

        Route::get('admin/documents', ['as' => 'documents', 'uses' => 'MysiteController@documents']);

        /* dashboard */
        Route::get('admin/dashboard', [
            'as' => 'dashboard', 'uses' => 'MysiteController@dashboard'
        ]);
        /* companies */
        Route::get('admin/companies', [
            'as' => 'companies', 'uses' => 'CompaniesController@showCompanies'
        ]);
        Route::match(['get', 'post'], 'admin/companies/add', [
            'as' => 'company_add', 'uses' => 'CompaniesController@addCompany'
        ]);
        Route::match(['get', 'post'], 'admin/companies/del/{id}', [
            'as' => 'company_delete', 'uses' => 'CompaniesController@delete'
        ])->where(['id' => '[0-9]+']);
        Route::match(['get', 'post'], 'admin/companies/edit/{id}', [
            'as' => 'company_edit', 'uses' => 'CompaniesController@edit'
        ])->where(['id' => '[0-9]+']);
        Route::get('admin/companies/view/{id}', [
            'as' => 'company_view', 'uses' => 'CompaniesController@view'
        ])->where(['id' => '[0-9]+']);

        /* employees */
        Route::get('admin/employees', [
            'as' => 'employees', 'uses' => 'EmployeesController@showEmployees'
        ]);
        Route::match(['get', 'post'], 'admin/employees/add', [
            'as' => 'employee_add', 'uses' => 'EmployeesController@addEmployee'
        ]);
        Route::match(['get', 'post'], 'admin/employees/del/{id}', [
            'as' => 'employee_delete', 'uses' => 'EmployeesController@delete'
        ])->where(['id' => '[0-9]+']);
        Route::match(['get', 'post'], 'admin/employees/edit/{id}', [
            'as' => 'employee_edit', 'uses' => 'EmployeesController@edit'
        ])->where(['id' => '[0-9]+']);

        /* about me */
        Route::get('admin/about2', ['as' => 'about', 'uses' => 'TodoController@about2']); // биография

        /* cvs */
        Route::get('admin/cvs', ['as' => 'cvs', 'uses' => 'CvsController@lista']);

        /* jobs - vacancies */
        Route::get('admin/jobs', ['as' => 'jobs', 'uses' => 'JobsController@lista']);

        /* cvs add */
        Route::get('admin/cvs/add', ['as' => 'cvs_add', 'uses' => 'CvsController@add']);
        Route::post('admin/cvs/add', ['as' => 'cvs_add_post', 'uses' => 'CvsController@addPost'])->middleware('mobile.redirect');

        /* cvs favorites */
        Route::get('admin/cvs/favorites', ['as' => 'cvs_favorites', 'uses' => 'CvsController@favorites']);
        Route::post('admin/cvs/change-favorite/{vacancia_id}', [
            'as' => 'cvs_change_favorite', 'uses' => 'CvsController@changeFavorite'
        ])->where(['vacancia_id' => '[0-9]+']);
        /* cvs recommend */
        Route::get('admin/cvs/recommend', ['as' => 'cvs_recommend', 'uses' => 'CvsController@recommend']);

        Route::get('admin/upl', [
            'as' => 'upl', 'uses' => 'TodoController@UploadT'
        ]);

        /* packages */
        Route::get('admin/packages', [
            'as' => 'packages', 'uses' => 'PackageController@listPackages'
        ]);
        Route::match(['get','post'], 'admin/package/{id}', [
            'as' => 'package', 'uses' => 'PackageController@package'
        ])->where(['id' => '[0-9]+']);
        Route::match(['get','post'], 'admin/package/payment_success', [ // post method
            'uses' => 'PackageController@payment_success'
        ]);
        Route::match(['get','post'], 'admin/package/payment_cancel', [ // post method
            'uses' => 'PackageController@payment_cancel'
        ]);
        Route::match(['get','post'], 'admin/package/payment_notify', [ // post method
            'uses' => 'PackageController@payment_notify'
        ]);

        /* to do */
        Route::get('admin/todo', [
            'as' => 'todo', 'uses' => 'TodoController@listTodo'
        ]);
        Route::match(['get'], 'admin/todo/{id}', [
            'as' => 'todo_item', 'uses' => 'TodoController@item'
        ])->where(['id' => '[0-9]+']);
        Route::match(['get','post'], 'admin/todo/add', [
            'as' => 'todo_add', 'uses' => 'TodoController@add'
        ]);
        Route::match(['get','post'], 'admin/todo/edit/{id}', [
            'as' => 'todo_edit', 'uses' => 'TodoController@edit'
        ])->where(['id' => '[0-9]+']);
        Route::match(['get','post'], 'admin/todo/del/{id}', [
            'as' => 'todo_del', 'uses' => 'TodoController@del'
        ])->where(['id' => '[0-9]+']);

        // feedback
        Route::get('admin/feedbacks', ['as' => 'feedbacks', 'uses' => 'FeedbackController@index']);
        Route::get('admin/feedback/show/{id}', ['as' => 'feedback_show', 'uses' => 'FeedbackController@show'])->where(['id' => '[0-9]+']);

    //});

    /* test */
    Route::get('test', function () {
        return view('test');
    });
    Route::match(['post'], 'test-data/{choice}', function ($lang, $choice = '') {

        Session::put('choice_cat_dog', $choice);

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
        /*if (!empty($choice)) {
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
                $headers .= 'From: makklays.com.ua <office@makklays.com.ua>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                //mail('phpdevops@gmail.com', 'Result of test on makklays.com.ua', $msg, $headers);

                $response = ['result' => 'Ok!'];
            } else {
                $response = ['error' => 'Error!']; // not add in db
            }
        } else {
            $response = ['error' => 'Error!']; // not choice
        }*/

        if (!empty($choice)) {
            $response = ['result' => 'Ok!'];
        } else {
            $response = ['error' => 'Error!']; // not choice
        }
        $json_response = json_encode($response);

        return $json_response;

    })->where(['choice' => '[cat|dog]+']);

    Route::get('test-result', ['as' => 'test_result', function () {

        // sessions
        /*$lang = Session::get('lang');
        if (isset($lang) && !empty($lang)) {
            App::setLocale($lang);
        }*/

        $choice_cat_dog = Session::get('choice_cat_dog');
        //echo $choice_cat_dog;
        //exit;

        // count all tests
        $select_all = DB::selectOne('SELECT count(*) as count_all FROM tests ');
        //$select_all = '';
        $count_all = (isset($select_all->count_all) && !empty($select_all->count_all) ? $select_all->count_all : 0);

        // count choice of test
        $count_choices = DB::select('SELECT count(choice) as count, choice FROM tests GROUP BY choice ');
        //$count_choices = '';
        if (isset($count_choices) && !empty($count_choices)) {
            foreach($count_choices as &$choice){
                $choice->percent = round( ( ( $choice->count * 100 ) / $count_all ),0);
            }
        }

        return view('test-result', [
            'count_all' => $count_all,
            'count_choices' => $count_choices,
            'choice_cat_dog' => $choice_cat_dog,
        ]);
    }]);

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

    /*
    Route::get('feedback', ['as' => 'feedback', function(){
        $lang = Session::get('lang');
        if (isset($lang) && !empty($lang)) {
            App::setLocale($lang);
        }
        return view('feedback');
    }]);
    Route::post('feedback', ['as' => 'feedback_post', function(FeedbackRequest $request){

        $lang = Session::get('lang');
        if (isset($lang) && !empty($lang)) {
            App::setLocale($lang);
        }

        //$insert = DB::insert('INSERT INTO feedback SET fio=?, email=?, message=?, created_at=?', [
        //    strip_tags(trim($request->fio)), strip_tags(trim($request->email)), strip_tags(trim($request->message)), time()
        //]);

        $feedback = new Feedback();
        //$feedback->load($request);
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->created_at = time();
        $feedback->save();

        //dd($feedback);

        //$msg = 'Ф.И.О.: '.strip_tags(trim($request->fio)).'<br/>
        //    E-mail: '.strip_tags(trim($request->email)).'<br/>
        //    Сообщение: '.strip_tags(trim($request->message)).'<br/><br/>
        //    Дата: '.date('d.m.Y H:i:s').'<br/><br/><br/>';
        //$headers = 'MIME-Version: 1.0' . "\r\n";
        //$headers .= 'From: Makklays <info@makklays.com.ua>' . "\r\n";
        //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        //mail('office@makklays.com.ua', 'Сообщение с сайта makklays.com.ua', $msg, $headers);

        Mail::to('office@makklays.com.ua')->send(new FeedbackMail($feedback));

        return redirect(app()->getLocale() . '/feedback')->with([
            'flash_message' => trans('site.send_success'),
            'flash_type' => 'success'
        ]);
    }]);*/
});


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'
    ], function () {

    Route::get('/f1', ['as' => 'f1', function () {
        echo 'F1 <a href="'.route('f2', app()->getLocale()).'">F2 '.app()->getLocale().'</a> <br/><br/>';
        echo trans('site.header_mysite') . '<br/><br/>';

        //
        foreach (config('app.available_locales') as $locale) {
            ?>
            <li class="nav-item">
                <a class="nav-link"
                   href="<?=route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale)?>"
                   <?php
                   if (app()->getLocale() == $locale) {
                       echo 'style="font-weight: bold; text-decoration: underline"';
                   }
                   ?> >
                <?=strtoupper($locale)?>
                </a>
            </li>
            <?php
        }
        exit;
    }]);
    Route::get('/f2', ['as' => 'f2', function () {
        echo 'F1 <a href="'.route('f1', app()->getLocale()).'">F1</a> <br/><br/>';
        echo trans('site.header_mysite') . '<br/><br/>';

        //
        foreach (config('app.available_locales') as $locale) {
            ?>
            <li class="nav-item">
                <a class="nav-link"
                   href="<?=route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale)?>"
                    <?php
                    if (app()->getLocale() == $locale) {
                        echo 'style="font-weight: bold; text-decoration: underline"';
                    }
                    ?> >
                    <?=strtoupper($locale)?>
                </a>
            </li>
            <?php
        }
        exit;
    }]);
});
