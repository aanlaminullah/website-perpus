<?php

namespace Database\Seeders;

use App\Models\Struktur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kepala = Struktur::create([
            'nama' => 'Budi',
            'jabatan' => 'Kepala Dinas'
        ]);

        $sekretaris = Struktur::create([
            'nama' => 'Siti',
            'jabatan' => 'Sekretaris',
            'parent_id' => $kepala->id
        ]);

        Struktur::create([
            'nama' => 'Andi',
            'jabatan' => 'Kasubbag Umum',
            'parent_id' => $sekretaris->id
        ]);
    }
}
