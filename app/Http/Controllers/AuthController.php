<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('page.login');
    }

    public function register()
    {
        return view('page.register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // cek apakah login valid
        if (Auth::attempt($credentials)) {
            // cek apakah user status = active
            if (Auth::user()->status != 'active')
            {  
                //session untuk akun yang statusnya inactive akan dipaksa logout 
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet. Please contact admin!');
                return redirect('/signin');
            }

            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }

            if (Auth::user()->role_id == 2) {
                return redirect('dashboard');
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login Invalid');
        return redirect('/signin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('signin');
    }

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'password' => 'required|min:8|max:255',
            'phone' => 'required|max:255',
        ]);

        // Hashing password
        $request['password'] = Hash::make($request->password);
        // $user itu diambil dari model User.php
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Register success. Please contact admin for approval!');
        return redirect('signup');
    }
}
