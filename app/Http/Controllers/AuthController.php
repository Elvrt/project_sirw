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
                return redirect()->intended('/rw');
            } else if (
                auth()->user()->id_role === 1 ||
                auth()->user()->id_role === 2 ||
                auth()->user()->id_role === 3 ||
                auth()->user()->id_role === 4 ||
                auth()->user()->id_role === 5 ||
                auth()->user()->id_role === 6 ||
                auth()->user()->id_role === 7 ||
                auth()->user()->id_role === 8
            ) {
                // jika user rt
                return redirect()->intended('/rt');
            } else {
                // jika user warga
                return redirect()->intended('/warga');
            }
        }

        // jika username atau password salah
        // kirimkan session error
        return back()->with('error', 'username atau password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
