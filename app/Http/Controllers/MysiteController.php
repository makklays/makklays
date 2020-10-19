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

class MysiteController extends Controller
{
    public function __construct(Request $request)
    {
        // add visits - info about user
        $this->addVisit($request);
    }

    public function index(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка сайта и ведение сайта';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, e-commerce website, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo sitio web y mantenimiento de sitio web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, e-commerce website, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, e-commerce website, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and Website maintenance';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, e-commerce website, landing, web portal, expensive, turnkey development';
        }

        // что я делаю - страничка презентация
        return view('mysite.mysite', [
            'seo' => $seo,
        ]);
    }

    // Страница - Основная
    public function main(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка сайтов и запуск в интернете';
            $seo->description = 'Разрабатываем лендинг, корпоративный сайт, интернет-магазин, веб-портал, e-commerce website, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, e-commerce website, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, e-commerce website, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, e-commerce website, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, e-commerce website, landing, web portal, expensive, turnkey development';
        }

        // last 3 articles
        $articles = DB::select('SELECT * FROM articles WHERE is_visible=1 AND lang=? ORDER BY created_at DESC LIMIT 3 ', [app()->getLocale()]);

        //$ip = $this->getRealUserIp();
        // add statisctics of test
        /*$json = file_get_contents('https://api.2ip.ua/geo.json?ip=' . $ip);
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

        $insert = DB::insert('INSERT INTO statistics SET ip=?, lang=?, strana=?, city=?, strana_rus=?, city_rus=?,
            zip_code=?, time_zone=?, strana_code=?, region=?, region_rus=?, lat=?, lon=?, created_at=?',
            [
                $ip, app()->getLocale(), $strana, $city, $strana_rus, $city_rus, $zip_code, $time_zone,
                $strana_code, $region, $region_rus, $lat, $lon, date('Y-m-d H:i:s')
            ]);

        //echo 'sent email';
        /*$msg = 'ip: '.$ip.'<br/>strana: '.$strana_rus.'<br/>city: '.$city_rus.'<br/>'.
               'lat: '.$lat.'<br/> lon: '.$lon.'<br/><br/>date: ' . date('d.m.Y H:i').'<br/><br/>';
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: makklays.com.ua <office@makklays.com.ua>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";*/
        //mail('phpdevops@gmail.com', 'Result of test on makklays.com.ua', $msg, $headers);

        return view('mysite.main', [
            'seo' => $seo,
            'articles' => $articles,
        ]);
    }

    public function myProfile()
    {
        // Only loggined
        if (!Auth::check()) return redirect(app()->getLocale() . '/login');

        $user = User::where(['id' => auth()->id()])->first();

        // обновляем дату последнего входа
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        return view('adminka.profile.index', [
            'user' => $user,
        ]);
    }

    public function myProfilePost(Request $request)
    {
        // Only loggined
        if (!Auth::check()) return redirect(app()->getLocale() . '/login');

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            //Obtenemos los mensajes de error de la validation
            $messages = $validator->messages();
            return redirect(route('profile', [app()->getLocale()]))
                ->with([
                    'flash_message' => trans('site.save_errors'),
                    'flash_type' => 'danger'
                ])
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::where(['id' => auth()->id()])->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect(route('profile', [app()->getLocale()]))
            ->with([
                'flash_message' => trans('site.save_success'),
                'flash_type' => 'success'
            ])
            ->withErrors($validator)
            ->withInput();
    }

    public function settings()
    {
        // Only loggined
        if (!Auth::check()) return redirect(app()->getLocale() . '/login');

        return view('adminka.profile.settings');
    }

    public function report()
    {
        //$reports = DB::select('SELECT * FROM orders ORDER BY created_at DESC');
        $reports = DB::table('orders')
            //->where('visits.ip', '!=', '178.54.173.213')
            ->orderBy('from_date', 'DESC')
            ->orderBy('to_date', 'DESC')
            ->paginate(20);
        //dd($reports);

        // кто кликал на изображения - отчет
        return view('adminka.profile.report', [
            'reports' => $reports
        ]);
    }

    public function feedbacks()
    {
        return view('mysite.feedbacks');
    }

    // страница - статистика
    // с каких стран заходят на главную страницу сайта
    public function statistics(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Статистика';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, e-commerce website, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Staistics';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, e-commerce website, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, e-commerce website, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Statistics';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, e-commerce website, landing, web portal, expensive, turnkey development';
        }

        $stats = DB::select('SELECT * FROM statistics ORDER BY created_at DESC');

        return view('adminka.profile.statistics', [
            'seo' => $seo,
            'stats' => $stats,
        ]);
    }

    // adminka -
    public function reportCatDog()
    {
        $reports = DB::select('SELECT * FROM tests ORDER BY created_at DESC');

        return view('adminka.profile.report-cat-dog', [
            'reports' => $reports,
        ]);
    }

    /**
     * Делает новый url с указанием языка сайта
     * @param $lang
     * @return string
     */
    function new_url()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI'],5);

        $new_url = (!empty($parts[2]) ? $parts[2].'/' : '').
        (!empty($parts[3]) ? $parts[3].'/' : '').(!empty($parts[4]) ? $parts[4].'/' : '').
        (!empty($parts[5]) ? $parts[5].'/' : '').(!empty($parts[6]) ? $parts[6].'/' : '').
        (!empty($parts[7]) ? $parts[7].'/' : '').(!empty($parts[8]) ? $parts[8].'/' : '');

        return $new_url;
    }

    // Страница - О нас
    public function about(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - О нас';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, e-commerce website, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Sobre nosotros';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, e-commerce website, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, e-commerce website, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else if ($lang == 'ch') {
            $seo->title = 'Makklays - Website development and maintenance - About us';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, e-commerce website, landing, web portal, expensive, turnkey development';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - About us';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, e-commerce website, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.about', [
            'seo' => $seo,
        ]);
    }

    // Страница - Как мы работаем?
    public function howmake(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Как мы работаем?';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Как мы работаем?, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - ¿Como trabajamos?';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, e-commerce website, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = '¿Como trabajamos?, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, e-commerce website, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - How we are working?';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'How we are working?, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.howmake', [
            'seo' => $seo,
        ]);
    }

    // Страница - Что мы делаем?
    public function whatmake(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Что мы делаем?';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Что мы делаем?, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - ¿Que estamos haciendo?';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, e-commerce website, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = '¿Que estamos haciendo?, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, e-commerce website, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - What are we doing?';
            $seo->description = 'Makklays - Landing page development, corporate website development, online shop, web portal, e-commerce website, website system, web service and API for mobile applications';
            $seo->keywords = 'What are we doing?, website development, development, website, online store, internet-shop, shop, e-commerce website, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.whatmake', [
            'seo' => $seo,
        ]);
    }

    // Страница - Контакты
    public function contacts(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Контакты';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, e-commerce website, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Контакты, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Сontactos';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, e-commerce website, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Сontactos, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, e-commerce website, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Contacts';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Contacts, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.contacts', [
            'seo' => $seo,
        ]);
    }

    public function portfolio(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Портфолио';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Оставить заявку, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Portafolio';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Deja una solicitud, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, e-commerce website, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Portfolio';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Submit your application, website development, development, website, online store, internet-shop, shop, e-commerce website, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.portfolio', [
            'seo' => $seo,
        ]);
    }

    // Страница - Оставить заявку
    public function request(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Оставить заявку';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Оставить заявку, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Deja una solicitud';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Deja una solicitud, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, e-commerce website, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Submit your application';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Submit your application, website development, development, website, online store, internet-shop, shop, e-commerce website, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.request', [
            'seo' => $seo,
        ]);
    }

    // Страница - Скачать бриф
    public function brief()
    {
        if (app()->getLocale() == 'ru') {
            return redirect('/briefs/Brief_na_razrabotku_sayta.docx');
        } else if (app()->getLocale() == 'es') {
            return redirect('/briefs/Brief_resumen_de_desarrollo.docx');
        } else if (app()->getLocale() == 'en') {
            return redirect('/briefs/Brief_for_development_site.docx');
        } else { // ch
            return redirect('/briefs/Brief_for_development_site.docx');
        }
    }

    // Страница - Скачать ПРАЙС на разработку
    public function downloadPrice()
    {
        if (app()->getLocale() == 'ru') {
            return redirect('/price/Makklays_PRICE_development_site_ru.doc');
        } if (app()->getLocale() == 'es') {
            return redirect('/price/Makklays_PRECIO_Desarrollo_de_sitio_web.doc');
        } else {
            return redirect('/price/Makklays_PRICE_development_site.doc');
        }
    }

    // Страница - Заполнить бриф ONLINE
    public function onlineBrief(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Бриф на разработку сайта';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, e-commerce website, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, e-commerce website, landing, веб-портал, дорого, разработка под ключ, бриф';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Resumen de desarrollo del sitio web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, e-commerce website, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano, resumen';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Website development brief';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, e-commerce website, landing, web portal, expensive, turnkey development, brief';
        }

        return view('mysite.online-brief', [
            'seo' => $seo,
        ]);
    }

    // Страница - Лендинг
    public function lpage(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Разработка - Лендинг';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Лендинг, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, e-commerce website, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Desarrollo - Landing page';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Landing page, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, e-commerce website, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Development - Página de aterrizaje';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Página de aterrizaje, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.l-page', [
            'seo' => $seo,
        ]);
    }

    // Страница - Интернет-магазин
    public function store(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Разработка - Интернет-магазин';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Интернет-магазин, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Desarrollo - Tienda en línea';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, e-commerce website, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Tienda en línea, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, e-commerce website, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Development - Online store - e-commerce website';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Online shop, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.online-store', [
            'seo' => $seo,
        ]);
    }

    // Страница - корпоративный сайт
    public function corporate(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Разработка - Корпоративный сайт';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Корпоративный сайт, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Desarrollo - Web corporativa';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Web corporativa, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, e-commerce website, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Development - Corporate website';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Corporate website, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.corporate-site', [
            'seo' => $seo,
        ]);
    }

    // Страница - сайт система
    public function sitesytem(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Разработка - Сайт-система';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Сайт-система, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Desarrollo - Sistema de sitio web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Sistema de sitio web, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Development - Website system';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Website system, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.site-system', [
            'seo' => $seo,
        ]);
    }

    // Страница - веб-портал
    public function webportal(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Разработка - Web-портал';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Web-портал, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, e-commerce website, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Desarrollo - Portal web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Portal web, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Development - Web portal';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Web portal, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.web-portal', [
            'seo' => $seo,
        ]);
    }

    // Страница - веб сервисы и API для мобильных приложений
    public function webservice(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Разработка - Веб сервис и API для мобильного приложения';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Веб сервис и API для мобильного приложния, JSON, XML, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, e-commerce website, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Desarrollo - Servicio web y API para aplicación móvil';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Servicio web y API para movil application, JSON, XML, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Development - Web service and API for mobile application';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'Web service and API for mobile application, JSON, XML, website development, development, website, online store, e-commerce website, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.webservice', [
            'seo' => $seo,
        ]);
    }

    /* method - get */
    public function countSeoWords(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - SEO Слов число';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - SEO Word count';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - SEO Word count';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.count-seo-words', [
            'seo' => $seo,
        ]);
    }

    /* method - post */
    public function countSeoWordsPost(Request $request)
    {
        // проверяем есть ли в backlist-e
        $black = DB::selectOne('SELECT * FROM blacklist WHERE ip=?', [$this->getRealUserIp()]);
        if (isset($black) && !empty($black)) {
            return redirect(route('mysite_blacklist', [app()->getLocale()]));
            exit;
        }

        // провяем добавлять ли в blacklist
        $calls = DB::selectOne('SELECT count(*) count_call FROM `call` WHERE want_development=? AND ip_address=? AND ?<=created_at AND created_at<=?',
            ['seo-word', $this->getRealUserIp(), ( time() - 60 ), time()]);
        // за минуту отправили больше 25 раз форму - в blacklist
        if (isset($calls->count_call) && !empty($calls->count_call) && $calls->count_call >= 25) {
            DB::insert('INSERT INTO blacklist SET ip=?', [$this->getRealUserIp()]);
            return redirect(route('mysite_blacklist', [app()->getLocale()]));
            exit;
        }

        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - SEO Слов число';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - SEO Word count';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - SEO Word count';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, e-commerce website, landing page, landing, web portal, expensive, turnkey development';
        }

        $arr_words = [];
        $length_characters = 0;
        $arr_count_words = ['total' => 0];
        if ($request->isMethod('post')) {
            $full_words = mb_strtolower($request->get('fulltext'));
            $length_characters = strlen($full_words); // число сисмолов в тексте

            $words = str_replace(['.', ',', ';', ':', '!', '?', '(', ')', '=', '"', "'", '[', ']'], '', $full_words);
            $words = str_replace(['-', '—'], ' ', $words);

            $arr_short_words = [' a ', ' к ', ' на ', ' или ', ' это ', ' для ', ' с ', ' от ', ' и ', ' в ', ' из ', ' как '];
            $words = str_replace($arr_short_words, ' ', $words);

            $arr_words = explode(' ', $words);
            foreach($arr_words as $word) {
                $word = mb_strtolower($word);
                @$arr_count_words[$word] += 1;
                $arr_count_words['total'] += 1;
            }

            // отбрасываем слова которые упоминаются только 1 раз
            foreach($arr_count_words as $word => $count) {
                if ($count == 1 ) {
                    unset($arr_count_words[$word]);
                }
            }
        }

        arsort($arr_count_words);

        // добавляем данные в историю звонков (для возможности добавить в blacklist по числу отправок)
        // добавляем данные в историю звонков - так как нет таблицы истории отправок форм
        DB::insert('INSERT INTO `call` SET fio=?, phone=?, want_development=?, ip_address=?, lang=?, created_at=?',
            [
                'anonimous',
                '+380111111111',
                'seo-word',
                $this->getRealUserIp(),
                app()->getLocale(),
                time()
            ]);

        return view('mysite.count-seo-words', [
            'full_words' => trim($full_words),
            'arr_words' => $arr_count_words,
            'words' => $words,
            'seo' => $seo,
            'length_characters' => $length_characters,
        ]);
    }

    /**
     * Получаем данные со страницы - Заказать разработку
     */
    public function callDevelopmentPost(Request $request)
    {
        // проверяем есть ли в backlist-e
        $black = DB::selectOne('SELECT * FROM blacklist WHERE ip=?', [$this->getRealUserIp()]);
        if (isset($black) && !empty($black)) {
            return response()->json(['error' => 'blacklist', 'lang' => app()->getLocale()]);
            exit;
        }

        // провяем добавлять ли в blacklist
        $calls = DB::selectOne('SELECT count(*) count_call FROM `call` WHERE ip_address=?', [$this->getRealUserIp()]);
        if (isset($calls->count_call) && !empty($calls->count_call) && $calls->count_call >= 8) {
            DB::insert('INSERT INTO blacklist SET ip=?', [$this->getRealUserIp()]);
            return response()->json(['error' => 'blacklist', 'lang' => app()->getLocale()]);
            exit;
        }

        // валидация
        $validator = Validator::make($request->all(), [
            'phone' => 'required|max:25',
            'soglasen' => 'required',
        ]);

        if ($validator->fails()) {
            //Obtenemos los mensajes de error de la validation
            $messages = $validator->messages();
            return response()->json(['errors' => $messages]);
        }

        // записываем в базу данных - заказ разработки
        $call = new Call();
        $call->fio = $request->fio;
        $call->phone = $request->phone;
        $call->want_development = $request->want_development;
        $call->ip_address = $this->getRealUserIp();
        $call->messenger = $request->messenger;
        $call->lang = app()->getLocale();
        $call->created_at = time();
        $call->save();

        // отправляем на email - заказ разработки
        Mail::to('office@makklays.com.ua')->send(new CallMail($call));

        return response()->json(['success' => 'success']);
    }

    function getRealUserIp(){
        switch(true){
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default : return $_SERVER['REMOTE_ADDR'];
        }
    }

    public function onlineBriefPost(Request $request)
    {
        // проверяем есть ли в backlist-e
        $black = DB::selectOne('SELECT * FROM blacklist WHERE ip=?', [$this->getRealUserIp()]);
        if (isset($black) && !empty($black)) {
            return redirect(route('mysite_blacklist', [app()->getLocale()]));
            exit;
        }

        // провяем добавлять ли в blacklist
        $calls = DB::selectOne('SELECT count(*) count_call FROM `call` WHERE ip_address=?', [$this->getRealUserIp()]);
        if (isset($calls->count_call) && !empty($calls->count_call) && $calls->count_call >= 8) {
            DB::insert('INSERT INTO blacklist SET ip=?', [$this->getRealUserIp()]);
            return redirect(route('mysite_blacklist', [app()->getLocale()]));
            exit;
        }

        $validator = Validator::make($request->all(), [
            'phone' => 'required|max:25',
        ]);

        if ($validator->fails()) {
            //Obtenemos los mensajes de error de la validation
            $messages = $validator->messages();
            return redirect(app()->getLocale() . '/online-brief')
                ->withErrors($validator)
                ->withInput();
        }

        //dd($request->all());
        $brief = new \stdClass(); // без объекта Brief и таблицы в бд

        $brief->name = $request->name;
        $brief->email = $request->email;
        $brief->phone = $request->phone;
        $brief->site = $request->site;
        $brief->company = $request->company;
        $brief->business = $request->business;
        $brief->concurents = $request->concurents;
        $brief->geografy = $request->geografy;
        $brief->sroki = $request->sroki;
        $brief->budget = $request->budget;
        $brief->lico = $request->lico;
        $brief->sitetype = $request->sitetype;

        // Цели сайта
        if (isset($request->goal) && !empty($request->goal)) {
            $arr = [
                1 => 'Привлечение клиентов',
                2 => 'Повышение узнаваемости компании, улучшение имиджа',
                3 => 'Продажа товаров и услуг, через интернет',
                4 => 'Информирование о проведении акций',
                5 => 'Информирование о товарах и услугах',
                6 => 'Информирование о компании',
                7 => 'Размещение новостей компании',
            ];
            foreach($request->goal as $k => $v) {
                $brief->goal[$k] = $arr[$k]; // array
            }
        }

        // Сервисы для связи с посетителями сайта
        if (isset($request->connect) && !empty($request->connect)) {
            $arr = [
                1 => 'Форма обратной связи',
                2 => 'Форма Обратный звонок',
                3 => 'Вопрос-ответ',
                4 => 'Голосования',
                5 => 'Отзывы',
                6 => 'Комментарии',
                7 => 'Онлайн-консультант',
                8 => 'Системы онлайн-бронирования',
                9 => 'Подписки и email-рассылки',
                10 => 'Регистрация пользователей',
                11 => 'Личный кабинет',
                12 => 'Оповещение по SMS',
            ];
            foreach($request->connect as $k => $v) {
                $brief->connect[$k] = $arr[$k]; // array
            }
        }

        // Сервисы по продаже через интернет
        if (isset($request->pdodaga) && !empty($request->pdodaga)) {
            $arr = [
                1 => 'Рубрикатор',
                2 => 'Поиск по каталогу',
                3 => 'Фильтрация товаров',
                4 => 'Расширенное описание категорий или товаров',
                5 => 'Добавление товаров в избранное',
                6 => 'Запрос цены по отдельным позициям',
                7 => 'Сравнение товаров',
                8 => 'Корзина',
                9 => 'Расчет скидок',
                10 => 'Расчет стоимости доставки',
                11 => 'История заказов пользователя',
                12 => 'Уведомление клиентов о статусе заказов',
                13 => 'Оплата онлайн',
                14 => 'Автоматическое формирование счета для оплаты',
            ];
            foreach($request->pdodaga as $k => $v) {
                $brief->pdodaga[$k] = $arr[$k]; // array
            }
        }

        // Интеграция со сторонними сервисами и программами
        if (isset($request->itegr) && !empty($request->itegr)) {
            $arr = [
                1 => 'Импорт прайса из Excel',
                2 => 'Интеграция с 1С',
                3 => 'Интеграция с корпоративной базой данных',
                4 => 'Яндекс.Маркет',
                5 => 'Фарпост',
            ];
            foreach($request->itegr as $k => $v) {
                $brief->itegr[$k] = $arr[$k]; // array
            }
        }

        $brief->language = $request->language;
        $brief->manage_site = $request->manage_site;
        $brief->adaptive = $request->adaptive;
        $brief->other_goal = $request->other_goal;
        $brief->razdels = $request->razdels;
        $brief->navigation = $request->navigation;
        $brief->blocks = $request->blocks;
        $brief->design_like = $request->design_like;
        $brief->design_nolike = $request->design_nolike;

        // Какие элементы фирменного стиля существуют и могут быть использованы при разработке дизайна
        if (isset($request->style) && !empty($request->style)) {
            $arr = [
                1 => 'Руководство по фирменному стилю',
                2 => 'Логотип',
                3 => 'Фирменные цвета',
                4 => 'Фирменные шрифты',
                5 => 'Полиграфия',
                6 => 'Фотографии',
                7 => 'Каталоги',
                8 => 'Буклеты',
                9 => 'Другое',
            ];
            foreach($request->style as $k => $v) {
                $brief->style[$v] = $arr[$v]; // array
            }
        }

        $brief->design = $request->design;
        $brief->fotos  = $request->fotos;
        $brief->design_other = $request->design_other;
        // Контент для сайта: тексты, переводы, фотографии
        if (isset($request->zacontent) && !empty($request->zacontent)) {
            $arr = [
                1 => 'Уже готов',
                2 => 'Необходимы услуги копирайтера, рерайтера',
                3 => 'Необходим фотограф',
                4 => 'Необходим переводчик',
            ];
            foreach($request->zacontent as $k => $v) {
                $brief->zacontent[$k] = $arr[$k]; // array
            }
        }

        // Дополнительные услуги и сервисы
        if (isset($request->dop) && !empty($request->dop)) {
            $arr = [
                1 => 'Наполнение контентом',
                2 => 'Техническая поддержка сайта',
                3 => 'Ведение сайта (регулярное обновление контента)',
                4 => 'Контекстная реклама',
                5 => 'SEO-продвижение',
                6 => 'Разработка фирменного стиля',
                7 => 'Разработка логотипа',
            ];
            foreach($request->dop as $k => $v) {
                $brief->dop[$k] = $arr[$k]; // array
            }
        }

        // Дополнительные файлы
        $file = $request->file('tzfile'); // file
        if (isset($file) && !empty($file)) {
            $brief->tzfile = $file;

            $brief->tzfile_name = date('d_m_Y__H_m_s') . '.' . $file->getClientOriginalExtension();
            $brief->tzfile_size = $file->getSize();

            $destinationPath = 'uploads/briefs';
            $file->move($destinationPath, $brief->tzfile_name);

        } else {
            $brief->tzfile = '';
            $brief->tzfile_name = '';
            $brief->tzfile_size = 0;
        }

        //Display File Name
        /*echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';
        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();
        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName()); */

        // добавляем данные в историю звонков (для возможности добавить в blacklist по числу отправок)
        DB::insert('INSERT INTO `call` SET fio=?, phone=?, want_development=?, ip_address=?, lang=?, created_at=?',
            [
                $request->name,
                $request->phone,
                'online-brief ' . $request->site,
                $this->getRealUserIp(),
                app()->getLocale(),
                time()
            ]);

        // отправляем на email - заполненный бриф - заказ разработки
        Mail::to('office@makklays.com.ua')->send(new BriefOnlineMail($brief)); // сделать

        return redirect(route('mysite_online_brief', app()->getLocale()))->with([
            'flash_message' => trans('site.send_success'),
            'flash_type' => 'success'
        ]);
    }

    // страница - политика конфиденциальности
    public function privacy_policy(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Политика конфиденциальности';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Política de privacidad';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Privacy policy';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.privacy_policy', [
            'seo' => $seo,
        ]);
    }

    // страница - список статей
    public function listArticles(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Статья';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Artículo';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Article';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        // get article
        $articles = DB::table('articles')
            ->where('is_visible', 1)
            ->where('lang', app()->getLocale())
            ->orderByDesc('updated_at')
            ->paginate(12);

        //$articles = DB::select('SELECT * FROM articles WHERE is_visible=1 AND lang=? LIMIT 12 ', [app()->getLocale()]);

        return view('mysite.articles', [
            'articles' => $articles,
            'seo' => $seo
        ]);
    }

    // страница - статья
    public function showArticle(Request $request, $lang, $slag)
    {
        // добавляем число просмотров
        $update = DB::update('UPDATE articles SET views=views+1 WHERE slag=?', [$slag]);

        // get article
        $article = DB::selectOne('SELECT * FROM articles WHERE is_visible=1 AND lang=? AND slag=?', [app()->getLocale(), $slag]);

        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 0;
        if ($lang == 'ru') {
            $seo->title = 'Разработка сайта - Статья - '.$article->title;
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo de sitios web - Artículo - '.$article->title;
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development - Article - '.$article->title;
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        if (isset($article->photo) && !empty($article->photo)) {
            $seo->img = config('app.url').'/articles/imgs/'.$article->photo;
        }

        return view('mysite.article', [
            'article' => $article,
            'seo' => $seo
        ]);
    }

    // страница - список документов для скачивания
    public function documents(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 1;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Документы';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Documentos';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Documents';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        // страница с документами для скачивания))
        return view('mysite.documents', [
            'seo' => $seo
        ]);
    }

    // страница - blacklist
    public function blacklist(Request $request)
    {
        $new_url = $this->new_url();

        $lang = app()->getLocale();
        $seo = new \stdClass();
        $seo->server_name = $request->server('SERVER_NAME');
        $seo->request_scheme = $request->server('REQUEST_SCHEME');
        $seo->short_url = $new_url;
        $seo->show_urls = 0;
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Blacklist';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Blacklist';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Blacklist';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        // страница с документами для скачивания))
        return view('mysite.blacklist', [
            'seo' => $seo
        ]);
    }

    /**
     * is mobile device
     *
     * @return bool
     */
    function is_mobile()
    {
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function 'addVisit()' like Log - add info about user
     * (referrer, url page, lang, ip, is_mobile)
     */
    function addVisit($request)
    {
        // controller - hasn't correct
        $lang = $request->segment(1);

        // add visit
        DB::table('visits')
            ->insert([
                'url_referer' => isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null,
                'url' => $_SERVER['REQUEST_URI'],
                'lang' => isset($lang) && !empty($lang) ? $lang : '-',
                'is_mobile' => $this->is_mobile(),
                'ip' => $this->getRealUserIp(),
                'created_at' => date('Y-m-d H:i:s')
            ]);
    }
}
