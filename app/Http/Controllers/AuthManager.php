<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            // Check the authenticated user's role
            $user = Auth::user();
            if ($user->role === 'doctor') {
                // Redirect doctors to a specific route
                return redirect()->route('home')->with('success', 'Login successful.');
            } else {
                // Redirect others to the home page
                return redirect()->route('welcome')->with('success', 'Login successful.');
            }
        }
        return redirect(route('login'))->with("error", "Invalid login credentials.");
    }

    function registerPost(Request $request){
        \Log::info($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role;

        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with('error', 'Registration failed. Please try again.');
        }
        return redirect(route('login'))->with('success', 'Registration successful. You can now login.');
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'))->with('success', 'Logged out successfully.');
    }
}
