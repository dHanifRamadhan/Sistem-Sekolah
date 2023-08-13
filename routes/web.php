<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\RuanganKelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route untuk mengamankan button back pada browser
Route::middleware(['middleware' => 'security'])->group(function () {
    // Ini Dashboard
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');
    
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/', [loginController::class, 'home']);
        Route::get('/login', [loginController::class, 'index'])->name('login');
        Route::post('login', [loginController::class, 'login'])->name('auth.login');
        Route::get('/register', [registerController::class, 'index'])->name('register');
        Route::post('/register', [registerController::class, 'register'])->name('auth.register');
    });

    Route::group(['middleware' => ['auth']], function(){
        Route::get('logout', [loginController::class, 'logout'])->name('auth.logout');
    });

    Route::group(['middleware' => ['auth', 'role:admin']], function () {
        
        // Untuk Form guru
        Route::get('guru', [guruController::class, 'index'])->name('guru.index');
        Route::post('guru', [guruController::class, 'store'])->name('guru.store');
        Route::get('guru/{id}/edit', [guruController::class, 'edit'])->name('guru.edit');
        Route::put('guru/{id}', [guruController::class, 'update'])->name('guru.update');
        Route::delete('guru/{id}', [guruController::class, 'destroy'])->name('guru.destroy');

        // Untuk Form kelas
        Route::get('kelas', [KelasController::class, 'index'])->name('kelas.index');
        Route::get('kelas/create', [KelasController::class, 'create'])->name('kelas.create');
        Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store');
        Route::get('kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
        Route::put('kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
        Route::delete('kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
        
        // Untuk Form ruang kelas
        Route::get('ruang_kelas', [ruangankelasController::class, 'index'])->name('ruang.index');
        Route::get('ruang_kelas/create', [ruangankelasController::class, 'create'])->name('ruang.create');
        Route::post('ruang_kelas', [ruangankelasController::class, 'store'])->name('ruang.store');
        Route::get('ruang_kelas/{id}/edit', [ruangankelasController::class, 'edit'])->name('ruang.edit');
        Route::put('ruang_kelas/{id}', [ruangankelasController::class, 'update'])->name('ruang.update');
        Route::delete('ruang_kelas/{id}', [ruangankelasController::class, 'destroy'])->name('ruang.destroy');
    });
    
    Route::group(['middleware' => ['auth', 'role:guru']], function () {
    });

    Route::group(['middleware' => ['auth', 'role:murid']], function () {
    });
});


// Untuk Form mata_pelajaran
Route::get('mata_pelajaran', [mataPelajaranController::class, 'index'])->name('mapel.index');
Route::get('mata_pelajaran/create', [mataPelajaranController::class, 'create'])->name('mapel.create');
Route::post('mata_pelajaran', [mataPelajaranController::class, 'store'])->name('mapel.store');
Route::get('mata_pelajaran/{id}/edit', [mataPelajaranController::class, 'edit'])->name('mapel.edit');
Route::put('mata_pelajaran/{id}', [mataPelajaranController::class, 'update'])->name('mapel.update');
Route::delete('mata_pelajaran/{id}', [mataPelajaranController::class, 'destroy'])->name('mapel.destroy');
