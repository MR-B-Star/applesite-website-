<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('login');
    }

    // Proses Login (dapat username)
    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // contoh login sederhana (tidak pakai database)
        if ($username && $password) {
            session(['user' => $username]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Username atau password tidak boleh kosong!');
        }
    }

    // Dashboard
    public function dashboard()
    {
        if (!session()->has('user')) {
            return redirect('/login');
        }

        return view('dashboard', [
            'username' => session('user')
        ]);
    }

    // Halaman Pengelolaan (data apel)
    public function pengelolaan()
    {
        if (!session()->has('user')) {
            return redirect('/login');
        }

        $data = [
            ['id' => 1, 'jenis' => 'Apel Merah', 'harga' => 10000],
            ['id' => 2, 'jenis' => 'Apel Hijau', 'harga' => 12000],
            ['id' => 3, 'jenis' => 'Apel Fuji', 'harga' => 15000],
            ['id' => 4, 'jenis' => 'Apel Malang', 'harga' => 9000],
        ];

        return view('pengelolaan', compact('data'));
    }


    // Halaman Profile
    public function profile()
    {
        if (!session()->has('user')) {
            return redirect('/login');
        }

        return view('profile', [
            'username' => session('user')
        ]);
    }
}
