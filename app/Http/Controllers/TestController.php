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
        //$title = 'Tест на знание PHP ;-)';
        //$description = 'Небольшой тест на знание языка программирования PHP с ответами на ДА или НЕТ.';

        $title = 'Test PHP';
        $description = 'A small test of knowledge of the PHP programming language with answers to YES or NO.';

        return View('test.intro', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function question1(Request $request)
    {
        /*dd($request->locale);
        echo $request->server('HTTP_REFERER').'=='.config('app.url').'/'.$request->get('locale').'/test-php';
        exit;*/
        $lang = $request->locale;

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.$lang.'/test-php') {
            return redirect('/'.$lang.'/test-php');
        }

        //$question = 'Правда ли что, PHP - это скриптовый язык программирования для создания сайтов и веб-приложений.
        //PHP унаследовал синтаксис языков программирования C, Perl, Java?';

        $title = 'Question 1';
        $question = 'Is it true that PHP is a scripting programming language for creating sites and web applications. <br/>
         PHP inherited the syntax of the programming languages C, Perl, Java?';

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

        return redirect($request->locale . '/test-php/question-2');
    }

    public function question2(Request $request)
    {
        //echo $request->server('HTTP_REFERER').'=='.env('APP_URL').'/test-php/question-1';

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.$request->locale.'/test-php/question-1') {
            return redirect('/' . $request->locale . '/test-php');
        }

        //$question = 'Правда ли что, в отличии от одинарных, данные в двойных кавычках парсятся. <br/>Например, при использовании двойных кавычек результат выведет Hello, а одинарные кавычки выведут переменную как текст, а не ее значение.';

        $title = 'Question 2';
        $question = 'Is it true that, unlike single quotes, the data in double quotes is parsed. <br/>
For example, when using double quotes, the result will print Hello, and single quotes will print the variable as text, not its value?';

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

        return redirect('/' . $request->locale . '/test-php/question-3');
    }

    public function question3(Request $request)
    {
        //echo $request->server('HTTP_REFERER').'=='.config('app.url').'/test-php/question-2';

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.$request->locale.'/test-php/question-2') {
            return redirect('/' . $request->locale . '/test-php');
        }

        //$question = 'Правда ли что, функция - это некий набор переменных, которые всегда возвращают переменную с типом `string`?';

        $title = 'Question 3';
        $question = 'Is it true that a function is a certain set of variables that always return a variable of type `string`?';

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

        return redirect('/' . $request->locale . '/test-php/question-4');
    }

    public function question4(Request $request)
    {
        //echo $request->server('HTTP_REFERER').'=='.env('APP_URL').'/test-php/question-3';

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.$request->locale.'/test-php/question-3') {
            return redirect('/'.$request->locale.'/test-php');
        }

        //$question = 'Правда ли что, переменные заключенные в двойные кавычки парсятся и их содержимое выводится, в то время как в одинарных кавычках просто отобразят название переменной как обычный текст.';

        $title = 'Question 4';
        $question = 'Is it true that, variables enclosed in double quotation marks are parsed and their contents are displayed, <br/> while in single quotation marks they simply display the variable name as plain text?';

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

        return redirect('/'.$request->locale.'/test-php/report');
    }

    public function report(Request $request)
    {
        /*if (session()->has('the_end')) {
            return redirect('/test-php');
        }
        session()->put('the_end', 1);
        */

        // с какой страницы пришли ? тест с начала
        if ($request->server('HTTP_REFERER') != config('app.url').'/'.$request->locale.'/test-php/question-4' &&
            $request->server('HTTP_REFERER') != config('app.url').'/'.$request->locale.'/test-php/report') {
            return redirect('/'.$request->locale.'/test-php');
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
            $title = 'Congratulate!';
            $description = 'You have perfect result. <br/> You gave '.$percent_right.'% right answer ('.$count_right.'/'.$count_question.') from '.$count_question.' questions.';
        } else if (60 <= $percent_right && $percent_right < 80) {
            $title = 'Good result';
            $description = 'Congratulate! You have good result. <br/> You gave '.$percent_right.'% right answer ('.$count_right.'/'.$count_question.') from '.$count_question.' questions.';
        } else {
            $title = 'Result';
            $description = 'We recommend that you visit the site <a href="http://php.net" target="_blank">php.net</a>' . '<br/>';
            $description .= 'You gave '.$percent_right.'% right answer ('.$count_right.'/'.$count_question.') from '.$count_question.' questions.';
        }

        // $res = session()->all();

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
}
