<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthWargaController extends Controller
{
    public function index()
    {
        return view('warga.index');
    }
}
