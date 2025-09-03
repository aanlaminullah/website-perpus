<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMisi::create([
            'visi' => 'Mewujudkan layanan kearsipan dan perpustakaan yang modern, inklusif, dan berdaya guna untuk mendukung tata kelola pemerintahan yang baik.',
            'misi' => json_encode([
                'Meningkatkan kualitas pengelolaan arsip.',
                'Mendorong literasi informasi dan membaca masyarakat.',
                'Mengembangkan sistem layanan berbasis teknologi.'
            ]),
        ]);
    }
}
