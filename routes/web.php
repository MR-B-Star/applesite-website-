<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Session;

// Halaman Login (GET menampilkan form, POST memproses login)
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'doLogin'])->name('doLogin');

// Redirect root ("/") langsung ke halaman login agar rapi
Route::get('/', function() {
    return redirect()->route('login');
});

// Logout (hapus session dan kembali ke login)
Route::post('/logout', function() {
    Session::flush();
    return redirect()->route('login');
})->name('logout');

// Dashboard utama - informasi apel
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Halaman profil pengguna (termasuk tombol logout)
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Halaman pengelolaan data apel (CRUD / daftar harga)
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
