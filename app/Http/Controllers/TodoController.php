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
}