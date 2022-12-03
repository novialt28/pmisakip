<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LkeUnitController extends Controller
{
    public function lke_unit()
    {
        return view('lke_unit/lke_unit', [
            'title' => "Lke Unit"
        ]);
    }

    public function penilaian_unit()
    {
        return view('lke_unit/form_penilaian', [
            'title' => "Form Penilaian Unit"
        ]);
    }
}
