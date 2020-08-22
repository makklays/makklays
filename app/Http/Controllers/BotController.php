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

class BotController extends Controller
{
    public function index(Request $request)
    {
        $data = file_get_contents('php://input');
        //$data = $request->all();
        $data = json_decode($data, true);

        /*$insert = DB::insert('INSERT INTO message_bot SET message=?, created_at=?', [
            strip_tags(trim($request->message)), time()
        ]);*/

        ob_start();
        print_r($data);
        $out = ob_get_clean();
        file_put_contents(__DIR__ . '/../../../public/bot/message.txt', $out);

        if (empty($data['message']['chat']['id'])) {
            exit();
        }

        // url and tocken for registration file on site
        // https://api.telegram.org/bot1341219753:AAEZmkRU-J8CEnVVNaz77Kole0R2dqFySJA/setWebhook?url=https://makklays.com.ua/bott
        define('TOKEN', '1341219753:AAEZmkRU-J8CEnVVNaz77Kole0R2dqFySJA');

        // Функция вызова методов API.
        function sendTelegram($method, $response)
        {
            $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/' . $method);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $res = curl_exec($ch);
            curl_close($ch);

            return $res;
        }

        // Прислали фото.
        if (!empty($data['message']['photo'])) {
            $photo = array_pop($data['message']['photo']);
            $res = sendTelegram(
                'getFile',
                array(
                    'file_id' => $photo['file_id']
                )
            );

            $res = json_decode($res, true);
            if ($res['ok']) {
                $src = 'https://api.telegram.org/file/bot' . TOKEN . '/' . $res['result']['file_path'];
                $dest = __DIR__ . '/' . time() . '-' . basename($src);

                if (copy($src, $dest)) {
                    sendTelegram(
                        'sendMessage',
                        array(
                            'chat_id' => $data['message']['chat']['id'],
                            'text' => 'Фото сохранено'
                        )
                    );

                }
            }
            exit();
        }

        // Прислали файл.
        if (!empty($data['message']['document'])) {
            $res = sendTelegram(
                'getFile',
                array(
                    'file_id' => $data['message']['document']['file_id']
                )
            );

            $res = json_decode($res, true);
            if ($res['ok']) {
                $src = 'https://api.telegram.org/file/bot' . TOKEN . '/' . $res['result']['file_path'];
                $dest = __DIR__ . '/' . time() . '-' . $data['message']['document']['file_name'];

                if (copy($src, $dest)) {
                    sendTelegram(
                        'sendMessage',
                        array(
                            'chat_id' => $data['message']['chat']['id'],
                            'text' => 'Файл сохранён'
                        )
                    );
                }
            }
            exit();
        }

        // Ответ на текстовые сообщения.
        if (!empty($data['message']['text'])) {
            $text = $data['message']['text'];

            // обращение к базе данных
            // $select = DB::select();

            if (mb_stripos($text, 'привет') !== false) {
                sendTelegram(
                    'sendMessage',
                    array(
                        'chat_id' => $data['message']['chat']['id'],
                        'text' => 'Хай!'
                    )
                );
                exit();
            } else {
                sendTelegram(
                    'sendMessage',
                    array(
                        'chat_id' => $data['message']['chat']['id'],
                        'text' => 'Меня зовут MakklaysBot. <br/> Уточните запрос, еще раз'
                    )
                );
            }

            if (strpos($text, 'stat') !== false) {
                sendTelegram(
                    'sendMessage',
                    array(
                        'chat_id' => $data['message']['chat']['id'],
                        'text' => 'Получаем статистику! <br/> '. __DIR__ . ' - путь к изображениям'
                    )
                );
                exit();
            }

            if (strpos($text, 'aa') !== false) {
                sendTelegram(
                    'sendMessage',
                    array(
                        'chat_id' => $data['message']['chat']['id'],
                        'text' => 'Саша, не грусти! <br/> Улыбнись :-)))'
                    )
                );
                exit();
            }

            // Отправка фото.
            if (mb_stripos($text, 'фото') !== false) {
                sendTelegram(
                    'sendPhoto',
                    array(
                        'chat_id' => $data['message']['chat']['id'],
                        'photo' => curl_file_create(__DIR__ . '/../../../public/bot/photo.png')
                    )
                );
                exit();
            }

            // Отправка файла.
            if (mb_stripos($text, 'файл') !== false) {
                sendTelegram(
                    'sendDocument',
                    array(
                        'chat_id' => $data['message']['chat']['id'],
                        'document' => curl_file_create(__DIR__ . '/../../../public/bot/example.xls')
                    )
                );
                exit();
            }

        }
    }
}
