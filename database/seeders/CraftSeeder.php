<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CraftSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('crafts')->insert([
            [
                'name' => 'Tas Anyaman',
                'artisan' => 'Budi Santoso',
                'material' => 'Bambu',
                'price' => 75000,
                'description' => 'Tas anyaman buatan tangan untuk aktivitas sehari-hari.',
                'image' => 'tas-anyaman.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vas Bunga Keramik',
                'artisan' => 'Siti Rahma',
                'material' => 'Tanah Liat',
                'price' => 55000,
                'description' => 'Vas keramik dengan desain sederhana untuk mempercantik ruangan.',
                'image' => 'vas-keramik.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hiasan Dinding Kayu',
                'artisan' => 'Andi Pratama',
                'material' => 'Kayu',
                'price' => 45000,
                'description' => 'Hiasan dinding kayu dengan desain dekoratif.',
                'image' => 'hiasan-dinding.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
