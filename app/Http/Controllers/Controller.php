<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;

abstract class Controller
{
    public function index()
    {
        $visiMisi = VisiMisi::first();
        return view('landing', compact('visiMisi'));
    }
}
