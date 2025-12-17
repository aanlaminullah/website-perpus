<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingStat;

class LandingStatController extends Controller
{
    // Menampilkan halaman dashboard dengan form edit
    public function index()
    {
        // Ambil data pertama, jika tidak ada buat baru (prevent error)
        $stats = LandingStat::firstOrCreate([], [
            'koleksi_buku' => 0,
            'dokumen_arsip' => 0,
            'anggota_aktif' => 0,
            'buku_dibaca' => 0
        ]);

        return view('dashboard', compact('stats'));
    }

    // Menyimpan perubahan
    public function update(Request $request)
    {
        $request->validate([
            'koleksi_buku' => 'required|numeric',
            'dokumen_arsip' => 'required|numeric',
            'anggota_aktif' => 'required|numeric',
            'buku_dibaca'   => 'required|numeric',
        ]);

        // Update data pada row pertama
        $stats = LandingStat::first();
        $stats->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Statistik berhasil diperbarui!');
    }
}
