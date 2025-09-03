<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    //
    public function index()
    {
        $visiMisi = VisiMisi::first();
        return view('edit.visimisi', compact('visiMisi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required|array',
        ]);

        $visiMisi = VisiMisi::first();
        $visiMisi->visi = $request->visi;
        $visiMisi->misi = json_encode($request->misi);
        $visiMisi->save();

        return redirect()->route('visimisi.index')->with('success', 'Visi dan Misi berhasil diperbarui.');
    }
}
