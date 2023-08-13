<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index(Request $request)
    {
        $kelas = kelas::paginate(10);
        return view('admin.kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('admin.kelas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|unique:kelas'
        ]);
        // dd($request);
        kelas::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('kelas.index')->with(['success' => 'Data Kelas Berhasil di tambahkan']);
    }

    public function edit($id)
    {
        $kelas = kelas::find($id)->first();
        return view('admin.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {   
        $this->validate($request, [
            'nama' => 'required|unique:kelas'
        ]);

        $kelas = kelas::find($id);
        $kelas->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('kelas.index')->with(['success' => 'Data kelas berhasil di perbaharui']);
    }

    public function destroy($id)
    {
        kelas::where('id', $id)->delete();
        return redirect()->route('kelas.index')->with(['success' => 'Data kelas berhasil dihapus']);
    }
}
