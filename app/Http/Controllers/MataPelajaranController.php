<?php

namespace App\Http\Controllers;

use App\Models\mata_pelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class MataPelajaranController extends Controller
{
    //
    public function index()
    {
        $mapel = mata_pelajaran::paginate(10);
        return view('admin.mata_pelajaran.index', compact('mapel'));
    }

    public function create()
    {
        return view('admin.mata_pelajaran.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|unique:mata_pelajarans'
        ]);

        mata_pelajaran::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('mapel.index')->with(['success' => 'Data mapel berhasil di tambahkan']);
    }

    public function edit($id)
    {
        $mapel = mata_pelajaran::find($id)->first();
        return view('admin.mata_pelajaran.edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|unique:mata_pelajarans'
        ]);

        $mapel = mata_pelajaran::find($id);
        $mapel->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('mapel.index')-with(['success' => 'Data mapel berhasil di perbaharui']);
    }

    public function destroy($id)
    {
        mata_pelajaran::where('id', $id)->delete();
        return redirect()->route('mapel.index')->with(['success' => 'Data mapel berhasil di hapus']);
    }
}
