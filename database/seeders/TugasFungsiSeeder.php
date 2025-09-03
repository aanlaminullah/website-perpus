<?php

namespace Database\Seeders;

use App\Models\TugasFungsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasFungsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TugasFungsi::create([
            'tugas' => 'Dinas Kearsipan dan Perpustakaan mempunyai tugas melaksanakan urusan pemerintahan daerah di bidang kearsipan dan perpustakaan.',
            'fungsi' => json_encode([
                'Perumusan kebijakan teknis bidang kearsipan dan perpustakaan.',
                'Penyelenggaraan urusan pemerintahan & pelayanan publik.',
                'Pengelolaan arsip dinamis dan statis.',
                'Penyediaan layanan informasi dan literasi.'
            ]),
        ]);
    }
}
