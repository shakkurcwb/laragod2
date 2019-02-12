<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User as UserModel;

class DashboardController extends Controller
{
    protected $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;

        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('locale');
    }

    public function index(Request $request)
    {
        $usersCount = $this->userModel->count();
        $latestUsers = $this->userModel->orderBy('created_at', 'DESC')->limit(6)->get();
        
        return view('dashboard')
            ->with('usersCount', $usersCount)
            ->with('latestUsers', $latestUsers);
    }
}
