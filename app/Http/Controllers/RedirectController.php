<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->id_role === 9) {
            return redirect('/rw');
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
            return redirect('/rt');
        } else {
            return redirect('/warga');
        }
    }
}
