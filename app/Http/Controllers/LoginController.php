<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        // if (Auth::attempt($request->only('username', 'password'))) {
        //     $request->session()->regenerate();

        //     return redirect('/home');
        // }

        if (Auth::guard('web')->attempt($request->only('username', 'password'))) {
            $request->session()->regenerate();

            return redirect('/home');
        }

        return redirect('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registeruser(Request $request)
    {
        Admin::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'namalengkap' => $request->namalengkap,
            'alamat' => $request->alamat,
        ]);
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
