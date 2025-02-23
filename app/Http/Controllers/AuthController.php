<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // validate the form data
        $request->validate([
            'name' => 'required|string|min:5|max:200',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        // create a new user
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // login the user
        // auth()->login($user);

        // redirect to home page
        return redirect()->route('auth.login.form')->with('success','registered successful :)');
    }
    
    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8'
        ]);
    
        if (Auth::attempt($credentials)) {

            return redirect()->route('home')->with('success','Logged successful :) ');
        } else {
            return back()->withErrors(['login_error' => 'Invalid email or password']);
        }

        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home')->with('success','Logged out successful :)');
    }
    
}
