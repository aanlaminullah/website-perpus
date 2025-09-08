<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kepala = \App\Models\Struktur::create([
            'nama' => 'Budi',
            'jabatan' => 'Kepala Dinas'
        ]);

        $sekretaris = \App\Models\Struktur::create([
            'nama' => 'Siti',
            'jabatan' => 'Sekretaris',
            'parent_id' => $kepala->id
        ]);

        \App\Models\Struktur::create([
            'nama' => 'Andi',
            'jabatan' => 'Kasubbag Umum',
            'parent_id' => $sekretaris->id
        ]);
    }
}
