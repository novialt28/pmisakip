<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LkeGabunganController extends Controller
{
    public function lke_gabungan()
    {
        return view('lke_gabungan/lke_gabungan', [
            'title' => "Lke Gabungan"
        ]);
    }

    public function penilaian_gabungan() 
    {
        return view('lke_gabungan/form_penilaian', [
            'title' => "Form Penilaian Gabungan"
        ]);
    }
}
