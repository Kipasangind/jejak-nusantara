<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Culture;
use Illuminate\Support\Str;

class CultureSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title' => 'Tari Saman',
                'category_id' => 1,
                'province' => 'Aceh',
                'description' => 'Tari tradisional Aceh yang terkenal dengan gerakan cepat dan kekompakan penari.'
            ],
            [
                'title' => 'Rumah Gadang',
                'category_id' => 4,
                'province' => 'Sumatera Barat',
                'description' => 'Rumah adat Minangkabau dengan atap melengkung seperti tanduk kerbau.'
            ],
            [
                'title' => 'Angklung',
                'category_id' => 2,
                'province' => 'Jawa Barat',
                'description' => 'Alat musik tradisional dari bambu yang dimainkan dengan cara digoyangkan.'
            ],
            [
                'title' => 'Rendang',
                'category_id' => 3,
                'province' => 'Sumatera Barat',
                'description' => 'Makanan tradisional Minangkabau yang terkenal hingga mancanegara.'
            ],
            [
                'title' => 'Tari Kecak',
                'category_id' => 1,
                'province' => 'Bali',
                'description' => 'Tari tradisional Bali yang menceritakan kisah Ramayana.'
            ],
            [
                'title' => 'Pakaian Adat Ulos',
                'category_id' => 5,
                'province' => 'Sumatera Utara',
                'description' => 'Kain tradisional Batak yang sarat makna budaya.'
            ],
            [
                'title' => 'Upacara Rambu Solo',
                'category_id' => 6,
                'province' => 'Sulawesi Selatan',
                'description' => 'Upacara adat pemakaman masyarakat Toraja.'
            ],
            [
                'title' => 'Bahasa Jawa',
                'category_id' => 7,
                'province' => 'Jawa Tengah',
                'description' => 'Bahasa daerah dengan tingkat tutur yang khas.'
            ],
            [
                'title' => 'Senjata Keris',
                'category_id' => 8,
                'province' => 'Jawa',
                'description' => 'Senjata tradisional yang dianggap memiliki nilai spiritual.'
            ],
            [
                'title' => 'Permainan Congklak',
                'category_id' => 9,
                'province' => 'Nusantara',
                'description' => 'Permainan tradisional yang dimainkan dengan papan dan biji.'
            ],
        ];

        foreach ($data as $item) {
            Culture::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'category_id' => $item['category_id'],
                'province' => $item['province'],
                'description' => $item['description'],
                'image' => null,
                'created_by' => 1
            ]);
        }
    }
}
