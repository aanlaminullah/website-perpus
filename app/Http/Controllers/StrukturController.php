<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    //
    public function index()
    {
        $struktur = Struktur::with('parent')
            ->orderBy('parent_id')
            ->orderBy('id')
            ->get();

        $allNodes = Struktur::all();

        return view('edit.struktur', compact('struktur', 'allNodes'));
    }

    public function edit($id)
    {
        $node = Struktur::findOrFail($id);
        $allNodes = Struktur::where('id', '!=', $id)->get(); // Ambil semua node kecuali node yang diedit

        return view('edit.struktur-edit', compact('node', 'allNodes'));
    }

    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $request->validate([
            'jabatan' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:strukturs,id', // Ganti 'strukturnya' dengan nama tabel Anda
        ]);

        // 2. Buat instance model baru
        $struktur = new Struktur;

        // 3. Isi atribut model dengan data dari request
        $struktur->jabatan = $request->jabatan;
        $struktur->nama = $request->nama;
        $struktur->parent_id = $request->parent_id;

        // 4. Simpan model ke database
        $struktur->save();

        // 5. Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('struktur.index')->with('success', 'Anggota struktur berhasil ditambahkan!');
    }

    public function update(Request $request, Struktur $struktur)
    {
        // Validasi input
        $request->validate([
            'jabatan' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:strukturs,id', // Sesuaikan 'strukturnya' dengan nama tabel Anda
        ]);

        // Perbarui data
        $struktur->jabatan = $request->jabatan;
        $struktur->nama = $request->nama;
        $struktur->parent_id = $request->parent_id;

        // Simpan perubahan
        $struktur->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('struktur.index')->with('success', 'Data struktur organisasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID dan hapus
        $node = Struktur::findOrFail($id);
        $node->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('struktur.index')->with('success', 'Anggota struktur berhasil dihapus!');
    }
}
