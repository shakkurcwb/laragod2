<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('locale');
    }

    public function edit(Request $request)
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        // 
    }
}
