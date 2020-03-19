<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        if (!isset($user_id) || empty($user_id)) {
            return redirect('/');
        }

        $feedbacks = Feedback::orderBy('created_at', 'DESC')->paginate(10);
        return view('feedback.index', [
            'items' => $feedbacks,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $id)
    {
        $user_id = auth()->id();
        if (!isset($user_id) || empty($user_id)) {
            return redirect('/');
        }

        $feedback = Feedback::where(['id' => $id])->first();

        return view('feedback.show', [
            'item' => $feedback,
        ]);
    }

    public function wait()
    {
        $og['title'] = 'Makklays | ' . trans('wait.i_wait_you_');
        $og['url'] = 'http://makklays.com.ua/'. app()->getLocale() .'/wait';
        $og['image'] = 'http://makklays.com.ua/img/wait.jpg';

        return view('feedback.wait', [ 'og' => $og ]);
    }

    public function wait2()
    {
        $og['title'] = 'Makklays | ' . trans('wait.i_wait_you_');
        $og['url'] = 'http://makklays.com.ua/'. app()->getLocale() .'/wait';
        $og['image'] = 'http://makklays.com.ua/img/wait.jpg';

        return view('feedback.wait2', ['og' => $og ]);
    }
}
