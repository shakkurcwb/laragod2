<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Feedback as Model;

class FeedbackController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;

        $this->middleware('auth');
        $this->middleware('locale');
    }

    public function create(Request $request)
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|min:2',
            'description' => 'required|string|min:10',
        ]);

        $this->model->create([
            'subject' => $validated['subject'],
            'description' => $validated['description'],
            'user_id' => $request->user()->id,
        ]);

        return redirect('/feedback')->with('success', 'Thanks for your feedback, we really appreciate it!');
    }
}
