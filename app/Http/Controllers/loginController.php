<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    //
    public function home()
    {
        return redirect()->route('dashboard');
    }

    public function index(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validasi = $request->only('email', 'password');


        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withInput()->withErrors([
            'email' => 'Email atau Password salah dimasukan!?'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
