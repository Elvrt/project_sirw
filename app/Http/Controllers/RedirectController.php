<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->id_role === 9) {
            return redirect('/RW');
        } else if (in_array(auth()->user()->id_role, range(1, 8))) {
            return redirect('/RT');
        }
    }
}
