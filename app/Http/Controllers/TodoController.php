<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class TodoController extends Controller
{
    public function listTodo()
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // get list of packages
        $todos = DB::select('SELECT * FROM todo WHERE is_visible=1 AND is_delete=0 ');

        return view('todo.list', [
            'todos' => $todos,
        ]);
    }

    public function item($id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // get detail of todos
        $todo = DB::selectOne('SELECT * FROM todo WHERE is_visible=1 AND is_delete=0 AND id=? ', [$id]);

        return view('todo.item', [
            'todo' => $todo,
        ]);
    }

    public function add(Request $request)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        if ($request->isMethod('post')) {
            $title = $request->title;
            $description = $request->description;

            $todo = DB::insert('INSERT INTO todo SET title=?, description=?, created_at=?, modified_at=? ', [
                $title, $description, time(), time()
            ]);

            if ($todo) {
                return redirect('todo');
            }
        }

        return view('todo.add');
    }

    public function edit($id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // get detail of todos
        $todo = DB::selectOne('SELECT * FROM todo WHERE is_visible=1 AND is_delete=0 AND id=? ', [$id]);

        return view('todo.edit', [
            'todo' => $todo,
        ]);
    }

    public function del($id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        if (isset($id) && !empty($id)) {

            // get company
            $todo = DB::selectOne('SELECT * FROM todo WHERE id = ?', [$id]);

            if (isset($todo) && !empty($todo)) {
                $title = $todo->title;

                // delete company
                DB::delete('DELETE FROM todo WHERE id = ?', [$id]);

                return redirect('todo')->with([
                    'flash_message' => 'Your Todo, '.$title.' has been delete successfully!',
                    'flash_type' => 'success'
                ]);

            } else {
                return redirect('todo')->with([
                    'flash_message' => 'Error! Todo don\'t exists!',
                    'flash_type' => 'danger'
                ]);
            }
        }

        return view('todo.del');
    }

    public function about2()
    {
        //
        return view('todo.about');
    }

    public function UploadT()
    {
        /*function file_get_contents_curl($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
            curl_setopt($ch, CURLOPT_URL, $url);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }*/
        //$url = 'https://api.openprocurement.org/api/2.3/tenders';
        //$data = file_get_contents_curl($url);

        $data = file_get_contents('https://api.openprocurement.org/api/2.3/tenders');
        $d = json_decode($data);

        echo '==========';
        echo '<pre>';
        //print_r($data);
        print_r($d->data);
        echo '</pre>';
        exit;
    }
}
