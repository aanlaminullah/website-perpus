<?php

namespace App\Http\Controllers;

use App\Models\LensaKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LensaKegiatanController extends Controller
{
    public function index()
    {
        // Urutkan berdasarkan tanggal terbaru
        $lensa = LensaKegiatan::orderBy('tanggal', 'desc')->get();
        return view('lensa.index', compact('lensa'));
    }

    public function galeri()
    {
        // Mengambil semua data lensa kegiatan, diurutkan dari yang terbaru
        $lensa = LensaKegiatan::orderBy('tanggal', 'desc')->get();
        return view('lensa.galeri', compact('lensa'));
    }

    public function create()
    {
        return view('lensa.create');
    }

    public function store(Request $request)
    {
        // PERUBAHAN DISINI: Menambahkan 'avif' pada mimes
        $request->validate([
            'foto' => 'required|mimes:jpeg,png,jpg,avif|max:2048',
            'keterangan' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        // Upload Gambar
        $path = $request->file('foto')->store('lensa-kegiatan', 'public');

        LensaKegiatan::create([
            'foto' => $path,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('lensa.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $lensa = LensaKegiatan::findOrFail($id);
        return view('lensa.edit', compact('lensa'));
    }

    public function update(Request $request, $id)
    {
        $lensa = LensaKegiatan::findOrFail($id);

        // PERUBAHAN DISINI: Menambahkan 'avif' pada mimes
        $request->validate([
            'foto' => 'nullable|mimes:jpeg,png,jpg,avif|max:2048',
            'keterangan' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $data = [
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
        ];

        // Jika ada foto baru diupload
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($lensa->foto && Storage::exists('public/' . $lensa->foto)) {
                Storage::delete('public/' . $lensa->foto);
            }
            // Simpan foto baru
            $data['foto'] = $request->file('foto')->store('lensa-kegiatan', 'public');
        }

        $lensa->update($data);

        return redirect()->route('lensa.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $lensa = LensaKegiatan::findOrFail($id);

        // Hapus file fisik
        if ($lensa->foto && Storage::exists('public/' . $lensa->foto)) {
            Storage::delete('public/' . $lensa->foto);
        }

        $lensa->delete();

        return redirect()->route('lensa.index')->with('success', 'Data berhasil dihapus');
    }
}
