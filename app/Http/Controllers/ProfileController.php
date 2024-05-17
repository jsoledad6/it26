<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function edit()
    {
        return view('editprofile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'gender' => 'nullable|string',
            'birthday' => 'nullable|date',
            'contact' => 'nullable|string|max:255',
            'job_description' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
        $user->contact = $request->input('contact');
        $user->job_description = $request->input('job_description');
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
