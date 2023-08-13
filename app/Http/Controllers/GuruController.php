<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class GuruController extends Controller
{
    //
    public function index(Request $request)
    {
        $guru = guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('guru.index')->with(['success' => 'Data berhasil di tambahkan!']);
    }
}
