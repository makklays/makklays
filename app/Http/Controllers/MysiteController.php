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
    public function index()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, e-commerce website, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, e-commerce website, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, e-commerce website, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, e-commerce website, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, e-commerce website, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, e-commerce website, landing, web portal, expensive, turnkey development';
        }

        // что я делаю - страничка презентация
        return view('mysite.mysite', [
            'seo' => $seo,
        ]);
    }

    public function myProfile()
    {
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
        return view('adminka.profile.settings');
    }

    public function report()
    {
        $reports = DB::select('SELECT * FROM tests ORDER BY created_at DESC');

        // кто кликал на изображения - отчет
        return view('adminka.profile.report', [
            'reports' => $reports
        ]);
    }

    public function feedbacks()
    {
        return view('mysite.feedbacks');
    }

    // Страница - Bit now, Иди нахуй коментатор!
    public function main()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, e-commerce website, сайт-система, веб-сервис и API для мобильных приложений';
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

        $articles = DB::select('SELECT * FROM articles WHERE is_visible=1 AND lang=? ORDER BY created_at DESC LIMIT 3 ', [app()->getLocale()]);

        $ip = $this->getRealUserIp();

        // add statisctics of test
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

    // страница - статистика
    // с каких стран заходят на главную страницу сайта
    public function statistics()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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

    // Страница - О нас
    public function about()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - О нас';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, e-commerce website, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, e-commerce website, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Sobre nosotros';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, e-commerce website, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, e-commerce website, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
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
    public function howmake()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function whatmake()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function contacts()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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

    public function portfolio()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function request()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
            return redirect('/price/Makklays ПРАЙС разработка сайта.doc');
        } if (app()->getLocale() == 'es') {
            return redirect('/price/Makklays PRECIO Desarrollo de sitio web.doc');
        } else {
            return redirect('/price/Makklays PRICE development site.doc');
        }
    }

    // Страница - Заполнить бриф ONLINE
    public function onlineBrief()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function lpage()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function store()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function corporate()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function sitesytem()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function webportal()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function webservice()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function countSeoWords()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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

        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function privacy_policy()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function listArticles()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
        $articles = DB::select('SELECT * FROM articles WHERE is_visible=1 AND lang=? LIMIT 12 ', [app()->getLocale()]);

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

        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Статья - '.$article->title;
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Artículo - '.$article->title;
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Article - '.$article->title;
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.article', [
            'article' => $article,
            'seo' => $seo
        ]);
    }

    // страница - список документов для скачивания
    public function documents()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
    public function blacklist()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
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
}
