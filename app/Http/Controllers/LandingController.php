<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use App\Models\TugasFungsi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index()
    {
        $visiMisi = VisiMisi::first();
        $tugasFungsi = TugasFungsi::first();
        return view('landing', compact('visiMisi', 'tugasFungsi'));
    }
}
