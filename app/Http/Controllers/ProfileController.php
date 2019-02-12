<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('locale');
    }

    public function edit(Request $request)
    {
        // dd($request->user()->meta);
        return view('profile');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2',
            'password' => 'nullable|string|min:6|confirmed',

            'gender' => 'nullable|string|in:male,female,',
            'birth' => 'nullable|date',

            'avatar' => 'nullable|file|image',

            'company' => 'nullable|string|min:2',
            'position' => 'nullable|string|min:2',
            'country' => 'nullable|string|min:2',
            'city' => 'nullable|string|min:2',

            'headline' => 'nullable|string|min:2',
            'summary' => 'nullable|string|min:20',
            'interests' => 'nullable|string|min:2',

            'facebook' => 'nullable|string|min:2',
            'instagram' => 'nullable|string|min:2',
            'linkedin' => 'nullable|string|min:2',
            'twitter' => 'nullable|string|min:2',
        ]);

        // Update Password
        if (!empty($validated['password']))
        {
            $request->user()->update([
                'password' => Hash::make($validated['password']),
            ]);
        }

        // Update Avatar
        if ($request->file('avatar'))
        {
            $avatar = $request->file('avatar');

            $d = $request->user()->meta->update([
                'avatar' => $avatar->storeAs(
                    'avatars', $request->user()->id . '.' . $avatar->getClientOriginalExtension()
               ),
            ]);
        }

        $request->user()->update([
            'name' => $validated['name'],
        ]);

        $request->user()->meta->update([
            'gender' => $validated['gender'],
            'birth' => $validated['birth'],
            
            'birth' => $validated['birth'],

            'position' => $validated['position'],
            'company' => $validated['company'],
            'country' => $validated['country'],
            'city' => $validated['city'],

            'headline' => $validated['headline'],
            'summary' => $validated['summary'],
            'interests' => $validated['interests'],

            'facebook' => $validated['facebook'],
            'instagram' => $validated['instagram'],
            'linkedin' => $validated['linkedin'],
            'twitter' => $validated['twitter'],
        ]);

        return redirect('/profile')->with('success', 'Profile updated.');
    }
}
