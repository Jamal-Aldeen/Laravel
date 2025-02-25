<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    public function showAdminLoginForm() {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8'
        ]);
    
        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()->route('admin.dashboard')->with('success','Admin Logged successful :) ');
        } else {
            return back()->withErrors(['admin-login-error' => 'Invalid email or password']);
        }  
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','admin Logged out successful :)');
    }
}
