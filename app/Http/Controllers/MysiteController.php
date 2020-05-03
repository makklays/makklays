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
use function MongoDB\BSON\toJSON;

class MysiteController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        // что я делаю - страничка презентация
        return view('mysite.mysite', [
            'seo' => $seo,
        ]);
    }

    public function links()
    {
        // страница с полезными линками ))
        return view('links');
    }

    public function myProfile()
    {
        $user = User::where(['id' => auth()->id()])->first();
        return view('mysite.my-profile', [
            'user' => $user,
        ]);
    }

    public function settings()
    {
        return view('mysite.settings');
    }

    public function report()
    {
        $reports = DB::select('SELECT * FROM tests ORDER BY created_at DESC');

        // кто кликал на изображения - отчет
        return view('mysite.report', [
            'reports' => $reports
        ]);
    }

    public function feedbacks()
    {
        return view('mysite.feedbacks');
    }

    // детальнее - заказ сайта
    public function site()
    {
        return view('mysite.site');
    }

    // детальнее - заказ shop
    public function shop()
    {
        return view('mysite.shop');
    }

    // детальнее - заказ crm
    public function crm()
    {
        return view('mysite.crm');
    }

    // Страница - Bit now, Иди нахуй коментатор!
    public function main()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.main', [
            'seo' => $seo,
        ]);
    }

    // Страница - О нас
    public function about()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - О нас';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Sobre nosotros';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - About us';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Как мы работаем?, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - ¿Como trabajamos?';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = '¿Como trabajamos?, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - How we are working?';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'How we are working?, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Что мы делаем?, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - ¿Que estamos haciendo?';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = '¿Que estamos haciendo?, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - What are we doing?';
            $seo->description = 'Makklays - Landing page development, corporate website development, online shop, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'What are we doing?, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Контакты, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Сontactos';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Сontactos, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Contacts';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Contacts, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.contacts', [
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
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Оставить заявку, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Deja una solicitud';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Deja una solicitud, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Submit your application';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Submit your application, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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

    // Страница - Заполнить бриф ONLINE
    public function onlineBrief()
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - Бриф на разработку сайта';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ, бриф';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Resumen de desarrollo del sitio web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano, resumen';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Website development brief';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development, brief';
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
            $seo->title = 'Makklays - Разработка и ведение сайтов - Лендинг';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Лендинг, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Landing page';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Landing page, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Página de aterrizaje';
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
            $seo->title = 'Makklays - Разработка и ведение сайтов - Интернет-магазин';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Интернет-магазин, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Tienda en línea';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Tienda en línea, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Online shop';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Online shop, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->title = 'Makklays - Разработка и ведение сайтов - Корпоративный сайт';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Корпоративный сайт, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Web corporativa';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Web corporativa, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Corporate website';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Corporate website, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->title = 'Makklays - Разработка и ведение сайтов - Сайт-система';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Сайт-система, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Sistema de sitio web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Sistema de sitio web, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Website system';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Website system, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->title = 'Makklays - Разработка и ведение сайтов - Web-портал';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Web-портал, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Portal web';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Portal web, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Web portal';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Web portal, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->title = 'Makklays - Разработка и ведение сайтов - Веб сервис и API для мобильного приложения';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'Веб сервис и API для мобильного приложния, JSON, XML, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - Servicio web y API para movil application';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'Servicio web y API para movil application, JSON, XML, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - Web service and API for mobile application';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'Web service and API for mobile application, JSON, XML, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - SEO Word count';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - SEO Word count';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
        }

        return view('mysite.count-seo-words', [
            'seo' => $seo,
        ]);
    }

    /* method - post */
    public function countSeoWordsPost(Request $request)
    {
        $lang = app()->getLocale();
        $seo = new \stdClass();
        if ($lang == 'ru') {
            $seo->title = 'Makklays - Разработка и ведение сайтов - SEO Слов число';
            $seo->description = 'Makklays - Разработка лендинг, разработка корпоративный сайт, делаем интернет-магазин, веб-портал, сайт-система, веб-сервис и API для мобильных приложений';
            $seo->keywords = 'SEO Слов число, разработка сайта, разработка, сайт, интернет-магазин, internet-shop, shop, корпоративный сайт, лендинг, landing, веб-портал, дорого, разработка под ключ';
        } else if ($lang == 'es') {
            $seo->title = 'Makklays - Desarrollo y mantenimiento de sitios web - SEO Word count';
            $seo->description = 'Makklays - Desarrollo de página de aterrizaje, sitio web corporativo, tienda en línea, portal web, sistema de sitio web, servicio web y API para aplicaciones móviles';
            $seo->keywords = 'SEO Word count, desarrollo de sitios web, desarrollo, sitio web, tienda en línea, tienda de internet, tienda, sitio web corporativo, página de inicio, aterrizaje, portal web, desarrollo costoso y llave en mano';
        } else {
            $seo->title = 'Makklays - Website development and maintenance - SEO Word count';
            $seo->description = 'Makklays - Landing page development, corporate website development, online store, web portal, website system, web service and API for mobile applications';
            $seo->keywords = 'SEO Word count, website development, development, website, online store, internet-shop, shop, corporate website, landing page, landing, web portal, expensive, turnkey development';
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

            //$words = str_replace('  ', ' ', $words);

            //dd($words);

            // main - 6815 символов
            // разработ(ка) - 14 раз
            // сайт - 16 раз
            // делаем - 6 раз

            // как мы работаем? - 3000 символов
            // сайт(а) - 9 раз
            // разработка - 5 раз

            // что мы делаем? - 2600
            // делаем - 6
            // сайт(ы) - 10
            // код(а) - 6

            $arr_words = explode(' ', $words);
            foreach($arr_words as $word) {
                $word = mb_strtolower($word);
                //if (isset($arr_count_words[$word])) {
                    @$arr_count_words[$word] += 1;
                /*} else {
                    $arr_count_words[$word] = 1;
                }*/
                $arr_count_words['total'] += 1;
            }

            // отпбрасываем слова которые упоминаются только 1 раз
            foreach($arr_count_words as $word => $count) {
                if ($count == 1 ) {
                    unset($arr_count_words[$word]);
                }
            }
        }

        arsort($arr_count_words);
        //dd($arr_count_words);

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
    public function orderDevelopmentPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|max:25',
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
                12 => 'Уведомление коиентов о статусе заказов',
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
                $brief->style[$k] = $arr[$k]; // array
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

            $brief->tzfile_name = $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();
            $brief->tzfile_size = $file->getSize();

            $destinationPath = 'uploads/briefs';
            $file->move($destinationPath, $file->getClientOriginalName());
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

        //dd($brief);

        // отправляем на email - заполненный бриф - заказ разработки
        Mail::to('office@makklays.com.ua')->send(new BriefOnlineMail($brief)); // сделать

        return redirect(route('mysite_online_brief', app()->getLocale()))->with([
            'flash_message' => trans('site.send_success'),
            'flash_type' => 'success'
        ]);
    }
}
