<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function intro()
    {
        // add visit
        $lang = app()->getLocale();
        DB::table('visits')
            ->insert([
                'url_referer' => isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null,
                'url' => $_SERVER['REQUEST_URI'],
                'lang' => isset($lang) && !empty($lang) ? $lang : '-',
                'is_mobile' => $this->is_mobile(),
                'ip' => $this->getRealUserIp(),
                'created_at' => date('Y-m-d H:i:s')
            ]);

        //$title = 'Tест на знание PHP ;-)';
        //$description = 'Небольшой тест на знание языка программирования PHP с ответами на ДА или НЕТ.';

        //$title = 'Test PHP';
        //$description = 'A small test of knowledge of the PHP programming language with answers to YES or NO.';

        //$title = trans('test_php.title_test_php');
        //$description = trans('test_php.description_test_php');
        //$title_button = trans('test_php.title_button');

        return View('test.intro', [
            //'title' => $title,
            //'description' => $description,
            //'title_button' => $title_button,
        ]);
    }

    public function start(Request $request)
    {
        $lang = app()->getLocale();
        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.$lang.'/test-php') {
            return redirect('/'.$lang.'/test-php');
        }

        // начал проходить тестирование - время
        session()->put('start_time', date('d.m.Y H:i'));

        return redirect(app()->getLocale() . '/test-php/question-1');
    }

    public function question1(Request $request)
    {
        $lang = app()->getLocale();

        //dd($request->server());
        //dd($request->segment(1));
        //app()->setLocale($request->segment(1));
        //exit;

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.$lang.'/test-php'
            && $request->server('HTTP_REFERER') != config('app.url').'/es/test-php/question-1'
            && $request->server('HTTP_REFERER') != config('app.url').'/ru/test-php/question-1'
            && $request->server('HTTP_REFERER') != config('app.url').'/en/test-php/question-1'
            && $request->server('HTTP_REFERER') != config('app.url').'/ch/test-php/question-1' ) {
            return redirect('/'.$lang.'/test-php');
        }

        //$question = 'Правда ли что, PHP - это скриптовый язык программирования для создания сайтов и веб-приложений.
        //PHP унаследовал синтаксис языков программирования C, Perl, Java?';

        //$title = 'Question 1';
        //$question = 'Is it true that PHP is a scripting programming language for creating sites and web applications. <br/>
        // PHP inherited the syntax of the programming languages C, Perl, Java?';

        $title = trans('test_php.title_q1');
        $question = trans('test_php.text_q1');

        session()->put('question1', $question);

        return View('test.question-1', [
            'title' => $title,
            'question' => $question,
        ]);
    }

    public function answer1(Request $request)
    {
        // dd($request->all());
        if (isset($request->yes) && !empty($request->yes)) {
            $answer = 1;
        } else {
            $answer = 0;
        }

        session()->put('answer1', $answer);
        session()->put('right1', 1);

        return redirect(app()->getLocale() . '/test-php/question-2');
    }

    public function question2(Request $request)
    {
        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.app()->getLocale().'/test-php/question-1'
            && $request->server('HTTP_REFERER') != config('app.url').'/es/test-php/question-2'
            && $request->server('HTTP_REFERER') != config('app.url').'/ru/test-php/question-2'
            && $request->server('HTTP_REFERER') != config('app.url').'/en/test-php/question-2'
            && $request->server('HTTP_REFERER') != config('app.url').'/ch/test-php/question-2' ) {
            return redirect('/' . app()->getLocale() . '/test-php');
        }

        //$question = 'Правда ли что, в отличии от одинарных, данные в двойных кавычках парсятся. <br/>Например, при использовании двойных кавычек результат выведет Hello, а одинарные кавычки выведут переменную как текст, а не ее значение.';

        //$title = 'Question 2';
        //$question = 'Is it true that, unlike single quotes, the data in double quotes is parsed. <br/>
//For example, when using double quotes, the result will print Hello, and single quotes will print the variable as text, not its value?';

        $title = trans('test_php.title_q2');
        $question = trans('test_php.text_q2');

        session()->put('question2', $question);

        return View('test.question-2', [
            'title' => $title,
            'question' => $question,
        ]);
    }

    public function answer2(Request $request)
    {
        if (isset($request->yes) && !empty($request->yes)) {
            $answer = 1;
        } else {
            $answer = 0;
        }

        session()->put('answer2', $answer);
        session()->put('right2', 1);

        return redirect('/' . app()->getLocale() . '/test-php/question-3');
    }

    public function question3(Request $request)
    {
        //echo $request->server('HTTP_REFERER').'=='.config('app.url').'/test-php/question-2';

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/' . app()->getLocale() . '/test-php/question-2'
            && $request->server('HTTP_REFERER') != config('app.url').'/es/test-php/question-3'
            && $request->server('HTTP_REFERER') != config('app.url').'/ru/test-php/question-3'
            && $request->server('HTTP_REFERER') != config('app.url').'/en/test-php/question-3'
            && $request->server('HTTP_REFERER') != config('app.url').'/ch/test-php/question-3') {
            return redirect('/' . app()->getLocale() . '/test-php');
        }

        //$question = 'Правда ли что, функция - это некий набор переменных, которые всегда возвращают переменную с типом `string`?';

        //$title = 'Question 3';
        //$question = 'Is it true that a function is a certain set of variables that always return a variable of type `string`?';

        $title = trans('test_php.title_q3');
        $question = trans('test_php.text_q3');

        session()->put('question3', $question);

        return View('test.question-3', [
            'title' => $title,
            'question' => $question,
        ]);
    }

    public function answer3(Request $request)
    {
        if (isset($request->yes) && !empty($request->yes)) {
            $answer = 1;
        } else {
            $answer = 0;
        }

        /*echo '<pre>';
        print_r($request->yes .'-'.$request->no .'-'.$answer );
        echo '</pre>';
        exit;*/

        session()->put('answer3', $answer);
        session()->put('right3', 0);

        return redirect('/' . app()->getLocale() . '/test-php/question-4');
    }

    public function question4(Request $request)
    {
        //echo $request->server('HTTP_REFERER').'=='.env('APP_URL').'/test-php/question-3';

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/' . app()->getLocale() . '/test-php/question-3'
            && $request->server('HTTP_REFERER') != config('app.url').'/es/test-php/question-4'
            && $request->server('HTTP_REFERER') != config('app.url').'/ru/test-php/question-4'
            && $request->server('HTTP_REFERER') != config('app.url').'/en/test-php/question-4'
            && $request->server('HTTP_REFERER') != config('app.url').'/ch/test-php/question-4') {
            return redirect('/'. app()->getLocale() . '/test-php');
        }

        //$question = 'Правда ли что, переменные заключенные в двойные кавычки парсятся и их содержимое выводится, в то время как в одинарных кавычках просто отобразят название переменной как обычный текст.';

        //$title = 'Question 4';
        //$question = 'Is it true that, variables enclosed in double quotation marks are parsed and their contents are displayed, <br/> while in single quotation marks they simply display the variable name as plain text?';

        $title = trans('test_php.title_q4');
        $question = trans('test_php.text_q4');

        session()->put('question4', $question);

        return View('test.question-4', [
            'title' => $title,
            'question' => $question,
        ]);
    }

    public function answer4(Request $request)
    {
        if (isset($request->yes) && !empty($request->yes)) {
            $answer = 1;
        } else {
            $answer = 0;
        }
        session()->put('answer4', $answer);
        session()->put('right4', 1);

        $start_time = session()->get('start_time');
        // завершил проходить тестирование - время
        $end_time = date('d.m.Y H:i');
        session()->put('end_time', $end_time);
        // проходил тестировние в минутах
        $duration_mins =  ( strtotime($start_time) - strtotime($end_time) );
        session()->put('duration_time', date('m', $duration_mins) );

        //dd(session()->all());

        return redirect('/' . app()->getLocale() . '/test-php/report');
    }

    public function report(Request $request)
    {
        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.app()->getLocale().'/test-php/question-4'
            && $request->server('HTTP_REFERER') != config('app.url').'/'.app()->getLocale().'/test-php/report'
            && $request->server('HTTP_REFERER') != config('app.url').'/es/test-php/report'
            && $request->server('HTTP_REFERER') != config('app.url').'/ru/test-php/report'
            && $request->server('HTTP_REFERER') != config('app.url').'/en/test-php/report'
            && $request->server('HTTP_REFERER') != config('app.url').'/ch/test-php/report') {
            return redirect('/'.app()->getLocale().'/test-php');
        }

        $answers = session()->all();

        // число вопросов
        $count_question = 4;

        $count_right = 0;
        for($i=1; $i <= $count_question; $i++){
            if ($answers['answer'.$i] == $answers['right'.$i]) {
                $count_right++;
            }
        }

        // процент правильных ответов
        if ($count_right == 0) {
            $percent_right = 0;
        } else {
            $percent_right = ($count_right * 100 / $count_question);
        }

        // надпись приветствие
        if (80 <= $percent_right && $percent_right <= 100) {
            $title = trans('test_php.result_80_100');
            $description = trans('test_php.description_80_100', [
                'per_right' => $percent_right,
                'count_right' => $count_right,
                'count_q' => $count_question
            ]);
        } else if (60 <= $percent_right && $percent_right < 80) {
            $title = trans('test_php.result_60_80');
            $description = trans('test_php.description_80_100', [
                'per_right' => $percent_right,
                'count_right' => $count_right,
                'count_q' => $count_question
            ]);
        } else {
            $title = trans('test_php.result_0_60');
            $description = trans('test_php.description_0_60', [
                'per_right' => $percent_right,
                'count_right' => $count_right,
                'count_q' => $count_question
            ]);
        }

        // $res = session()->all();

        //dd($answers);

        /*
        $msg = 'Пройден Test PHP';

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Makklays | Test PHP <info@makklays.com.ua>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        mail('phpdevops@gmail.com', 'Results - Test PHP | Makklays.com.ua', $msg, $headers);
        */

        return View('test.report', [
            'title' => $title,
            'description' => $description,
            'answers' => $answers,

            'percent_right' => $percent_right,
            'count_right' => $count_right,
            'count_question' => $count_question,
        ]);
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email_address|max:255',
        ]);

        $answers = session()->all();

        // число вопросов
        $count_question = 4;

        $count_right = 0;
        for($i=1; $i <= $count_question; $i++){
            if ($answers['answer'.$i] == $answers['right'.$i]) {
                $count_right++;
            }
        }

        // процент правильных ответов
        if ($count_right == 0) {
            $percent_right = 0;
        } else {
            $percent_right = ($count_right * 100 / $count_question);
        }

        // надпись приветствие
        if (80 <= $percent_right && $percent_right <= 100) {
            $title = 'Congratulate!';
            $description = 'You have perfect result. <br/> You gave '.$percent_right.'% right answer ('.$count_right.'/'.$count_question.') from '.$count_question.' questions.';
        } else if (60 <= $percent_right && $percent_right < 80) {
            $title = 'Good result';
            $description = 'Congratulate! You have good result. <br/> You gave '.$percent_right.'% right answer ('.$count_right.'/'.$count_question.') from '.$count_question.' questions.';
        } else {
            $title = 'Result';
            $description = 'We recommend that you visit the site <a href="http://php.net" target="_blank" >php.net</a>' . '<br/>';
            $description .= 'You gave '.$percent_right.'% right answer ('.$count_right.'/'.$count_question.') from '.$count_question.' questions.';
        }

        // в бд
        //$insert = DB::insert('INSERT INTO feedback SET fio=?, email=?, message=?, created_at=?', [
        //    strip_tags(trim($request->fio)), strip_tags(trim($request->email)), strip_tags(trim($request->message)), time()
        //]);

        $msg = '';

        //$msg = 'Уважаемый читатель.' . '<br/>';
        //$msg .= 'Вы получили это письмо потому как Вы прошли Test PHP на сайте makklays.com.ua и указали этот e-mail для получения результатов.' . '<br/>';
        //$msg .= 'Если это были не Вы или Вы не указывали на сайте makklays.com.ua этот e-mail - просто удалите это письмо.' . '<br/><br/>';

        $msg = 'Dear Reader' . '<br/>';
        $msg .= 'You received this letter because you passed Test PHP on makklays.com.ua and indicated this e-mail to receive the results.' . '<br/>';
        $msg .= 'If it wasn’t you or you didn’t indicate this e-mail on makklays.com.ua, just delete this letter.' . '<br/><br/>';

        $msg .= '<b>Test PHP</b>';
        $msg .= '<h1>'.$title.'</h1>';
        $msg .= '<div style="margin: 20px 0;">'.$description.'</div>';

        $msg .= '<div style="margin:0 0 20px 0;">List of test:</div>';
        for($i = 1; $i <= $count_question; $i++) {

            $msg .= '<div style="border-bottom: 1px dashed #ced4da; margin: 20px 0;"></div>';

            $msg .= '<div>';
                $msg .= '<b>'.$i.'.</b> - '.$answers['question'.$i];
            $msg .= '</div>';

            (($answers['answer'.$i]) ? $str_answer = 'YES' : $str_answer = 'NO');
            (($answers['right'.$i]) ? $str_right = 'YES' : $str_right = 'NO');

            $msg .= '<div style="margin-top:10px;">';
                $msg .= '<div style="margin-right:30px; float:left; color: grey;">Your answer: ' . ($answers['right'.$i] == $answers['answer'.$i] ? '<span style="color:green;">'.$str_answer.'</span>' : '<span style="color:red;">'.$str_answer.'</span>') . '</div>';
                $msg .= '<div style="clear:both"></div>';
            $msg .= '</div>';
        }

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Makklays | Test PHP <info@makklays.com.ua>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $to_email = $request->email;
        //mail('phpdevops@gmail.com', 'Results - Test PHP | Makklays.com.ua', $msg, $headers);
        //mail( $to_email, 'Results - Test PHP | Makklays.com.ua', $msg, $headers);

        //if (session()->has('the_end')) {
            // session()->flush();
        //}

        return redirect('test-php');
                /*->with([
                    'flash_message' => 'Your message has been sent successfully!',
                    'flash_type' => 'success'
                ]);*/

    }

    function is_mobile() {
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
            return true;
        } else {
            return false;
        }
    }

    function getRealUserIp() {
        switch(true){
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default : return $_SERVER['REMOTE_ADDR'];
        }
    }
}
