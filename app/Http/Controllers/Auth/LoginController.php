<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomTable; // Pastikan Anda mengimpor model yang sesuai

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'NIK' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('NIK', 'password');

        // Lakukan validasi berdasarkan database
        if (CustomTable::where('NIK', $credentials['NIK'])->where('password', $credentials['password'])->exists()) {
            // Login berhasil
            return redirect()->route('dashboard.index'); // Gantilah 'dashboard' dengan nama rute ke halaman dashboard Anda.
        }

        // Jika validasi gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors(['NIK' => 'NIK atau password salah.'])->withInput();
    }
}
