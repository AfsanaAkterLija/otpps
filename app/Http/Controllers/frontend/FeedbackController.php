<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function give_feedback()
    {
        return view ('frontend.user.feedback');
    }

    public function feedback_submit(Request $request)
    {
        Feedback::create([
            'tourist_id'=> auth()->user()->id,
            'feedback'=>$request->input('feedback'),
        ]);

        return redirect(route('home'))->with('msg','Feedback stored Successfully');

    }
}
