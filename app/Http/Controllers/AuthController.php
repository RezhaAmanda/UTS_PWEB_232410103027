<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input username dan password (wajib diisi, tapi tanpa pengecekan ke database)
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Simpan username ke session
        session(['username' => $request->username]);

        // Redirect ke dashboard
        return redirect('/dashboard');
    }

    public function logout()
    {
        // Hapus session username
        session()->forget('username');

        // Redirect ke halaman login
        return redirect('/login');
    }
}
