<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('locale');
    }

    public function index(Request $request)
    {
        return view('help');
    }

    public function search(Request $request)
    {
        return view('help');
    }
}