<?php

namespace App\Http\Controllers;

use App\Models\hobi;
use App\Models\registerSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    //
    public function index(Request $request)
    {
        $hobi = hobi::all();
        return view('auth.register', compact('hobi'));
    }

    // Logika register account siswa
    public function register(Request $request)
    {
        if (!$request->img_profile == null) {
            $this->validate($request, [
                'nama' => 'required|string',
                'nisn' => 'required|numeric|min:10',
                'email' => 'required',
                'password' => 'required|min:6',
                'nomor_telepon' => 'required|max:15',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'hobi' => 'required',
                'alamat' => 'required',
                'img_porfile' => 'image|mimes:jpeg,jpg,png,webp'
            ]);
            
            // Untuk memproses web
            $oriNameFile = $request->img_profile->getClientOriginalName();
            $nameFile = time(). "." .$oriNameFile;
            $path = $request->img_profile->storeAs('public/img/siswa', $nameFile);
        } else {
            $this->validate($request, [
                'nama' => 'required|string',
                'nisn' => 'required|numeric|min:10',
                'email' => 'required',
                'password' => 'required|min:6',
                'nomor_telepon' => 'required|max:15',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'hobi' => 'required',
                'alamat' => 'required',
            ]);
        }

        // Untuk Email
        $email = strtolower($request->email);
        $email .= '@utama.id';

        if (!$request->img_profile == null) {
            $registerSiswa = registerSiswa::create([
                'nama' => $request->nama,
                'nama_profile' => $request->nama,
                'nisn' => $request->nisn,
                'email' => $email,
                'password' => $request->password,
                'alamat' => $request->alamat,
                'nomor_telepon' => $request->nomor_telepon,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'path' => $path,
                'ori_nama_file' => $oriNameFile,
            ]);
        } else {
            $registerSiswa = registerSiswa::create([
                'nama' => $request->nama,
                'nama_profile' => $request->nama,
                'nisn' => $request->nisn,
                'email' => $email,
                'password' => $request->password,
                'alamat' => $request->alamat,
                'nomor_telepon' => $request->nomor_telepon,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);
        }

        $registerSiswa->hobi()->attach($request->hobi);

        return redirect()->route('login')->with(['success' => 'Registrasi berhasil silakan menunggu di accept oleh admin :)']);
    }
}
