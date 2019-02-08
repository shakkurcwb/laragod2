<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('locale');
    }

    public function create(Request $request)
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        // 
    }
}
