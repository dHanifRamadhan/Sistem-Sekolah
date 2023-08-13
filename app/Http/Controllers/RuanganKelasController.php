<?php

namespace App\Http\Controllers;

use App\Models\ruangan_kelas;
use Illuminate\Http\Request;

class RuanganKelasController extends Controller
{
    //
    public function index(Request $request)
    {
        $ruang = ruangan_kelas::paginate(10);
        return view('admin.ruang.index', compact('ruang'));
    }
    // Create
    public function create(Request $request)
    {
        return view('admin.ruang.create');
    }
    // Logika simpan ke database
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:ruangan_kelas'
        ]);

        ruangan_kelas::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('ruang.index')->with(['success' => 'Data ruangan kelas berhasil di simpan']);
    }
    // Edit
    public function edit(Request $request, $id)
    {
        $ruang = ruangan_kelas::find($id)->first();
        return view('admin.ruang.edit', compact('ruang'));
    }
    // Logika edit ke database
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'=> 'required|unique:ruangan_kelas'
        ]);

        $ruang = ruangan_kelas::find($id);
        $ruang->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('ruang.index')->with(['success' => 'Data ruangan kelas berhasil di perbaharui']);
    }
    // Logika hapus 
    public function destroy(Request $request, $id)
    {
        ruangan_kelas::where('id', $id)->delete();
        return redirect()->route('ruang.index')->with(['success' => 'Data ruangan kelas berhasil di hapus']);
    }
}
