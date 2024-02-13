<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            $adminId = Admin::select()->where('email', '=', $request->email)->get();

            $request->session()->put('session_id', $adminId[0]->adminid);
            return redirect('/home');
        }

        return redirect('login');
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
