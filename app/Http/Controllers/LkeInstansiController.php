<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LkeInstansiController extends Controller
{
    public function lke_instansi()
    {
        return view('lke_instansi/lke_instansi', [
            'title' => "Lke Instansi"
        ]);
    }

    public function penilaian_instansi()
    {
        return view('lke_instansi/form_penilaian', [
            'title' => "Form Penilaian Instansi"
        ]);
    }
}
