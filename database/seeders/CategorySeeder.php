<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Tarian Tradisional',
            'Musik Daerah',
            'Makanan Tradisional',
            'Rumah Adat',
            'Pakaian Adat',
            'Upacara Adat',
            'Bahasa & Aksara',
            'Senjata Tradisional',
            'Permainan Tradisional',
            'Kerajinan Tangan',
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate(
                ['slug' => Str::slug($name)], // kunci unik
                ['name' => $name]
            );
        }
    }
}
