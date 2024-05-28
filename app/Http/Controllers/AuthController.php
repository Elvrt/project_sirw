<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RoleModel;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->id_role === 9) {
                // jika user rw
                return redirect()->intended('/RW');
            } else if (in_array(auth()->user()->id_role, range(1, 8))) {
                // jika user rt
                return redirect()->intended('/RT');
            }
        }

        // jika username atau password salah
        // kirimkan session error sesuai dengan jenis kesalahan
        if (empty(User::where('username', $request->username)->first())) {
            // jika username tidak ditemukan
            return back()->with('error', 'Username tidak ditemukan');
        } else {
            // jika password salah
            return back()->with('error', 'Password salah');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
