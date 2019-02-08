<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('locale');
    }

    public function edit(Request $request)
    {
        return view('settings');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'theme' => 'nullable|string|min:2',
            'language' => 'nullable|string|min:2',
        ]);

        $request->user()->meta->update([
            'theme' => $validated['theme'],
            'language' => $validated['language'],
        ]);

        return redirect('/settings')->with('success', 'Settings updated.');
    }
}
