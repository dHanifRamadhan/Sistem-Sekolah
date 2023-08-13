<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return view('dashboard');
        } else {
            if (Auth::user()->role == 'admin') {
                return view('admin.dashboard');
            } elseif (Auth::user()->role == 'guru') {
                return view('guru.dashboard');
            } elseif (Auth::user()->role == 'murid') {
                return view('murid.dashboard');
            } else {
                abort('403', 'Peran tidak terdapat di database!');
            }
        }
    }
}
