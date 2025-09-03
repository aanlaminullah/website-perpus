<?php

namespace App\Http\Controllers;

use App\Models\TugasFungsi;
use Illuminate\Http\Request;

class TugasFungsiController extends Controller
{
    public function index()
    {
        $tugasFungsi = TugasFungsi::first();
        return view('edit.tugasfungsi', compact('tugasFungsi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'tugas' => 'required',
            'fungsi' => 'required|array',
        ]);

        $tugasFungsi = TugasFungsi::first();
        $tugasFungsi->tugas = $request->tugas;
        $tugasFungsi->fungsi = json_encode($request->fungsi);
        $tugasFungsi->save();

        return redirect()->route('tugasfungsi.index')->with('success', 'Tugas dan Fungsi berhasil diperbarui.');
    }
}
