<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 25; $i++) {
            Book::create([
                'title' => $faker->sentence(4),
                'author' => $faker->name(),
                'category' => $faker->randomElement(['Fiksi', 'Non-Fiksi', 'Sains', 'Sejarah', 'Biografi', 'Teknologi', 'Pendidikan', 'Seni', 'Agama', 'Anak-anak']),
                'year' => $faker->year
            ]);
        }
    }
}
