<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            [
                'nama_menu' => 'Nasi Goreng',
                'harga' => 15000,
                'kategori' => 'makanan',
                'deskripsi' => 'Nasi yang digoreng dengan paduan telur di dalamnya',
            ],
            [
                'nama_menu' => 'Mie Goreng',
                'harga' => 12000,
                'kategori' => 'makanan',
                'deskripsi' => 'Mie yang digoreng dengan paduan telur di dalamnya',
            ],
            [
                'nama_menu' => 'Es Durian',
                'harga' => 8000,
                'kategori' => 'minuman',
                'deskripsi' => 'Es Durian khas Purwokerto',
            ],
            [
                'nama_menu' => 'Es teh',
                'harga' => 4000,
                'kategori' => 'minuman',
                'deskripsi' => 'Es Teh Manis',
            ],
        ]);
    }
}
