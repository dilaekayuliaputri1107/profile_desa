<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Mengembalikan tampilan Halaman Utama (Landing Page / Profil)
     */
    public function satu()
    {
        return view('halaman_satu');
    }

    /**
     * Mengembalikan tampilan Halaman Dua (Detail Proyek & Form)
     */
    public function dua()
    {
        return view('halaman_dua');
    }
}