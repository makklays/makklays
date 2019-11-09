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
        return view('feedback.wait');
    }
}
