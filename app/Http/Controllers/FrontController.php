<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // Kode logika untuk halaman utama
        return view('front.index'); // Ganti dengan view yang sesuai
    }
}
