<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
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
        $struktur = Struktur::whereNull('parent_id')->with('children')->get();
        return view('landing', compact('visiMisi', 'tugasFungsi', 'struktur'));
    }
}
